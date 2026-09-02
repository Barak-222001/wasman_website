@extends('layouts.admin')

@section('title', 'Partnership Requests')


@push('styles')

<link
    rel="stylesheet"
    href="{{ asset('css/admin-partners.css') }}"
>

@endpush


@section('content')


<div class="partner-admin-page">


    {{-- HERO --}}
    <section class="partner-admin-hero">

        <div>

            <span class="partner-admin-kicker">
                PARTNERSHIP MANAGEMENT
            </span>

            <h1>
                Partnership Requests
            </h1>

            <p>
                Review and manage organizations interested in partnering with WASMaN.
            </p>

        </div>

    </section>



    {{-- STATISTICS --}}
    <div class="partner-admin-stats">


        <div class="partner-stat-card">

            <div class="partner-stat-icon">
                ♢
            </div>

            <div>

                <span>
                    TOTAL REQUESTS
                </span>

                <strong>
                    {{ $totalPartners }}
                </strong>

                <p>
                    Partnership requests received
                </p>

            </div>

        </div>



        <div class="partner-stat-card">

            <div class="partner-stat-icon">
                05
            </div>

            <div>

                <span>
                    PARTNERSHIP TYPES
                </span>

                <strong>
                    5
                </strong>

                <p>
                    Collaboration models
                </p>

            </div>

        </div>



        <div class="partner-stat-card">

            <div class="partner-stat-icon">
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
                    Partnership enquiries
                </p>

            </div>

        </div>


    </div>



    {{-- CHARTS --}}
    <div class="partner-analytics-grid">


        <div class="partner-chart-card">

            <div class="partner-chart-header">

                <span class="partner-admin-kicker">
                    PARTNERSHIP ANALYTICS
                </span>

                <h3>
                    Requests by Partnership Type
                </h3>

                <p>
                    Distribution of requests across collaboration models.
                </p>

            </div>


            <div class="partner-chart-container">

                <canvas id="partnershipTypeChart"></canvas>

            </div>

        </div>



        <div class="partner-chart-card">

            <div class="partner-chart-header">

                <span class="partner-admin-kicker">
                    REQUEST TRENDS
                </span>

                <h3>
                    Requests Over Time
                </h3>

                <p>
                    Monthly trend of partnership requests received.
                </p>

            </div>


            <div class="partner-chart-container">

                <canvas id="partnerMonthlyChart"></canvas>

            </div>

        </div>


    </div>



    {{-- REQUEST MANAGEMENT --}}
    <section class="partner-application-card">


        <div class="partner-card-header">

            <span class="partner-admin-kicker">
                REQUEST MANAGEMENT
            </span>

            <h2>
                Partnership Requests
            </h2>

            <p>
                Search, filter and manage submitted partnership enquiries.
            </p>

        </div>



        @if (session('success'))

            <div class="partner-admin-success">

                {{ session('success') }}

            </div>

        @endif



        <form
            method="GET"
            action="{{ route('admin.partners') }}"
            class="partner-admin-filters"
        >


            <div class="partner-filter-search">

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search organization, contact, email..."
                >

            </div>



            <div class="partner-filter-select">

                <select name="type">

                    <option value="">
                        All Partnership Types
                    </option>

                    <option
                        value="Strategic Partnership"
                        {{ request('type') === 'Strategic Partnership' ? 'selected' : '' }}
                    >
                        Strategic Partnership
                    </option>

                    <option
                        value="Research Collaboration"
                        {{ request('type') === 'Research Collaboration' ? 'selected' : '' }}
                    >
                        Research Collaboration
                    </option>

                    <option
                        value="Programme Support"
                        {{ request('type') === 'Programme Support' ? 'selected' : '' }}
                    >
                        Programme Support
                    </option>

                    <option
                        value="Sponsorship"
                        {{ request('type') === 'Sponsorship' ? 'selected' : '' }}
                    >
                        Sponsorship
                    </option>

                    <option
                        value="Other"
                        {{ request('type') === 'Other' ? 'selected' : '' }}
                    >
                        Other
                    </option>

                </select>

            </div>



            <div class="partner-filter-select">

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
                class="partner-filter-btn"
            >
                Apply
            </button>


            <a
                href="{{ route('admin.partners') }}"
                class="partner-clear-btn"
            >
                Clear
            </a>


        </form>



        <div class="partner-table-responsive">


            <table class="partner-applications-table">


                <thead>

                    <tr>

                        <th>Organization</th>

                        <th>Contact Person</th>

                        <th>Country</th>

                        <th>Partnership Type</th>

                        <th>Partnership Interest</th>

                        <th>Date</th>

                        <th>Actions</th>

                    </tr>

                </thead>



                <tbody>


                    @forelse ($partners as $partner)


                        <tr>


                            <td>

                                <div class="partner-applicant-cell">

                                    <div class="partner-avatar">

                                        {{ strtoupper(substr($partner->organization_name, 0, 1)) }}

                                    </div>


                                    <div>

                                        <strong>
                                            {{ $partner->organization_name }}
                                        </strong>

                                        <span>
                                            {{ $partner->email }}
                                        </span>

                                    </div>

                                </div>

                            </td>



                            <td>

                                <strong class="partner-contact-name">
                                    {{ $partner->contact_person }}
                                </strong>

                                @if ($partner->phone_number)

                                    <small class="partner-phone">
                                        {{ $partner->phone_number }}
                                    </small>

                                @endif

                            </td>



                            <td>

                                {{ $partner->country ?: '—' }}

                            </td>



                            <td>

                                <span class="partner-type-badge">

                                    {{ $partner->partnership_type }}

                                </span>

                            </td>



                            <td>

                                <div
                                    class="partner-message-preview"
                                    title="{{ $partner->partnership_message }}"
                                >
                                    {{ \Illuminate\Support\Str::limit(
                                        $partner->partnership_message,
                                        55
                                    ) }}
                                </div>

                            </td>



                            <td>

                                <span class="partner-date">
                                    {{ $partner->created_at->format('d M Y') }}
                                </span>

                            </td>



                            <td>

                                <div class="partner-table-actions">


                                    <a
                                        href="{{ route(
                                            'partners.edit',
                                            $partner
                                        ) }}"
                                        class="partner-edit-btn"
                                    >
                                        Edit
                                    </a>



                                    <form
                                        method="POST"
                                        action="{{ route(
                                            'partners.destroy',
                                            $partner
                                        ) }}"
                                        onsubmit="return confirm('Are you sure you want to delete this partnership request?');"
                                    >

                                        @csrf

                                        @method('DELETE')


                                        <button
                                            type="submit"
                                            class="partner-delete-btn"
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
                                class="partner-empty-table"
                            >

                                <strong>
                                    No partnership requests found.
                                </strong>

                                <p>
                                    New partnership requests will appear here.
                                </p>

                            </td>

                        </tr>


                    @endforelse


                </tbody>


            </table>


        </div>



        <div class="partner-pagination">

            {{ $partners->links() }}

        </div>


    </section>


</div>



@push('scripts')

<script>

    const partnershipTypeLabels =
        @json($partnershipTypeStats->keys());

    const partnershipTypeValues =
        @json($partnershipTypeStats->values());

    const partnershipTypeCanvas =
        document.getElementById('partnershipTypeChart');


    if (partnershipTypeCanvas) {

        new Chart(partnershipTypeCanvas, {

            type: 'bar',

            data: {

                labels: partnershipTypeLabels,

                datasets: [{

                    label: 'Requests',

                    data: partnershipTypeValues,

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



    const partnerMonthlyLabels =
        @json($partnerMonthlyStats->keys());

    const partnerMonthlyValues =
        @json($partnerMonthlyStats->values());

    const partnerMonthlyCanvas =
        document.getElementById('partnerMonthlyChart');


    if (partnerMonthlyCanvas) {

        new Chart(partnerMonthlyCanvas, {

            type: 'line',

            data: {

                labels: partnerMonthlyLabels,

                datasets: [{

                    label: 'Requests',

                    data: partnerMonthlyValues,

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