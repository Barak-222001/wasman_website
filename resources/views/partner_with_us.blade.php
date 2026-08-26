<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
       
        <link rel="stylesheet" href="{{ asset('css/partner_with_us.css') }}"> 
        <link rel="stylesheet" href="css/style.css">
>  

            
    </head>

    <body>

        {{-- header and nav section --}}
@include('components.heading')


{{-- HERO SECTION --}}
<section class="partner-hero">

    <div class="partner-hero-overlay">

        <div class="partner-hero-content">

            <span>PARTNER WITH WASMAN</span>

            <h1>
                Together, We Can Shape
                a Sustainable Future for
                Aquatic Ecosystems
            </h1>

            <p>
                Join WASMAN in building meaningful partnerships
                that advance aquatic science, empower women,
                strengthen communities and promote sustainable
                blue economy development across Africa and beyond.
            </p>

            <div class="partner-hero-buttons">

                <a href="#partnership-form" class="partner-primary-btn">
                    Become a Partner
                </a>

                <a href="#partnership-areas" class="partner-secondary-btn">
                    Explore Opportunities
                </a>

            </div>

        </div>

    </div>

</section>


{{-- INTRODUCTION --}}
<section class="partner-intro">

    <div class="partner-intro-image">

        <img
            src="images/partnership-team.jpg"
            alt="WASMAN Partnership Team"
        >

    </div>


    <div class="partner-intro-content">

        <span>BUILDING STRONGER CONNECTIONS</span>

        <h2>
            Collaboration That Creates
            Meaningful Impact
        </h2>

        <p>
            WASMAN believes that lasting solutions to aquatic
            and environmental challenges require collaboration
            across institutions, communities, governments,
            researchers and the private sector.
        </p>

        <p>
            Through strategic partnerships, we bring together
            expertise, resources, innovation and networks to
            create practical solutions for sustainable aquatic
            resource management.
        </p>

        <a href="#partnership-form" class="text-link">
            Start a Partnership →
        </a>

    </div>

</section>


{{-- PARTNERSHIP STATS --}}
<section class="partner-stats">

    <div class="partner-stat">

        <strong>25+</strong>

        <span>
            Partner Institutions
        </span>

    </div>


    <div class="partner-stat">

        <strong>18</strong>

        <span>
            Countries Connected
        </span>

    </div>


    <div class="partner-stat">

        <strong>50+</strong>

        <span>
            Collaborative Projects
        </span>

    </div>


    <div class="partner-stat">

        <strong>100+</strong>

        <span>
            Researchers & Experts
        </span>

    </div>

</section>


{{-- WHO WE PARTNER WITH --}}
<section class="partner-types">

    <div class="section-title">

        <span>OUR PARTNERS</span>

        <h2>
            Who Can Partner With WASMAN?
        </h2>

        <p>
            We welcome organizations and individuals whose
            goals align with our commitment to aquatic science,
            environmental sustainability and inclusive development.
        </p>

    </div>


    <div class="partner-type-grid">

        <div class="partner-type-card">

            <div class="partner-icon">
                <i class="fas fa-university"></i>
            </div>

            <h3>
                Universities & Research Institutions
            </h3>

            <p>
                Collaborate on research, innovation,
                knowledge exchange and capacity development.
            </p>

        </div>


        <div class="partner-type-card">

            <div class="partner-icon">
                <i class="fas fa-building"></i>
            </div>

            <h3>
                Government Institutions
            </h3>

            <p>
                Support evidence-based policy, environmental
                management and sustainable development.
            </p>

        </div>


        <div class="partner-type-card">

            <div class="partner-icon">
                <i class="fas fa-globe-africa"></i>
            </div>

            <h3>
                NGOs & Development Organizations
            </h3>

            <p>
                Work together on conservation, community
                development and environmental initiatives.
            </p>

        </div>


        <div class="partner-type-card">

            <div class="partner-icon">
                <i class="fas fa-industry"></i>
            </div>

            <h3>
                Private Sector
            </h3>

            <p>
                Develop innovative solutions and responsible
                approaches to blue economy development.
            </p>

        </div>


        <div class="partner-type-card">

            <div class="partner-icon">
                <i class="fas fa-users"></i>
            </div>

            <h3>
                Communities
            </h3>

            <p>
                Support locally driven initiatives that
                strengthen coastal and aquatic communities.
            </p>

        </div>


        <div class="partner-type-card">

            <div class="partner-icon">
                <i class="fas fa-handshake"></i>
            </div>

            <h3>
                Professional Networks
            </h3>

            <p>
                Connect experts and professionals to create
                opportunities for collaboration and mentorship.
            </p>

        </div>

    </div>

