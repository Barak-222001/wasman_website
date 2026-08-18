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
        <link rel="stylesheet" href="{{ asset('css/completed.css') }}"> 

        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
<!-- =========================================================
     COMPLETED PROJECTS PAGE
========================================================= -->

<section class="completed-projects-page">

    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="completed-hero">

        <div class="completed-hero-overlay">

            <div class="completed-hero-content">

                <span class="eyebrow">COMPLETED PROJECTS</span>

                <h1>
                    Turning Research Into
                    <strong>Lasting Impact</strong>
                </h1>

                <p>
                    Explore the projects, partnerships and scientific
                    initiatives that have contributed to healthier
                    aquatic ecosystems, stronger communities and
                    greater opportunities for women in science.
                </p>

                <div class="completed-hero-actions">

                    <a href="#" class="primary-btn">
                        Explore Success Stories
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="#" class="secondary-btn">
                        Download Reports
                        <i class="fas fa-file-pdf"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         LEGACY / IMPACT SNAPSHOT
    ====================================================== -->

    <section class="legacy-section">

        <div class="legacy-intro">

            <span class="section-label">OUR LEGACY</span>

            <h2>
                Projects That Continue
                to Make a Difference
            </h2>

            <p>
                Successful projects should create value long after
                implementation ends. WASMAN's completed initiatives
                have generated scientific knowledge, strengthened
                partnerships, supported communities and contributed
                to sustainable aquatic resource management.
            </p>

            <p>
                These experiences continue to inform our current
                programmes while providing a foundation for future
                research, conservation and environmental leadership.
            </p>

        </div>


        <div class="legacy-stat-grid">

            <div class="legacy-stat">

                <div class="stat-icon">
                    <i class="fas fa-check-double"></i>
                </div>

                <h3>30+</h3>

                <p>Projects Completed</p>

            </div>


            <div class="legacy-stat">

                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>

                <h3>18</h3>

                <p>Communities Served</p>

            </div>


            <div class="legacy-stat">

                <div class="stat-icon">
                    <i class="fas fa-globe-africa"></i>
                </div>

                <h3>7</h3>

                <p>Countries Reached</p>

            </div>


            <div class="legacy-stat">

                <div class="stat-icon">
                    <i class="fas fa-book-open"></i>
                </div>

                <h3>50+</h3>

                <p>Research Publications</p>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FEATURED SUCCESS STORY
    ====================================================== -->

    <section class="success-section">

        <div class="success-image">

            <img
                src="{{ asset('pics_vids/completed-project.jpg') }}"
                alt="WASMAN conservation project">

            <div class="success-tag">
                <i class="fas fa-award"></i>
                Featured Success Story
            </div>

        </div>


        <div class="success-content">

            <span class="section-label">
                FEATURED SUCCESS STORY
            </span>

            <h2>
                Restoring Mangrove Ecosystems
                Along Ghana's Coastline
            </h2>

            <p>
                Working with local communities, researchers and
                conservation partners, WASMAN supported the restoration
                of degraded mangrove habitats while strengthening
                community participation in environmental management.
            </p>

            <p>
                The initiative also created opportunities for women and
                young researchers to develop practical skills in
                ecosystem restoration, biodiversity monitoring and
                environmental education.
            </p>


            <div class="success-results">

                <div>
                    <i class="fas fa-leaf"></i>
                    <span>45 hectares restored</span>
                </div>

                <div>
                    <i class="fas fa-user-graduate"></i>
                    <span>300 women trained</span>
                </div>

                <div>
                    <i class="fas fa-water"></i>
                    <span>12 coastal communities engaged</span>
                </div>

                <div>
                    <i class="fas fa-calendar-check"></i>
                    <span>Completed in 2025</span>
                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         COMPLETED PROJECTS INTRO
    ====================================================== -->

    <section class="completed-heading">

        <span class="section-label">
            OUR PROJECT PORTFOLIO
        </span>

        <h2>
            From Scientific Research
            to Community Transformation
        </h2>

        <p>
            Browse selected projects that demonstrate the breadth
            of WASMAN's work across aquatic science, conservation,
            climate resilience and women's empowerment.
        </p>

    </section>


    <!-- =====================================================
         PROJECT CARDS
    ====================================================== -->

    <section class="completed-project-grid">


        <!-- PROJECT 1 -->

        <article class="completed-project-card">

            <div class="completed-card-image">

                <img
                    src="{{ asset('pics_vids/project1.jpg') }}"
                    alt="Water quality assessment">

                <span class="completed-badge">
                    <i class="fas fa-check-circle"></i>
                    Completed
                </span>

            </div>


            <div class="completed-card-content">

                <span class="project-category">
                    <i class="fas fa-flask"></i>
                    Research
                </span>

                <h3>
                    Water Quality Assessment
                </h3>

                <p>
                    A two-year scientific assessment of freshwater
                    quality across selected river basins, generating
                    evidence to support sustainable water management.
                </p>


                <div class="project-details">

                    <div>
                        <i class="fas fa-calendar"></i>
                        <span>2023 – 2025</span>
                    </div>

                    <div>
                        <i class="fas fa-location-dot"></i>
                        <span>Ghana</span>
                    </div>

                    <div>
                        <i class="fas fa-chart-line"></i>
                        <span>Policy recommendations adopted</span>
                    </div>

                </div>


                <a href="#" class="project-link">
                    View Project
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>


        <!-- PROJECT 2 -->

        <article class="completed-project-card">

            <div class="completed-card-image">

                <img
                    src="{{ asset('pics_vids/project2.jpg') }}"
                    alt="Marine biodiversity survey">

                <span class="completed-badge">
                    <i class="fas fa-check-circle"></i>
                    Completed
                </span>

            </div>


            <div class="completed-card-content">

                <span class="project-category">
                    <i class="fas fa-fish"></i>
                    Conservation
                </span>

                <h3>
                    Marine Biodiversity Survey
                </h3>

                <p>
                    Monitoring key marine species and ecosystems using
                    innovative ecological approaches to strengthen
                    scientific understanding and conservation.
                </p>


                <div class="project-details">

                    <div>
                        <i class="fas fa-calendar"></i>
                        <span>2022 – 2024</span>
                    </div>

                    <div>
                        <i class="fas fa-location-dot"></i>
                        <span>Gulf of Guinea</span>
                    </div>

                    <div>
                        <i class="fas fa-book"></i>
                        <span>Scientific publications</span>
                    </div>

                </div>


                <a href="#" class="project-link">
                    View Project
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>


        <!-- PROJECT 3 -->

        <article class="completed-project-card">

            <div class="completed-card-image">

                <img
                    src="{{ asset('pics_vids/project3.jpg') }}"
                    alt="Women in blue economy">

                <span class="completed-badge">
                    <i class="fas fa-check-circle"></i>
                    Completed
                </span>

            </div>


            <div class="completed-card-content">

                <span class="project-category">
                    <i class="fas fa-venus"></i>
                    Women's Empowerment
                </span>

                <h3>
                    Women in Blue Economy
                </h3>

                <p>
                    Strengthening entrepreneurial opportunities for
                    women in coastal communities through training,
                    mentorship and sustainable livelihood development.
                </p>


                <div class="project-details">

                    <div>
                        <i class="fas fa-calendar"></i>
                        <span>2023 – 2025</span>
                    </div>

                    <div>
                        <i class="fas fa-location-dot"></i>
                        <span>West Africa</span>
                    </div>

                    <div>
                        <i class="fas fa-seedling"></i>
                        <span>Sustainable livelihoods</span>
                    </div>

                </div>


                <a href="#" class="project-link">
                    View Project
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>

    </section>


    <!-- =====================================================
         IMPACT GALLERY
    ====================================================== -->

    <section class="impact-gallery-section">

        <div class="gallery-heading">

            <span class="section-label">
                PROJECT HIGHLIGHTS
            </span>

            <h2>
                Moments From Our Work
            </h2>

            <p>
                A glimpse into the people, communities and environments
                at the heart of our completed projects.
            </p>

        </div>


        <div class="impact-gallery">

            <div class="gallery-item large">
                <img
                    src="{{ asset('pics_vids/gallery1.jpg') }}"
                    alt="WASMAN field activity">
            </div>

            <div class="gallery-item">
                <img
                    src="{{ asset('pics_vids/gallery2.jpg') }}"
                    alt="Community engagement">
            </div>

            <div class="gallery-item">
                <img
                    src="{{ asset('pics_vids/gallery3.jpg') }}"
                    alt="Aquatic research">
            </div>

            <div class="gallery-item wide">
                <img
                    src="{{ asset('pics_vids/gallery4.jpg') }}"
                    alt="Environmental conservation">
            </div>

        </div>

    </section>


    <!-- =====================================================
         LESSONS / LEGACY
    ====================================================== -->

    <section class="lessons-section">

        <div class="lessons-image">

            <img
                src="{{ asset('pics_vids/outreach.jpeg') }}"
                alt="WASMAN community outreach">

        </div>


        <div class="lessons-content">

            <span class="section-label">
                BEYOND COMPLETION
            </span>

            <h2>
                What Our Projects Have Taught Us
            </h2>

            <p>
                Each completed project provides more than a final
                report. It generates knowledge, strengthens networks
                and creates lessons that can guide future environmental
                action.
            </p>


            <div class="lesson-list">

                <div class="lesson-item">

                    <div class="lesson-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>

                    <div>
                        <h3>Innovation</h3>

                        <p>
                            Applying research and new approaches to
                            solve complex aquatic challenges.
                        </p>
                    </div>

                </div>


                <div class="lesson-item">

                    <div class="lesson-icon">
                        <i class="fas fa-people-group"></i>
                    </div>

                    <div>
                        <h3>Collaboration</h3>

                        <p>
                            Bringing scientists, communities and
                            institutions together for greater impact.
                        </p>
                    </div>

                </div>


                <div class="lesson-item">

                    <div class="lesson-icon">
                        <i class="fas fa-recycle"></i>
                    </div>

                    <div>
                        <h3>Sustainability</h3>

                        <p>
                            Creating solutions that continue benefiting
                            people and nature beyond project completion.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         LOOKING AHEAD
    ====================================================== -->

    <section class="completed-cta">

        <div class="cta-content">

            <span>LOOKING AHEAD</span>

            <h2>
                Every Success Becomes
                a Foundation for What's Next
            </h2>

            <p>
                Our completed projects continue to inspire new research,
                stronger partnerships and innovative conservation
                initiatives across aquatic ecosystems.
            </p>

            <div class="cta-buttons">

                <a href="#" class="cta-primary">
                    View Ongoing Projects
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a href="#" class="cta-outline">
                    Partner With WASMAN
                </a>

            </div>

        </div>

    </section>

</section>


    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
