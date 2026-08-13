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
        <link rel="stylesheet" href="{{ asset('css/leave_message.css') }}"> 

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
 {{-- LEAVE A MESSAGE --}}
 <section class="message-hero">

    <div class="message-overlay">

        <div class="message-content">

            <span>GET IN TOUCH</span>

            <h1>

                Your Voice Matters.
                Let's Start A Conversation.

            </h1>


            <p>

                Whether you have a question, collaboration
                idea, research inquiry or simply want to
                connect with WASMAN, we are always ready
                to listen.

            </p>


            <a href="#message-form">

                Leave A Message

            </a>


        </div>

    </div>

</section>
{{-- CONNECT WITH WASMAN --}}
<section class="connect-section">


<div class="connect-image">


<img 
src="images/contact-team.jpg"
alt="WASMAN Team">


</div>



<div class="connect-text">


<span>
CONNECT WITH US
</span>


<h2>

Building Conversations
That Create Impact

</h2>


<p>

WASMAN believes meaningful change begins
with communication and collaboration.
We welcome researchers, students,
communities, organizations and partners
to share ideas and explore opportunities
for engagement.

</p>



<ul>

<li>
Research inquiries
</li>


<li>
Partnership opportunities
</li>


<li>
Membership information
</li>


<li>
Environmental initiatives
</li>


<li>
General enquiries
</li>


</ul>


</div>


</section>
{{-- MESSAGE CATEGORIES --}}
<section class="message-categories">


<div class="section-title">

<span>
HOW CAN WE HELP?
</span>

<h2>
Choose Your Message Type
</h2>

</div>



<div class="category-grid">


<div class="category-card">

<h3>
General Inquiry
</h3>

<p>

For questions about WASMAN,
activities and programmes.

</p>

</div>



<div class="category-card">

<h3>
Research Collaboration
</h3>

<p>

For researchers seeking support
or partnerships.

</p>

</div>



<div class="category-card">

<h3>
Partnership Request
</h3>

<p>

For organizations interested
in working with WASMAN.

</p>

</div>



<div class="category-card">

<h3>
Membership Support
</h3>

<p>

For assistance with joining
the WASMAN network.

</p>

</div>



</div>


</section>
{{-- CONTACT INFO --}}
<section class="contact-information">


<div class="section-title">

<span>
CONTACT DETAILS
</span>


<h2>
Reach Us Directly
</h2>


</div>



<div class="contact-grid">


<div>

<h3>
📍 Address
</h3>


<p>

WASMAN Headquarters

University / Research Centre Address

</p>

</div>




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



</div>


</section>
{{-- LEAVE A MESSAGE FORM --}}
<section 
class="leave-message-form"
id="message-form">



<div class="section-title">


<span>
SEND MESSAGE
</span>


<h2>

Leave Us A Message

</h2>


</div>




<form>



<div class="form-grid">


<input 
type="text"
placeholder="Full Name"
required
>




<input
type="email"
placeholder="Email Address"
required
>




<input
type="tel"
placeholder="Phone Number"
>




<select>


<option>
Message Category
</option>


<option>
General Inquiry
</option>


<option>
Research Collaboration
</option>


<option>
Partnership
</option>


<option>
Membership
</option>


</select>


</div>




<textarea

placeholder="
Write your message here...
"

></textarea>




<div class="file-area">


<label>

Attach Document (Optional)

</label>


<input 
type="file"
>


</div>




<button>

Send Message

</button>



</form>



</section>
{{-- FAQ --}}
<section class="message-faq">


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
How long does WASMAN take to respond?
</h3>


<p>

We usually respond within a few
working days.

</p>


</div>




<div>

<h3>
Can organizations partner with WASMAN?
</h3>


<p>

Yes. We welcome partnerships
that support aquatic conservation
and research.

</p>


</div>




<div>

<h3>
Can students contact WASMAN?
</h3>


<p>

Students interested in research,
internships and volunteering are
welcome.

</p>


</div>



</div>



</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
