<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WASMaN | Publications</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('css/publications.css') }}">
</head>

<body>

@include('components.heading')


<section class="pub-publications-page">

    {{-- HERO --}}
    <section class="pub-publication-hero">

        <div class="pub-publication-hero-overlay">

            <div class="pub-publication-hero-content">

                <span class="pub-hero-eyebrow">
                    <i class="fa-solid fa-book-open"></i>
                    WASMaN KNOWLEDGE CENTRE
                </span>

                <h1>
                    Research, Knowledge &
                    <span>Scientific Impact</span>
                </h1>

                <p>
                    Explore research papers, policy briefs, technical reports,
                    manuals and scientific publications advancing aquatic science,
                    environmental sustainability and women's leadership.
                </p>

                <div class="pub-publication-search">

                    <i class="fa-solid fa-magnifying-glass pub-search-icon"></i>

                    <input
                        type="text"
                        placeholder="Search publications, reports or research..."
                    >

                    <button type="submit">
                        Search
                    </button>

                </div>

            </div>

        </div>

    </section>


    {{-- KNOWLEDGE OVERVIEW --}}
    <section class="pub-knowledge-overview">

        <div class="pub-knowledge-intro">

            <span class="pub-section-label">
                KNOWLEDGE CENTRE
            </span>

            <h2>
                Turning Scientific Knowledge
                Into Sustainable Action
            </h2>

            <p>
                WASMaN promotes evidence-based decision-making by producing,
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


        <div class="pub-knowledge-stat-grid">

            <div class="pub-knowledge-stat">

                <div class="pub-stat-icon">
                    <i class="fa-solid fa-file-lines"></i>
                </div>

                <h3>120+</h3>

                <span>Research Papers</span>

            </div>


            <div class="pub-knowledge-stat">

                <div class="pub-stat-icon">
                    <i class="fa-solid fa-book-open"></i>
                </div>

                <h3>45</h3>

                <span>Technical Reports</span>

            </div>


            <div class="pub-knowledge-stat">

                <div class="pub-stat-icon">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>

                <h3>18</h3>

                <span>Policy Briefs</span>

            </div>


            <div class="pub-knowledge-stat">

                <div class="pub-stat-icon">
                    <i class="fa-solid fa-download"></i>
                </div>

                <h3>5,000+</h3>

                <span>Downloads</span>

            </div>

        </div>

    </section>


    {{-- FEATURED PUBLICATION --}}
    <section class="pub-featured-publication">

        <div class="pub-featured-publication-image">

            <img
                src="{{ asset('pics_vids/wol.png') }}"
                alt="Featured WASMaN Publication"
            >

            <div class="pub-publication-label">
                <i class="fa-solid fa-star"></i>
                FEATURED PUBLICATION
            </div>

            <div class="pub-featured-image-caption">
                <i class="fa-solid fa-users"></i>
                Women • Science • Leadership
            </div>

        </div>


        <div class="pub-featured-publication-content">

            <span class="pub-section-label">
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

            <div class="pub-publication-details">

                <div>
                    <i class="fa-solid fa-user"></i>

                    <span>
                        <strong>Author</strong>
                        WASMaN Research Team
                    </span>
                </div>

                <div>
                    <i class="fa-regular fa-calendar"></i>

                    <span>
                        <strong>Published</strong>
                        2026
                    </span>
                </div>

                <div>
                    <i class="fa-solid fa-layer-group"></i>

                    <span>
                        <strong>Category</strong>
                        Research Report
                    </span>
                </div>

            </div>

            <div class="pub-publication-buttons">

                <a href="#" class="pub-primary-btn">
                    <i class="fa-solid fa-book-open-reader"></i>
                    Read Online
                </a>

                <a href="#" class="pub-secondary-btn">
                    <i class="fa-solid fa-download"></i>
                    Download PDF
                </a>

            </div>

        </div>

    </section>


    {{-- PUBLICATION LIBRARY --}}
    <section class="pub-publication-library">

        <div class="pub-library-header">

            <div>

                <span class="pub-section-label">
                    RESEARCH LIBRARY
                </span>

                <h2>
                    Explore Our Latest Publications
                </h2>

            </div>

            <a href="#" class="pub-library-link">
                View All Publications
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <div class="pub-publication-grid">

            <article class="pub-publication-card">

                <div class="pub-publication-card-image">

                    <img
                        src="{{ asset('pics_vids/cr.png') }}"
                        alt="Coastal Ecosystem Restoration"
                    >

                    <span class="pub-publication-category">
                        Marine Science
                    </span>

                </div>

                <div class="pub-publication-card-body">

                    <div class="pub-publication-date">
                        <i class="fa-regular fa-calendar"></i>
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
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </article>


            <article class="pub-publication-card">

                <div class="pub-publication-card-image">

                    <img
                        src="{{ asset('pics_vids/ae.png') }}"
                        alt="Aquatic Research"
                    >

                    <span class="pub-publication-category">
                        Aquatic Science
                    </span>

                </div>

                <div class="pub-publication-card-body">

                    <div class="pub-publication-date">
                        <i class="fa-regular fa-calendar"></i>
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
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </article>


            <article class="pub-publication-card">

                <div class="pub-publication-card-image">

                    <img
                        src="{{ asset('pics_vids/ws.png') }}"
                        alt="Women in Aquatic Science"
                    >

                    <span class="pub-publication-category">
                        Gender & Leadership
                    </span>

                </div>

                <div class="pub-publication-card-body">

                    <div class="pub-publication-date">
                        <i class="fa-regular fa-calendar"></i>
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
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </article>


            <article class="pub-publication-card">

                <div class="pub-publication-card-image">

                    <img
                        src="{{ asset('pics_vids/cr.png') }}"
                        alt="Climate Resilience"
                    >

                    <span class="pub-publication-category">
                        Climate Change
                    </span>

                </div>

                <div class="pub-publication-card-body">

                    <div class="pub-publication-date">
                        <i class="fa-regular fa-calendar"></i>
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
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </article>

        </div>

    </section>


    {{-- CATEGORIES --}}
    <section class="pub-publication-categories">

        <div class="pub-categories-header">

            <span class="pub-section-label">
                BROWSE OUR KNOWLEDGE
            </span>

            <h2>
                Explore Publications by Category
            </h2>

            <p>
                Discover research and resources across the major areas
                of WASMaN's work.
            </p>

        </div>


        <div class="pub-category-grid">

            <a href="#" class="pub-category-card">

                <div class="pub-category-icon">
                    <i class="fa-solid fa-water"></i>
                </div>

                <div>
                    <h3>Marine Science</h3>
                    <p>Research on oceans and marine ecosystems.</p>
                </div>

                <i class="fa-solid fa-arrow-right pub-category-arrow"></i>

            </a>


            <a href="#" class="pub-category-card">

                <div class="pub-category-icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <div>
                    <h3>Blue Economy</h3>
                    <p>Sustainable aquatic economic development.</p>
                </div>

                <i class="fa-solid fa-arrow-right pub-category-arrow"></i>

            </a>


            <a href="#" class="pub-category-card">

                <div class="pub-category-icon">
                    <i class="fa-solid fa-cloud-sun"></i>
                </div>

                <div>
                    <h3>Climate Change</h3>
                    <p>Climate adaptation and resilience research.</p>
                </div>

                <i class="fa-solid fa-arrow-right pub-category-arrow"></i>

            </a>


            <a href="#" class="pub-category-card">

                <div class="pub-category-icon">
                    <i class="fa-solid fa-droplet"></i>
                </div>

                <div>
                    <h3>Water Conservation</h3>
                    <p>Research supporting sustainable water resources.</p>
                </div>

                <i class="fa-solid fa-arrow-right pub-category-arrow"></i>

            </a>


            <a href="#" class="pub-category-card">

                <div class="pub-category-icon">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>

                <div>
                    <h3>Policy Briefs</h3>
                    <p>Evidence supporting environmental policy.</p>
                </div>

                <i class="fa-solid fa-arrow-right pub-category-arrow"></i>

            </a>


            <a href="#" class="pub-category-card">

                <div class="pub-category-icon">
                    <i class="fa-solid fa-flask-vial"></i>
                </div>

                <div>
                    <h3>Technical Reports</h3>
                    <p>Detailed technical and scientific findings.</p>
                </div>

                <i class="fa-solid fa-arrow-right pub-category-arrow"></i>

            </a>

        </div>

    </section>


    {{-- RESEARCH IMPACT --}}
    <section class="pub-research-impact">

        <div class="pub-impact-heading">

            <span class="pub-section-label pub-dark-label">
                RESEARCH IMPACT
            </span>

            <h2>
                Knowledge That Reaches Beyond
                the Research Community
            </h2>

            <p>
                WASMaN research supports policy dialogue, scientific exchange,
                institutional collaboration and practical environmental action.
            </p>

        </div>


        <div class="pub-impact-grid">

            <div class="pub-impact-item">

                <div class="pub-impact-icon">
                    <i class="fa-solid fa-quote-right"></i>
                </div>

                <h2>250+</h2>

                <span>Citations</span>

            </div>


            <div class="pub-impact-item">

                <div class="pub-impact-icon">
                    <i class="fa-solid fa-building-columns"></i>
                </div>

                <h2>60+</h2>

                <span>Partner Institutions</span>

            </div>


            <div class="pub-impact-item">

                <div class="pub-impact-icon">
                    <i class="fa-solid fa-earth-africa"></i>
                </div>

                <h2>30</h2>

                <span>Countries Reached</span>

            </div>


            <div class="pub-impact-item">

                <div class="pub-impact-icon">
                    <i class="fa-solid fa-download"></i>
                </div>

                <h2>15K+</h2>

                <span>Downloads</span>

            </div>

        </div>

    </section>


    {{-- NEWSLETTER --}}
    <section class="pub-publication-newsletter">

        <div class="pub-newsletter-content">

            <div class="pub-newsletter-icon">
                <i class="fa-solid fa-envelope-open-text"></i>
            </div>

            <span class="pub-section-label">
                STAY INFORMED
            </span>

            <h2>
                Never Miss New Research
            </h2>

            <p>
                Subscribe to receive newly released research papers,
                technical reports, policy briefs and other WASMaN
                knowledge resources.
            </p>

            <form class="pub-newsletter-form">

                <i class="fa-regular fa-envelope pub-input-icon"></i>

                <input
                    type="email"
                    placeholder="Enter your email address"
                    required
                >

                <button type="submit">
                    Subscribe
                    <i class="fa-solid fa-paper-plane"></i>
                </button>

            </form>

        </div>

    </section>

