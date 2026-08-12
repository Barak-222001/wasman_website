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
        <link rel="stylesheet" href="{{ asset('css/become_member.css') }}"> 

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
 {{-- HERO SECTION  --}}
<section class="membership-hero">

    <div class="membership-overlay">

        <div class="membership-content">

            <span>JOIN WASMAN</span>

            <h1>

                Become Part of a Growing Community
                of Women in Aquatic Science

            </h1>

            <p>

                Join researchers, students, professionals,
                policymakers and conservation practitioners
                committed to advancing aquatic science,
                environmental sustainability and the blue economy.

            </p>

            <div class="membership-buttons">

                <a href="#membership-form">

                    Apply Now

                </a>

                <a href="#categories">

                    Membership Types

                </a>

            </div>

        </div>

    </div>

</section>

{{-- WHY JOIN WASMAN --}}
<section class="why-membership">

    <div class="why-content">

        <span>WHY JOIN?</span>

        <h2>

            Empowering Women Through
            Collaboration and Leadership

        </h2>

        <p>

            WASMAN provides opportunities for professional
            networking, mentorship, collaborative research,
            leadership development, policy engagement and
            capacity building. Members become part of a
            vibrant community working together to protect
            aquatic ecosystems and promote sustainable
            development.

        </p>

    </div>

    <div class="membership-stats">

        <div>

            <h2>600+</h2>

            <span>Members</span>

        </div>

        <div>

            <h2>25+</h2>

            <span>Partner Institutions</span>

        </div>

        <div>

            <h2>18</h2>

            <span>Countries</span>

        </div>

        <div>

            <h2>120+</h2>

            <span>Mentorship Matches</span>

        </div>

    </div>

</section>

{{-- MEMBERSHIP CATEGORIES --}}
<section class="membership-categories" id="categories">

    <div class="section-title">

        <span>MEMBERSHIP TYPES</span>

        <h2>Choose the Membership That Fits You</h2>

    </div>

    <div class="category-grid">

        <div class="member-card">

            <h3>Student Intern</h3>

            <p>

                Undergraduate and postgraduate students
                pursuing studies related to aquatic science,
                marine conservation or environmental management.

            </p>

        </div>

        <div class="member-card featured">

            <h3>Volunteer</h3>

            <p>

                Researchers, lecturers, consultants,
                government officers and industry professionals.

            </p>

        </div>

        <div class="member-card">

            <h3>Research Assistant</h3>

            <p>

                Universities, NGOs, research institutes,
                government agencies and private organizations.

            </p>

        </div>

    </div>

</section>

{{-- MEMBERSHIP BENEFITS --}}
<section class="membership-benefits">

    <div class="section-title">

        <span>BENEFITS</span>

        <h2>Why Members Choose WASMAN</h2>

    </div>

    <div class="benefits-grid">

        <div class="benefit-card">

            🌍

            <h3>Networking</h3>

            <p>

                Connect with professionals and researchers
                across Africa and beyond.

            </p>

        </div>

        <div class="benefit-card">

            🎓

            <h3>Capacity Building</h3>

            <p>

                Access training, workshops and mentorship
                programmes.

            </p>

        </div>

        <div class="benefit-card">

            📚

            <h3>Research Collaboration</h3>

            <p>

                Participate in collaborative research
                and publications.

            </p>

        </div>

        <div class="benefit-card">

            🌊

            <h3>Leadership</h3>

            <p>

                Contribute to initiatives that strengthen
                aquatic science and environmental management.

            </p>

        </div>

    </div>

</section>

{{-- MEMBERSHIP JOURNEY --}}
<section class="membership-process">

    <div class="section-title">

        <span>HOW TO JOIN</span>

        <h2>Your Membership Journey</h2>

    </div>

    <div class="process-grid">

        <div>

            <h3>1</h3>

            <p>Complete the online application.</p>

        </div>

        <div>

            <h3>2</h3>

            <p>Application review by WASMAN.</p>

        </div>

        <div>

            <h3>3</h3>

            <p>Receive approval and welcome email.</p>

        </div>

        <div>

            <h3>4</h3>

            <p>Begin participating in WASMAN activities.</p>

        </div>

    </div>

</section>
{{-- ELIGIBILTY --}}
<section class="membership-eligibility">

    <div class="section-title">

        <span>ELIGIBILITY</span>

        <h2>Who Can Become a Member?</h2>

    </div>

    <div class="eligibility-grid">

        <div>✔ Students</div>

        <div>✔ Researchers</div>

        <div>✔ Academics</div>

        <div>✔ NGOs</div>

        <div>✔ Government Agencies</div>

        <div>✔ Private Sector Professionals</div>

    </div>

</section>

{{-- FAQ --}}
<section class="membership-faq">

    <div class="section-title">

        <span>FAQ</span>

        <h2>Frequently Asked Questions</h2>

    </div>

    <div class="faq-container">

        <div class="faq-item">

            <h3>

                Is membership open internationally?

            </h3>

            <p>

                Yes. WASMAN welcomes members from all countries.

            </p>

        </div>

        <div class="faq-item">

            <h3>

                Is there a membership fee?

            </h3>

            <p>

                Membership fees, where applicable,
                will be communicated during registration.

            </p>

        </div>

        <div class="faq-item">

            <h3>

                Can students become members?

            </h3>

            <p>

                Absolutely. Students are encouraged
                to participate actively.

            </p>

        </div>

    </div>

</section>

{{-- FINAL CTA --}}
<section class="membership-cta" id="membership-form">

    <span>JOIN THE NETWORK</span>

    <h2>

        Become a WASMAN Member Today

    </h2>

    <p>

        Join a diverse network of women and allies
        committed to advancing aquatic science,
        sustainable resource management and
        environmental stewardship.

    </p>

    <a href="#">

        Start Your Membership Application

    </a>

</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
