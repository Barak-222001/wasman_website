<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicationPublishingController extends Controller
{
    private function disk(): string
    {
        return 'local';
    }

    // PUBLICATIONS PAGE
    public function publicIndex(Request $request)
    {
        $query = Publication::where('is_published', true);

        if ($request->filled('search')) {
            $search = $request->input('search');

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        $publications = $query
            ->orderByDesc('publication_date')
            ->orderByDesc('id')
            ->paginate(12)
            ->withQueryString();

        $featuredPublication = Publication::where('is_published', true)
            ->where('is_featured', true)
            ->orderByDesc('published_at')
            ->first();

        return view('publications', compact(
            'publications',
            'featuredPublication'
        ));
    }

    // ADMINISTRATOR PUBLICATIONS LIST
    public function adminIndex()
    {
        $publications = Publication::orderByDesc('created_at')
            ->paginate(20);

        return view('admin.publications', compact('publications'));
    }

    // UPLOAD A PUBLICATION
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:5000'],
            'category' => ['nullable', 'string', 'max:100'],
            'publication_date' => ['nullable', 'date'],
            'pdf' => ['required', 'file', 'mimes:pdf', 'max:20480'],
            'cover' => ['required', 'image', 'mimes:jpeg,png,webp', 'max:5120'],
            'publish' => ['nullable', 'boolean'],
        ]);

        $disk = $this->disk();
        $pdfPath = null;
        $coverPath = null;

        try {
            $pdfPath = $request->file('pdf')
                ->store('publications/pdfs', $disk);

            $coverPath = $request->file('cover')
                ->store('publications/covers', $disk);

            $published = $request->boolean('publish');

            Publication::create([
                'title' => $validated['title'],
                'author' => $validated['author'] ?? null,
                'description' => $validated['description'],
                'category' => $validated['category'] ?? null,
                'publication_date' => $validated['publication_date'] ?? null,
                'pdf_path' => $pdfPath,
                'cover_path' => $coverPath,
                'is_published' => $published,
                'is_featured' => false,
                'published_at' => $published ? now() : null,
            ]);

        } catch (\Throwable $e) {
            if ($pdfPath) {
                Storage::disk($disk)->delete($pdfPath);
            }

            if ($coverPath) {
                Storage::disk($disk)->delete($coverPath);
            }

            throw $e;
        }

        return redirect()
            ->route('admin.publications.index')
            ->with('success', 'Publication saved successfully.');
    }

    // PUBLISH OR UNPUBLISH
    public function setStatus(Request $request, Publication $publication)
    {
        $request->validate([
            'publish' => ['required', 'boolean'],
        ]);

        $publish = $request->boolean('publish');

        $publication->update([
            'is_published' => $publish,
            'is_featured' => $publish ? $publication->is_featured : false,
            'published_at' => $publish
                ? ($publication->published_at ?? now())
                : null,
        ]);

        return back()->with(
            'success',
            $publish ? 'Publication published.' : 'Publication unpublished.'
        );
    }

    // SELECT FEATURED PUBLICATION
    public function feature(Publication $publication)
    {
        abort_unless($publication->is_published, 422);

        \Illuminate\Support\Facades\DB::transaction(function () use ($publication) {
            Publication::where('is_featured', true)
                ->update(['is_featured' => false]);

            $publication->update(['is_featured' => true]);
        });

        return back()->with('success', 'Featured publication updated.');
    }

    // DELETE PUBLICATION
    public function destroy(Publication $publication)
    {
        $paths = [
            $publication->pdf_path,
            $publication->cover_path,
        ];

        $publication->delete();

        Storage::disk($this->disk())->delete($paths);

        return back()->with('success', 'Publication deleted.');
    }

    // DISPLAY COVER
    public function cover(Publication $publication)
    {
        abort_unless($publication->is_published, 404);

        abort_unless(
            Storage::disk($this->disk())->exists($publication->cover_path),
            404
        );

        return Storage::disk($this->disk())
            ->response($publication->cover_path);
    }

    // READ PDF ONLINE
    public function read(Publication $publication)
    {
        abort_unless($publication->is_published, 404);

        abort_unless(
            Storage::disk($this->disk())->exists($publication->pdf_path),
            404
        );

        return Storage::disk($this->disk())->response(
            $publication->pdf_path,
            null,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline',
            ]
        );
    }

    // DOWNLOAD PDF
    public function download(Publication $publication)
    {
        abort_unless($publication->is_published, 404);

        abort_unless(
            Storage::disk($this->disk())->exists($publication->pdf_path),
            404
        );

        return Storage::disk($this->disk())->download(
            $publication->pdf_path,
            'WASMaN-Publication-' . $publication->id . '.pdf'
        );
    }
}
