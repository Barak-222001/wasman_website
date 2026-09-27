<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class KnowledgeBiteController extends Controller
{
    /**
     * One source of truth for every PDF used by the Knowledge Bite page.
     * Paths are relative to public/resources/knowledge-bites.
     */
    private function documents(): array
    {
        return [
            // Existing weekly / previous Knowledge Bites
            'wetlands' => 'knowledge-bite-wetlands-conservation.pdf',
            'smalltooth-sawfish' => 'knowledge-bite-smalltooth-sawfish.pdf',
            'leatherback-sea-turtle' => 'knowledge-bite-leatherback-sea-turtle.pdf',
            'scalloped-hammerhead' => 'knowledge-bite-scalloped-hammerhead.pdf',
            'aquatic-biodiversity' => 'knowledge-bite-aquatic-biodiversity.pdf',

            // Categorized Knowledge Bite library
            'cat-wetlands-conservation' => 'Aquatic Conservation/Monday Knowledge Bite_Wetlands Conservation.pdf',
            'cat-june-special-issue-1' => 'Aquatic Conservation/Monday Knowledge Bite_June Special Issue 1.pdf',
            'cat-june-special-issue-2' => 'Aquatic Conservation/Monday Knowledge Bite_June Special Issue 2.pdf',
            'cat-june-special-issue-3' => 'Aquatic Conservation/Monday Knowledge Bite_June Special Issue 3.pdf',
            'cat-aquatic-biodiversity' => 'Aquatic Conservation/Monday Knowledge Bite_Aquatic Biodiversity.pdf',

            'cat-msp' => 'Ocean Governance/Monday Knowledge Bite_MSP.pdf',
            'cat-iez' => 'Ocean Governance/Monday Knowledge Bite_IEZ.pdf',

            'cat-blue-economy-progress' => 'Blue Economy_/Monday Knowledge Bite_Blue Economy Progress.pdf',
            'cat-blue-careers' => 'Blue Economy_/Monday Knowledge Bites_Blue Careers.pdf',
            'cat-blue-economy' => 'Blue Economy_/Monday Knowledge Bite_Blue Economy.pdf',

            'cat-coastal-erosion' => 'Climate Change/Coastal Erosion.pdf',
            'cat-climate-change' => 'Climate Change/Monday Knowledge Bite_Climate Change.pdf',

            'cat-iuu-fishing' => 'Fisheries & Aquaculture/Monday Knowledge Bite_IUU Fishing.pdf',
            'cat-fisheries-value-chain-1' => 'Fisheries & Aquaculture/Fisheries Value Chain Part 1.pdf',
            'cat-fisheries-value-chain-2' => 'Fisheries & Aquaculture/Fisheries Value Chain Part 2.pdf',
            'cat-fisheries-value-chain-3' => 'Fisheries & Aquaculture/Fisheries Value Chain Part 3.pdf',
            'cat-fisheries-value-chain-4' => 'Fisheries & Aquaculture/Fisheries Value Chain Part 4.pdf',
            'cat-fisheries-value-chain-5' => 'Fisheries & Aquaculture/Fisheries Value Chain Part 5.pdf',
            'cat-aquaculture' => 'Fisheries & Aquaculture/Monday Knowledge Bite_Aquaculture.pdf',
        ];
    }

    private function resolvePdf(string $slug): string
    {
        $documents = $this->documents();
        abort_unless(isset($documents[$slug]), 404);

        $path = public_path('resources/knowledge-bites/' . $documents[$slug]);
        abort_unless(File::exists($path), 404, 'Knowledge Bite PDF not found.');

        return $path;
    }

    public function read(string $slug)
    {
        $path = $this->resolvePdf($slug);

        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($path) . '"',
            'X-Content-Type-Options' => 'nosniff',
        ]);
    }

    public function download(string $slug)
    {
        $path = $this->resolvePdf($slug);

        return response()->download($path, basename($path), [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
