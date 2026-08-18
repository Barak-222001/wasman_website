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
        <link rel="stylesheet" href="{{ asset('css/events.css') }}"> 
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
<!-- =========================================================
                    EVENTS PAGE
========================================================= -->

<section class="wasman-events-page">

    <!-- =====================================================
                         HERO
    ====================================================== -->

    <section class="events-hero">

        <div class="events-hero-overlay"></div>

        <div class="events-hero-content">

            <span class="eyebrow">
                <i class="fas fa-calendar-alt"></i>
                WASMAN EVENTS
            </span>

            <h1>
                Connecting Women Through
                <strong>Learning, Collaboration & Action</strong>
            </h1>

            <p>
                Explore conferences, workshops, seminars, training programmes,
                webinars and networking events designed to promote leadership,
                scientific exchange and sustainable aquatic resource management.
            </p>

            <div class="events-hero-buttons">

                <a href="#upcoming-events" class="primary-event-btn">
                    Explore Upcoming Events
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a href="#event-categories" class="secondary-event-btn">
                    Explore Categories
                </a>

            </div>

        </div>

        <div class="hero-scroll">

            <span>SCROLL TO EXPLORE</span>

            <i class="fas fa-chevron-down"></i>

        </div>

    </section>


    <!-- =====================================================
                     EVENTS INTRODUCTION
    ====================================================== -->

    <section class="events-overview">

        <div class="events-overview-container">

            <div class="overview-text">

                <span class="section-label">
                    OUR EVENTS
                </span>

                <h2>
                    Creating Spaces Where
                    <span>Ideas Become Action</span>
                </h2>

                <p>
                    WASMAN organizes conferences, technical workshops,
                    mentorship programmes, policy dialogues, networking
                    forums and community outreach activities that bring
                    together researchers, practitioners, students,
                    policymakers and institutions.
                </p>

                <p>
                    Every event creates an opportunity to exchange knowledge,
                    build meaningful partnerships and strengthen women's
                    leadership in aquatic science and environmental management.
                </p>

                <a href="#upcoming-events" class="text-link">
                    Discover our events
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>


            <!-- Statistics -->

            <div class="event-statistics">

                <div class="event-stat-card">

                    <div class="stat-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>

                    <div>
                        <h3>40+</h3>
                        <p>Events Hosted</p>
                    </div>

                </div>


                <div class="event-stat-card">

                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>

                    <div>
                        <h3>3,000+</h3>
                        <p>Participants</p>
                    </div>

                </div>


                <div class="event-stat-card">

                    <div class="stat-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>

                    <div>
                        <h3>18</h3>
                        <p>Countries Reached</p>
                    </div>

                </div>


                <div class="event-stat-card">

                    <div class="stat-icon">
                        <i class="fas fa-microphone"></i>
                    </div>

                    <div>
                        <h3>60+</h3>
                        <p>Expert Speakers</p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
                     FEATURED EVENT
    ====================================================== -->

    <section class="featured-event-section">

        <div class="featured-event-container">

            <div class="featured-event-image">

                <img
                    src="{{ asset('pics_vids/featured-event.jpg') }}"
                    alt="WASMAN International Blue Economy Conference">

                <div class="featured-date">

                    <span>MAR</span>
                    <strong>14</strong>
                    <small>2027</small>

                </div>

            </div>


            <div class="featured-event-content">

                <span class="section-label">
                    FEATURED EVENT
                </span>

                <h2>
                    WASMAN International
                    <span>Blue Economy Conference 2027</span>
                </h2>

                <p>
                    Join researchers, policymakers, conservation practitioners
                    and students for three days of discussions, networking,
                    keynote presentations and practical sessions focused on
                    advancing women in aquatic science and sustainable blue
                    economy development.
                </p>


                <div class="featured-event-details">

                    <div>

                        <i class="fas fa-calendar-alt"></i>

                        <div>
                            <small>DATE</small>
                            <strong>14–16 March 2027</strong>
                        </div>

                    </div>


                    <div>

                        <i class="fas fa-map-marker-alt"></i>

                        <div>
                            <small>LOCATION</small>
                            <strong>Accra, Ghana</strong>
                        </div>

                    </div>


                    <div>

                        <i class="fas fa-users"></i>

                        <div>
                            <small>EXPECTED</small>
                            <strong>500 Participants</strong>
                        </div>

                    </div>

                </div>


                <div class="featured-event-buttons">

                    <a href="#" class="primary-event-btn">
                        Register Now
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="#" class="outline-event-btn">
                        View Event Details
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
                     UPCOMING EVENTS
    ====================================================== -->

    <section class="upcoming-events" id="upcoming-events">

        <div class="events-section-heading">

            <div>

                <span class="section-label">
                    WHAT'S COMING UP
                </span>

                <h2>
                    Upcoming Events
                </h2>

            </div>

            <a href="#" class="view-all-events">
                View All Events
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="events-card-grid">


            <!-- EVENT 1 -->

            <article class="event-card">

                <div class="event-card-image">

                    <img
                        src="{{ asset('pics_vids/event1.jpg') }}"
                        alt="Coastal Restoration Workshop">

                    <span class="event-type">
                        Workshop
                    </span>

                </div>

                <div class="event-card-content">

                    <div class="event-card-date">
                        <i class="fas fa-calendar-alt"></i>
                        20 April 2027
                    </div>

                    <h3>
                        Coastal Restoration Workshop
                    </h3>

                    <p>
                        Hands-on training on ecosystem restoration,
                        biodiversity conservation and community engagement.
                    </p>

                    <div class="event-card-footer">

                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Cape Coast, Ghana
                        </span>

                        <a href="#">
                            Register
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </article>


            <!-- EVENT 2 -->

            <article class="event-card">

                <div class="event-card-image">

                    <img
                        src="{{ asset('pics_vids/webinar.jpg') }}"
                        alt="Women in Aquatic Science Webinar">

                    <span class="event-type webinar">
                        Webinar
                    </span>

                </div>

                <div class="event-card-content">

                    <div class="event-card-date">
                        <i class="fas fa-calendar-alt"></i>
                        15 May 2027
                    </div>

                    <h3>
                        Women in Aquatic Science Webinar
                    </h3>

                    <p>
                        An interactive online discussion with experts
                        working across aquatic science and conservation.
                    </p>

                    <div class="event-card-footer">

                        <span>
                            <i class="fas fa-video"></i>
                            Online Event
                        </span>

                        <a href="#">
                            Register
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </article>


            <!-- EVENT 3 -->

            <article class="event-card">

                <div class="event-card-image">

                    <img
                        src="{{ asset('pics_vids/training.jpg') }}"
                        alt="Aquatic Research Training">

                    <span class="event-type training">
                        Training
                    </span>

                </div>

                <div class="event-card-content">

                    <div class="event-card-date">
                        <i class="fas fa-calendar-alt"></i>
                        10 June 2027
                    </div>

                    <h3>
                        Aquatic Research Methods Training
                    </h3>

                    <p>
                        Practical training on research methods, field
                        data collection and scientific analysis.
                    </p>

                    <div class="event-card-footer">

                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Accra, Ghana
                        </span>

                        <a href="#">
                            Register
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </article>


            <!-- EVENT 4 -->

            <article class="event-card">

                <div class="event-card-image">

                    <img
                        src="{{ asset('pics_vids/networking.jpg') }}"
                        alt="Women Leadership Forum">

                    <span class="event-type networking">
                        Networking
                    </span>

                </div>

                <div class="event-card-content">

                    <div class="event-card-date">
                        <i class="fas fa-calendar-alt"></i>
                        22 July 2027
                    </div>

                    <h3>
                        Women Leadership Networking Forum
                    </h3>

                    <p>
                        Connect, collaborate and build partnerships that
                        strengthen women's leadership in aquatic science.
                    </p>

                    <div class="event-card-footer">

                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Takoradi, Ghana
                        </span>

                        <a href="#">
                            Register
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </article>

        </div>

    </section>


    <!-- =====================================================
                     EVENT CATEGORIES
    ====================================================== -->

    <section class="event-categories" id="event-categories">

        <div class="categories-heading">

            <span class="section-label">
                FIND YOUR INTEREST
            </span>

            <h2>
                Explore Our Events
            </h2>

            <p>
                From scientific conferences to community outreach,
                discover opportunities that connect you with people,
                ideas and knowledge.
            </p>

        </div>


        <div class="category-grid">


            <a href="#" class="category-card">

                <div class="category-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>

                <div>
                    <h3>Conferences</h3>
                    <p>Knowledge exchange and scientific dialogue.</p>
                </div>

                <i class="fas fa-arrow-right category-arrow"></i>

            </a>


            <a href="#" class="category-card">

                <div class="category-icon">
                    <i class="fas fa-flask"></i>
                </div>

                <div>
                    <h3>Workshops</h3>
                    <p>Practical learning and technical training.</p>
                </div>

                <i class="fas fa-arrow-right category-arrow"></i>

            </a>


            <a href="#" class="category-card">

                <div class="category-icon">
                    <i class="fas fa-laptop"></i>
                </div>

                <div>
                    <h3>Webinars</h3>
                    <p>Connect and learn from anywhere.</p>
                </div>

                <i class="fas fa-arrow-right category-arrow"></i>

            </a>


            <a href="#" class="category-card">

                <div class="category-icon">
                    <i class="fas fa-handshake"></i>
                </div>

                <div>
                    <h3>Networking</h3>
                    <p>Build meaningful professional connections.</p>
                </div>

                <i class="fas fa-arrow-right category-arrow"></i>

            </a>


            <a href="#" class="category-card">

                <div class="category-icon">
                    <i class="fas fa-globe-africa"></i>
                </div>

                <div>
                    <h3>Community Outreach</h3>
                    <p>Taking knowledge and action to communities.</p>
                </div>

                <i class="fas fa-arrow-right category-arrow"></i>

            </a>


            <a href="#" class="category-card">

                <div class="category-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>

                <div>
                    <h3>Mentorship</h3>
                    <p>Supporting the next generation of leaders.</p>
                </div>

                <i class="fas fa-arrow-right category-arrow"></i>

            </a>

        </div>

    </section>


    <!-- =====================================================
                         PAST EVENTS
    ====================================================== -->

    <section class="past-events">

        <div class="events-section-heading">

            <div>

                <span class="section-label">
                    EVENT HIGHLIGHTS
                </span>

                <h2>
                    Moments From Our Past Events
                </h2>

            </div>

            <a href="#" class="view-all-events">
                View Gallery
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="past-events-grid">


            <article class="past-event-card large">

                <img
                    src="{{ asset('pics_vids/past1.jpg') }}"
                    alt="Women in Marine Science Symposium">

                <div class="past-event-overlay">

                    <span>SYMPOSIUM</span>

                    <h3>
                        Women in Marine Science Symposium
                    </h3>

                    <p>
                        Researchers, students and industry leaders
                        sharing innovations in marine conservation.
                    </p>

                </div>

            </article>


            <article class="past-event-card">

                <img
                    src="{{ asset('pics_vids/past2.jpg') }}"
                    alt="Blue Economy Dialogue">

                <div class="past-event-overlay">

                    <span>DIALOGUE</span>

                    <h3>
                        Blue Economy Policy Dialogue
                    </h3>

                </div>

            </article>


            <article class="past-event-card">

                <img
                    src="{{ asset('pics_vids/past3.jpg') }}"
                    alt="Coastal Outreach">

                <div class="past-event-overlay">

                    <span>OUTREACH</span>

                    <h3>
                        Coastal Community Outreach
                    </h3>

                </div>

            </article>

        </div>

    </section>


    <!-- =====================================================
                         CTA
    ====================================================== -->

    <section class="join-event">

        <div class="join-event-decoration"></div>

        <div class="join-event-content">

            <span class="section-label">
                BE PART OF THE MOVEMENT
            </span>

            <h2>
                Your Ideas. Your Voice.
                <span>Your Impact.</span>
            </h2>

            <p>
                Become part of a growing network of women advancing aquatic
                science, conservation and sustainable development across
                Africa and beyond.
            </p>

            <div class="join-event-buttons">

                <a href="#" class="primary-event-btn">
                    Register for an Upcoming Event
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a href="#" class="cta-outline-btn">
                    Become a Member
                </a>

            </div>

        </div>

    </section>

</section>

    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
