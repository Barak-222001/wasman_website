@extends('layouts.admin')

@section('title', 'Edit Application')

@section('content')

<div class="edit-page-wrap">

    <div class="edit-page-header">

        <div>
            <span class="section-kicker">
                Application Management
            </span>

            <h2>
                Edit Internship Application
            </h2>

            <p>
                Update the applicant information below and save your changes.
            </p>
        </div>

        <a
            href="{{ route('admin.dashboard') }}"
            class="back-dashboard-btn"
        >
            Back to Dashboard
        </a>

    </div>


    <div class="edit-card">

        <div class="edit-card-header">

            <div class="edit-applicant-avatar">

                {{ strtoupper(substr($application->full_name, 0, 1)) }}

            </div>

            <div>

                <h3>
                    {{ $application->full_name }}
                </h3>

                <p>
                    {{ $application->email }}
                </p>

            </div>

        </div>


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
            action="{{ route('applications.update', $application) }}"
            method="POST"
            class="edit-form"
        >

            @csrf
            @method('PUT')


            <div class="edit-form-grid">


                <div class="edit-field">

                    <label for="fullName">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="fullName"
                        name="fullName"
                        value="{{ old('fullName', $application->full_name) }}"
                        required
                    >

                </div>


                <div class="edit-field">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $application->email) }}"
                        required
                    >

                </div>


                <div class="edit-field">

                    <label for="phoneNumber">
                        Phone Number
                    </label>

                    <input
                        type="text"
                        id="phoneNumber"
                        name="phoneNumber"
                        value="{{ old('phoneNumber', $application->phone_number) }}"
                        required
                    >

                </div>


                <div class="edit-field">

                    <label for="institution">
                        Institution
                    </label>

                    <input
                        type="text"
                        id="institution"
                        name="institution"
                        value="{{ old('institution', $application->institution) }}"
                        required
                    >

                </div>


                <div class="edit-field">

                    <label for="program">
                        Program
                    </label>

                    <input
                        type="text"
                        id="program"
                        name="program"
                        value="{{ old('program', $application->program) }}"
                        required
                    >

                </div>


                <div class="edit-field">

                    <label for="area">
                        Area of Interest
                    </label>

                    <select
                        id="area"
                        name="area"
                        required
                    >

                        <option
                            value="Marine Research"
                            {{ old('area', $application->area) == 'Marine Research' ? 'selected' : '' }}
                        >
                            Marine Research
                        </option>

                        <option
                            value="Blue Economy"
                            {{ old('area', $application->area) == 'Blue Economy' ? 'selected' : '' }}
                        >
                            Blue Economy
                        </option>

                        <option
                            value="Water Resources"
                            {{ old('area', $application->area) == 'Water Resources' ? 'selected' : '' }}
                        >
                            Water Resources
                        </option>

                        <option
                            value="Communication"
                            {{ old('area', $application->area) == 'Communication' ? 'selected' : '' }}
                        >
                            Communication
                        </option>

                        <option
                            value="GIS & Data Analysis"
                            {{ old('area', $application->area) == 'GIS & Data Analysis' ? 'selected' : '' }}
                        >
                            GIS & Data Analysis
                        </option>

                    </select>

                </div>


                <div class="edit-field edit-field-full">

                    <label for="reason">
                        Reason for Application
                    </label>

                    <textarea
                        id="reason"
                        name="reason"
                        rows="6"
                        required
                    >{{ old('reason', $application->reason) }}</textarea>

                </div>


            </div>


            <div class="edit-form-actions">

                <a
                    href="{{ route('admin.dashboard') }}"
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