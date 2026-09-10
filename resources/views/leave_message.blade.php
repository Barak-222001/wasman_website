<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WASMaN | Leave a Message</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="{{ asset('css/leave_message.css') }}">

            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')

{{-- =========================================================
     LEAVE A MESSAGE PAGE
========================================================= --}}

{{-- HERO SECTION --}}
<section class="message-hero">

    <div class="message-hero-bg"></div>

    <div class="message-overlay">

        <div class="message-content">

            <span class="hero-eyebrow">
                GET IN TOUCH
            </span>

            <h1>
                Your Voice Matters.
                <br>
                Let's Start a Conversation.
            </h1>

            <p>
                Whether you have a question, research idea,
                collaboration opportunity or simply want to
                connect with WASMaN, our team is ready to listen.
            </p>

            <div class="message-hero-actions">

                <a href="#message-form" class="primary-message-btn">
                    Leave a Message
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a href="#contact-information" class="secondary-message-btn">
                    Contact Information
                </a>

            </div>

        </div>

        {{-- HERO FLOATING INFO --}}
        <div class="hero-contact-card">

            <div class="hero-contact-icon">
                <i class="fas fa-comments"></i>
            </div>

            <div>
                <span>WE ARE LISTENING</span>
                <strong>Let's build meaningful connections.</strong>
            </div>

        </div>

    </div>

</section>


{{-- INTRODUCTION / CONNECT SECTION --}}
<section class="connect-section">

    <div class="connect-container">

        <div class="connect-image">

            <img
                src="{{ asset('pics_vids/cc.png') }}"
                alt="WASMaN Team">

            <div class="image-caption">

                <div class="caption-icon">
                    <i class="fas fa-water"></i>
                </div>

                <div>
                    <span>CONNECT WITH WASMaN</span>
                    <strong>Ideas. People. Impact.</strong>
                </div>

            </div>

        </div>


        <div class="connect-text">

            <span class="section-eyebrow">
                CONNECT WITH US
            </span>

            <h2>
                Building Conversations
                That Create Impact
            </h2>

            <p>
                WASMaN believes meaningful change begins with
                communication, collaboration and shared knowledge.
                We welcome researchers, students, communities,
                organizations and partners to connect with us.
            </p>

            <p>
                Whether you are exploring a research collaboration,
                looking for partnership opportunities or simply
                seeking more information about our programmes,
                we would be happy to hear from you.
            </p>


            <div class="connect-list">

                <div class="connect-item">

                    <div class="connect-icon">
                        <i class="fas fa-flask"></i>
                    </div>

                    <div>
                        <strong>Research Inquiries</strong>
                        <span>
                            Discuss research and scientific collaboration.
                        </span>
                    </div>

                </div>


                <div class="connect-item">

                    <div class="connect-icon">
                        <i class="fas fa-handshake"></i>
                    </div>

                    <div>
                        <strong>Partnership Opportunities</strong>
                        <span>
                            Explore opportunities to work together.
                        </span>
                    </div>

                </div>


                <div class="connect-item">

                    <div class="connect-icon">
                        <i class="fas fa-users"></i>
                    </div>

                    <div>
                        <strong>Membership</strong>
                        <span>
                            Learn more about joining our network.
                        </span>
                    </div>

                </div>


                <div class="connect-item">

                    <div class="connect-icon">
                        <i class="fas fa-leaf"></i>
                    </div>

                    <div>
                        <strong>Environmental Initiatives</strong>
                        <span>
                            Connect around conservation activities.
                        </span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- MESSAGE CATEGORIES --}}
<section class="message-categories" id="message-categories">

    <div class="section-title centered">

        <span class="section-eyebrow">
            HOW CAN WE HELP?
        </span>

        <h2>
            Tell Us What You Need
        </h2>

        <p>
            Select the area that best describes your inquiry
            and help us direct your message to the right team.
        </p>

    </div>


    <div class="message-category-grid">

        <div class="message-category-card">

            <div class="category-number">
                01
            </div>

            <div class="category-icon">
                <i class="fas fa-circle-question"></i>
            </div>

            <h3>
                General Inquiry
            </h3>

            <p>
                Questions about WASMaN, our programmes,
                activities and organizational work.
            </p>

            <a href="#message-form">
                Send Inquiry
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="message-category-card">

            <div class="category-number">
                02
            </div>

            <div class="category-icon">
                <i class="fas fa-microscope"></i>
            </div>

            <h3>
                Research Collaboration
            </h3>

            <p>
                Connect with us about research, field studies,
                data and scientific collaboration.
            </p>

            <a href="#message-form">
                Discuss Research
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="message-category-card">

            <div class="category-number">
                03
            </div>

            <div class="category-icon">
                <i class="fas fa-handshake"></i>
            </div>

            <h3>
                Partnership Request
            </h3>

            <p>
                Explore strategic partnerships, programmes,
                projects and institutional collaboration.
            </p>

            <a href="#message-form">
                Start a Partnership
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="message-category-card">

            <div class="category-number">
                04
            </div>

            <div class="category-icon">
                <i class="fas fa-user-plus"></i>
            </div>

            <h3>
                Membership Support
            </h3>

            <p>
                Get assistance with membership,
                volunteering, internships and participation.
            </p>

            <a href="#message-form">
                Get Support
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


