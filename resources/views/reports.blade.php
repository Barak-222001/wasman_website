<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WASMaN</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/reports.css') }}">
        <link rel="stylesheet" href="css/style.css">


            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')
 <!-- =====================================================
                    REPORTS HERO
====================================================== -->

<section class="reports-hero">

    <div class="reports-hero-overlay">

        <div class="reports-hero-content">

            <span class="section-kicker">
                KNOWLEDGE & REPORTING
            </span>

            <h1>
                Documenting Knowledge,
                Measuring Impact &
                Sharing Progress
            </h1>

            <p>
                Explore WASMaN's institutional reports, project assessments,
                technical documents and impact reports that document our
                contribution to aquatic science, conservation, climate
                resilience and sustainable development.
            </p>

            <div class="reports-hero-actions">

                <a href="#report-library" class="primary-btn">
                    Explore Reports
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a href="#report-categories" class="secondary-btn">
                    Browse Categories
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
                REPORT OVERVIEW
====================================================== -->

<section class="report-overview">

    <div class="overview-container">

        <div class="overview-content">

            <span class="section-kicker">
                REPORTING & TRANSPARENCY
            </span>

            <h2>
                Turning Activities Into
                Evidence and Knowledge
            </h2>

            <p>
                WASMaN documents its research, conservation activities,
                partnerships, capacity-building programmes and institutional
                achievements through carefully prepared reports.
            </p>

            <p>
                These documents provide researchers, policymakers, development
                partners, students and communities with reliable information
                about our activities, lessons learned and environmental impact.
            </p>

            <a href="#report-library" class="text-link">
                Explore our report repository
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <!-- Statistics -->

        <div class="report-statistics">

            <div class="report-stat">

                <div class="stat-icon">
                    <i class="fas fa-file-lines"></i>
                </div>

                <h3>50+</h3>

                <span>
                    Reports Published
                </span>

            </div>


            <div class="report-stat">

                <div class="stat-icon">
                    <i class="fas fa-diagram-project"></i>
                </div>

                <h3>20+</h3>

                <span>
                    Projects Documented
                </span>

            </div>


            <div class="report-stat">

                <div class="stat-icon">
                    <i class="fas fa-building-columns"></i>
                </div>

                <h3>15+</h3>

                <span>
                    Partner Institutions
                </span>

            </div>


            <div class="report-stat">

                <div class="stat-icon">
                    <i class="fas fa-download"></i>
                </div>

                <h3>5K+</h3>

                <span>
                    Document Downloads
                </span>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
                FEATURED REPORT
====================================================== -->

<section class="featured-report">

    <div class="featured-report-container">

        <div class="featured-report-image">

            <div class="report-image-frame">

                <img
                    src="{{ asset('../pics_vids/rp.png') }}"
                    alt="WASMaN Annual Impact Report"
                >

            </div>

            <div class="document-badge">

                <i class="fas fa-file-pdf"></i>

                <span>
                    PDF DOCUMENT
                </span>

            </div>

        </div>


        <div class="featured-report-content">

            <span class="section-kicker">
                FEATURED REPORT
            </span>

            <h2>
                WASMaN Annual
                Impact Report 2026
            </h2>

            <p>
                This report presents WASMaN's achievements, research
                activities, partnerships, capacity-building programmes
                and contributions toward strengthening women's participation
                in aquatic science and sustainable environmental management.
            </p>


            <div class="report-meta">

                <div>
                    <i class="fas fa-calendar"></i>

                    <span>
                        <strong>Year</strong>
                        2026
                    </span>
                </div>

                <div>
                    <i class="fas fa-file-alt"></i>

                    <span>
                        <strong>Type</strong>
                        Annual Report
                    </span>
                </div>

                <div>
                    <i class="fas fa-book-open"></i>

                    <span>
                        <strong>Pages</strong>
                        85 Pages
                    </span>
                </div>

            </div>


            <div class="report-actions">

                <a href="#" class="primary-btn">

                    <i class="fas fa-eye"></i>
                    View Report

                </a>

                <a href="#" class="download-btn">

                    <i class="fas fa-download"></i>
                    Download PDF

                </a>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
                REPORT LIBRARY
====================================================== -->

