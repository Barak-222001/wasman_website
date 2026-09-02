<?php

namespace App\Http\Controllers;

use App\Models\InternApplication;
use App\Models\VolunteerApplication;
use App\Models\ResearchAssistantApplication;
use App\Models\PartnerApplication;

class AdminOverviewController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | TOTAL COUNTS
        |--------------------------------------------------------------------------
        */

        $totalInternships = InternApplication::count();

        $totalVolunteers = VolunteerApplication::count();

        $totalResearchRequests = ResearchAssistantApplication::count();

        $totalPartnerships = PartnerApplication::count();


        $totalSubmissions =
            $totalInternships +
            $totalVolunteers +
            $totalResearchRequests +
            $totalPartnerships;


        /*
        |--------------------------------------------------------------------------
        | APPLICATION TYPE SUMMARY
        |--------------------------------------------------------------------------
        */

        $applicationSummary = collect([

            'Internships' => $totalInternships,

            'Volunteers' => $totalVolunteers,

            'Research Assistance' => $totalResearchRequests,

            'Partnerships' => $totalPartnerships,

        ]);


        /*
        |--------------------------------------------------------------------------
        | MONTHLY INTERNSHIP APPLICATIONS
        |--------------------------------------------------------------------------
        */

        $internshipMonthly = InternApplication::selectRaw(
                "strftime('%Y-%m', created_at) as month, COUNT(*) as total"
            )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');


        /*
        |--------------------------------------------------------------------------
        | MONTHLY VOLUNTEER APPLICATIONS
        |--------------------------------------------------------------------------
        */

        $volunteerMonthly = VolunteerApplication::selectRaw(
                "strftime('%Y-%m', created_at) as month, COUNT(*) as total"
            )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');


        /*
        |--------------------------------------------------------------------------
        | MONTHLY RESEARCH REQUESTS
        |--------------------------------------------------------------------------
        */

        $researchMonthly = ResearchAssistantApplication::selectRaw(
                "strftime('%Y-%m', created_at) as month, COUNT(*) as total"
            )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');


        /*
        |--------------------------------------------------------------------------
        | MONTHLY PARTNERSHIP REQUESTS
        |--------------------------------------------------------------------------
        */

        $partnerMonthly = PartnerApplication::selectRaw(
                "strftime('%Y-%m', created_at) as month, COUNT(*) as total"
            )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');


        /*
        |--------------------------------------------------------------------------
        | BUILD ONE MONTH LIST FOR ALL FOUR SERIES
        |--------------------------------------------------------------------------
        */

        $allMonths = collect()

            ->merge($internshipMonthly->keys())

            ->merge($volunteerMonthly->keys())

            ->merge($researchMonthly->keys())

            ->merge($partnerMonthly->keys())

            ->unique()

            ->sort()

            ->values();


        $internshipTrend = $allMonths->map(
            fn ($month) => $internshipMonthly->get($month, 0)
        );


        $volunteerTrend = $allMonths->map(
            fn ($month) => $volunteerMonthly->get($month, 0)
        );


        $researchTrend = $allMonths->map(
            fn ($month) => $researchMonthly->get($month, 0)
        );


        $partnerTrend = $allMonths->map(
            fn ($month) => $partnerMonthly->get($month, 0)
        );


        /*
        |--------------------------------------------------------------------------
        | RECENT SUBMISSIONS
        |--------------------------------------------------------------------------
        */

        $recentInternships = InternApplication::latest()
            ->take(5)
            ->get()
            ->map(function ($application) {

                return [

                    'type' => 'Internship',

                    'name' => $application->full_name,

                    'detail' => $application->area,

                    'date' => $application->created_at,

                    'route' => route('admin.internships'),

                ];

            });


        $recentVolunteers = VolunteerApplication::latest()
            ->take(5)
            ->get()
            ->map(function ($application) {

                return [

                    'type' => 'Volunteer',

                    'name' => $application->full_name,

                    'detail' => $application->volunteer_area,

                    'date' => $application->created_at,

                    'route' => route('admin.volunteers'),

                ];

            });


        $recentResearch = ResearchAssistantApplication::latest()
            ->take(5)
            ->get()
            ->map(function ($application) {

                return [

                    'type' => 'Research',

                    'name' => $application->full_name,

                    'detail' => $application->research_area,

                    'date' => $application->created_at,

                    'route' => route('admin.research-assistants'),

                ];

            });


        $recentPartners = PartnerApplication::latest()
            ->take(5)
            ->get()
            ->map(function ($application) {

                return [

                    'type' => 'Partnership',

                    'name' => $application->organization_name,

                    'detail' => $application->partnership_type,

                    'date' => $application->created_at,

                    'route' => route('admin.partners'),

                ];

            });


        $recentSubmissions = collect()

            ->merge($recentInternships)

            ->merge($recentVolunteers)

            ->merge($recentResearch)

            ->merge($recentPartners)

            ->sortByDesc('date')

            ->take(8)

            ->values();


        /*
        |--------------------------------------------------------------------------
        | RETURN OVERVIEW
        |--------------------------------------------------------------------------
        */

        return view('admin-overview', [

            'totalInternships' => $totalInternships,

            'totalVolunteers' => $totalVolunteers,

            'totalResearchRequests' => $totalResearchRequests,

            'totalPartnerships' => $totalPartnerships,

            'totalSubmissions' => $totalSubmissions,

            'applicationSummary' => $applicationSummary,

            'allMonths' => $allMonths,

            'internshipTrend' => $internshipTrend,

            'volunteerTrend' => $volunteerTrend,

            'researchTrend' => $researchTrend,

            'partnerTrend' => $partnerTrend,

            'recentSubmissions' => $recentSubmissions,

        ]);
    }
}