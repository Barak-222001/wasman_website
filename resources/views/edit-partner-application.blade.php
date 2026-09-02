@extends('layouts.admin')

@section('title', 'Edit Partnership Request')


@section('content')


<div class="edit-page-wrap">


    <div class="edit-page-header">


        <div>

            <span class="section-kicker">
                PARTNERSHIP MANAGEMENT
            </span>

            <h2>
                Edit Partnership Request
            </h2>

            <p>
                Update the submitted partnership information.
            </p>

        </div>


        <a
            href="{{ route('admin.partners') }}"
            class="back-dashboard-btn"
        >
            Back to Partnerships
        </a>


    </div>



    <div class="edit-card">


        <div class="edit-card-header">


            <div class="edit-applicant-avatar">

                {{ strtoupper(substr($partner->organization_name, 0, 1)) }}

            </div>


            <div>

                <h3>
                    {{ $partner->organization_name }}
                </h3>

                <p>
                    {{ $partner->email }}
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
                'partners.update',
                $partner
            ) }}"
            method="POST"
            class="edit-form"
        >

            @csrf

            @method('PUT')



            <div class="edit-form-grid">


                <div class="edit-field">

                    <label for="organizationName">
                        Organization Name
                    </label>

                    <input
                        type="text"
                        id="organizationName"
                        name="organizationName"
                        value="{{ old(
                            'organizationName',
                            $partner->organization_name
                        ) }}"
                        required
                    >

                </div>



                <div class="edit-field">

                    <label for="contactPerson">
                        Contact Person
                    </label>

                    <input
                        type="text"
                        id="contactPerson"
                        name="contactPerson"
                        value="{{ old(
                            'contactPerson',
                            $partner->contact_person
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
                            $partner->email
                        ) }}"
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
                        value="{{ old(
                            'phoneNumber',
                            $partner->phone_number
                        ) }}"
                    >

                </div>



                <div class="edit-field">

                    <label for="country">
                        Country
                    </label>

                    <input
                        type="text"
                        id="country"
                        name="country"
                        value="{{ old(
                            'country',
                            $partner->country
                        ) }}"
                    >

                </div>



                <div class="edit-field">

                    <label for="partnershipType">
                        Partnership Type
                    </label>

                    <select
                        id="partnershipType"
                        name="partnershipType"
                        required
                    >

                        @foreach ([
                            'Strategic Partnership',
                            'Research Collaboration',
                            'Programme Support',
                            'Sponsorship',
                            'Other'
                        ] as $type)

                            <option
                                value="{{ $type }}"
                                {{ old(
                                    'partnershipType',
                                    $partner->partnership_type
                                ) === $type ? 'selected' : '' }}
                            >
                                {{ $type }}
                            </option>

                        @endforeach

                    </select>

                </div>



                <div class="edit-field edit-field-full">

                    <label for="partnershipMessage">
                        Partnership Interest
                    </label>

                    <textarea
                        id="partnershipMessage"
                        name="partnershipMessage"
                        rows="6"
                        required
                    >{{ old(
                        'partnershipMessage',
                        $partner->partnership_message
                    ) }}</textarea>

                </div>


            </div>



            <div class="edit-form-actions">


                <a
                    href="{{ route('admin.partners') }}"
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