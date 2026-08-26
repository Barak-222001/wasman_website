<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/research_assistant.css') }}"> 
        <link rel="stylesheet" href="css/style.css">
            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')

{{-- =========================================================
     RESEARCH ASSISTANCE PAGE
========================================================= --}}

{{-- HERO SECTION --}}
<section class="research-hero">

    <div class="research-hero-overlay"></div>

    <div class="research-hero-content">

        <div class="research-hero-text">

            <span class="eyebrow">
                RESEARCH ASSISTANCE
            </span>

            <h1>
                Supporting Research.
                <span>Advancing Knowledge.</span>
                Protecting Aquatic Ecosystems.
            </h1>

            <p>
                WASMAN connects researchers, students, institutions
                and environmental professionals with the expertise,
                networks and field support needed to generate
                meaningful knowledge for aquatic sustainability.
            </p>

            <div class="research-hero-actions">

                <a href="#request-form" class="primary-research-btn">
                    Request Research Support
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a href="#services" class="secondary-research-btn">
                    Explore Our Services
                </a>

            </div>

        </div>

        <div class="research-hero-badge">

            <div class="badge-icon">
                <i class="fas fa-microscope"></i>
            </div>

            <div>
                <strong>Knowledge in Action</strong>
                <span>Research • Innovation • Impact</span>
            </div>

        </div>

    </div>

</section>


{{-- INTRODUCTION / ABOUT RESEARCH --}}
<section class="research-introduction">

    <div class="research-intro-image">

        <div class="image-frame">

            <img
                src="../pics_vids/wac.png"
                alt="Researchers conducting aquatic research">

        </div>

        <div class="research-image-card">

            <strong>100+</strong>
            <span>Researchers Connected</span>

        </div>

    </div>


    <div class="research-intro-content">

        <span class="section-label">
            OUR RESEARCH SUPPORT
        </span>

        <h2>
            Building Knowledge Through
            <span>Collaboration & Innovation</span>
        </h2>

        <p>
            WASMAN supports researchers, academic institutions,
            students, conservation practitioners and environmental
            organizations by creating opportunities for collaboration,
            technical support and knowledge exchange.
        </p>

        <p>
            From field research and data collection to networking,
            dissemination and scientific collaboration, our goal is
            to help transform research ideas into knowledge that
            contributes to healthier aquatic ecosystems.
        </p>

        <div class="research-highlight-list">

            <div>
                <i class="fas fa-check"></i>
                <span>Scientific collaboration</span>
            </div>

            <div>
                <i class="fas fa-check"></i>
                <span>Field research support</span>
            </div>

            <div>
                <i class="fas fa-check"></i>
                <span>Research networking</span>
            </div>

            <div>
                <i class="fas fa-check"></i>
                <span>Knowledge dissemination</span>
            </div>

        </div>

    </div>

</section>


{{-- RESEARCH AREAS --}}
<section class="research-focus">

    <div class="research-section-heading">

        <div>

            <span class="section-label">
                RESEARCH FOCUS
            </span>

            <h2>
                Areas We Support
            </h2>

        </div>

        <p>
            Explore the scientific and environmental areas where
            WASMAN facilitates research collaboration and support.
        </p>

    </div>


    <div class="research-focus-grid">

        <div class="research-focus-card">

            <div class="focus-number">01</div>

            <div class="focus-icon">
                <i class="fas fa-water"></i>
            </div>

            <h3>
                Marine Conservation
            </h3>

            <p>
                Research focused on marine biodiversity,
                ecosystem protection and conservation strategies.
            </p>

            <a href="#">
                Explore Area
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="research-focus-card">

            <div class="focus-number">02</div>

            <div class="focus-icon">
                <i class="fas fa-leaf"></i>
            </div>

            <h3>
                Aquatic Ecology
            </h3>

            <p>
                Support for research involving freshwater,
                coastal and marine ecosystems.
            </p>

            <a href="#">
                Explore Area
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="research-focus-card">

            <div class="focus-number">03</div>

            <div class="focus-icon">
                <i class="fas fa-temperature-high"></i>
            </div>

            <h3>
                Climate Change
            </h3>

            <p>
                Research examining climate impacts,
                adaptation and environmental resilience.
            </p>

            <a href="#">
                Explore Area
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="research-focus-card">

            <div class="focus-number">04</div>

            <div class="focus-icon">
                <i class="fas fa-globe-africa"></i>
            </div>

            <h3>
                Blue Economy
            </h3>

            <p>
                Supporting sustainable ocean-based economic
                research, innovation and livelihoods.
            </p>

            <a href="#">
                Explore Area
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="research-focus-card">

            <div class="focus-number">05</div>

            <div class="focus-icon">
                <i class="fas fa-fish"></i>
            </div>

            <h3>
                Fisheries Research
            </h3>

            <p>
                Research supporting sustainable fisheries,
                aquatic livelihoods and resource management.
            </p>

            <a href="#">
                Explore Area
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="research-focus-card">

            <div class="focus-number">06</div>

            <div class="focus-icon">
                <i class="fas fa-droplet"></i>
            </div>

            <h3>
                Water Resources
            </h3>

            <p>
                Research related to water conservation,
                quality assessment and sustainable management.
            </p>

            <a href="#">
                Explore Area
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


