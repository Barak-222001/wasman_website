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
        <link rel="stylesheet" href="{{ asset('css/general_enquiries.css') }}"> 

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
<section class="enquiry-hero">


    <div class="enquiry-overlay">


        <div class="enquiry-content">


            <span>
                GENERAL ENQUIRIES
            </span>



            <h1>

                We Are Here To
                Answer Your Questions

            </h1>




            <p>

                Need information about WASMAN's
                programmes, membership, research,
                partnerships or activities?
                Our team is ready to assist you.

            </p>



            <a href="#enquiry-form">

                Submit An Enquiry

            </a>


        </div>


    </div>


</section>
{{-- ABOUT ENQUIRY DESK --}}
<section class="enquiry-about">


    <div class="enquiry-image">


        <img 
        src="images/enquiry-team.jpg"
        alt="WASMAN Support Team">


    </div>



    <div class="enquiry-text">


        <span>
            CUSTOMER SUPPORT
        </span>



        <h2>

            Connecting You With
            The Right Information

        </h2>



        <p>

            The WASMAN enquiry desk serves as the
            first point of contact for individuals,
            organizations, researchers and partners
            seeking information about our activities
            and opportunities.

        </p>




        <p>

            Whether you are interested in joining
            the network, collaborating on research,
            supporting conservation initiatives or
            learning about our programmes, we are
            happy to guide you.

        </p>


    </div>


</section>
{{-- AREAS OF ENQUIRIES --}}
<section class="enquiry-areas">


<div class="section-title">

<span>
WHAT CAN WE HELP WITH?
</span>


<h2>
Areas Of Enquiry
</h2>


</div>




<div class="enquiry-grid">



<div class="enquiry-card">

<h3>

Membership

</h3>


<p>

Questions about joining WASMAN,
membership benefits and registration.

</p>


</div>




<div class="enquiry-card">

<h3>

Research Support

</h3>


<p>

Information about research
collaboration and assistance.

</p>


</div>





<div class="enquiry-card">

<h3>

Internships

</h3>


<p>

Enquiries about internship
opportunities and applications.

</p>


</div>





<div class="enquiry-card">

<h3>

Volunteer Programmes

</h3>


<p>

Information about volunteering
and conservation activities.

</p>


</div>





<div class="enquiry-card">

<h3>

Partnerships

</h3>


<p>

Collaboration opportunities for
organizations and institutions.

</p>


</div>





<div class="enquiry-card">

<h3>

Events & Publications

</h3>


<p>

Questions about conferences,
reports and publications.

</p>


</div>



</div>


</section>
{{-- WHO CAN CONTACT WASMAN --}}
<section class="enquiry-users">


<div class="section-title">

<span>
WHO WE SUPPORT
</span>


<h2>

Our Enquiry Services Are Open To

</h2>

</div>




<div class="user-grid">


<div>

<h3>
Students
</h3>

<p>

Seeking opportunities,
research support and learning resources.

</p>

</div>



<div>

<h3>
Researchers
</h3>

<p>

Looking for collaboration,
data and scientific networks.

</p>

</div>




<div>

<h3>
Organizations
</h3>

<p>

Interested in partnerships
and conservation projects.

</p>

</div>




<div>

<h3>
Communities
</h3>

<p>

Seeking environmental awareness
and engagement opportunities.

</p>

</div>



</div>


</section>
{{-- CONTACT CHANNELS --}}
<section class="enquiry-contact">


<div class="section-title">

<span>
CONTACT OPTIONS
</span>


<h2>

Reach WASMAN Through

</h2>

</div>



<div class="channel-grid">


<div>

<h3>
📧 Email
</h3>

<p>

info@wasman.org

</p>

</div>



<div>

<h3>
☎ Phone
</h3>

<p>

+233 XXX XXX XXX

</p>

</div>




<div>

<h3>
📍 Office
</h3>

<p>

WASMAN Secretariat

Research Centre Address

</p>

</div>



</div>



</section>
{{-- GENERAL ENQUIRY FORM --}}
<section 
class="enquiry-form"
id="enquiry-form">


<div class="section-title">


<span>
SEND YOUR QUESTION
</span>


<h2>

General Enquiry Form

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
type="tel"
placeholder="Phone Number"
>



<select>


<option>

Select Enquiry Type

</option>


<option>

Membership

</option>


<option>

Research

</option>


<option>

Partnership

</option>


<option>

Internship

</option>


<option>

Volunteer

</option>


</select>



</div>




<textarea

placeholder="
Write your enquiry here...
"

></textarea>




<button>

Submit Enquiry

</button>


</form>



</section>
{{-- QUICK ANSWERS FAQ --}}
<section class="enquiry-faq">


<div class="section-title">

<span>
FAQ
</span>


<h2>

Frequently Asked Questions

</h2>


</div>




<div class="faq-grid">


<div>

<h3>

How can I join WASMAN?

</h3>


<p>

You can apply through the membership
section of our website.

</p>


</div>




<div>

<h3>

Does WASMAN support student research?

</h3>


<p>

Yes. Students can request research
support and collaboration opportunities.

</p>


</div>




<div>

<h3>

Can organizations partner with WASMAN?

</h3>


<p>

Yes. We welcome institutions working
towards aquatic conservation and blue
economy development.

</p>


</div>



</div>


</section>
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
