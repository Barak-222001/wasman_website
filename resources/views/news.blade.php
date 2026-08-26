<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/news.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')

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
                src="../pics_vids/sl.png"
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
                        src="../pics_vids/ns.png"
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
                        src="../pics_vids/en.png"
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
                        src="../pics_vids/cc.png"
                        alt="Women in aquatic science">

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
                <img src="../pics_vids/gal1.png" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Field Research</span>
                </div>
            </div>

            <div class="media-item">
                <img src="../pics_vids/gal2.png" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Community Engagement</span>
                </div>
            </div>

            <div class="media-item">
                <img src="../pics_vids/gal3.png" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Marine Conservation</span>
                </div>
            </div>

            <div class="media-item">
                <img src="../pics_vids/gal4.png" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Women in Science</span>
                </div>
            </div>

            <div class="media-item">
                <img src="../pics_vids/gal5.png" alt="">
                <div class="media-overlay">
                    <i class="fas fa-camera"></i>
                    <span>Training Programme</span>
                </div>
            </div>

            <div class="media-item large">
                <img src="../pics_vids/gal6.png" alt="">
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