{{-- CONTACT INFORMATION --}}
<section class="contact-information" id="contact-information">

    <div class="contact-information-inner">

        <div class="section-title">

            <span class="section-eyebrow">
                CONTACT DETAILS
            </span>

            <h2>
                Reach WASMaN Directly
            </h2>

            <p>
                Prefer to contact us directly? You can reach
                the WASMaN team through the channels below.
            </p>

        </div>


        <div class="contact-grid">

            {{-- ADDRESS --}}
            <div class="contact-card">

                <div class="contact-card-icon">
                    <i class="fas fa-location-dot"></i>
                </div>

                <div>

                    <span>
                        OUR LOCATION
                    </span>

                    <h3>
                        Address
                    </h3>

                    <p>
                        WASMaN Headquarters<br>
                        University / Research Centre Address<br>
                        Cape Coast, Ghana
                    </p>

                </div>

            </div>


            {{-- EMAIL --}}
            <div class="contact-card">

                <div class="contact-card-icon">
                    <i class="fas fa-envelope"></i>
                </div>

                <div>

                    <span>
                        WRITE TO US
                    </span>

                    <h3>
                        Email
                    </h3>

                    <a href="mailto:info@wasman.org">
                        info@wasman.org
                    </a>

                    <small>
                        We welcome your questions and ideas.
                    </small>

                </div>

            </div>


            {{-- PHONE --}}
            <div class="contact-card">

                <div class="contact-card-icon">
                    <i class="fas fa-phone"></i>
                </div>

                <div>

                    <span>
                        TALK TO US
                    </span>

                    <h3>
                        Phone
                    </h3>

                    <a href="tel:+233000000000">
                        +233 XXX XXX XXX
                    </a>

                    <small>
                        Available during working hours.
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- MESSAGE FORM --}}
<section class="leave-message-form" id="message-form">

    <div class="message-form-wrapper">


        {{-- FORM INTRO --}}
        <div class="form-intro">

            <span class="section-eyebrow">
                SEND MESSAGE
            </span>

            <h2>
                Let's Start
                Something Meaningful
            </h2>

            <p>
                Fill out the form and tell us how we can
                connect, collaborate or support you.
            </p>


            <div class="form-assurance">

                <div>
                    <i class="fas fa-shield-halved"></i>
                </div>

                <div>
                    <strong>Your information is important to us.</strong>

                    <span>
                        We use your details only to respond
                        to your inquiry.
                    </span>
                </div>

            </div>


            <div class="form-contact-note">

                <i class="fas fa-clock"></i>

                <span>
                    We aim to respond to enquiries
                    within a few working days.
                </span>

            </div>

        </div>


        {{-- FORM --}}
        <div class="message-form-column">

            @if(session('success'))

                <div class="message-success">
                    <i class="fa-solid fa-circle-check"></i>

                    <div>
                        {{ session('success') }}
                    </div>
                </div>

            @endif


            @if($errors->any())

                <div class="message-errors">

                    <div class="message-errors-heading">
                        <i class="fa-solid fa-circle-exclamation"></i>

                        <strong>
                            Please correct the following:
                        </strong>
                    </div>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <div class="message-form-container">

                <form
                    action="{{ route('messages.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                @csrf


                <div class="form-grid">

                    <div class="form-group">

                        <label for="full-name">
                            Full Name
                        </label>

                        <div class="input-wrapper">

                            <i class="fas fa-user"></i>

                            <input
                                id="full-name"
                                name="fullName"
                                type="text"
                                value="{{ old('fullName') }}"
                                placeholder="Enter your full name"
                                required
                            >

                        </div>

                        @error('fullName')

                            <span class="form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email Address
                        </label>

                        <div class="input-wrapper">

                            <i class="fas fa-envelope"></i>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                placeholder="Enter your email"
                                required
                            >

                        </div>

                        @error('email')

                            <span class="form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    <div class="form-group">

                        <label for="phone">
                            Phone Number
                        </label>

                        <div class="input-wrapper">

                            <i class="fas fa-phone"></i>

                            <input
                                id="phone"
                                name="phoneNumber"
                                type="tel"
                                value="{{ old('phoneNumber') }}"
                                placeholder="+233 XXX XXX XXX"
                            >

                        </div>

                        @error('phoneNumber')

                            <span class="form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    <div class="form-group">

                        <label for="category">
                            Message Category
                        </label>

                        <div class="input-wrapper">

                            <i class="fas fa-layer-group"></i>

                            <select
                                id="category"
                                name="category"
                                required
                            >

                                <option value="">
                                    Select a category
                                </option>

                                <option
                                    value="General Inquiry"
                                    {{ old('category') == 'General Inquiry' ? 'selected' : '' }}
                                >
                                    General Inquiry
                                </option>

                                <option
                                    value="Research Collaboration"
                                    {{ old('category') == 'Research Collaboration' ? 'selected' : '' }}
                                >
                                    Research Collaboration
                                </option>

                                <option
                                    value="Partnership"
                                    {{ old('category') == 'Partnership' ? 'selected' : '' }}
                                >
                                    Partnership
                                </option>

                                <option
                                    value="Membership"
                                    {{ old('category') == 'Membership' ? 'selected' : '' }}
                                >
                                    Membership
                                </option>

                                <option
                                    value="Internship"
                                    {{ old('category') == 'Internship' ? 'selected' : '' }}
                                >
                                    Internship
                                </option>

                                <option
                                    value="Volunteer"
                                    {{ old('category') == 'Volunteer' ? 'selected' : '' }}
                                >
                                    Volunteer
                                </option>

                            </select>

                        </div>

                        @error('category')

                            <span class="form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>

                </div>


                {{-- SUBJECT --}}

                <div class="form-group">

                    <label for="subject">
                        Subject
                    </label>

                    <div class="input-wrapper">

                        <i class="fas fa-heading"></i>

                        <input
                            id="subject"
                            name="subject"
                            type="text"
                            value="{{ old('subject') }}"
                            placeholder="What would you like to discuss?"
                        >

                    </div>

                    @error('subject')

                        <span class="form-error">
                            {{ $message }}
                        </span>

                    @enderror

                </div>


                {{-- MESSAGE --}}

                <div class="form-group">

                    <label for="message">
                        Your Message
                    </label>

                    <div class="textarea-wrapper">

                        <textarea
                            id="message"
                            name="message"
                            rows="7"
                            placeholder="Write your message here..."
                            required
                        >{{ old('message') }}</textarea>

                    </div>

                    @error('message')

                        <span class="form-error">
                            {{ $message }}
                        </span>

                    @enderror

                </div>


                {{-- ATTACHMENT --}}

                <div class="file-area">

                    <div class="file-icon">

                        <i class="fas fa-paperclip"></i>

                    </div>

                    <div class="file-content">

                        <label>
                            Attach Document
                            <span>(Optional)</span>
                        </label>

                        <small>
                            PDF, DOC, DOCX or other supporting documents
                        </small>

                        <input
                            type="file"
                            name="attachment"
                            accept=".pdf,.doc,.docx"
                        >

                        @error('attachment')

                            <span class="form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>

                </div>


                {{-- SUBMIT --}}

                <button
                    type="submit"
                    class="message-submit-btn"
                >

                    Send Message

                    <i class="fas fa-paper-plane"></i>

                </button>

                </form>

            </div>

        </div>

    </div>

