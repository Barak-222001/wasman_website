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
        <link rel="stylesheet" href="{{ asset('css/photos_videos.css') }}"> 
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
                PHOTO & VIDEO GALLERY
========================================================= --}}

<section class="media-hero">

    <div class="media-hero-bg"></div>

    <div class="media-hero-overlay"></div>

    <div class="media-hero-content">

        <span class="media-eyebrow">
            PHOTO & VIDEO GALLERY
        </span>

        <h1>
            Capturing the People,
            Science & Stories Behind
            Our Impact
        </h1>

        <p>
            Explore memorable moments from WASMAN's research,
            conservation activities, conferences, community
            programmes and partnerships across aquatic
            ecosystems.
        </p>

        <div class="media-hero-actions">

            <a href="#photo-gallery" class="media-primary-btn">
                Explore Gallery
            </a>

            <a href="#video-gallery" class="media-secondary-btn">
                Watch Videos
            </a>

        </div>

    </div>

    <div class="media-scroll-indicator">
        <span></span>
        Scroll to explore
    </div>

</section>


{{-- =========================================================
                    GALLERY INTRO
========================================================= --}}

<section class="media-introduction">

    <div class="media-intro-content">

        <span class="section-label">
            OUR VISUAL STORY
        </span>

        <h2>
            More Than Images.
            <span>Stories of Change.</span>
        </h2>

        <p>
            Every photograph and video captured by WASMAN tells a story
            about people, science, collaboration and environmental action.
            Our visual archive brings together the experiences that shape
            our work in aquatic science and sustainable development.
        </p>

        <p>
            From coastal communities and research expeditions to
            conferences, workshops and conservation initiatives, these
            moments document our journey and the people driving change.
        </p>

    </div>


    <div class="media-stat-grid">

        <div class="media-stat">

            <strong>500+</strong>

            <span>Photos</span>

        </div>

        <div class="media-stat">

            <strong>80+</strong>

            <span>Videos</span>

        </div>

        <div class="media-stat">

            <strong>40+</strong>

            <span>Events Covered</span>

        </div>

        <div class="media-stat">

            <strong>15</strong>

            <span>Countries</span>

        </div>

    </div>

</section>



{{-- =========================================================
                FEATURED COLLECTION
========================================================= --}}

<section class="media-featured">

    <div class="featured-media-image">

        <img
            src="{{ asset('pics_vids/featured-gallery.jpg') }}"
            alt="Women conducting aquatic research"
        >

        <div class="image-tag">
            FEATURED COLLECTION
        </div>

    </div>


    <div class="featured-media-content">

        <span class="section-label">
            FEATURED COLLECTION
        </span>

        <h2>
            Women Leading
            Marine Conservation
        </h2>

        <p>
            A visual collection celebrating women scientists,
            students, researchers and coastal communities working
            together to restore aquatic ecosystems and promote
            sustainable resource management.
        </p>

        <div class="featured-details">

            <div>
                <strong>24</strong>
                <span>Photographs</span>
            </div>

            <div>
                <strong>06</strong>
                <span>Videos</span>
            </div>

            <div>
                <strong>08</strong>
                <span>Communities</span>
            </div>

        </div>

        <a href="#" class="dark-btn">
            View Collection
            <span>→</span>
        </a>

    </div>

</section>



{{-- =========================================================
                    PHOTO GALLERY
========================================================= --}}

<section class="photo-gallery-section" id="photo-gallery">

    <div class="media-section-heading">

        <div>

            <span class="section-label">
                PHOTO STORIES
            </span>

            <h2>
                Moments Worth Remembering
            </h2>

        </div>

        <p>
            A glimpse into our field activities, research,
            partnerships, training programmes and community
            engagement.
        </p>

    </div>


    <div class="photo-masonry">

        <div class="photo-item photo-large">

            <img
                src="{{ asset('pics_vids/photo1.jpg') }}"
                alt="WASMAN field activity"
            >

            <div class="photo-caption">
                <span>FIELDWORK</span>
                <h3>Research Beyond the Laboratory</h3>
            </div>

        </div>


        <div class="photo-item">

            <img
                src="{{ asset('pics_vids/photo2.jpg') }}"
                alt="Aquatic research"
            >

            <div class="photo-caption">
                <span>RESEARCH</span>
                <h3>Exploring Aquatic Ecosystems</h3>
            </div>

        </div>


        <div class="photo-item">

            <img
                src="{{ asset('pics_vids/photo3.jpg') }}"
                alt="Community engagement"
            >

            <div class="photo-caption">
                <span>COMMUNITY</span>
                <h3>Working With Coastal Communities</h3>
            </div>

        </div>


        <div class="photo-item">

            <img
                src="{{ asset('pics_vids/photo4.jpg') }}"
                alt="Women researchers"
            >

            <div class="photo-caption">
                <span>LEADERSHIP</span>
                <h3>Women Driving Scientific Change</h3>
            </div>

        </div>


        <div class="photo-item photo-wide">

            <img
                src="{{ asset('pics_vids/photo5.jpg') }}"
                alt="WASMAN workshop"
            >

            <div class="photo-caption">
                <span>CAPACITY BUILDING</span>
                <h3>Learning, Sharing and Growing Together</h3>
            </div>

        </div>


        <div class="photo-item">

            <img
                src="{{ asset('pics_vids/photo6.jpg') }}"
                alt="Marine conservation"
            >

            <div class="photo-caption">
                <span>CONSERVATION</span>
                <h3>Protecting Our Blue Future</h3>
            </div>

        </div>


        <div class="photo-item">

            <img
                src="{{ asset('pics_vids/photo7.jpg') }}"
                alt="Aquatic science event"
            >

            <div class="photo-caption">
                <span>EVENTS</span>
                <h3>Connecting Minds and Ideas</h3>
            </div>

        </div>


        <div class="photo-item">

            <img
                src="{{ asset('pics_vids/photo8.jpg') }}"
                alt="Women in aquatic science"
            >

            <div class="photo-caption">
                <span>WASMAN</span>
                <h3>Building the Network</h3>
            </div>

        </div>

    </div>

