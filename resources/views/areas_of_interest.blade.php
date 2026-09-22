<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WASMaN | Areas of Interest</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/areas_of_interests.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

@include('components.heading')


<section class="wasman-interests">

    {{-- HERO --}}
    <section class="interest-hero">

        <div class="interest-hero-overlay">

            <div class="interest-hero-content">

                <div class="interest-eyebrow">
                    <i class="fa-solid fa-water"></i>
                    OUR AREAS OF INTEREST
                </div>

                <h1>
                    Sustaining our Waters, ,
                    <span>Empowering Generations</span>
                </h1>

                <!-- <p>
                    WASMaN brings together science, innovation, leadership
                    and community action to promote sustainable aquatic
                    ecosystems and climate-resilient communities.
                </p>

                <div class="interest-hero-meta">

                    <div>
                        <i class="fa-solid fa-microscope"></i>
                        <span>Science</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-seedling"></i>
                        <span>Conservation</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Leadership</span>
                    </div>

                </div> -->

            </div>

        </div>

    </section>


    {{-- INTRODUCTION --}}
    <section class="interest-intro">

        <div class="intro-image">

            <img
                src="{{ asset('pics_vids/outreach.jpeg') }}"
                alt="WASMaN community outreach"
            >

            <div class="intro-image-badge">

                <i class="fa-solid fa-leaf"></i>

                <div>
                    <strong>Science & Impact</strong>
                    <span>Creating sustainable solutions</span>
                </div>

            </div>

        </div>


        <div class="intro-content">

            <!-- <span class="section-label">
                OUR FOCUS
            </span> -->

            <!-- <h2>
                Creating Impact Through Science,
                Leadership & Collaboration
            </h2>

            <p>
                WASMaN brings together scientists, students, researchers,
                conservation practitioners, policymakers and development
                partners who are committed to improving the sustainable
                management of aquatic ecosystems.
            </p>

            <p>
                Our areas of interest reflect the growing need for
                interdisciplinary solutions to today's environmental
                challenges. By combining research, innovation, education
                and community engagement, we contribute to healthier
                freshwater and marine ecosystems while empowering women
                to become leaders in aquatic science and environmental
                management.
            </p>

            <div class="intro-highlights">

                <div>
                    <i class="fa-solid fa-flask-vial"></i>
                    <span>Research</span>
                </div>

                <div>
                    <i class="fa-solid fa-seedling"></i>
                    <span>Conservation</span>
                </div>

                <div>
                    <i class="fa-solid fa-users"></i>
                    <span>Leadership</span>
                </div>

            </div> -->

        </div>

    </section>


    {{-- CORE AREAS --}}
    <section class="core-interest-section">

        <div class="interest-section-heading">

            <span class="section-label">
                What Our Work is About
            </span>

            <h2>
                Our Core Areas of Interest
            </h2>

            <p>
                Our work connects scientific knowledge with practical
                solutions that protect aquatic ecosystems, strengthen
                communities and create opportunities for women.
            </p>

        </div>


        <article class="interest-block">

            <div class="interest-text">

                <span class="interest-number">01</span>

                <div class="interest-icon">
                    <i class="fa-solid fa-microscope"></i>
                </div>

                <span class="interest-category">
                    SCIENCE & RESEARCH
                </span>

                <h2>
                    Aquatic Science & Research
                </h2>

                <p>
                    Scientific knowledge is the foundation of sustainable
                    aquatic resource management. WASMaN promotes research
                    that enhances our understanding of freshwater,
                    estuarine and marine ecosystems.
                </p>

                <p>
                    Our members engage in multidisciplinary studies
                    covering aquatic ecology, fisheries science, water
                    quality, biodiversity monitoring, ecosystem restoration
                    and environmental assessment.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/sci_rese.png') }}"
                    alt="Aquatic science research"
                >

                <div class="image-label">
                    <span>01</span>
                    <strong>Science & Research</strong>
                </div>

            </div>

        </article>


        <article class="interest-block reverse">

            <div class="interest-text">

                <span class="interest-number">02</span>

                <div class="interest-icon">
                    <i class="fa-solid fa-cloud-sun"></i>
                </div>

                <span class="interest-category">
                    CLIMATE & WATER
                </span>

                <h2>
                    Climate & Water Resources Management
                </h2>

                <p>
                    Climate change continues to affect freshwater resources,
                    coastal ecosystems and the livelihoods of millions of
                    people.
                </p>

                <p>
                    WASMaN promotes climate adaptation, watershed management,
                    pollution control, flood resilience, groundwater
                    protection and water conservation.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/clim_wat.png') }}"
                    alt="Climate and water sustainability"
                >

                <div class="image-label">
                    <span>02</span>
                    <strong>Climate & Water</strong>
                </div>

            </div>

        </article>


        <article class="interest-block">

            <div class="interest-text">

                <span class="interest-number">03</span>

                <div class="interest-icon">
                    <i class="fa-solid fa-earth-africa"></i>
                </div>

                <span class="interest-category">
                    BLUE ECONOMY
                </span>

                <h2>
                    Blue Economy & Coastal Development
                </h2>

                <p>
                    WASMaN recognizes the blue economy as a powerful pathway
                    for sustainable development and inclusive economic
                    growth.
                </p>

                <p>
                    Our work supports sustainable fisheries, aquaculture,
                    ecotourism, coastal planning and marine entrepreneurship
                    while promoting responsible use of aquatic resources.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/blue_eco.png') }}"
                    alt="Blue economy and coastal development"
                >

                <div class="image-label">
                    <span>03</span>
                    <strong>Blue Economy</strong>
                </div>

            </div>

        </article>


        <article class="interest-block reverse">

            <div class="interest-text">

                <span class="interest-number">04</span>

                <div class="interest-icon">
                    <i class="fa-solid fa-user-tie"></i>
                </div>

                <span class="interest-category">
                    WOMEN & LEADERSHIP
                </span>

                <h2>
                    Women, Leadership & Innovation
                </h2>

                <p>
                    Empowering women remains at the heart of WASMaN's mission.
                    We create pathways for professional growth, scientific
                    excellence and leadership.
                </p>

                <p>
                    Through mentorship, networking, leadership development,
                    scholarships and collaborative research, WASMaN nurtures
                    the next generation of female scientists and innovators.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/wom_lead.png') }}"
                    alt="Women in aquatic science"
                >

                <div class="image-label">
                    <span>04</span>
                    <strong>Women & Leadership</strong>
                </div>

            </div>

        </article>


        <article class="interest-block">

            <div class="interest-text">

                <span class="interest-number">05</span>

                <div class="interest-icon">
                    <i class="fa-solid fa-people-group"></i>
                </div>

                <span class="interest-category">
                    COMMUNITY & PARTNERSHIPS
                </span>

                <h2>
                    Community Outreach & Extension
                </h2>

                <p>
                    Sustainable environmental management can only succeed
                    through meaningful collaboration with communities,
                    institutions and development partners.
                </p>

                <p>
                    WASMaN facilitates public education campaigns,
                    stakeholder dialogues, community outreach and
                    collaborative conservation initiatives.
                </p>

                <a href="#" class="interest-link">
                    Explore this area
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="interest-image">

                <img
                    src="{{ asset('pics_vids/com_part.png') }}"
                    alt="Community engagement"
                >

                <div class="image-label">
                    <span>05</span>
                    <strong>Community Outreach and Extension</strong>
                </div>

            </div>

        </article>

    </section>


    {{-- THEMATIC AREAS --}}
    <!-- <section class="thematic-section">

        <div class="thematic-title">

            <!-- <span class="section-label">
                OUR THEMATIC FOCUS
            </span> -->

            <!-- <h2>
                Key Areas We Continue to Advance
            </h2>

            <p>
                Beyond our core programmes, WASMaN remains committed to
                addressing emerging environmental issues through
                multidisciplinary research, innovation and strategic
                partnerships.
            </p> -->

        <!-- </div>


        <div class="thematic-grid">

            <article class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-fish"></i>
                </div>

                <span>01</span>

                <h3>
                    Sustainable Fisheries
                </h3>

                <p>
                    Supporting responsible fisheries management that
                    balances biodiversity conservation with food security
                    and livelihoods.
                </p>

            </article>


            <article class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-tree"></i>
                </div>

                <span>02</span>

                <h3>
                    Mangrove Restoration
                </h3>

                <p>
                    Promoting restoration and protection of mangrove
                    ecosystems to strengthen biodiversity and coastal
                    resilience.
                </p>

            </article>


            <article class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-droplet"></i>
                </div>

                <span>03</span>

                <h3>
                    Water Quality
                </h3>

                <p>
                    Advancing water quality monitoring, pollution control
                    and sustainable freshwater management.
                </p>

            </article>


            <article class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-fish-fins"></i>
                </div>

                <span>04</span>

                <h3>
                    Marine Biodiversity
                </h3>

                <p>
                    Conserving marine species and habitats through research,
                    monitoring and ecosystem-based management.
                </p>

            </article>


            <article class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-book-open"></i>
                </div>

                <span>05</span>

                <h3>
                    Environmental Education
                </h3>

                <p>
                    Inspiring environmental awareness through education,
                    outreach and public engagement programmes.
                </p>

            </article>


            <article class="theme-card">

                <div class="theme-icon">
                    <i class="fa-solid fa-flask-vial"></i>
                </div>

                <span>06</span>

                <h3>
                    Scientific Innovation
                </h3>

                <p>
                    Encouraging technologies and scientific solutions that
                    support sustainable aquatic resource management.
                </p>

            </article>

        </div>

    </section>  -->


    {{-- IMPACT --}}
    <section class="impact-section">

        <div class="impact-header">

            <span class="section-label">
                OUR IMPACT
            </span>

            <h2>
                Creating Meaningful Change Through Collective Action
            </h2>

            <p>
                Every project, partnership and initiative undertaken by
                WASMaN contributes to stronger scientific knowledge,
                healthier aquatic ecosystems and empowered women.
            </p>

        </div>


        <div class="impact-grid">

            <div class="impact-card">

                <div class="impact-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <h2>500+</h2>

                <h3>
                    Women Engaged
                </h3>

                <p>
                    Scientists, students and professionals connected
                    through our network.
                </p>

            </div>


            <div class="impact-card">

                <div class="impact-icon">
                    <i class="fa-solid fa-flask-vial"></i>
                </div>

                <h2>35+</h2>

                <h3>
                    Research Projects
                </h3>

                <p>
                    Collaborative initiatives advancing aquatic science
                    and conservation.
                </p>

            </div>


            <div class="impact-card">

                <div class="impact-icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>

                <h2>20+</h2>

                <h3>
                    Strategic Partners
                </h3>

                <p>
                    Universities, NGOs and institutions supporting
                    our mission.
                </p>

            </div>


            <div class="impact-card">

                <div class="impact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>

                <h2>12+</h2>

                <h3>
                    Communities Reached
                </h3>

                <p>
                    Outreach programmes promoting environmental awareness
                    and resilience.
                </p>

            </div>

        </div>

    </section>


    {{-- FEATURE BANNER --}}
    <section class="interest-banner">

        <div class="banner-overlay">

            <div class="banner-text">

                <span class="section-label">
                    OUR VISION
                </span>

                <h2>
                   A leading network of women in aquatic science & management driving inclusive leadership & sustainable growth across Africa’s blue economy
                </h2>

                <p>
                    Together we are shaping a future where scientific
                    innovation, environmental stewardship and women's
                    leadership create lasting positive impact for
                    people and nature.
                </p>

            </div>

        </div>

    </section>


    {{-- CTA --}}
    <section class="cta-section">

        <div class="cta-inner">

            <span class="section-label">
                GET INVOLVED
            </span>

            <h2>
                Be Part of the Change
            </h2>

            <p>
                Whether you are a researcher, student, policymaker,
                conservation practitioner or development partner, your
                expertise and passion can help build a more sustainable
                future for aquatic ecosystems.
            </p>

            <div class="cta-buttons">

                <a href="/become_member">
                    Become a Member
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="/partner_with_us" class="outline-btn">
                    Partner With Us
                    <i class="fa-solid fa-handshake"></i>
                </a>

            </div>

        </div>

    </section>

