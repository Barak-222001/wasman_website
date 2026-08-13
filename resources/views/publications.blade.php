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
        <link rel="stylesheet" href="{{ asset('css/publications.css') }}"> 
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
                PUBLICATIONS HERO
========================================================= -->

<section class="publication-hero">

    <div class="publication-hero-overlay">

        <div class="publication-hero-content">

            <span class="section-tag">WASMAN KNOWLEDGE CENTRE</span>

            <h1>
                Research, Knowledge &
                <span>Scientific Impact</span>
            </h1>

            <p>
                Explore research papers, policy briefs, technical reports,
                manuals and scientific publications advancing aquatic science,
                environmental sustainability and women's leadership.
            </p>

            <div class="publication-search">

                <input
                    type="text"
                    placeholder="Search publications, reports or research..."
                >

                <button type="submit">
                    <i class="fas fa-search"></i>
                    Search
                </button>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
                KNOWLEDGE INTRODUCTION
========================================================= -->

<section class="knowledge-overview">

    <div class="knowledge-intro">

        <span class="section-tag">KNOWLEDGE CENTRE</span>

        <h2>
            Turning Scientific Knowledge
            Into Sustainable Action
        </h2>

        <p>
            WASMAN promotes evidence-based decision-making by producing,
            sharing and supporting high-quality scientific knowledge.
            Our publications provide valuable resources for researchers,
            students, policymakers, conservation practitioners and
            development organizations.
        </p>

        <p>
            Through research and knowledge exchange, we contribute to
            improved aquatic resource management, environmental
            conservation, climate resilience and women's participation
            in science and leadership.
        </p>

    </div>


    <div class="knowledge-stat-grid">

        <div class="knowledge-stat">

            <div class="stat-icon">
                <i class="fas fa-file-alt"></i>
            </div>

            <h3>120+</h3>

            <span>Research Papers</span>

        </div>


        <div class="knowledge-stat">

            <div class="stat-icon">
                <i class="fas fa-book-open"></i>
            </div>

            <h3>45</h3>

            <span>Technical Reports</span>

        </div>


        <div class="knowledge-stat">

            <div class="stat-icon">
                <i class="fas fa-scale-balanced"></i>
            </div>

            <h3>18</h3>

            <span>Policy Briefs</span>

        </div>


        <div class="knowledge-stat">

            <div class="stat-icon">
                <i class="fas fa-download"></i>
            </div>

            <h3>5,000+</h3>

            <span>Downloads</span>

        </div>

    </div>

</section>



<!-- =========================================================
                FEATURED PUBLICATION
========================================================= -->

<section class="featured-publication">

    <div class="featured-publication-image">

        <div class="publication-label">
            <i class="fas fa-star"></i>
            FEATURED PUBLICATION
        </div>

        <img
            src="{{ asset('pics_vids/publication-cover.jpg') }}"
            alt="Featured WASMAN Publication"
        >

    </div>


    <div class="featured-publication-content">

        <span class="section-tag">
            FEATURED RESEARCH
        </span>

        <h2>
            Women Leading Sustainable
            Aquatic Resource Management
        </h2>

        <p>
            This publication explores the role of women in advancing
            aquatic science, coastal conservation and sustainable
            blue economy initiatives across Africa.
        </p>

        <p>
            It highlights emerging research, leadership opportunities,
            community initiatives and innovative approaches that place
            women at the centre of sustainable aquatic resource management.
        </p>


        <div class="publication-details">

            <div>
                <i class="fas fa-user"></i>

                <span>
                    <strong>Author</strong>
                    WASMAN Research Team
                </span>
            </div>


            <div>
                <i class="fas fa-calendar"></i>

                <span>
                    <strong>Published</strong>
                    2026
                </span>
            </div>


            <div>
                <i class="fas fa-layer-group"></i>

                <span>
                    <strong>Category</strong>
                    Research Report
                </span>
            </div>

        </div>


        <div class="publication-buttons">

            <a href="#" class="primary-btn">
                <i class="fas fa-book-open"></i>
                Read Online
            </a>

            <a href="#" class="secondary-btn">
                <i class="fas fa-download"></i>
                Download PDF
            </a>

        </div>

    </div>

</section>



<!-- =========================================================
                PUBLICATION LIBRARY
========================================================= -->

