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
<section class="media-hero">

    <div class="media-overlay">

        <div class="media-content">

            <span>PHOTO & VIDEO GALLERY</span>

            <h1>

                Capturing Our Journey
                Towards Sustainable Oceans

            </h1>

            <p>

                Explore memorable moments from WASMAN's
                conferences, workshops, research expeditions,
                community outreach programmes, conservation
                initiatives and networking events.

            </p>

            <a href="#gallery" class="gallery-btn">

                Explore Gallery

            </a>

        </div>

    </div>

</section>

{{-- INTRODUCTION SECTION --}}
<section class="gallery-intro">

    <div class="gallery-text">

        <span>OUR STORIES</span>

        <h2>

            Every Picture Tells
            A Story Of Impact

        </h2>

        <p>

            Our gallery showcases the people, partnerships,
            research activities and conservation initiatives
            that define WASMAN. These moments reflect our
            commitment to empowering women in aquatic science,
            promoting environmental stewardship and advancing
            sustainable development.

        </p>

    </div>

    <div class="gallery-stats">

        <div>

            <h2>500+</h2>

            <span>Photos</span>

        </div>

        <div>

            <h2>80+</h2>

            <span>Videos</span>

        </div>

        <div>

            <h2>40+</h2>

            <span>Events Covered</span>

        </div>

        <div>

            <h2>15</h2>

            <span>Countries</span>

        </div>

    </div>

</section>

{{-- FEATURED GALLERY --}}
<section class="featured-gallery">

    <div class="featured-image">

        <img src="images/featured-gallery.jpg" alt="Featured Gallery">

    </div>

    <div class="featured-content">

        <span>FEATURED COLLECTION</span>

        <h2>

            Women Leading
            Marine Conservation

        </h2>

        <p>

            A visual collection highlighting women scientists,
            students and coastal communities working together
            to restore marine ecosystems and promote sustainable
            aquatic resource management.

        </p>

        <a href="#">

            View Collection →

        </a>

    </div>

</section>

{{-- PHOTO GALLERY --}}
<section class="photo-gallery" id="gallery">

    <div class="section-title">

        <span>PHOTOS</span>

        <h2>Latest Photo Gallery</h2>

    </div>

    <div class="photo-grid">

        <img src="images/photo1.jpg" alt="Photo">

        <img src="images/photo2.jpg" alt="Photo">

        <img src="images/photo3.jpg" alt="Photo">

        <img src="images/photo4.jpg" alt="Photo">

        <img src="images/photo5.jpg" alt="Photo">

        <img src="images/photo6.jpg" alt="Photo">

        <img src="images/photo7.jpg" alt="Photo">

        <img src="images/photo8.jpg" alt="Photo">

    </div>

</section>

{{-- VIDEO GALLERY  --}}
<section class="video-gallery">
    <div class="section-title">

        <span>VIDEOS</span>

        <h2>Featured Videos</h2>

    </div>

    <div class="video-grid">

        <div class="video-card">

            <img src="images/video1.jpg" alt="Video Thumbnail">

            <div class="play-button">

                ▶

            </div>

            <h3>

                WASMAN Annual Conference Highlights

            </h3>

        </div>

        <div class="video-card">

            <img src="images/video2.jpg" alt="Video Thumbnail">

            <div class="play-button">

                ▶

            </div>

            <h3>

                Coastal Restoration Documentary

            </h3>

        </div>

        <div class="video-card">

            <img src="images/video3.jpg" alt="Video Thumbnail">

            <div class="play-button">

                ▶

            </div>

            <h3>

                Women in Aquatic Science Webinar

            </h3>

        </div>

    </div>

</section>
{{-- TIMELINE SECTION --}}
<section class="media-timeline">

    <div class="section-title">

        <span>OUR JOURNEY</span>

        <h2>Moments Through the Years</h2>

    </div>

    <div class="timeline-grid">

        <div class="timeline-card">

            <h3>2023</h3>

            <p>

                Launch of community outreach initiatives.

            </p>

        </div>

        <div class="timeline-card">

            <h3>2024</h3>

            <p>

                Regional workshops and leadership programmes.

            </p>

        </div>

        <div class="timeline-card">

            <h3>2025</h3>

            <p>

                International collaborations and research missions.

            </p>

        </div>

        <div class="timeline-card">

            <h3>2026</h3>

            <p>

                Expanded partnerships and conservation projects.

            </p>

        </div>

    </div>

</section>

{{-- SHARE CTA --}}

<section class="share-media">

    <span>SHARE YOUR EXPERIENCE</span>

    <h2>

        Help Tell The WASMAN Story

    </h2>

    <p>

        Have photographs or videos from a WASMAN activity?
        Share your memorable moments and contribute to our
        growing gallery of impact.

    </p>

    <a href="#">

        Submit Your Media

    </a>

</section>
   
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
