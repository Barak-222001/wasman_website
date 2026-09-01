<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\InternApplication;


use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index(Request $request)
    {
        $search = $request->input('search');
        $area = $request->input('area');
        $sort = $request->input('sort', 'newest');
        
        $applications = InternApplication::query()
        ->when($search, function ($query, $search) {
            $query->where('full_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('institution', 'like', "%{$search}%")
                ->orWhere('program', 'like', "%{$search}%")
                ->orWhere('area', 'like', "%{$search}%");
        })
        ->when($area, function ($query, $area) {
            $query->where('area', $area);
            })
        ->when($sort === 'oldest', function ($query) {
            $query->oldest();
            }, function ($query) {
            $query->latest();
})

        ->paginate(10)
        ->withQueryString();

        $totalApplications = InternApplication::count();

        return view('admin', [
            'applications' => $applications,
            'totalApplications' => $totalApplications
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
        // Storage::disk('public')
        //     ->delete($application->document);

        if ($application->document) {
            Storage::disk('public')->delete($application->document);
            }

        $application->delete();

        return redirect()
        ->route('admin.dashboard')
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

    return redirect()
    ->route('admin.dashboard')
    ->with('success', 'Application updated successfully.');
}

}
