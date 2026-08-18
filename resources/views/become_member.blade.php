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
        <link rel="stylesheet" href="{{ asset('css/become_member.css') }}"> 
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

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
 {{-- =========================================================
     WASMAN MEMBERSHIP PAGE
========================================================= --}}

{{-- =========================
     HERO SECTION
========================= --}}
<section class="membership-hero">

    <div class="membership-hero-overlay"></div>

    <div class="membership-hero-content">

        <span class="membership-eyebrow">
            JOIN THE WASMAN NETWORK
        </span>

        <h1>
            Connect. Learn. Lead.
            <strong>Shape the Future of Aquatic Science.</strong>
        </h1>

        <p>
            Become part of a growing community of researchers, students,
            professionals, policymakers and environmental leaders working
            together to build healthier aquatic ecosystems and resilient
            communities.
        </p>

        <div class="membership-hero-actions">

            <a href="#membership-categories" class="membership-primary-btn">
                Become a Member
                <i class="fas fa-arrow-right"></i>
            </a>

            <a href="#membership-benefits" class="membership-secondary-btn">
                Discover the Benefits
            </a>

        </div>

        <div class="membership-hero-note">
            <i class="fas fa-users"></i>
            <span>Join a growing network advancing aquatic science</span>
        </div>

    </div>

</section>


{{-- =========================
     INTRODUCTION + STATS
========================= --}}
<section class="membership-introduction">

    <div class="membership-intro-container">

        <div class="membership-intro-content">

            <span class="section-label">
                WHY WASMAN?
            </span>

            <h2>
                A Network Built Around
                <span>People, Science & Impact</span>
            </h2>

            <p>
                WASMAN brings together women and allies working across aquatic
                science, marine conservation, environmental management,
                climate resilience and the blue economy.
            </p>

            <p>
                Membership gives you access to a platform where knowledge,
                experience and ideas can be exchanged while creating
                opportunities for collaboration, professional growth and
                leadership.
            </p>

            <a href="#membership-benefits" class="text-link">
                Explore membership benefits
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="membership-stat-panel">

            <div class="membership-stat">

                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>

                <strong>600+</strong>
                <span>Members</span>

            </div>

            <div class="membership-stat">

                <div class="stat-icon">
                    <i class="fas fa-building"></i>
                </div>

                <strong>25+</strong>
                <span>Partner Institutions</span>

            </div>

            <div class="membership-stat">

                <div class="stat-icon">
                    <i class="fas fa-globe-africa"></i>
                </div>

                <strong>18</strong>
                <span>Countries</span>

            </div>

            <div class="membership-stat">

                <div class="stat-icon">
                    <i class="fas fa-handshake"></i>
                </div>

                <strong>120+</strong>
                <span>Mentorship Matches</span>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     MEMBERSHIP CATEGORIES
========================= --}}
<section class="membership-categories" id="membership-categories">

    <div class="membership-section-heading">

        <span>MEMBERSHIP OPTIONS</span>

        <h2>
            Find Your Place Within WASMAN
        </h2>

        <p>
            Whether you are beginning your academic journey, building your
            professional career or leading environmental initiatives,
            there is a place for you within the network.
        </p>

    </div>


    <div class="membership-category-grid">


        {{-- STUDENT --}}
        <article class="membership-card">

            <div class="membership-card-number">
                01
            </div>

            <div class="membership-card-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>

            <h3>
                Student / Intern
            </h3>

            <p>
                For undergraduate and postgraduate students pursuing studies
                related to aquatic science, marine conservation,
                environmental management or related disciplines.
            </p>

            <a href="#">
                Explore Membership
                <i class="fas fa-arrow-right"></i>
            </a>

        </article>


        {{-- PROFESSIONAL --}}
        <article class="membership-card membership-card-featured">

            <div class="membership-popular">
                POPULAR
            </div>

            <div class="membership-card-number">
                02
            </div>

            <div class="membership-card-icon">
                <i class="fas fa-flask"></i>
            </div>

            <h3>
                Researcher / Professional
            </h3>

            <p>
                Designed for researchers, lecturers, consultants, government
                officers, conservation practitioners and industry professionals.
            </p>

            <a href="#">
                Explore Membership
                <i class="fas fa-arrow-right"></i>
            </a>

        </article>


        {{-- INSTITUTION --}}
        <article class="membership-card">

            <div class="membership-card-number">
                03
            </div>

            <div class="membership-card-icon">
                <i class="fas fa-university"></i>
            </div>

            <h3>
                Institutional Partner
            </h3>

            <p>
                For universities, NGOs, research institutes, government
                agencies and organizations interested in collaborating
                with WASMAN.
            </p>

            <a href="#">
                Explore Partnership
                <i class="fas fa-arrow-right"></i>
            </a>

        </article>

    </div>

</section>


