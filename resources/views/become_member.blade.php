<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/become_member.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')

 {{-- =========================================================
     WASMaN MEMBERSHIP PAGE
========================================================= --}}

{{-- =========================
     HERO SECTION
========================= --}}
<section class="membership-hero">

    <div class="membership-hero-overlay"></div>

    <div class="membership-hero-content">

        <span class="membership-eyebrow">
            JOIN THE WASMaN NETWORK
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
                WHY WASMaN?
            </span>

            <h2>
                A Network Built Around
                <span>People, Science & Impact</span>
            </h2>

            <p>
                WASMaN brings together women and allies working across aquatic
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
            Find Your Place Within WASMaN
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
                with WASMaN.
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
            src="{{ asset('pics_vids/bf.png') }}"
            alt="WASMaN community engagement"
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
            WASMaN membership connects you to opportunities that can
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
            Becoming part of WASMaN is simple. Follow these four steps
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
                Your application is reviewed by the WASMaN team.
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
                Participate in WASMaN activities and opportunities.
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
                WASMaN welcomes individuals and institutions committed
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
                    Is WASMaN membership open internationally?
                </h3>

                <i class="fas fa-plus"></i>

            </div>

            <p>
                Yes. WASMaN welcomes members from different countries
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
                other WASMaN initiatives.
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
