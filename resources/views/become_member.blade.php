<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WASMaN | Membership</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="{{ asset('css/become_member.css') }}">

            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')

 {{-- =========================================================
     WASMaN MEMBERSHIP PAGE
========================================================= --}}

{{-- =========================
     HERO SECTION
========================= --}}
<section class="membership-hero">

    <div class="membership-hero-overlay"></div>

    <div class="membership-hero-content">

        <span class="membership-eyebrow">
            JOIN THE WASMaN NETWORK
        </span>

        <h1>
            Connect. Learn. Lead.
            <strong>Shape the Future of Aquatic Science.</strong>
        </h1>

        <p>
            Become part of WASMaN's professional network advancing the participation,
            visibility and leadership of women in aquatic science and management
            through research, capacity development, advocacy, networking and partnerships.
        </p>

        <div class="membership-hero-actions">

            <a href="#membership-application" class="membership-primary-btn">
                Become a Member
                <i class="fas fa-arrow-right"></i>
            </a>

            <a href="#membership-benefits" class="membership-secondary-btn">
                Discover the Benefits
            </a>

        </div>

        <div class="membership-hero-note">
            <i class="fas fa-users"></i>
            <span>Join a growing network advancing aquatic science</span>
        </div>

    </div>

</section>


{{-- =========================
     INTRODUCTION + STATS
========================= --}}
<section class="membership-introduction">

    <div class="membership-intro-container">

        <div class="membership-intro-content">

            <span class="section-label">
                WHY WASMaN?
            </span>

            <h2>
                A Network Built Around
                <span>People, Science & Impact</span>
            </h2>

            <p>
                WASMaN provides a professional platform for women in aquatic science
                and management to connect, collaborate, strengthen their
                professional development and contribute to Africa's blue economy.
            </p>

            <p>
                The Network supports knowledge exchange, networking, research,
                professional development, mentoring, advocacy and opportunities
                for members to participate in WASMaN programmes and activities.
            </p>

            <a href="#membership-benefits" class="text-link">
                Explore membership benefits
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="membership-stat-panel">

            <div class="membership-stat">
                <div class="stat-icon"><i class="fas fa-flask"></i></div>
                <strong>Research</strong>
                <span>Knowledge generation & innovation</span>
            </div>

            <div class="membership-stat">
                <div class="stat-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                <strong>Capacity</strong>
                <span>Professional development & mentoring</span>
            </div>

            <div class="membership-stat">
                <div class="stat-icon"><i class="fas fa-bullhorn"></i></div>
                <strong>Advocacy</strong>
                <span>Visibility, representation & engagement</span>
            </div>

            <div class="membership-stat">
                <div class="stat-icon"><i class="fas fa-people-group"></i></div>
                <strong>Network</strong>
                <span>Collaboration & partnerships</span>
            </div>

        </div>

    </div>

</section>


