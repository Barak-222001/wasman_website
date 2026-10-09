<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WASMaN advances women in aquatic science and management through research, mentorship, capacity building, community engagement and sustainable aquatic resource management.">

    <link rel="preload" as="image" href="{{ versioned_asset('pics_vids/home_page_banner.webp') }}" type="image/webp" media="(min-width: 651px)" fetchpriority="high">
    <link rel="preload" as="image" href="{{ versioned_asset('pics_vids/home_page_banner_mobile.webp') }}" type="image/webp" media="(max-width: 650px)" fetchpriority="high">

    <title>WASMaN | Women in Aquatic Science & Management</title>

    <!-- Round 3: external fonts/icons no longer block the first render -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <link rel="preload"
          href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700"
          as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700"
              rel="stylesheet">
    </noscript>

    <link rel="preload"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    </noscript>

    <link rel="stylesheet" href="{{ versioned_asset('css/welcome.css') }}">
    <link rel="preload" href="{{ versioned_asset('css/swiper-bundle.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ versioned_asset('css/swiper-bundle.min.css') }}"></noscript>

</head>

<body>

@include('components.heading')

<main id="main-content">

{{-- =========================================================
     MAIN HERO — PRESERVED
========================================================= --}}

<section class="hero-banner">
   

        <div class="swiper mySwiper hero-swiper">

            <div class="swiper-wrapper">
            
            <div class="swiper-slide hero-slide knowledge-card knowledge-card-light">
                <picture>
                    <source media="(max-width: 650px)" srcset="{{ versioned_asset('pics_vids/home_page_banner_mobile.webp') }}" type="image/webp">
                    <img src="{{ versioned_asset('pics_vids/home_page_banner.webp') }}" alt="WASMaN — Women in Aquatic Science and Management Network" class="wasman-logo" fetchpriority="high" decoding="async" width="1400" height="788">
                </picture>
            </div>

            <div class="swiper-slide hero-slide knowledge-card knowledge-card-light">
                <picture>
                    <source media="(max-width: 650px)" srcset="{{ versioned_asset('pics_vids/what_we_do/sea.png') }}" type="image/webp">
                    <img src="{{ versioned_asset('pics_vids/what_we_do/sea.png') }}" alt="Women advancing aquatic science through research, learning and professional development" class="wasman-logo" loading="lazy" decoding="async" width="1400" height="788">
                </picture>
                <div class="hero-slide-overlay hero-slide-overlay-left">
                    <span class="hero-slide-kicker">RESEARCH • CAPACITY DEVELOPMENT</span>
                    <h2>Advancing Women in Aquatic Science</h2>
                    <p>Strengthening research, professional development and mentoring so women can grow, lead and contribute to sustainable aquatic resource management.</p>
                </div>
            </div>

            <div class="swiper-slide hero-slide knowledge-card knowledge-card-soft">
                <picture>
                    <source media="(max-width: 650px)" srcset="{{ versioned_asset('pics_vids/four.jpg') }}" type="image/webp">
                    <img src="{{ versioned_asset('pics_vids/four.jpg') }}" alt="Women building networks, partnerships and leadership in aquatic science and management" class="wasman-logo" loading="lazy" decoding="async" width="1400" height="788">
                </picture>
                <div class="hero-slide-overlay hero-slide-overlay-right">
                    <span class="hero-slide-kicker">ADVOCACY • NETWORKING • PARTNERSHIPS</span>
                    <h2>Building Visibility, Leadership &amp; Collaboration</h2>
                    <p>Connecting women, institutions and partners to expand opportunities, strengthen professional networks and advance women’s representation and leadership.</p>
                </div>
            </div>

            </div>

            <div class="swiper-button-prev"><</div>
            <div class="swiper-button-next">></div>
            <div class="swiper-pagination"></div>

        </div>





</section>

