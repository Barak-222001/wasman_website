<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class KnowledgeBiteController extends Controller
{
    private array $documents = [
        'wetlands' => 'knowledge-bite-wetlands-conservation.pdf',
        'smalltooth-sawfish' => 'knowledge-bite-smalltooth-sawfish.pdf',
        'leatherback-sea-turtle' => 'knowledge-bite-leatherback-sea-turtle.pdf',
        'scalloped-hammerhead' => 'knowledge-bite-scalloped-hammerhead.pdf',
        'aquatic-biodiversity' => 'knowledge-bite-aquatic-biodiversity.pdf',
    ];

    private function documentPath(string $slug): string
    {
        abort_unless(isset($this->documents[$slug]), 404);

        $path = public_path('resources/knowledge-bites/' . $this->documents[$slug]);
        abort_unless(File::exists($path), 404, 'Knowledge Bite PDF not found.');

        return $path;
    }

    public function read(string $slug): BinaryFileResponse
    {
        return response()->file(
            $this->documentPath($slug),
            ['Content-Type' => 'application/pdf']
        );
    }

    public function download(string $slug): BinaryFileResponse
    {
        return response()->download(
            $this->documentPath($slug),
            $this->documents[$slug],
            ['Content-Type' => 'application/pdf']
        );
    }
}
