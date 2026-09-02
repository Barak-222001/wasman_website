@extends('layouts.admin')


@section('title', 'General Enquiries')


@push('styles')

<link
    rel="stylesheet"
    href="{{ asset('css/admin-general-enquiries.css') }}"
>

@endpush


@section('content')


<div class="general-enquiries-page">


    {{-- HERO --}}

    <section class="general-enquiries-hero">

        <div class="hero-main">

            <span class="hero-eyebrow">
                ENQUIRY MANAGEMENT
            </span>

            <h1>
                General Enquiries
            </h1>

            <p>
                Review and manage questions submitted through
                the WASMaN General Enquiries page.
            </p>

        </div>


        <div class="hero-total">

            <span>
                TOTAL ENQUIRIES
            </span>

            <strong>
                {{ $totalEnquiries }}
            </strong>

        </div>

    </section>



    {{-- SUCCESS --}}

    @if(session('success'))

        <div class="admin-success-message">

            {{ session('success') }}

        </div>

    @endif



    {{-- SUMMARY CARDS --}}

    <section class="enquiry-stats">


        <div class="enquiry-stat-card">

            <div class="stat-icon">

                <i class="fa-solid fa-comments"></i>

            </div>

            <div>

                <span>
                    Total Enquiries
                </span>

                <strong>
                    {{ $totalEnquiries }}
                </strong>

            </div>

        </div>



        <div class="enquiry-stat-card">

            <div class="stat-icon">

                <i class="fa-solid fa-envelope"></i>

            </div>

            <div>

                <span>
                    Unread
                </span>

                <strong>
                    {{ $unreadEnquiries }}
                </strong>

            </div>

        </div>



        <div class="enquiry-stat-card">

            <div class="stat-icon">

                <i class="fa-solid fa-envelope-open-text"></i>

            </div>

            <div>

                <span>
                    Read
                </span>

                <strong>
                    {{ $readEnquiries }}
                </strong>

            </div>

        </div>


    </section>



    {{-- ANALYTICS --}}

    <section class="enquiry-analytics">


        <div class="analytics-card">

            <div class="analytics-heading">

                <span>
                    DISTRIBUTION
                </span>

                <h3>
                    Enquiries by Type
                </h3>

            </div>


            <div class="chart-container">

                <canvas id="enquiryTypeChart"></canvas>

            </div>

        </div>



        <div class="analytics-card">

            <div class="analytics-heading">

                <span>
                    ACTIVITY
                </span>

                <h3>
                    Enquiries Over Time
                </h3>

            </div>


            <div class="chart-container">

                <canvas id="enquiryMonthlyChart"></canvas>

            </div>

        </div>


    </section>



    {{-- TABLE --}}

    <section class="enquiries-table-card">


        <div class="table-card-heading">

            <div>

                <span>
                    ENQUIRY MANAGEMENT
                </span>

                <h2>
                    Submitted Enquiries
                </h2>

            </div>

        </div>



        {{-- FILTERS --}}

        <form
            method="GET"
            action="{{ route('admin.general-enquiries') }}"
            class="enquiry-filters"
        >


            <div class="search-field">

                <i class="fa-solid fa-search"></i>

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search name, email or message..."
                >

            </div>



            <select name="enquiry_type">

                <option value="">
                    All Enquiry Types
                </option>

                <option
                    value="Membership"
                    {{ request('enquiry_type') === 'Membership' ? 'selected' : '' }}
                >
                    Membership
                </option>

                <option
                    value="Research Support"
                    {{ request('enquiry_type') === 'Research Support' ? 'selected' : '' }}
                >
                    Research Support
                </option>

                <option
                    value="Partnership"
                    {{ request('enquiry_type') === 'Partnership' ? 'selected' : '' }}
                >
                    Partnership
                </option>

                <option
                    value="Internship"
                    {{ request('enquiry_type') === 'Internship' ? 'selected' : '' }}
                >
                    Internship
                </option>

                <option
                    value="Volunteer"
                    {{ request('enquiry_type') === 'Volunteer' ? 'selected' : '' }}
                >
                    Volunteer
                </option>

                <option
                    value="Events & Publications"
                    {{ request('enquiry_type') === 'Events & Publications' ? 'selected' : '' }}
                >
                    Events & Publications
                </option>

                <option
                    value="General Inquiry"
                    {{ request('enquiry_type') === 'General Inquiry' ? 'selected' : '' }}
                >
                    General Inquiry
                </option>

            </select>



            <select name="status">

                <option value="">
                    All Status
                </option>

                <option
                    value="unread"
                    {{ request('status') === 'unread' ? 'selected' : '' }}
                >
                    Unread
                </option>

                <option
                    value="read"
                    {{ request('status') === 'read' ? 'selected' : '' }}
                >
                    Read
                </option>

            </select>



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



            <button
                type="submit"
                class="filter-button"
            >

                Apply

            </button>


            <a
                href="{{ route('admin.general-enquiries') }}"
                class="clear-button"
            >

                Clear

            </a>


        </form>



        {{-- TABLE --}}

        <div class="table-responsive">

            <table class="enquiries-table">


                <thead>

                    <tr>

                        <th>
                            Sender
                        </th>

                        <th>
                            Enquiry Type
                        </th>

                        <th>
                            Message
                        </th>

                        <th>
                            Status
                        </th>

                        <th>
                            Date
                        </th>

                        <th>
                            Actions
                        </th>

                    </tr>

                </thead>


                <tbody>


                    @forelse($enquiries as $enquiry)


                        <tr
                            class="{{ !$enquiry->is_read ? 'unread-row' : '' }}"
                        >


                            <td>

                                <div class="sender-details">

                                    <strong>

                                        {{ $enquiry->full_name }}

                                    </strong>

                                    <span>

                                        {{ $enquiry->email }}

                                    </span>

                                </div>

                            </td>



                            <td>

                                <span class="type-badge">

                                    {{ $enquiry->enquiry_type }}

                                </span>

                            </td>



                            <td>

                                <div class="message-preview">

                                    {{ \Illuminate\Support\Str::limit(
                                        $enquiry->message,
                                        70
                                    ) }}

                                </div>

                            </td>



                            <td>

                                @if($enquiry->is_read)

                                    <span class="status-badge read">

                                        Read

                                    </span>

                                @else

                                    <span class="status-badge unread">

                                        Unread

                                    </span>

                                @endif

                            </td>



                            <td>

                                <div class="date-cell">

                                    <strong>

                                        {{ $enquiry->created_at->format('d M Y') }}

                                    </strong>

                                    <span>

                                        {{ $enquiry->created_at->format('h:i A') }}

                                    </span>

                                </div>

                            </td>



                            <td>

                                <div class="table-actions">


                                    <a
                                        href="{{ route('general-enquiries.show', $enquiry) }}"
                                        class="view-action"
                                    >

                                        View

                                    </a>



                                    <form
                                        method="POST"
                                        action="{{ route('general-enquiries.destroy', $enquiry) }}"
                                        onsubmit="return confirm('Are you sure you want to delete this enquiry?');"
                                    >

                                        @csrf
                                        @method('DELETE')


                                        <button
                                            type="submit"
                                            class="delete-action"
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
                                colspan="6"
                                class="empty-state"
                            >

                                <i class="fa-solid fa-comments"></i>

                                <strong>
                                    No enquiries found
                                </strong>

                                <span>
                                    Submitted enquiries will appear here.
                                </span>

                            </td>

                        </tr>


                    @endforelse


                </tbody>


            </table>

        </div>



        @if($enquiries->hasPages())

            <div class="enquiries-pagination">

                {{ $enquiries->links() }}

            </div>

        @endif


    </section>


