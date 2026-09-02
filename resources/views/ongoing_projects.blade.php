<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WASMaN | Ongoing Projects</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/ongoing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

@include('components.heading')


<section class="projects-page">

    {{-- HERO --}}
    <section class="projects-hero">

        <div class="projects-hero-overlay">

            <div class="projects-hero-content">

                <span class="hero-eyebrow">
                    <i class="fa-solid fa-diagram-project"></i>
                    OUR ONGOING PROJECTS
                </span>

                <h1>
                    Transforming Research Into
                    <span>Sustainable Aquatic Solutions</span>
                </h1>

                <p>
                    WASMaN brings together science, innovation, women’s
                    leadership and community action to address emerging
                    challenges affecting aquatic ecosystems and coastal
                    communities.
                </p>

                <div class="projects-hero-buttons">

                    <a href="#featured-project">
                        Explore Projects
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a href="/partner_with_us" class="projects-outline-btn">
                        Become a Partner
                        <i class="fa-solid fa-handshake"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- OVERVIEW --}}
    <section class="projects-overview">

        <div class="projects-overview-text">

            <span class="section-label">
                WHAT WE ARE DOING
            </span>

            <h2>
                Turning Scientific Knowledge Into
                Meaningful Environmental Action
            </h2>

            <p>
                WASMaN implements multidisciplinary projects that connect
                scientific research with practical environmental solutions.
                Our initiatives address aquatic ecosystem conservation,
                climate resilience, sustainable livelihoods and women's
                participation in science and environmental management.
            </p>

            <p>
                Through collaboration with researchers, universities,
                governments, development partners and local communities,
                we transform knowledge into action that benefits both
                people and aquatic ecosystems.
            </p>

            <a href="/what_we_do" class="text-link">
                Learn More About Our Work
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <div class="projects-overview-stats">

            <div class="overview-stat">

                <div class="stat-icon">
                    <i class="fa-solid fa-flask-vial"></i>
                </div>

                <h3>15+</h3>

                <p>Active Projects</p>

            </div>


            <div class="overview-stat">

                <div class="stat-icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>

                <h3>25+</h3>

                <p>Research Partners</p>

            </div>


            <div class="overview-stat">

                <div class="stat-icon">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>

                <h3>8</h3>

                <p>Regions Covered</p>

            </div>


            <div class="overview-stat">

                <div class="stat-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <h3>1,200+</h3>

                <p>Beneficiaries</p>

            </div>

        </div>

    </section>


    {{-- FEATURED PROJECT --}}
    <section class="featured-project" id="featured-project">

        <div class="featured-project-image">

            <img
                src="{{ asset('pics_vids/res.png') }}"
                alt="Coastal environmental research"
            >

            <div class="featured-label">
                FEATURED PROJECT
            </div>

            <div class="featured-image-caption">
                <i class="fa-solid fa-seedling"></i>
                <span>Coastal Restoration</span>
            </div>

        </div>


        <div class="featured-project-content">

            <span class="section-label dark-label">
                CONSERVATION • COMMUNITY • RESEARCH
            </span>

            <h2>
                Restoring Coastal Mangrove Ecosystems
            </h2>

            <p>
                This initiative focuses on restoring degraded mangrove
                ecosystems through scientific monitoring, community
                participation and environmental education.
            </p>

            <p>
                The project also creates opportunities for women and young
                researchers to gain practical experience in ecosystem
                restoration while supporting sustainable livelihoods within
                coastal communities.
            </p>

            <div class="project-progress">

                <div class="progress-heading">

                    <span>Project Progress</span>

                    <strong>75%</strong>

                </div>

                <div class="progress-track">

                    <div class="progress-value"></div>

                </div>

            </div>

            <a href="#" class="project-btn">
                View Project
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </section>


    {{-- PROJECT FOCUS --}}
    <section class="project-focus">

        <div class="project-focus-header">

            <span class="section-label">
                OUR PROJECT PORTFOLIO
            </span>

            <h2>
                Research Areas We Are Advancing
            </h2>

            <p>
                Our projects span multiple disciplines, allowing WASMaN
                to address aquatic and environmental challenges from
                different perspectives.
            </p>

        </div>


        <div class="project-focus-grid">

            <article class="focus-item">

                <span class="focus-number">01</span>

                <div class="focus-icon">
                    <i class="fa-solid fa-droplet"></i>
                </div>

                <div>
                    <h3>Water Resources</h3>

                    <p>
                        Research and monitoring focused on sustainable
                        freshwater resources and water quality.
                    </p>
                </div>

            </article>


            <article class="focus-item">

                <span class="focus-number">02</span>

                <div class="focus-icon">
                    <i class="fa-solid fa-leaf"></i>
                </div>

                <div>
                    <h3>Ecosystem Conservation</h3>

                    <p>
                        Protecting wetlands, mangroves, marine habitats
                        and aquatic biodiversity.
                    </p>
                </div>

            </article>


            <article class="focus-item">

                <span class="focus-number">03</span>

                <div class="focus-icon">
                    <i class="fa-solid fa-cloud-sun"></i>
                </div>

                <div>
                    <h3>Climate Resilience</h3>

                    <p>
                        Supporting communities and ecosystems facing
                        climate-related environmental pressures.
                    </p>
                </div>

            </article>


            <article class="focus-item">

                <span class="focus-number">04</span>

                <div class="focus-icon">
                    <i class="fa-solid fa-user-tie"></i>
                </div>

                <div>
                    <h3>Women & Leadership</h3>

                    <p>
                        Creating opportunities for women in research,
                        leadership and environmental innovation.
                    </p>
                </div>

            </article>

        </div>

    </section>


    {{-- PROJECT LIST --}}
    <section class="project-list">

        <div class="project-list-header">

            <span class="section-label">
                CURRENT INITIATIVES
            </span>

            <h2>
                Projects Making a Difference
            </h2>

        </div>


        <div class="project-cards">

            <article class="project-card">

                <div class="project-card-image">

                    <img
                        src="{{ asset('pics_vids/wat.png') }}"
                        alt="Water quality research"
                    >

                    <span>RESEARCH</span>

                </div>

                <div class="project-card-content">

                    <h3>
                        Water Quality Assessment
                    </h3>

                    <p>
                        Monitoring freshwater quality across selected
                        river basins to support evidence-based water
                        resource management.
                    </p>

                    <a href="#">
                        Read Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </article>


            <article class="project-card">

                <div class="project-card-image">

                    <img
                        src="{{ asset('pics_vids/wom.png') }}"
                        alt="Coastal community project"
                    >

                    <span>COMMUNITY</span>

                </div>

                <div class="project-card-content">

                    <h3>
                        Women in the Blue Economy
                    </h3>

                    <p>
                        Supporting entrepreneurial opportunities and
                        sustainable livelihoods for women in coastal
                        communities.
                    </p>

                    <a href="#">
                        Read Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </article>


            <article class="project-card">

                <div class="project-card-image">

                    <img
                        src="{{ asset('pics_vids/mar.png') }}"
                        alt="Marine biodiversity"
                    >

                    <span>CONSERVATION</span>

                </div>

                <div class="project-card-content">

                    <h3>
                        Marine Biodiversity Monitoring
                    </h3>

                    <p>
                        Assessing aquatic ecosystems and marine species
                        using innovative scientific monitoring approaches.
                    </p>

                    <a href="#">
                        Read Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </article>


            <article class="project-card">

                <div class="project-card-image">

                    <img
                        src="{{ asset('pics_vids/com.png') }}"
                        alt="Environmental education"
                    >

                    <span>EDUCATION</span>

                </div>

                <div class="project-card-content">

                    <h3>
                        Community Environmental Education
                    </h3>

                    <p>
                        Promoting environmental awareness and sustainable
                        practices through community outreach programmes.
                    </p>

                    <a href="#">
                        Read Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </article>

        </div>

    </section>


    {{-- ROADMAP --}}
    <section class="project-roadmap">

        <div class="roadmap-header">

            <span class="section-label dark-label">
                PROJECT ROADMAP
            </span>

            <h2>
                From Research to Impact
            </h2>

            <p>
                Our projects follow a structured process that connects
                scientific discovery with practical environmental action.
            </p>

        </div>


        <div class="roadmap">

            <div class="roadmap-step">

                <div class="roadmap-number">
                    01
                </div>

                <div class="roadmap-icon">
                    <i class="fa-solid fa-microscope"></i>
                </div>

                <h3>Research</h3>

                <p>
                    Identifying environmental challenges and generating
                    scientific evidence.
                </p>

            </div>


            <div class="roadmap-step">

                <div class="roadmap-number">
                    02
                </div>

                <div class="roadmap-icon">
                    <i class="fa-solid fa-people-group"></i>
                </div>

                <h3>Collaboration</h3>

                <p>
                    Bringing researchers, communities and institutions
                    together.
                </p>

            </div>


            <div class="roadmap-step">

                <div class="roadmap-number">
                    03
                </div>

                <div class="roadmap-icon">
                    <i class="fa-solid fa-gears"></i>
                </div>

                <h3>Implementation</h3>

                <p>
                    Turning scientific knowledge into practical solutions.
                </p>

            </div>


            <div class="roadmap-step">

                <div class="roadmap-number">
                    04
                </div>

                <div class="roadmap-icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <h3>Impact</h3>

                <p>
                    Measuring results and supporting long-term sustainability.
                </p>

            </div>

        </div>

    </section>


    {{-- IMPACT --}}
    <section class="projects-impact">

        <div class="impact-content">

            <span class="section-label">
                OUR COLLECTIVE IMPACT
            </span>

            <h2>
                Science That Creates Change
            </h2>

            <p>
                Every project contributes to a larger vision of healthier
                aquatic ecosystems, stronger communities and greater
                opportunities for women in science and environmental
                leadership.
            </p>

        </div>


        <div class="impact-numbers">

            <div>
                <i class="fa-solid fa-users"></i>
                <strong>500+</strong>
                <span>Women Engaged</span>
            </div>

            <div>
                <i class="fa-solid fa-flask-vial"></i>
                <strong>35+</strong>
                <span>Research Projects</span>
            </div>

            <div>
                <i class="fa-solid fa-handshake"></i>
                <strong>20+</strong>
                <span>Strategic Partners</span>
            </div>

            <div>
                <i class="fa-solid fa-location-dot"></i>
                <strong>12+</strong>
                <span>Communities Reached</span>
            </div>

        </div>

    </section>


    {{-- CTA --}}
    <section class="projects-cta">

        <div class="cta-overlay">

            <span class="section-label dark-label">
                WORK WITH US
            </span>

            <h2>
                Together, We Can Create
                Healthier Aquatic Ecosystems
            </h2>

            <p>
                Partner with WASMaN to support research, conservation,
                innovation and women's leadership across aquatic science.
            </p>

            <div class="cta-buttons">

                <a href="/general_enquiries">
                    Support Our Projects
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="/partner_with_us" class="cta-outline">
                    Become a Partner
                    <i class="fa-solid fa-handshake"></i>
                </a>

            </div>

        </div>

    </section>

