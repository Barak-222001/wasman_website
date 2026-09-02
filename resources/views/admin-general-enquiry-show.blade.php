@extends('layouts.admin')


@section('title', 'View General Enquiry')


@push('styles')

<link
    rel="stylesheet"
    href="{{ asset('css/admin-general-enquiry-show.css') }}"
>

@endpush


@section('content')


<div class="enquiry-detail-page">


    <div class="enquiry-detail-topbar">

        <a
            href="{{ route('admin.general-enquiries') }}"
            class="back-button"
        >

            <i class="fa-solid fa-arrow-left"></i>

            Back to General Enquiries

        </a>

    </div>



    <section class="enquiry-detail-hero">

        <div>

            <span>
                GENERAL ENQUIRY
            </span>

            <h1>

                {{ $enquiry->enquiry_type }}

            </h1>

            <p>

                Received
                {{ $enquiry->created_at->format('d F Y') }}
                at
                {{ $enquiry->created_at->format('h:i A') }}

            </p>

        </div>


        <div class="read-status">

            <i class="fa-solid fa-envelope-open-text"></i>

            Read

        </div>

    </section>



    <div class="enquiry-detail-layout">


        <section class="enquiry-main-card">


            <div class="sender-header">

                <div class="sender-avatar">

                    {{ strtoupper(
                        substr(
                            $enquiry->full_name,
                            0,
                            1
                        )
                    ) }}

                </div>


                <div>

                    <span>
                        ENQUIRY FROM
                    </span>

                    <h2>

                        {{ $enquiry->full_name }}

                    </h2>

                    <a
                        href="mailto:{{ $enquiry->email }}"
                    >

                        {{ $enquiry->email }}

                    </a>

                </div>

            </div>



            <div class="enquiry-type-row">

                <span>
                    Enquiry Type
                </span>

                <strong>

                    {{ $enquiry->enquiry_type }}

                </strong>

            </div>



            <div class="enquiry-message">

                <span>
                    MESSAGE
                </span>

                <p>

                    {!! nl2br(
                        e($enquiry->message)
                    ) !!}

                </p>

            </div>


        </section>



        <aside class="enquiry-info-card">


            <div class="info-heading">

                <span>
                    CONTACT INFORMATION
                </span>

                <h3>
                    Sender Details
                </h3>

            </div>



            <div class="info-item">

                <i class="fa-solid fa-user"></i>

                <div>

                    <span>
                        Full Name
                    </span>

                    <strong>

                        {{ $enquiry->full_name }}

                    </strong>

                </div>

            </div>



            <div class="info-item">

                <i class="fa-solid fa-envelope"></i>

                <div>

                    <span>
                        Email
                    </span>

                    <a
                        href="mailto:{{ $enquiry->email }}"
                    >

                        {{ $enquiry->email }}

                    </a>

                </div>

            </div>



            <div class="info-item">

                <i class="fa-solid fa-phone"></i>

                <div>

                    <span>
                        Phone
                    </span>

                    <strong>

                        {{ $enquiry->phone_number ?: 'Not provided' }}

                    </strong>

                </div>

            </div>



            <div class="info-item">

                <i class="fa-solid fa-layer-group"></i>

                <div>

                    <span>
                        Enquiry Type
                    </span>

                    <strong>

                        {{ $enquiry->enquiry_type }}

                    </strong>

                </div>

            </div>



            <div class="info-item">

                <i class="fa-solid fa-calendar"></i>

                <div>

                    <span>
                        Received
                    </span>

                    <strong>

                        {{ $enquiry->created_at->format(
                            'd M Y, h:i A'
                        ) }}

                    </strong>

                </div>

            </div>



            <div class="enquiry-actions">


                <a
                    href="mailto:{{ $enquiry->email }}"
                    class="reply-button"
                >

                    <i class="fa-solid fa-reply"></i>

                    Reply by Email

                </a>



                <form
                    method="POST"
                    action="{{ route(
                        'general-enquiries.destroy',
                        $enquiry
                    ) }}"
                    onsubmit="return confirm('Are you sure you want to permanently delete this enquiry?');"
                >

                    @csrf
                    @method('DELETE')


                    <button
                        type="submit"
                        class="delete-button"
                    >

                        <i class="fa-solid fa-trash"></i>

                        Delete Enquiry

                    </button>

                </form>


            </div>


        </aside>


    </div>


</div>


@endsection