{{-- =========================
     MEMBERSHIP PROCESS
========================= --}}
<section class="membership-categories" id="membership-categories">

    <div class="membership-section-heading">
        <span>MEMBERSHIP APPLICATION</span>

        <h2>Choose Your WASMaN Membership Category</h2>

        <p>
            Select the category that best describes you. Each application card takes you
            directly to the corresponding membership option in the application form below.
        </p>
    </div>

    <div class="membership-category-grid membership-category-grid-five">

        <article class="membership-card">
            <div class="membership-card-number">01</div>
            <div class="membership-card-icon"><i class="fas fa-graduation-cap"></i></div>
            <h3>Student Member</h3>
            <p>For female undergraduate and postgraduate students pursuing aquatic science, fisheries, marine science, water resources management, environmental science or related disciplines.</p>
            <a href="#category-student">Apply as Student Member <i class="fas fa-arrow-right"></i></a>
        </article>

        <article class="membership-card membership-card-featured">
            <div class="membership-card-number">02</div>
            <div class="membership-card-icon"><i class="fas fa-seedling"></i></div>
            <h3>Early Career Professional</h3>
            <p>For women with 0–7 years of post-graduation experience transitioning into professional practice, research leadership, policy engagement or industry roles.</p>
            <a href="#category-early-career">Apply as Early Career <i class="fas fa-arrow-right"></i></a>
        </article>

        <article class="membership-card">
            <div class="membership-card-number">03</div>
            <div class="membership-card-icon"><i class="fas fa-briefcase"></i></div>
            <h3>Professional Member</h3>
            <p>For female professionals engaged in aquatic science, aquatic resource management, conservation, policy, research, academia, industry, consultancy or related fields.</p>
            <a href="#category-professional">Apply as Professional <i class="fas fa-arrow-right"></i></a>
        </article>

        <article class="membership-card">
            <div class="membership-card-number">04</div>
            <div class="membership-card-icon"><i class="fas fa-award"></i></div>
            <h3>Fellow of WASMaN</h3>
            <p>For distinguished women who have demonstrated exceptional leadership, contribution and impact in aquatic science and management. Fellowship is by nomination and Leadership Committee approval.</p>
            <a href="#category-fellow">View Fellowship Information <i class="fas fa-arrow-right"></i></a>
        </article>

        <article class="membership-card">
            <div class="membership-card-number">05</div>
            <div class="membership-card-icon"><i class="fas fa-people-group"></i></div>
            <h3>Associate / Ally Member</h3>
            <p>For individuals and institutions supporting WASMaN’s objectives, including male professionals and institutional partners committed to advancing gender equity in aquatic science and management.</p>
            <a href="#category-associate">Apply as Associate / Ally <i class="fas fa-arrow-right"></i></a>
        </article>

    </div>
</section>


{{-- =========================
     BENEFITS SECTION
========================= --}}
<section class="membership-benefits" id="membership-benefits">

    <div class="benefits-image">

        <img
            src="{{ asset('pics_vids/Wesite photos/unnamed (2) (1).png') }}"
            alt="WASMaN community engagement"
        >

        <div class="benefits-image-card">

            <i class="fas fa-water"></i>

            <span>
                Science
            </span>

            <strong>
                Meets Impact
            </strong>

        </div>

    </div>


    <div class="benefits-content">

        <span class="section-label">
            MEMBERSHIP BENEFITS
        </span>

        <h2>
            More Than Membership.
            <span>A Platform for Growth.</span>
        </h2>

        <p>
            WASMaN membership connects you to opportunities that can
            strengthen your knowledge, professional network and ability
            to contribute to sustainable aquatic resource management.
        </p>


        <div class="benefit-list">


            <div class="benefit-item">

                <div class="benefit-icon">
                    <i class="fas fa-network-wired"></i>
                </div>

                <div>
                    <h3>Professional Networking</h3>

                    <p>
                        Connect with researchers, professionals,
                        institutions and environmental leaders.
                    </p>
                </div>

            </div>


            <div class="benefit-item">

                <div class="benefit-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>

                <div>
                    <h3>Mentorship & Capacity Building</h3>

                    <p>
                        Access mentorship, workshops, training and
                        opportunities for professional development.
                    </p>
                </div>

            </div>


            <div class="benefit-item">

                <div class="benefit-icon">
                    <i class="fas fa-microscope"></i>
                </div>

                <div>
                    <h3>Research Collaboration</h3>

                    <p>
                        Participate in collaborative research,
                        field activities and scientific publications.
                    </p>

                </div>

            </div>


            <div class="benefit-item">

                <div class="benefit-icon">
                    <i class="fas fa-chart-line"></i>
                </div>

                <div>
                    <h3>Leadership Opportunities</h3>

                    <p>
                        Take part in initiatives that influence
                        aquatic science and environmental management.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     MEMBERSHIP JOURNEY
