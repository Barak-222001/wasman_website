<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WASMaN | Our Team</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/team.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

@include('components.heading')


<section class="team-page">

    {{-- PAGE INTRO --}}
    <section class="team-hero">

        <div class="team-hero-copy">

            <span class="eyebrow">
                OUR TEAM
            </span>

            <h1>
                Meet the Women
                <span>Leading Change</span>
            </h1>

            <p>
                WASMaN is driven by a passionate community of scientists,
                researchers, educators, conservationists and professionals
                committed to advancing women's leadership in aquatic science,
                marine conservation and the sustainable blue economy.
            </p>

        </div>

        <div class="team-hero-card">

            <div class="hero-icon">
                <i class="fa-solid fa-users-viewfinder"></i>
            </div>

            <strong>
                Women • Science • Leadership
            </strong>

            <p>
                A multidisciplinary network advancing aquatic research,
                conservation and sustainable development.
            </p>

        </div>

    </section>


    {{-- EXECUTIVE COMMITTEE --}}
    <section class="leadership-section">

        <div class="section-heading-row">

            <div>

                <span class="section-label">
                    LEADERSHIP
                </span>

                <h2>
                    Executive Committee
                </h2>

            </div>

            <p>
                Our Executive Committee provides strategic direction and
                coordinates the activities, programmes and growth of WASMaN.
            </p>

        </div>


        <div class="team-grid">

            <article class="member">

                <div class="member-image">

                    <img
                        src="{{ asset('pics_vids/dr.alberta.jpeg') }}"
                        alt="Dr. Alberta Ama Saggoe"
                    >

                    <div class="member-badge">
                        <i class="fa-solid fa-crown"></i>
                        President
                    </div>

                </div>

                <div class="member-info">

                    <span class="member-index">01</span>

                    <h3>
                        Dr. Alberta Ama Saggoe
                    </h3>

                    <div class="member-specialty">
                        Aquatic Science & Environmental Management
                    </div>

                    <p>
                        Providing strategic leadership and advancing the
                        vision and mission of WASMaN through scientific
                        collaboration and environmental stewardship.
                    </p>

                </div>

            </article>


            <article class="member">

                <div class="member-image">

                    <img
                        src="{{ asset('pics_vids/michelle_clottey.jpeg') }}"
                        alt="Dr. Michelle Clottey"
                    >

                    <div class="member-badge">
                        <i class="fa-solid fa-people-arrows"></i>
                        Vice President
                    </div>

                </div>

                <div class="member-info">

                    <span class="member-index">02</span>

                    <h3>
                        Dr. Michelle Clottey
                    </h3>

                    <div class="member-specialty">
                        Marine Science & Fisheries Management
                    </div>

                    <p>
                        Supporting strategic leadership and strengthening
                        collaboration across the WASMaN community.
                    </p>

                </div>

            </article>


            <article class="member">

                <div class="member-image">

                    <img
                        src="{{ asset('pics_vids/michelle.jpeg') }}"
                        alt="Dr. Angela Brown"
                    >

                    <div class="member-badge">
                        <i class="fa-solid fa-file-lines"></i>
                        Secretary
                    </div>

                </div>

                <div class="member-info">

                    <span class="member-index">03</span>

                    <h3>
                        Dr. Angela Brown
                    </h3>

                    <div class="member-specialty">
                        Environmental Research & Coastal Management
                    </div>

                    <p>
                        Coordinating network communication, documentation
                        and administrative activities.
                    </p>

                </div>

            </article>


            <article class="member">

                <div class="member-image">

                    <img
                        src="{{ asset('pics_vids/dr.kassah.jpeg') }}"
                        alt="Dr. Grace Wilson"
                    >

                    <div class="member-badge">
                        <i class="fa-solid fa-coins"></i>
                        Treasurer
                    </div>

                </div>

                <div class="member-info">

                    <span class="member-index">04</span>

                    <h3>
                        Dr. Grace Wilson
                    </h3>

                    <div class="member-specialty">
                        Fisheries Science & Blue Economy
                    </div>

                    <p>
                        Supporting responsible financial management,
                        accountability and resource mobilisation.
                    </p>

                </div>

            </article>


            <article class="member">

                <div class="member-image">

                    <img
                        src="{{ asset('pics_vids/dr.huge.jpeg') }}"
                        alt="Dr. Rebecca Green"
                    >

                    <div class="member-badge">
                        <i class="fa-solid fa-diagram-project"></i>
                        Programs Coordinator
                    </div>

                </div>

                <div class="member-info">

                    <span class="member-index">05</span>

                    <h3>
                        Dr. Rebecca Green
                    </h3>

                    <div class="member-specialty">
                        Climate Resilience & Aquatic Conservation
                    </div>

                    <p>
                        Coordinating programmes and initiatives that advance
                        the objectives and impact of WASMaN.
                    </p>

                </div>

            </article>

        </div>

    </section>


    {{-- NETWORK MEMBERS --}}
    <section class="network-members">

        <div class="section-heading-row network-heading">

            <div>

                <span class="section-label">
                    OUR COMMUNITY
                </span>

                <h2>
                    Network Members
                </h2>

            </div>

            <p>
                WASMaN brings together women and professionals from
                diverse backgrounds who share a commitment to aquatic
                science, conservation, research and sustainable development.
            </p>

        </div>


        <div class="members-grid">

            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/member-one.jpg') }}" alt="Dr. Sarah Mensah">
                </div>

                <div class="network-member-info">
                    <h3>Dr. Sarah Mensah</h3>
                    <span>Aquatic Scientist</span>
                </div>

                <i class="fa-solid fa-water member-mini-icon"></i>

            </article>


            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/member-two.jpg') }}" alt="Dr. Linda Owusu">
                </div>

                <div class="network-member-info">
                    <h3>Dr. Linda Owusu</h3>
                    <span>Marine Researcher</span>
                </div>

                <i class="fa-solid fa-fish-fins member-mini-icon"></i>

            </article>


            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/member-three.jpg') }}" alt="Dr. Mary Boateng">
                </div>

                <div class="network-member-info">
                    <h3>Dr. Mary Boateng</h3>
                    <span>Environmental Scientist</span>
                </div>

                <i class="fa-solid fa-seedling member-mini-icon"></i>

            </article>


            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/member-four.jpg') }}" alt="Dr. Evelyn Asante">
                </div>

                <div class="network-member-info">
                    <h3>Dr. Evelyn Asante</h3>
                    <span>Fisheries Researcher</span>
                </div>

                <i class="fa-solid fa-microscope member-mini-icon"></i>

            </article>


            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/member-five.jpg') }}" alt="Dr. Janet Addo">
                </div>

                <div class="network-member-info">
                    <h3>Dr. Janet Addo</h3>
                    <span>Conservation Specialist</span>
                </div>

                <i class="fa-solid fa-leaf member-mini-icon"></i>

            </article>


            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/member-six.jpg') }}" alt="Dr. Patricia Kusi">
                </div>

                <div class="network-member-info">
                    <h3>Dr. Patricia Kusi</h3>
                    <span>Climate Researcher</span>
                </div>

                <i class="fa-solid fa-cloud-sun member-mini-icon"></i>

            </article>

        </div>


        <div class="member-count">

            <div class="count-item">
                <div class="count-icon">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <strong>100+</strong>
                <span>Network Members</span>
            </div>

            <div class="count-item">
                <div class="count-icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <strong>10+</strong>
                <span>Disciplines</span>
            </div>

            <div class="count-item">
                <div class="count-icon">
                    <i class="fa-solid fa-earth-africa"></i>
                </div>
                <strong>5+</strong>
                <span>Countries</span>
            </div>

        </div>

    </section>


    {{-- TEAM VALUES --}}
    <section class="values-section">

        <div class="section-heading-row">

            <div>

                <span class="section-label">
                    HOW WE WORK
                </span>

                <h2>
                    Our Team Values
                </h2>

            </div>

            <p>
                The principles that guide how WASMaN works, collaborates
                and develops the next generation of women leaders.
            </p>

        </div>


        <div class="values">

            <article class="value-box">

                <div class="value-icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>

                <span class="value-number">
                    01
                </span>

                <h3>
                    Collaboration
                </h3>

                <p>
                    Bringing together experts from diverse disciplines to
                    solve complex environmental challenges.
                </p>

            </article>


            <article class="value-box">

                <div class="value-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>

                <span class="value-number">
                    02
                </span>

                <h3>
                    Innovation
                </h3>

                <p>
                    Promoting research, creativity and scientific excellence
                    in aquatic science and management.
                </p>

            </article>


            <article class="value-box">

                <div class="value-icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>

                <span class="value-number">
                    03
                </span>

                <h3>
                    Mentorship
                </h3>

                <p>
                    Supporting the next generation of women in aquatic
                    science through knowledge sharing and mentorship.
                </p>

            </article>

        </div>

    </section>


    {{-- JOIN CTA --}}
    <section class="join-team">

        <div class="join-content">

            <span>
                JOIN THE NETWORK
            </span>

            <h2>
                Become Part of Our Growing Community
            </h2>

            <p>
                Together, we can strengthen women's participation in
                aquatic science, protect our aquatic ecosystems and
                create a more sustainable future.
            </p>

            <a href="/become_member">
                Become a Member
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <div class="join-visual">

            <div class="join-icon">
                <i class="fa-solid fa-people-group"></i>
            </div>

            <span>
                Science • Mentorship • Impact
            </span>

        </div>

    </section>

