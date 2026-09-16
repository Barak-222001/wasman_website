<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WASMaN advances women in aquatic science and management through research, mentorship, capacity building, community engagement and sustainable aquatic resource management.">

    <link rel="preload" as="image" href="{{ asset('pics_vids/home_page_banner.webp') }}" type="image/webp" media="(min-width: 651px)" fetchpriority="high">
    <link rel="preload" as="image" href="{{ asset('pics_vids/home_page_banner_mobile.webp') }}" type="image/webp" media="(max-width: 650px)" fetchpriority="high">

    <title>WASMaN | Women in Aquatic Science & Management</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

@include('components.heading')

<main id="main-content">

{{-- =========================================================
     MAIN HERO — PRESERVED
========================================================= --}}

<section class="hero-banner">
</section>


{{-- =========================================================
     INTRO / KNOWLEDGE
========================================================= --}}

<section class="knowledge-section reveal">

    <div class="section-container">

        <div class="section-heading-row">

            <div>

                <span class="section-label">
                    KNOWLEDGE & AWARENESS
                </span>

                <h2 class="section-title">
                    Knowledge Bite
                </h2>

            </div>

            <a href="/knowledge_bite" class="section-link">
                Explore Knowledge
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <div class="swiper mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide knowledge-card knowledge-card-primary">

                    <!-- <div class="knowledge-card-content">

                        <div class="knowledge-icon">
                            <i class="fa-solid fa-book-open-reader"></i>
                        </div>

                        <span class="knowledge-kicker">
                            Women In Science
                        </span>

                        <h3>
                            Knowledge Bite
                        </h3>

                        <p>
                            Women in aquatic science are making a difference.
                            Through research, mentorship and community engagement,
                            WASMaN members are promoting the sustainable management
                            of aquatic resources and inspiring more girls and women
                            to pursue careers in science and environmental conservation.
                        </p>

                    </div> -->
<img src="{{ asset('pics_vids/kn1.svg') }}" alt="WASMaN knowledge and awareness graphic" class="wasman-logo" loading="lazy" decoding="async">


                </div>


                <div class="swiper-slide knowledge-card knowledge-card-light">

                    <!-- <div class="knowledge-card-content">

                        <div class="knowledge-icon">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>

                        <span class="knowledge-kicker">
                            Did You Know?
                        </span>

                        <h3>
                            Coastal Ecosystems Matter
                        </h3>

                        <div class="fact-grid">

                            <div class="fact-item">
                                <i class="fa-solid fa-leaf"></i>
                                <p>
                                    Mangrove forests can store up to four times
                                    more carbon per hectare than tropical rainforests.
                                </p>
                            </div>

                            <div class="fact-item">
                                <i class="fa-solid fa-shield-halved"></i>
                                <p>
                                    Healthy coastal ecosystems help reduce the
                                    impact of storm surges and coastal erosion.
                                </p>
                            </div>

                            <div class="fact-item">
                                <i class="fa-solid fa-recycle"></i>
                                <p>
                                    Plastic waste can remain in marine environments
                                    for hundreds of years.
                                </p>
                            </div>

                        </div>

                    </div> -->
<picture>
    <source media="(max-width: 650px)" srcset="{{ asset('pics_vids/kn2_mobile.webp') }}" type="image/webp">
    <img src="{{ asset('pics_vids/kn2.webp') }}" alt="WASMaN knowledge bite graphic" class="wasman-logo" loading="lazy" decoding="async" width="1400" height="788">
</picture>

                </div>


                <div class="swiper-slide knowledge-card knowledge-card-soft">

                    <!-- <div class="knowledge-card-content">

                        <div class="knowledge-icon">
                            <i class="fa-solid fa-water"></i>
                        </div>

                        <span class="knowledge-kicker">
                            Why Our Work Matters
                        </span>

                        <h3>
                            Why WASMaN's Activities Matter
                        </h3>

                        <div class="matter-list">

                            <div class="matter-item">
                                <span>01</span>
                                <p>
                                    WASMaN helps increase the participation and leadership
                                    of women in aquatic science and resource management.
                                </p>
                            </div>

                            <div class="matter-item">
                                <span>02</span>
                                <p>
                                    The network provides a platform for professionals,
                                    researchers and students to collaborate and exchange ideas.
                                </p>
                            </div>

                            <div class="matter-item">
                                <span>03</span>
                                <p>
                                    Research and outreach activities contribute to sustainable
                                    management of fisheries, coastal and marine resources.
                                </p>
                            </div>

                        </div>

                    </div> -->
<picture>
    <source media="(max-width: 650px)" srcset="{{ asset('pics_vids/kn3_mobile.webp') }}" type="image/webp">
    <img src="{{ asset('pics_vids/kn3.webp') }}" alt="WASMaN knowledge bite graphic" class="wasman-logo" loading="lazy" decoding="async" width="1400" height="788">
</picture>


                </div>

            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>

        </div>

    </div>

</section>


{{-- =========================================================
     WHO WE ARE
========================================================= --}}

