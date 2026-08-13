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
        <link rel="stylesheet" href="{{ asset('css/news.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

            
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
 <!-- =====================================================
     WASMAN NEWS & MEDIA PAGE
===================================================== -->

<section class="wasman-news-page">

    <!-- =================================================
         HERO
    ================================================== -->

    <section class="news-hero">

        <div class="news-hero-overlay"></div>

        <div class="news-hero-content">

            <span class="eyebrow">WASMAN NEWSROOM</span>

            <h1>
                Stories, Discoveries & Updates
                Shaping Our Aquatic Future
            </h1>

            <p>
                Explore the latest research achievements, conservation
                initiatives, partnerships, community activities and
                organizational updates from the Women in Aquatic Science
                and Management Network.
            </p>

            <div class="news-hero-actions">

                <a href="#latest-news" class="news-primary-btn">
                    Explore Stories
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a href="#events" class="news-secondary-btn">
                    Upcoming Events
                </a>

            </div>

        </div>

        <div class="hero-wave"></div>

    </section>


    <!-- =================================================
         NEWS INTRO / QUICK STATS
    ================================================== -->

    <section class="news-overview">

        <div class="overview-text">

            <span class="section-label">
                FROM OUR NEWSROOM
            </span>

            <h2>
                Keeping Our Community
                Connected to Change
            </h2>

            <p>
                WASMAN's newsroom brings together stories from our research,
                conservation programmes, community engagements, partnerships
                and events. We share knowledge and experiences that inspire
                action for healthier aquatic ecosystems and stronger
                participation of women in science.
            </p>

        </div>

        <div class="overview-stats">

            <div class="overview-stat">
                <i class="fas fa-newspaper"></i>
                <strong>50+</strong>
                <span>News Stories</span>
            </div>

            <div class="overview-stat">
                <i class="fas fa-calendar-check"></i>
                <strong>20+</strong>
                <span>Events</span>
            </div>

            <div class="overview-stat">
                <i class="fas fa-flask"></i>
                <strong>35+</strong>
                <span>Research Updates</span>
            </div>

            <div class="overview-stat">
                <i class="fas fa-users"></i>
                <strong>500+</strong>
                <span>Community Reach</span>
            </div>

        </div>

    </section>


    <!-- =================================================
         FEATURED STORY
    ================================================== -->

    <section class="featured-news">

        <div class="featured-news-image">

            <img
                src="images/news-feature.jpg"
                alt="WASMAN coastal restoration initiative">

            <div class="featured-badge">
                FEATURED STORY
            </div>

        </div>


        <div class="featured-news-content">

            <span class="story-category">
                CONSERVATION
            </span>

            <h2>
                Women Scientists Lead a New
                Coastal Restoration Initiative
            </h2>

            <p>
                WASMAN researchers, students and coastal communities have
                joined forces to strengthen ecosystem restoration while
                creating opportunities for women to participate in
                environmental leadership and conservation.
            </p>

            <div class="story-information">

                <span>
                    <i class="far fa-calendar"></i>
                    July 2026
                </span>

                <span>
                    <i class="fas fa-map-marker-alt"></i>
                    Ghana
                </span>

                <span>
                    <i class="fas fa-tag"></i>
                    Conservation
                </span>

            </div>

            <a href="#" class="read-story">
                Read Full Story
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

    </section>


    <!-- =================================================
         LATEST NEWS
    ================================================== -->

    <section class="latest-news" id="latest-news">

        <div class="news-section-heading">

            <div>

                <span class="section-label">
                    NEWSROOM
                </span>

                <h2>Latest Stories</h2>

            </div>

            <a href="#" class="view-all">
                View All News
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="news-grid">


            <!-- NEWS CARD 1 -->

            <article class="news-card">

                <div class="news-card-image">

                    <img
                        src="images/news1.jpg"
                        alt="Marine biodiversity research">

                    <span class="news-tag">
                        Research
                    </span>

                </div>

                <div class="news-card-content">

                    <div class="news-date">
                        <i class="far fa-calendar"></i>
                        12 July 2026
                    </div>

                    <h3>
                        New Study on Marine Biodiversity Released
                    </h3>

                    <p>
                        WASMAN researchers have released new findings
                        highlighting opportunities for improved marine
                        ecosystem conservation.
                    </p>

                    <a href="#">
                        Continue Reading
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </article>


            <!-- NEWS CARD 2 -->

            <article class="news-card">

                <div class="news-card-image">

                    <img
                        src="images/news2.jpg"
                        alt="Women in aquatic science">

                    <span class="news-tag">
                        Women & Leadership
                    </span>

                </div>

                <div class="news-card-content">

                    <div class="news-date">
                        <i class="far fa-calendar"></i>
                        05 July 2026
                    </div>

                    <h3>
                        Empowering the Next Generation of Women Scientists
                    </h3>

                    <p>
                        A new mentorship initiative is creating opportunities
                        for young women pursuing careers in aquatic science.
                    </p>

                    <a href="#">
                        Continue Reading
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </article>


            <!-- NEWS CARD 3 -->

            <article class="news-card">

                <div class="news-card-image">

                    <img
                        src="images/news3.jpg"
                        alt="Community conservation programme">

                    <span class="news-tag">
                        Community
                    </span>

                </div>

                <div class="news-card-content">

                    <div class="news-date">
                        <i class="far fa-calendar"></i>
                        28 June 2026
                    </div>

                    <h3>
                        Coastal Communities Join Conservation Campaign
                    </h3>

                    <p>
                        Community members have participated in environmental
                        awareness and aquatic ecosystem conservation activities.
                    </p>

                    <a href="#">
                        Continue Reading
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </article>

        </div>

    </section>


    <!-- =================================================
         EVENTS
    ================================================== -->

    <section class="news-events" id="events">

        <div class="events-heading">

            <span class="section-label">
                WHAT'S COMING UP
            </span>

            <h2>
                Events & Announcements
            </h2>

            <p>
                Stay connected with upcoming conferences, workshops,
                training programmes and other WASMAN activities.
            </p>

        </div>


        <div class="event-container">


            <!-- EVENT 1 -->

            <div class="event-card">

                <div class="event-date-box">

                    <strong>28</strong>

                    <span>SEP</span>

                    <small>2026</small>

                </div>


                <div class="event-content">

                    <span class="event-type">
                        CONFERENCE
                    </span>

                    <h3>
                        WASMAN Annual Conference
                    </h3>

                    <p>
                        Bringing together researchers, students,
                        policymakers and development partners to discuss
                        innovations in aquatic science.
                    </p>

                    <div class="event-meta">

                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Cape Coast, Ghana
                        </span>

                        <span>
                            <i class="far fa-clock"></i>
                            9:00 AM
                        </span>

                    </div>

                </div>


                <a href="#" class="event-arrow">
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>


            <!-- EVENT 2 -->

            <div class="event-card">

                <div class="event-date-box">

                    <strong>15</strong>

                    <span>OCT</span>

                    <small>2026</small>

                </div>


                <div class="event-content">

                    <span class="event-type">
                        WORKSHOP
                    </span>

                    <h3>
                        Marine Conservation Workshop
                    </h3>

                    <p>
                        A capacity-building workshop designed for women
                        researchers and coastal community leaders.
                    </p>

                    <div class="event-meta">

                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Ghana
                        </span>

                        <span>
                            <i class="far fa-clock"></i>
                            10:00 AM
                        </span>

                    </div>

                </div>


                <a href="#" class="event-arrow">
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </section>


    <!-- =================================================
         MEDIA HIGHLIGHTS
    ================================================== -->

    <section class="media-highlights">

        <div class="news-section-heading">

            <div>

                <span class="section-label">
                    VISUAL STORIES
                </span>

                <h2>Media Highlights</h2>

            </div>

            <a href="#" class="view-all">
                View Gallery
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="media-grid">

            <div class="media-item large">
                <img src="images/gallery1.jpg" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Field Research</span>
                </div>
            </div>

            <div class="media-item">
                <img src="images/gallery2.jpg" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Community Engagement</span>
                </div>
            </div>

            <div class="media-item">
                <img src="images/gallery3.jpg" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Marine Conservation</span>
                </div>
            </div>

            <div class="media-item">
                <img src="images/gallery4.jpg" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Women in Science</span>
                </div>
            </div>

            <div class="media-item">
                <img src="images/gallery5.jpg" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Training Programme</span>
                </div>
            </div>

            <div class="media-item large">
                <img src="images/gallery6.jpg" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>WASMAN Activities</span>
                </div>
            </div>

        </div>

    </section>


    <!-- =================================================
         NEWSLETTER CTA
    ================================================== -->

    <section class="news-subscribe">

        <div class="subscribe-icon">
            <i class="fas fa-envelope-open-text"></i>
        </div>

        <span>
            STAY CONNECTED
        </span>

        <h2>
            Never Miss a WASMAN Update
        </h2>

        <p>
            Receive the latest stories, research findings, publications,
            events and conservation updates directly in your inbox.
        </p>

        <form class="news-subscribe-form">

            <input
                type="email"
                placeholder="Enter your email address"
                required>

            <button type="submit">
                Subscribe
                <i class="fas fa-paper-plane"></i>
            </button>

        </form>

    </section>

