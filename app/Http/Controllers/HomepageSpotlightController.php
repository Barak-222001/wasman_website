<?php
namespace App\Http\Controllers;

use App\Models\HomepageSpotlight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomepageSpotlightController extends Controller
{
    private function disk(): string
    {
        return config('filesystems.homepage_spotlights_disk', 'public');
    }

    public function homepage()
    {
        $homeSpotlight = HomepageSpotlight::where('is_featured', true)->latest('id')->first();
        return view('welcome', compact('homeSpotlight'));
    }

    public function publicResearchPage()
    {
        $currentSpotlight = HomepageSpotlight::where('is_featured', true)->latest('id')->first();
        $previousSpotlights = HomepageSpotlight::whereNotNull('published_at')
            ->when($currentSpotlight, fn ($query) => $query->where('id', '!=', $currentSpotlight->id))
            ->orderByDesc('published_at')->orderByDesc('id')->get();
        return view('research_spotlight', compact('currentSpotlight', 'previousSpotlights'));
    }

    public function index()
    {
        $spotlights = HomepageSpotlight::latest('id')->paginate(15);
        return view('admin.homepage_spotlights', compact('spotlights'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'heading' => ['required', 'string', 'max:200'],
            'intro' => ['required', 'string', 'max:1000'],
            'title' => ['required', 'string', 'max:255'],
            'authors' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:2500'],
            'flyer' => ['required', 'file', 'mimes:jpg,jpeg,png,webp', 'max:8192'],
            'article' => ['required', 'file', 'mimes:pdf', 'max:20480'],
            'publish_now' => ['nullable', 'boolean'],
        ]);
        $disk = $this->disk();
        $flyer = $request->file('flyer')->store('homepage-spotlights/flyers', $disk);
        try {
            $article = $request->file('article')->store('homepage-spotlights/articles', $disk);
            if (!$flyer || !$article) { throw new \RuntimeException('File storage failed.'); }
            DB::transaction(function () use ($validated, $flyer, $article) {
                if (!empty($validated['publish_now'])) {
                    HomepageSpotlight::where('is_featured', true)->update(['is_featured' => false]);
                }
                HomepageSpotlight::create([
                    'heading' => $validated['heading'],
                    'intro' => $validated['intro'],
                    'title' => $validated['title'],
                    'authors' => $validated['authors'],
                    'description' => $validated['description'],
                    'flyer_path' => $flyer,
                    'article_path' => $article,
                    'is_featured' => !empty($validated['publish_now']),
                    'published_at' => !empty($validated['publish_now']) ? now() : null,
                ]);
            });
        } catch (\Throwable $e) {
            if ($flyer) Storage::disk($disk)->delete($flyer);
            if (!empty($article)) Storage::disk($disk)->delete($article);
            throw $e;
        }
        return redirect()->route('admin.homepage-spotlights.index')->with('success', 'Research spotlight saved.');
    }

    public function feature(HomepageSpotlight $spotlight)
    {
        DB::transaction(function () use ($spotlight) {
            HomepageSpotlight::where('is_featured', true)->update(['is_featured' => false]);
            $spotlight->update(['is_featured' => true, 'published_at' => $spotlight->published_at ?? now()]);
        });
        return back()->with('success', 'Homepage featured research updated.');
    }

    public function destroy(HomepageSpotlight $spotlight)
    {
        $disk = $this->disk();
        $paths = [$spotlight->flyer_path, $spotlight->article_path];
        $spotlight->delete();
        Storage::disk($disk)->delete($paths);
        return back()->with('success', 'Research spotlight deleted.');
    }

    public function flyer(HomepageSpotlight $spotlight, Request $request)
    {
        abort_unless($spotlight->is_featured || $spotlight->published_at !== null, 404);
        $storage = Storage::disk($this->disk());
        abort_unless($storage->exists($spotlight->flyer_path), 404);
        $file = $storage->get($spotlight->flyer_path);
        $mime = $storage->mimeType($spotlight->flyer_path) ?: 'image/jpeg';
        $disposition = $request->boolean('download') ? 'attachment' : 'inline';
        return response($file, 200, ['Content-Type' => $mime, 'Content-Disposition' => $disposition . '; filename="research-flyer.' . pathinfo($spotlight->flyer_path, PATHINFO_EXTENSION) . '"', 'X-Content-Type-Options' => 'nosniff']);
    }

    public function article(HomepageSpotlight $spotlight, Request $request)
    {
        abort_unless($spotlight->is_featured || $spotlight->published_at !== null, 404);
        $storage = Storage::disk($this->disk());
        abort_unless($storage->exists($spotlight->article_path), 404);
        return response($storage->get($spotlight->article_path), 200, ['Content-Type' => 'application/pdf', 'Content-Disposition' => ($request->boolean('download') ? 'attachment' : 'inline') . '; filename="research-article.pdf"', 'X-Content-Type-Options' => 'nosniff']);
    }
}
