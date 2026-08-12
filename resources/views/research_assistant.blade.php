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
        <link rel="stylesheet" href="{{ asset('css/research_assistant.css') }}"> 

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
