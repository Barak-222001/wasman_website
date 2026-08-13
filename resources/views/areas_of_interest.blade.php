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
        <link rel="stylesheet" href="{{ asset('css/areas_of_interests.css') }}"> 
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
     AREAS OF INTEREST
========================================================= -->

<section class="wasman-interests">


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="interest-hero">

        <div class="interest-hero-overlay">

            <div class="interest-hero-content">

                <div class="interest-eyebrow">
                    <i class="fa-solid fa-water"></i>
                    OUR AREAS OF INTEREST
                </div>

                <h1>
                    Advancing Science for Healthy Waters,
                    Thriving Ecosystems & Resilient Communities
                </h1>

                <p>
                    WASMAN brings together science, innovation, leadership
                    and community action to promote sustainable aquatic
                    ecosystems and climate-resilient communities.
                </p>

                <div class="interest-hero-line"></div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         INTRODUCTION
    ====================================================== -->

    <section class="interest-intro">

        <div class="intro-image">

            <img
                src="{{ asset('pics_vids/outreach.jpeg') }}"
                alt="WASMAN community outreach"
            >

            <div class="intro-image-badge">

                <i class="fa-solid fa-leaf"></i>

                <div>
                    <strong>Science & Impact</strong>
                    <span>Creating sustainable solutions</span>
                </div>

            </div>

        </div>


        <div class="intro-content">

            <span class="section-label">
                OUR FOCUS
            </span>

            <h2>
                Creating Impact Through Science,
                Leadership & Collaboration
            </h2>

            <div class="title-line"></div>

            <p>
                WASMAN brings together scientists, students, researchers,
                conservation practitioners, policymakers and development
                partners who are committed to improving the sustainable
                management of aquatic ecosystems.
            </p>

            <p>
                Our areas of interest reflect the growing need for
                interdisciplinary solutions to today's environmental
                challenges. By combining research, innovation, education
                and community engagement, we contribute to healthier
                freshwater and marine ecosystems while empowering women
                to become leaders in aquatic science and environmental
                management.
            </p>

            <div class="intro-highlights">

                <div>
                    <i class="fa-solid fa-flask"></i>
                    <span>Research</span>
                </div>

                <div>
                    <i class="fa-solid fa-seedling"></i>
                    <span>Conservation</span>
                </div>

                <div>
                    <i class="fa-solid fa-users"></i>
                    <span>Leadership</span>
                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         CORE AREAS
    ====================================================== -->

    <section class="core-interest-section">


        <div class="interest-section-heading">

            <span class="section-label">
                WHAT DRIVES OUR WORK
            </span>

            <h2>
                Our Core Areas of Interest
            </h2>

            <p>
                Our work connects scientific knowledge with practical
                solutions that protect aquatic ecosystems, strengthen
                communities and create opportunities for women.
            </p>

        </div>



        <!-- 01 -->

        <article class="interest-block">

            <div class="interest-text">

                <div class="interest-number">
                    01
                </div>

                <div class="interest-icon">
                    <i class="fa-solid fa-flask"></i>
                </div>

                <span class="interest-category">
                    SCIENCE & RESEARCH
                </span>

                <h2>
                    Aquatic Science & Research
                </h2>

                <p>
                    Scientific knowledge is the foundation of sustainable
                    aquatic resource management. WASMAN promotes research
                    that enhances our understanding of freshwater,
                    estuarine and marine ecosystems.
                </p>

                <p>
                    Our members engage in multidisciplinary studies
                    covering aquatic ecology, fisheries science, water
                    quality, biodiversity monitoring, ecosystem restoration
                    and environmental assessment.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/xxx.jpeg') }}"
                    alt="Aquatic science research"
                >

                <div class="image-number">
                    01
                </div>

            </div>

        </article>



        <!-- 02 -->

        <article class="interest-block reverse">

            <div class="interest-text">

                <div class="interest-number">
                    02
                </div>

                <div class="interest-icon coral">
                    <i class="fa-solid fa-cloud-sun"></i>
                </div>

                <span class="interest-category">
                    CLIMATE & WATER
                </span>

                <h2>
                    Climate & Water Sustainability
                </h2>

                <p>
                    Climate change continues to affect freshwater resources,
                    coastal ecosystems and the livelihoods of millions of
                    people.
                </p>

                <p>
                    WASMAN promotes climate adaptation, watershed management,
                    pollution control, flood resilience, groundwater
                    protection and water conservation.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/climate-water.jpg') }}"
                    alt="Climate and water sustainability"
                >

                <div class="image-number">
                    02
                </div>

            </div>

        </article>



        <!-- 03 -->

        <article class="interest-block">

            <div class="interest-text">

                <div class="interest-number">
                    03
                </div>

                <div class="interest-icon">
                    <i class="fa-solid fa-earth-africa"></i>
                </div>

                <span class="interest-category">
                    BLUE ECONOMY
                </span>

                <h2>
                    Blue Economy & Coastal Development
                </h2>

                <p>
                    WASMAN recognizes the blue economy as a powerful pathway
                    for sustainable development and inclusive economic
                    growth.
                </p>

                <p>
                    Our work supports sustainable fisheries, aquaculture,
                    ecotourism, coastal planning and marine entrepreneurship
                    while promoting responsible use of aquatic resources.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/blue-economy.jpg') }}"
                    alt="Blue economy and coastal development"
                >

                <div class="image-number">
                    03
                </div>

            </div>

        </article>



        <!-- 04 -->

        <article class="interest-block reverse">

            <div class="interest-text">

                <div class="interest-number">
                    04
                </div>

                <div class="interest-icon coral">
                    <i class="fa-solid fa-person-dress"></i>
                </div>

                <span class="interest-category">
                    WOMEN & LEADERSHIP
                </span>

                <h2>
                    Women, Leadership & Innovation
                </h2>

                <p>
                    Empowering women remains at the heart of WASMAN's mission.
                    We create pathways for professional growth, scientific
                    excellence and leadership.
                </p>

                <p>
                    Through mentorship, networking, leadership development,
                    scholarships and collaborative research, WASMAN nurtures
                    the next generation of female scientists and innovators.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/women-leadership.jpg') }}"
                    alt="Women in aquatic science"
                >

                <div class="image-number">
                    04
                </div>

            </div>

        </article>



        <!-- 05 -->

        <article class="interest-block">

            <div class="interest-text">

                <div class="interest-number">
                    05
                </div>

                <div class="interest-icon">
                    <i class="fa-solid fa-people-group"></i>
                </div>

                <span class="interest-category">
                    COMMUNITY & PARTNERSHIPS
                </span>

                <h2>
                    Community Engagement & Partnerships
                </h2>

                <p>
                    Sustainable environmental management can only succeed
                    through meaningful collaboration with communities,
                    institutions and development partners.
                </p>

                <p>
                    WASMAN facilitates public education campaigns,
                    stakeholder dialogues, community outreach and
                    collaborative conservation initiatives.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/community-partnership.jpg') }}"
                    alt="Community engagement"
                >

                <div class="image-number">
                    05
                </div>

            </div>

        </article>

    </section>



    <!-- =====================================================
         THEMATIC AREAS
    ====================================================== -->

    <section class="thematic-section">

        <div class="thematic-title">

            <span class="section-label">
                OUR THEMATIC FOCUS
            </span>

            <h2>
                Key Areas We Continue to Advance
            </h2>

            <p>
                Beyond our core programmes, WASMAN remains committed to
                addressing emerging environmental issues through
                multidisciplinary research, innovation and strategic
                partnerships.
            </p>

        </div>


        <div class="thematic-grid">


            <div class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-fish"></i>
                </div>

                <span>01</span>

                <h3>
                    Sustainable Fisheries
                </h3>

                <p>
                    Supporting responsible fisheries management that
                    balances biodiversity conservation with food security
                    and livelihoods.
                </p>

            </div>



            <div class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-tree"></i>
                </div>

                <span>02</span>

                <h3>
                    Mangrove Restoration
                </h3>

                <p>
                    Promoting restoration and protection of mangrove
                    ecosystems to strengthen biodiversity and coastal
                    resilience.
                </p>

            </div>



            <div class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-droplet"></i>
                </div>

                <span>03</span>

                <h3>
                    Water Quality
                </h3>

                <p>
                    Advancing water quality monitoring, pollution control
                    and sustainable freshwater management.
                </p>

            </div>



            <div class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-fish-fins"></i>
                </div>

                <span>04</span>

                <h3>
                    Marine Biodiversity
                </h3>

                <p>
                    Conserving marine species and habitats through research,
                    monitoring and ecosystem-based management.
                </p>

            </div>



            <div class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-book-open"></i>
                </div>

                <span>05</span>

                <h3>
                    Environmental Education
                </h3>

                <p>
                    Inspiring environmental awareness through education,
                    outreach and public engagement programmes.
                </p>

            </div>



            <div class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-microscope"></i>
                </div>

                <span>06</span>

                <h3>
                    Scientific Innovation
                </h3>

                <p>
                    Encouraging technologies and scientific solutions that
                    support sustainable aquatic resource management.
                </p>

            </div>


        </div>

    </section>



    <!-- =====================================================
         IMPACT
    ====================================================== -->

    <section class="impact-section">

        <div class="impact-header">

            <span class="section-label">
                OUR IMPACT
            </span>

            <h2>
                Creating Meaningful Change Through Collective Action
            </h2>

            <p>
                Every project, partnership and initiative undertaken by
                WASMAN contributes to stronger scientific knowledge,
                healthier aquatic ecosystems and empowered women.
            </p>

        </div>


        <div class="impact-grid">


            <div class="impact-card">

                <div class="impact-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <h2>500+</h2>

                <h3>
                    Women Engaged
                </h3>

                <p>
                    Scientists, students and professionals connected
                    through our network.
                </p>

            </div>



            <div class="impact-card">

                <div class="impact-icon">
                    <i class="fa-solid fa-flask"></i>
                </div>

                <h2>35+</h2>

                <h3>
                    Research Projects
                </h3>

                <p>
                    Collaborative initiatives advancing aquatic science
                    and conservation.
                </p>

            </div>



            <div class="impact-card">

                <div class="impact-icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>

                <h2>20+</h2>

                <h3>
                    Strategic Partners
                </h3>

                <p>
                    Universities, NGOs and institutions supporting
                    our mission.
                </p>

            </div>



            <div class="impact-card">

                <div class="impact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>

                <h2>12+</h2>

                <h3>
                    Communities Reached
                </h3>

                <p>
                    Outreach programmes promoting environmental awareness
                    and resilience.
                </p>

            </div>


        </div>

    </section>



    <!-- =====================================================
         FEATURE BANNER
    ====================================================== -->

    <section class="interest-banner">

        <div class="banner-overlay">

            <div class="banner-text">

                <span class="section-label">
                    OUR VISION
                </span>

                <h2>
                    Healthy Waters.
                    Empowered Women.
                    Sustainable Communities.
                </h2>

                <p>
                    Together we are shaping a future where scientific
                    innovation, environmental stewardship and women's
                    leadership create lasting positive impact for
                    people and nature.
                </p>

            </div>

        </div>

    </section>



    <!-- =====================================================
         CTA
    ====================================================== -->

    <section class="cta-section">

        <span class="section-label">
            GET INVOLVED
        </span>

        <h2>
            Be Part of the Change
        </h2>

        <p>
            Whether you are a researcher, student, policymaker,
            conservation practitioner or development partner, your
            expertise and passion can help build a more sustainable
            future for aquatic ecosystems.
        </p>


        <div class="cta-buttons">

            <a href="#">
                Become a Member
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <a href="#" class="outline-btn">
                Partner With Us
                <i class="fa-solid fa-handshake"></i>
            </a>

        </div>

    </section>


</section>


<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

 
   
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
