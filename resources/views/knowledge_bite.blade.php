<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
       
        <link rel="stylesheet" href="{{ asset('css/knowledge_bite.css') }}"> 
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
     KNOWLEDGE BITE PAGE
========================================================= --}}

{{-- HERO SECTION --}}
<section class="knowledge-hero">

    <div class="knowledge-overlay">

        <div class="knowledge-content">

            <span>KNOWLEDGE BITES</span>

            <h1>
                Discover What Is Shaping
                Our Aquatic Future
            </h1>

            <p>
                Explore emerging trends, new discoveries,
                research insights and current developments
                shaping aquatic science, marine conservation,
                climate resilience and the blue economy.
            </p>

            <div class="knowledge-buttons">

                <a href="#latest-bites">
                    Explore Knowledge Bites
                </a>

                <a href="#resources">
                    Download Resources
                </a>

            </div>

        </div>

    </div>

</section>


{{-- INTRODUCTION --}}
<section class="knowledge-intro">

    <div class="knowledge-intro-text">

        <span>STAY INFORMED</span>

        <h2>
            Knowledge That Keeps
            You Ahead of the Conversation
        </h2>

        <p>
            The aquatic environment is constantly changing.
            New research, technologies, policies, discoveries
            and environmental challenges continue to reshape
            the way we understand and manage our oceans,
            rivers, lakes and coastal ecosystems.
        </p>

        <p>
            WASMAN's Knowledge Bites bring these developments
            closer to you through concise, accessible and
            practical knowledge resources.
        </p>

    </div>


    <div class="knowledge-highlights">

        <div>
            <strong>120+</strong>
            <span>Knowledge Bites</span>
        </div>

        <div>
            <strong>50+</strong>
            <span>Research Resources</span>
        </div>

        <div>
            <strong>20+</strong>
            <span>Emerging Topics</span>
        </div>

        <div>
            <strong>15</strong>
            <span>Countries Covered</span>
        </div>

    </div>

</section>


{{-- FEATURED KNOWLEDGE BITE --}}
<section class="featured-knowledge">

    <div class="featured-knowledge-image">

        <img
            src="images/knowledge-featured.jpg"
            alt="Featured Knowledge Bite">

        <span class="featured-label">
            FEATURED
        </span>

    </div>


    <div class="featured-knowledge-content">

        <span>KNOWLEDGE SPOTLIGHT</span>

        <h2>
            The Future of Blue Carbon:
            Why Coastal Ecosystems Matter
        </h2>

        <p>
            Discover how mangroves, seagrass meadows and
            salt marshes contribute to climate mitigation,
            coastal protection and ecosystem resilience.
        </p>

        <div class="knowledge-meta">

            <span>
                📅 August 2026
            </span>

            <span>
                🌊 Climate & Oceans
            </span>

            <span>
                ⏱ 5 min read
            </span>

        </div>

        <div class="featured-actions">

            <a href="#">
                Read Knowledge Bite →
            </a>

            <a href="resources/blue-carbon.pdf" download>
                Download Brief
            </a>

        </div>

    </div>

</section>


