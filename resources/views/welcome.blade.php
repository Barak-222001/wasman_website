<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
       
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="{{ asset('css/header.css')}}">
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
>  

            
    </head>

    <body>

        {{-- header and nav section --}}
<header class="wasman-main-header">

    <div class="wasman-header-inner">

        <!-- LOGO -->
        <a href="/" class="wasman-brand">
            <img
                src="{{ asset('pics_vids/logo.png') }}"
                alt="WASMAN Logo"
            >
        </a>


        <!-- MOBILE MENU BUTTON -->
        <button
            type="button"
            class="wasman-menu-btn"
            id="wasmanMenuBtn"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>


        <!-- NAVIGATION -->
        <nav class="wasman-nav" id="wasmanNav">

            <!-- HOME -->
            <a href="/" class="wasman-nav-item">
                <i class="fas fa-house"></i>
                <span>Home</span>
            </a>


            <!-- ABOUT -->
            <div class="wasman-nav-dropdown">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
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
                            <small>Our journey and story</small>
                        </div>
                    </a>


                    <a href="/what_we_do">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-water"></i>
                        </div>

                        <div>
                            <strong>What We Do</strong>
                            <small>Our work and activities</small>
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

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
                    <span>Projects</span>
                    <i class="fas fa-chevron-down"></i>
                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/areas_of_interest">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-compass"></i>
                        </div>

                        <div>
                            <strong>Areas Of Interest</strong>
                            <small>Our areas of focus</small>
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
                            <i class="fas fa-circle-check"></i>
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


            <!-- NEWS -->
            <div class="wasman-nav-dropdown">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
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
                            <i class="fas fa-file-lines"></i>
                        </div>

                        <div>
                            <strong>Reports</strong>
                            <small>Reports and documents</small>
                        </div>

                    </a>


                    <a href="/events">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-calendar-days"></i>
                        </div>

                        <div>
                            <strong>Events</strong>
                            <small>Upcoming activities</small>
                        </div>

                    </a>


                    <a href="/photos_videos">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-photo-film"></i>
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

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
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
                            <i class="fas fa-graduation-cap"></i>
                        </div>

                        <div>
                            <strong>Intern</strong>
                            <small>Build your experience</small>
                        </div>

                    </a>


                    <a href="/volunteer">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-heart"></i>
                        </div>

                        <div>
                            <strong>Volunteer</strong>
                            <small>Support our mission</small>
                        </div>

                    </a>


                    <a href="/research_assistant">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-flask"></i>
                        </div>

                        <div>
                            <strong>Research Assistant</strong>
                            <small>Work with our researchers</small>
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


            <!-- CONTACT -->
            <div class="wasman-nav-dropdown wasman-contact">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
                    <span>Contact Us</span>
                    <i class="fas fa-chevron-down"></i>
                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/leave_message">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-message"></i>
                        </div>

                        <div>
                            <strong>Leave a Message</strong>
                            <small>Send us a message</small>
                        </div>

                    </a>


                    <a href="/general_enquiries">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-circle-question"></i>
                        </div>

                        <div>
                            <strong>General Enquiries</strong>
                            <small>Get in touch with us</small>
                        </div>

                    </a>

                </div>

            </div>

        </nav>

    </div>

</header>

{{-- =========================================================
     HERO / LANDING IMAGE
========================================================= --}}

<section class="hero-banner">
</section>



{{-- =========================================================
     KNOWLEDGE BITE
========================================================= --}}

