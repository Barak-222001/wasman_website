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
        <link rel="stylesheet" href="{{ asset('css/volunteer.css') }}"> 

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
<section class="volunteer-hero">

    <div class="volunteer-overlay">

        <div class="volunteer-content">

            <span>VOLUNTEER WITH WASMAN</span>

            <h1>

                Be the Change.
                Protect Our Waters.
                Inspire Communities.

            </h1>

            <p>

                Join a growing network of passionate volunteers
                committed to marine conservation, environmental
                education, climate action and sustainable aquatic
                resource management.

            </p>

            <div class="volunteer-buttons">

                <a href="#application">

                    Become a Volunteer

                </a>

                <a href="#opportunities">

                    Explore Opportunities

                </a>

            </div>

        </div>

    </div>

</section>
{{-- WHY VOLUNTEER --}}
<section class="why-volunteer">

    <div class="volunteer-image">

        <img src="images/volunteer-team.jpg" alt="Volunteer Team">

    </div>

    <div class="volunteer-text">

        <span>MAKE AN IMPACT</span>

        <h2>

            Together We Can
            Protect Aquatic Ecosystems

        </h2>

        <p>

            Volunteers are the heartbeat of WASMAN. Whether
            you're participating in coastal clean-ups,
            supporting community outreach, assisting research
            activities or promoting environmental awareness,
            your contribution helps create healthier aquatic
            ecosystems and stronger coastal communities.

        </p>

        <ul>

            <li>Environmental conservation activities</li>

            <li>Community outreach programmes</li>

            <li>Educational campaigns</li>

            <li>Research support</li>

            <li>Event coordination</li>

        </ul>

    </div>

</section>
 {{-- VOLUNTEER OPPORTUNITIES --}}
<section class="volunteer-opportunities" id="opportunities">

    <div class="section-title">

        <span>OPPORTUNITIES</span>

        <h2>Volunteer Roles</h2>

    </div>

    <div class="opportunity-grid">

        <div class="volunteer-card">

            <h3>Community Outreach</h3>

            <p>

                Help educate communities on aquatic conservation.

            </p>

        </div>

        <div class="volunteer-card">

            <h3>Research Assistant</h3>

            <p>

                Support data collection and field activities.

            </p>

        </div>

        <div class="volunteer-card">

            <h3>Event Volunteer</h3>

            <p>

                Assist with conferences and workshops.

            </p>

        </div>

        <div class="volunteer-card">

            <h3>Media & Communications</h3>

            <p>

                Support storytelling and digital engagement.

            </p>

        </div>

    </div>

</section>
{{-- IMPACT SECTION --}}
<section class="volunteer-impact">

    <div class="section-title">

        <span>OUR IMPACT</span>

        <h2>Volunteers Making a Difference</h2>

    </div>

    <div class="impact-grid">

        <div>

            <h2>350+</h2>

            <span>Active Volunteers</span>

        </div>

        <div>

            <h2>120</h2>

            <span>Community Projects</span>

        </div>

        <div>

            <h2>50+</h2>

            <span>Beach Clean-ups</span>

        </div>

        <div>

            <h2>20</h2>

            <span>Regions Reached</span>

        </div>

    </div>

</section>
{{-- SKILLS WE NEED --}}
<section class="skills-needed">

    <div class="section-title">

        <span>YOUR SKILLS MATTER</span>

        <h2>Ways You Can Contribute</h2>

    </div>

    <div class="skills-grid">

        <div>Marine Science</div>

        <div>Photography</div>

        <div>Graphic Design</div>

        <div>Research</div>

        <div>Teaching</div>

        <div>GIS</div>

        <div>Communications</div>

        <div>Fundraising</div>

    </div>

</section>
{{-- VOLUNTEER JOURNEY --}}
<section class="volunteer-process">

    <div class="section-title">

        <span>HOW IT WORKS</span>

        <h2>Volunteer Journey</h2>

    </div>

    <div class="process-grid">

        <div>

            <h3>1</h3>

            <p>Submit application.</p>

        </div>

        <div>

            <h3>2</h3>

            <p>Volunteer orientation.</p>

        </div>

        <div>

            <h3>3</h3>

            <p>Choose your activity.</p>

        </div>

        <div>

            <h3>4</h3>

            <p>Start making an impact.</p>

        </div>

    </div>

</section>

{{-- APPLICATION FORM --}}
<section class="volunteer-form" id="application">

    <div class="section-title">

        <span>JOIN US</span>

        <h2>Volunteer Application</h2>

    </div>

    <form>

        <div class="form-grid">

            <input type="text" placeholder="Full Name" required>

            <input type="email" placeholder="Email Address" required>

            <input type="tel" placeholder="Phone Number">

            <input type="text" placeholder="Country">

            <select>

                <option>

                    Preferred Volunteer Area

                </option>

                <option>

                    Community Outreach

                </option>

                <option>

                    Research

                </option>

                <option>

                    Conservation

                </option>

                <option>

                    Communications

                </option>

            </select>

            <input type="date">

        </div>

        <textarea
            rows="6"
            placeholder="Tell us why you would like to volunteer with WASMAN."
        ></textarea>

        <button>

            Become a Volunteer

        </button>

    </form>

</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
