@extends('layouts.admin')

@section('title', 'Internship Applications')

@section('content')


<div class="dashboard-welcome">

    <div>

        <h2>
            Internship Applications
        </h2>

        <p>
            Review and manage internship applications submitted to WASMAN.
        </p>

    </div>

</div>


<div class="stats-grid">

    <div class="stat-card">

        <div class="stat-icon">
            IA
        </div>

        <div>

            <p>
                Total Applications
            </p>

            <h3>
                {{ $totalApplications }}
            </h3>

        </div>

    </div>

</div>


<div class="dashboard-panel">

    <div class="panel-header">

        <div>

            <h3>
                Application Records
            </h3>

            <p>
                Search, filter and manage submitted applications.
            </p>

        </div>

    </div>


    <form
        action="{{ route('admin.dashboard') }}"
        method="GET"
        class="filter-form"
    >

        <div class="filter-field search-field">

            <label>
                Search
            </label>

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Name, email, institution..."
            >

        </div>


        <div class="filter-field">

            <label>
                Area
            </label>

            <select name="area">

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


        <div class="filter-field">

            <label>
                Sort
            </label>

            <select name="sort">

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


        <div class="filter-actions">

            <button
                type="submit"
                class="btn-primary"
            >
                Apply
            </button>

            <a
                href="{{ route('admin.dashboard') }}"
                class="btn-secondary"
            >
                Clear
            </a>

        </div>

    </form>


    @if(session('success'))

        <div class="admin-alert-success">
            {{ session('success') }}
        </div>

    @endif


    <div class="table-wrapper">

        <table class="admin-table">

            <thead>

                <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Institution</th>
                    <th>Program</th>
                    <th>Area</th>
                    <th>CV</th>
                    <th>Phone</th>
                    <th>Reason</th>
                    <th>Action</th>

                </tr>

            </thead>


            <tbody>

                @forelse($applications as $application)

                    <tr>

                        <td>
                            <strong>
                                {{ $application->full_name }}
                            </strong>
                        </td>

                        <td>
                            {{ $application->email }}
                        </td>

                        <td>
                            {{ $application->institution }}
                        </td>

                        <td>
                            {{ $application->program }}
                        </td>

                        <td>

                            <span class="area-badge">
                                {{ $application->area }}
                            </span>

                        </td>

                        <td>

                            <a
                                href="{{ route('applications.cv', $application) }}"
                                class="table-link"
                            >
                                Download
                            </a>

                        </td>

                        <td>
                            {{ $application->phone_number }}
                        </td>

                        <td class="reason-cell">
                            {{ $application->reason }}
                        </td>

                        <td>

                            <div class="action-buttons">

                                <a
                                    href="{{ route('applications.edit', $application) }}"
                                    class="btn-edit"
                                >
                                    Edit
                                </a>


                                <form
                                    action="{{ route('applications.destroy', $application) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this application?')"
                                >

                                    @csrf
                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="btn-delete"
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
                            colspan="9"
                            class="empty-table"
                        >
                            No applications found.
                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>


    <div class="pagination-wrapper">

        {{ $applications->links() }}

    </div>

</div>


@endsection