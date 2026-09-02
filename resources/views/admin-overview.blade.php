@extends('layouts.admin')

@section('title', 'Overview')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin-overview.css') }}">
@endpush


@section('content')

<div class="overview-page">


    {{-- ============================================
        OVERVIEW HERO
    ============================================= --}}

    <section class="overview-hero">

        <div class="overview-hero-copy">

            <span class="overview-kicker">
                WASMaN ADMINISTRATION
            </span>

            <h2>
                Administration Overview
            </h2>

            <p>
                Monitor applications, research support requests,
                volunteer interest and partnership enquiries from
                one central administrative workspace.
            </p>

        </div>


        <div class="overview-total">

            <span class="overview-total-label">
                Total Submissions
            </span>

            <strong>
                {{ $totalSubmissions }}
            </strong>

            <span class="overview-total-note">
                Across all programmes
            </span>

        </div>

    </section>



    {{-- ============================================
        SUMMARY CARDS
    ============================================= --}}

    <section class="overview-stat-grid">


        <a
            href="{{ route('admin.internships') }}"
            class="overview-stat-card"
        >

            <div class="stat-icon">
                ◉
            </div>

            <div class="stat-card-content">

                <span>
                    Internship Applications
                </span>

                <strong>
                    {{ $totalInternships }}
                </strong>

                <small>
                    View internship submissions →
                </small>

            </div>

        </a>



        <a
            href="{{ route('admin.volunteers') }}"
            class="overview-stat-card"
        >

            <div class="stat-icon">
                ◇
            </div>

            <div class="stat-card-content">

                <span>
                    Volunteer Applications
                </span>

                <strong>
                    {{ $totalVolunteers }}
                </strong>

                <small>
                    View volunteer submissions →
                </small>

            </div>

        </a>



        <a
            href="{{ route('admin.research-assistants') }}"
            class="overview-stat-card"
        >

            <div class="stat-icon">
                ✦
            </div>

            <div class="stat-card-content">

                <span>
                    Research Assistance
                </span>

                <strong>
                    {{ $totalResearchRequests }}
                </strong>

                <small>
                    View research requests →
                </small>

            </div>

        </a>



        <a
            href="{{ route('admin.partners') }}"
            class="overview-stat-card"
        >

            <div class="stat-icon">
                ♢
            </div>

            <div class="stat-card-content">

                <span>
                    Partnership Requests
                </span>

                <strong>
                    {{ $totalPartnerships }}
                </strong>

                <small>
                    View partnership requests →
                </small>

            </div>

        </a>


    </section>



    {{-- ============================================
        ANALYTICS
    ============================================= --}}

    <section class="overview-analytics-grid">


        {{-- PROGRAMME SUMMARY --}}

        <div class="overview-panel">

            <div class="overview-panel-header">

                <div>

                    <span class="panel-kicker">
                        Programme Distribution
                    </span>

                    <h3>
                        Submissions by Programme
                    </h3>

                    <p>
                        Comparison of submissions received across
                        WASMaN programmes.
                    </p>

                </div>

            </div>


            <div class="overview-chart-container">

                <canvas id="programmeSummaryChart"></canvas>

            </div>

        </div>



        {{-- OVERALL TREND --}}

        <div class="overview-panel overview-panel-wide">

            <div class="overview-panel-header">

                <div>

                    <span class="panel-kicker">
                        Submission Trends
                    </span>

                    <h3>
                        Submissions Over Time
                    </h3>

                    <p>
                        Monthly activity across all four administrative
                        programme areas.
                    </p>

                </div>

            </div>


            <div class="overview-chart-container">

                <canvas id="overallTrendChart"></canvas>

            </div>

        </div>


    </section>



    {{-- ============================================
        LOWER DASHBOARD
    ============================================= --}}

    <section class="overview-lower-grid">


        {{-- RECENT ACTIVITY --}}

        <div class="overview-panel">

            <div class="overview-panel-header">

                <div>

                    <span class="panel-kicker">
                        Latest Activity
                    </span>

                    <h3>
                        Recent Submissions
                    </h3>

                    <p>
                        Latest records received across the platform.
                    </p>

                </div>

            </div>


            <div class="recent-activity-list">

                @forelse($recentSubmissions as $submission)

                    <a
                        href="{{ $submission['route'] }}"
                        class="recent-activity-item"
                    >

                        <div class="recent-type">

                            {{ $submission['type'] }}

                        </div>


                        <div class="recent-info">

                            <strong>
                                {{ $submission['name'] }}
                            </strong>

                            <span>
                                {{ $submission['detail'] ?: 'No additional details' }}
                            </span>

                        </div>


                        <div class="recent-date">

                            {{ $submission['date']->format('d M Y') }}

                        </div>

                    </a>

                @empty

                    <div class="overview-empty">

                        <strong>
                            No submissions yet
                        </strong>

                        <span>
                            New submissions will appear here.
                        </span>

                    </div>

                @endforelse

            </div>

        </div>



        {{-- QUICK ACCESS --}}

        <div class="overview-panel quick-access-panel">

            <div class="overview-panel-header">

                <div>

                    <span class="panel-kicker">
                        Workspace
                    </span>

                    <h3>
                        Quick Access
                    </h3>

                    <p>
                        Move directly to an administrative module.
                    </p>

                </div>

            </div>


            <div class="quick-access-list">


                <a href="{{ route('admin.internships') }}">

                    <span class="quick-icon">
                        ◉
                    </span>

                    <div>

                        <strong>
                            Internships
                        </strong>

                        <small>
                            Manage internship applications
                        </small>

                    </div>

                    <b>→</b>

                </a>



                <a href="{{ route('admin.volunteers') }}">

                    <span class="quick-icon">
                        ◇
                    </span>

                    <div>

                        <strong>
                            Volunteers
                        </strong>

                        <small>
                            Manage volunteer applications
                        </small>

                    </div>

                    <b>→</b>

                </a>



                <a href="{{ route('admin.research-assistants') }}">

                    <span class="quick-icon">
                        ✦
                    </span>

                    <div>

                        <strong>
                            Research Assistance
                        </strong>

                        <small>
                            Manage research support requests
                        </small>

                    </div>

                    <b>→</b>

                </a>



                <a href="{{ route('admin.partners') }}">

                    <span class="quick-icon">
                        ♢
                    </span>

                    <div>

                        <strong>
                            Partnerships
                        </strong>

                        <small>
                            Manage partnership enquiries
                        </small>

                    </div>

                    <b>→</b>

                </a>


            </div>

        </div>


    </section>