</section>


<footer class="footer">

    <div class="footer-container">

        <div class="footer-column footer-brand">

            <div class="footer-brand-mark">
                <i class="fa-solid fa-water"></i>
            </div>

            <h2>WASMaN</h2>

            <p>
                Women in Aquatic Science and Management Network advances
                women's leadership, scientific excellence and collaboration
                for sustainable aquatic resource management.
            </p>

        </div>


        <div class="footer-column">

            <h3>Quick Links</h3>

            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/history">History</a></li>
                <li><a href="/what_we_do">What We Do</a></li>
                <li><a href="/ongoing">Projects</a></li>
                <li><a href="/become_member">Membership</a></li>
                <li><a href="/general_enquiries">Contact</a></li>
            </ul>

        </div>


        <div class="footer-column">

            <h3>Focus Areas</h3>

            <ul class="focus-list">
                <li><i class="fa-solid fa-microscope"></i> Aquatic Science</li>
                <li><i class="fa-solid fa-water"></i> Marine Conservation</li>
                <li><i class="fa-solid fa-chart-line"></i> Blue Economy</li>
                <li><i class="fa-solid fa-cloud-sun"></i> Climate Resilience</li>
                <li><i class="fa-solid fa-droplet"></i> Water Conservation</li>
                <li><i class="fa-solid fa-user-tie"></i> Women's Leadership</li>
            </ul>

        </div>


        <div class="footer-column">

            <h3>Contact Us</h3>

            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <div>
                    <span>Email</span>
                    <a href="mailto:info@wasman.org">info@wasman.org</a>
                </div>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <span>Phone</span>
                    <p>+233 XX XXX XXXX</p>
                </div>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <span>Location</span>
                    <p>Cape Coast, Ghana</p>
                </div>
            </div>

        </div>

    </div>


    <div class="footer-divider"></div>


    <div class="footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network (WASMaN).
            All Rights Reserved.
        </p>

        <div class="social-links">

            <a href="#" aria-label="Website">
                <i class="fa-solid fa-globe"></i>
            </a>

            <a href="#" aria-label="LinkedIn">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>

            <a href="#" aria-label="YouTube">
                <i class="fa-brands fa-youtube"></i>
            </a>

        </div>

    </div>

</footer>


<script src="{{ asset('created_js/list_hover_background.js') }}"></script>
<script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('created_js/carousel.js') }}"></script>

</body>
</html>
