<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/general.css') }}">
        <link rel="stylesheet" href="{{ asset('css/events.css') }}"> 

        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

        <header class="mother text-white">
           <section class="logo_area">
            <img src="{{ asset('pics_vids/logo.png') }}">
           </section>

           <section class="nav_buttons_area">
                   
            <div class="list_options"><a href="/">Home</a></div>

            <div class="list_options" id="myList">
                About Us

                <div class="lists_container ">
                    <ul type="none" id="nav_tabs_dropdown">

                        <li><a href="/history">History</a></li>

                        <li><a href="/what_we_do">What We Do</a></li>

                        <li><a href="/team">Team</a></li>

                        <li><a href="/partners">Partners</a></li>
                    </ul>
                </div>
                

            </div>

            <div class="list_options">
                Project
            <div class="lists_container one ">
                    <ul type="none" id="nav_tabs_dropdown">
                        <li><a href="/areas_of_interest">Areas Of Interest</a></li>
                        <li><a href="/ongoing_projects">Ongoing</a></li>
                        <li><a href="/completed_projects">Completed</a></li>
                        <li><a href="/publications">Publications</a></li>
                    </ul>
                </div>

            </div>

            <div class="list_options">
                News & Media

                <div class="lists_container one ">
                    <ul type="none" id="nav_tabs_dropdown">
                        <li><a href="/news">News</a></li>
                        <li><a href="/reports">Reports</a></li>
                        {{-- <li><a href="/events">Events</a></li> --}}
                        <li><a href="/photos_videos">Photos & Videos</a></li>
                    </ul>
                </div>
            </div>

            <div class="list_options">
                Join Us

                <div class="lists_container  ">
                    <ul type="none" id="nav_tabs_dropdown">
                        <li><a href="/become_member">Become a Member</a></li>

                        <li><a href="/intern">Intern</a></li>

                        <li><a href="/volunteer">Volunteer</a></li>
                        <li><a href="/research_assistant">Research Assistant</a></li>
                    </ul>
                </div>
            </div>

            <div class="list_options">
                Contact Us
                <div class="lists_container General_Enquiries ">
                    <ul type="none" id="nav_tabs_dropdown1">
                        <li><a href="/leave_message">Leave a Message</li>
                        <li><a href="/general_enquiries">General Enquiries</a></li>
                        </ul>
                </div>
            </div>
             
        </section>
        </header >
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
