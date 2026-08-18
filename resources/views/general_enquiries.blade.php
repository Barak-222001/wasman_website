<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/general_enquiries.css') }}"> 
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

<header class="wasman-main-header">

    <div class="wasman-header-inner">

        <!-- LOGO -->
        <a href="/" class="wasman-brand">
            <img src="{{ asset('pics_vids/logo.png') }}" alt="WASMAN Logo">
        </a>


        <!-- MOBILE MENU -->
        <button class="wasman-menu-btn" type="button">
            <i class="fas fa-bars"></i>
        </button>


        <!-- NAVIGATION -->
        <nav class="wasman-nav">

            <!-- HOME -->
            <a href="/" class="wasman-nav-item">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>


            <!-- ABOUT US -->
            <div class="wasman-nav-dropdown">

                <button class="wasman-nav-item wasman-dropdown-btn" type="button">

                    <span>About Us</span>

                    <i class="fas fa-chevron-down"></i>

                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/history">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-landmark"></i>
                        </div>

                        <div>
                            <strong>History</strong>
                            <small>Learn about WASMAN</small>
                        </div>
                    </a>


                    <a href="/what_we_do">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-water"></i>
                        </div>

                        <div>
                            <strong>What We Do</strong>
                            <small>Our activities and impact</small>
                        </div>
                    </a>


                    <a href="/team">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <div>
                            <strong>Our Team</strong>
                            <small>Meet our leadership</small>
                        </div>
                    </a>


                    <a href="/partners">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-handshake"></i>
                        </div>

                        <div>
                            <strong>Partners</strong>
                            <small>Our strategic partners</small>
                        </div>
                    </a>

                </div>

            </div>


            <!-- PROJECTS -->
            <div class="wasman-nav-dropdown">

                <button class="wasman-nav-item wasman-dropdown-btn" type="button">

                    <span>Projects</span>

                    <i class="fas fa-chevron-down"></i>

                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/areas_of_interest">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-compass"></i>
                        </div>

                        <div>
                            <strong>Areas of Interest</strong>
                            <small>Our thematic focus</small>
                        </div>
                    </a>
                     <a href="/knowledge_bite">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>

                        <div>
                            <strong>Knowledge Bite</strong>
                            <small>view updates</small>
                        </div>

                    </a>


                    <a href="/ongoing_projects">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-spinner"></i>
                        </div>

                        <div>
                            <strong>Ongoing Projects</strong>
                            <small>Current initiatives</small>
                        </div>
                    </a>


                    <a href="/completed_projects">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div>
                            <strong>Completed Projects</strong>
                            <small>Our achievements</small>
                        </div>
                    </a>


                    <a href="/publications">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-book-open"></i>
                        </div>

                        <div>
                            <strong>Publications</strong>
                            <small>Research and knowledge</small>
                        </div>
                    </a>

                </div>

            </div>


            <!-- NEWS & MEDIA -->
            <div class="wasman-nav-dropdown">

                <button class="wasman-nav-item wasman-dropdown-btn" type="button">

                    <span>News & Media</span>

                    <i class="fas fa-chevron-down"></i>

                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/news">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>

                        <div>
                            <strong>News</strong>
                            <small>Latest updates</small>
                        </div>
                    </a>


                    <a href="/reports">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>

                        <div>
                            <strong>Reports</strong>
                            <small>Reports and publications</small>
                        </div>
                    </a>


                    <a href="/events">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>

                        <div>
                            <strong>Events</strong>
                            <small>Upcoming activities</small>
                        </div>
                    </a>


                    <a href="/photos_videos">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-photo-video"></i>
                        </div>

                        <div>
                            <strong>Photos & Videos</strong>
                            <small>Explore our gallery</small>
                        </div>
                    </a>

                </div>

            </div>


            <!-- JOIN US -->
            <div class="wasman-nav-dropdown">

                <button class="wasman-nav-item wasman-dropdown-btn" type="button">

                    <span>Join Us</span>

                    <i class="fas fa-chevron-down"></i>

                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/become_member">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>

                        <div>
                            <strong>Become a Member</strong>
                            <small>Join the WASMAN network</small>
                        </div>
                    </a>


                    <a href="/intern">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>

                        <div>
                            <strong>Intern</strong>
                            <small>Explore opportunities</small>
                        </div>
                    </a>


                    <a href="/volunteer">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>

                        <div>
                            <strong>Volunteer</strong>
                            <small>Support our work</small>
                        </div>
                    </a>


                    <a href="/research_assistant">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-microscope"></i>
                        </div>

                        <div>
                            <strong>Research Assistant</strong>
                            <small>Research opportunities</small>
                        </div>
                    </a>
                    <a href="/partner_with_us">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-handshake"></i>
                        </div>

                        <div>
                            <strong>Partner with us</strong>
                            <small>collaborate with our network</small>
                        </div>

                    </a>

                </div>

            </div>


            <!-- CONTACT US -->
            <div class="wasman-nav-dropdown wasman-contact">

                <button class="wasman-nav-item wasman-dropdown-btn" type="button">

                    <i class="fas fa-envelope"></i>

                    <span>Contact Us</span>

                    <i class="fas fa-chevron-down"></i>

                </button>


                <div class="wasman-dropdown-menu">

                    <!-- LEAVE MESSAGE -->
                    <a href="/leave_message">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-comment-dots"></i>
                        </div>

                        <div>
                            <strong>Leave a Message</strong>
                            <small>Send us a direct message</small>
                        </div>

                    </a>


                    <!-- GENERAL ENQUIRIES -->
                    <a href="/general_enquiries">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-circle-question"></i>
                        </div>

                        <div>
                            <strong>General Enquiries</strong>
                            <small>Questions and information</small>
                        </div>

                    </a>

                </div>

            </div>

        </nav>

    </div>

