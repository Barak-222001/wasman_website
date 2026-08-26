<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WASMaN</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
       
        <link rel="stylesheet" href="{{ asset('css/knowledge_bite.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">
>  

            
    </head>

    <body>

        {{-- header and nav section --}}
@include('components.heading')


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
            WASMaN's Knowledge Bites bring these developments
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

        <img src="{{asset('../pics_vids/fut.png')}}">

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
<div class="cont">

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

                <img src="{{ asset('pics_vids/under.png')}}">

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

             <img src="{{ asset('pics_vids/grow.png')}}">


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

                <img src="{{ asset('pics_vids/new.png')}}">

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

                <img src="{{ asset('pics_vids/emer.png')}}">


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
                <img src="{{ asset('pics_vids/build.png')}}">


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
                <img src="{{ asset('pics_vids/tech.png')}}">
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
            <span>🪼</span>
            <strong>Marine Science</strong>
            <small>Research & discoveries</small>
        </a>

        <a href="#">
            <span>🦈</span>
            <strong>Fisheries</strong>
            <small>Trends & management</small>
        </a>

        <a href="#">
            <span>🌴</span>
            <strong>Conservation</strong>
            <small>Ecosystems & restoration</small>
        </a>

        <a href="#">
            <span>🌏</span>
            <strong>Climate Change</strong>
            <small>Climate & resilience</small>
        </a>

        <a href="#">
            <span>⚓</span>
            <strong>Blue Economy</strong>
            <small>Ocean-based development</small>
        </a>

        <a href="#">
            <span>💦</span>
            <strong>Water Resources</strong>
            <small>Freshwater & coastal systems</small>
        </a>

        <a href="#">
            <span>🦠</span>
            <strong>Research & Innovation</strong>
            <small>Emerging technologies</small>
        </a>

        <a href="#">
            <span>📣</span>
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
