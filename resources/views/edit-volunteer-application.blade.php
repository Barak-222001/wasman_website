@extends('layouts.admin')

@section('title', 'Edit Volunteer Application')

@section('content')

<div class="edit-page-wrap">

    <div class="edit-page-header">

        <div>

            <span class="section-kicker">
                VOLUNTEER MANAGEMENT
            </span>

            <h2>
                Edit Volunteer Application
            </h2>

            <p>
                Update the volunteer's application information.
            </p>

        </div>


        <a
            href="{{ route('admin.volunteers') }}"
            class="back-dashboard-btn"
        >
            Back to Volunteers
        </a>

    </div>


    <div class="edit-card">

        <div class="edit-card-header">

            <div class="edit-applicant-avatar">
                {{ strtoupper(substr($volunteer->full_name, 0, 1)) }}
            </div>

            <div>

                <h3>
                    {{ $volunteer->full_name }}
                </h3>

                <p>
                    {{ $volunteer->email }}
                </p>

            </div>

        </div>


        {{-- VALIDATION ERRORS --}}
        @if ($errors->any())

            <div class="edit-error-box">

                <strong>
                    Please correct the following:
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="{{ route('volunteers.update', $volunteer) }}"
            method="POST"
            class="edit-form"
        >

            @csrf
            @method('PUT')


            <div class="edit-form-grid">

                {{-- FULL NAME --}}
                <div class="edit-field">

                    <label for="fullName">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="fullName"
                        name="fullName"
                        value="{{ old('fullName', $volunteer->full_name) }}"
                        required
                    >

                </div>


                {{-- EMAIL --}}
                <div class="edit-field">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $volunteer->email) }}"
                        required
                    >

                </div>


                {{-- PHONE --}}
                <div class="edit-field">

                    <label for="phoneNumber">
                        Phone Number
                    </label>

                    <input
                        type="text"
                        id="phoneNumber"
                        name="phoneNumber"
                        value="{{ old('phoneNumber', $volunteer->phone_number) }}"
                    >

                </div>


                {{-- COUNTRY --}}
                <div class="edit-field">

                    <label for="country">
                        Country
                    </label>

                    <input
                        type="text"
                        id="country"
                        name="country"
                        value="{{ old('country', $volunteer->country) }}"
                    >

                </div>


                {{-- VOLUNTEER AREA --}}
                <div class="edit-field">

                    <label for="volunteerArea">
                        Volunteer Area
                    </label>

                    <select
                        id="volunteerArea"
                        name="volunteerArea"
                        required
                    >

                        <option
                            value="Community Outreach"
                            {{ old('volunteerArea', $volunteer->volunteer_area) == 'Community Outreach' ? 'selected' : '' }}
                        >
                            Community Outreach
                        </option>

                        <option
                            value="Research Support"
                            {{ old('volunteerArea', $volunteer->volunteer_area) == 'Research Support' ? 'selected' : '' }}
                        >
                            Research Support
                        </option>

                        <option
                            value="Conservation"
                            {{ old('volunteerArea', $volunteer->volunteer_area) == 'Conservation' ? 'selected' : '' }}
                        >
                            Conservation
                        </option>

                        <option
                            value="Media & Communications"
                            {{ old('volunteerArea', $volunteer->volunteer_area) == 'Media & Communications' ? 'selected' : '' }}
                        >
                            Media & Communications
                        </option>

                        <option
                            value="Event Support"
                            {{ old('volunteerArea', $volunteer->volunteer_area) == 'Event Support' ? 'selected' : '' }}
                        >
                            Event Support
                        </option>

                    </select>

                </div>


                {{-- AVAILABILITY --}}
                <div class="edit-field">

                    <label for="availability">
                        Availability
                    </label>

                    <select
                        id="availability"
                        name="availability"
                        required
                    >

                        <option
                            value="Weekdays"
                            {{ old('availability', $volunteer->availability) == 'Weekdays' ? 'selected' : '' }}
                        >
                            Weekdays
                        </option>

                        <option
                            value="Weekends"
                            {{ old('availability', $volunteer->availability) == 'Weekends' ? 'selected' : '' }}
                        >
                            Weekends
                        </option>

                        <option
                            value="Flexible"
                            {{ old('availability', $volunteer->availability) == 'Flexible' ? 'selected' : '' }}
                        >
                            Flexible
                        </option>

                    </select>

                </div>


                {{-- MOTIVATION --}}
                <div class="edit-field edit-field-full">

                    <label for="reason">
                        Reason for Volunteering
                    </label>

                    <textarea
                        id="reason"
                        name="reason"
                        rows="6"
                        required
                    >{{ old('reason', $volunteer->reason) }}</textarea>

                </div>

            </div>


            <div class="edit-form-actions">

                <a
                    href="{{ route('admin.volunteers') }}"
                    class="edit-cancel-btn"
                >
                    Cancel
                </a>


                <button
                    type="submit"
                    class="edit-save-btn"
                >
                    Save Changes
                </button>

            </div>

        </form>

    </div>

</div>

@endsection