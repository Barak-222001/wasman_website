<?php

namespace App\Http\Controllers;

use App\Models\ResearchSpotlightApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResearchSpotlightController extends Controller
{
    public function index()
    {
        return view('research_spotlight');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name'        => ['required', 'string', 'max:255'],
            'email'            => ['required', 'email', 'max:255'],
            'phone'            => ['required', 'string', 'max:50'],
            'institution'      => ['required', 'string', 'max:255'],
            'position'         => ['required', 'string', 'max:255'],
            'country'          => ['required', 'string', 'max:120'],
            'research_title'   => ['required', 'string', 'max:500'],
            'focus_area'       => ['required', 'string', 'max:255'],
            'research_summary' => ['required', 'string', 'max:3000'],
            'motivation'       => ['required', 'string', 'max:2000'],
            'profile_link'     => ['nullable', 'url', 'max:1000'],
            'photo'            => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        $disk = app()->environment('production') ? 'private' : 'public';
        $validated['photo'] = $request->file('photo')->store('research_spotlight_photos', $disk);
        $validated['status'] = 'Pending';

        ResearchSpotlightApplication::create($validated);

        return redirect()
            ->route('research-spotlight.index')
            ->with('success', 'Thank you. Your Research Spotlight submission has been received.');
    }

    public function adminIndex(Request $request)
    {
        $query = ResearchSpotlightApplication::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('institution', 'like', "%{$search}%")
                  ->orWhere('research_title', 'like', "%{$search}%")
                  ->orWhere('focus_area', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->get('sort') === 'oldest') {
            $query->oldest();
        } else {
            $query->latest();
        }

        $applications = $query->paginate(12)->withQueryString();

        $total = ResearchSpotlightApplication::count();
        $pending = ResearchSpotlightApplication::where('status', 'Pending')->count();
        $approved = ResearchSpotlightApplication::where('status', 'Approved')->count();

        return view('admin.research-spotlight.index', compact(
            'applications', 'total', 'pending', 'approved'
        ));
    }

    public function adminShow(ResearchSpotlightApplication $application)
    {
        return view('admin.research-spotlight.show', compact('application'));
    }

    public function updateStatus(Request $request, ResearchSpotlightApplication $application)
    {
        $validated = $request->validate([
            'status' => ['required', 'in:Pending,Approved,Declined'],
        ]);

        $application->update($validated);

        return back()->with('success', 'Research Spotlight application status updated.');
    }

    public function photo(ResearchSpotlightApplication $application)
    {
        abort_unless($application->photo, 404);

        $disk = app()->environment('production') ? 'private' : 'public';

        abort_unless(Storage::disk($disk)->exists($application->photo), 404);

        return Storage::disk($disk)->response($application->photo);
    }

    public function destroy(ResearchSpotlightApplication $application)
    {
        if ($application->photo) {
            $disk = app()->environment('production') ? 'private' : 'public';
            Storage::disk($disk)->delete($application->photo);
        }

        $application->delete();

        return redirect()
            ->route('admin.research-spotlight.index')
            ->with('success', 'Research Spotlight application deleted.');
    }
}
