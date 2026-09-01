@extends('layouts.admin')


@section('title', 'Admin Dashboard')



@section('content')



{{-- ============================================
    DASHBOARD HERO
============================================= --}}

<div class="dashboard-hero">


    <div class="hero-copy">


        <span class="hero-kicker">
            WASMAN Administration
        </span>


        <h2>
            Welcome back, {{ auth()->user()->name }}
        </h2>


        <p>
            Manage internship applications, review applicant
            information and keep track of submissions from one
            central dashboard.
        </p>


    </div>



    <div class="hero-badge">

        <span>
            W
        </span>

    </div>


</div>



{{-- ============================================
    DASHBOARD STATISTICS
============================================= --}}

<div class="dashboard-stats">



    {{-- TOTAL APPLICATIONS --}}

    <div class="metric-card metric-primary">


        <div class="metric-top">

            <span class="metric-label">
                Total Applications
            </span>

            <span class="metric-dot"></span>

        </div>


        <div class="metric-value">

            {{ $totalApplications }}

        </div>


        <p class="metric-note">
            All internship submissions
        </p>


    </div>



    {{-- APPLICATION TYPE --}}

    <div class="metric-card">


        <div class="metric-top">

            <span class="metric-label">
                Application Type
            </span>


            <span class="metric-mini">
                Internship
            </span>

        </div>


        <div class="metric-value metric-text">
            Active
        </div>


        <p class="metric-note">
            Current application module
        </p>


    </div>



    {{-- PLACEMENT AREAS --}}

    <div class="metric-card">


        <div class="metric-top">

            <span class="metric-label">
                Placement Areas
            </span>


            <span class="metric-mini">
                5 Areas
            </span>

        </div>


        <div class="metric-value">
            05
        </div>


        <p class="metric-note">
            Available internship interests
        </p>


    </div>


</div>

<!-- CHART -->
<div class="analytics-grid">

    <div class="chart-card">

        <div class="chart-card-header">

            <div>
                <span class="section-kicker">
                    Dashboard Analytics
                </span>

                <h3>
                    Applications by Area
                </h3>

                <p>
                    Distribution of internship applications across placement areas.
                </p>
            </div>

        </div>

        <div class="chart-container">
            <canvas id="areaChart"></canvas>
        </div>

    </div>

     {{-- APPLICATIONS OVER TIME --}}

    <div class="chart-card">

        <div class="chart-card-header">

            <div>

                <span class="section-kicker">
                    Application Trends
                </span>

                <h3>
                    Applications Over Time
                </h3>

                <p>
                    Monthly trend of internship applications received.
                </p>

            </div>

        </div>


        <div class="chart-container">

            <canvas id="monthlyChart"></canvas>

        </div>

    </div>


</div>


{{-- ============================================
    APPLICATION MANAGEMENT CARD
============================================= --}}

