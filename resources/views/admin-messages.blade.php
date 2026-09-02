@extends('layouts.admin')


@section('title', 'Messages')


@push('styles')

<link
    rel="stylesheet"
    href="{{ asset('css/admin-messages.css') }}"
>

@endpush


@section('content')


<div class="messages-page">


    {{-- PAGE HERO --}}

    <section class="messages-hero">

        <div>

            <span class="hero-eyebrow">
                COMMUNICATION CENTRE
            </span>

            <h1>
                Messages & Enquiries
            </h1>

            <p>
                Review and manage messages submitted through
                the WASMaN Leave a Message form.
            </p>

        </div>


        <div class="hero-total">

            <span>
                TOTAL MESSAGES
            </span>

            <strong>
                {{ $totalMessages }}
            </strong>

        </div>

    </section>



    {{-- SUCCESS MESSAGE --}}

    @if(session('success'))

        <div class="admin-success-message">

            {{ session('success') }}

        </div>

    @endif



    {{-- STATISTICS --}}

    <section class="message-stats">


        <div class="message-stat-card">

            <div class="stat-icon">

                <i class="fas fa-envelope"></i>

            </div>

            <div>

                <span>
                    Total Messages
                </span>

                <strong>
                    {{ $totalMessages }}
                </strong>

            </div>

        </div>



        <div class="message-stat-card">

            <div class="stat-icon">

                <i class="fas fa-envelope-open-text"></i>

            </div>

            <div>

                <span>
                    Unread
                </span>

                <strong>
                    {{ $unreadMessages }}
                </strong>

            </div>

        </div>



        <div class="message-stat-card">

            <div class="stat-icon">

                <i class="fas fa-check-circle"></i>

            </div>

            <div>

                <span>
                    Read
                </span>

                <strong>
                    {{ $readMessages }}
                </strong>

            </div>

        </div>


    </section>



    {{-- ANALYTICS --}}

    <section class="messages-analytics">


        <div class="analytics-card">

            <div class="analytics-heading">

                <div>

                    <span>
                        DISTRIBUTION
                    </span>

                    <h3>
                        Messages by Category
                    </h3>

                </div>

            </div>


            <div class="chart-container">

                <canvas id="messageCategoryChart"></canvas>

            </div>

        </div>



        <div class="analytics-card">

            <div class="analytics-heading">

                <div>

                    <span>
                        ACTIVITY
                    </span>

                    <h3>
                        Messages Over Time
                    </h3>

                </div>

            </div>


            <div class="chart-container">

                <canvas id="messageMonthlyChart"></canvas>

            </div>

        </div>


    </section>



    {{-- TABLE SECTION --}}

    <section class="messages-table-card">


        <div class="table-card-heading">

            <div>

                <span>
                    MESSAGE MANAGEMENT
                </span>

                <h2>
                    Submitted Messages
                </h2>

            </div>

        </div>



        {{-- FILTERS --}}

        <form
            method="GET"
            action="{{ route('admin.messages') }}"
            class="message-filters"
        >


            <div class="search-field">

                <i class="fas fa-search"></i>

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search sender, email, subject..."
                >

            </div>



            <select name="category">

                <option value="">
                    All Categories
                </option>

                <option
                    value="General Inquiry"
                    {{ request('category') === 'General Inquiry' ? 'selected' : '' }}
                >
                    General Inquiry
                </option>

                <option
                    value="Research Collaboration"
                    {{ request('category') === 'Research Collaboration' ? 'selected' : '' }}
                >
                    Research Collaboration
                </option>

                <option
                    value="Partnership"
                    {{ request('category') === 'Partnership' ? 'selected' : '' }}
                >
                    Partnership
                </option>

                <option
                    value="Membership"
                    {{ request('category') === 'Membership' ? 'selected' : '' }}
                >
                    Membership
                </option>

                <option
                    value="Internship"
                    {{ request('category') === 'Internship' ? 'selected' : '' }}
                >
                    Internship
                </option>

                <option
                    value="Volunteer"
                    {{ request('category') === 'Volunteer' ? 'selected' : '' }}
                >
                    Volunteer
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
                href="{{ route('admin.messages') }}"
                class="clear-button"
            >

                Clear

            </a>


        </form>



        {{-- TABLE --}}

        <div class="table-responsive">

            <table class="messages-table">

                <thead>

                    <tr>

                        <th>
                            Sender
                        </th>

                        <th>
                            Category
                        </th>

                        <th>
                            Subject
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


                    @forelse($messages as $message)


                        <tr
                            class="{{ !$message->is_read ? 'unread-row' : '' }}"
                        >


                            <td>

                                <div class="sender-details">

                                    <strong>

                                        {{ $message->full_name }}

                                    </strong>

                                    <span>

                                        {{ $message->email }}

                                    </span>

                                </div>

                            </td>



                            <td>

                                <span class="category-badge">

                                    {{ $message->category }}

                                </span>

                            </td>



                            <td>

                                <div class="subject-cell">

                                    {{ $message->subject ?: 'No subject' }}

                                </div>

                            </td>



                            <td>

                                @if($message->is_read)

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

                                        {{ $message->created_at->format('d M Y') }}

                                    </strong>

                                    <span>

                                        {{ $message->created_at->format('h:i A') }}

                                    </span>

                                </div>

                            </td>



                            <td>

                                <div class="table-actions">


                                    <a
                                        href="{{ route('messages.show', $message) }}"
                                        class="view-action"
                                    >

                                        View

                                    </a>



                                    <form
                                        method="POST"
                                        action="{{ route('messages.destroy', $message) }}"
                                        onsubmit="return confirm('Are you sure you want to delete this message?');"
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

                                <i class="fas fa-envelope-open"></i>

                                <strong>
                                    No messages found
                                </strong>

                                <span>
                                    Submitted messages will appear here.
                                </span>

                            </td>

                        </tr>


                    @endforelse


                </tbody>

            </table>

        </div>



        {{-- PAGINATION --}}

        @if($messages->hasPages())

            <div class="messages-pagination">

                {{ $messages->links() }}

            </div>

        @endif


    </section>


</div>


@endsection



@push('scripts')


<script>

    const categoryLabels = @json(
        $categoryStats->pluck('category')
    );

    const categoryData = @json(
        $categoryStats->pluck('total')
    );


    new Chart(
        document.getElementById('messageCategoryChart'),
        {
            type: 'bar',

            data: {
                labels: categoryLabels,

                datasets: [{
                    label: 'Messages',
                    data: categoryData,
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



    const monthlyLabels = @json(
        $monthlyStats->pluck('month')
    );

    const monthlyData = @json(
        $monthlyStats->pluck('total')
    );


    new Chart(
        document.getElementById('messageMonthlyChart'),
        {
            type: 'line',

            data: {
                labels: monthlyLabels,

                datasets: [{
                    label: 'Messages',
                    data: monthlyData,
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