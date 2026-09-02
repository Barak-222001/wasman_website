<?php

namespace App\Http\Controllers;

use App\Models\PartnerApplication;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([

            'organizationName' => 'required|string|max:255',

            'contactPerson' => 'required|string|max:255',

            'email' => 'required|email|max:255',

            'phoneNumber' => 'nullable|string|max:20',

            'country' => 'nullable|string|max:255',

            'partnershipType' => 'required|string|max:255',

            'partnershipMessage' => 'required|string|max:2000',

        ]);


        PartnerApplication::create([

            'organization_name' => $validated['organizationName'],

            'contact_person' => $validated['contactPerson'],

            'email' => $validated['email'],

            'phone_number' => $validated['phoneNumber'] ?? null,

            'country' => $validated['country'] ?? null,

            'partnership_type' => $validated['partnershipType'],

            'partnership_message' => $validated['partnershipMessage'],

        ]);


        return redirect()
            ->route('partner-with-us')
            ->with(
                'success',
                'Your partnership request has been submitted successfully.'
            );
    }
}