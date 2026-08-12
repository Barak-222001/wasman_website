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
        <link rel="stylesheet" href="{{ asset('css/team.css') }}">
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
 <section class="team-page">

    <div class="team-header">

        <span>OUR TEAM</span>

        <h1>Meet the Women Leading Change</h1>

        <p>
            WASMAN is driven by a passionate team of scientists, researchers,
            educators, conservationists and professionals committed to advancing
            women’s leadership in aquatic science, marine conservation and the
            sustainable blue economy.
        </p>

    </div>

    <!-- Executive Highlight -->

    <div class="executive">

        <div class="executive-image">

             <img src="{{asset('pics_vids/dr.alberta.jpeg')}}">

        </div>

        <div class="executive-content">

            <h4>Network President</h4>

            <h2>Dr. Alberta Ama Saggoe</h2>

            <p>
                Dr. Alberta Ama Saggoe  provides strategic leadership for WASMAN,
                championing scientific excellence, environmental stewardship
                and women's empowerment across Africa's aquatic science sector.
            </p>

            <p>
                Her vision is to build a strong network that nurtures future
                female leaders while promoting sustainable management of
                aquatic resources.
            </p>

        </div>

    </div>

    <!-- Leadership Team -->

    <div class="section-title">

        <h2>Executive Committee</h2>

        <p>Dedicated leaders guiding the vision and growth of WASMAN.</p>

    </div>

    <div class="team-grid">

        <div class="member">

             <img src="{{asset('pics_vids/michelle_clottey.jpeg')}}">

            <h3>Dr. Michelle Clottey</h3>

            <span>Vice President</span>

        </div>

        <div class="member">

             <img src="{{asset('pics_vids/michelle.jpeg')}}">

            <h3>Dr. Angela Brown</h3>

            <span>Secretary</span>

        </div>

        <div class="member">

             <img src="{{asset('pics_vids/dr.kassah.jpeg')}}">

            <h3>Dr. Grace Wilson</h3>

            <span>Treasurer</span>

        </div>

        <div class="member">

             <img src="{{asset('pics_vids/dr.huge.jpeg')}}">

            <h3>Dr. Rebecca Green</h3>

            <span>Programs Coordinator</span>

        </div>

    </div>

    <!-- Team Values -->

    <div class="values">

        <div class="value-box">

            <h3>Collaboration</h3>

            <p>
                Bringing together experts from diverse disciplines to solve
                complex environmental challenges.
            </p>

        </div>

        <div class="value-box">

            <h3>Innovation</h3>

            <p>
                Promoting research, creativity and scientific excellence.
            </p>

        </div>

        <div class="value-box">

            <h3>Mentorship</h3>

            <p>
                Supporting the next generation of women in aquatic science.
            </p>

        </div>

    </div>

    <!-- Join CTA -->

    <div class="join-team">

        <h2>Become Part of Our Growing Network</h2>

        <p>
            Together we can protect aquatic ecosystems, empower women,
            and create a sustainable future.
        </p>

        <a href="#">Become a Member</a>

    </div>

</section>
   
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