<section class="knowledge-section reveal">

    <div class="section-container">

        <div class="section-label">
            KNOWLEDGE & AWARENESS
        </div>

        <div class="section-title">
            Knowledge Bite
        </div>


        <div class="swiper mySwiper">

            <div class="swiper-wrapper">


                {{-- =========================
                     SLIDE 1
                ========================== --}}

                <div class="swiper-slide" id="one">

                    <div class="knowledge-inner">

                        <div class="head">
                            Knowledge Bite
                        </div>

                        <div class="content">

                            Women in aquatic science are making a difference.
                            Through research, mentorship and community engagement,
                            WASMaN members are promoting the sustainable management
                            of aquatic resources and inspiring more girls and women
                            to pursue careers in science and environmental
                            conservation.

                        </div>

                    </div>

                </div>



                {{-- =========================
                     SLIDE 2
                ========================== --}}

                <div class="swiper-slide">

                    <div id="two">

                        <span class="slide-heading">
                            Did You Know?
                        </span>


                        <div id="Child">

                            <p>
                                Mangrove forests can store up to four times
                                more carbon per hectare than tropical
                                rainforests.
                            </p>

                            <p>
                                Healthy coastal ecosystems help reduce
                                the impact of storm surges and coastal
                                erosion.
                            </p>

                            <p>
                                Plastic waste can remain in marine
                                environments for hundreds of years.
                            </p>

                        </div>

                    </div>

                </div>



                {{-- =========================
                     SLIDE 3
                ========================== --}}

                <div class="swiper-slide" id="three">

                    <div class="lists-container">

                        <div class="headere" id="header">
                            Why WASMaN's Activities Matter
                        </div>


                        <div class="lists  " id="listss">

                            <ul>

                                <li>
                                    WASMaN helps increase the participation
                                    and leadership of women in aquatic science
                                    and resource management.
                                </li>

                                <li>
                                    The network provides a platform for
                                    professionals, researchers and students
                                    to collaborate and exchange ideas.
                                </li>

                                <li>
                                    Research and outreach activities contribute
                                    to the sustainable management of fisheries,
                                    coastal and marine resources.
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>


            {{-- SWIPER CONTROLS --}}

            <div class="swiper-button-prev"></div>

            <div class="swiper-button-next"></div>

            <div class="swiper-pagination"></div>

        </div>
        <div class="section-label kk">
            <a href="/knowledge_bite">Explore more <i class="fas fa-arrow-right"></i></a>
        </div>

    </div>

</section>



{{-- =========================================================
     WHO WE ARE
========================================================= --}}

<section class="who_we_are reveal">

    <div class="section-container">

        <div class="section-label">
            ABOUT WASMaN
        </div>

        <div class="heading">
            Who We Are
        </div>


        <div class="who-content">


            {{-- LEFT CONTENT --}}

            <div class="who-text">

                <p>
                    The Women in Aquatic Science and Management Network
                    (WASMaN) is a network committed to promoting the
                    participation, leadership and advancement of women
                    in aquatic science and resource management.
                </p>

                <p>
                    Through research, capacity building, mentorship,
                    community engagement and collaboration, WASMaN creates
                    opportunities for women and girls to contribute
                    meaningfully to the sustainable management of aquatic
                    resources.
                </p>

                <a href="/news" class="read-more">
                    Discover More →
                </a>

            </div>


            {{-- RIGHT CONTENT --}}

            <div class="who-highlight">


                <div class="highlight-box">

                    <span class="highlight-number">
                        01
                    </span>

                    <h3>
                        Empowerment
                    </h3>

                    <p>
                        Creating opportunities for women to thrive
                        in aquatic science and management.
                    </p>

                </div>



                <div class="highlight-box">

                    <span class="highlight-number">
                        02
                    </span>

                    <h3>
                        Leadership
                    </h3>

                    <p>
                        Promoting women's participation and leadership
                        in aquatic resource management.
                    </p>

                </div>


            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     FOCUS AREAS
========================================================= --}}

