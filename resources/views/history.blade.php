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
        <link rel="stylesheet" href="{{ asset('css/history.css') }}"> 
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
<section class="history-section">

    <section class="history">

    <div class="title">
        <span>OUR HISTORY</span>
        <h1>Women in Aquatic Science and Management Network (WASMAN)</h1>
        <p>
            Empowering women to lead scientific innovation, conservation,
            climate resilience and sustainable aquatic resource management.
        </p>
    </div>

    <!-- Organization Overview -->
    <div class="history-row">

        <div class="history-image">
            <img src="{{asset('pics_vids/conference.jpeg')}}">
        </div>

        <div class="history-content">
            <h2>Organization Overview</h2>

            <p>
                The Women in Aquatic Science and Management Network (WASMAN) is a
                professional network dedicated to advancing women's participation,
                leadership and excellence in aquatic sciences, marine conservation,
                fisheries, climate resilience and the blue economy.
            </p>

            <p>
                The network serves as a platform that connects researchers,
                professionals, students, policymakers and environmental advocates
                who are committed to protecting aquatic ecosystems while promoting
                sustainable development.
            </p>

        </div>

    </div>


    <!-- What is WASMAN -->
    <div class="history-row reverse">

        <div class="history-image">
            <img src="{{asset('pics_vids/six.jpeg')}}">
        </div>

        <div class="history-content">
            <h2>What is WASMAN?</h2>

            <p>
                WASMAN is an inclusive community where women collaborate, mentor,
                conduct research, share knowledge and build partnerships that
                strengthen aquatic science and environmental management.
            </p>

            <p>
                Through training programmes, networking opportunities, research,
                advocacy and outreach, the network contributes to marine protected
                areas, sustainable fisheries, biodiversity conservation, water
                security and the responsible growth of the blue economy.
            </p>

        </div>

    </div>


    <!-- Inspiration -->
    <div class="history-row">

        <div class="history-image">
            <img src="{{asset('pics_vids/one.jpg')}}">
        </div>

        <div class="history-content">

            <h2>What Inspired the Establishment of WASMAN?</h2>

            <p>
                WASMAN was inspired by the need to create greater opportunities for
                women whose contributions to aquatic sciences and environmental
                management often remain underrepresented despite their expertise and
                impact.
            </p>

            <p>
                Increasing challenges such as climate change, marine pollution,
                biodiversity loss and water insecurity demonstrated the importance
                of building a strong network where women can collaborate, innovate,
                mentor future leaders and influence policy.
            </p>

        </div>

    </div>


    <!-- Purpose -->
    <div class="history-row reverse">

        <div class="history-image">
            <img src="{{asset('pics_vids/five.jpg')}}">
        </div>

        <div class="history-content">

            <h2>Why WASMAN Was Created</h2>

            <p>
                WASMAN was established to empower women through mentorship,
                leadership development, scientific collaboration and professional
                networking while encouraging innovation in aquatic science and
                environmental sustainability.
            </p>

            <p>
                The network also seeks to inspire future generations of women to
                pursue careers in aquatic sciences and become leaders in protecting
                marine and freshwater ecosystems for sustainable development.
            </p>

        </div>

    </div>
    
</section> 
  
<footer class="footer">

    <div class="footer-container">

        <!-- About -->
        <div class="footer-column">
            <h2>WASMAN</h2>

            <p>
                The Women in Aquatic Science and Management Network (WASMAN)
                is committed to empowering women through research, leadership,
                collaboration and innovation in aquatic science, marine
                conservation, climate resilience and the blue economy.
            </p>
        </div>

        <!-- Quick Links -->
        <div class="footer-column">
            <h3>Quick Links</h3>

            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/history">History</a></li>
                <li><a href="/ongoing">Projects</a></li>
                <li><a href="/become_member">Membership</a></li>
                <li><a href="/events">Events</a></li>
                <li><a href="/photos_videos">Gallery</a></li>
                <li><a href="/general_enquiries">Contact</a></li>
            </ul>

        </div>

        <!-- Focus Areas -->
        <div class="footer-column">

            <h3>Focus Areas</h3>

            <ul>
                <li>Aquatic Science</li>
                <li>Marine Protected Areas</li>
                <li>Blue Economy</li>
                <li>Climate Change</li>
                <li>Water Conservation</li>
                <li>Research & Innovation</li>
            </ul>

        </div>

        <!-- Contact -->
        <div class="footer-column">

            <h3>Contact Us</h3>

            <p><strong>Email:</strong><br>
            info@wasman.org</p>

            <p><strong>Phone:</strong><br>
            +233 XX XXX XXXX</p>

            <p><strong>Location:</strong><br>
            Cape Coast, Ghana</p>

        </div>

    </div>

    <hr>

    <div class="footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network (WASMAN). All Rights Reserved.
        </p>

        <div class="social-links">

            <!-- <a href="#"><i class="fab fa-facebook-f"></i></a> -->
             <a href="#"><i class="fa-solid fa-globe"></i></a>

            <a href="#"><i class="fab fa-linkedin-in"></i></a>

            <!-- <a href="#"><i class="fab fa-instagram"></i></a> -->

            <!-- <a href="#"><i class="fab fa-x-twitter"></i></a> -->

            <a href="#"><i class="fab fa-youtube"></i></a>

        </div>

    </div>

</footer>

<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

 
   
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
