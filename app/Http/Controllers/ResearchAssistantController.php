<?php

namespace App\Http\Controllers;

use App\Models\ResearchAssistantApplication;
use Illuminate\Http\Request;

class ResearchAssistantController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([

            'fullName' => 'required|string|max:255',

            'email' => 'required|email|max:255',

            'institution' => 'nullable|string|max:255',

            'researchTopic' => 'required|string|max:255',

            'researchArea' => 'required|string|max:255',

            'timeline' => 'nullable|string|max:255',

            'researchNeeds' => 'required|string|max:2000',

            'document' => 'nullable|file|mimes:pdf,doc,docx|max:5120',

        ]);


        $documentPath = null;


        if ($request->hasFile('document')) {

            $documentPath = $request
                ->file('document')
                ->store(
                    'research_assistant_documents',
                    'public'
                );

        }


        ResearchAssistantApplication::create([

            'full_name' => $validated['fullName'],

            'email' => $validated['email'],

            'institution' => $validated['institution'] ?? null,

            'research_topic' => $validated['researchTopic'],

            'research_area' => $validated['researchArea'],

            'timeline' => $validated['timeline'] ?? null,

            'research_needs' => $validated['researchNeeds'],

            'document' => $documentPath,

        ]);


        return redirect()
            ->route('research-assistant')
            ->with(
                'success',
                'Your research assistance request has been submitted successfully.'
            );
    }
}