</section>


{{-- FAQ --}}
<section class="message-faq" id="message-faq">

    <div class="section-title centered">

        <span class="section-eyebrow">
            FREQUENTLY ASKED QUESTIONS
        </span>

        <h2>
            Before You Send Us a Message
        </h2>

    </div>


    <div class="faq-grid">


        <div class="faq-item">

            <div class="faq-icon">
                <i class="fas fa-clock"></i>
            </div>

            <div>

                <h3>
                    How long does WASMaN take to respond?
                </h3>

                <p>
                    We aim to respond to enquiries within
                    a few working days.
                </p>

            </div>

        </div>


        <div class="faq-item">

            <div class="faq-icon">
                <i class="fas fa-handshake"></i>
            </div>

            <div>

                <h3>
                    Can organizations partner with WASMaN?
                </h3>

                <p>
                    Yes. We welcome partnerships that support
                    aquatic conservation, research and
                    sustainable development.
                </p>

            </div>

        </div>


        <div class="faq-item">

            <div class="faq-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>

            <div>

                <h3>
                    Can students contact WASMaN?
                </h3>

                <p>
                    Absolutely. Students interested in
                    research, internships, volunteering and
                    professional development are welcome.
                </p>

            </div>

        </div>


        <div class="faq-item">

            <div class="faq-icon">
                <i class="fas fa-users"></i>
            </div>

            <div>

                <h3>
                    Can I contact WASMaN about membership?
                </h3>

                <p>
                    Yes. Our team can provide information
                    about membership categories and how to join
                    the network.
                </p>

            </div>

        </div>


    </div>