</section>


{{-- PARTNERSHIP AREAS --}}
<section class="partnership-areas" id="partnership-areas">

    <div class="section-title">

        <span>COLLABORATION AREAS</span>

        <h2>
            Areas Where We Can Work Together
        </h2>

    </div>


    <div class="partnership-area-grid">

        <div class="partnership-area-card">

            <i class="fas fa-water"></i>

            <h3>
                Aquatic Conservation
            </h3>

            <p>
                Collaborate on initiatives that protect
                aquatic ecosystems and biodiversity.
            </p>

        </div>


        <div class="partnership-area-card">

            <i class="fas fa-flask"></i>

            <h3>
                Research & Innovation
            </h3>

            <p>
                Support scientific research, innovation
                and knowledge generation.
            </p>

        </div>


        <div class="partnership-area-card">

            <i class="fas fa-fish"></i>

            <h3>
                Sustainable Fisheries
            </h3>

            <p>
                Promote responsible fisheries management
                and sustainable aquatic livelihoods.
            </p>

        </div>


        <div class="partnership-area-card">

            <i class="fas fa-leaf"></i>

            <h3>
                Climate Resilience
            </h3>

            <p>
                Develop approaches that strengthen
                resilience to climate change.
            </p>

        </div>


        <div class="partnership-area-card">

            <i class="fas fa-chart-line"></i>

            <h3>
                Blue Economy
            </h3>

            <p>
                Support sustainable economic opportunities
                linked to aquatic resources.
            </p>

        </div>


        <div class="partnership-area-card">

            <i class="fas fa-graduation-cap"></i>

            <h3>
                Education & Capacity Building
            </h3>

            <p>
                Create opportunities for training,
                mentorship and professional development.
            </p>

        </div>

    </div>

</section>


{{-- BENEFITS --}}
<section class="partner-benefits">

    <div class="benefits-content">

        <span>WHY PARTNER WITH US?</span>

        <h2>
            Turn Collaboration Into
            Measurable Impact
        </h2>

        <p>
            Partnering with WASMAN gives organizations an
            opportunity to contribute to meaningful initiatives
            while connecting with a growing network of experts,
            researchers, communities and institutions.
        </p>

    </div>


    <div class="benefits-grid">

        <div class="partner-benefit">

            <i class="fas fa-network-wired"></i>

            <h3>
                Expand Your Network
            </h3>

            <p>
                Connect with researchers, professionals,
                institutions and communities.
            </p>

        </div>


        <div class="partner-benefit">

            <i class="fas fa-lightbulb"></i>

            <h3>
                Drive Innovation
            </h3>

            <p>
                Develop new ideas and solutions to aquatic
                and environmental challenges.
            </p>

        </div>


        <div class="partner-benefit">

            <i class="fas fa-users"></i>

            <h3>
                Empower People
            </h3>

            <p>
                Support opportunities for women, students
                and emerging aquatic science professionals.
            </p>

        </div>


        <div class="partner-benefit">

            <i class="fas fa-globe-africa"></i>

            <h3>
                Create Impact
            </h3>

            <p>
                Contribute to sustainable development
                across communities and ecosystems.
            </p>

        </div>

    </div>

</section>


