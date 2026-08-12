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
        <link rel="stylesheet" href="{{ asset('css/leave_message.css') }}"> 

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
                        {{-- <li><a href="/leave_message">Leave a Message</li> --}}
                        <li><a href="/general_enquiries">General Enquiries</a></li>
                        </ul>
                </div>
            </div>
             
        </section>
        </header >
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