</header>



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
                Need information about WASMAN's programmes,
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
                src="{{ asset('images/enquiry-team.jpg') }}"
                alt="WASMAN Support Team"
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
                CONNECT WITH WASMAN
            </span>

            <h2>
                Connecting You With
                <em>The Right Information</em>
            </h2>

            <p>
                The WASMAN enquiry desk serves as a first
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
                Questions about joining WASMAN,
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
                and organizations to work with WASMAN.
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
                reports and WASMAN publications.
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
                WASMAN welcomes questions and enquiries
                from individuals and organizations interested
                in aquatic science, environmental conservation,
                research and sustainable development.
            </p>

            <a
                href="#enquiry-form"
                class="dark-button"
            >
                Talk To WASMAN
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
            Reach WASMAN Directly
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
                WASMAN support team.
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
                WASMAN Secretariat
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



        <form
            class="enquiry-form"
            action="#"
            method="POST"
        >

            @csrf


            <div class="form-row">

                <div class="form-group">

                    <label>
                        Full Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Enter your full name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        required
                    >

                </div>

            </div>


            <div class="form-row">

                <div class="form-group">

                    <label>
                        Phone Number
                    </label>

                    <input
                        type="tel"
                        name="phone"
                        placeholder="+233 XXX XXX XXX"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Enquiry Type
                    </label>

                    <select
                        name="enquiry_type"
                        required
                    >

                        <option value="">
                            Select enquiry type
                        </option>

                        <option>
                            Membership
                        </option>

                        <option>
                            Research Support
                        </option>

                        <option>
                            Partnership
                        </option>

                        <option>
                            Internship
                        </option>

                        <option>
                            Volunteer
                        </option>

                        <option>
                            Events & Publications
                        </option>

                        <option>
                            General Inquiry
                        </option>

                    </select>

                </div>

            </div>


            <div class="form-group">

                <label>
                    Your Message
                </label>

                <textarea
                    name="message"
                    rows="7"
                    placeholder="Write your enquiry here..."
                    required
                ></textarea>

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
                    How can I join WASMAN?
                </h3>

                <span>
                    <i class="fa-solid fa-plus"></i>
                </span>

            </div>

            <p>
                You can apply through the membership
                section of the WASMAN website.
            </p>

        </div>



        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    Does WASMAN support student research?
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
                    Can organizations partner with WASMAN?
                </h3>

                <span>
                    <i class="fa-solid fa-plus"></i>
                </span>

            </div>

            <p>
                Yes. WASMAN welcomes institutions
                and organizations working towards
                aquatic conservation and sustainable
                blue economy development.
            </p>

        </div>



        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    Can I volunteer with WASMAN?
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



</body>

</html>
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
