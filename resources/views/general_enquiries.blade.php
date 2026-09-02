<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/general_enquiries.css') }}"> 

        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')




{{-- =========================================================
     HERO
========================================================= --}}

<section class="enquiry-hero">

    <div class="hero-overlay"></div>


    <div class="hero-container">

        <div class="hero-content">

            <span class="hero-label">
                GENERAL ENQUIRIES
            </span>

            <h1>
                We Are Here To
                <strong>Answer Your Questions.</strong>
            </h1>

            <p>
                Need information about WASMaN's programmes,
                membership, research, partnerships or
                environmental initiatives? Our team is ready
                to connect you with the right information.
            </p>


            <div class="hero-buttons">

                <a
                    href="#enquiry-form"
                    class="primary-button"
                >
                    Submit An Enquiry
                    <i class="fa-solid fa-arrow-right"></i>
                </a>


                <a
                    href="#contact-options"
                    class="secondary-button"
                >
                    Contact Options
                </a>

            </div>

        </div>


        <div class="hero-badge">

            <i class="fa-solid fa-comments"></i>

            <div>

                <strong>
                    We're Listening
                </strong>

                <span>
                    Your questions matter to us.
                </span>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     INTRODUCTION
========================================================= --}}

<section class="enquiry-intro">

    <div class="intro-container">


        <div class="intro-image">

            <img
                src="{{ asset('../pics_vids/en.png') }}"
                alt="WASMaN Support Team"
            >


            <div class="image-caption">

                <i class="fa-solid fa-water"></i>

                <div>

                    <strong>
                        Connecting People
                    </strong>

                    <span>
                        Building meaningful conversations
                    </span>

                </div>

            </div>

        </div>



        <div class="intro-content">

            <span class="section-label">
                CONNECT WITH WASMaN
            </span>

            <h2>
                Connecting You With
                <em>The Right Information</em>
            </h2>

            <p>
                The WASMaN enquiry desk serves as a first
                point of contact for individuals, organizations,
                researchers, students and partners seeking
                information about our work.
            </p>

            <p>
                Whether you want to learn about our programmes,
                explore a research collaboration, join our
                network or discuss a partnership opportunity,
                we are happy to guide you.
            </p>


            <div class="intro-highlights">

                <div>

                    <i class="fa-solid fa-check"></i>

                    <span>
                        Research enquiries
                    </span>

                </div>


                <div>

                    <i class="fa-solid fa-check"></i>

                    <span>
                        Membership information
                    </span>

                </div>


                <div>

                    <i class="fa-solid fa-check"></i>

                    <span>
                        Partnership opportunities
                    </span>

                </div>


                <div>

                    <i class="fa-solid fa-check"></i>

                    <span>
                        Programme information
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     ENQUIRY SERVICES
========================================================= --}}

<section class="enquiry-services">

    <div class="section-heading">

        <span class="section-label">
            HOW CAN WE HELP?
        </span>

        <h2>
            Choose Your Area Of Enquiry
        </h2>

        <p>
            Tell us what you are looking for and
            we will help direct your enquiry.
        </p>

    </div>


    <div class="services-grid">


        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-users"></i>
            </div>

            <h3>
                Membership
            </h3>

            <p>
                Questions about joining WASMaN,
                membership benefits and registration.
            </p>

            <a href="/become_member">
                Learn More
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>



        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-flask"></i>
            </div>

            <h3>
                Research Support
            </h3>

            <p>
                Information about research assistance,
                collaboration and scientific networks.
            </p>

            <a href="/research_assistant">
                Learn More
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>



        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-user-graduate"></i>
            </div>

            <h3>
                Internships
            </h3>

            <p>
                Enquiries about internship opportunities,
                placements and applications.
            </p>

            <a href="/intern">
                Learn More
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>



        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-hands-holding-circle"></i>
            </div>

            <h3>
                Volunteering
            </h3>

            <p>
                Find out how you can contribute to
                conservation and community initiatives.
            </p>

            <a href="/volunteer">
                Learn More
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>



        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-handshake"></i>
            </div>

            <h3>
                Partnerships
            </h3>

            <p>
                Explore opportunities for institutions
                and organizations to work with WASMaN.
            </p>

            <a href="#enquiry-form">
                Start Conversation
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>



        <div class="service-card">

            <div class="service-icon">
                <i class="fa-solid fa-calendar-days"></i>
            </div>

            <h3>
                Events & Publications
            </h3>

            <p>
                Questions about conferences, events,
                reports and WASMaN publications.
            </p>

            <a href="/events">
                Explore
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


    </div>

