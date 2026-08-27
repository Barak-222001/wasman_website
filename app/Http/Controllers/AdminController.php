<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\InternApplication;


use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index()
    {
        $applications = InternApplication::all();

        return view('admin', [
            'applications' => $applications
        ]);
    }

public function downloadCv(InternApplication $application)
    {
        // route model binding
        
        return Storage::disk('public')
            ->download($application->document);
    }

public function destroy(InternApplication $application)
    {
        Storage::disk('public')
            ->delete($application->document);

        $application->delete();

        return redirect('/admin')
            ->with('success', 'Application deleted successfully.');
    }
public function edit(InternApplication $application)
    {
        return view('edit-intern-application', [
            'application' => $application
        ]);
    }

public function update(Request $request, InternApplication $application)
    {
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:20',
            'institution' => 'required|string|max:255',
            'program' => 'required|string',
            'area' => 'required|string',
            'reason' => 'required|string|max:1000',
        ]);

        $application->update([
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'phone_number' => $validated['phoneNumber'],
            'institution' => $validated['institution'],
            'program' => $validated['program'],
            'area' => $validated['area'],
            'reason' => $validated['reason'],
        ]);

    return redirect('/admin')
        ->with('success', 'Application updated successfully.');
}

}