<section class="publication-library">

    <div class="library-header">

        <div>

            <span class="section-tag">
                RESEARCH LIBRARY
            </span>

            <h2>
                Explore Our Latest Publications
            </h2>

        </div>


        <a href="#" class="library-link">
            View All Publications
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>



    <div class="publication-grid">


        <!-- CARD 1 -->

        <article class="publication-card">

            <div class="publication-card-image">

                <img
                    src="{{ asset('pics_vids/pub1.jpg') }}"
                    alt="Coastal Ecosystem Restoration"
                >

                <span class="publication-category">
                    Marine Science
                </span>

            </div>


            <div class="publication-card-body">

                <div class="publication-date">
                    <i class="far fa-calendar"></i>
                    March 2026
                </div>

                <h3>
                    Coastal Ecosystem Restoration
                </h3>

                <p>
                    An assessment of restoration techniques,
                    ecosystem recovery and coastal resilience.
                </p>

                <a href="#">
                    Read Publication
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>



        <!-- CARD 2 -->

        <article class="publication-card">

            <div class="publication-card-image">

                <img
                    src="{{ asset('pics_vids/project1.jpg') }}"
                    alt="Aquatic Research"
                >

                <span class="publication-category">
                    Aquatic Science
                </span>

            </div>


            <div class="publication-card-body">

                <div class="publication-date">
                    <i class="far fa-calendar"></i>
                    February 2026
                </div>

                <h3>
                    Aquatic Ecosystem Health Assessment
                </h3>

                <p>
                    Scientific approaches to monitoring aquatic
                    ecosystem health and biodiversity.
                </p>

                <a href="#">
                    Read Publication
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>



        <!-- CARD 3 -->

        <article class="publication-card">

            <div class="publication-card-image">

                <img
                    src="{{ asset('pics_vids/outreach.jpeg') }}"
                    alt="Women in Aquatic Science"
                >

                <span class="publication-category">
                    Gender & Leadership
                </span>

            </div>


            <div class="publication-card-body">

                <div class="publication-date">
                    <i class="far fa-calendar"></i>
                    January 2026
                </div>

                <h3>
                    Women in Aquatic Science
                </h3>

                <p>
                    Examining pathways for strengthening women's
                    participation in aquatic science and leadership.
                </p>

                <a href="#">
                    Read Publication
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>



        <!-- CARD 4 -->

        <article class="publication-card">

            <div class="publication-card-image">

                <img
                    src="{{ asset('pics_vids/climate.jpeg') }}"
                    alt="Climate Resilience"
                >

                <span class="publication-category">
                    Climate Change
                </span>

            </div>


            <div class="publication-card-body">

                <div class="publication-date">
                    <i class="far fa-calendar"></i>
                    December 2025
                </div>

                <h3>
                    Climate Resilience in Coastal Communities
                </h3>

                <p>
                    Exploring practical strategies for strengthening
                    climate resilience in vulnerable communities.
                </p>

                <a href="#">
                    Read Publication
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>

    </div>

</section>



<!-- =========================================================
                RESEARCH CATEGORIES
========================================================= -->

<section class="publication-categories">

    <div class="categories-header">

        <span class="section-tag">
            BROWSE OUR KNOWLEDGE
        </span>

        <h2>
            Explore Publications by Category
        </h2>

        <p>
            Discover research and resources across the major areas
            of WASMAN's work.
        </p>

    </div>


    <div class="category-grid">


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-water"></i>
            </div>

            <div>
                <h3>Marine Science</h3>
                <p>Research on oceans and marine ecosystems.</p>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-globe"></i>
            </div>

            <div>
                <h3>Blue Economy</h3>
                <p>Sustainable aquatic economic development.</p>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-cloud-sun"></i>
            </div>

            <div>
                <h3>Climate Change</h3>
                <p>Climate adaptation and resilience research.</p>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-droplet"></i>
            </div>

            <div>
                <h3>Water Conservation</h3>
                <p>Research supporting sustainable water resources.</p>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-scale-balanced"></i>
            </div>

            <div>
                <h3>Policy Briefs</h3>
                <p>Evidence supporting environmental policy.</p>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-flask"></i>
            </div>

            <div>
                <h3>Technical Reports</h3>
                <p>Detailed technical and scientific findings.</p>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>

    </div>

</section>



<!-- =========================================================
                RESEARCH IMPACT
========================================================= -->

<section class="research-impact">

    <div class="impact-heading">

        <span class="section-tag">
            RESEARCH IMPACT
        </span>

        <h2>
            Knowledge That Reaches Beyond
            the Research Community
        </h2>

    </div>


    <div class="impact-grid">


        <div class="impact-item">

            <div class="impact-icon">
                <i class="fas fa-quote-right"></i>
            </div>

            <h2>250+</h2>

            <span>Citations</span>

        </div>


        <div class="impact-item">

            <div class="impact-icon">
                <i class="fas fa-building-columns"></i>
            </div>

            <h2>60+</h2>

            <span>Partner Institutions</span>

        </div>


        <div class="impact-item">

            <div class="impact-icon">
                <i class="fas fa-globe-africa"></i>
            </div>

            <h2>30</h2>

            <span>Countries Reached</span>

        </div>


        <div class="impact-item">

            <div class="impact-icon">
                <i class="fas fa-download"></i>
            </div>

            <h2>15K+</h2>

            <span>Downloads</span>

        </div>

    </div>

</section>



<!-- =========================================================
                NEWSLETTER CTA
========================================================= -->

<section class="publication-newsletter">

    <div class="newsletter-content">

        <div class="newsletter-icon">
            <i class="fas fa-envelope-open-text"></i>
        </div>

        <span class="section-tag">
            STAY INFORMED
        </span>

        <h2>
            Never Miss New Research
        </h2>

        <p>
            Subscribe to receive newly released research papers,
            technical reports, policy briefs and other WASMAN
            knowledge resources.
        </p>


        <form class="newsletter-form">

            <input
                type="email"
                placeholder="Enter your email address"
                required
            >

            <button type="submit">
                Subscribe
                <i class="fas fa-paper-plane"></i>
            </button>

        </form>

    </div>

</section>
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
