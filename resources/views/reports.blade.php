<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/general.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/reports.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

        <header class="mother text-white">
           <section class="logo_area">
            <img src="{{ asset('pics_vids/logo.png') }}">
           </section>

           <section class="nav_buttons_area">
                   
            <div class="list_options"><a href="/">Home</a></div>

            <div class="list_options" id="myList">
                About Us

                <div class="lists_container ">
                    <ul type="none" id="nav_tabs_dropdown">

                        <li><a href="/history">History</a></li>

                        <li><a href="/what_we_do">What We Do</a></li>

                        <li><a href="/team">Team</a></li>

                        <li><a href="/partners">Partners</a></li>
                    </ul>
                </div>
                

            </div>

            <div class="list_options">
                Project
            <div class="lists_container one ">
                    <ul type="none" id="nav_tabs_dropdown">
                        <li><a href="/areas_of_interest">Areas Of Interest</a></li>
                        <li><a href="/ongoing_projects">Ongoing</a></li>
                        <li><a href="/completed_projects">Completed</a></li>
                        <li><a href="/publications">Publications</a></li>
                    </ul>
                </div>

            </div>

            <div class="list_options">
                News & Media

                <div class="lists_container one ">
                    <ul type="none" id="nav_tabs_dropdown">
                        <li><a href="/news">News</a></li>
                        {{-- <li><a href="/reports">Reports</a></li> --}}
                        <li><a href="/events">Events</a></li>
                        <li><a href="/photos_videos">Photos & Videos</a></li>
                    </ul>
                </div>
            </div>

            <div class="list_options">
                Join Us

                <div class="lists_container  ">
                    <ul type="none" id="nav_tabs_dropdown">
                        <li><a href="/become_member">Become a Member</a></li>

                        <li><a href="/intern">Intern</a></li>

                        <li><a href="/volunteer">Volunteer</a></li>
                        <li><a href="/research_assistant">Research Assistant</a></li>
                    </ul>
                </div>
            </div>

            <div class="list_options">
                Contact Us
                <div class="lists_container General_Enquiries ">
                    <ul type="none" id="nav_tabs_dropdown1">
                        <li><a href="/leave_message">Leave a Message</li>
                        <li><a href="/general_enquiries">General Enquiries</a></li>
                        </ul>
                </div>
            </div>
             
        </section>
        </header >
 
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