</div>


@endsection



@push('scripts')


<script>

    /*
    |--------------------------------------------------------------------------
    | Enquiries by Type
    |--------------------------------------------------------------------------
    */

    const enquiryTypeLabels = @json(
        $typeStats->pluck('enquiry_type')
    );

    const enquiryTypeData = @json(
        $typeStats->pluck('total')
    );


    new Chart(
        document.getElementById('enquiryTypeChart'),
        {
            type: 'bar',

            data: {

                labels: enquiryTypeLabels,

                datasets: [{

                    label: 'Enquiries',

                    data: enquiryTypeData,

                    borderWidth: 1,

                    borderRadius: 8

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
        }
    );



    /*
    |--------------------------------------------------------------------------
    | Enquiries Over Time
    |--------------------------------------------------------------------------
    */

    const enquiryMonthlyLabels = @json(
        $monthlyStats->pluck('month')
    );

    const enquiryMonthlyData = @json(
        $monthlyStats->pluck('total')
    );


    new Chart(
        document.getElementById('enquiryMonthlyChart'),
        {
            type: 'line',

            data: {

                labels: enquiryMonthlyLabels,

                datasets: [{

                    label: 'Enquiries',

                    data: enquiryMonthlyData,

                    tension: 0.35,

                    fill: false

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
        }
    );

</script>


@endpush