<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WASMaN | Knowledge Bites</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/knowledge_bite.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

@include('components.heading')


<section class="knowledge-page">

    {{-- HERO --}}
    <section class="knowledge-hero">

        <div class="knowledge-overlay">

            <div class="knowledge-content">

                <span class="hero-eyebrow">
                    <i class="fa-solid fa-book-open-reader"></i>
                    KNOWLEDGE BITES
                </span>

                <h1>
                    Discover What Is Shaping
                    <span>Our Aquatic Future</span>
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
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a href="#resources" class="outline-button">
                        Download Resources
                        <i class="fa-solid fa-download"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- INTRODUCTION --}}
    <section class="knowledge-intro">

        <div class="knowledge-intro-text">

            <span class="section-label">
                STAY INFORMED
            </span>

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
                WASMaN's Knowledge Bites bring these developments
                closer to you through concise, accessible and
                practical knowledge resources.
            </p>

        </div>


        <div class="knowledge-highlights">

            <div class="highlight-item">
                <div class="highlight-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <strong>120+</strong>
                <span>Knowledge Bites</span>
            </div>

            <div class="highlight-item">
                <div class="highlight-icon">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <strong>50+</strong>
                <span>Research Resources</span>
            </div>

            <div class="highlight-item">
                <div class="highlight-icon">
                    <i class="fa-solid fa-wave-square"></i>
                </div>
                <strong>20+</strong>
                <span>Emerging Topics</span>
            </div>

            <div class="highlight-item">
                <div class="highlight-icon">
                    <i class="fa-solid fa-earth-africa"></i>
                </div>
                <strong>15</strong>
                <span>Countries Covered</span>
            </div>

        </div>

    </section>

    {{-- =========================================================
         LATEST KNOWLEDGE BITE
         Update this featured block whenever a new weekly bite arrives.
    ========================================================== --}}
    <section class="latest-knowledge-bite" id="latest-bite">
        <div class="content-container">
            <div class="latest-bite-heading">
                <span class="section-label">LATEST KNOWLEDGE BITE</span>
                <h2>This Week's Knowledge Bite</h2>
                <p>The most recent WASMaN knowledge resource, featured separately for quick access.</p>
            </div>

            <article class="latest-bite-card">
                <div class="latest-bite-photo">
                    <img src="{{ asset('pics_vids/knowledge-bites/wetlands.webp') }}"
                         alt="Wetlands: A Quietly Disappearing Flood Defence Asset">
                    <span class="latest-badge">
                        <i class="fa-solid fa-bolt"></i> Latest
                    </span>
                </div>

                <div class="latest-bite-content">
                    <span class="current-bite-category">Wetlands & Climate Resilience</span>

                    <h3>Wetlands: A Quietly Disappearing Flood Defence Asset</h3>

                    <div class="latest-bite-meta">
                        <span><i class="fa-regular fa-calendar"></i> 6 July 2026</span>
                        <span><i class="fa-solid fa-water"></i> Wetlands</span>
                    </div>

                    <p>
                        Wetlands are areas where water covers the land permanently or seasonally,
                        including marshes, swamps, lagoons, floodplains, mangroves and estuaries.
                        This Knowledge Bite highlights their importance as natural flood-defence
                        assets, the pressures driving wetland loss, and the need for protection,
                        restoration, stronger enforcement and community participation.
                    </p>

                    <div class="latest-bite-actions">
                        <a class="bite-read-button"
                           href="{{ route('knowledge-bites.read', 'wetlands') }}"
                           target="_blank" rel="noopener">
                            <i class="fa-regular fa-eye"></i> Read Knowledge Bite
                        </a>

                        <a class="bite-download-button"
                           href="{{ route('knowledge-bites.download', 'wetlands') }}">
                            <i class="fa-solid fa-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    {{-- =========================================================
         PREVIOUS KNOWLEDGE BITES
         When a new weekly bite is published, move the former latest
         item into this archive.
    ========================================================== --}}
    <section class="previous-knowledge-bites" id="previous-bites">
        <div class="content-container">
            <div class="section-title previous-bites-heading">
                <span class="section-label">PREVIOUS KNOWLEDGE BITES</span>
                <h2>Explore Earlier Knowledge Bites</h2>
                <p>
                    Browse previous WASMaN knowledge resources on endangered marine species,
                    aquatic biodiversity and ocean conservation.
                </p>
            </div>

            <div class="current-bites-grid">

                <article class="current-bite-card">
                    <div class="current-bite-photo">
                        <img src="{{ asset('pics_vids/knowledge-bites/smalltooth-sawfish.webp') }}"
                             alt="Smalltooth Sawfish" loading="lazy">
                    </div>
                    <div class="current-bite-body">
                        <span class="current-bite-category">World Oceans Day 2026 · Issue 3</span>
                        <h3>Smalltooth Sawfish</h3>
                        <div class="current-bite-date">
                            <i class="fa-regular fa-calendar"></i> 22 June 2026
                        </div>
                        <p>
                            Meet the critically endangered smalltooth sawfish, its ecological
                            importance, major threats and the conservation actions needed to
                            protect the species.
                        </p>
                        <div class="current-bite-actions">
                            <a class="bite-read-button"
                               href="{{ route('knowledge-bites.read', 'smalltooth-sawfish') }}"
                               target="_blank" rel="noopener">
                                <i class="fa-regular fa-eye"></i> Read Knowledge Bite
                            </a>
                            <a class="bite-download-button"
                               href="{{ route('knowledge-bites.download', 'smalltooth-sawfish') }}">
                                <i class="fa-solid fa-download"></i> Download PDF
                            </a>
                        </div>
                    </div>
                </article>

                <article class="current-bite-card">
                    <div class="current-bite-photo">
                        <img src="{{ asset('pics_vids/knowledge-bites/leatherback-sea-turtle.webp') }}"
                             alt="Leatherback Sea Turtle" loading="lazy">
                    </div>
                    <div class="current-bite-body">
                        <span class="current-bite-category">World Oceans Day 2026 · Issue 2</span>
                        <h3>Leatherback Sea Turtle</h3>
                        <div class="current-bite-date">
                            <i class="fa-regular fa-calendar"></i> 18 June 2026
                        </div>
                        <p>
                            Discover the world's largest living sea turtle, its role in marine
                            ecosystems, its distribution and the pressures facing populations
                            across West Africa.
                        </p>
                        <div class="current-bite-actions">
                            <a class="bite-read-button"
                               href="{{ route('knowledge-bites.read', 'leatherback-sea-turtle') }}"
                               target="_blank" rel="noopener">
                                <i class="fa-regular fa-eye"></i> Read Knowledge Bite
                            </a>
                            <a class="bite-download-button"
                               href="{{ route('knowledge-bites.download', 'leatherback-sea-turtle') }}">
                                <i class="fa-solid fa-download"></i> Download PDF
                            </a>
                        </div>
                    </div>
                </article>

                <article class="current-bite-card">
                    <div class="current-bite-photo">
                        <img src="{{ asset('pics_vids/knowledge-bites/scalloped-hammerhead.webp') }}"
                             alt="The Scalloped Hammerhead Shark" loading="lazy">
                    </div>
                    <div class="current-bite-body">
                        <span class="current-bite-category">World Oceans Day 2026 · Issue 1</span>
                        <h3>The Scalloped Hammerhead Shark</h3>
                        <div class="current-bite-date">
                            <i class="fa-regular fa-calendar"></i> 1 June 2026
                        </div>
                        <p>
                            Learn why the scalloped hammerhead shark matters to marine food webs
                            and ocean health, the pressures driving its decline and the
                            conservation measures needed.
                        </p>
                        <div class="current-bite-actions">
                            <a class="bite-read-button"
                               href="{{ route('knowledge-bites.read', 'scalloped-hammerhead') }}"
                               target="_blank" rel="noopener">
                                <i class="fa-regular fa-eye"></i> Read Knowledge Bite
                            </a>
                            <a class="bite-download-button"
                               href="{{ route('knowledge-bites.download', 'scalloped-hammerhead') }}">
                                <i class="fa-solid fa-download"></i> Download PDF
                            </a>
                        </div>
                    </div>
                </article>

                <article class="current-bite-card">
                    <div class="current-bite-photo">
                        <img src="{{ asset('pics_vids/knowledge-bites/aquatic-biodiversity.webp') }}"
                             alt="Aquatic Biodiversity Conservation: A Call to Collective Action" loading="lazy">
                    </div>
                    <div class="current-bite-body">
                        <span class="current-bite-category">Aquatic Biodiversity</span>
                        <h3>Aquatic Biodiversity Conservation: A Call to Collective Action</h3>
                        <div class="current-bite-date">
                            <i class="fa-regular fa-calendar"></i> 25 May 2026
                        </div>
                        <p>
                            Explore why aquatic biodiversity matters to food systems, livelihoods,
                            climate resilience and the blue economy, and the conservation actions
                            needed.
                        </p>
                        <div class="current-bite-actions">
                            <a class="bite-read-button"
                               href="{{ route('knowledge-bites.read', 'aquatic-biodiversity') }}"
                               target="_blank" rel="noopener">
                                <i class="fa-regular fa-eye"></i> Read Knowledge Bite
                            </a>
                            <a class="bite-download-button"
                               href="{{ route('knowledge-bites.download', 'aquatic-biodiversity') }}">
                                <i class="fa-solid fa-download"></i> Download PDF
                            </a>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>








    {{-- KNOWLEDGE CATEGORIES --}}
    <section class="knowledge-categories">

        <div class="content-container">

            <div class="section-title">

                <span class="section-label">
                    EXPLORE ALL KNOWLEDGE BITES
                </span>

                <h2>
                    Browse Knowledge Areas
                </h2>

            </div>


            <div class="knowledge-category-grid">

                <a href="#">
                    <div class="category-icon">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <strong>Marine Science</strong>
                    <small>Research & discoveries</small>
                </a>

                <a href="#">
                    <div class="category-icon">
                        <i class="fa-solid fa-fish-fins"></i>
                    </div>
                    <strong>Fisheries</strong>
                    <small>Trends & management</small>
                </a>

                <a href="#">
                    <div class="category-icon">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <strong>Conservation</strong>
                    <small>Ecosystems & restoration</small>
                </a>

                <a href="#">
                    <div class="category-icon">
                        <i class="fa-solid fa-cloud-sun"></i>
                    </div>
                    <strong>Climate Change</strong>
                    <small>Climate & resilience</small>
                </a>

                <a href="#">
                    <div class="category-icon">
                        <i class="fa-solid fa-anchor"></i>
                    </div>
                    <strong>Blue Economy</strong>
                    <small>Ocean-based development</small>
                </a>

                <a href="#">
                    <div class="category-icon">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <strong>Water Resources</strong>
                    <small>Freshwater & coastal systems</small>
                </a>

                <a href="#">
                    <div class="category-icon">
                        <i class="fa-solid fa-microscope"></i>
                    </div>
                    <strong>Research & Innovation</strong>
                    <small>Emerging technologies</small>
                </a>

                <a href="#">
                    <div class="category-icon">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>
                    <strong>Policy & Governance</strong>
                    <small>Policies & regulations</small>
                </a>

            </div>

        </div>

    </section>


    {{-- RESOURCE HUB --}}
    <section class="resource-hub" id="resources">

        <div class="content-container">

            <div class="section-title">

                <span class="section-label">
                    RESOURCE HUB
                </span>

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

                <div class="resource-card">

                    <div class="resource-icon">
                        <i class="fa-solid fa-file-lines"></i>
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
                        <i class="fa-solid fa-download"></i>
                    </a>

                </div>


                <div class="resource-card">

                    <div class="resource-icon">
                        <i class="fa-solid fa-file-circle-check"></i>
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
                        <i class="fa-solid fa-download"></i>
                    </a>

                </div>


                <div class="resource-card">

                    <div class="resource-icon">
                        <i class="fa-solid fa-file-pdf"></i>
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
                        <i class="fa-solid fa-download"></i>
                    </a>

                </div>


                <div class="resource-card">

                    <div class="resource-icon">
                        <i class="fa-solid fa-book"></i>
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
                        <i class="fa-solid fa-download"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- TRENDING --}}
    <section class="trending-knowledge">

        <div class="trending-content">

            <span class="section-label dark-label">
                WHAT'S TRENDING?
            </span>

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
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>02</span>
                <h3>Blue Carbon Financing</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>03</span>
                <h3>Plastic Pollution Solutions</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>04</span>
                <h3>Digital Ocean Monitoring</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>05</span>
                <h3>Nature-Based Coastal Protection</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

        </div>

    </section>


    {{-- CTA --}}
    <section class="knowledge-cta">

        <div class="knowledge-cta-inner">

            <span class="section-label dark-label">
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
                <i class="fa-solid fa-arrow-right"></i>
            </a>

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
<script src="{{ asset('created_js/animation.js') }}"></script>


</body>
</html>