</section>


<footer class="footer">

    <div class="footer-container">

        <div class="footer-column footer-brand">

            <div class="footer-brand-mark">
                <i class="fa-solid fa-water"></i>
            </div>

            <h2>WASMaN</h2>

            <p>
                Women in Aquatic Science and Management Network advances
                women's leadership, scientific excellence and collaboration
                for sustainable aquatic resource management.
            </p>

        </div>


        <div class="footer-column">

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


        <div class="footer-column">

            <h3>Focus Areas</h3>

            <ul class="focus-list">
                <li><i class="fa-solid fa-microscope"></i> Aquatic Science</li>
                <li><i class="fa-solid fa-water"></i> Marine Conservation</li>
                <li><i class="fa-solid fa-chart-line"></i> Blue Economy</li>
                <li><i class="fa-solid fa-cloud-sun"></i> Climate Resilience</li>
                <li><i class="fa-solid fa-droplet"></i> Water Conservation</li>
                <li><i class="fa-solid fa-user-tie"></i> Women's Leadership</li>
            </ul>

        </div>


        <div class="footer-column">

            <h3>Contact Us</h3>

            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <div>
                    <span>Email</span>
                    <a href="mailto:info@wasman.org">info@wasman.org</a>
                </div>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <span>Phone</span>
                    <p>+233 XX XXX XXXX</p>
                </div>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <span>Location</span>
                    <p>Cape Coast, Ghana</p>
                </div>
            </div>

        </div>

    </div>


    <div class="footer-divider"></div>


    <div class="footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network (WASMaN).
            All Rights Reserved.
        </p>

        <div class="social-links">

            <a href="#" aria-label="Website">
                <i class="fa-solid fa-globe"></i>
            </a>

            <a href="#" aria-label="LinkedIn">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>

            <a href="#" aria-label="YouTube">
                <i class="fa-brands fa-youtube"></i>
            </a>

        </div>

    </div>

</footer>


<script src="{{ asset('created_js/list_hover_background.js') }}"></script>
<script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('created_js/carousel.js') }}"></script>

</body>
</html>
