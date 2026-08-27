<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternApplication;

class InternController extends Controller
{
    public function create()
    {
        return view('intern');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'fullName' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phoneNumber' => 'required|string|max:20',
        'institution' => 'required|string|max:255',
        'program' => 'required|string',
        'area' => 'required|string',
        'reason' => 'required|string|max:1000',

        'document' => 'required|file|mimes:pdf,doc,docx|max:5120',
    ]);

$documentPath = $request
    ->file('document')
    ->store('intern_documents', 'public');

// map table names with the name values provided by html
InternApplication::create([
        'full_name' => $validated['fullName'],
        'email' => $validated['email'],
        'phone_number' => $validated['phoneNumber'],
        'institution' => $validated['institution'],
        'program' => $validated['program'],
        'area' => $validated['area'],
        'reason' => $validated['reason'],
        'document' => $documentPath,
    ]);

    return redirect('/intern#application-form')
    ->with('success', 'Application submitted successfully.');

}
}