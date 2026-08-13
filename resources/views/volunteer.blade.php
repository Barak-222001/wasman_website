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
        <link rel="stylesheet" href="{{ asset('css/volunteer.css') }}"> 

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
