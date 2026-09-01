<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\InternApplication;
use App\Models\VolunteerApplication;


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

        // CHART BAR
        $areaStats = InternApplication::selectRaw('area, COUNT(*) as total')
        ->groupBy('area')
        ->pluck('total', 'area');

        // CHART 2
        $monthlyStats = InternApplication::selectRaw(
                "strftime('%Y-%m', created_at) as month, COUNT(*) as total"
            )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        return view('admin', [
            'applications' => $applications,
            'totalApplications' => $totalApplications,
            'areaStats' => $areaStats,
            'monthlyStats' => $monthlyStats,
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

// VOLUNTEER

/*
|--------------------------------------------------------------------------
| VOLUNTEER APPLICATIONS
|--------------------------------------------------------------------------
*/

public function volunteers(Request $request)
{
    $search = $request->input('search');
    $area = $request->input('area');
    $sort = $request->input('sort', 'newest');

    $volunteers = VolunteerApplication::query()
    

        ->when($search, function ($query, $search) {

            $query->where(function ($q) use ($search) {

                $q->where('full_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone_number', 'like', "%{$search}%")
                    ->orWhere('country', 'like', "%{$search}%")
                    ->orWhere('volunteer_area', 'like', "%{$search}%")
                    ->orWhere('availability', 'like', "%{$search}%");

            });

        })

        ->when($area, function ($query, $area) {

            $query->where('volunteer_area', $area);

        })

        ->when(
            $sort === 'oldest',

            function ($query) {
                $query->oldest();
            },

            function ($query) {
                $query->latest();
            }
        )

        ->paginate(10)

        ->withQueryString();


    $totalVolunteers = VolunteerApplication::count();
    // CHARTS
        $volunteerAreaStats = VolunteerApplication::selectRaw(
            'volunteer_area, COUNT(*) as total'
        )
        ->groupBy('volunteer_area')
        ->pluck('total', 'volunteer_area');


    $volunteerMonthlyStats = VolunteerApplication::selectRaw(
            "strftime('%Y-%m', created_at) as month, COUNT(*) as total"
        )
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('total', 'month');


   return view('admin-volunteers', [
    'volunteers' => $volunteers,
    'totalVolunteers' => $totalVolunteers,
    'volunteerAreaStats' => $volunteerAreaStats,
    'volunteerMonthlyStats' => $volunteerMonthlyStats,
]);

}


public function editVolunteer(VolunteerApplication $volunteer)
{
    return view('edit-volunteer-application', [
        'volunteer' => $volunteer,
    ]);
}


public function updateVolunteer(
    Request $request,
    VolunteerApplication $volunteer
) {
    $validated = $request->validate([
        'fullName' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phoneNumber' => 'nullable|string|max:20',
        'country' => 'nullable|string|max:255',
        'volunteerArea' => 'required|string|max:255',
        'availability' => 'required|string|max:255',
        'reason' => 'required|string|max:1000',
    ]);


    $volunteer->update([
        'full_name' => $validated['fullName'],
        'email' => $validated['email'],
        'phone_number' => $validated['phoneNumber'] ?? null,
        'country' => $validated['country'] ?? null,
        'volunteer_area' => $validated['volunteerArea'],
        'availability' => $validated['availability'],
        'reason' => $validated['reason'],
    ]);


    return redirect()
        ->route('admin.volunteers')
        ->with(
            'success',
            'Volunteer application updated successfully.'
        );
}


public function destroyVolunteer(VolunteerApplication $volunteer)
{
    $volunteer->delete();

    return redirect()
        ->route('admin.volunteers')
        ->with(
            'success',
            'Volunteer application deleted successfully.'
        );
}

}
