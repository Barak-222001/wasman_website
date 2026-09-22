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

        <!-- <div class="team-hero-card">

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

        </div> -->

    </section>


    {{-- EXECUTIVE COMMITTEE --}}
    <section class="leadership-section">

        <div class="section-heading-row">

            <div>

                <span class="section-label">
                    LEADERSHIP
                </span>

                <h2>
                    Leadership Committee
                </h2>

            </div>

            <p>
            The Leadership Committee provides strategic direction and oversight for WASMaN. It guides the Network’s policies, programmes and partnerships, supports resource mobilisation, and ensures that activities align with WASMaN’s mission, values and long-term goals.
            </p>

        </div>


        <div class="team-grid">

            <article class="member leadership-card" tabindex="0" role="button" aria-label="View full biography of Dr. Alberta Ama Sagoe" data-name="Dr. Alberta Ama Sagoe" data-role="President" data-specialty="Aquatic Science &amp; Environmental Management" data-image="{{ asset('pics_vids/dr.alberta.jpeg') }}" data-bio="Dr. Sagoe is a Ghanaian coastal and marine resources management professional whose work focuses on inclusive and sustainable management of oceans and coastal resources. With a career spanning research, policy development, and international collaboration, she has become a leading voice in advancing Africa’s blue economy and promoting inclusive participation in aquatic science and management.\n\nDr. Sagoe holds a PhD in Integrated Coastal Zone Management and a double master’s degree in Marine Spatial Planning and Governance and Sustainable Development. Her academic and professional work has centered on addressing the complex environmental and governance challenges affecting coastal communities and marine ecosystems across West Africa. Through her research and policy engagement, she has contributed to efforts that promote sustainable ocean use and responsible coastal development – including the designation of Ghana’s first Marine Protected Area, development of Africa’s first continental strategy on gender mainstreaming in aquatic biodiversity conservation, and development of blue economy strategies and investment plans for Nigeria and Guinea Bissau.\n\nBeyond her policy and research contributions, Dr. Sagoe is a passionate advocate for expanding opportunities for women and young people in coastal and marine sectors. She has consistently encouraged greater participation of girls and young women in science, technology, and blue economy careers, recognizing their vital role in building a sustainable “blue” Africa.">
                <div class="member-image">
                    <img src="{{ asset('pics_vids/dr.alberta.jpeg') }}" alt="Dr. Alberta Ama Sagoe">
                    <div class="member-badge"><i class="fa-solid fa-crown"></i> President</div>
                </div>
                <div class="member-info">
                    <span class="member-index">01</span>
                    <h3>Dr. Alberta Ama Sagoe</h3>
                    <div class="member-specialty">Aquatic Science & Environmental Management</div>
                    <p>Dr. Sagoe is a Ghanaian coastal and marine resources management professional whose work focuses on inclusive and sustainable management of oceans and coastal resources. With a…</p>
                    <span class="bio-card-hint"><i class="fa-solid fa-arrow-up-right-from-square"></i> View full bio</span>
                </div>
            </article>

            <article class="member leadership-card" tabindex="0" role="button" aria-label="View full biography of Dr. Michelle Naa Kordei Clottey Sackey" data-name="Dr. Michelle Naa Kordei Clottey Sackey" data-role="Vice President" data-specialty="Fisheries Science &amp; Coastal Resource Sustainability" data-image="{{ asset('pics_vids/michelle_clottey.jpeg') }}" data-bio="Dr. Michelle Naa Kordei Clottey Sackey is a Ghanaian fisheries scientist and lecturer at the University of Cape Coast, Ghana. Her work focuses on fish biology, stock assessment, fisheries management, and coastal resource sustainability, with a strong commitment to translating science into practical solutions for fisheries-dependent communities. Michelle is passionate about mentoring young women in science, advancing inclusive ocean governance, and amplifying women’s voices in aquatic and environmental sciences. Beyond the lab and lecture hall, she enjoys cooking, swimming, and engaging in outreach that inspires the next generation of women in STEM.">
                <div class="member-image">
                    <img src="{{ asset('pics_vids/michelle.jpeg') }}" alt="Dr. Michelle Naa Kordei Clottey Sackey">
                    <div class="member-badge"><i class="fa-solid fa-people-arrows"></i> Vice President</div>
                </div>
                <div class="member-info">
                    <span class="member-index">02</span>
                    <h3>Dr. Michelle Naa Kordei Clottey Sackey</h3>
                    <div class="member-specialty">Fisheries Science & Coastal Resource Sustainability</div>
                    <p>Dr. Michelle Naa Kordei Clottey Sackey is a Ghanaian fisheries scientist and lecturer at the University of Cape Coast, Ghana. Her work focuses on fish biology, stock assessment,…</p>
                    <span class="bio-card-hint"><i class="fa-solid fa-arrow-up-right-from-square"></i> View full bio</span>
                </div>
            </article>

            <article class="member leadership-card" tabindex="0" role="button" aria-label="View full biography of Dr. Jemimah Etornam Kassah" data-name="Dr. Jemimah Etornam Kassah" data-role="Treasurer" data-specialty="Fisheries Science, Aquaculture &amp; Conservation" data-image="{{ asset('pics_vids/michelle.jpeg') }}" data-bio="Dr. Kassah is a passionate conservation enthusiast, fisheries scientist, aquaculture professional and lecturer at the Department of Biology Education of the University of Education, Winneba in Ghana. She holds a PhD (Fisheries Science) from the University of Cape Coast, Ghana, MSc. (Sustainable Coastal Development) from the Norwegian University of Science and Technology (Trondheim, Norway); and a BSc. (Oceanography and Fisheries) from the University of Ghana. With over 14 years of experience in fisheries and aquaculture, she is actively involved in fisheries research, aquaculture consultancy, public relations (environmental issues) and volunteer work.\n\nDr. Kassah is passionate about conservation issues and loves to communicate this via public and social media platforms whenever she gets the chance. Her research interests include tropical fisheries biology, climate change, Blue Justice, fisheries oceanography and biodiversity conservation. She has also had the opportunity to present at and facilitate at both local and internal conferences; as well as publish relevant scientific contributions to literature as an early career scientist. She is also a private consultant in Ghana’s fisheries and aquaculture spaces; catering to donor agencies, corporate clients and private start-ups. She reads storybooks, cooks and dances for leisure.">
                <div class="member-image">
                    <img src="{{ asset('pics_vids/michelle.jpeg') }}" alt="Dr. Jemimah Etornam Kassah">
                    <div class="member-badge"><i class="fa-solid fa-coins"></i> Treasurer</div>
                </div>
                <div class="member-info">
                    <span class="member-index">03</span>
                    <h3>Dr. Jemimah Etornam Kassah</h3>
                    <div class="member-specialty">Fisheries Science, Aquaculture & Conservation</div>
                    <p>Dr. Kassah is a passionate conservation enthusiast, fisheries scientist, aquaculture professional and lecturer at the Department of Biology Education of the University of…</p>
                    <span class="bio-card-hint"><i class="fa-solid fa-arrow-up-right-from-square"></i> View full bio</span>
                </div>
            </article>

            <article class="member leadership-card" tabindex="0" role="button" aria-label="View full biography of Dr. Rahmat Quaigrane Duker" data-name="Dr. Rahmat Quaigrane Duker" data-role="Secretary" data-specialty="Aquatic Ecology, Water Quality &amp; Ecotoxicology" data-image="{{ asset('pics_vids/dr.kassah.jpeg') }}" data-bio="Dr. Rahmat Quaigrane Duker is a Ghanaian lecturer and researcher at the University of Environment and Sustainable Development, Somanya, Ghana and also serves as the Country (Ghana) Coordinator for Blue Resources Research and Policy Institute. She holds a PhD in Oceanography and Limnology (Ghana) and MSc in Environmental Sciences (Netherlands). Her research expertise spanning aquatic ecology, water quality management, aquatic pollution and ecotoxicology. Prior to her academic career, Dr. Duker worked with the Centre for Environmental Impact Analysis, where she led projects focused on minimising the environmental impacts of illegal gold mining on the environment. Her current work combines science, policy, and community engagement to promote sustainable use and restoration of aquatic ecosystems. With the passion and commitment towards education, environmental stewardship, and inclusive development, Dr. Duker continues to mentor young minds. She also engages and contributes to regional and international dialogues on water sustainability and blue economy innovation.">
                <div class="member-image">
                    <img src="{{ asset('pics_vids/rahmat.jpeg') }}" alt="Dr. Rahmat Quaigrane Duker">
                    <div class="member-badge"><i class="fa-solid fa-file-lines"></i> Secretary</div>
                </div>
                <div class="member-info">
                    <span class="member-index">04</span>
                    <h3>Dr. Rahmat Quaigrane Duker</h3>
                    <div class="member-specialty">Aquatic Ecology, Water Quality & Ecotoxicology</div>
                    <p>Dr. Rahmat Quaigrane Duker is a Ghanaian lecturer and researcher at the University of Environment and Sustainable Development, Somanya, Ghana and also serves as the Country…</p>
                    <span class="bio-card-hint"><i class="fa-solid fa-arrow-up-right-from-square"></i> View full bio</span>
                </div>
            </article>

            <article class="member leadership-card" tabindex="0" role="button" aria-label="View full biography of Dr. Elizabeth Effah" data-name="Dr. Elizabeth Effah" data-role="Programmes Coordinator" data-specialty="Coastal Management, Pollution &amp; Climate Adaptation" data-image="{{ asset('pics_vids/dr.huge.jpeg') }}" data-bio="Dr. Effah is a coastal management specialist with an interest in the conservation and management of coastal and marine water bodies, pollution studies in the coastal environment, particularly effects of elevated heavy metals, microbes and other solid wastes on the coastal environment and possible restoration measures and climate change and adaptation in coastal areas. She is also passionate about capacity building and is a co-founder of WASMaN. She holds a PhD degree in Integrated Coastal Zone Management, an MPhil degree in Integrated Coastal Zone Management, and a BSc in Fisheries and Aquatic Science.">
                <div class="member-image">
                    <img src="{{ asset('pics_vids/effah.jpg') }}" alt="Dr. Elizabeth Effah">
                    <div class="member-badge"><i class="fa-solid fa-diagram-project"></i> Programmes Coordinator</div>
                </div>
                <div class="member-info">
                    <span class="member-index">05</span>
                    <h3>Dr. Elizabeth Effah</h3>
                    <div class="member-specialty">Coastal Management, Pollution & Climate Adaptation</div>
                    <p>Dr. Effah is a coastal management specialist with an interest in the conservation and management of coastal and marine water bodies, pollution studies in the coastal environment,…</p>
                    <span class="bio-card-hint"><i class="fa-solid fa-arrow-up-right-from-square"></i> View full bio</span>
                </div>
            </article>

        </div>

    </section>


    {{-- NETWORK MEMBERS --}}
    <section class="network-members">

        <div class="section-heading-row network-heading">

            <div>

                <span class="section-label">
                    Our Operational Team
                </span>

                <h2>
                    Network Secretariat
                </h2>

            </div>

            <p>
                The Network Secretariat is the operational arm of WASMaN, responsible for coordinating programmes, administration, communications, research, partnerships and member engagement. It supports the Network’s leadership, implements approved activities and ensures the effective day-to-day functioning of WASMaN
            </p>

        </div>


        <div class="members-grid">

        
            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/tibu.jpeg') }}" alt="Dr. Linda Owusu">
                </div>

                <div class="network-member-info">
                    <h3>Gertrude Tibu</h3>
                    <span>Administrative Officer</span>
                </div>

                <i class="fa-solid fa-fish-fins member-mini-icon"></i>

            </article>

            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/fausty.png') }}" alt="Dr. Sarah Mensah">
                </div>

                <div class="network-member-info">
                    <h3>Faustina Sarpong</h3>
                    <span>Research and Capacity Development Officer and Acting Network Coordinator</span>
                </div>

                <i class="fa-solid fa-water member-mini-icon"></i>

            </article>

            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/cindy.jpeg') }}" alt="Dr. Mary Boateng">
                </div>

                <div class="network-member-info">
                    <h3>Cindy Owusu</h3>
                    <span>Public Relations Officer</span>
                </div>

                <i class="fa-solid fa-seedling member-mini-icon"></i>

            </article>


            <article class="network-member">

                <div class="network-member-image">
                    <img src="{{ asset('pics_vids/ohene.png') }}" alt="Dr. Evelyn Asante">
                </div>

                <div class="network-member-info">
                    <h3>Sarkwah Ohene Barak</h3>
                    <span>Digital Systems and IT Support Officer</span>
                </div>

                <i class="fa-solid fa-microscope member-mini-icon"></i>

            </article>


            <!-- <article class="network-member">

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

            </article> -->

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

                <i class="fa-solid fa-people-group"></i>
            </div>

            <!-- <span>
                Science • Mentorship • Impact
            </span> -->

        </div>

    </section>

