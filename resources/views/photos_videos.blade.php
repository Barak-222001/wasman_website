<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/photos_videos.css') }}"> 
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}
@include('components.heading')

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