<section class="focus-section reveal">

    <div class="section-container">

        <div class="section-label">
            WHAT WE DO
        </div>

        <div class="section-title">
            Our Focus Areas
        </div>


        <div class="focus-grid">


            {{-- RESEARCH --}}

            <div class="gists">

                <div class="gist-icon">
                    <i class="fas fa-flask">🔍</i>
                </div>

                <div class="gist_heading">
                    Research & Innovation
                </div>

                <div class="gist_content">
                    Promoting quality, inclusive research that integrates
                    scientific and indigenous knowledge to address aquatic
                    and environmental challenges.
                </div>

                <a href="/publications" class="gist-link">
                    Explore Research →
                </a>

            </div>



            {{-- CAPACITY BUILDING --}}

            <div class="gists">

                <div class="gist-icon">
                    <i class="fas fa-users">📲</i>
                </div>

                <div class="gist_heading">
                    Capacity Building & Mentorship
                </div>

                <div class="gist_content">
                    Delivering training, mentorship and professional
                    development opportunities for women and girls.
                </div>

                <a href="/areas_of_interest" class="gist-link">
                    Learn More →
                </a>

            </div>



            {{-- SUSTAINABILITY --}}

            <div class="gists">

                <div class="gist-icon">
                    <i class="fas fa-water">⛵</i>
                </div>

                <div class="gist_heading">
                    Sustainable Aquatic Resources
                </div>

                <div class="gist_content">
                    Supporting sustainable management and conservation
                    of aquatic, coastal and marine resources.
                </div>

                <a href="/what_we_do" class="gist-link">
                    Our Activities →
                </a>

            </div>



            {{-- COLLABORATION --}}

            <div class="gists">

                <div class="gist-icon">
                    <i class="fas fa-handshake">🛜</i>
                </div>

                <div class="gist_heading">
                    Collaboration & Networking
                </div>

                <div class="gist_content">
                    Connecting professionals, researchers, students,
                    institutions and communities to exchange knowledge
                    and build meaningful partnerships.
                </div>

                <a href="/become_member" class="gist-link">
                    Join the Network →
                </a>

            </div>


        </div>

    </div>

</section>



{{-- =========================================================
     CALL TO ACTION
========================================================= --}}

<section class="cta-section reveal">

    <div class="cta-overlay">

        <div class="cta-content">

            <div class="section-label">
                BE PART OF THE CHANGE
            </div>

            <h2>
                Together, We Can Shape the Future
                of Aquatic Science.
            </h2>

            <p>
                Whether you are a researcher, student, professional,
                organisation or advocate, there is a place for you
                within the WASMaN community.
            </p>

            <a href="/become_member" class="cta-btn">
                Join WASMaN
            </a>

        </div>

    </div>

</section>



{{-- =========================================================
     FOOTER
========================================================= --}}

<footer class="second_part">

    <div class="sub_sections">


        <div class="copyright_area">

            <p>
                <strong>
                    Women in Aquatic Science and Management Network
                    (WASMaN)
                </strong>
            </p>

            <p>
                Ghana, West Africa
            </p>

            <p>
                <a href="{{ url('/') }}">
                    wasman.org
                </a>
            </p>

            <p>
                &copy; 2026 WASMaN. All rights reserved.
            </p>

        </div>



        <div class="footer-links">

            <a href="/what_we_do">
                About Us
            </a>

            <a href="ongoing_projects">
                Activities
            </a>

            <a href="/publications">
                Research
            </a>

            <a href="general_enquiries">
                Contact
            </a>

        </div>

        <div class="imgs">
            <div class="socials"><img src="{{ asset('pics_vids/youtube_220211.png') }}"><span><a href="https://youtube.com/@wasman-official?si=tnqgaMX7BBCAEcsC">@wasman-official</a></span></div>
            <div class="socials"><img src="{{ asset('pics_vids/linkedin-1.png') }}"><span><a href="/">info@wasman.org</a></span></div>
            <div class="socials"><img src="{{ asset('pics_vids/globe.png') }}"><span><a href="/">https://wasman.org</a></span></div>
        </div>  


    </div>

</footer>
```

      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
     <script src="{{ asset('created_js/animation.js') }}"></script>
   

</html>
