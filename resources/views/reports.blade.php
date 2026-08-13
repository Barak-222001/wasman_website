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
        <link rel="stylesheet" href="{{ asset('css/reports.css') }}">
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
 
 {{--HERO SECTION  --}}
 <section class="reports-hero">

    <div class="reports-overlay">

        <div class="reports-content">

            <span>REPORTS</span>

            <h1>
                Documenting Knowledge,
                Impact and Progress
            </h1>

            <p>

                Explore WASMAN's institutional reports,
                project assessments, technical documents,
                and impact reports highlighting our work
                in aquatic science, conservation and
                sustainable blue economy development.

            </p>


            <div class="report-search">

                <input 
                type="text"
                placeholder="Search reports...">


                <button>

                    Search

                </button>


            </div>

        </div>

    </div>
</section>

{{-- REPORTS AND OVERVIEW SECTION --}}
<section class="report-overview">


    <div class="overview-text">


        <span>
            REPORTING & TRANSPARENCY
        </span>


        <h2>
            Tracking Our Contributions
            Through Evidence-Based Reporting
        </h2>


        <p>

            WASMAN produces comprehensive reports
            that document research activities,
            conservation interventions, partnerships,
            training programmes and organizational
            achievements.

            These reports provide valuable insights
            for researchers, policymakers, partners
            and communities working towards sustainable
            aquatic ecosystems.

        </p>


    </div>



    <div class="report-statistics">


        <div>

            <h2>
                50+
            </h2>

            <span>
                Reports Published
            </span>

        </div>



        <div>

            <h2>
                20+
            </h2>

            <span>
                Projects Documented
            </span>

        </div>



        <div>

            <h2>
                15
            </h2>

            <span>
                Partner Institutions
            </span>

        </div>



    </div>


</section>
{{-- FEATURED REPORTS SECTION --}}
<section class="featured-report">


    <div class="report-cover">


        <img src="images/report-cover.jpg">


    </div>



    <div class="report-details">


        <span>
            FEATURED REPORT
        </span>


        <h2>

            WASMAN Annual Impact Report 2026

        </h2>


        <p>

            This report highlights WASMAN's achievements,
            research activities, partnerships and
            contributions towards strengthening women's
            participation in aquatic science and
            sustainable environmental management.

        </p>



        <div class="report-info">


            <span>
                Year: 2026
            </span>


            <span>
                Type: Annual Report
            </span>


            <span>
                Pages: 85
            </span>


        </div>



        <div class="report-buttons">


            <a href="#">
                View Report
            </a>


            <a href="#">
                Download PDF
            </a>


        </div>


    </div>
</section>
{{-- REPORTS LIBRARY --}}
<section class="report-library">


<div class="section-title">


<span>
REPORT REPOSITORY
</span>


<h2>
Latest Reports
</h2>


</div>



<div class="report-grid">



<div class="report-card">


<img src="images/report1.jpg">


<div class="report-body">


<span class="report-tag">
Technical Report
</span>


<h3>

Marine Ecosystem Assessment Report

</h3>


<p>

Assessment of aquatic biodiversity,
conservation activities and ecosystem
health indicators.

</p>


<small>
Published: June 2026
</small>


<a href="#">
Download Report →
</a>


</div>


</div>



<!-- More cards -->


</div>


</section>

{{-- REPORTS CATEGORY SECTION --}}
<section class="report-categories">


<div class="section-title">

<span>
CATEGORIES
</span>


<h2>
Browse Reports
</h2>


</div>



<div class="category-boxes">


<div>

📘 Annual Reports

</div>


<div>

🌊 Technical Reports

</div>


<div>

🌱 Project Reports

</div>


<div>

📊 Impact Assessments

</div>


<div>

📝 Monitoring Reports

</div>


<div>

🏛 Policy Reports

</div>


</div>


</section>

{{-- DOWNLOAD CTA SECTION --}}
<section class="report-download">


<span>
ACCESS OUR DOCUMENTS
</span>


<h2>

Looking For A Specific Report?

</h2>


<p>

Contact WASMAN for additional reports,
technical documents and research materials.

</p>


<a href="#">

Request Report

</a>


</section>


    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
