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
        <link rel="stylesheet" href="{{ asset('css/ongoing.css') }}"> 
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
                        {{-- <li><a href="/ongoing_projects">Ongoing</a></li> --}}
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
 {{-- <section class="projects-hero">

    <div class="hero-overlay">

        <div class="hero-content">

            <span>ONGOING PROJECTS</span>

            <h1>
                Advancing Aquatic Science Through Research,
                Innovation and Community Action
            </h1>

            <p>
                WASMAN implements collaborative projects that strengthen
                scientific research, empower women, promote sustainable
                aquatic resource management and support resilient
                coastal communities.
            </p>

        </div>

    </div>

</section>
 --}}
 <!-- ===========================================
                HERO SECTION
============================================ -->

<section class="projects-hero">

    <div class="hero-overlay">

        <div class="hero-content">

            <span>OUR ONGOING PROJECTS</span>

            <h1>
                Transforming Research into
                Sustainable Solutions for
                Aquatic Ecosystems
            </h1>

            <p>
                WASMAN implements multidisciplinary projects that empower women,
                strengthen scientific research, conserve aquatic biodiversity and
                promote climate-resilient communities through innovation,
                collaboration and evidence-based action.
            </p>

            <div class="hero-buttons">

                <a href="#">Explore Projects</a>

                <a href="#" class="hero-outline">
                    Become a Partner
                </a>

            </div>

        </div>

    </div>

</section>



<!-- ===========================================
              INTRODUCTION SECTION
============================================ -->

<section class="project-intro">

    <div class="intro-image">

        <img src="images/project-intro.jpg"
             alt="Researchers conducting fieldwork">

        <div class="floating-card">

            <h2>15+</h2>

            <p>Active Projects</p>

        </div>

    </div>



    <div class="intro-content">

        <span>WHAT WE ARE DOING</span>

        <h2>
            Delivering Lasting Environmental and
            Community Impact
        </h2>

        <p>

            At WASMAN, every project begins with a commitment to solving
            real-world environmental challenges through scientific research,
            collaboration and inclusive participation.

        </p>

        <p>

            Working alongside universities, research institutions,
            governments, NGOs and local communities, we implement projects
            that strengthen aquatic ecosystem conservation, improve climate
            resilience, empower women scientists and create sustainable
            livelihood opportunities.

        </p>

        <p>

            From restoring mangrove forests and protecting marine biodiversity
            to promoting water quality monitoring and blue economy innovation,
            our projects generate practical solutions that benefit both people
            and nature.

        </p>

        <div class="intro-stats">

            <div>

                <h3>25+</h3>

                <span>Research Partners</span>

            </div>

            <div>

                <h3>8</h3>

                <span>Regions</span>

            </div>

            <div>

                <h3>1,200+</h3>

                <span>Beneficiaries</span>

            </div>

        </div>

    </div>

</section>


<section class="project-intro">

    <div class="intro-left">

        <span>OUR INITIATIVES</span>

        <h2>Projects Creating Lasting Environmental Impact</h2>

        <p>

            Every WASMAN project is designed to bridge science,
            policy and community action. Working alongside
            universities, governments, NGOs and development
            partners, we implement initiatives that generate
            practical solutions for aquatic ecosystems.

        </p>

    </div>

    <div class="intro-right">

        <div class="stat-box">

            <h2>15+</h2>

            <p>Active Projects</p>

        </div>

        <div class="stat-box">

            <h2>8</h2>

            <p>Regions Covered</p>

        </div>

        <div class="stat-box">

            <h2>25+</h2>

            <p>Research Partners</p>

        </div>

        <div class="stat-box">

            <h2>1,200+</h2>

            <p>Beneficiaries</p>

        </div>

    </div>

</section>

<section class="featured-project">

    <div class="featured-image">

        <img src="images/project1.jpg">

    </div>

    <div class="featured-content">

        <span>FEATURED PROJECT</span>

        <h2>
            Restoring Coastal Mangrove Ecosystems
        </h2>

        <p>

            This initiative supports the restoration of degraded
            mangrove forests through scientific monitoring,
            community participation and environmental education.

        </p>

        <p>

            The project also trains women and young researchers
            in ecosystem restoration techniques while promoting
            sustainable livelihoods for coastal communities.

        </p>

        <div class="progress">

            <div class="progress-title">

                <span>Project Progress</span>

                <span>75%</span>

            </div>

            <div class="progress-bar">

                <div class="progress-fill"></div>

            </div>

        </div>

    </div>

</section>

<section class="projects-grid">

    <div class="project-card">

        <img src="images/project2.jpg">

        <div class="project-body">

            <span>Research</span>

            <h3>Water Quality Assessment</h3>

            <p>

                Monitoring freshwater quality across
                selected river basins.

            </p>

            <a href="#">Read More →</a>

        </div>

    </div>



    <div class="project-card">

        <img src="images/project3.jpg">

        <div class="project-body">

            <span>Community</span>

            <h3>Women in Blue Economy</h3>

            <p>

                Building entrepreneurial opportunities
                for women in coastal communities.

            </p>

            <a href="#">Read More →</a>

        </div>

    </div>



    <div class="project-card">

        <img src="images/project4.jpg">

        <div class="project-body">

            <span>Conservation</span>

            <h3>Marine Biodiversity Monitoring</h3>

            <p>

                Assessing marine ecosystems using
                innovative scientific approaches.

            </p>

            <a href="#">Read More →</a>

        </div>

    </div>

</section>

<section class="timeline">

    <div class="timeline-title">

        <h2>Project Roadmap</h2>

    </div>

    <div class="timeline-wrapper">

        <div class="timeline-item">

            <h3>2025</h3>

            <p>
                Research planning and stakeholder engagement.
            </p>

        </div>

        <div class="timeline-item">

            <h3>2026</h3>

            <p>
                Project implementation and field activities.
            </p>

        </div>

        <div class="timeline-item">

            <h3>2027</h3>

            <p>
                Monitoring, evaluation and policy recommendations.
            </p>

        </div>

    </div>

</section>

<section class="project-cta">

    <span>GET INVOLVED</span>

    <h2>
        Partner With WASMAN
    </h2>

    <p>

        Together we can transform scientific knowledge
        into practical environmental solutions that
        benefit people and nature.

    </p>

    <a href="#">
        Support Our Projects
    </a>

</section>
   
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
