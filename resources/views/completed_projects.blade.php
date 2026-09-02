<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WASMaN | Completed Projects</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/completed.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

@include('components.heading')


<section class="completed-projects-page">

    {{-- HERO --}}
    <section class="completed-hero">

        <div class="completed-hero-overlay">

            <div class="completed-hero-content">

                <span class="eyebrow">
                    <i class="fa-solid fa-circle-check"></i>
                    COMPLETED PROJECTS
                </span>

                <h1>
                    Turning Research Into
                    <span>Lasting Impact</span>
                </h1>

                <p>
                    Explore the projects, partnerships and scientific
                    initiatives that have contributed to healthier
                    aquatic ecosystems, stronger communities and
                    greater opportunities for women in science.
                </p>

                <div class="completed-hero-actions">

                    <a href="#success-story" class="primary-btn">
                        Explore Success Stories
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a href="#completed-projects" class="secondary-btn">
                        View Completed Projects
                        <i class="fa-solid fa-folder-open"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- LEGACY --}}
    <section class="legacy-section">

        <div class="legacy-intro">

            <span class="section-label">
                OUR LEGACY
            </span>

            <h2>
                Projects That Continue
                to Make a Difference
            </h2>

            <p>
                Successful projects should create value long after
                implementation ends. WASMaN's completed initiatives
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
                    <i class="fa-solid fa-check-double"></i>
                </div>

                <h3>30+</h3>

                <p>Projects Completed</p>

            </div>


            <div class="legacy-stat">

                <div class="stat-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <h3>18</h3>

                <p>Communities Served</p>

            </div>


            <div class="legacy-stat">

                <div class="stat-icon">
                    <i class="fa-solid fa-earth-africa"></i>
                </div>

                <h3>7</h3>

                <p>Countries Reached</p>

            </div>


            <div class="legacy-stat">

                <div class="stat-icon">
                    <i class="fa-solid fa-book-open"></i>
                </div>

                <h3>50+</h3>

                <p>Research Publications</p>

            </div>

        </div>

    </section>


    {{-- FEATURED SUCCESS STORY --}}
    <section class="success-section" id="success-story">

        <div class="success-image">

            <img
                src="{{ asset('pics_vids/res.png') }}"
                alt="WASMaN conservation project"
            >

            <div class="success-tag">
                <i class="fa-solid fa-award"></i>
                Featured Success Story
            </div>

            <div class="success-image-caption">
                <i class="fa-solid fa-seedling"></i>
                Mangrove Restoration
            </div>

        </div>


        <div class="success-content">

            <span class="section-label dark-label">
                FEATURED SUCCESS STORY
            </span>

            <h2>
                Restoring Mangrove Ecosystems
                Along Ghana's Coastline
            </h2>

            <p>
                Working with local communities, researchers and
                conservation partners, WASMaN supported the restoration
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
                    <i class="fa-solid fa-leaf"></i>
                    <span>45 hectares restored</span>
                </div>

                <div>
                    <i class="fa-solid fa-user-graduate"></i>
                    <span>300 women trained</span>
                </div>

                <div>
                    <i class="fa-solid fa-water"></i>
                    <span>12 coastal communities engaged</span>
                </div>

                <div>
                    <i class="fa-solid fa-calendar-check"></i>
                    <span>Completed in 2025</span>
                </div>

            </div>

        </div>

    </section>


    {{-- COMPLETED PROJECTS HEADING --}}
    <section class="completed-heading" id="completed-projects">

        <span class="section-label">
            OUR PROJECT PORTFOLIO
        </span>

        <h2>
            From Scientific Research
            to Community Transformation
        </h2>

        <p>
            Browse selected projects that demonstrate the breadth
            of WASMaN's work across aquatic science, conservation,
            climate resilience and women's empowerment.
        </p>

    </section>


    {{-- COMPLETED PROJECT CARDS --}}
    <section class="completed-project-grid">

        <article class="completed-project-card">

            <div class="completed-card-image">

                <img
                    src="{{ asset('pics_vids/wq.png') }}"
                    alt="Water quality assessment"
                >

                <span class="completed-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    Completed
                </span>

            </div>


            <div class="completed-card-content">

                <span class="project-category">
                    <i class="fa-solid fa-flask-vial"></i>
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
                        <i class="fa-regular fa-calendar"></i>
                        <span>2023 – 2025</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Ghana</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-chart-line"></i>
                        <span>Policy recommendations adopted</span>
                    </div>

                </div>

                <a href="#" class="project-link">
                    View Project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </article>


        <article class="completed-project-card">

            <div class="completed-card-image">

                <img
                    src="{{ asset('pics_vids/mq.png') }}"
                    alt="Marine biodiversity survey"
                >

                <span class="completed-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    Completed
                </span>

            </div>


            <div class="completed-card-content">

                <span class="project-category">
                    <i class="fa-solid fa-fish-fins"></i>
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
                        <i class="fa-regular fa-calendar"></i>
                        <span>2022 – 2024</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Gulf of Guinea</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-book"></i>
                        <span>Scientific publications</span>
                    </div>

                </div>

                <a href="#" class="project-link">
                    View Project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </article>


        <article class="completed-project-card">

            <div class="completed-card-image">

                <img
                    src="{{ asset('pics_vids/wb.png') }}"
                    alt="Women in blue economy"
                >

                <span class="completed-badge">
                    <i class="fa-solid fa-circle-check"></i>
                    Completed
                </span>

            </div>


            <div class="completed-card-content">

                <span class="project-category">
                    <i class="fa-solid fa-user-tie"></i>
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
                        <i class="fa-regular fa-calendar"></i>
                        <span>2023 – 2025</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>West Africa</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-seedling"></i>
                        <span>Sustainable livelihoods</span>
                    </div>

                </div>

                <a href="#" class="project-link">
                    View Project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </article>

    </section>


    {{-- IMPACT GALLERY --}}
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
                    src="{{ asset('pics_vids/one.jpg') }}"
                    alt="WASMaN field activity"
                >
            </div>

            <div class="gallery-item">
                <img
                    src="{{ asset('pics_vids/six.jpeg') }}"
                    alt="Community engagement"
                >
            </div>

            <div class="gallery-item">
                <img
                    src="{{ asset('pics_vids/five.jpg') }}"
                    alt="Aquatic research"
                >
            </div>

            <div class="gallery-item wide">
                <img
                    src="{{ asset('pics_vids/conference.jpeg') }}"
                    alt="Environmental conservation"
                >
            </div>

        </div>

    </section>


    {{-- LESSONS --}}
    <section class="lessons-section">

        <div class="lessons-image">

            <img
                src="{{ asset('pics_vids/pro.png') }}"
                alt="WASMaN community outreach"
            >

            <div class="lessons-image-badge">
                <i class="fa-solid fa-lightbulb"></i>
                Lessons That Guide Future Action
            </div>

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
                        <i class="fa-solid fa-lightbulb"></i>
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
                        <i class="fa-solid fa-people-group"></i>
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
                        <i class="fa-solid fa-recycle"></i>
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


    {{-- CTA --}}
    <section class="completed-cta">

        <div class="cta-content">

            <span class="section-label dark-label">
                LOOKING AHEAD
            </span>

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

                <a href="/ongoing" class="cta-primary">
                    View Ongoing Projects
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="/partner_with_us" class="cta-outline">
                    Partner With WASMaN
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
