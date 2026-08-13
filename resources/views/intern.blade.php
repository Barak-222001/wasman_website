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
        <link rel="stylesheet" href="{{ asset('css/intern.css') }}"> 

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
 <section class="intern-hero">

    <div class="hero-overlay">

        <div class="hero-content">

            <span>INTERNSHIP PROGRAMME</span>

            <h1>

                Gain Practical Experience
                in Aquatic Science and
                Environmental Management

            </h1>

            <p>

                Join WASMAN's internship programme and work
                alongside researchers, conservationists,
                policymakers and professionals dedicated to
                protecting aquatic ecosystems and advancing
                sustainable development.

            </p>

            <div class="hero-buttons">

                <a href="#application-form">

                    Apply Now

                </a>

                <a href="#opportunities">

                    View Opportunities

                </a>

            </div>

        </div>

    </div>

</section>
{{-- WHY INTERN WITH WASMAN --}}
<section class="intern-about">

    <div class="about-content">

        <span>WHY CHOOSE US?</span>

        <h2>

            Learn, Innovate,
            and Make an Impact

        </h2>

        <p>

            WASMAN provides practical learning experiences
            that combine scientific research, community
            engagement, environmental advocacy and
            professional development. Interns work with
            experienced mentors while contributing to
            meaningful conservation initiatives.

        </p>

    </div>

    <div class="intern-stats">

        <div>

            <h2>150+</h2>

            <span>Interns Trained</span>

        </div>

        <div>

            <h2>30+</h2>

            <span>Projects Supported</span>

        </div>

        <div>

            <h2>20</h2>

            <span>Partner Institutions</span>

        </div>

        <div>

            <h2>12</h2>

            <span>Countries</span>

        </div>

    </div>

</section>
{{-- INTERNSHIP OPPOTUNITIES --}}
<section class="internships" id="opportunities">

    <div class="section-title">

        <span>OPPORTUNITIES</span>

        <h2>Current Internship Positions</h2>

    </div>

    <div class="intern-grid">

        <div class="intern-card">

            <h3>

                Marine Research Intern

            </h3>

            <p>

                Assist researchers with marine biodiversity,
                fisheries and coastal ecosystem studies.

            </p>

        </div>

        <div class="intern-card">

            <h3>

                GIS & Data Analysis Intern

            </h3>

            <p>

                Support data collection,
                visualization and mapping projects.

            </p>

        </div>

        <div class="intern-card">

            <h3>

                Communications Intern

            </h3>

            <p>

                Create content for newsletters,
                social media and public awareness campaigns.

            </p>

        </div>

    </div>

</section>
{{-- AREAS OF PLACEMENT --}}
<section class="placement">

    <div class="section-title">

        <span>PLACEMENT AREAS</span>

        <h2>Where You Can Contribute</h2>

    </div>

    <div class="placement-grid">

        <div>Marine Conservation</div>

        <div>Blue Economy</div>

        <div>Climate Change</div>

        <div>Water Resources</div>

        <div>Research & Innovation</div>

        <div>Policy & Advocacy</div>

    </div>

</section>
{{-- BENEFITS --}}
<section class="intern-benefits">

    <div class="section-title">

        <span>BENEFITS</span>

        <h2>What You'll Gain</h2>

    </div>

    <div class="benefits-grid">

        <div class="benefit-card">

            🎓

            <h3>Professional Mentorship</h3>

        </div>

        <div class="benefit-card">

            🌍

            <h3>Field Experience</h3>

        </div>

        <div class="benefit-card">

            📚

            <h3>Research Opportunities</h3>

        </div>

        <div class="benefit-card">

            🤝

            <h3>Networking</h3>

        </div>

    </div>

</section>
{{-- INTERNSHIP TIMELINE --}}
<section class="intern-process">

    <div class="section-title">

        <span>APPLICATION PROCESS</span>

        <h2>How It Works</h2>

    </div>

    <div class="process-grid">

        <div>

            <h3>1</h3>

            <p>Submit application.</p>

        </div>

        <div>

            <h3>2</h3>

            <p>Application review.</p>

        </div>

        <div>

            <h3>3</h3>

            <p>Interview.</p>

        </div>

        <div>

            <h3>4</h3>

            <p>Begin internship.</p>

        </div>

    </div>

</section>
{{-- ELIGIBILITY --}}
<section class="eligibility">

    <div class="section-title">

        <span>WHO CAN APPLY?</span>

        <h2>Eligibility Requirements</h2>

    </div>

    <ul class="requirements">

        <li>Current undergraduate or postgraduate student.</li>

        <li>Recent graduate.</li>

        <li>Interest in aquatic science or related fields.</li>

        <li>Good communication and teamwork skills.</li>

        <li>Commitment to environmental sustainability.</li>

    </ul>

</section>
{{-- APPLICATION FORM --}}
<section class="application-form" id="application-form">

    <div class="section-title">

        <span>APPLY NOW</span>

        <h2>Internship Application Form</h2>

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
                required
            >

            <input
                type="text"
                placeholder="Institution / University"
            >

            <input
                type="text"
                placeholder="Programme of Study"
            >

            <select required>

                <option>

                    Preferred Internship Area

                </option>

                <option>Marine Research</option>

                <option>Blue Economy</option>

                <option>Climate Change</option>

                <option>Water Resources</option>

                <option>Communications</option>

                <option>GIS & Data Analysis</option>

            </select>

        </div>

        <textarea
            rows="6"
            placeholder="Tell us why you would like to intern with WASMAN."
        ></textarea>

        <label>

            Upload CV

        </label>

        <input type="file">

        <button type="submit">

            Submit Application

        </button>

    </form>

</section>
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
