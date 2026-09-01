@extends('layouts.admin')

@section('title', 'Volunteer Applications')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-volunteers.css') }}">
@endpush

@section('content')

<link
    rel="stylesheet"
    href="{{ asset('css/admin-volunteers.css') }}"
>

<div class="dashboard-page">

        <section class="dashboard-hero">
            <div>
                <span class="section-kicker">
                    VOLUNTEER MANAGEMENT
                </span>

                <h1>
                    Volunteer Applications
                </h1>

                <p>
                    Review and manage people who have applied to volunteer with WASMaN.
                </p>
            </div>
        </section>


        <div class="dashboard-stats">

            <div class="stat-card">
                <div class="stat-card-icon">
                    ◇
                </div>

                <div>
                    <span>
                        TOTAL VOLUNTEERS
                    </span>

                    <strong>
                        {{ $totalVolunteers }}
                    </strong>

                    <p>
                        Applications received
                    </p>
                </div>
            </div>


            <div class="stat-card">
                <div class="stat-card-icon">
                    05
                </div>

                <div>
                    <span>
                        VOLUNTEER AREAS
                    </span>

                    <strong>
                        5
                    </strong>

                    <p>
                        Available opportunities
                    </p>
                </div>
            </div>


            <div class="stat-card">
                <div class="stat-card-icon">
                    ✓
                </div>

                <div>
                    <span>
                        PROGRAMME
                    </span>

                    <strong>
                        Active
                    </strong>

                    <p>
                        Volunteer applications
                    </p>
                </div>
            </div>

    </div>


    {{-- =====================================================
        VOLUNTEER ANALYTICS
    ===================================================== --}}

    <div class="volunteer-analytics-grid">


        {{-- APPLICATIONS BY VOLUNTEER AREA --}}
        <div class="volunteer-chart-card">

            <div class="volunteer-chart-header">

                <div>

                    <span class="section-kicker">
                        VOLUNTEER ANALYTICS
                    </span>

                    <h3>
                        Applications by Area
                    </h3>

                    <p>
                        Distribution of applications across volunteer opportunities.
                    </p>

                </div>

            </div>


            <div class="volunteer-chart-container">

                <canvas id="volunteerAreaChart"></canvas>

            </div>

        </div>



        {{-- APPLICATIONS OVER TIME --}}
        <div class="volunteer-chart-card">

            <div class="volunteer-chart-header">

                <div>

                    <span class="section-kicker">
                        APPLICATION TRENDS
                    </span>

                    <h3>
                        Applications Over Time
                    </h3>

                    <p>
                        Monthly trend of volunteer applications received.
                    </p>

                </div>

            </div>


            <div class="volunteer-chart-container">

                <canvas id="volunteerMonthlyChart"></canvas>

            </div>

        </div>


    </div>
    {{-- =====================================================
        VOLUNTEER APPLICATION LIST
    ===================================================== --}}

    <section class="application-card">

        <div class="application-card-header">

            <div>
                <span class="section-kicker">
                    APPLICATION MANAGEMENT
                </span>

                <h2>
                    Volunteer Applicants
                </h2>

                <p>
                    Search, filter and manage submitted volunteer applications.
                </p>
            </div>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if (session('success'))

            <div class="admin-success-message">
                {{ session('success') }}
            </div>

        @endif


        {{-- SEARCH / FILTER --}}
        <form
            method="GET"
            action="{{ route('admin.volunteers') }}"
            class="application-filters"
        >

            <div class="filter-search">

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search name, email, country..."
                >

            </div>


            <div class="filter-select">

                <select name="area">

                    <option value="">
                        All Volunteer Areas
                    </option>

                    <option
                        value="Community Outreach"
                        {{ request('area') === 'Community Outreach' ? 'selected' : '' }}
                    >
                        Community Outreach
                    </option>

                    <option
                        value="Research Support"
                        {{ request('area') === 'Research Support' ? 'selected' : '' }}
                    >
                        Research Support
                    </option>

                    <option
                        value="Conservation"
                        {{ request('area') === 'Conservation' ? 'selected' : '' }}
                    >
                        Conservation
                    </option>

                    <option
                        value="Media & Communications"
                        {{ request('area') === 'Media & Communications' ? 'selected' : '' }}
                    >
                        Media & Communications
                    </option>

                    <option
                        value="Event Support"
                        {{ request('area') === 'Event Support' ? 'selected' : '' }}
                    >
                        Event Support
                    </option>

                </select>

            </div>


            <div class="filter-select">

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
                class="filter-btn"
            >
                Apply
            </button>


            <a
                href="{{ route('admin.volunteers') }}"
                class="clear-filter-btn"
            >
                Clear
            </a>

        </form>


        {{-- APPLICATION TABLE --}}
        <div class="table-responsive">

            <table class="applications-table">

                <thead>

                    <tr>
                        <th>Applicant</th>
                        <th>Country</th>
                        <th>Volunteer Area</th>
                        <th>Availability</th>
                        <th>Motivation</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>

                </thead>


                <tbody>

                    @forelse ($volunteers as $volunteer)

                        <tr>

                            {{-- APPLICANT --}}
                            <td>

                                <div class="applicant-cell">

                                    <div class="applicant-avatar">
                                        {{ strtoupper(substr($volunteer->full_name, 0, 1)) }}
                                    </div>

                                    <div>

                                        <strong>
                                            {{ $volunteer->full_name }}
                                        </strong>

                                        <span>
                                            {{ $volunteer->email }}
                                        </span>

                                        @if ($volunteer->phone_number)

                                            <small>
                                                {{ $volunteer->phone_number }}
                                            </small>

                                        @endif

                                    </div>

                                </div>

                            </td>


                            {{-- COUNTRY --}}
                            <td>
                                {{ $volunteer->country ?: '—' }}
                            </td>


                            {{-- VOLUNTEER AREA --}}
                            <td>

                                <span class="area-badge">
                                    {{ $volunteer->volunteer_area }}
                                </span>

                            </td>


                            {{-- AVAILABILITY --}}
                            <td>
                                {{ $volunteer->availability }}
                            </td>


                            {{-- MOTIVATION --}}
                            <td>

                                <div
                                    class="reason-preview"
                                    title="{{ $volunteer->reason }}"
                                >
                                    {{ \Illuminate\Support\Str::limit(
                                        $volunteer->reason,
                                        55
                                    ) }}
                                </div>

                            </td>


                            {{-- DATE --}}
                            <td>

                                <span class="application-date">
                                    {{ $volunteer->created_at->format('d M Y') }}
                                </span>

                            </td>


                            {{-- ACTIONS --}}
                            <td>

                                <div class="table-actions">

                                    <a
                                        href="{{ route('volunteers.edit', $volunteer) }}"
                                        class="action-edit"
                                    >
                                        Edit
                                    </a>


                                    <form
                                        action="{{ route('volunteers.destroy', $volunteer) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this volunteer application?');"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="action-delete"
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
                                colspan="7"
                                class="empty-table"
                            >

                                <strong>
                                    No volunteer applications found.
                                </strong>

                                <p>
                                    New volunteer applications will appear here.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- PAGINATION --}}
        <div class="pagination-wrapper">
            {{ $volunteers->links() }}
        </div>

    </section>


</div>


@push('scripts')

<script>

    const volunteerAreaLabels =
        @json($volunteerAreaStats->keys());

    const volunteerAreaValues =
        @json($volunteerAreaStats->values());

    const volunteerAreaCanvas =
        document.getElementById('volunteerAreaChart');


    if (volunteerAreaCanvas) {

        new Chart(volunteerAreaCanvas, {

            type: 'bar',

            data: {
                labels: volunteerAreaLabels,

                datasets: [{
                    label: 'Applications',
                    data: volunteerAreaValues,
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


    const volunteerMonthlyLabels =
        @json($volunteerMonthlyStats->keys());

    const volunteerMonthlyValues =
        @json($volunteerMonthlyStats->values());

    const volunteerMonthlyCanvas =
        document.getElementById('volunteerMonthlyChart');


    if (volunteerMonthlyCanvas) {

        new Chart(volunteerMonthlyCanvas, {

            type: 'line',

            data: {
                labels: volunteerMonthlyLabels,

                datasets: [{
                    label: 'Applications',
                    data: volunteerMonthlyValues,
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