</div>

@endsection



@push('scripts')

<script>

    /*
    |--------------------------------------------------------------------------
    | PROGRAMME SUMMARY CHART
    |--------------------------------------------------------------------------
    */

    const programmeLabels =
        @json($applicationSummary->keys());

    const programmeValues =
        @json($applicationSummary->values());


    const programmeCanvas =
        document.getElementById('programmeSummaryChart');


    if (programmeCanvas) {

        new Chart(programmeCanvas, {

            type: 'bar',

            data: {

                labels: programmeLabels,

                datasets: [
                    {
                        label: 'Submissions',

                        data: programmeValues,

                        borderWidth: 0,

                        borderRadius: 8
                    }
                ]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {
                        display: false
                    }

                },

                scales: {

                    y: {

                        beginAtZero: true,

                        ticks: {
                            precision: 0
                        }

                    }

                }

            }

        });

    }



    /*
    |--------------------------------------------------------------------------
    | OVERALL MONTHLY TREND
    |--------------------------------------------------------------------------
    */

    const trendLabels =
        @json($allMonths);


    const internshipTrend =
        @json($internshipTrend);

    const volunteerTrend =
        @json($volunteerTrend);

    const researchTrend =
        @json($researchTrend);

    const partnerTrend =
        @json($partnerTrend);


    const overallTrendCanvas =
        document.getElementById('overallTrendChart');


    if (overallTrendCanvas) {

        new Chart(overallTrendCanvas, {

            type: 'line',

            data: {

                labels: trendLabels,

                datasets: [

                    {
                        label: 'Internships',
                        data: internshipTrend,
                        borderWidth: 3,
                        tension: 0.4,
                        pointRadius: 3
                    },

                    {
                        label: 'Volunteers',
                        data: volunteerTrend,
                        borderWidth: 3,
                        tension: 0.4,
                        pointRadius: 3
                    },

                    {
                        label: 'Research Assistance',
                        data: researchTrend,
                        borderWidth: 3,
                        tension: 0.4,
                        pointRadius: 3
                    },

                    {
                        label: 'Partnerships',
                        data: partnerTrend,
                        borderWidth: 3,
                        tension: 0.4,
                        pointRadius: 3
                    }

                ]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                interaction: {
                    mode: 'index',
                    intersect: false
                },

                plugins: {

                    legend: {

                        position: 'bottom'

                    }

                },

                scales: {

                    y: {

                        beginAtZero: true,

                        ticks: {
                            precision: 0
                        }

                    }

                }

            }

        });

    }

</script>

@endpush