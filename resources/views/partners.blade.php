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
        <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
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

                        {{-- <li><a href="/partners">Partners</a></li> --}}
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

        <a href="#">Become a Partner</a>

    </div>

</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