</section>



{{-- =========================================================
     WHO WE SERVE
========================================================= --}}

<section class="who-section">

    <div class="who-container">


        <div class="who-content">

            <span class="section-label">
                WHO WE SUPPORT
            </span>

            <h2>
                Our Enquiry Services
                Are Open To Everyone.
            </h2>

            <p>
                WASMaN welcomes questions and enquiries
                from individuals and organizations interested
                in aquatic science, environmental conservation,
                research and sustainable development.
            </p>

            <a
                href="#enquiry-form"
                class="dark-button"
            >
                Talk To WASMaN
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <div class="audience-grid">


            <div class="audience-card">

                <i class="fa-solid fa-user-graduate"></i>

                <h3>
                    Students
                </h3>

                <p>
                    Opportunities, research support
                    and learning resources.
                </p>

            </div>


            <div class="audience-card">

                <i class="fa-solid fa-microscope"></i>

                <h3>
                    Researchers
                </h3>

                <p>
                    Collaboration, data and
                    scientific networks.
                </p>

            </div>


            <div class="audience-card">

                <i class="fa-solid fa-building"></i>

                <h3>
                    Organizations
                </h3>

                <p>
                    Partnerships and conservation
                    initiatives.
                </p>

            </div>


            <div class="audience-card">

                <i class="fa-solid fa-people-group"></i>

                <h3>
                    Communities
                </h3>

                <p>
                    Environmental awareness and
                    engagement opportunities.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     CONTACT OPTIONS
========================================================= --}}

<section
    class="contact-options"
    id="contact-options"
>

    <div class="section-heading light">

        <span class="section-label">
            CONTACT OPTIONS
        </span>

        <h2>
            Reach WASMaN Directly
        </h2>

        <p>
            Choose the communication channel that
            works best for you.
        </p>

    </div>


    <div class="contact-grid">


        <div class="contact-card">

            <div class="contact-icon">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <span>
                EMAIL
            </span>

            <h3>
                info@wasman.org
            </h3>

            <p>
                Send us your questions and
                enquiries by email.
            </p>

        </div>



        <div class="contact-card">

            <div class="contact-icon">
                <i class="fa-solid fa-phone"></i>
            </div>

            <span>
                PHONE
            </span>

            <h3>
                +233 XXX XXX XXX
            </h3>

            <p>
                Speak directly with the
                WASMaN support team.
            </p>

        </div>



        <div class="contact-card">

            <div class="contact-icon">
                <i class="fa-solid fa-location-dot"></i>
            </div>

            <span>
                OFFICE
            </span>

            <h3>
                WASMaN Secretariat
            </h3>

            <p>
                University / Research Centre Address
            </p>

        </div>


    </div>

</section>



{{-- =========================================================
     ENQUIRY FORM
========================================================= --}}

<section
    class="form-section"
    id="enquiry-form"