</section>


{{-- FINAL CTA --}}
<section class="message-final-cta">

    <div class="cta-decoration"></div>

    <div class="cta-content">

        <span>
            LET'S CONNECT
        </span>

        <h2>
            Have an Idea?
            <br>
            Let's Talk About It.
        </h2>

        <p>
            Meaningful partnerships begin with simple
            conversations. Reach out and let's explore
            what we can accomplish together.
        </p>

        <a href="#message-form">
            Start a Conversation
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>

</section>
      

<footer class="message-premium-footer">

    <div class="message-footer-top">

        <div class="message-footer-brand">

            <div class="message-footer-mark">
                <i class="fa-solid fa-water"></i>
            </div>

            <div>
                <h2>WASMaN</h2>
                <span>Women in Aquatic Science and Management Network</span>
            </div>

        </div>

        <div class="message-footer-tags">
            <span>Connect</span>
            <span>Collaborate</span>
            <span>Research</span>
            <span>Impact</span>
        </div>

    </div>


    <div class="message-footer-main">

        <div class="message-footer-about">

            <p>
                WASMaN welcomes questions, ideas and opportunities for
                collaboration from researchers, students, communities,
                institutions and partners.
            </p>

            <div class="message-footer-socials">
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>

        </div>


        <div class="message-footer-links">
            <h3>Explore</h3>
            <a href="/">Home</a>
            <a href="/history">About WASMaN</a>
            <a href="/team">Our Team</a>
            <a href="/ongoing_projects">Ongoing Projects</a>
            <a href="/completed_projects">Completed Projects</a>
        </div>


        <div class="message-footer-links">
            <h3>Contact</h3>
            <a href="#message-categories">Message Categories</a>
            <a href="#contact-information">Contact Details</a>
            <a href="#message-form">Leave a Message</a>
            <a href="#message-faq">FAQs</a>
            <a href="/general_enquiries">General Enquiries</a>
        </div>


        <div class="message-footer-links">
            <h3>Get Involved</h3>
            <a href="/become_member">Become a Member</a>
            <a href="/partner_with_us">Partner With Us</a>
            <a href="/intern">Internships</a>
            <a href="/volunteer">Volunteer</a>
            <a href="/research_assistant">Research Assistance</a>
        </div>


        <div class="message-footer-contact">
            <h3>Connect</h3>

            <div>
                <i class="fa-solid fa-envelope"></i>
                <span>info@wasman.org</span>
            </div>

            <div>
                <i class="fa-solid fa-location-dot"></i>
                <span>Cape Coast, Ghana</span>
            </div>

            <a href="#message-form" class="message-footer-enquiry">
                Send a Message
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>


    <div class="message-footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network (WASMaN).
            All Rights Reserved.
        </p>

        <div>
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
        </div>

    </div>

</footer>


     
{{-- =========================================================
     AFTER SUBMISSION: RETURN USER TO THE MESSAGE FORM
========================================================= --}}
@if(session('success') || $errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const messageFormSection = document.getElementById('message-form');

        if (!messageFormSection) {
            return;
        }

        if (window.history && window.history.replaceState) {
            window.history.replaceState(
                null,
                document.title,
                window.location.pathname + window.location.search + '#message-form'
            );
        } else {
            window.location.hash = 'message-form';
        }

        requestAnimationFrame(function () {
            const headerOffset = 85;
            const formTop =
                messageFormSection.getBoundingClientRect().top +
                window.pageYOffset -
                headerOffset;

            window.scrollTo({
                top: formTop,
                left: 0,
                behavior: 'auto'
            });
        });
    });
</script>
@endif

<script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
    </body>
   

</html>
