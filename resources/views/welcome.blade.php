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
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> 
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
                   
            <div class="list_options" id="home"><a href="/">Home</a></div>

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
 
{{-- =========================================================
     HERO / LANDING IMAGE
========================================================= --}}

<section class="hero-banner">
    <!-- <img src="{{ asset('pics_vids/logo.png') }}"> -->
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
            <div class="socials"><img src="{{ asset('pics_vids/youtube_220211.png') }}"><span><a href="/">@wasman-official</a></span></div>
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