</section>



<footer class="pub-new-footer">

    <div class="pub-footer-top">

        <div class="pub-footer-brand-area">

            <div class="pub-footer-logo-mark">
                <i class="fa-solid fa-water"></i>
            </div>

            <div>
                <h2>WASMaN</h2>
                <span>Women in Aquatic Science and Management Network</span>
            </div>

        </div>

        <div class="pub-footer-newsline">
            <span>Science</span>
            <span>Leadership</span>
            <span>Conservation</span>
            <span>Collaboration</span>
        </div>

    </div>

    <div class="pub-footer-main">

        <div class="pub-footer-about">

            <p>
                WASMaN connects women scientists, researchers, professionals
                and institutions working to advance aquatic science,
                environmental sustainability and inclusive leadership.
            </p>

            <div class="pub-footer-socials">

                <a href="#" aria-label="Website">
                    <i class="fa-solid fa-globe"></i>
                </a>

                <a href="#" aria-label="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="#" aria-label="YouTube">
                    <i class="fa-brands fa-youtube"></i>
                </a>

                <a href="#" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

            </div>

        </div>

        <div class="pub-footer-group">

            <h3>Explore</h3>

            <a href="/">Home</a>
            <a href="/history">About WASMaN</a>
            <a href="/areas_of_interests">Areas of Interest</a>
            <a href="/ongoing">Ongoing Projects</a>
            <a href="/completed">Completed Projects</a>

        </div>

        <div class="pub-footer-group">

            <h3>Knowledge</h3>

            <a href="/publications">Publications</a>
            <a href="/knowledge_bite">Knowledge Bites</a>
            <a href="#">Research Reports</a>
            <a href="#">Policy Briefs</a>
            <a href="#">Technical Resources</a>

        </div>

        <div class="pub-footer-group">

            <h3>Get Involved</h3>

            <a href="/become_member">Become a Member</a>
            <a href="/partner_with_us">Partner With Us</a>
            <a href="/intern">Internships</a>
            <a href="/volunteer">Volunteer</a>
            <a href="/research_assistant">Research Assistance</a>

        </div>

        <div class="pub-footer-contact">

            <h3>Contact</h3>

            <div>
                <i class="fa-solid fa-envelope"></i>
                <span>info@wasman.org</span>
            </div>

            <div>
                <i class="fa-solid fa-location-dot"></i>
                <span>Cape Coast, Ghana</span>
            </div>

            <a href="/general_enquiries" class="pub-footer-contact-btn">
                General Enquiries
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

    <div class="pub-footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network (WASMaN).
            All Rights Reserved.
        </p>

        <div>
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
        </div>

    </div>

</footer>



<script src="{{ asset('created_js/list_hover_background.js') }}"></script>
<script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('created_js/carousel.js') }}"></script>

</body>
</html>