</section>



{{-- LEADERSHIP BIO MODAL --}}
<div class="leader-modal" id="leaderBioModal" aria-hidden="true">
    <div class="leader-modal-backdrop" data-close-modal></div>
    <div class="leader-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="leaderModalName">
        <button class="leader-modal-close" type="button" aria-label="Close biography" data-close-modal>
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="leader-modal-layout">
            <div class="leader-modal-photo">
                <img id="leaderModalImage" src="" alt="">
                <div class="leader-modal-role" id="leaderModalRole"></div>
            </div>
            <div class="leader-modal-content">
                <span class="leader-modal-eyebrow">LEADERSHIP COMMITTEE</span>
                <h2 id="leaderModalName"></h2>
                <div class="leader-modal-specialty" id="leaderModalSpecialty"></div>
                <div class="leader-modal-bio" id="leaderModalBio"></div>
            </div>
        </div>
    </div>
</div>

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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('leaderBioModal');
    const cards = document.querySelectorAll('.leadership-card');
    const closeButtons = modal.querySelectorAll('[data-close-modal]');
    const image = document.getElementById('leaderModalImage');
    const name = document.getElementById('leaderModalName');
    const role = document.getElementById('leaderModalRole');
    const specialty = document.getElementById('leaderModalSpecialty');
    const bio = document.getElementById('leaderModalBio');
    let lastFocused = null;

    function openModal(card) {
        lastFocused = card;
        image.src = card.dataset.image;
        image.alt = card.dataset.name;
        name.textContent = card.dataset.name;
        role.textContent = card.dataset.role;
        specialty.textContent = card.dataset.specialty;
        bio.innerHTML = '';
        card.dataset.bio.split('\n\n').forEach(function (paragraph) {
            const p = document.createElement('p');
            p.textContent = paragraph;
            bio.appendChild(p);
        });
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');
        modal.querySelector('.leader-modal-close').focus();
    }

    function closeModal() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('modal-open');
        if (lastFocused) lastFocused.focus();
    }

    cards.forEach(function (card) {
        card.addEventListener('click', function () { openModal(card); });
        card.addEventListener('keydown', function (event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                openModal(card);
            }
        });
    });

    closeButtons.forEach(function (button) { button.addEventListener('click', closeModal); });
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal.classList.contains('is-open')) closeModal();
    });
});
</script>

</body>
</html>
