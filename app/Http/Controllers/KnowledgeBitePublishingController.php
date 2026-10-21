<?php
namespace App\Http\Controllers;

use App\Models\KnowledgeBite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KnowledgeBitePublishingController extends Controller
{
    private function disk(): string { return config('filesystems.knowledge_bites_disk', 'public'); }

    public function publicIndex()
    {
        $publishedBites = KnowledgeBite::where('is_published', true)
            ->orderByDesc('published_at')->orderByDesc('id')->get();
        return view('knowledge_bite', compact('publishedBites'));
    }

    public function adminIndex()
    {
        $bites = KnowledgeBite::orderByDesc('created_at')->orderByDesc('id')->paginate(20);
        return view('admin.knowledge_bites', compact('bites'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required','string','max:255'],
            'category' => ['nullable','string','max:100'],
            'description' => ['required','string','max:4000'],
            'pdf' => ['required','file','mimes:pdf','max:20480'],
            'cover' => ['required','image','mimes:jpeg,png,webp','max:5120'],
            'publish' => ['nullable','boolean'],
        ]);
        $disk = $this->disk();
        $pdf = null;
        $cover = null;
        try {
            $pdf = $request->file('pdf')->store('knowledge-bites/pdfs', $disk);
            $cover = $request->file('cover')->store('knowledge-bites/covers', $disk);
            $published = $request->boolean('publish');
            KnowledgeBite::create([
                'title' => $validated['title'],
                'category' => $validated['category'] ?? null,
                'description' => $validated['description'],
                'pdf_path' => $pdf, 'cover_path' => $cover,
                'is_published' => $published,
                'published_at' => $published ? now() : null,
            ]);
        } catch (\Throwable $e) {
            if ($pdf) Storage::disk($disk)->delete($pdf);
            if ($cover) Storage::disk($disk)->delete($cover);
            throw $e;
        }
        return redirect()->route('admin.knowledge-bites.index')->with('success', 'Knowledge Bite saved successfully.');
    }

    public function setStatus(Request $request, KnowledgeBite $bite)
    {
        $validated = $request->validate(['publish' => ['required','boolean']]);
        $publish = (bool)$validated['publish'];
        $bite->update(['is_published' => $publish, 'published_at' => $publish ? now() : null]);
        return back()->with('success', $publish ? 'Knowledge Bite published.' : 'Knowledge Bite unpublished.');
    }

    public function destroy(KnowledgeBite $bite)
    {
        $paths = [$bite->pdf_path, $bite->cover_path];
        $bite->delete();
        Storage::disk($this->disk())->delete($paths);
        return back()->with('success', 'Knowledge Bite deleted.');
    }

    public function cover(KnowledgeBite $bite)
    {
        abort_unless($bite->is_published, 404);
        abort_unless(Storage::disk($this->disk())->exists($bite->cover_path), 404);
        return Storage::disk($this->disk())->response($bite->cover_path);
    }

    public function read(KnowledgeBite $bite)
    {
        abort_unless($bite->is_published, 404);
        abort_unless(Storage::disk($this->disk())->exists($bite->pdf_path), 404);
        return Storage::disk($this->disk())->response($bite->pdf_path, null, ['Content-Type' => 'application/pdf', 'Content-Disposition' => 'inline']);
    }

    public function download(KnowledgeBite $bite)
    {
        abort_unless($bite->is_published, 404);
        abort_unless(Storage::disk($this->disk())->exists($bite->pdf_path), 404);
        return Storage::disk($this->disk())->download($bite->pdf_path, 'WASMaN-Knowledge-Bite-'.$bite->id.'.pdf');
    }
}
