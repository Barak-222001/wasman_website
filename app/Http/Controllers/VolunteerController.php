<?php

namespace App\Http\Controllers;

use App\Models\VolunteerApplication;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([

            'fullName' => 'required|string|max:255',

            'email' => 'required|email|max:255',

            'phoneNumber' => 'nullable|string|max:20',

            'country' => 'nullable|string|max:255',

            'volunteerArea' => 'required|string|max:255',

            'availability' => 'required|string|max:255',

            'reason' => 'required|string|max:1000',

        ]);


        VolunteerApplication::create([

            'full_name' => $validated['fullName'],

            'email' => $validated['email'],

            'phone_number' => $validated['phoneNumber'] ?? null,

            'country' => $validated['country'] ?? null,

            'volunteer_area' => $validated['volunteerArea'],

            'availability' => $validated['availability'],

            'reason' => $validated['reason'],

        ]);


        return redirect('/volunteer')
            ->with(
                'success',
                'Your volunteer application has been submitted successfully.'
            );
    }
}