{{-- LATEST KNOWLEDGE BITES --}}
<section class="latest-knowledge" id="latest-bites">

    <div class="section-title">

        <span>LATEST INSIGHTS</span>

        <h2>
            Explore Knowledge Bites
        </h2>

        <p>
            Short and accessible insights covering
            important developments in aquatic science
            and environmental management.
        </p>

    </div>


    <div class="knowledge-grid">


        {{-- CARD 1 --}}
        <article class="knowledge-card">

            <div class="knowledge-card-image">

                <img
                    src="images/knowledge1.jpg"
                    alt="Marine Heatwaves">

                <span>
                    CLIMATE
                </span>

            </div>

            <div class="knowledge-card-body">

                <small>
                    AUGUST 2026
                </small>

                <h3>
                    Understanding Marine Heatwaves
                </h3>

                <p>
                    Learn how rising ocean temperatures
                    affect marine ecosystems, fisheries
                    and coastal communities.
                </p>

                <div class="knowledge-card-footer">

                    <a href="#">
                        Read More →
                    </a>

                    <a
                        href="resources/marine-heatwaves.pdf"
                        download
                        class="download-link"
                    >
                        ↓ PDF
                    </a>

                </div>

            </div>

        </article>


        {{-- CARD 2 --}}
        <article class="knowledge-card">

            <div class="knowledge-card-image">

                <img
                    src="images/knowledge2.jpg"
                    alt="Ocean Plastic">

                <span>
                    POLLUTION
                </span>

            </div>

            <div class="knowledge-card-body">

                <small>
                    JULY 2026
                </small>

                <h3>
                    The Growing Challenge of Marine Plastics
                </h3>

                <p>
                    Exploring new research and emerging
                    approaches to reducing plastic pollution
                    in aquatic ecosystems.
                </p>

                <div class="knowledge-card-footer">

                    <a href="#">
                        Read More →
                    </a>

                    <a
                        href="resources/marine-plastics.pdf"
                        download
                        class="download-link"
                    >
                        ↓ PDF
                    </a>

                </div>

            </div>

        </article>


        {{-- CARD 3 --}}
        <article class="knowledge-card">

            <div class="knowledge-card-image">

                <img
                    src="images/knowledge3.jpg"
                    alt="Mangrove Restoration">

                <span>
                    CONSERVATION
                </span>

            </div>

            <div class="knowledge-card-body">

                <small>
                    JULY 2026
                </small>

                <h3>
                    New Approaches to Mangrove Restoration
                </h3>

                <p>
                    Discover innovative approaches being
                    used to restore mangrove ecosystems
                    and strengthen coastal resilience.
                </p>

                <div class="knowledge-card-footer">

                    <a href="#">
                        Read More →
                    </a>

                    <a
                        href="resources/mangrove-restoration.pdf"
                        download
                        class="download-link"
                    >
                        ↓ PDF
                    </a>

                </div>

            </div>

        </article>


        {{-- CARD 4 --}}
        <article class="knowledge-card">

            <div class="knowledge-card-image">

                <img
                    src="images/knowledge4.jpg"
                    alt="Blue Economy">

                <span>
                    BLUE ECONOMY
                </span>

            </div>

            <div class="knowledge-card-body">

                <small>
                    JUNE 2026
                </small>

                <h3>
                    Emerging Opportunities in the Blue Economy
                </h3>

                <p>
                    Explore how innovation and sustainable
                    ocean-based industries are creating new
                    opportunities for coastal communities.
                </p>

                <div class="knowledge-card-footer">

                    <a href="#">
                        Read More →
                    </a>

                    <a
                        href="resources/blue-economy.pdf"
                        download
                        class="download-link"
                    >
                        ↓ PDF
                    </a>

                </div>

            </div>

        </article>


        {{-- CARD 5 --}}
        <article class="knowledge-card">

            <div class="knowledge-card-image">

                <img
                    src="images/knowledge5.jpg"
                    alt="Sustainable Fisheries">

                <span>
                    FISHERIES
                </span>

            </div>

            <div class="knowledge-card-body">

                <small>
                    JUNE 2026
                </small>

                <h3>
                    Building More Sustainable Fisheries
                </h3>

                <p>
                    New approaches to fisheries management
                    are creating opportunities for healthier
                    ecosystems and stronger livelihoods.
                </p>

                <div class="knowledge-card-footer">

                    <a href="#">
                        Read More →
                    </a>

                    <a
                        href="resources/sustainable-fisheries.pdf"
                        download
                        class="download-link"
                    >
                        ↓ PDF
                    </a>

                </div>

            </div>

        </article>


        {{-- CARD 6 --}}
        <article class="knowledge-card">

            <div class="knowledge-card-image">

                <img
                    src="images/knowledge6.jpg"
                    alt="Ocean Technology">

                <span>
                    TECHNOLOGY
                </span>

            </div>

            <div class="knowledge-card-body">

                <small>
                    MAY 2026
                </small>

                <h3>
                    Technology Transforming Ocean Research
                </h3>

                <p>
                    From satellite monitoring to underwater
                    sensors, technology is changing how
                    aquatic ecosystems are studied.
                </p>

                <div class="knowledge-card-footer">

                    <a href="#">
                        Read More →
                    </a>

                    <a
                        href="resources/ocean-technology.pdf"
                        download
                        class="download-link"
                    >
                        ↓ PDF
                    </a>

                </div>

            </div>

        </article>

    </div>

</section>


{{-- KNOWLEDGE CATEGORIES --}}
<section class="knowledge-categories">

    <div class="section-title">

        <span>EXPLORE TOPICS</span>

        <h2>
            Browse Knowledge Areas
        </h2>

    </div>


    <div class="knowledge-category-grid">

        <a href="#">
            <span>🌊</span>
            <strong>Marine Science</strong>
            <small>Research & discoveries</small>
        </a>

        <a href="#">
            <span>🐟</span>
            <strong>Fisheries</strong>
            <small>Trends & management</small>
        </a>

        <a href="#">
            <span>🌱</span>
            <strong>Conservation</strong>
            <small>Ecosystems & restoration</small>
        </a>

        <a href="#">
            <span>🌍</span>
            <strong>Climate Change</strong>
            <small>Climate & resilience</small>
        </a>

        <a href="#">
            <span>⚓</span>
            <strong>Blue Economy</strong>
            <small>Ocean-based development</small>
        </a>

        <a href="#">
            <span>💧</span>
            <strong>Water Resources</strong>
            <small>Freshwater & coastal systems</small>
        </a>

        <a href="#">
            <span>🔬</span>
            <strong>Research & Innovation</strong>
            <small>Emerging technologies</small>
        </a>

        <a href="#">
            <span>📢</span>
            <strong>Policy & Governance</strong>
            <small>Policies & regulations</small>
        </a>

    </div>