{{-- =========================
     BENEFITS SECTION
========================= --}}
<section class="membership-benefits" id="membership-benefits">

    <div class="benefits-image">

        <img
            src="{{ asset('pics_vids/outreach.jpeg') }}"
            alt="WASMAN community engagement"
        >

        <div class="benefits-image-card">

            <i class="fas fa-water"></i>

            <span>
                Science
            </span>

            <strong>
                Meets Impact
            </strong>

        </div>

    </div>


    <div class="benefits-content">

        <span class="section-label">
            MEMBERSHIP BENEFITS
        </span>

        <h2>
            More Than Membership.
            <span>A Platform for Growth.</span>
        </h2>

        <p>
            WASMAN membership connects you to opportunities that can
            strengthen your knowledge, professional network and ability
            to contribute to sustainable aquatic resource management.
        </p>


        <div class="benefit-list">


            <div class="benefit-item">

                <div class="benefit-icon">
                    <i class="fas fa-network-wired"></i>
                </div>

                <div>
                    <h3>Professional Networking</h3>

                    <p>
                        Connect with researchers, professionals,
                        institutions and environmental leaders.
                    </p>
                </div>

            </div>


            <div class="benefit-item">

                <div class="benefit-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>

                <div>
                    <h3>Mentorship & Capacity Building</h3>

                    <p>
                        Access mentorship, workshops, training and
                        opportunities for professional development.
                    </p>
                </div>

            </div>


            <div class="benefit-item">

                <div class="benefit-icon">
                    <i class="fas fa-microscope"></i>
                </div>

                <div>
                    <h3>Research Collaboration</h3>

                    <p>
                        Participate in collaborative research,
                        field activities and scientific publications.
                    </p>

                </div>

            </div>


            <div class="benefit-item">

                <div class="benefit-icon">
                    <i class="fas fa-chart-line"></i>
                </div>

                <div>
                    <h3>Leadership Opportunities</h3>

                    <p>
                        Take part in initiatives that influence
                        aquatic science and environmental management.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     MEMBERSHIP JOURNEY
========================= --}}
<section class="membership-journey">

    <div class="membership-section-heading">

        <span>HOW IT WORKS</span>

        <h2>
            Your Journey Starts Here
        </h2>

        <p>
            Becoming part of WASMAN is simple. Follow these four steps
            and begin your journey with the network.
        </p>

    </div>


    <div class="journey-wrapper">


        <div class="journey-line"></div>


        <div class="journey-step">

            <div class="journey-number">
                01
            </div>

            <h3>
                Apply
            </h3>

            <p>
                Complete the online membership application.
            </p>

        </div>


        <div class="journey-step">

            <div class="journey-number">
                02
            </div>

            <h3>
                Review
            </h3>

            <p>
                Your application is reviewed by the WASMAN team.
            </p>

        </div>


        <div class="journey-step">

            <div class="journey-number">
                03
            </div>

            <h3>
                Welcome
            </h3>

            <p>
                Receive confirmation and your membership details.
            </p>

        </div>


        <div class="journey-step">

            <div class="journey-number">
                04
            </div>

            <h3>
                Engage
            </h3>

            <p>
                Participate in WASMAN activities and opportunities.
            </p>

        </div>

    </div>

</section>


{{-- =========================
     WHO CAN JOIN
========================= --}}
<section class="membership-eligibility">

    <div class="eligibility-container">

        <div class="eligibility-content">

            <span class="section-label">
                WHO CAN JOIN?
            </span>

            <h2>
                A Community Open to
                <span>People Who Care</span>
            </h2>

            <p>
                WASMAN welcomes individuals and institutions committed
                to advancing aquatic science, environmental sustainability
                and inclusive leadership.
            </p>

        </div>


        <div class="eligibility-list">

            <div>
                <i class="fas fa-check"></i>
                Students
            </div>

            <div>
                <i class="fas fa-check"></i>
                Researchers
            </div>

            <div>
                <i class="fas fa-check"></i>
                Academics
            </div>

            <div>
                <i class="fas fa-check"></i>
                NGOs & Civil Society
            </div>

            <div>
                <i class="fas fa-check"></i>
                Government Agencies
            </div>

            <div>
                <i class="fas fa-check"></i>
                Private Sector Professionals
            </div>

        </div>

    </div>

</section>


{{-- =========================
     FAQ
========================= --}}
<section class="membership-faq">

    <div class="membership-section-heading">

        <span>QUESTIONS?</span>

        <h2>
            Frequently Asked Questions
        </h2>

    </div>


    <div class="faq-grid">


        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    Is WASMAN membership open internationally?
                </h3>

                <i class="fas fa-plus"></i>

            </div>

            <p>
                Yes. WASMAN welcomes members from different countries
                who share an interest in aquatic science, conservation
                and sustainable development.
            </p>

        </div>


        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    Can students become members?
                </h3>

                <i class="fas fa-plus"></i>

            </div>

            <p>
                Absolutely. Students are encouraged to join the network
                and participate in learning, mentorship and networking
                opportunities.
            </p>

        </div>


        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    Is there a membership fee?
                </h3>

                <i class="fas fa-plus"></i>

            </div>

            <p>
                Membership fees, where applicable, will be communicated
                during the registration process.
            </p>

        </div>


        <div class="faq-item">

            <div class="faq-question">

                <h3>
                    What can members participate in?
                </h3>

                <i class="fas fa-plus"></i>

            </div>

            <p>
                Members can participate in research, workshops,
                conferences, mentorship, networking, outreach and
                other WASMAN initiatives.
            </p>

        </div>

    </div>

</section>


{{-- =========================
     FINAL CTA
========================= --}}
<section class="membership-final-cta">

    <div class="cta-overlay"></div>

    <div class="membership-cta-content">

        <span>
            YOUR NEXT CHAPTER STARTS HERE
        </span>

        <h2>
            Become Part of Something
            <strong>Meaningful.</strong>
        </h2>

        <p>
            Join a network of people working together to advance
            aquatic science, empower women and create sustainable
            solutions for our oceans, rivers, lakes and communities.
        </p>

        <a href="#" class="cta-button">
            Start Your Membership Application
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>

</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
