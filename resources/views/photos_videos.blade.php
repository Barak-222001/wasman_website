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
        <link rel="stylesheet" href="{{ asset('css/photos_videos.css') }}"> 

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
                        <li><a href="/events">Events</a></li>
                        {{-- <li><a href="/photos_videos">Photos & Videos</a></li> --}}
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
