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
{{-- HERO SECTION --}}
<section class="events-hero">

    <div class="events-overlay">

        <div class="events-content">

            <span>EVENTS</span>

            <h1>
                Connecting Women Through
                Learning, Collaboration and Action
            </h1>

            <p>

                Explore WASMAN's conferences, workshops,
                seminars, training programmes, webinars
                and networking events designed to promote
                leadership in aquatic science and sustainable
                environmental management.

            </p>

            <a href="#upcoming-events" class="event-btn">

                View Upcoming Events

            </a>

        </div>

    </div>

</section>

{{-- ABOUT SECTION --}}
<section class="events-intro">

    <div class="intro-text">

        <span>OUR EVENTS</span>

        <h2>

            Bringing Together Women
            Transforming Aquatic Science

        </h2>

        <p>

            WASMAN organizes conferences, technical workshops,
            mentorship programmes, policy dialogues, networking
            forums and community outreach activities that strengthen
            collaboration among researchers, practitioners,
            students and institutions.

            Every event is designed to promote innovation,
            knowledge exchange and leadership for sustainable
            management of aquatic ecosystems.

        </p>

    </div>

    <div class="event-stats">

        <div>

            <h2>40+</h2>

            <span>Events Hosted</span>

        </div>

        <div>

            <h2>3,000+</h2>

            <span>Participants</span>

        </div>

        <div>

            <h2>18</h2>

            <span>Countries Reached</span>

        </div>

        <div>

            <h2>60+</h2>

            <span>Expert Speakers</span>

        </div>

    </div>

</section>

{{-- FEATURED EVENTS --}}

<section class="featured-event">

    <div class="featured-event-image">

        <img src="images/featured-event.jpg" alt="Featured Event">

    </div>

    <div class="featured-event-content">

        <span>FEATURED EVENT</span>

        <h2>

            WASMAN International
            Blue Economy Conference 2027

        </h2>

        <p>

            Join researchers, policymakers,
            conservation practitioners and students
            for three days of discussions, networking,
            keynote presentations and practical sessions
            on advancing women in aquatic science and
            sustainable blue economy development.

        </p>

        <div class="event-meta">

            <span>📅 14–16 March 2027</span>

            <span>📍 Accra, Ghana</span>

            <span>👥 500 Participants</span>

        </div>

        <div class="event-actions">

            <a href="#">Register Now</a>

            <a href="#">Learn More</a>

        </div>

    </div>

</section>

{{-- UPCOMING EVENTS --}}
<section class="upcoming-events" id="upcoming-events">

    <div class="section-title">

        <span>UPCOMING</span>

        <h2>Upcoming Events</h2>

    </div>

    <div class="events-grid">

        <div class="event-card">

            <img src="images/event1.jpg" alt="Workshop">

            <div class="event-card-body">

                <span class="event-tag">

                    Workshop

                </span>

                <h3>

                    Coastal Restoration Workshop

                </h3>

                <p>

                    Hands-on training on ecosystem restoration,
                    biodiversity conservation and community engagement.

                </p>

                <small>

                    📅 20 April 2027

                </small>

                <a href="#">

                    Register →

                </a>

            </div>

        </div>

        <!-- Repeat additional event cards -->

    </div>

</section>

{{-- EVENTS CATEGORIES --}}

<section class="event-categories">

    <div class="section-title">

        <span>CATEGORIES</span>

        <h2>Explore Our Events</h2>

    </div>

    <div class="category-grid">

        <div>🎓 Conferences</div>

        <div>🧪 Workshops</div>

        <div>💻 Webinars</div>

        <div>🤝 Networking</div>

        <div>🌍 Community Outreach</div>

        <div>🎯 Mentorship</div>

    </div>

</section>

{{-- PAST EVENTS --}}
<section class="past-events">

    <div class="section-title">

        <span>HIGHLIGHTS</span>

        <h2>Past Events</h2>

    </div>

    <div class="past-events-grid">

        <div class="past-card">

            <img src="images/past1.jpg" alt="Past Event">

            <div class="past-content">

                <h3>

                    Women in Marine Science Symposium

                </h3>

                <p>

                    Researchers, students and industry leaders
                    shared innovations in marine conservation
                    and aquatic research.

                </p>

            </div>

        </div>

        <!-- Repeat additional cards -->

    </div>

</section>

{{-- CALL TO ACTIION --}}

<section class="join-event">

    <span>BE PART OF THE MOVEMENT</span>

    <h2>

        Join Our Next Event

    </h2>

    <p>

        Become part of a growing network of women
        advancing aquatic science, conservation and
        sustainable development across Africa and beyond.

    </p>

    <a href="#">

        Register for Upcoming Events

    </a>

</section>

    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