========================= --}}
<section class="membership-journey" id="membership-journey">

    <div class="membership-section-heading">
        <span>HOW MEMBERSHIP WORKS</span>

        <h2>Your Membership Journey</h2>

        <p>
            The Secretariat supports the membership process from registration
            and onboarding through active engagement and renewal.
        </p>
    </div>

    <div class="journey-wrapper">
        <div class="journey-line"></div>

        <div class="journey-step">
            <div class="journey-number">01</div>
            <h3>Register</h3>
            <p>Submit your membership interest and relevant details to WASMaN.</p>
        </div>

        <div class="journey-step">
            <div class="journey-number">02</div>
            <h3>Onboard</h3>
            <p>The Secretariat supports your onboarding and records your membership information.</p>
        </div>

        <div class="journey-step">
            <div class="journey-number">03</div>
            <h3>Engage</h3>
            <p>Receive updates and take part in professional-development and Network opportunities.</p>
        </div>

        <div class="journey-step">
            <div class="journey-number">04</div>
            <h3>Renew</h3>
            <p>The Secretariat coordinates membership renewals and keeps membership status current.</p>
        </div>
    </div>
</section>


{{-- =========================
     WHO THE NETWORK SERVES
========================= --}}
<section class="membership-eligibility">

    <div class="eligibility-container">

        <div class="eligibility-content">
            <span class="section-label">WHO IS WASMaN FOR?</span>

            <h2>
                Women Advancing
                <span>Aquatic Science & Management</span>
            </h2>

            <p>
                WASMaN is a professional platform dedicated to strengthening
                the participation, visibility and leadership of women in
                aquatic science and management. The Network advances this
                mission through research, capacity development, advocacy,
                networking and partnerships.
            </p>
        </div>

        <div class="eligibility-list">
            <div><i class="fas fa-check"></i> Aquatic Science</div>
            <div><i class="fas fa-check"></i> Aquatic Management</div>
            <div><i class="fas fa-check"></i> Research & Knowledge</div>
            <div><i class="fas fa-check"></i> Professional Development</div>
            <div><i class="fas fa-check"></i> Advocacy & Leadership</div>
            <div><i class="fas fa-check"></i> Networking & Collaboration</div>
        </div>

    </div>
</section>




