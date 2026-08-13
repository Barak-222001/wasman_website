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
        <link rel="stylesheet" href="{{ asset('css/what_we_do.css') }}"> 
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
<section class="what-we-do">

    <div class="section-header">
        <span>WHAT WE DO</span>
        <h1>Driving Change Through Science, Collaboration and Innovation</h1>

        <p>
            WASMAN promotes sustainable management of aquatic resources by
            empowering women through research, leadership, innovation,
            advocacy and environmental stewardship.
        </p>
    </div>

    <!-- Featured Area -->

    <div class="featured-card">

        <div class="featured-image">
             <img src="{{asset('pics_vids/dr.fish.jpeg')}}">
        </div>

        <div class="featured-text">

            <h2>Research & Scientific Innovation</h2>

            <p>
                We support multidisciplinary research that advances knowledge
                in aquatic science, fisheries, freshwater systems, marine
                biodiversity and climate resilience.
            </p>

            <a href="/publications">Learn More</a>

        </div>

    </div>

    <!-- Activities -->

    <div class="activities">

        <div class="activity">

             <img src="{{asset('pics_vids/in_pool.jpg')}}">

            <h3>Marine Conservation</h3>

            <p>
                Protecting coastal ecosystems, mangroves and marine protected
                areas through research and advocacy.
            </p>

        </div>

        <div class="activity">

             <img src="{{asset('pics_vids/dolphin.jpg')}}">

            <h3>Blue Economy</h3>

            <p>
                Supporting sustainable livelihoods and responsible use of
                aquatic resources.
            </p>

        </div>

        <div class="activity">

             <img src="{{asset('pics_vids/six.jpeg')}}">

            <h3>Capacity Building</h3>

            <p>
                Workshops, mentorship programmes and leadership development
                for women in aquatic science.
            </p>

        </div>

    </div>

    <!-- Banner -->

    <div class="banner">

         <img src="{{asset('pics_vids/one.jpg')}}">

    </div>

    <!-- More Activities -->

    <div class="activities">

        <div class="activity">

             <img src="{{asset('pics_vids/cannoe.jpeg')}}">

            <h3>Policy & Advocacy</h3>

            <p>
                Influencing environmental policies that promote sustainable
                water and marine resource management.
            </p>

        </div>

        <div class="activity">

             <img src="{{asset('pics_vids/six.jpeg')}}">

            <h3>Community Engagement</h3>

            <p>
                Working with coastal communities to promote environmental
                awareness and conservation.
            </p>

        </div>

        <div class="activity">

             <img src="{{asset('pics_vids/conference.jpeg')}}">

            <h3>Strategic Partnerships</h3>

            <p>
                Collaborating with universities, governments and international
                organizations to maximize impact.
            </p>

        </div>

    </div>

</section>
<!-- ================= FOOTER ================= -->

<footer class="footer">

    <div class="footer-top">

        <div class="footer-newsletter">

            <h2>Join the WASMAN Community</h2>

            <p>
                Stay informed about our latest research, conservation projects,
                training programmes, events and opportunities for collaboration.
            </p>

        </div>

        <form class="subscribe-form">

            <input type="email" placeholder="Enter your email address">

            <button type="submit">
                Subscribe
            </button>

        </form>

    </div>


    <div class="footer-content">

        <!-- About -->

        <div class="footer-box">

            <h3>WASMAN</h3>

            <p>
                Women in Aquatic Science and Management Network (WASMAN) is committed
                to advancing women's leadership, scientific excellence and
                collaboration in aquatic science, marine conservation, climate
                resilience and sustainable blue economy initiatives.
            </p>

        </div>


        <!-- Quick Links -->

        <div class="footer-box">

            <h3>Quick Links</h3>

            <ul>

                <li><a href="/">Home</a></li>

                <li><a href="/history">History</a></li>

                <li><a href="/what_we_do">What We Do</a></li>

                <li><a href="/ongoing">Projects</a></li>

                <li><a href="/become_member">Membership</a></li>

                <li><a href="/general_enquiries">Contact</a></li>

            </ul>

        </div>


        <!-- Focus Areas -->

        <div class="footer-box">

            <h3>Focus Areas</h3>

            <ul>

                <li>Aquatic Science</li>

                <li>Marine Protected Areas</li>

                <li>Blue Economy</li>

                <li>Climate Resilience</li>

                <li>Water Conservation</li>

                <li>Women's Leadership</li>

            </ul>

        </div>


        <!-- Contact -->

        <div class="footer-box">

            <h3>Contact Us</h3>

            <p>
                <strong>Email</strong><br>
                info@wasman.org
            </p>

            <p>
                <strong>Phone</strong><br>
                +233 XX XXX XXXX
            </p>

            <p>
                <strong>Location</strong><br>
                Cape Coast, Ghana
            </p>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network (WASMAN). All Rights Reserved.
        </p>

        <div class="social-icons">

            <a href="#"><i class="fa-solid fa-globe"></i></a>

            <!-- <a href="#"><i class="fab fa-instagram"></i></a> -->

            <a href="#"><i class="fab fa-linkedin-in"></i></a>

            <!-- <a href="#"><i class="fab fa-x-twitter"></i></a> -->

            <a href="#"><i class="fab fa-youtube"></i></a>

        </div>

    </div>

</footer>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
