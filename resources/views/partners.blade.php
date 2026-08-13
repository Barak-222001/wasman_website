<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
   
        <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="{{ asset('css/header.css')}}">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
>    
    </head>

    <body>

        {{-- header and nav section --}}

       <!-- =========================================================
     WASMAN MAIN HEADER
========================================================= -->

<!-- =========================================================
     WASMAN HEADER
========================================================= -->

<header class="wasman-main-header">

    <div class="wasman-header-inner">

        <!-- LOGO -->
        <a href="/" class="wasman-brand">
            <img
                src="{{ asset('pics_vids/logo.png') }}"
                alt="WASMAN Logo"
            >
        </a>


        <!-- MOBILE MENU BUTTON -->
        <button
            type="button"
            class="wasman-menu-btn"
            id="wasmanMenuBtn"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>


        <!-- NAVIGATION -->
        <nav class="wasman-nav" id="wasmanNav">

            <!-- HOME -->
            <a href="/" class="wasman-nav-item">
                <i class="fas fa-house"></i>
                <span>Home</span>
            </a>


            <!-- ABOUT -->
            <div class="wasman-nav-dropdown">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
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
                            <small>Our journey and story</small>
                        </div>
                    </a>


                    <a href="/what_we_do">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-water"></i>
                        </div>

                        <div>
                            <strong>What We Do</strong>
                            <small>Our work and activities</small>
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

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
                    <span>Projects</span>
                    <i class="fas fa-chevron-down"></i>
                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/areas_of_interest">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-compass"></i>
                        </div>

                        <div>
                            <strong>Areas Of Interest</strong>
                            <small>Our areas of focus</small>
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
                            <i class="fas fa-circle-check"></i>
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


            <!-- NEWS -->
            <div class="wasman-nav-dropdown">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
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
                            <i class="fas fa-file-lines"></i>
                        </div>

                        <div>
                            <strong>Reports</strong>
                            <small>Reports and documents</small>
                        </div>

                    </a>


                    <a href="/events">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-calendar-days"></i>
                        </div>

                        <div>
                            <strong>Events</strong>
                            <small>Upcoming activities</small>
                        </div>

                    </a>


                    <a href="/photos_videos">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-photo-film"></i>
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

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
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
                            <i class="fas fa-graduation-cap"></i>
                        </div>

                        <div>
                            <strong>Intern</strong>
                            <small>Build your experience</small>
                        </div>

                    </a>


                    <a href="/volunteer">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-heart"></i>
                        </div>

                        <div>
                            <strong>Volunteer</strong>
                            <small>Support our mission</small>
                        </div>

                    </a>


                    <a href="/research_assistant">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-flask"></i>
                        </div>

                        <div>
                            <strong>Research Assistant</strong>
                            <small>Work with our researchers</small>
                        </div>

                    </a>

                </div>

            </div>


            <!-- CONTACT -->
            <div class="wasman-nav-dropdown wasman-contact">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
                    <span>Contact Us</span>
                    <i class="fas fa-chevron-down"></i>
                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/leave_message">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-message"></i>
                        </div>

                        <div>
                            <strong>Leave a Message</strong>
                            <small>Send us a message</small>
                        </div>

                    </a>


                    <a href="/general_enquiries">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-circle-question"></i>
                        </div>

                        <div>
                            <strong>General Enquiries</strong>
                            <small>Get in touch with us</small>
                        </div>

                    </a>

                </div>

            </div>

        </nav>

    </div>

</header>


<!-- =========================================================
     FONT AWESOME
========================================================= -->


 
   <section class="partners">

    <!-- Hero -->

    <div class="partners-header">

        <span>OUR PARTNERS</span>

        <h1>Building Strong Partnerships for Sustainable Impact</h1>

        <p>
            WASMAN collaborates with institutions, organizations, governments,
            development partners and communities that share our commitment to
            advancing aquatic science, marine conservation, climate resilience
            and women's leadership.
        </p>

    </div>

    <!-- Why Partner -->

    <div class="partnership-story">

        <div class="story-content">

            <h2>Why Partnerships Matter</h2>

            <p>
                Addressing today's environmental challenges requires collective
                action. Through strategic partnerships, WASMAN brings together
                knowledge, innovation, resources and expertise to create lasting
                solutions for aquatic ecosystems and coastal communities.
            </p>

            <p>
                Our collaborations strengthen research, support capacity building,
                improve policy engagement and create opportunities for women
                working across aquatic science and environmental management.
            </p>

        </div>

        <div class="story-image">

             <img src="{{asset('pics_vids/conference.jpeg')}}">

        </div>

    </div>

    <!-- Partner Logos -->

    <div class="partner-section">

        <h2>Our Strategic Partners</h2>

        <p>
            We are proud to collaborate with organizations that support our
            vision for sustainable aquatic resource management.
        </p>

        <div class="logo-grid">

            <div class="logo-card">
                <img src="images/logo1.png">
                <h3>Partner Name</h3>
                <span>Research Institution</span>
            </div>

            <div class="logo-card">
                <img src="images/logo2.png">
                <h3>Partner Name</h3>
                <span>NGO</span>
            </div>

            <div class="logo-card">
                <img src="images/logo3.png">
                <h3>Partner Name</h3>
                <span>Government Agency</span>
            </div>

            <div class="logo-card">
                <img src="images/logo4.png">
                <h3>Partner Name</h3>
                <span>University</span>
            </div>

            <div class="logo-card">
                <img src="images/logo5.png">
                <h3>Partner Name</h3>
                <span>Development Partner</span>
            </div>

            <div class="logo-card">
                <img src="images/logo6.png">
                <h3>Partner Name</h3>
                <span>Private Sector</span>
            </div>

        </div>

    </div>

    <!-- Partnership Areas -->

    <div class="partnership-areas">

        <div class="area">

            <div class="icon">🔬</div>

            <h3>Research Collaboration</h3>

            <p>
                Joint scientific research and innovation.
            </p>

        </div>

        <div class="area">

            <div class="icon">🌊</div>

            <h3>Marine Conservation</h3>

            <p>
                Protecting aquatic ecosystems together.
            </p>

        </div>

        <div class="area">

            <div class="icon">🎓</div>

            <h3>Capacity Building</h3>

            <p>
                Training, mentorship and scholarships.
            </p>

        </div>

        <div class="area">

            <div class="icon">🤝</div>

            <h3>Policy & Advocacy</h3>

            <p>
                Influencing sustainable environmental policies.
            </p>

        </div>

    </div>

    <!-- CTA -->

    <div class="partner-cta">

        <h2>Interested in Partnering With WASMAN?</h2>

        <p>
            Join our growing network of institutions and organizations working
            towards healthy aquatic ecosystems and empowered women leaders.
        </p>

        <a href="/become_member">Become a Partner</a>

    </div>

</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