</section>



{{-- =========================================================
                    VIDEO SECTION
========================================================= --}}

<section class="video-gallery-section" id="video-gallery">

    <div class="video-heading">

        <span class="section-label">
            VIDEO STORIES
        </span>

        <h2>
            Watch Our Work in Action
        </h2>

        <p>
            Discover the people, places and projects behind
            WASMAN through our collection of videos.
        </p>

    </div>


    <div class="video-grid">


        <div class="video-card video-featured">

            <div class="video-thumbnail">

                <img
                    src="{{ asset('pics_vids/video1.jpg') }}"
                    alt="WASMAN Annual Conference"
                >

                <button class="play-button">
                    ▶
                </button>

                <span class="video-duration">
                    04:32
                </span>

            </div>

            <div class="video-information">

                <span>
                    FEATURED VIDEO
                </span>

                <h3>
                    WASMAN Annual Conference Highlights
                </h3>

                <p>
                    A look at conversations, collaborations
                    and experiences from our annual gathering.
                </p>

            </div>

        </div>


        <div class="video-card">

            <div class="video-thumbnail">

                <img
                    src="{{ asset('pics_vids/video2.jpg') }}"
                    alt="Coastal restoration"
                >

                <button class="play-button">
                    ▶
                </button>

                <span class="video-duration">
                    06:18
                </span>

            </div>

            <div class="video-information">

                <span>
                    CONSERVATION
                </span>

                <h3>
                    Restoring Our Coastal Ecosystems
                </h3>

            </div>

        </div>


        <div class="video-card">

            <div class="video-thumbnail">

                <img
                    src="{{ asset('pics_vids/video3.jpg') }}"
                    alt="Women in aquatic science"
                >

                <button class="play-button">
                    ▶
                </button>

                <span class="video-duration">
                    08:45
                </span>

            </div>

            <div class="video-information">

                <span>
                    LEADERSHIP
                </span>

                <h3>
                    Women in Aquatic Science
                </h3>

            </div>

        </div>


    </div>

</section>



{{-- =========================================================
                    JOURNEY
========================================================= --}}

<section class="media-journey">

    <div class="journey-heading">

        <span class="section-label">
            OUR JOURNEY
        </span>

        <h2>
            Moments Through the Years
        </h2>

    </div>


    <div class="journey-line">


        <div class="journey-item">

            <div class="journey-year">
                2023
            </div>

            <div class="journey-dot"></div>

            <div class="journey-content">

                <h3>
                    Community Outreach
                </h3>

                <p>
                    Launch of community engagement and
                    environmental education programmes.
                </p>

            </div>

        </div>


        <div class="journey-item">

            <div class="journey-year">
                2024
            </div>

            <div class="journey-dot"></div>

            <div class="journey-content">

                <h3>
                    Regional Collaboration
                </h3>

                <p>
                    Expansion of workshops, networking and
                    women leadership programmes.
                </p>

            </div>

        </div>


        <div class="journey-item">

            <div class="journey-year">
                2025
            </div>

            <div class="journey-dot"></div>

            <div class="journey-content">

                <h3>
                    Research Missions
                </h3>

                <p>
                    International collaborations and
                    aquatic research activities.
                </p>

            </div>

        </div>


        <div class="journey-item">

            <div class="journey-year">
                2026
            </div>

            <div class="journey-dot"></div>

            <div class="journey-content">

                <h3>
                    Expanding Our Impact
                </h3>

                <p>
                    New partnerships, conservation projects
                    and growing scientific networks.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
                    MEDIA CTA
========================================================= --}}

<section class="media-cta">

    <div class="media-cta-overlay"></div>

    <div class="media-cta-content">

        <span>
            SHARE YOUR STORY
        </span>

        <h2>
            Help Us Capture
            the WASMAN Journey
        </h2>

        <p>
            Were you part of a WASMAN activity, research mission,
            workshop or community programme? Share your photographs
            and videos and help us document the impact of our network.
        </p>

        <a href="#">
            Submit Your Media
            <span>→</span>
        </a>

    </div>

</section>
   
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
