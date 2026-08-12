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
        <link rel="stylesheet" href="{{ asset('css/areas_of_interests.css') }}"> 
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
                        {{-- <li><a href="/areas_of_interest">Areas Of Interest</a></li> --}}
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

<!-- =========================
      AREAS OF INTEREST
========================== -->

<section class="interest-hero">

    <div class="hero-overlay">

        <div class="hero-content">

            <span>OUR AREAS OF INTEREST</span>

            <h1>
                Driving Scientific Excellence for Healthy Waters,
                Thriving Ecosystems and Resilient Communities
            </h1>

            <p>
                At WASMAN, our work spans research, conservation, innovation and
                community engagement, creating opportunities for women to lead
                sustainable solutions for aquatic ecosystems and climate resilience.
            </p>

        </div>

    </div>

</section>


<!-- =========================
      INTRODUCTION
========================== -->

<section class="interest-intro">

    <div class="intro-image">

         <img src="{{asset('pics_vids/outreach.jpeg')}}">
    </div>

    <div class="intro-content">

        <span>OUR FOCUS</span>

        <h2>Creating Impact Through Science, Leadership and Collaboration</h2>

        <p>

            WASMAN brings together scientists, students, researchers,
            conservation practitioners, policymakers and development partners
            who are committed to improving the sustainable management of
            aquatic ecosystems.

        </p>

        <p>

            Our areas of interest reflect the growing need for interdisciplinary
            solutions to today's environmental challenges. By combining research,
            innovation, education and community engagement, we contribute to
            healthier freshwater and marine ecosystems while empowering women to
            become leaders in aquatic science and environmental management.

        </p>

    </div>

</section>



<!-- =========================
      AQUATIC SCIENCE
========================== -->

<section class="interest-block">

    <div class="interest-text">

        <span>01</span>

        <h2>💦 Aquatic Science & Research</h2>

        <p>

            Scientific knowledge is the foundation of sustainable aquatic
            resource management. WASMAN promotes research that enhances our
            understanding of freshwater, estuarine and marine ecosystems,
            enabling evidence-based decisions that protect biodiversity and
            improve ecosystem health.

        </p>

        <p>

            Our members engage in multidisciplinary studies covering aquatic
            ecology, fisheries science, water quality, biodiversity monitoring,
            ecosystem restoration and environmental assessment. Through research,
            publications and collaborative projects, the network contributes to
            innovative solutions that address both local and global aquatic
            challenges.

        </p>

    </div>

    <div class="interest-image">

        <img src="{{asset('pics_vids/xxx.jpeg')}}">

    </div>

</section>




<!-- =========================
 CLIMATE & WATER
========================== -->

<section class="interest-block reverse">

    <div class="interest-text">

        <span>02</span>

        <h2>☁️ Climate & Water Sustainability</h2>

        <p>

            Climate change continues to affect freshwater resources, coastal
            ecosystems and the livelihoods of millions of people. WASMAN
            promotes research and practical solutions that improve climate
            resilience while encouraging sustainable management of water
            resources.

        </p>

        <p>

            The network supports initiatives that address climate adaptation,
            watershed management, pollution control, flood resilience,
            groundwater protection and water conservation. Through advocacy,
            education and scientific innovation, we encourage sustainable
            practices that safeguard water resources for present and future
            generations.

        </p>

    </div>

    <div class="interest-image">

        <img src="images/climate-water.jpg"
             alt="Climate and Water">

    </div>

</section>

<!-- =========================================
        BLUE ECONOMY & COASTAL DEVELOPMENT
========================================== -->

<section class="interest-block">

    <div class="interest-text">

        <span>03</span>

        <h2>🌍 Blue Economy & Coastal Development</h2>

        <p>
            WASMAN recognizes the blue economy as a powerful pathway for
            sustainable development. We promote the responsible use of oceans,
            seas, rivers and other aquatic resources to improve livelihoods,
            strengthen food security and stimulate inclusive economic growth
            while protecting the environment.
        </p>

        <p>
            Our work supports sustainable fisheries, aquaculture, ecotourism,
            coastal planning and marine entrepreneurship. Through partnerships
            with governments, academia, industry and coastal communities,
            WASMAN encourages innovative practices that balance economic
            development with environmental sustainability.
        </p>

    </div>

    <div class="interest-image">

        <img src="images/blue-economy.jpg"
             alt="Blue Economy">

    </div>

</section>



<!-- =========================================
        WOMEN, LEADERSHIP & INNOVATION
========================================== -->

<section class="interest-block reverse">

    <div class="interest-text">

        <span>04</span>

        <h2>👩 Women, Leadership & Innovation</h2>

        <p>
            Empowering women remains at the heart of WASMAN's mission. We are
            committed to increasing women's participation in aquatic sciences,
            environmental management and decision-making by creating pathways
            for professional growth and leadership.
        </p>

        <p>
            Through mentorship programmes, networking opportunities, leadership
            development workshops, scholarships and collaborative research,
            WASMAN nurtures the next generation of female scientists,
            innovators and environmental champions who will influence policy
            and drive sustainable change.
        </p>

    </div>

    <div class="interest-image">

        <img src="images/women-leadership.jpg"
             alt="Women Leadership">

    </div>