{{-- RESEARCH SERVICES --}}
<section class="research-services" id="services">

    <div class="services-intro">

        <span class="section-label">
            OUR SERVICES
        </span>

        <h2>
            How We Support
            <span>Researchers</span>
        </h2>

        <p>
            Our research assistance services are designed to
            support projects from the initial idea through
            field implementation and knowledge dissemination.
        </p>

    </div>


    <div class="services-list">

        <div class="service-item">

            <div class="service-icon">
                <i class="fas fa-compass"></i>
            </div>

            <div class="service-content">

                <span>01</span>

                <h3>
                    Field Research Support
                </h3>

                <p>
                    Assistance with field activities,
                    sample collection, site visits and
                    community engagement.
                </p>

            </div>

        </div>


        <div class="service-item">

            <div class="service-icon">
                <i class="fas fa-chart-line"></i>
            </div>

            <div class="service-content">

                <span>02</span>

                <h3>
                    Data Collection & Analysis
                </h3>

                <p>
                    Support with organizing, processing,
                    interpreting and presenting research data.
                </p>

            </div>

        </div>


        <div class="service-item">

            <div class="service-icon">
                <i class="fas fa-people-group"></i>
            </div>

            <div class="service-content">

                <span>03</span>

                <h3>
                    Research Networking
                </h3>

                <p>
                    Connecting researchers with experts,
                    institutions and potential collaborators.
                </p>

            </div>

        </div>


        <div class="service-item">

            <div class="service-icon">
                <i class="fas fa-book-open"></i>
            </div>

            <div class="service-content">

                <span>04</span>

                <h3>
                    Knowledge Sharing
                </h3>

                <p>
                    Supporting publications, workshops,
                    conferences and research dissemination.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- COLLABORATION NETWORK --}}
<section class="research-network">

    <div class="network-overlay"></div>

    <div class="network-container">

        <div class="network-text">

            <span class="section-label light">
                RESEARCH COLLABORATION
            </span>

            <h2>
                Connecting Researchers
                Across Aquatic Science
                Communities
            </h2>

            <p>
                WASMAN brings together scientists, academics,
                students, policymakers and environmental
                professionals to encourage collaborative research
                and meaningful knowledge exchange.
            </p>

            <a href="#request-form" class="network-btn">
                Start a Collaboration
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="network-stat-wrapper">

            <div class="network-stat">

                <strong>100+</strong>
                <span>Researchers</span>

            </div>

            <div class="network-stat">

                <strong>30+</strong>
                <span>Institutions</span>

            </div>

            <div class="network-stat">

                <strong>50+</strong>
                <span>Research Projects</span>

            </div>

        </div>

    </div>

</section>


{{-- RESEARCH PROCESS --}}
<section class="research-process">

    <div class="research-section-heading centered">

        <span class="section-label">
            HOW IT WORKS
        </span>

        <h2>
            Research Assistance Process
        </h2>

        <p>
            Getting research support from WASMAN is simple.
            Tell us what you need and our team will help connect
            you with the appropriate support.
        </p>

    </div>


    <div class="research-process-grid">

        <div class="process-step">

            <div class="step-number">
                01
            </div>

            <h3>
                Submit Request
            </h3>

            <p>
                Complete the research assistance form
                with details about your project.
            </p>

        </div>


        <div class="process-line"></div>


        <div class="process-step">

            <div class="step-number">
                02
            </div>

            <h3>
                Request Review
            </h3>

            <p>
                Our team reviews your research needs
                and determines suitable support.
            </p>

        </div>


        <div class="process-line"></div>


        <div class="process-step">

            <div class="step-number">
                03
            </div>

            <h3>
                Expert Connection
            </h3>

            <p>
                We connect you with relevant researchers,
                institutions or specialists.
            </p>

        </div>


        <div class="process-line"></div>


        <div class="process-step">

            <div class="step-number">
                04
            </div>

            <h3>
                Research Support
            </h3>

            <p>
                Begin your collaboration and receive
                the appropriate research assistance.
            </p>

        </div>

    </div>

