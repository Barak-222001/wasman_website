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
        <link rel="stylesheet" href="{{ asset('css/news.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

            
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
                        {{-- <li><a href="/news">News</a></li> --}}
                        <li><a href="/reports">Reports</a></li>
                        <li><a href="/events">Events</a></li>
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
    <section class="news-hero">

    <div class="news-overlay">

        <div class="news-content">

            <span>LATEST NEWS</span>

            <h1>
                Stay Informed With Our
                Latest News & Updates
            </h1>

            <p>

                Discover the latest research achievements,
                conservation initiatives, partnerships,
                community activities and organizational
                announcements from WASMAN.

            </p>

            <a href="#latest-news" class="hero-btn">

                Explore Stories

            </a>

        </div>

    </div>

</section>
   
{{-- FEATURED STORY --}}
<section class="featured-news">

    <div class="featured-image">

        <img src="images/news-feature.jpg" alt="Featured Story">

    </div>

    <div class="featured-content">

        <span>FEATURED STORY</span>

        <h2>

            Women Scientists Lead Coastal
            Restoration Initiative

        </h2>

        <p>

            WASMAN recently concluded a collaborative coastal restoration
            project involving researchers, students and local communities,
            resulting in improved ecosystem resilience and increased
            participation of women in conservation leadership.

        </p>

        <div class="news-meta">

            <span>📅 July 2026</span>

            <span>🌍 Ghana</span>

            <span>🏷 Conservation</span>

        </div>

        <a href="#">

            Read Full Story →

        </a>

    </div>

</section>

{{-- LATEST NEWS --}}
<section class="latest-news" id="latest-news">

    <div class="section-title">

        <span>NEWSROOM</span>

        <h2>Latest Articles</h2>

    </div>

    <div class="news-grid">

        <div class="news-card">

            <img src="images/news1.jpg">

            <div class="news-body">

                <span class="tag">

                    Research

                </span>

                <h3>

                    New Study on Marine Biodiversity Released

                </h3>

                <p>

                    WASMAN researchers publish findings on marine
                    ecosystem conservation and biodiversity.

                </p>

                <small>

                    12 July 2026

                </small>

                <a href="#">

                    Continue Reading →

                </a>

            </div>

        </div>

        <!-- Repeat more cards -->

    </div>

</section>
{{-- EVENTS & ANNOUNCEMENTS --}}
<section class="events">

    <div class="section-title">

        <span>UPCOMING</span>

        <h2>Events & Announcements</h2>

    </div>

    <div class="event-list">

        <div class="event-item">

            <div class="event-date">

                <h3>28</h3>

                <span>SEP</span>

            </div>

            <div class="event-details">

                <h3>

                    WASMAN Annual Conference

                </h3>

                <p>

                    Bringing together researchers, students,
                    policymakers and partners to discuss
                    innovations in aquatic science.

                </p>

            </div>

        </div>

        <div class="event-item">

            <div class="event-date">

                <h3>15</h3>

                <span>OCT</span>

            </div>

            <div class="event-details">

                <h3>

                    Marine Conservation Workshop

                </h3>

                <p>

                    Capacity building for women researchers
                    and coastal community leaders.

                </p>

            </div>

        </div>

    </div>

</section>

{{-- MEDIA HIGLIGHTS --}}
<section class="media-gallery">

    <div class="section-title">

        <span>MEDIA</span>

        <h2>Photo Highlights</h2>

    </div>

    <div class="gallery">

        <img src="images/gallery1.jpg">

        <img src="images/gallery2.jpg">

        <img src="images/gallery3.jpg">

        <img src="images/gallery4.jpg">

        <img src="images/gallery5.jpg">

        <img src="images/gallery6.jpg">

    </div>

</section>

{{-- NEWSLETTER --}}
<section class="news-subscribe">

    <span>NEVER MISS AN UPDATE</span>

    <h2>

        Subscribe to Our News

    </h2>

    <p>

        Receive the latest stories,
        research updates, publications,
        events and announcements directly
        in your inbox.

    </p>

    <form>

        <input
            type="email"
            placeholder="Enter your email address">

        <button>

            Subscribe

        </button>

    </form>

</section>

{{-- FOOTER --}}
<footer class="footer">

    <div class="footer-container">

        <!-- About -->
        <div class="footer-column">

            <h2 class="footer-logo">WASMAN</h2>

            <p>
                Women in Aquatic Science and Management Network (WASMAN)
                is dedicated to advancing women's participation in aquatic
                science, marine conservation, blue economy initiatives,
                climate resilience, and sustainable water resource management.
            </p>

            <div class="social-icons">

                <a href="#"><i class="fab fa-facebook-f"></i></a>

                <a href="#"><i class="fab fa-x-twitter"></i></a>

                <a href="#"><i class="fab fa-instagram"></i></a>

                <a href="#"><i class="fab fa-linkedin-in"></i></a>

                <a href="#"><i class="fab fa-youtube"></i></a>

            </div>

        </div>

        <!-- Quick Links -->
        <div class="footer-column">

            <h3>Quick Links</h3>

            <ul>

                <li><a href="index.html">Home</a></li>

                <li><a href="history.html">About Us</a></li>

                <li><a href="projects.html">Projects</a></li>

                <li><a href="publications.html">Publications</a></li>

                <li><a href="news.html">News</a></li>

                <li><a href="contact.html">Contact</a></li>

            </ul>

        </div>

        <!-- Contact -->
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

        <!-- Newsletter -->
        <div class="footer-column">

            <h3>Newsletter</h3>

            <p>

                Subscribe to receive updates on research,
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

            © 2026 Women in Aquatic Science and Management Network (WASMAN).
            All Rights Reserved.

        </p>

    </div>

</footer>

    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