{{-- PARTNERSHIP MODELS --}}
<section class="partnership-models">

    <div class="section-title">

        <span>PARTNERSHIP MODELS</span>

        <h2>
            How We Can Collaborate
        </h2>

    </div>


    <div class="model-grid">

        <div class="model-card">

            <span class="model-number">
                01
            </span>

            <h3>
                Strategic Partnership
            </h3>

            <p>
                Long-term collaboration around shared
                institutional goals and programmes.
            </p>

        </div>


        <div class="model-card">

            <span class="model-number">
                02
            </span>

            <h3>
                Research Collaboration
            </h3>

            <p>
                Joint research, field activities,
                publications and knowledge exchange.
            </p>

        </div>


        <div class="model-card">

            <span class="model-number">
                03
            </span>

            <h3>
                Programme Support
            </h3>

            <p>
                Support specific projects, training
                programmes and community initiatives.
            </p>

        </div>


        <div class="model-card">

            <span class="model-number">
                04
            </span>

            <h3>
                Sponsorship
            </h3>

            <p>
                Support conferences, events, campaigns
                and environmental initiatives.
            </p>

        </div>

    </div>

</section>


{{-- PARTNERSHIP PROCESS --}}
<section class="partner-process">

    <div class="section-title">

        <span>HOW IT WORKS</span>

        <h2>
            Our Partnership Journey
        </h2>

    </div>


    <div class="partner-process-grid">

        <div class="process-step">

            <div class="step-number">
                01
            </div>

            <h3>
                Start a Conversation
            </h3>

            <p>
                Tell us about your organization and
                your partnership interests.
            </p>

        </div>


        <div class="process-step">

            <div class="step-number">
                02
            </div>

            <h3>
                Explore Opportunities
            </h3>

            <p>
                Together we identify areas of shared
                interest and potential impact.
            </p>

        </div>


        <div class="process-step">

            <div class="step-number">
                03
            </div>

            <h3>
                Develop the Partnership
            </h3>

            <p>
                We develop a suitable collaboration
                framework and action plan.
            </p>

        </div>


        <div class="process-step">

            <div class="step-number">
                04
            </div>

            <h3>
                Create Impact
            </h3>

            <p>
                We work together to implement initiatives
                and measure their impact.
            </p>

        </div>

    </div>

</section>


{{-- FEATURED COLLABORATION --}}
<section class="featured-partnership">

    <div class="featured-partnership-image">

        <img
            src="images/featured-partnership.jpg"
            alt="WASMAN Collaboration"
        >

    </div>


    <div class="featured-partnership-content">

        <span>COLLABORATION IN ACTION</span>

        <h2>
            Strong Partnerships.
            Greater Impact.
        </h2>

        <p>
            Our partnerships bring together different
            perspectives, expertise and resources to
            address some of the most important challenges
            facing aquatic ecosystems and communities.
        </p>

        <a href="#">
            Explore Our Partnerships →
        </a>

    </div>

</section>


{{-- PARTNERSHIP FORM --}}
<section class="partnership-form" id="partnership-form">

    <div class="section-title">

        <span>START A CONVERSATION</span>

        <h2>
            Partner With WASMAN
        </h2>

        <p>
            Tell us about your organization and how you
            would like to collaborate with WASMAN.
        </p>

    </div>


    <form>

        <div class="form-grid">

            <input
                type="text"
                placeholder="Organization Name"
                required
            >

            <input
                type="text"
                placeholder="Contact Person"
                required
            >

            <input
                type="email"
                placeholder="Email Address"
                required
            >

            <input
                type="tel"
                placeholder="Phone Number"
            >

            <input
                type="text"
                placeholder="Country"
            >

            <select required>

                <option>
                    Partnership Type
                </option>

                <option>
                    Strategic Partnership
                </option>

                <option>
                    Research Collaboration
                </option>

                <option>
                    Programme Support
                </option>

                <option>
                    Sponsorship
                </option>

                <option>
                    Other
                </option>

            </select>

        </div>


        <textarea
            rows="7"
            placeholder="Tell us about your organization and the partnership opportunity you would like to explore."
        ></textarea>


        <button type="submit">
            Submit Partnership Request
        </button>

    </form>

</section>


{{-- FINAL CTA --}}
<section class="partner-cta">

    <span>
        LET'S WORK TOGETHER
    </span>

    <h2>
        Your Partnership Can Help
        Shape a Better Future
    </h2>

    <p>
        Join WASMAN in advancing aquatic science,
        empowering women and creating sustainable
        solutions for communities and ecosystems.
    </p>

    <a href="#partnership-form">
        Become a WASMAN Partner
    </a>

</section>


      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
     <script src="{{ asset('created_js/animation.js') }}"></script>
   

</html>
