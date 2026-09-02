<?php

namespace App\Http\Controllers;

use App\Models\GeneralEnquiry;
use Illuminate\Http\Request;

class GeneralEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'phone_number' => [
                'nullable',
                'string',
                'max:30',
            ],

            'enquiry_type' => [
                'required',
                'string',
                'max:255',
            ],

            'message' => [
                'required',
                'string',
                'max:5000',
            ],
        ]);

        GeneralEnquiry::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'] ?? null,
            'enquiry_type' => $validated['enquiry_type'],
            'message' => $validated['message'],
            'is_read' => false,
        ]);

        return redirect()
            ->route('general-enquiries')
            ->with(
                'success',
                'Your enquiry has been submitted successfully. Thank you for contacting WASMaN.'
            );
    }
}