</section>


{{-- ELIGIBILITY --}}
<section class="research-eligibility">

    <div class="eligibility-inner">

        <div class="eligibility-title">

            <span class="section-label">
                WHO WE SUPPORT
            </span>

            <h2>
                Research Is Stronger
                When We Work Together
            </h2>

            <p>
                Our support is available to individuals and
                organizations working to improve understanding
                and management of aquatic environments.
            </p>

        </div>


        <div class="eligibility-items">

            <div>
                <i class="fas fa-user-graduate"></i>
                <span>Researchers</span>
            </div>

            <div>
                <i class="fas fa-graduation-cap"></i>
                <span>University Students</span>
            </div>

            <div>
                <i class="fas fa-building-columns"></i>
                <span>Academic Institutions</span>
            </div>

            <div>
                <i class="fas fa-landmark"></i>
                <span>Government Agencies</span>
            </div>

            <div>
                <i class="fas fa-handshake"></i>
                <span>NGOs</span>
            </div>

            <div>
                <i class="fas fa-seedling"></i>
                <span>Environmental Organizations</span>
            </div>

        </div>

    </div>

</section>


{{-- REQUEST FORM --}}
<section class="research-request" id="request-form">

    <div class="request-heading">

        <span class="section-label">
            REQUEST SUPPORT
        </span>

        <h2>
            Tell Us About Your
            Research Project
        </h2>

        <p>
            Complete the form below and provide as much
            information as possible about the research
            support you require.
        </p>

    </div>


    <div class="request-form-wrapper">

        <form class="research-form">

            <div class="form-row">

                <div class="form-field">

                    <label>
                        Full Name
                    </label>

                    <input
                        type="text"
                        placeholder="Enter your full name"
                        required>

                </div>


                <div class="form-field">

                    <label>
                        Email Address
                    </label>

                    <input
                        type="email"
                        placeholder="Enter your email address"
                        required>

                </div>

            </div>


            <div class="form-row">

                <div class="form-field">

                    <label>
                        Institution / Organization
                    </label>

                    <input
                        type="text"
                        placeholder="Institution or organization">

                </div>


                <div class="form-field">

                    <label>
                        Research Topic
                    </label>

                    <input
                        type="text"
                        placeholder="What is your research about?">

                </div>

            </div>


            <div class="form-row">

                <div class="form-field">

                    <label>
                        Research Area
                    </label>

                    <select>

                        <option>
                            Select research area
                        </option>

                        <option>
                            Marine Conservation
                        </option>

                        <option>
                            Aquatic Ecology
                        </option>

                        <option>
                            Climate Change
                        </option>

                        <option>
                            Blue Economy
                        </option>

                        <option>
                            Fisheries
                        </option>

                        <option>
                            Water Resources
                        </option>

                    </select>

                </div>


                <div class="form-field">

                    <label>
                        Expected Research Timeline
                    </label>

                    <input
                        type="text"
                        placeholder="e.g. 3 months">

                </div>

            </div>


            <div class="form-field full">

                <label>
                    Describe Your Research Needs
                </label>

                <textarea
                    rows="7"
                    placeholder="Tell us about your research project and the type of assistance you require."></textarea>

            </div>


            <div class="form-field full">

                <label>
                    Upload Supporting Document
                </label>

                <div class="file-upload">

                    <i class="fas fa-cloud-arrow-up"></i>

                    <span>
                        Upload proposal or supporting document
                    </span>

                    <input type="file">

                </div>

            </div>


            <button
                type="submit"
                class="research-submit">

                Submit Research Request

                <i class="fas fa-arrow-right"></i>

            </button>

        </form>

    </div>

</section>
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
