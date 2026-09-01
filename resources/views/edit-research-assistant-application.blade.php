@extends('layouts.admin')

@section('title', 'Edit Research Assistance Request')


@section('content')


<div class="edit-page-wrap">


    <div class="edit-page-header">


        <div>

            <span class="section-kicker">
                RESEARCH MANAGEMENT
            </span>

            <h2>
                Edit Research Assistance Request
            </h2>

            <p>
                Update the submitted research request.
            </p>

        </div>


        <a
            href="{{ route('admin.research-assistants') }}"
            class="back-dashboard-btn"
        >
            Back to Research Requests
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
            action="{{ route(
                'research-assistants.update',
                $application
            ) }}"
            method="POST"
            enctype="multipart/form-data"
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
                        value="{{ old(
                            'fullName',
                            $application->full_name
                        ) }}"
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
                        value="{{ old(
                            'email',
                            $application->email
                        ) }}"
                        required
                    >

                </div>



                <div class="edit-field">

                    <label for="institution">
                        Institution / Organization
                    </label>

                    <input
                        type="text"
                        id="institution"
                        name="institution"
                        value="{{ old(
                            'institution',
                            $application->institution
                        ) }}"
                    >

                </div>



                <div class="edit-field">

                    <label for="researchTopic">
                        Research Topic
                    </label>

                    <input
                        type="text"
                        id="researchTopic"
                        name="researchTopic"
                        value="{{ old(
                            'researchTopic',
                            $application->research_topic
                        ) }}"
                        required
                    >

                </div>



                <div class="edit-field">

                    <label for="researchArea">
                        Research Area
                    </label>

                    <select
                        id="researchArea"
                        name="researchArea"
                        required
                    >

                        @foreach ([
                            'Marine Conservation',
                            'Aquatic Ecology',
                            'Climate Change',
                            'Blue Economy',
                            'Fisheries',
                            'Water Resources'
                        ] as $area)

                            <option
                                value="{{ $area }}"
                                {{ old(
                                    'researchArea',
                                    $application->research_area
                                ) === $area ? 'selected' : '' }}
                            >
                                {{ $area }}
                            </option>

                        @endforeach

                    </select>

                </div>



                <div class="edit-field">

                    <label for="timeline">
                        Research Timeline
                    </label>

                    <input
                        type="text"
                        id="timeline"
                        name="timeline"
                        value="{{ old(
                            'timeline',
                            $application->timeline
                        ) }}"
                    >

                </div>



                <div class="edit-field edit-field-full">

                    <label for="researchNeeds">
                        Research Needs
                    </label>

                    <textarea
                        id="researchNeeds"
                        name="researchNeeds"
                        rows="6"
                        required
                    >{{ old(
                        'researchNeeds',
                        $application->research_needs
                    ) }}</textarea>

                </div>



                <div class="edit-field edit-field-full">

                    <label for="document">
                        Replace Supporting Document
                    </label>

                    <input
                        type="file"
                        id="document"
                        name="document"
                        accept=".pdf,.doc,.docx"
                    >

                    @if ($application->document)

                        <small>
                            Leave empty to keep the existing document.
                        </small>

                    @endif

                </div>


            </div>



            <div class="edit-form-actions">


                <a
                    href="{{ route('admin.research-assistants') }}"
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