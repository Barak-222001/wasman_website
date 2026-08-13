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
        <link rel="stylesheet" href="{{ asset('css/team.css') }}">
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
<!-- =========================================================
     WASMAN TEAM PAGE
========================================================= -->

<section class="team-page">

    <!-- =====================================================
         TEAM HEADER
    ====================================================== -->

    <div class="team-header">

        <span>OUR TEAM</span>

        <h1>Meet the Women Leading Change</h1>

        <p>
            WASMAN is driven by a passionate community of scientists,
            researchers, educators, conservationists and professionals
            committed to advancing women's leadership in aquatic science,
            marine conservation and the sustainable blue economy.
        </p>

    </div>


    <!-- =====================================================
         EXECUTIVE COMMITTEE
    ====================================================== -->

    <div class="section-title">

        <span>LEADERSHIP</span>

        <h2>Executive Committee</h2>

        <p>
            Our Executive Committee provides strategic direction and
            coordinates the activities, programmes and growth of WASMAN.
        </p>

    </div>


    <div class="team-grid">

        <!-- =================================================
             PRESIDENT
        ================================================== -->

        <div class="member">

            <div class="member-image">

                <img src="{{asset('pics_vids/dr.alberta.jpeg')}}"
                     alt="Dr. Alberta Ama Saggoe">

            </div>

            <div class="member-info">

                <h3>Dr. Alberta Ama Saggoe</h3>

                <span class="member-role">
                    President
                </span>

                <div class="member-specialty">

                    <strong>Specialty</strong>

                    <p>
                        Aquatic Science & Environmental Management
                    </p>

                </div>

                <p class="member-description">
                    Providing strategic leadership and advancing the
                    vision and mission of WASMAN through scientific
                    collaboration and environmental stewardship.
                </p>

            </div>

        </div>


        <!-- =================================================
             VICE PRESIDENT
        ================================================== -->

        <div class="member">

            <div class="member-image">

                <img src="{{asset('pics_vids/michelle_clottey.jpeg')}}"
                     alt="Dr. Michelle Clottey">

            </div>

            <div class="member-info">

                <h3>Dr. Michelle Clottey</h3>

                <span class="member-role">
                    Vice President
                </span>

                <div class="member-specialty">

                    <strong>Specialty</strong>

                    <p>
                        Marine Science & Fisheries Management
                    </p>

                </div>

                <p class="member-description">
                    Supporting strategic leadership and strengthening
                    collaboration across the WASMAN community.
                </p>

            </div>

        </div>


        <!-- =================================================
             SECRETARY
        ================================================== -->

        <div class="member">

            <div class="member-image">

                <img src="{{asset('pics_vids/michelle.jpeg')}}"
                     alt="Dr. Angela Brown">

            </div>

            <div class="member-info">

                <h3>Dr. Angela Brown</h3>

                <span class="member-role">
                    Secretary
                </span>

                <div class="member-specialty">

                    <strong>Specialty</strong>

                    <p>
                        Environmental Research & Coastal Management
                    </p>

                </div>

                <p class="member-description">
                    Coordinating network communication, documentation
                    and administrative activities.
                </p>

            </div>

        </div>


        <!-- =================================================
             TREASURER
        ================================================== -->

        <div class="member">

            <div class="member-image">

                <img src="{{asset('pics_vids/dr.kassah.jpeg')}}"
                     alt="Dr. Grace Wilson">

            </div>

            <div class="member-info">

                <h3>Dr. Grace Wilson</h3>

                <span class="member-role">
                    Treasurer
                </span>

                <div class="member-specialty">

                    <strong>Specialty</strong>

                    <p>
                        Fisheries Science & Blue Economy
                    </p>

                </div>

                <p class="member-description">
                    Supporting responsible financial management,
                    accountability and resource mobilisation.
                </p>

            </div>

        </div>


        <!-- =================================================
             PROGRAMS COORDINATOR
        ================================================== -->

        <div class="member">

            <div class="member-image">

                <img src="{{asset('pics_vids/dr.huge.jpeg')}}"
                     alt="Dr. Rebecca Green">

            </div>

            <div class="member-info">

                <h3>Dr. Rebecca Green</h3>

                <span class="member-role">
                    Programs Coordinator
                </span>

                <div class="member-specialty">

                    <strong>Specialty</strong>

                    <p>
                        Climate Resilience & Aquatic Conservation
                    </p>

                </div>

                <p class="member-description">
                    Coordinating programmes and initiatives that advance
                    the objectives and impact of WASMAN.
                </p>

            </div>

        </div>

    </div>



    <!-- =====================================================
         NETWORK MEMBERS
    ====================================================== -->

    <section class="network-members">

        <div class="section-title network-title">

            <span>OUR COMMUNITY</span>

            <h2>Network Members</h2>

            <p>
                WASMAN brings together women and professionals from
                diverse backgrounds who share a commitment to aquatic
                science, conservation, research and sustainable
                development.
            </p>

        </div>


        <!-- =================================================
             NETWORK MEMBERS GRID
        ================================================== -->

        <div class="members-grid">


            <!-- MEMBER 1 -->

            <div class="network-member">

                <div class="network-member-image">

                    <img src="{{asset('pics_vids/member-one.jpg')}}"
                         alt="Dr. Sarah Mensah">

                </div>

                <div class="network-member-info">

                    <h3>Dr. Sarah Mensah</h3>

                    <span>Aquatic Scientist</span>

                </div>

            </div>


            <!-- MEMBER 2 -->

            <div class="network-member">

                <div class="network-member-image">

                    <img src="{{asset('pics_vids/member-two.jpg')}}"
                         alt="Dr. Linda Owusu">

                </div>

                <div class="network-member-info">

                    <h3>Dr. Linda Owusu</h3>

                    <span>Marine Researcher</span>

                </div>

            </div>


            <!-- MEMBER 3 -->

            <div class="network-member">

                <div class="network-member-image">

                    <img src="{{asset('pics_vids/member-three.jpg')}}"
                         alt="Dr. Mary Boateng">

                </div>

                <div class="network-member-info">

                    <h3>Dr. Mary Boateng</h3>

                    <span>Environmental Scientist</span>

                </div>

            </div>


            <!-- MEMBER 4 -->

            <div class="network-member">

                <div class="network-member-image">

                    <img src="{{asset('pics_vids/member-four.jpg')}}"
                         alt="Dr. Evelyn Asante">

                </div>

                <div class="network-member-info">

                    <h3>Dr. Evelyn Asante</h3>

                    <span>Fisheries Researcher</span>

                </div>

            </div>


            <!-- MEMBER 5 -->

            <div class="network-member">

                <div class="network-member-image">

                    <img src="{{asset('pics_vids/member-five.jpg')}}"
                         alt="Dr. Janet Addo">

                </div>

                <div class="network-member-info">

                    <h3>Dr. Janet Addo</h3>

                    <span>Conservation Specialist</span>

                </div>

            </div>


            <!-- MEMBER 6 -->

            <div class="network-member">

                <div class="network-member-image">

                    <img src="{{asset('pics_vids/member-six.jpg')}}"
                         alt="Dr. Patricia Kusi">

                </div>

                <div class="network-member-info">

                    <h3>Dr. Patricia Kusi</h3>

                    <span>Climate Researcher</span>

                </div>

            </div>


        </div>


        <!-- =================================================
             NETWORK STATISTICS
        ================================================== -->

        <div class="member-count">

            <div class="count-item">

                <strong>100+</strong>

                <span>Network Members</span>

            </div>


            <div class="count-item">

                <strong>10+</strong>

                <span>Disciplines</span>

            </div>


            <div class="count-item">

                <strong>5+</strong>

                <span>Countries</span>

            </div>

        </div>

    </section>



    <!-- =====================================================
         TEAM VALUES
    ====================================================== -->

    <div class="values">


        <!-- COLLABORATION -->

        <div class="value-box">

            <div class="value-number">
                01
            </div>

            <h3>
                Collaboration
            </h3>

            <p>
                Bringing together experts from diverse disciplines to
                solve complex environmental challenges.
            </p>

        </div>


        <!-- INNOVATION -->

        <div class="value-box">

            <div class="value-number">
                02
            </div>

            <h3>
                Innovation
            </h3>

            <p>
                Promoting research, creativity and scientific excellence
                in aquatic science and management.
            </p>

        </div>


        <!-- MENTORSHIP -->

        <div class="value-box">

            <div class="value-number">
                03
            </div>

            <h3>
                Mentorship
            </h3>

            <p>
                Supporting the next generation of women in aquatic
                science through knowledge sharing and mentorship.
            </p>

        </div>


    </div>



    <!-- =====================================================
         JOIN TEAM CTA
    ====================================================== -->

    <div class="join-team">

        <div class="join-content">

            <span>
                JOIN THE NETWORK
            </span>

            <h2>
                Become Part of Our Growing Community
            </h2>

            <p>
                Together, we can strengthen women's participation in
                aquatic science, protect our aquatic ecosystems and
                create a more sustainable future.
            </p>

            <a href="/become_member">
                Become a Member

                <i class="fas fa-arrow-right"></i>

            </a>

        </div>

    </div>

