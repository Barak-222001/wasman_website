<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WASMaN</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/ongoing.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        {{-- header and nav section --}}
@include('components.heading')

<!-- =====================================================
     ONGOING PROJECTS PAGE
===================================================== -->

<section class="projects-page">

    <!-- =================================================
         HERO
    ================================================== -->

    <section class="projects-hero">

        <div class="projects-hero-overlay">

            <div class="projects-hero-content">

                <span>OUR ONGOING PROJECTS</span>

                <h1>
                    Transforming Research Into
                    Sustainable Aquatic Solutions
                </h1>

                <p>
                    WASMaN brings together science, innovation, women’s
                    leadership and community action to address emerging
                    challenges affecting aquatic ecosystems and coastal
                    communities.
                </p>

                <div class="projects-hero-buttons">

                    <a href="#featured-project">
                        Explore Projects
                    </a>

                    <a href="#" class="projects-outline-btn">
                        Become a Partner
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =================================================
         PROJECT INTRODUCTION
    ================================================== -->

    <section class="projects-overview">

        <div class="projects-overview-text">

            <span>WHAT WE ARE DOING</span>

            <h2>
                Turning Scientific Knowledge Into
                Meaningful Environmental Action
            </h2>

            <p>
                WASMaN implements multidisciplinary projects that connect
                scientific research with practical environmental solutions.
                Our initiatives address aquatic ecosystem conservation,
                climate resilience, sustainable livelihoods and women's
                participation in science and environmental management.
            </p>

            <p>
                Through collaboration with researchers, universities,
                governments, development partners and local communities,
                we transform knowledge into action that benefits both
                people and aquatic ecosystems.
            </p>

            <a href="#" class="text-link">
                Learn More About Our Work
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="projects-overview-stats">

            <div class="overview-stat">

                <i class="fas fa-flask"></i>

                <h3>15+</h3>

                <p>Active Projects</p>

            </div>


            <div class="overview-stat">

                <i class="fas fa-handshake"></i>

                <h3>25+</h3>

                <p>Research Partners</p>

            </div>


            <div class="overview-stat">

                <i class="fas fa-map-marker-alt"></i>

                <h3>8</h3>

                <p>Regions Covered</p>

            </div>


            <div class="overview-stat">

                <i class="fas fa-users"></i>

                <h3>1,200+</h3>

                <p>Beneficiaries</p>

            </div>

        </div>

    </section>



    <!-- =================================================
         FEATURED PROJECT
    ================================================== -->

    <section class="featured-project" id="featured-project">

        <div class="featured-project-image">

            <img
                src="{{asset('pics_vids/res.png')}}"
                alt="Coastal environmental research">

            <div class="featured-label">
                FEATURED PROJECT
            </div>

        </div>


        <div class="featured-project-content">

            <span>CONSERVATION • COMMUNITY • RESEARCH</span>

            <h2>
                Restoring Coastal Mangrove Ecosystems
            </h2>

            <p>
                This initiative focuses on restoring degraded mangrove
                ecosystems through scientific monitoring, community
                participation and environmental education.
            </p>

            <p>
                The project also creates opportunities for women and young
                researchers to gain practical experience in ecosystem
                restoration while supporting sustainable livelihoods within
                coastal communities.
            </p>


            <div class="project-progress">

                <div class="progress-heading">

                    <span>Project Progress</span>

                    <strong>75%</strong>

                </div>

                <div class="progress-track">

                    <div class="progress-value"></div>

                </div>

            </div>


            <a href="#" class="project-btn">
                View Project
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

    </section>



    <!-- =================================================
         PROJECT CATEGORIES
    ================================================== -->

    <section class="project-focus">

        <div class="project-focus-header">

            <span>OUR PROJECT PORTFOLIO</span>

            <h2>
                Research Areas We Are Advancing
            </h2>

            <p>
                Our projects span multiple disciplines, allowing WASMaN
                to address aquatic and environmental challenges from
                different perspectives.
            </p>

        </div>


        <div class="project-focus-grid">

            <div class="focus-item">

                <div class="focus-icon">
                    <i class="fas fa-water"></i>
                </div>

                <div>
                    <h3>Water Resources</h3>

                    <p>
                        Research and monitoring focused on sustainable
                        freshwater resources and water quality.
                    </p>
                </div>

            </div>


            <div class="focus-item">

                <div class="focus-icon">
                    <i class="fas fa-leaf"></i>
                </div>

                <div>
                    <h3>Ecosystem Conservation</h3>

                    <p>
                        Protecting wetlands, mangroves, marine habitats
                        and aquatic biodiversity.
                    </p>
                </div>

            </div>


            <div class="focus-item">

                <div class="focus-icon">
                    <i class="fas fa-cloud-sun"></i>
                </div>

                <div>
                    <h3>Climate Resilience</h3>

                    <p>
                        Supporting communities and ecosystems facing
                        climate-related environmental pressures.
                    </p>

                </div>

            </div>


            <div class="focus-item">

                <div class="focus-icon">
                    <i class="fas fa-female"></i>
                </div>

                <div>
                    <h3>Women & Leadership</h3>

                    <p>
                        Creating opportunities for women in research,
                        leadership and environmental innovation.
                    </p>
                </div>

            </div>

        </div>

    </section>



    <!-- =================================================
         PROJECT CARDS
    ================================================== -->

    <section class="project-list">

        <div class="project-list-header">

            <span>CURRENT INITIATIVES</span>

            <h2>
                Projects Making a Difference
            </h2>

        </div>


        <div class="project-cards">


            <!-- PROJECT 1 -->

            <article class="project-card">

                <div class="project-card-image">

                    <img
                        src="{{asset('pics_vids/wat.png')}}"
                        alt="Water quality research">

                    <span>RESEARCH</span>

                </div>


                <div class="project-card-content">

                    <h3>
                        Water Quality Assessment
                    </h3>

                    <p>
                        Monitoring freshwater quality across selected
                        river basins to support evidence-based water
                        resource management.
                    </p>

                    <a href="#">
                        Read Project
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </article>



            <!-- PROJECT 2 -->

            <article class="project-card">

                <div class="project-card-image">

                    <img
                        src="{{asset('pics_vids/wom.png')}}"
                        alt="Coastal community project">

                    <span>COMMUNITY</span>

                </div>


                <div class="project-card-content">

                    <h3>
                        Women in the Blue Economy
                    </h3>

                    <p>
                        Supporting entrepreneurial opportunities and
                        sustainable livelihoods for women in coastal
                        communities.
                    </p>

                    <a href="#">
                        Read Project
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </article>



            <!-- PROJECT 3 -->

            <article class="project-card">

                <div class="project-card-image">

                    <img
                        src="{{asset('pics_vids/mar.png')}}"
                        alt="Marine biodiversity">

                    <span>CONSERVATION</span>

                </div>


                <div class="project-card-content">

                    <h3>
                        Marine Biodiversity Monitoring
                    </h3>

                    <p>
                        Assessing aquatic ecosystems and marine species
                        using innovative scientific monitoring approaches.
                    </p>

                    <a href="#">
                        Read Project
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </article>



            <!-- PROJECT 4 -->

            <article class="project-card">

                <div class="project-card-image">

                    <img
                        src="{{asset('pics_vids/com.png')}}"
                        alt="Environmental education">

                    <span>EDUCATION</span>

                </div>


                <div class="project-card-content">

                    <h3>
                        Community Environmental Education
                    </h3>

                    <p>
                        Promoting environmental awareness and sustainable
                        practices through community outreach programmes.
                    </p>

                    <a href="#">
                        Read Project
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </article>

        </div>

    </section>



    <!-- =================================================
         PROJECT ROADMAP
    ================================================== -->

    <section class="project-roadmap">

        <div class="roadmap-header">

            <span>PROJECT ROADMAP</span>

            <h2>
                From Research to Impact
            </h2>

            <p>
                Our projects follow a structured process that connects
                scientific discovery with practical environmental action.
            </p>

        </div>


        <div class="roadmap">

            <div class="roadmap-step">

                <div class="roadmap-number">
                    01
                </div>

                <h3>Research</h3>

                <p>
                    Identifying environmental challenges and generating
                    scientific evidence.
                </p>

            </div>


            <div class="roadmap-step">

                <div class="roadmap-number">
                    02
                </div>

                <h3>Collaboration</h3>

                <p>
                    Bringing researchers, communities and institutions
                    together.
                </p>

            </div>


            <div class="roadmap-step">

                <div class="roadmap-number">
                    03
                </div>

                <h3>Implementation</h3>

                <p>
                    Turning scientific knowledge into practical solutions.
                </p>

            </div>


            <div class="roadmap-step">

                <div class="roadmap-number">
                    04
                </div>

                <h3>Impact</h3>

                <p>
                    Measuring results and supporting long-term sustainability.
                </p>

            </div>

        </div>

    </section>



    <!-- =================================================
         IMPACT
    ================================================== -->

    <section class="projects-impact">

        <div class="impact-content">

            <span>OUR COLLECTIVE IMPACT</span>

            <h2>
                Science That Creates Change
            </h2>

            <p>
                Every project contributes to a larger vision of healthier
                aquatic ecosystems, stronger communities and greater
                opportunities for women in science and environmental
                leadership.
            </p>

        </div>


        <div class="impact-numbers">

            <div>
                <strong>500+</strong>
                <span>Women Engaged</span>
            </div>

            <div>
                <strong>35+</strong>
                <span>Research Projects</span>
            </div>

            <div>
                <strong>20+</strong>
                <span>Strategic Partners</span>
            </div>

            <div>
                <strong>12+</strong>
                <span>Communities Reached</span>
            </div>

        </div>

    </section>



    <!-- =================================================
         FINAL CTA
    ================================================== -->

    <section class="projects-cta">

        <div class="cta-overlay">

            <span>WORK WITH US</span>

            <h2>
                Together, We Can Create
                Healthier Aquatic Ecosystems
            </h2>

            <p>
                Partner with WASMaN to support research, conservation,
                innovation and women's leadership across aquatic science.
            </p>

            <div class="cta-buttons">

                <a href="#">
                    Support Our Projects
                </a>

                <a href="#" class="cta-outline">
                    Become a Partner
                </a>

            </div>

        </div>

    </section>

</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
