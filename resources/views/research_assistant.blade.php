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
        <link rel="stylesheet" href="{{ asset('css/research_assistant.css') }}"> 

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
 {{-- HERO SECTION --}}
 <section class="research-hero">

    <div class="research-overlay">

        <div class="research-content">

            <span>RESEARCH ASSISTANCE</span>

            <h1>

                Supporting Research.
                Advancing Knowledge.
                Protecting Aquatic Ecosystems.

            </h1>

            <p>

                WASMAN provides research support and
                collaboration opportunities to advance
                aquatic science, marine conservation,
                climate research and sustainable blue
                economy solutions.

            </p>


            <div class="research-buttons">

                <a href="#request-form">

                    Request Assistance

                </a>


                <a href="#services">

                    Explore Services

                </a>

            </div>


        </div>

    </div>

</section>

{{-- ABOUT RESEARCH SUPPORT --}}
<section class="research-about">


    <div class="research-image">

        <img 
        src="images/research-team.jpg"
        alt="Aquatic Research">

    </div>


    <div class="research-text">

        <span>OUR RESEARCH SUPPORT</span>


        <h2>

            Building Knowledge Through
            Collaboration and Innovation

        </h2>


        <p>

            WASMAN supports researchers, institutions,
            students and conservation practitioners by
            facilitating access to expertise, research
            networks, field support and knowledge-sharing
            opportunities.

        </p>


        <p>

            Through collaboration across aquatic science,
            climate resilience and blue economy fields,
            WASMAN contributes to evidence-based solutions
            for sustainable water resource management.

        </p>


    </div>


</section> 
 {{--RESEARCH ASSISTANCE AREAS  --}}
<section class="research-areas">


<div class="section-title">

<span>RESEARCH AREAS</span>

<h2>
Areas We Support
</h2>

</div>



<div class="research-grid">


<div class="research-card">

<h3>
Marine Conservation
</h3>

<p>

Research activities focused on marine biodiversity,
ecosystem protection and conservation strategies.

</p>

</div>



<div class="research-card">

<h3>
Aquatic Ecology
</h3>

<p>

Support for studies involving freshwater and
marine ecosystems.

</p>

</div>




<div class="research-card">

<h3>
Climate Change
</h3>

<p>

Research on climate impacts, adaptation and
environmental resilience.

</p>

</div>




<div class="research-card">

<h3>
Blue Economy
</h3>

<p>

Supporting sustainable ocean-based economic
research and innovation.

</p>

</div>



<div class="research-card">

<h3>
Fisheries Research
</h3>

<p>

Studies supporting sustainable fisheries
management and livelihoods.

</p>

</div>



<div class="research-card">

<h3>
Water Resources
</h3>

<p>

Research related to water conservation and
management.

</p>

</div>



</div>


</section>
{{-- SERVICES WE PROVIDE --}}
<section class="research-services" id="services">


<div class="section-title">

<span>OUR SERVICES</span>

<h2>
How We Support Researchers
</h2>

</div>



<div class="services-grid">


<div>

<h3>
Field Research Support
</h3>

<p>

Assistance with field activities,
sample collection and community engagement.

</p>

</div>



<div>

<h3>
Data Collection & Analysis
</h3>

<p>

Support in organizing, processing and
interpreting research data.

</p>

</div>



<div>

<h3>
Research Networking
</h3>

<p>

Connecting researchers with experts,
institutions and collaborators.

</p>

</div>



<div>

<h3>
Knowledge Sharing
</h3>

<p>

Supporting publications, workshops
and research dissemination.

</p>

</div>


</div>


</section>
{{-- RESEARCH COLLABORATION NETWORK --}}
<section class="research-network">


<div class="network-content">


<span>
COLLABORATION
</span>


<h2>

Connecting Researchers Across
Aquatic Science Communities

</h2>


<p>

WASMAN brings together scientists,
academics, students, policymakers and
environmental professionals to encourage
collaborative research and knowledge exchange.

</p>



<div class="network-stats">


<div>

<h2>
100+
</h2>

<span>
Researchers
</span>

</div>



<div>

<h2>
30+
</h2>

<span>
Institutions
</span>

</div>



<div>

<h2>
50+
</h2>

<span>
Research Projects
</span>

</div>



</div>


</div>


</section>
{{-- RESEARCH PROCESS --}}
<section class="research-process">


<div class="section-title">

<span>
HOW IT WORKS
</span>

<h2>
Research Assistance Process
</h2>

</div>



<div class="process-grid">


<div>

<h3>
1
</h3>

<p>

Submit your research request.

</p>

</div>


<div>

<h3>
2
</h3>

<p>

Request review and assessment.

</p>

</div>


<div>

<h3>
3
</h3>

<p>

Connect with appropriate experts.

</p>

</div>


<div>

<h3>
4
</h3>

<p>

Receive research support.

</p>

</div>


</div>


</section>
{{-- WHO CAN REQUEST SUPPORT --}}
<section class="research-eligibility">


<div class="section-title">

<span>
ELIGIBILITY
</span>

<h2>
Who We Support
</h2>

</div>



<div class="eligibility-grid">


<div>
Researchers
</div>


<div>
University Students
</div>


<div>
Academic Institutions
</div>


<div>
Government Agencies
</div>


<div>
NGOs
</div>


<div>
Environmental Organizations
</div>


</div>


</section>
{{-- RESEARCH ASSISTANCE REQUEST FORM --}}
<section 
class="research-form"
id="request-form">


<div class="section-title">

<span>
REQUEST SUPPORT
</span>


<h2>
Research Assistance Form
</h2>


</div>



<form>


<div class="form-grid">


<input 
type="text"
placeholder="Full Name"
>


<input 
type="email"
placeholder="Email Address"
>



<input 
type="text"
placeholder="Institution / Organization"
>



<input 
type="text"
placeholder="Research Topic"
>



<select>

<option>
Research Area
</option>

<option>
Marine Conservation
</option>

<option>
Aquatic Ecology
</option>

<option>
Climate Change
</option>

<option>
Blue Economy
</option>

<option>
Fisheries
</option>

</select>



<input 
type="text"
placeholder="Expected Research Timeline"
>


</div>



<textarea
placeholder="
Describe your research needs and assistance required.
">
</textarea>



<input 
type="file"
>



<button>

Submit Request

</button>



</form>


</section>
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