</section>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer class="footer">


    <!-- =====================================================
         FOOTER NEWSLETTER
    ====================================================== -->

    <div class="footer-top">

        <div class="footer-newsletter">

            <h2>
                Join the WASMAN Community
            </h2>

            <p>
                Stay informed about our latest research, conservation
                projects, training programmes, events and opportunities
                for collaboration.
            </p>

        </div>


        <form class="subscribe-form">

            <input
                type="email"
                placeholder="Enter your email address"
            >

            <button type="submit">
                Subscribe
            </button>

        </form>

    </div>



    <!-- =====================================================
         FOOTER CONTENT
    ====================================================== -->

    <div class="footer-content">


        <!-- ABOUT -->

        <div class="footer-box">

            <h3>
                WASMAN
            </h3>

            <p>
                Women in Aquatic Science and Management Network (WASMAN)
                is committed to advancing women's leadership, scientific
                excellence and collaboration in aquatic science, marine
                conservation, climate resilience and sustainable blue
                economy initiatives.
            </p>

        </div>


        <!-- QUICK LINKS -->

        <div class="footer-box">

            <h3>
                Quick Links
            </h3>

            <ul>

                <li>
                    <a href="/">Home</a>
                </li>

                <li>
                    <a href="/history">History</a>
                </li>

                <li>
                    <a href="/what_we_do">What We Do</a>
                </li>

                <li>
                    <a href="/ongoing">Projects</a>
                </li>

                <li>
                    <a href="/become_member">Membership</a>
                </li>

                <li>
                    <a href="/general_enquiries">Contact</a>
                </li>

            </ul>

        </div>


        <!-- FOCUS AREAS -->

        <div class="footer-box">

            <h3>
                Focus Areas
            </h3>

            <ul>

                <li>
                    Aquatic Science
                </li>

                <li>
                    Marine Protected Areas
                </li>

                <li>
                    Blue Economy
                </li>

                <li>
                    Climate Resilience
                </li>

                <li>
                    Water Conservation
                </li>

                <li>
                    Women's Leadership
                </li>

            </ul>

        </div>


        <!-- CONTACT -->

        <div class="footer-box">

            <h3>
                Contact Us
            </h3>

            <p>
                <strong>Email</strong><br>
                info@wasman.org
            </p>

            <p>
                <strong>Phone</strong><br>
                +233 XX XXX XXXX
            </p>

            <p>
                <strong>Location</strong><br>
                Cape Coast, Ghana
            </p>

        </div>


    </div>



    <!-- =====================================================
         FOOTER BOTTOM
    ====================================================== -->

    <div class="footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network
            (WASMAN). All Rights Reserved.
        </p>


        <div class="social-icons">

            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="#">
                <i class="fab fa-linkedin-in"></i>
            </a>

            <a href="#">
                <i class="fab fa-x-twitter"></i>
            </a>

            <a href="#">
                <i class="fab fa-youtube"></i>
            </a>

        </div>

    </div>

</footer>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