</section>


{{-- DOWNLOADABLE RESOURCE HUB --}}
<section class="resource-hub" id="resources">

    <div class="section-title">

        <span>RESOURCE HUB</span>

        <h2>
            Knowledge You Can Download
        </h2>

        <p>
            Access downloadable briefs, fact sheets,
            reports and other resources for further
            reading, research and learning.
        </p>

    </div>


    <div class="resource-grid">


        {{-- RESOURCE 1 --}}
        <div class="resource-card">

            <div class="resource-icon">
                📄
            </div>

            <div class="resource-info">

                <span>
                    RESEARCH BRIEF
                </span>

                <h3>
                    Understanding Marine Heatwaves
                </h3>

                <p>
                    A concise overview of marine heatwaves,
                    their impacts and emerging responses.
                </p>

                <small>
                    PDF • 2.4 MB
                </small>

            </div>

            <a
                href="resources/marine-heatwaves.pdf"
                download
                class="resource-download"
            >
                Download
            </a>

        </div>


        {{-- RESOURCE 2 --}}
        <div class="resource-card">

            <div class="resource-icon">
                📘
            </div>

            <div class="resource-info">

                <span>
                    FACT SHEET
                </span>

                <h3>
                    Blue Carbon Ecosystems
                </h3>

                <p>
                    Key facts about mangroves, seagrasses
                    and coastal carbon storage.
                </p>

                <small>
                    PDF • 1.8 MB
                </small>

            </div>

            <a
                href="resources/blue-carbon.pdf"
                download
                class="resource-download"
            >
                Download
            </a>

        </div>


        {{-- RESOURCE 3 --}}
        <div class="resource-card">

            <div class="resource-icon">
                📑
            </div>

            <div class="resource-info">

                <span>
                    REPORT
                </span>

                <h3>
                    Coastal Ecosystem Outlook
                </h3>

                <p>
                    A resource exploring emerging trends
                    affecting coastal ecosystems.
                </p>

                <small>
                    PDF • 4.2 MB
                </small>

            </div>

            <a
                href="resources/coastal-outlook.pdf"
                download
                class="resource-download"
            >
                Download
            </a>

        </div>


        {{-- RESOURCE 4 --}}
        <div class="resource-card">

            <div class="resource-icon">
                📚
            </div>

            <div class="resource-info">

                <span>
                    GUIDE
                </span>

                <h3>
                    Introduction to Sustainable Fisheries
                </h3>

                <p>
                    A practical resource for understanding
                    sustainable fisheries management.
                </p>

                <small>
                    PDF • 3.1 MB
                </small>

            </div>

            <a
                href="resources/sustainable-fisheries-guide.pdf"
                download
                class="resource-download"
            >
                Download
            </a>

        </div>

    </div>

</section>


{{-- TRENDING NOW --}}
<section class="trending-knowledge">

    <div class="trending-content">

        <span>WHAT'S TRENDING?</span>

        <h2>
            Emerging Issues We Are Watching
        </h2>

        <p>
            Aquatic science is evolving rapidly. These are
            some of the emerging areas currently receiving
            attention from researchers, policymakers and
            conservation practitioners.
        </p>

    </div>


    <div class="trend-list">

        <div>
            <span>01</span>
            <h3>Ocean Climate Resilience</h3>
        </div>

        <div>
            <span>02</span>
            <h3>Blue Carbon Financing</h3>
        </div>

        <div>
            <span>03</span>
            <h3>Plastic Pollution Solutions</h3>
        </div>

        <div>
            <span>04</span>
            <h3>Digital Ocean Monitoring</h3>
        </div>

        <div>
            <span>05</span>
            <h3>Nature-Based Coastal Protection</h3>
        </div>

    </div>

</section>


{{-- DOWNLOAD CTA --}}
<section class="knowledge-cta">

    <span>
        KEEP LEARNING
    </span>

    <h2>
        Stay Curious. Stay Informed.
    </h2>

    <p>
        Explore new ideas, emerging research and practical
        resources that can help you understand and contribute
        to a more sustainable aquatic future.
    </p>

    <a href="#resources">
        Explore Resource Hub
    </a>

</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
     <script src="{{ asset('created_js/animation.js') }}"></script>
   

</html>