<section class="membership-application membership-form-section" id="membership-application">

    <div class="membership-form-shell">

        <div class="membership-form-heading">
            <span class="section-label">READY TO JOIN?</span>

            <h2>WASMaN Membership Application</h2>

            <p>
                Complete the form below to express your interest in joining the
                Women in Aquatic Science and Management Network (WASMaN).
                The Secretariat will use the information provided for membership
                registration, onboarding and official communication.
            </p>
        </div>

        @if(session('success'))
            <div class="membership-form-alert membership-form-success" role="status">
                <i class="fa-solid fa-circle-check"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="membership-form-alert membership-form-errors" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div>
                    <strong>Please correct the following:</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form class="wasman-membership-form" action="{{ route('membership.store') }}" method="POST">
            @csrf

            <div class="membership-form-block">
                <div class="membership-form-block-title">
                    <span>01</span>
                    <div>
                        <h3>Personal Information</h3>
                        <p>Tell us who you are and how we can contact you.</p>
                    </div>
                </div>

                <div class="membership-form-grid">

                    <div class="membership-field membership-field-full">
                        <label for="full_name">Full Name <span>*</span></label>
                        <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" placeholder="Enter your full name" required>
                    </div>

                    <div class="membership-field">
                        <label for="date_of_birth">Date of Birth <span>*</span></label>
                        <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                    </div>

                    <div class="membership-field">
                        <label for="gender">Gender <span>*</span></label>
                        <select id="gender" name="gender" required>
                            <option value="" selected disabled>Select gender</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <!-- <option value="Prefer not to say">Prefer not to say</option>
                            <option value="Other">Other</option> -->
                        </select>
                    </div>

                    <div class="membership-field">
                        <label for="phone">Phone Number <span>*</span></label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+233..." required>
                    </div>

                    <div class="membership-field">
                        <label for="email">Email Address <span>*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                    </div>

                    <div class="membership-field membership-field-full">
                        <label for="address">Postal Address / Location <span>*</span></label>
                        <input type="text" id="address" name="address" value="{{ old('address') }}" placeholder="Postal address, town/city and country" required>
                    </div>

                </div>
            </div>

            <div class="membership-form-block">
                <div class="membership-form-block-title">
                    <span>02</span>
                    <div>
                        <h3>Professional & Academic Information</h3>
                        <p>Help us understand your current background and area of interest.</p>
                    </div>
                </div>

                <div class="membership-form-grid">

                    <div class="membership-field">
                        <label for="occupation">Current Occupation / Position <span>*</span></label>
                        <input type="text" id="occupation" name="occupation" value="{{ old('occupation') }}" placeholder="e.g. Student, Lecturer, Researcher" required>
                    </div>

                    <div class="membership-field">
                        <label for="institution">Institution / Organisation <span>*</span></label>
                        <input type="text" id="institution" name="institution" value="{{ old('institution') }}" placeholder="Enter institution or organisation" required>
                    </div>

                    <div class="membership-field">
                        <label for="expertise">Area of Expertise / Study <span>*</span></label>
                        <input type="text" id="expertise" name="expertise" value="{{ old('expertise') }}" placeholder="Your field or area of study" required>
                    </div>

                    <div class="membership-field">
                        <label for="education">Highest Level of Education <span>*</span></label>
                        <select id="education" name="education" required>
                            <option value="" selected disabled>Select level</option>
                            <option value="Secondary">Secondary / High School</option>
                            <option value="Certificate">Certificate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Bachelor's">Bachelor's Degree</option>
                            <option value="Master's">Master's Degree</option>
                            <option value="Doctorate">Doctorate / PhD</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="membership-form-block">
                <div class="membership-form-block-title">
                    <span>03</span>
                    <div>
                        <h3>Membership Category <span>*</span></h3>
                        <p>Select the WASMaN membership category that best fits you. Membership becomes effective after Secretariat approval and payment of the prescribed membership fee.</p>
                    </div>
                </div>

                {{-- Legacy backend compatibility.
                     These hidden fields preserve the existing controller/database contract
                     while membership_type remains the applicant-facing category field. --}}
                <input type="hidden" id="join_as" name="join_as" value="{{ old('join_as', 'Staff') }}">
                <input type="hidden" id="join_as_other" name="join_as_other" value="{{ old('join_as_other') }}">

                <div class="membership-field membership-field-full membership-type-field">
                    <div class="join-option-grid membership-category-grid">
                        <label class="join-option-card" id="category-student"><input type="radio" name="membership_type" value="Student Member" {{ old('membership_type') === 'Student Member' ? 'checked' : '' }} required><span class="join-option-icon"><i class="fa-solid fa-graduation-cap"></i></span><strong>Student Member</strong><small>For female undergraduate and postgraduate students in aquatic science, fisheries, marine science, water resources, environmental science or related disciplines.</small></label>
                        <label class="join-option-card" id="category-early-career"><input type="radio" name="membership_type" value="Early Career Professional Member" {{ old('membership_type') === 'Early Career Professional Member' ? 'checked' : '' }} required><span class="join-option-icon"><i class="fa-solid fa-seedling"></i></span><strong>Early Career Professional</strong><small>For women with 0–7 years of post-graduation experience transitioning into professional practice, research, policy or industry roles.</small></label>
                        <label class="join-option-card" id="category-professional"><input type="radio" name="membership_type" value="Professional Member" {{ old('membership_type') === 'Professional Member' ? 'checked' : '' }} required><span class="join-option-icon"><i class="fa-solid fa-briefcase"></i></span><strong>Professional Member</strong><small>For female professionals working in aquatic science, resource management, conservation, policy, research, academia, industry, consultancy or related fields.</small></label>
                        <label class="join-option-card" id="category-associate"><input type="radio" name="membership_type" value="Associate/Ally Member" {{ old('membership_type') === 'Associate/Ally Member' ? 'checked' : '' }} required><span class="join-option-icon"><i class="fa-solid fa-people-group"></i></span><strong>Associate / Ally Member</strong><small>For individuals and institutions supporting WASMaN’s objectives, including male professionals and institutional partners advancing gender equity.</small></label>
                    </div>
                    <div class="join-option-card membership-fellow-application-card" id="category-fellow">
                        <span class="join-option-icon"><i class="fa-solid fa-award"></i></span>
                        <strong>Fellow of WASMaN</strong>
                        <small>Fellowship is conferred on distinguished women who have demonstrated exceptional leadership, contribution and impact in aquatic science and management. It is granted through nomination and approval by the Leadership Committee and is therefore not submitted as a standard membership application.</small>
                    </div>
                </div>
            </div>

            <div class="membership-form-block">
                <div class="membership-form-block-title">
                    <span>04</span>
                    <div>
                        <h3>Interest & Contribution</h3>
                        <p>Tell us why you want to join and how you would like to contribute.</p>
                    </div>
                </div>

                <div class="membership-field membership-field-full">
                    <label for="interest">Why are you interested in joining WASMaN? <span>*</span></label>
                    <textarea id="interest" name="interest" rows="5" placeholder="Tell us what motivates you to join the Network" required>{{ old('interest') }}</textarea>
                </div>

                <fieldset class="membership-contribution-field">
                    <legend>How would you like to contribute to the Network? <span>(Check all that apply)</span></legend>

                    <div class="contribution-grid">
                        <label><input type="checkbox" name="contribution[]" value="Research Enhancement" {{ in_array('Research Enhancement', old('contribution', [])) ? 'checked' : '' }}><span>Research Enhancement</span></label>
                        <label><input type="checkbox" name="contribution[]" value="Capacity Development" {{ in_array('Capacity Development', old('contribution', [])) ? 'checked' : '' }}><span>Capacity Development</span></label>
                        <label><input type="checkbox" name="contribution[]" value="Advocacy" {{ in_array('Advocacy', old('contribution', [])) ? 'checked' : '' }}><span>Advocacy</span></label>
                        <label><input type="checkbox" name="contribution[]" value="Networking and Outreach" {{ in_array('Networking and Outreach', old('contribution', [])) ? 'checked' : '' }}><span>Networking & Outreach</span></label>
                        <label><input type="checkbox" name="contribution[]" value="Other" {{ in_array('Other', old('contribution', [])) ? 'checked' : '' }}><span>Other</span></label>
                    </div>
                </fieldset>

                <div class="membership-field membership-field-full membership-contribution-other">
                    <label for="contribution_other">Other contribution</label>
                    <input type="text" id="contribution_other" name="contribution_other" value="{{ old('contribution_other') }}" placeholder="Please specify any other way you would like to contribute">
                </div>
            </div>

            <div class="membership-form-block membership-declaration-block">
                <div class="membership-form-block-title">
                    <span>05</span>
                    <div>
                        <h3>Declaration & Consent</h3>
                        <p>Please read and confirm before submitting your application.</p>
                    </div>
                </div>

                <label class="membership-consent">
                    <input type="checkbox" name="declaration" value="1" required>
                    <span>
                        I hereby apply for membership of WASMaN and commit to supporting its vision,
                        mission and values. I understand that membership becomes effective upon approval
                        by the Secretariat and payment of the prescribed membership fee. I consent to the
                        use of my details for official WASMaN communications and networking purposes.
                    </span>
                </label>

                <button type="submit" class="membership-submit-btn">
                    Submit Membership Application
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

                <p class="membership-form-privacy">
                    Your information should be handled as an official WASMaN membership record.
                </p>
            </div>

        </form>

    </div>

