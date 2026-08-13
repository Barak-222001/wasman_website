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
        <link rel="stylesheet" href="{{ asset('css/history.css') }}"> 
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