</section>


<!-- =====================================================
                     FOOTER
====================================================== -->

<footer class="footer">

    <div class="footer-container">

        <div class="footer-column footer-about">

            <h2>WASMAN</h2>

            <p>
                Women in Aquatic Science and Management Network is dedicated
                to advancing women's participation in aquatic science,
                marine conservation, blue economy initiatives, climate
                resilience and sustainable water resource management.
            </p>

            <div class="social-icons">

                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#">
                    <i class="fab fa-x-twitter"></i>
                </a>

                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="#">
                    <i class="fab fa-youtube"></i>
                </a>

            </div>

        </div>


        <div class="footer-column">

            <h3>Quick Links</h3>

            <ul>

                <li><a href="/">Home</a></li>
                <li><a href="/history">About Us</a></li>
                <li><a href="/what_we_do">What We Do</a></li>
                <li><a href="/team">Our Team</a></li>
                <li><a href="/projects">Projects</a></li>
                <li><a href="/publications">Publications</a></li>

            </ul>

        </div>


        <div class="footer-column">

            <h3>Contact Us</h3>

            <ul class="contact-info">

                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    Cape Coast, Ghana
                </li>

                <li>
                    <i class="fas fa-phone"></i>
                    +233 XX XXX XXXX
                </li>

                <li>
                    <i class="fas fa-envelope"></i>
                    info@wasman.org
                </li>

                <li>
                    <i class="fas fa-globe"></i>
                    www.wasman.org
                </li>

            </ul>

        </div>


        <div class="footer-column">

            <h3>Newsletter</h3>

            <p>
                Subscribe to receive updates about our research,
                events, publications and conservation activities.
            </p>

            <form class="footer-form">

                <input
                    type="email"
                    placeholder="Your email address">

                <button type="submit">
                    Subscribe
                </button>

            </form>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network
            (WASMAN). All Rights Reserved.
        </p>

    </div>

</footer>

    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