</section>


<footer class="footer">

    <div class="footer-top">

        <div class="footer-newsletter">

            <span class="footer-eyebrow">
                STAY CONNECTED
            </span>

            <h2>
                Join the WASMaN Community
            </h2>

            <p>
                Stay informed about our latest research, conservation
                projects, training programmes, events and opportunities
                for collaboration.
            </p>

        </div>

        <form class="subscribe-form">

            <div class="subscribe-field">
                <i class="fa-solid fa-envelope"></i>

                <input
                    type="email"
                    placeholder="Enter your email address"
                >
            </div>

            <button type="submit">
                Subscribe
                <i class="fa-solid fa-arrow-right"></i>
            </button>

        </form>

    </div>


    <div class="footer-content">

        <div class="footer-box footer-brand">

            <div class="footer-brand-mark">
                <i class="fa-solid fa-water"></i>
            </div>

            <h3>
                WASMaN
            </h3>

            <p>
                Women in Aquatic Science and Management Network (WASMaN)
                is committed to advancing women's leadership, scientific
                excellence and collaboration in aquatic science, marine
                conservation, climate resilience and sustainable blue
                economy initiatives.
            </p>

        </div>


        <div class="footer-box">

            <h3>
                Quick Links
            </h3>

            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/history">History</a></li>
                <li><a href="/what_we_do">What We Do</a></li>
                <li><a href="/ongoing">Projects</a></li>
                <li><a href="/become_member">Membership</a></li>
                <li><a href="/general_enquiries">Contact</a></li>
            </ul>

        </div>


        <div class="footer-box">

            <h3>
                Focus Areas
            </h3>

            <ul class="focus-list">
                <li><i class="fa-solid fa-microscope"></i> Aquatic Science</li>
                <li><i class="fa-solid fa-water"></i> Marine Protected Areas</li>
                <li><i class="fa-solid fa-chart-line"></i> Blue Economy</li>
                <li><i class="fa-solid fa-cloud-sun"></i> Climate Resilience</li>
                <li><i class="fa-solid fa-droplet"></i> Water Conservation</li>
                <li><i class="fa-solid fa-user-tie"></i> Women's Leadership</li>
            </ul>

        </div>


        <div class="footer-box">

            <h3>
                Contact Us
            </h3>

            <div class="footer-contact-item">
                <i class="fa-solid fa-envelope"></i>
                <div>
                    <span>Email</span>
                    <a href="mailto:info@wasman.org">
                        info@wasman.org
                    </a>
                </div>
            </div>

            <div class="footer-contact-item">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <span>Phone</span>
                    <p>+233 XX XXX XXXX</p>
                </div>
            </div>

            <div class="footer-contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <span>Location</span>
                    <p>Cape Coast, Ghana</p>
                </div>
            </div>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network
            (WASMaN). All Rights Reserved.
        </p>

        <div class="social-icons">

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
