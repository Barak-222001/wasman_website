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
        <link rel="stylesheet" href="{{ asset('css/publications.css') }}"> 
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
                        {{-- <li><a href="/publications">Publications</a></li> --}}
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
 <section class="publication-hero">

    <div class="publication-overlay">

        <div class="publication-content">

            <span>PUBLICATIONS</span>

            <h1>
                Advancing Knowledge Through
                Research and Scientific Publications
            </h1>

            <p>
                Explore WASMAN's collection of research papers, policy briefs,
                technical reports, manuals and scientific publications that
                contribute to sustainable aquatic resource management and the
                advancement of women in aquatic science.
            </p>

            <div class="publication-search">

                <input
                    type="text"
                    placeholder="Search publications...">

                <button>

                    Search

                </button>

            </div>

        </div>

    </div>

</section>
 {{-- KNOWLEDGE CENTER --}}
 <section class="knowledge-centre">

    <div class="knowledge-text">

        <span>KNOWLEDGE CENTRE</span>

        <h2>
            Sharing Knowledge That Inspires
            Sustainable Change
        </h2>

        <p>

            WASMAN promotes evidence-based decision-making by producing and
            disseminating high-quality scientific knowledge. Our publications
            support researchers, policymakers, students, conservation
            practitioners and development organizations working across aquatic
            science and environmental sustainability.

        </p>

    </div>

    <div class="knowledge-stats">

        <div>

            <h2>120+</h2>

            <span>Research Papers</span>

        </div>

        <div>

            <h2>45</h2>

            <span>Technical Reports</span>

        </div>

        <div>

            <h2>18</h2>

            <span>Policy Briefs</span>

        </div>

        <div>

            <h2>5,000+</h2>

            <span>Downloads</span>

        </div>

    </div>

</section>
{{-- KNOWLEDGE CENTER --}}
   <section class="knowledge-centre">

    <div class="knowledge-text">

        <span>KNOWLEDGE CENTRE</span>

        <h2>
            Sharing Knowledge That Inspires
            Sustainable Change
        </h2>

        <p>

            WASMAN promotes evidence-based decision-making by producing and
            disseminating high-quality scientific knowledge. Our publications
            support researchers, policymakers, students, conservation
            practitioners and development organizations working across aquatic
            science and environmental sustainability.

        </p>

    </div>

    <div class="knowledge-stats">

        <div>

            <h2>120+</h2>

            <span>Research Papers</span>

        </div>

        <div>

            <h2>45</h2>

            <span>Technical Reports</span>

        </div>

        <div>

            <h2>18</h2>

            <span>Policy Briefs</span>

        </div>

        <div>

            <h2>5,000+</h2>

            <span>Downloads</span>

        </div>

    </div>

</section>
{{-- FEATURED PUBLICATIONS --}}
<section class="featured-publication">

    <div class="publication-cover">

        <img src="images/publication-cover.jpg">

    </div>

    <div class="publication-info">

        <span>FEATURED PUBLICATION</span>

        <h2>

            Women Leading Sustainable
            Aquatic Resource Management

        </h2>

        <p>

            This publication explores the role of women in advancing aquatic
            science, coastal conservation and sustainable blue economy
            initiatives across Africa.

        </p>

        <div class="publication-meta">

            <span><strong>Author:</strong> WASMAN Research Team</span>

            <span><strong>Year:</strong> 2026</span>

            <span><strong>Category:</strong> Research Report</span>

        </div>

        <div class="publication-buttons">

            <a href="#">Read Online</a>

            <a href="#" class="download-btn">

                Download PDF

            </a>

        </div>

    </div>

</section>

{{-- PUBLICATIONS CARDS --}}
<section class="publication-library">

    <div class="library-header">

        <span>LIBRARY</span>

        <h2>Latest Publications</h2>

    </div>

    <div class="publication-grid">

        <div class="publication-card">

            <img src="images/pub1.jpg">

            <div class="card-body">

                <span class="category">

                    Marine Science

                </span>

                <h3>

                    Coastal Ecosystem Restoration

                </h3>

                <p>

                    An assessment of restoration techniques and
                    ecosystem resilience.

                </p>

                <small>

                    Published: March 2026

                </small>

                <a href="#">

                    Read Publication →

                </a>

            </div>

        </div>

        <!-- Repeat more cards -->

    </div>

</section>

{{-- RESEARCH CATEGORIES --}}
<section class="categories">

    <h2>Browse by Category</h2>

    <div class="category-grid">

        <div>🌊 Marine Science</div>

        <div>🌍 Blue Economy</div>

        <div>🌱 Climate Change</div>

        <div>💧 Water Conservation</div>

        <div>📖 Policy Briefs</div>

        <div>🔬 Technical Reports</div>

    </div>

</section>

{{-- RESEARCH IMPACT --}}
<section class="research-impact">

    <div class="impact-box">

        <h2>250+</h2>

        <span>Citations</span>

    </div>

    <div class="impact-box">

        <h2>60+</h2>

        <span>Partner Institutions</span>

    </div>

    <div class="impact-box">

        <h2>30</h2>

        <span>Countries Reached</span>

    </div>

    <div class="impact-box">

        <h2>15K+</h2>

        <span>Downloads</span>

    </div>

</section>
{{-- NEWS LETTER CTA --}}
<section class="newsletter">

    <span>STAY INFORMED</span>

    <h2>

        Receive Our Latest Publications

    </h2>

    <p>

        Subscribe to receive newly released research papers,
        technical reports and policy briefs directly in your inbox.

    </p>

    <form>

        <input
            type="email"
            placeholder="Your Email Address">

        <button>

            Subscribe

        </button>

    </form>

</section>
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
