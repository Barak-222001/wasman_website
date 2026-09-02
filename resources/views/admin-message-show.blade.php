@extends('layouts.admin')


@section('title', 'View Message')


@push('styles')

<link
    rel="stylesheet"
    href="{{ asset('css/admin-message-show.css') }}"
>

@endpush


@section('content')


<div class="message-detail-page">


    <div class="message-detail-topbar">

        <a
            href="{{ route('admin.messages') }}"
            class="back-to-messages"
        >

            <i class="fas fa-arrow-left"></i>

            Back to Messages

        </a>

    </div>



    <section class="message-detail-hero">

        <div>

            <span>
                MESSAGE DETAILS
            </span>

            <h1>

                {{ $message->subject ?: 'Message from ' . $message->full_name }}

            </h1>

            <p>

                Received
                {{ $message->created_at->format('d F Y') }}
                at
                {{ $message->created_at->format('h:i A') }}

            </p>

        </div>


        <div class="message-status-read">

            <i class="fas fa-envelope-open-text"></i>

            Read

        </div>

    </section>



    <div class="message-detail-layout">


        {{-- MAIN MESSAGE --}}

        <section class="message-main-card">


            <div class="message-sender-header">

                <div class="sender-avatar">

                    {{ strtoupper(substr($message->full_name, 0, 1)) }}

                </div>


                <div>

                    <span>
                        MESSAGE FROM
                    </span>

                    <h2>

                        {{ $message->full_name }}

                    </h2>

                    <a href="mailto:{{ $message->email }}">

                        {{ $message->email }}

                    </a>

                </div>

            </div>



            <div class="message-category-row">

                <span>
                    Category
                </span>

                <strong>

                    {{ $message->category }}

                </strong>

            </div>



            <div class="message-subject">

                <span>
                    SUBJECT
                </span>

                <h3>

                    {{ $message->subject ?: 'No subject provided' }}

                </h3>

            </div>



            <div class="message-body">

                <span>
                    MESSAGE
                </span>

                <p>

                    {!! nl2br(e($message->message)) !!}

                </p>

            </div>



            @if($message->attachment)

                <div class="message-attachment">

                    <div class="attachment-icon">

                        <i class="fas fa-paperclip"></i>

                    </div>


                    <div>

                        <span>
                            ATTACHMENT
                        </span>

                        <strong>
                            Supporting Document
                        </strong>

                    </div>


                    <a
                        href="{{ route('messages.attachment', $message) }}"
                    >

                        <i class="fas fa-download"></i>

                        Download

                    </a>

                </div>

            @endif


        </section>



        {{-- SIDEBAR INFORMATION --}}

        <aside class="message-information-card">


            <div class="information-heading">

                <span>
                    CONTACT INFORMATION
                </span>

                <h3>
                    Sender Details
                </h3>

            </div>



            <div class="information-item">

                <i class="fas fa-user"></i>

                <div>

                    <span>
                        Full Name
                    </span>

                    <strong>

                        {{ $message->full_name }}

                    </strong>

                </div>

            </div>



            <div class="information-item">

                <i class="fas fa-envelope"></i>

                <div>

                    <span>
                        Email
                    </span>

                    <a href="mailto:{{ $message->email }}">

                        {{ $message->email }}

                    </a>

                </div>

            </div>



            <div class="information-item">

                <i class="fas fa-phone"></i>

                <div>

                    <span>
                        Phone
                    </span>

                    <strong>

                        {{ $message->phone_number ?: 'Not provided' }}

                    </strong>

                </div>

            </div>



            <div class="information-item">

                <i class="fas fa-layer-group"></i>

                <div>

                    <span>
                        Category
                    </span>

                    <strong>

                        {{ $message->category }}

                    </strong>

                </div>

            </div>



            <div class="information-item">

                <i class="fas fa-calendar"></i>

                <div>

                    <span>
                        Received
                    </span>

                    <strong>

                        {{ $message->created_at->format('d M Y, h:i A') }}

                    </strong>

                </div>

            </div>



            <div class="message-admin-actions">


                <a
                    href="mailto:{{ $message->email }}"
                    class="reply-message-button"
                >

                    <i class="fas fa-reply"></i>

                    Reply by Email

                </a>



                <form
                    method="POST"
                    action="{{ route('messages.destroy', $message) }}"
                    onsubmit="return confirm('Are you sure you want to permanently delete this message?');"
                >

                    @csrf
                    @method('DELETE')


                    <button
                        type="submit"
                        class="delete-message-button"
                    >

                        <i class="fas fa-trash"></i>

                        Delete Message

                    </button>

                </form>


            </div>


        </aside>


    </div>


</div>


@endsection