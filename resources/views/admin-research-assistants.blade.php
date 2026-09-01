@extends('layouts.admin')

@section('title', 'Research Assistance Requests')


@push('styles')

<link
    rel="stylesheet"
    href="{{ asset('css/admin-research-assistants.css') }}"
>

@endpush


@section('content')


<div class="research-admin-page">


    <section class="research-admin-hero">

        <div>

            <span class="research-admin-kicker">
                RESEARCH MANAGEMENT
            </span>

            <h1>
                Research Assistance Requests
            </h1>

            <p>
                Review and manage research support requests submitted to WASMaN.
            </p>

        </div>

    </section>



    <div class="research-admin-stats">


        <div class="research-stat-card">

            <div class="research-stat-icon">
                ✦
            </div>

            <div>

                <span>
                    TOTAL REQUESTS
                </span>

                <strong>
                    {{ $totalResearchRequests }}
                </strong>

                <p>
                    Research requests received
                </p>

            </div>

        </div>



        <div class="research-stat-card">

            <div class="research-stat-icon">
                06
            </div>

            <div>

                <span>
                    RESEARCH AREAS
                </span>

                <strong>
                    6
                </strong>

                <p>
                    Areas supported
                </p>

            </div>

        </div>



        <div class="research-stat-card">

            <div class="research-stat-icon">
                ↓
            </div>

            <div>

                <span>
                    DOCUMENTS
                </span>

                <strong>
                    {{ $documentsUploaded }}
                </strong>

                <p>
                    Supporting files uploaded
                </p>

            </div>

        </div>


    </div>



    <div class="research-analytics-grid">


        <div class="research-chart-card">

            <div class="research-chart-header">

                <span class="research-admin-kicker">
                    RESEARCH ANALYTICS
                </span>

                <h3>
                    Requests by Research Area
                </h3>

                <p>
                    Distribution of requests across research areas.
                </p>

            </div>


            <div class="research-chart-container">

                <canvas id="researchAreaChart"></canvas>

            </div>

        </div>



        <div class="research-chart-card">

            <div class="research-chart-header">

                <span class="research-admin-kicker">
                    REQUEST TRENDS
                </span>

                <h3>
                    Requests Over Time
                </h3>

                <p>
                    Monthly trend of research assistance requests.
                </p>

            </div>


            <div class="research-chart-container">

                <canvas id="researchMonthlyChart"></canvas>

            </div>

        </div>


    </div>



    <section class="research-application-card">


        <div class="research-card-header">

            <span class="research-admin-kicker">
                REQUEST MANAGEMENT
            </span>

            <h2>
                Research Requests
            </h2>

            <p>
                Search, filter and manage submitted research assistance requests.
            </p>

        </div>



        @if (session('success'))

            <div class="research-admin-success">

                {{ session('success') }}

            </div>

        @endif



        <form
            method="GET"
            action="{{ route('admin.research-assistants') }}"
            class="research-admin-filters"
        >


            <div class="research-filter-search">

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search applicant, institution, topic..."
                >

            </div>



            <div class="research-filter-select">

                <select name="area">

                    <option value="">
                        All Research Areas
                    </option>

                    <option
                        value="Marine Conservation"
                        {{ request('area') === 'Marine Conservation' ? 'selected' : '' }}
                    >
                        Marine Conservation
                    </option>

                    <option
                        value="Aquatic Ecology"
                        {{ request('area') === 'Aquatic Ecology' ? 'selected' : '' }}
                    >
                        Aquatic Ecology
                    </option>

                    <option
                        value="Climate Change"
                        {{ request('area') === 'Climate Change' ? 'selected' : '' }}
                    >
                        Climate Change
                    </option>

                    <option
                        value="Blue Economy"
                        {{ request('area') === 'Blue Economy' ? 'selected' : '' }}
                    >
                        Blue Economy
                    </option>

                    <option
                        value="Fisheries"
                        {{ request('area') === 'Fisheries' ? 'selected' : '' }}
                    >
                        Fisheries
                    </option>

                    <option
                        value="Water Resources"
                        {{ request('area') === 'Water Resources' ? 'selected' : '' }}
                    >
                        Water Resources
                    </option>

                </select>

            </div>



            <div class="research-filter-select">

                <select name="sort">

                    <option
                        value="newest"
                        {{ request('sort', 'newest') === 'newest' ? 'selected' : '' }}
                    >
                        Newest First
                    </option>

                    <option
                        value="oldest"
                        {{ request('sort') === 'oldest' ? 'selected' : '' }}
                    >
                        Oldest First
                    </option>

                </select>

            </div>



            <button
                type="submit"
                class="research-filter-btn"
            >
                Apply
            </button>


            <a
                href="{{ route('admin.research-assistants') }}"
                class="research-clear-btn"
            >
                Clear
            </a>


        </form>



        <div class="research-table-responsive">


            <table class="research-applications-table">


                <thead>

                    <tr>

                        <th>Applicant</th>

                        <th>Institution</th>

                        <th>Research Topic</th>

                        <th>Research Area</th>

                        <th>Timeline</th>

                        <th>Document</th>

                        <th>Date</th>

                        <th>Actions</th>

                    </tr>

                </thead>



                <tbody>


                    @forelse ($applications as $application)


                        <tr>


                            <td>

                                <div class="research-applicant-cell">

                                    <div class="research-avatar">

                                        {{ strtoupper(substr($application->full_name, 0, 1)) }}

                                    </div>


                                    <div>

                                        <strong>
                                            {{ $application->full_name }}
                                        </strong>

                                        <span>
                                            {{ $application->email }}
                                        </span>

                                    </div>

                                </div>

                            </td>



                            <td>
                                {{ $application->institution ?: '—' }}
                            </td>



                            <td>

                                <div
                                    class="research-topic-preview"
                                    title="{{ $application->research_topic }}"
                                >
                                    {{ \Illuminate\Support\Str::limit(
                                        $application->research_topic,
                                        40
                                    ) }}
                                </div>

                            </td>



                            <td>

                                <span class="research-area-badge">
                                    {{ $application->research_area }}
                                </span>

                            </td>



                            <td>
                                {{ $application->timeline ?: '—' }}
                            </td>



                            <td>

                                @if ($application->document)

                                    <a
                                        href="{{ route(
                                            'research-assistants.document',
                                            $application
                                        ) }}"
                                        class="research-document-btn"
                                    >
                                        Download
                                    </a>

                                @else

                                    <span class="research-no-document">
                                        —
                                    </span>

                                @endif

                            </td>



                            <td>

                                <span class="research-date">
                                    {{ $application->created_at->format('d M Y') }}
                                </span>

                            </td>



                            <td>

                                <div class="research-table-actions">


                                    <a
                                        href="{{ route(
                                            'research-assistants.edit',
                                            $application
                                        ) }}"
                                        class="research-edit-btn"
                                    >
                                        Edit
                                    </a>



                                    <form
                                        method="POST"
                                        action="{{ route(
                                            'research-assistants.destroy',
                                            $application
                                        ) }}"
                                        onsubmit="return confirm('Are you sure you want to delete this research assistance request?');"
                                    >

                                        @csrf

                                        @method('DELETE')


                                        <button
                                            type="submit"
                                            class="research-delete-btn"
                                        >
                                            Delete
                                        </button>

                                    </form>


                                </div>

                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td
                                colspan="8"
                                class="research-empty-table"
                            >

                                <strong>
                                    No research assistance requests found.
                                </strong>

                                <p>
                                    New requests will appear here.
                                </p>

                            </td>

                        </tr>


                    @endforelse


                </tbody>


            </table>


        </div>



        <div class="research-pagination">

            {{ $applications->links() }}

        </div>


    </section>


</div>



@push('scripts')

<script>

    const researchAreaLabels =
        @json($researchAreaStats->keys());

    const researchAreaValues =
        @json($researchAreaStats->values());

    const researchAreaCanvas =
        document.getElementById('researchAreaChart');


    if (researchAreaCanvas) {

        new Chart(researchAreaCanvas, {

            type: 'bar',

            data: {

                labels: researchAreaLabels,

                datasets: [{

                    label: 'Requests',

                    data: researchAreaValues,

                    borderWidth: 0,

                    borderRadius: 7

                }]

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



    const researchMonthlyLabels =
        @json($researchMonthlyStats->keys());

    const researchMonthlyValues =
        @json($researchMonthlyStats->values());

    const researchMonthlyCanvas =
        document.getElementById('researchMonthlyChart');


    if (researchMonthlyCanvas) {

        new Chart(researchMonthlyCanvas, {

            type: 'line',

            data: {

                labels: researchMonthlyLabels,

                datasets: [{

                    label: 'Requests',

                    data: researchMonthlyValues,

                    borderWidth: 3,

                    tension: 0.4,

                    fill: true,

                    pointRadius: 4,

                    pointHoverRadius: 6

                }]

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

</script>

@endpush


@endsection