</section>


{{-- =========================
     FINAL CTA
========================= --}}
<section class="membership-final-cta">

    <div class="cta-overlay"></div>

    <div class="membership-cta-content">

        <span>
            YOUR NEXT CHAPTER STARTS HERE
        </span>

        <h2>
            Become Part of Something
            <strong>Meaningful.</strong>
        </h2>

        <p>
            Join a network of people working together to advance
            aquatic science, empower women and create sustainable
            solutions for our oceans, rivers, lakes and communities.
        </p>

        <a href="#membership-application" class="cta-button">
            Start Your Membership Application
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>

</section>
      

<footer class="membership-premium-footer">

    <div class="membership-footer-top">

        <div class="membership-footer-brand">

            <div class="membership-footer-mark">
                <i class="fa-solid fa-water"></i>
            </div>

            <div>
                <h2>WASMaN</h2>
                <span>Women in Aquatic Science and Management Network</span>
            </div>

        </div>

        <div class="membership-footer-tags">
            <span>Connect</span>
            <span>Learn</span>
            <span>Lead</span>
            <span>Collaborate</span>
        </div>

    </div>


    <div class="membership-footer-main">

        <div class="membership-footer-about">

            <p>
                WASMaN connects women scientists, students, professionals,
                institutions and allies committed to advancing aquatic science,
                sustainability and inclusive leadership.
            </p>

            <div class="membership-footer-socials">
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>

        </div>


        <div class="membership-footer-links">
            <h3>Explore</h3>
            <a href="/">Home</a>
            <a href="/history">About WASMaN</a>
            <a href="/team">Our Team</a>
            <a href="/ongoing_projects">Ongoing Projects</a>
            <a href="/completed_projects">Completed Projects</a>
        </div>


        <div class="membership-footer-links">
            <h3>Membership</h3>
            <a href="#membership-categories">Membership Options</a>
            <a href="#membership-benefits">Benefits</a>
            <a href="#membership-application">How to Join</a>
            <a href="/partner_with_us">Institutional Partnership</a>
            <a href="#membership-faq">FAQs</a>
        </div>


        <div class="membership-footer-links">
            <h3>Get Involved</h3>
            <a href="/intern">Internships</a>
            <a href="/volunteer">Volunteer</a>
            <a href="/research_assistant">Research Assistance</a>
            <a href="/events">Events</a>
            <a href="/publications">Publications</a>
        </div>


        <div class="membership-footer-contact">
            <h3>Connect</h3>

            <div>
                <i class="fa-solid fa-envelope"></i>
                <span>info@wasman.org</span>
            </div>

            <div>
                <i class="fa-solid fa-location-dot"></i>
                <span>Cape Coast, Ghana</span>
            </div>

            <a href="/general_enquiries" class="membership-footer-enquiry">
                General Enquiries
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>


    <div class="membership-footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network (WASMaN).
            All Rights Reserved.
        </p>

        <div>
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
        </div>

    </div>