<div class="application-card">



    {{-- CARD HEADER --}}

    <div class="application-card-header">


        <div>

            <span class="section-kicker">
                Application Management
            </span>


            <h3>
                Internship Applications
            </h3>


            <p>
                Search, filter, review and manage submitted applications.
            </p>

        </div>



        <div class="record-count">


            <span class="record-count-number">

                {{ $applications->total() }}

            </span>


            <span class="record-count-label">
                Records
            </span>


        </div>


    </div>



    {{-- ============================================
        SEARCH AND FILTER
    ============================================= --}}

    <form
        action="{{ route('admin.dashboard') }}"
        method="GET"
        class="premium-filter-form"
    >



        {{-- SEARCH --}}

        <div class="premium-filter-group premium-search">


            <label for="search">
                Search Applications
            </label>


            <div class="input-shell">


                <span class="input-symbol">
                    ⌕
                </span>


                <input
                    type="text"
                    id="search"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Name, email, institution..."
                >


            </div>


        </div>



        {{-- AREA FILTER --}}

        <div class="premium-filter-group">


            <label for="area">
                Area
            </label>


            <select
                name="area"
                id="area"
            >


                <option value="">
                    All Areas
                </option>


                <option
                    value="Marine Research"
                    {{ request('area') == 'Marine Research' ? 'selected' : '' }}
                >
                    Marine Research
                </option>


                <option
                    value="Blue Economy"
                    {{ request('area') == 'Blue Economy' ? 'selected' : '' }}
                >
                    Blue Economy
                </option>


                <option
                    value="Water Resources"
                    {{ request('area') == 'Water Resources' ? 'selected' : '' }}
                >
                    Water Resources
                </option>


                <option
                    value="Communication"
                    {{ request('area') == 'Communication' ? 'selected' : '' }}
                >
                    Communication
                </option>


                <option
                    value="GIS & Data Analysis"
                    {{ request('area') == 'GIS & Data Analysis' ? 'selected' : '' }}
                >
                    GIS & Data Analysis
                </option>


            </select>


        </div>



        {{-- SORT --}}

        <div class="premium-filter-group">


            <label for="sort">
                Sort By
            </label>


            <select
                name="sort"
                id="sort"
            >


                <option
                    value="newest"
                    {{ request('sort') == 'newest' ? 'selected' : '' }}
                >
                    Newest First
                </option>


                <option
                    value="oldest"
                    {{ request('sort') == 'oldest' ? 'selected' : '' }}
                >
                    Oldest First
                </option>


            </select>


        </div>



        {{-- FILTER BUTTONS --}}

        <div class="premium-filter-actions">


            <button
                type="submit"
                class="premium-btn premium-btn-primary"
            >
                Apply Filter
            </button>


            <a
                href="{{ route('admin.dashboard') }}"
                class="premium-btn premium-btn-clear"
            >
                Clear
            </a>


        </div>


    </form>



    {{-- ============================================
        SUCCESS MESSAGE
    ============================================= --}}

    @if(session('success'))


        <div class="premium-success">

            {{ session('success') }}

        </div>


    @endif



    {{-- ============================================
        APPLICATION TABLE
    ============================================= --}}

    <div class="premium-table-wrap">


        <table class="premium-table">



            {{-- TABLE HEAD --}}

            <thead>


                <tr>

                    <th>
                        Applicant
                    </th>

                    <th>
                        Institution
                    </th>

                    <th>
                        Program
                    </th>

                    <th>
                        Area
                    </th>

                    <th>
                        Phone
                    </th>

                    <th>
                        CV
                    </th>

                    <th>
                        Reason
                    </th>

                    <th>
                        Actions
                    </th>

                </tr>


            </thead>



            {{-- TABLE BODY --}}

            <tbody>


                @forelse($applications as $application)


                    <tr>



                        {{-- APPLICANT --}}

                        <td>


                            <div class="applicant-cell">


                                <div class="applicant-avatar">

                                    {{ strtoupper(substr($application->full_name, 0, 1)) }}

                                </div>


                                <div class="applicant-info">


                                    <strong>

                                        {{ $application->full_name }}

                                    </strong>


                                    <span>

                                        {{ $application->email }}

                                    </span>


                                </div>


                            </div>


                        </td>



                        {{-- INSTITUTION --}}

                        <td>

                            {{ $application->institution }}

                        </td>



                        {{-- PROGRAM --}}

                        <td>

                            {{ $application->program }}

                        </td>



                        {{-- AREA --}}

                        <td>


                            <span class="premium-area-badge">

                                {{ $application->area }}

                            </span>


                        </td>



                        {{-- PHONE --}}

                        <td>

                            {{ $application->phone_number }}

                        </td>



                        {{-- CV --}}

                        <td>


                            <a
                                href="{{ route('applications.cv', $application) }}"
                                class="download-link"
                            >
                                Download CV
                            </a>


                        </td>



                        {{-- REASON --}}

                        <td class="reason-column">


                            <span
                                class="reason-preview"
                                title="{{ $application->reason }}"
                            >

                                {{ $application->reason }}

                            </span>


                        </td>



                        {{-- ACTIONS --}}

                        <td>


                            <div class="premium-actions">



                                {{-- EDIT --}}

                                <a
                                    href="{{ route('applications.edit', $application) }}"
                                    class="premium-action edit-action"
                                >
                                    Edit
                                </a>



                                {{-- DELETE --}}

                                <form
                                    action="{{ route('applications.destroy', $application) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this application?')"
                                >


                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="premium-action delete-action"
                                    >
                                        Delete
                                    </button>


                                </form>


                            </div>


                        </td>


                    </tr>



                @empty


                    {{-- ============================================
                        NO APPLICATIONS
                    ============================================= --}}

                    <tr>


                        <td
                            colspan="8"
                            class="premium-empty"
                        >


                            <div class="empty-icon">
                                ◌
                            </div>


                            <strong>
                                No applications found
                            </strong>


                            <span>
                                Try adjusting your search or filter.
                            </span>


                        </td>


                    </tr>


                @endforelse


            </tbody>


        </table>


    </div>



    {{-- ============================================
        PAGINATION
    ============================================= --}}

    <div class="premium-pagination">

        {{ $applications->links() }}

    </div>


</div>
@push('scripts')

<script>

    const areaLabels = @json($areaStats->keys());

    const areaValues = @json($areaStats->values());

    const areaChartCanvas = document.getElementById('areaChart');


    new Chart(areaChartCanvas, {

        type: 'bar',

        data: {

            labels: areaLabels,

            datasets: [
                {
                    label: 'Applications',

                    data: areaValues,

                    borderWidth: 0,

                    borderRadius: 7
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


    // CHART 2
    const monthlyLabels = @json($monthlyStats->keys());

const monthlyValues = @json($monthlyStats->values());

const monthlyChartCanvas = document.getElementById('monthlyChart');


new Chart(monthlyChartCanvas, {

    type: 'line',

    data: {

        labels: monthlyLabels,

        datasets: [
            {
                label: 'Applications',

                data: monthlyValues,

                borderWidth: 3,

                tension: 0.4,

                fill: true,

                pointRadius: 4,

                pointHoverRadius: 6
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

</script>

@endpush

@endsection