</section>




<!-- =========================================
        COMMUNITY ENGAGEMENT & PARTNERSHIPS
========================================== -->

<section class="interest-block">

    <div class="interest-text">

        <span>05</span>

        <h2>🤝 Community Engagement & Partnerships</h2>

        <p>
            Sustainable environmental management can only succeed through
            meaningful collaboration. WASMAN works closely with coastal
            communities, educational institutions, government agencies,
            development partners and civil society organizations to promote
            inclusive environmental stewardship.
        </p>

        <p>
            We facilitate public education campaigns, stakeholder dialogues,
            community outreach programmes and collaborative conservation
            initiatives that strengthen awareness, encourage knowledge sharing
            and foster long-term partnerships for healthier aquatic ecosystems.
        </p>

    </div>

    <div class="interest-image">

        <img src="images/community-partnership.jpg"
             alt="Community Engagement">

    </div>

</section>



<!-- =========================================
        OUR THEMATIC AREAS
========================================== -->

<section class="thematic-section">

    <div class="thematic-title">

        <span>OUR THEMATIC FOCUS</span>

        <h2>Key Areas We Continue to Advance</h2>

        <p>
            Beyond our core programmes, WASMAN remains committed to addressing
            emerging environmental issues through multidisciplinary research,
            innovation and strategic partnerships.
        </p>

    </div>

    <div class="thematic-grid">

        <div class="theme-card">
            <div class="theme-icon">🐟</div>
            <h3>Sustainable Fisheries</h3>
            <p>
                Supporting responsible fisheries management that balances
                biodiversity conservation with food security and livelihoods.
            </p>
        </div>

        <div class="theme-card">
            <div class="theme-icon">🌿</div>
            <h3>Mangrove Restoration</h3>
            <p>
                Promoting restoration and protection of mangrove ecosystems to
                enhance biodiversity, coastal resilience and carbon storage.
            </p>
        </div>

        <div class="theme-card">
            <div class="theme-icon">💧</div>
            <h3>Water Quality</h3>
            <p>
                Advancing research that improves water quality monitoring,
                pollution control and sustainable freshwater management.
            </p>
        </div>

        <div class="theme-card">
            <div class="theme-icon">🪸</div>
            <h3>Marine Biodiversity</h3>
            <p>
                Conserving marine species and habitats through research,
                monitoring and ecosystem-based management.
            </p>
        </div>

        <div class="theme-card">
            <div class="theme-icon">📚</div>
            <h3>Environmental Education</h3>
            <p>
                Inspiring environmental awareness through outreach, education
                and public engagement programmes.
            </p>
        </div>

        <div class="theme-card">
            <div class="theme-icon">🔬</div>
            <h3>Scientific Innovation</h3>
            <p>
                Encouraging innovative technologies and scientific solutions
                that support sustainable aquatic resource management.
            </p>
        </div>

    </div>

</section>

<!-- ==========================================
                OUR IMPACT
=========================================== -->

<section class="impact-section">

    <div class="impact-header">

        <span>OUR IMPACT</span>

        <h2>Creating Meaningful Change Through Collective Action</h2>

        <p>
            Every project, partnership and initiative undertaken by WASMAN contributes
            to stronger scientific knowledge, healthier aquatic ecosystems and
            empowered women leading sustainable environmental solutions.
        </p>

    </div>

    <div class="impact-grid">

        <div class="impact-card">

            <h1>500+</h1>

            <h3>Women Engaged</h3>

            <p>
                Scientists, students and professionals connected through our network.
            </p>

        </div>

        <div class="impact-card">

            <h1>35+</h1>

            <h3>Research Projects</h3>

            <p>
                Collaborative initiatives advancing aquatic science and conservation.
            </p>

        </div>

        <div class="impact-card">

            <h1>20+</h1>

            <h3>Strategic Partners</h3>

            <p>
                Universities, NGOs and institutions supporting our mission.
            </p>

        </div>

        <div class="impact-card">

            <h1>12+</h1>

            <h3>Communities Reached</h3>

            <p>
                Outreach programmes promoting environmental awareness and resilience.
            </p>

        </div>

    </div>

</section>



<!-- ==========================================
                FEATURE BANNER
=========================================== -->

<section class="interest-banner">

    <div class="banner-overlay">

        <div class="banner-text">

            <h2>
                Healthy Waters. Empowered Women.
                Sustainable Communities.
            </h2>

            <p>
                Together we are shaping a future where scientific innovation,
                environmental stewardship and women's leadership create lasting
                positive impact for people and nature.
            </p>

        </div>

    </div>

</section>



<!-- ==========================================
                CALL TO ACTION
=========================================== -->

<section class="cta-section">

    <span>GET INVOLVED</span>

    <h2>Be Part of the Change</h2>

    <p>

        Whether you are a researcher, student, policymaker, conservation
        practitioner or development partner, your expertise and passion can
        help build a more sustainable future for aquatic ecosystems.

    </p>

    <div class="cta-buttons">

        <a href="#">Become a Member</a>

        <a href="#" class="outline-btn">Partner With Us</a>

    </div>

</section>

<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

 
   
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