>

    <div class="form-container">


        <div class="form-intro">

            <span class="section-label">
                SEND YOUR QUESTION
            </span>

            <h2>
                Let's Start
                A Conversation.
            </h2>

            <p>
                Complete the form and tell us what
                you would like to know. Our team will
                review your enquiry and connect you
                with the appropriate person.
            </p>


            <div class="form-note">

                <i class="fa-solid fa-circle-info"></i>

                <span>
                    Please provide accurate contact
                    information so we can respond to you.
                </span>

            </div>

        </div>



        {{-- Backend route will be connected when we build the General Enquiries module. --}}
        @if(session('success'))

            <div class="form-success">
                {{ session('success') }}
            </div>

        @endif


        @if($errors->any())

            <div class="form-errors">

                <strong>
                    Please correct the following:
                </strong>

                <ul>

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            class="enquiry-form"
             action="{{ route('general-enquiries.store') }}"
            method="POST"
        >

            @csrf


            <div class="form-row">

                <div class="form-group">

                    <label for="full-name">
                        Full Name
                    </label>

                    <input
                        id="full-name"
                        type="text"
                        name="full_name"
                        value="{{ old('full_name') }}"
                        placeholder="Enter your full name"
                        autocomplete="name"
                        required
                    >

                    @error('full_name')

                        <span class="form-error">
                            {{ $message }}
                        </span>

                    @enderror

                </div>


                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        autocomplete="email"
                        required
                    >

                    @error('email')

                        <span class="form-error">
                            {{ $message }}
                        </span>

                    @enderror

                </div>

            </div>


            <div class="form-row">

                <div class="form-group">

                    <label for="phone-number">
                        Phone Number
                    </label>

                    <input
                        id="phone-number"
                        type="tel"
                        name="phone_number"
                        value="{{ old('phone_number') }}"
                        placeholder="+233 XXX XXX XXX"
                        autocomplete="tel"
                    >

                    @error('phone_number')

                        <span class="form-error">
                            {{ $message }}
                        </span>

                    @enderror

                </div>


                <div class="form-group">

                    <label for="enquiry-type">
                        Enquiry Type
                    </label>

                    <select
                        id="enquiry-type"
                        name="enquiry_type"
                        required
                    >

                        <option value="">
                            Select enquiry type
                        </option>

                        <option
                            value="Membership"
                            {{ old('enquiry_type') === 'Membership' ? 'selected' : '' }}
                        >
                            Membership
                        </option>

                        <option
                            value="Research Support"
                            {{ old('enquiry_type') === 'Research Support' ? 'selected' : '' }}
                        >
                            Research Support
                        </option>

                        <option
                            value="Partnership"
                            {{ old('enquiry_type') === 'Partnership' ? 'selected' : '' }}
                        >
                            Partnership
                        </option>

                        <option
                            value="Internship"
                            {{ old('enquiry_type') === 'Internship' ? 'selected' : '' }}
                        >
                            Internship
                        </option>

                        <option
                            value="Volunteer"
                            {{ old('enquiry_type') === 'Volunteer' ? 'selected' : '' }}
                        >
                            Volunteer
                        </option>

                        <option
                            value="Events & Publications"
                            {{ old('enquiry_type') === 'Events & Publications' ? 'selected' : '' }}
                        >
                            Events & Publications
                        </option>

                        <option
                            value="General Inquiry"
                            {{ old('enquiry_type') === 'General Inquiry' ? 'selected' : '' }}
                        >
                            General Inquiry
                        </option>

                    </select>

                    @error('enquiry_type')

                        <span class="form-error">
                            {{ $message }}
                        </span>

                    @enderror

                </div>

            </div>


            <div class="form-group">

                <label for="enquiry-message">
                    Your Message
                </label>

                <textarea
                    id="enquiry-message"
                    name="message"
                    rows="7"
                    placeholder="Write your enquiry here..."
                    required
                >{{ old('message') }}</textarea>

                @error('message')

                    <span class="form-error">
                        {{ $message }}
                    </span>

                @enderror

            </div>


            <button
                type="submit"
                class="submit-button"
            >

                Submit Enquiry

                <i class="fa-solid fa-paper-plane"></i>

            </button>

        </form>

    </div>

</section>



{{-- =========================================================
     FAQ
========================================================= --}}

<section class="faq-section">

    <div class="section-heading">

        <span class="section-label">
            FAQ
        </span>

        <h2>
            Frequently Asked Questions
        </h2>

        <p>
            Quick answers to some common questions.
        </p>

    </div>


    <div class="faq-container">


        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    How can I join WASMaN?
                </h3>

                <span>
                    <i class="fa-solid fa-plus"></i>
                </span>

            </div>

            <p>
                You can apply through the membership
                section of the WASMaN website.
            </p>

        </div>



        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    Does WASMaN support student research?
                </h3>

                <span>
                    <i class="fa-solid fa-plus"></i>
                </span>

            </div>

            <p>
                Yes. Students can request research
                support and explore collaboration
                opportunities.
            </p>

        </div>



        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    Can organizations partner with WASMaN?
                </h3>

                <span>
                    <i class="fa-solid fa-plus"></i>
                </span>

            </div>

            <p>
                Yes. WASMaN welcomes institutions
                and organizations working towards
                aquatic conservation and sustainable
                blue economy development.
            </p>

        </div>



        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    Can I volunteer with WASMaN?
                </h3>

                <span>
                    <i class="fa-solid fa-plus"></i>
                </span>

            </div>

            <p>
                Yes. Visit the volunteer section to
                explore available opportunities and
                submit an application.
            </p>

        </div>


    </div>

</section>



{{-- =========================================================
     FINAL CTA
========================================================= --}}

<section class="final-cta">

    <div class="cta-content">

        <span>
            HAVE A QUESTION?
        </span>

        <h2>
            Let's Build Something
            Meaningful Together.
        </h2>

        <p>
            Whether you're a student, researcher,
            organization or community, your ideas
            and questions can contribute to a healthier
            and more sustainable aquatic future.
        </p>

        <a href="#enquiry-form">
            Start A Conversation
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>

</section>


<script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>

</body>
</html>
