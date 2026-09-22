<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WASMaN | Our History</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

@include('components.heading')


<section class="history-section">

    <div class="history">

        {{-- PAGE INTRO --}}
        <div class="history-hero">

            <div class="history-hero-copy">

                <span class="eyebrow">
                    OUR HISTORY
                </span>

                <h1>
                    Women in Aquatic Science and Management Network
                    <span>(WASMaN)</span>
                </h1>

                <p>
                    Empowering women to lead scientific innovation, conservation,
                    climate resilience and sustainable aquatic resource management.
                </p>

            </div>


            <div class="history-hero-mark journey-carousel" aria-label="WASMaN's Journey">
                <div class="journey-header">
                    <div class="history-hero-icon">
                        <i class="fa-solid fa-route"></i>
                    </div>
                    <div>
                        <span class="journey-kicker">OUR TIMELINE</span>
                        <h2>WASMaN’s Journey</h2>
                    </div>
                </div>

                <div class="journey-slides">
                    <article class="journey-slide is-active">
                        <span class="journey-year">2022</span>
                        <p>WASMaN idea conceived</p>
                    </article>
                    <article class="journey-slide">
                        <span class="journey-year">2023</span>
                        <p>Team created to develop the idea</p>
                    </article>
                    <article class="journey-slide">
                        <span class="journey-year">2024</span>
                        <p>Network registration process initiated</p>
                    </article>
                    <article class="journey-slide">
                        <span class="journey-year">2025</span>
                        <p>Network fully registered and obtained legal status</p>
                    </article>
                    <article class="journey-slide">
                        <span class="journey-year">2026</span>
                        <p>Official launch of WASMaN</p>
                    </article>
                </div>

                <div class="journey-footer">
                    <button class="journey-arrow journey-prev" type="button" aria-label="Previous milestone">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <div class="journey-dots" aria-label="Timeline navigation">
                        <button class="journey-dot is-active" type="button" aria-label="Show 2022 milestone"></button>
                        <button class="journey-dot" type="button" aria-label="Show 2023 milestone"></button>
                        <button class="journey-dot" type="button" aria-label="Show 2024 milestone"></button>
                        <button class="journey-dot" type="button" aria-label="Show 2025 milestone"></button>
                        <button class="journey-dot" type="button" aria-label="Show 2026 milestone"></button>
                    </div>

                    <button class="journey-arrow journey-next" type="button" aria-label="Next milestone">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.querySelector('.journey-carousel');
            if (!carousel) return;

            const slides = Array.from(carousel.querySelectorAll('.journey-slide'));
            const dots = Array.from(carousel.querySelectorAll('.journey-dot'));
            const prev = carousel.querySelector('.journey-prev');
            const next = carousel.querySelector('.journey-next');
            let current = 0;
            let timer;

            function showSlide(index) {
                current = (index + slides.length) % slides.length;
                slides.forEach((slide, i) => slide.classList.toggle('is-active', i === current));
                dots.forEach((dot, i) => dot.classList.toggle('is-active', i === current));
            }

            function restart() {
                clearInterval(timer);
                timer = setInterval(() => showSlide(current + 1), 4500);
            }

            prev.addEventListener('click', function () {
                showSlide(current - 1);
                restart();
            });

            next.addEventListener('click', function () {
                showSlide(current + 1);
                restart();
            });

            dots.forEach((dot, index) => {
                dot.addEventListener('click', function () {
                    showSlide(index);
                    restart();
                });
            });

            carousel.addEventListener('mouseenter', () => clearInterval(timer));
            carousel.addEventListener('mouseleave', restart);

            showSlide(0);
            restart();
        });
        </script>