<section class="who_we_are reveal">

    <div class="section-container">

        <div class="who-layout">

            <div class="who-copy">

                <span class="section-label">
                    ABOUT WASMaN
                </span>

                <h2 class="section-title">
                    Who We Are
                </h2>

                <p>
                    The Women in Aquatic Science and Management Network
                    (WASMaN) is a network committed to promoting the
                    participation, leadership and advancement of women
                    in aquatic science and resource management.
                </p>

                <p>
                    Through research, capacity building, mentorship,
                    community engagement and collaboration, WASMaN creates
                    opportunities for women and girls to contribute
                    meaningfully to the sustainable management of aquatic
                    resources.
                </p>

                <a href="/news" class="primary-link-button">
                    Discover More
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="who-feature-grid">

                <article class="who-feature-card">

                    <div class="feature-icon">
                        <i class="fa-solid fa-seedling"></i>
                    </div>

                    <span class="feature-number">
                        01
                    </span>

                    <h3>
                        Empowerment
                    </h3>

                    <p>
                        Creating opportunities for women to thrive
                        in aquatic science and management.
                    </p>

                </article>


                <article class="who-feature-card">

                    <div class="feature-icon">
                        <i class="fa-solid fa-compass"></i>
                    </div>

                    <span class="feature-number">
                        02
                    </span>

                    <h3>
                        Leadership
                    </h3>

                    <p>
                        Promoting women's participation and leadership
                        in aquatic resource management.
                    </p>

                </article>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FOCUS AREAS
========================================================= --}}

<section class="focus-section reveal">

    <div class="section-container">

        <div class="section-heading-row">

            <div>

                <span class="section-label">
                    WHAT WE DO
                </span>

                <h2 class="section-title">
                    Our Focus Areas
                </h2>

            </div>

            <p class="section-intro">
                Our work brings together research, leadership,
                sustainability and collaboration to strengthen
                aquatic science and management.
            </p>

        </div>


        <div class="focus-grid">

            <article class="focus-card">

                <div class="focus-icon">
                    <i class="fa-solid fa-microscope"></i>
                </div>

                <span class="focus-number">
                    01
                </span>

                <h3>
                    Research & Innovation
                </h3>

                <p>
                    Promoting quality, inclusive research that integrates
                    scientific and indigenous knowledge to address aquatic
                    and environmental challenges.
                </p>

                <a href="/publications">
                    Explore Research
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>


            <article class="focus-card">

                <div class="focus-icon">
                    <i class="fa-solid fa-user-group"></i>
                </div>

                <span class="focus-number">
                    02
                </span>

                <h3>
                    Capacity Building & Mentorship
                </h3>

                <p>
                    Delivering training, mentorship and professional
                    development opportunities for women and girls.
                </p>

                <a href="/areas_of_interest">
                    Learn More
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>


            <article class="focus-card">

                <div class="focus-icon">
                    <i class="fa-solid fa-water"></i>
                </div>

                <span class="focus-number">
                    03
                </span>

                <h3>
                    Sustainable Aquatic Resources
                </h3>

                <p>
                    Supporting sustainable management and conservation
                    of aquatic, coastal and marine resources.
                </p>

                <a href="/what_we_do">
                    Our Activities
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>


            <article class="focus-card">

                <div class="focus-icon">
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>

                <span class="focus-number">
                    04
                </span>

                <h3>
                    Collaboration & Networking
                </h3>

                <p>
                    Connecting professionals, researchers, students,
                    institutions and communities to exchange knowledge
                    and build meaningful partnerships.
                </p>

                <a href="/become_member">
                    Join the Network
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}

<section class="cta-section reveal">

    <div class="cta-overlay">

        <div class="cta-content">

            <span class="section-label">
                BE PART OF THE CHANGE
            </span>

            <h2>
                Together, We Can Shape the Future
                of Aquatic Science.
            </h2>

            <p>
                Whether you are a researcher, student, professional,
                organisation or advocate, there is a place for you
                within the WASMaN community.
            </p>

            <a href="/become_member" class="cta-btn">
                Join WASMaN
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


</main>

{{-- =========================================================
     FOOTER
========================================================= --}}

<footer class="second_part">

    <div class="sub_sections">

        <div class="footer-brand">

            <h3>
                Women in Aquatic Science and Management Network
            </h3>

            <p>
                Advancing women, science and sustainable aquatic resource management.
            </p>

            <div class="footer-location">
                <i class="fa-solid fa-location-dot"></i>
                <span>Ghana, West Africa</span>
            </div>

            <div class="footer-copyright">
                &copy; 2026 WASMaN. All rights reserved.
            </div>

        </div>


        <div class="footer-column">

            <h4>
                Quick Links
            </h4>

            <a href="/what_we_do">
                About Us
            </a>

            <a href="/ongoing_projects">
                Activities
            </a>

            <a href="/publications">
                Research
            </a>

            <a href="/general_enquiries">
                Contact
            </a>

        </div>


        <div class="footer-column">

            <h4>
                Connect
            </h4>

            <a href="https://youtube.com/@wasman-official?si=tnqgaMX7BBCAEcsC">
                <i class="fa-brands fa-youtube"></i>
                @wasman-official
            </a>

            <a href="mailto:info@wasman.org">
                <i class="fa-solid fa-envelope"></i>
                info@wasman.org
            </a>

            <a href="{{ url('/') }}">
                <i class="fa-solid fa-globe"></i>
                wasman.org
            </a>

        </div>

    </div>

</footer>


<script src="{{ asset('created_js/list_hover_background.js') }}"></script>
<script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('created_js/carousel.js') }}"></script>
<script src="{{ asset('created_js/animation.js') }}"></script>

</body>
</html>