</footer>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
    
<script>
document.addEventListener('DOMContentLoaded', function () {
    const membershipOptions = document.querySelectorAll('input[name="membership_type"]');
    const joinAs = document.getElementById('join_as');
    const joinAsOther = document.getElementById('join_as_other');

    function syncLegacyMembershipFields() {
        const selected = document.querySelector('input[name="membership_type"]:checked');
        if (!selected || !joinAs || !joinAsOther) return;

        switch (selected.value) {
            case 'Student Member':
                joinAs.value = 'Student';
                joinAsOther.value = '';
                break;

            case 'Associate/Ally Member':
                joinAs.value = 'Other';
                joinAsOther.value = 'Associate / Ally Member';
                break;

            case 'Early Career Professional Member':
            case 'Professional Member':
            default:
                joinAs.value = 'Staff';
                joinAsOther.value = '';
                break;
        }
    }

    membershipOptions.forEach(function (option) {
        option.addEventListener('change', syncLegacyMembershipFields);
    });

    syncLegacyMembershipFields();
});
</script>

</body>
   

</html>


{{-- Return the visitor to the membership form after submission/validation --}}
@if(session('success') || $errors->any())
<script>
document.addEventListener('DOMContentLoaded', function () {
    const membershipForm = document.getElementById('membership-application');
    if (membershipForm) {
        window.setTimeout(function () {
            membershipForm.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }, 120);
    }
});
</script>
@endif