<section class="report-library" id="report-library">

    <div class="library-heading">

        <div>

            <span class="section-kicker">
                REPORT REPOSITORY
            </span>

            <h2>
                Explore Our Reports
            </h2>

        </div>

        <p>
            Browse reports covering research, conservation,
            projects, monitoring and institutional activities.
        </p>

    </div>


    <div class="report-grid">


        <!-- REPORT 01 -->

        <article class="report-card">

            <div class="report-card-image">

                <img
                    src="{{ asset('../pics_vids/me.png') }}"
                    alt="Marine Ecosystem Assessment Report"
                >

                <span class="report-type">
                    Technical Report
                </span>

            </div>


            <div class="report-card-body">

                <span class="report-date">
                    June 2026
                </span>

                <h3>
                    Marine Ecosystem
                    Assessment Report
                </h3>

                <p>
                    Assessment of aquatic biodiversity,
                    conservation activities and ecosystem
                    health indicators.
                </p>

                <a href="#">
                    Download Report
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>


        <!-- REPORT 02 -->

        <article class="report-card">

            <div class="report-card-image">

                <img
                    src="{{ asset('../pics_vids/as.png') }}"
                    alt="Marine Ecosystem Assessment Report"
                >

                <span class="report-type">
                    Research Report
                </span>

            </div>


            <div class="report-card-body">

                <span class="report-date">
                    May 2026
                </span>

                <h3>
                    Aquatic Science
                    Research Report
                </h3>

                <p>
                    Research findings on aquatic ecosystems,
                    biodiversity and environmental sustainability.
                </p>

                <a href="#">
                    Download Report
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>


        <!-- REPORT 03 -->

        <article class="report-card">

            <div class="report-card-image">

                 <img
                    src="{{ asset('../pics_vids/cs.png') }}"
                    alt="Marine Ecosystem Assessment Report"
                >

                <span class="report-type">
                    Impact Report
                </span>

            </div>


            <div class="report-card-body">

                <span class="report-date">
                    April 2026
                </span>

                <h3>
                    Community Conservation
                    Impact Report
                </h3>

                <p>
                    Documenting community engagement,
                    environmental education and conservation
                    outcomes.
                </p>

                <a href="#">
                    Download Report
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>


        <!-- REPORT 04 -->

        <article class="report-card">

            <div class="report-card-image">

                 <img
                    src="{{ asset('../pics_vids/wqs.png') }}"
                    alt="Marine Ecosystem Assessment Report"
                >


                <span class="report-type">
                    Programme Report
                </span>

            </div>


            <div class="report-card-body">

                <span class="report-date">
                    March 2026
                </span>

                <h3>
                    Women in Aquatic
                    Science Programme
                </h3>

                <p>
                    Highlights from mentorship, leadership
                    development and capacity-building activities.
                </p>

                <a href="#">
                    Download Report
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>


        <!-- REPORT 05 -->

        <article class="report-card">

            <div class="report-card-image">

                <img
                    src="{{ asset('../pics_vids/csa.png') }}"
                    alt="Marine Ecosystem Assessment Report"
                >

                <span class="report-type">
                    Climate Report
                </span>

            </div>


            <div class="report-card-body">

                <span class="report-date">
                    February 2026
                </span>

                <h3>
                    Climate Resilience
                    Assessment
                </h3>

                <p>
                    Exploring climate risks, adaptation strategies
                    and resilience within coastal communities.
                </p>

                <a href="#">
                    Download Report
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>


        <!-- REPORT 06 -->

        <article class="report-card">

            <div class="report-card-image">

                <img
                    src="{{ asset('../pics_vids/wrm.png') }}"
                    alt="Marine Ecosystem Assessment Report"
                >

                <span class="report-type">
                    Monitoring Report
                </span>

            </div>


            <div class="report-card-body">

                <span class="report-date">
                    January 2026
                </span>

                <h3>
                    Water Resources
                    Monitoring Report
                </h3>

                <p>
                    Monitoring water resources and assessing
                    environmental conditions across selected areas.
                </p>

                <a href="#">
                    Download Report
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>

    </div>

</section>


<!-- =====================================================
                REPORT CATEGORIES
====================================================== -->

<section class="report-categories" id="report-categories">

    <div class="categories-heading">

        <span class="section-kicker">
            REPORT COLLECTION
        </span>

        <h2>
            Browse Reports by Category
        </h2>

        <p>
            Find the information you need by exploring
            our different report collections.
        </p>

    </div>


    <div class="category-grid">


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-building-columns"></i>
            </div>

            <div>
                <h3>Annual Reports</h3>

                <span>
                    Institutional performance
                </span>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-water"></i>
            </div>

            <div>
                <h3>Technical Reports</h3>

                <span>
                    Scientific & technical studies
                </span>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-diagram-project"></i>
            </div>

            <div>
                <h3>Project Reports</h3>

                <span>
                    Project implementation
                </span>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-chart-line"></i>
            </div>

            <div>
                <h3>Impact Assessments</h3>

                <span>
                    Measuring environmental impact
                </span>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-chart-column"></i>
            </div>

            <div>
                <h3>Monitoring Reports</h3>

                <span>
                    Tracking progress & outcomes
                </span>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>


        <a href="#" class="category-card">

            <div class="category-icon">
                <i class="fas fa-scale-balanced"></i>
            </div>

            <div>
                <h3>Policy Reports</h3>

                <span>
                    Evidence for policy
                </span>
            </div>

            <i class="fas fa-arrow-right category-arrow"></i>

        </a>

    </div>

</section>


<!-- =====================================================
                IMPACT STRIP
====================================================== -->

<section class="report-impact">

    <div class="impact-container">

        <div class="impact-intro">

            <span>
                OUR REPORTING IMPACT
            </span>

            <h2>
                Knowledge That Supports
                Better Decisions
            </h2>

        </div>


        <div class="impact-stat">

            <strong>250+</strong>

            <span>
                Citations
            </span>

        </div>


        <div class="impact-stat">

            <strong>30+</strong>

            <span>
                Countries Reached
            </span>

        </div>


        <div class="impact-stat">

            <strong>15K+</strong>

            <span>
                Downloads
            </span>

        </div>

    </div>

</section>


<!-- =====================================================
                REQUEST REPORT CTA
====================================================== -->

<section class="report-cta">

    <div class="cta-content">

        <span class="section-kicker">
            NEED MORE INFORMATION?
        </span>

        <h2>
            Looking for a Specific Report?
        </h2>

        <p>
            Some technical documents and project reports may not yet
            be available through our online repository. Contact the
            WASMaN team to request additional research materials.
        </p>

        <a href="#" class="cta-btn">
            Request a Report
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>

</section>


    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