{{-- ORGANIZATION OVERVIEW --}}
        <section class="history-row">

            <div class="history-image-wrap">

                <div class="history-image">

                    <img
                        src="{{ asset('pics_vids/conference.jpeg') }}"
                        alt="WASMaN conference and professional gathering"
                    >

                    <div class="image-badge">
                        <i class="fa-solid fa-users"></i>
                        <span>Our Network</span>
                    </div>

                </div>

            </div>


            <article class="history-content">

                <span class="content-number">
                    01
                </span>

                <div class="content-icon">
                    <i class="fa-solid fa-building-columns"></i>
                </div>

                <span class="content-label">
                    WHO WE ARE
                </span>

                <h2>
                    Organization Overview
                </h2>

                <p>
                    The Women in Aquatic Science and Management Network (WASMaN) is a
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

            </article>

        </section>


        {{-- WHAT IS WASMAN --}}
        <section class="history-row reverse">

            <div class="history-image-wrap">

                <div class="history-image">

                    <img
                        src="{{ asset('pics_vids/what_is_wasman.jpg') }}"
                        alt="Women working in aquatic science and management"
                    >

                    <div class="image-badge">
                        <i class="fa-solid fa-people-group"></i>
                        <span>Community</span>
                    </div>

                </div>

            </div>


            <article class="history-content">

                <span class="content-number">
                    02
                </span>

                <div class="content-icon">
                    <i class="fa-solid fa-network-wired"></i>
                </div>

                <span class="content-label">
                    OUR IDENTITY
                </span>

                <h2>
                    What is WASMaN?
                </h2>

                <p>
                   WASMaN is an inclusive professional network that empowers women and girls through mentorship, leadership development, research collaboration, knowledge sharing and professional networking. 
                </p>

                <p>
                   It promotes innovation in aquatic science and environmental management while inspiring future generations to protect marine and freshwater ecosystems and contribute to sustainable development.
                </p>

            </article>

        </section>


        {{-- INSPIRATION --}}
        <section class="history-row">

            <div class="history-image-wrap">

                <div class="history-image">

                    <img
                        src="{{ asset('pics_vids/what_inspired.jpg') }}"
                        alt="Women inspired by aquatic science and conservation"
                    >

                    <div class="image-badge">
                        <i class="fa-solid fa-lightbulb"></i>
                        <span>Inspiration</span>
                    </div>

                </div>

            </div>


            <article class="history-content">

                <span class="content-number">
                    03
                </span>

                <div class="content-icon">
                    <i class="fa-solid fa-seedling"></i>
                </div>

                <span class="content-label">
                    WHY IT BEGAN
                </span>

                <h2>
                    What Inspired the Establishment of WASMaN?
                </h2>

                <p>
                    WASMaN was inspired by the need to create greater opportunities for
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

            </article>

        </section>


        {{-- PURPOSE --}}
        <!-- <section class="history-row reverse">

            <div class="history-image-wrap">

                <div class="history-image">

                    <img
                        src="{{ asset('pics_vids/what_creation_ofwasman.jpg') }}"
                        alt="Women collaborating in science and sustainability"
                    >

                    <div class="image-badge">
                        <i class="fa-solid fa-compass"></i>
                        <span>Purpose</span>
                    </div>

                </div>

            </div>


            <article class="history-content">

                <span class="content-number">
                    04
                </span>

                <div class="content-icon">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </div>

                <span class="content-label">
                    OUR PURPOSE
                </span>

                <h2>
                    Why WASMaN Was Created
                </h2>

                <p>
                    WASMaN was established to empower women through mentorship,
                    leadership development, scientific collaboration and professional
                    networking while encouraging innovation in aquatic science and
                    environmental sustainability.
                </p>

                <p>
                    The network also seeks to inspire future generations of women to
                    pursue careers in aquatic sciences and become leaders in protecting
                    marine and freshwater ecosystems for sustainable development.
                </p>

            </article>

        </section> -->

    </div>

</section>


<footer class="footer">

    <div class="footer-container">


        <div class="footer-column footer-brand">

            <div class="footer-brand-mark">
                <i class="fa-solid fa-water"></i>
            </div>

            <h2>
                WASMaN
            </h2>

            <p>
                The Women in Aquatic Science and Management Network (WASMaN)
                is committed to empowering women through research, leadership,
                collaboration and innovation in aquatic science, marine
                conservation, climate resilience and the blue economy.
            </p>

        </div>


        <div class="footer-column">

            <h3>
                Quick Links
            </h3>

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


        <div class="footer-column">

            <h3>
                Focus Areas
            </h3>

            <ul class="focus-list">
                <li><i class="fa-solid fa-microscope"></i> Aquatic Science</li>
                <li><i class="fa-solid fa-water"></i> Marine Protected Areas</li>
                <li><i class="fa-solid fa-chart-line"></i> Blue Economy</li>
                <li><i class="fa-solid fa-cloud-sun"></i> Climate Change</li>
                <li><i class="fa-solid fa-droplet"></i> Water Conservation</li>
                <li><i class="fa-solid fa-flask"></i> Research & Innovation</li>
            </ul>

        </div>


        <div class="footer-column">

            <h3>
                Contact Us
            </h3>

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
