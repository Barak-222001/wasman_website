<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([

            'fullName' =>
                'required|string|max:255',

            'email' =>
                'required|email|max:255',

            'phoneNumber' =>
                'nullable|string|max:30',

            'category' =>
                'required|string|max:255',

            'subject' =>
                'nullable|string|max:255',

            'message' =>
                'required|string|max:5000',

            'attachment' =>
                'nullable|file|mimes:pdf,doc,docx|max:5120',

        ]);


        $attachmentPath = null;


        if ($request->hasFile('attachment')) {

            $attachmentPath = $request
                ->file('attachment')
                ->store(
                    'contact_message_attachments',
                    'public'
                );

        }


        ContactMessage::create([

            'full_name' =>
                $validated['fullName'],

            'email' =>
                $validated['email'],

            'phone_number' =>
                $validated['phoneNumber'] ?? null,

            'category' =>
                $validated['category'],

            'subject' =>
                $validated['subject'] ?? null,

            'message' =>
                $validated['message'],

            'attachment' =>
                $attachmentPath,

            'is_read' =>
                false,

        ]);


        return redirect()
            ->route('leave-message')
            ->with(
                'success',
                'Your message has been sent successfully. Thank you for contacting WASMaN.'
            );
    }
}