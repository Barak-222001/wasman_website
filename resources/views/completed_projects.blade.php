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
        <link rel="stylesheet" href="{{ asset('css/completed.css') }}"> 

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
                        {{-- <li><a href="/completed_projects">Completed</a></li> --}}
                        <li><a href="/publications">Publications</a></li>
                    </ul>
                </div>

            </div>

            <div class="list_options">
                News & Media

                <div class="lists_container one ">
                    <ul type="none" id="nav_tabs_dropdown">
                        <li><a href="/news">News</a></li>
                        <li><a href="/reports">Reports</a></li>
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
{{-- HERO SECTION --}}
        <section class="completed-hero">

    <div class="completed-overlay">

        <div class="completed-content">

            <span>COMPLETED PROJECTS</span>

            <h1>
                Celebrating Projects That Have
                Created Lasting Environmental Impact
            </h1>

            <p>

                Every completed WASMAN project represents meaningful
                progress toward healthier aquatic ecosystems,
                empowered communities and increased participation
                of women in science and environmental leadership.

            </p>

            <div class="hero-btns">

                <a href="#">Explore Success Stories</a>

                <a href="#" class="outline">
                    Download Reports
                </a>

            </div>

        </div>

    </div>

</section>
 {{-- IMPACT INTRODUCTION --}}
   <section class="legacy">

    <div class="legacy-content">

        <span>OUR LEGACY</span>

        <h2>
            Creating Sustainable Change
            Beyond Project Completion
        </h2>

        <p>

            Successful projects do more than achieve objectives—
            they create lasting environmental, social and scientific
            impact. Through collaboration with research institutions,
            governments, NGOs and communities, WASMAN has completed
            initiatives that continue to influence conservation,
            research and sustainable development.

        </p>

    </div>

    <div class="legacy-stats">

        <div>

            <h2>30+</h2>

            <span>Projects Completed</span>

        </div>

        <div>

            <h2>18</h2>

            <span>Communities Served</span>

        </div>

        <div>

            <h2>7</h2>

            <span>Countries Reached</span>

        </div>

        <div>

            <h2>50+</h2>

            <span>Research Publications</span>

        </div>

    </div>

</section>
      
{{-- FEATURED SUCCESS STORY --}}
<section class="success-story">

    <div class="story-image">

        <img src="images/completed-project.jpg">

    </div>

    <div class="story-content">

        <span>FEATURED SUCCESS STORY</span>

        <h2>
            Restoring Mangrove Ecosystems
            Along Ghana's Coastline
        </h2>

        <p>

            Working with local communities,
            researchers and conservation partners,
            WASMAN restored degraded mangrove habitats,
            trained women in restoration techniques
            and strengthened biodiversity monitoring.

        </p>

        <div class="results">

            <div>

                ✔ 45 hectares restored

            </div>

            <div>

                ✔ 300 women trained

            </div>

            <div>

                ✔ 12 coastal communities engaged

            </div>

            <div>

                ✔ Project completed in 2025

            </div>

        </div>

    </div>

</section>
{{-- COMPLETED PROJECTS --}}
<section class="completed-grid">

    <div class="completed-card">

        <img src="images/project1.jpg">

        <div class="completed-body">

            <span class="badge">

                ✔ Completed

            </span>

            <h3>

                Water Quality Assessment

            </h3>

            <p>

                A two-year scientific assessment
                of freshwater quality across
                selected river basins.

            </p>

            <ul>

                <li>Duration: 2023–2025</li>

                <li>Location: Ghana</li>

                <li>Outcome: Policy recommendations adopted.</li>

            </ul>

        </div>

    </div>





    <div class="completed-card">

        <img src="images/project2.jpg">

        <div class="completed-body">

            <span class="badge">

                ✔ Completed

            </span>

            <h3>

                Marine Biodiversity Survey

            </h3>

            <p>

                Monitoring key marine species
                using innovative ecological methods.

            </p>

            <ul>

                <li>Duration: 2022–2024</li>

                <li>Location: Gulf of Guinea</li>

                <li>Outcome: Scientific publications.</li>

            </ul>

        </div>

    </div>





    <div class="completed-card">

        <img src="images/project3.jpg">

        <div class="completed-body">

            <span class="badge">

                ✔ Completed

            </span>

            <h3>

                Women in Blue Economy

            </h3>

            <p>

                Strengthening entrepreneurial
                opportunities for women in
                coastal communities.

            </p>

            <ul>

                <li>Duration: 2023–2025</li>

                <li>Location: West Africa</li>

                <li>Outcome: Sustainable livelihoods.</li>

            </ul>

        </div>

    </div>

</section>
{{-- IMPACT GALLERY --}}
<section class="impact-gallery">

    <h2>Project Highlights</h2>

    <div class="gallery">

        <img src="images/gallery1.jpg">

        <img src="images/gallery2.jpg">

        <img src="images/gallery3.jpg">

        <img src="images/gallery4.jpg">

    </div>
    
</section>
{{-- FUTURE COMMENTS --}}
    <section class="future">

    <span>LOOKING AHEAD</span>

    <h2>

        Building on Every Success

    </h2>

    <p>

        Every completed project provides
        valuable knowledge that inspires
        future research, stronger partnerships
        and innovative conservation initiatives.

    </p>

    <a href="#">

        View Ongoing Projects

    </a>

</section>


    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