{-- =========================================================
     FEATURED RESEARCH SPOTLIGHT — PUBLICATION (NOT WEBINAR)
========================================================= --}
<section class="home-spotlight-ad spotlight-new-arrival home-featured-research" aria-labelledby="home-research-title">
    <div class="section-container">
        <div class="spotlight-ad-heading">
            <span class="spotlight-ad-eyebrow">WASMaN RESEARCH SPOTLIGHT</span>
            <h2 id="home-research-title">Featured Research: Fetu Afahye and Fosu Lagoon</h2>
            <p>Explore the research summary flyer or read the complete illustrated article.</p>
        </div>
        <div class="spotlight-ad-layout">
            <a href="{{ asset('pics_vids/research-spotlight/fetu-afahye-research-flyer.png') }}" class="spotlight-ad-flyer" target="_blank" rel="noopener noreferrer" aria-label="View the Fetu Afahye research summary flyer as an image">
                <img src="{{ asset('pics_vids/research-spotlight/fetu-afahye-research-flyer.png') }}" alt="Research summary flyer: What Fetu Afahye Reveals About Lagoon Stewardship and Sanitation" loading="lazy">
                <span class="home-flyer-caption"><i class="fa-regular fa-image"></i> View summary flyer</span>
            </a>
            <div class="spotlight-ad-details home-featured-research-details">
                <span class="home-featured-label"><i class="fa-solid fa-book-open-reader"></i> FEATURED RESEARCH</span>
                <h3>What Fetu Afahye Reveals About Lagoon Stewardship and Sanitation</h3>
                <p>By Ms Cindy Owusu &amp; Dr. Alberta Sagoe</p>
                <p>Learn how cultural practices, fisheries stewardship and communal sanitation intersect at Cape Coast’s Fosu Lagoon.</p>
                <div class="home-featured-actions">
                    <a href="{{ asset('pics_vids/research-spotlight/fetu-afahye-research-flyer.png') }}" download="WASMaN-Fetu-Afahye-Research-Summary-Flyer.png" class="spotlight-ad-register"><i class="fa-solid fa-download"></i> Download Summary Flyer</a>
                    <a href="{{ asset('resources/research-spotlight/fetu-afahye-lagoon-stewardship-and-sanitation.pdf') }}" target="_blank" rel="noopener noreferrer" class="spotlight-ad-page-link"><i class="fa-regular fa-file-pdf"></i> Read Full Article</a>
                    <a href="{{ url('/research-spotlight') }}" class="spotlight-ad-page-link"><i class="fa-solid fa-arrow-right"></i> Explore Research Spotlight</a>
                </div>
            </div>
        </div>
    </div>
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
                    Knowledge Bites
                </h2>

            </div>

            <a href="/knowledge_bite" class="section-link">
                Explore Knowledge
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


       

        <div class="swiper-slide knowledge-card knowledge-card-primary">
            <img src="{{ versioned_asset('pics_vids/kn.webp') }}" alt="WASMaN knowledge and awareness graphic" class="wasman-logo" loading="lazy" decoding="async">
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

            <!-- <p class="section-intro">
                Our work brings together research, leadership,
                sustainability and collaboration to strengthen
                aquatic science and management.
            </p> -->

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

                <!-- <a href="/publications">
                    Explore
                    <i class="fa-solid fa-arrow-right"></i>
                </a> -->

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

                <!-- <a href="/areas_of_interest">
                    Explore
                    <i class="fa-solid fa-arrow-right"></i>
                </a> -->

            </article>


            <article class="focus-card">

                <div class="focus-icon">
                    <i class="fa-solid fa-water"></i>
                </div>

                <span class="focus-number">
                    03
                </span>

                <h3>
                    Policy & Advocacy
                </h3>

                <p>
                    Advancing recognition of women's professional skills, celebrating their achievements, and advocating for equal opportunities and greater influence in national, regional and international aquatic science and management policies. 
                </p>

                <!-- <a href="/what_we_do">
                    Explore
                    <i class="fa-solid fa-arrow-right"></i>
                </a> -->

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

                <!-- <a href="/become_member">
                   Explore
                    <i class="fa-solid fa-arrow-right"></i>
                </a> -->

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


<script src="{{ versioned_asset('created_js/list_hover_background.js') }}"></script>
<script src="{{ versioned_asset('created_js/swiper-bundle.min.js') }}"></script>
<script src="{{ versioned_asset('created_js/carousel.js') }}"></script>
<script src="{{ versioned_asset('created_js/animation.js') }}"></script>


<!-- Floating Donate Button -->
<!-- <a href="{{ url('/donate') }}" class="wasman-donate-float" aria-label="Donate to WASMaN">
    <span class="wasman-donate-pulse"></span>
    <i class="fa-solid fa-heart"></i>
    <span>Donate</span>
</a> -->


<script>
document.addEventListener('DOMContentLoaded', function () {
    const spotlight = document.querySelector('.spotlight-new-arrival');

    if (!spotlight) return;

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                /*
                 Restart the entrance sequence every time the visitor scrolls
                 back to the Research Spotlight advert.
                */
                spotlight.classList.remove('spotlight-animate-in');

                void spotlight.offsetWidth;

                spotlight.classList.add('spotlight-animate-in');
            } else {
                spotlight.classList.remove('spotlight-animate-in');
            }
        });
    }, {
        threshold: 0.25
    });

    observer.observe(spotlight);
});
</script>

</body>
</html>
