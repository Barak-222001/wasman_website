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
        <link rel="stylesheet" href="{{ asset('css/intern.css') }}"> 

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

                        {{-- <li><a href="/intern">Intern</a></li> --}}

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
