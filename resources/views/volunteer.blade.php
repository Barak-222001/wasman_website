<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>WASMaN | Volunteer</title>


    <!-- Fonts -->

    <link rel="preconnect"
          href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700"
        rel="stylesheet"
    />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Volunteer CSS -->
    <link rel="stylesheet" href="{{ asset('css/volunteer.css') }}">

</head>


<body>


{{-- =========================================================
     HEADER AND NAVIGATION
========================================================= --}}

@include('components.heading')



{{-- =========================================================
     VOLUNTEER HERO
========================================================= --}}

<section class="volunteer-hero">


    <div class="volunteer-hero-overlay"></div>


    <div class="volunteer-hero-content">


        <div class="hero-label">

            <span></span>

            VOLUNTEER WITH WASMaN

        </div>


        <h1>

            Your Passion Can Help

            <strong>
                Protect Our Waters.
            </strong>

        </h1>


        <p>

            Join a growing community of people working together to
            protect aquatic ecosystems, support coastal communities
            and promote environmental sustainability.

        </p>


        <div class="volunteer-hero-actions">


            <a
                href="#application"
                class="primary-volunteer-btn"
            >

                Become a Volunteer

                <span class="volunteer-arrow-icon"><i class="fa-solid fa-arrow-right"></i></span>

            </a>


            <a
                href="#opportunities"
                class="secondary-volunteer-btn"
            >

                Explore Opportunities

            </a>


        </div>


        <div class="hero-mini-info">


            <div>

                <strong>
                    350+
                </strong>

                <span>
                    Volunteers
                </span>

            </div>


            <div>

                <strong>
                    20
                </strong>

                <span>
                    Regions
                </span>

            </div>


            <div>

                <strong>
                    120+
                </strong>

                <span>
                    Projects
                </span>

            </div>


        </div>


    </div>


    <div class="hero-scroll">

        <span>
            SCROLL TO EXPLORE
        </span>

        <i></i>

    </div>


</section>



{{-- =========================================================
     INTRODUCTION / WHY VOLUNTEER
========================================================= --}}

<section class="volunteer-introduction">


    <div class="volunteer-intro-image">


        <img
            src="{{ asset('pics_vids/mi.png') }}"
            alt="WASMaN volunteers working together"
        >


        <div class="image-caption">

            <span>
                WASMaN COMMUNITY
            </span>

            <p>
                People creating meaningful environmental change.
            </p>

        </div>


    </div>



    <div class="volunteer-intro-content">


        <span class="section-label">
            MAKE AN IMPACT
        </span>


        <h2>

            Small Actions.

            <span>
                Meaningful Change.
            </span>

        </h2>


        <p>

            Volunteers are an important part of WASMaN's work.
            From supporting community education and conservation
            activities to assisting research and public awareness
            campaigns, every contribution helps strengthen aquatic
            ecosystems and coastal communities.

        </p>


        <div class="volunteer-check-list">


            <div>

                <span class="volunteer-check-icon"><i class="fa-solid fa-circle-check"></i></span>

                <p>
                    Support aquatic conservation initiatives
                </p>

            </div>


            <div>

                <span class="volunteer-check-icon"><i class="fa-solid fa-circle-check"></i></span>

                <p>
                    Participate in community outreach
                </p>

            </div>


            <div>

                <span class="volunteer-check-icon"><i class="fa-solid fa-circle-check"></i></span>

                <p>
                    Support research and field activities
                </p>

            </div>


            <div>

                <span class="volunteer-check-icon"><i class="fa-solid fa-circle-check"></i></span>

                <p>
                    Promote environmental awareness
                </p>

            </div>


        </div>


        <a
            href="#opportunities"
            class="text-link"
        >

            Discover how you can contribute

            <span class="volunteer-arrow-icon"><i class="fa-solid fa-arrow-right"></i></span>

        </a>


    </div>


</section>



{{-- =========================================================
     IMPACT STATISTICS
========================================================= --}}

<section class="volunteer-impact">


    <div class="impact-heading">


        <span>
            OUR COLLECTIVE IMPACT
        </span>


        <h2>

            Together, We Are Making
            A Difference

        </h2>


    </div>


    <div class="impact-stat-grid">


        <div class="impact-stat">

            <strong>
                350+
            </strong>

            <span>
                Active Volunteers
            </span>

        </div>


        <div class="impact-stat">

            <strong>
                120
            </strong>

            <span>
                Community Projects
            </span>

        </div>


        <div class="impact-stat">

            <strong>
                50+
            </strong>

            <span>
                Beach Clean-ups
            </span>

        </div>


        <div class="impact-stat">

            <strong>
                20
            </strong>

            <span>
                Regions Reached
            </span>

        </div>


    </div>


</section>



{{-- =========================================================
     VOLUNTEER OPPORTUNITIES
========================================================= --}}

<section
    class="volunteer-opportunities"
    id="opportunities"
>


    <div class="section-heading">


        <div>


            <span class="section-label">
                OPPORTUNITIES
            </span>


            <h2>

                Find Your Place

                <span>
                    in the Movement
                </span>

            </h2>


        </div>


        <p>

            Whether you are a student, researcher, creative,
            environmental enthusiast or community advocate,
            there is a place for your skills and passion.

        </p>


    </div>



    <div class="opportunity-grid">


        <article class="opportunity-card">


            <div class="opportunity-number">
                01
            </div>


            <div class="opportunity-icon"><i class="fa-solid fa-people-group"></i></div>


            <h3>
                Community Outreach
            </h3>


            <p>

                Help educate communities about aquatic
                conservation and sustainable resource use.

            </p>


            <a href="#application">

                Join This Area <i class="fa-solid fa-arrow-right volunteer-link-icon"></i>

            </a>


        </article>



        <article class="opportunity-card featured-opportunity">


            <div class="opportunity-number">
                02
            </div>


            <div class="opportunity-icon"><i class="fa-solid fa-microscope"></i></div>


            <h3>
                Research Support
            </h3>


            <p>

                Assist researchers with field activities,
                data collection and environmental studies.

            </p>


            <a href="#application">

                Join This Area <i class="fa-solid fa-arrow-right volunteer-link-icon"></i>

            </a>


        </article>



        <article class="opportunity-card">


            <div class="opportunity-number">
                03
            </div>


            <div class="opportunity-icon"><i class="fa-solid fa-photo-film"></i></div>


            <h3>
                Media & Communications
            </h3>


            <p>

                Help tell environmental stories through
                photography, design, video and digital media.

            </p>


            <a href="#application">

                Join This Area <i class="fa-solid fa-arrow-right volunteer-link-icon"></i>

            </a>


        </article>



        <article class="opportunity-card">


            <div class="opportunity-number">
                04
            </div>


            <div class="opportunity-icon"><i class="fa-solid fa-calendar-days"></i></div>


            <h3>
                Event Support
            </h3>


            <p>

                Support conferences, workshops, training
                programmes and community events.

            </p>


            <a href="#application">

                Join This Area <i class="fa-solid fa-arrow-right volunteer-link-icon"></i>

            </a>


        </article>


    </div>


</section>



{{-- =========================================================
     SKILLS SECTION
========================================================= --}}

<section class="skills-section" id="skills">


    <div class="skills-content">


        <span class="section-label">

            YOUR SKILLS MATTER

        </span>


        <h2>

            Bring Your Skills.

            <span>
                Make An Impact.
            </span>

        </h2>


        <p>

            You don't need to be a marine scientist to contribute.
            WASMaN welcomes people with different skills, experiences
            and interests.

        </p>


    </div>



    <div class="skills-list">


        <div class="skill-item">

            <span>
                01
            </span>

            <h3>
                Marine Science
            </h3>

        </div>


        <div class="skill-item">

            <span>
                02
            </span>

            <h3>
                Research
            </h3>

        </div>


        <div class="skill-item">

            <span>
                03
            </span>

            <h3>
                Photography
            </h3>

        </div>


        <div class="skill-item">

            <span>
                04
            </span>

            <h3>
                Graphic Design
            </h3>

        </div>


        <div class="skill-item">

            <span>
                05
            </span>

            <h3>
                Teaching
            </h3>

        </div>


        <div class="skill-item">

            <span>
                06
            </span>

            <h3>
                GIS & Data
            </h3>

        </div>


        <div class="skill-item">

            <span>
                07
            </span>

            <h3>
                Communications
            </h3>

        </div>


        <div class="skill-item">

            <span>
                08
            </span>

            <h3>
                Fundraising
            </h3>

        </div>


    </div>


</section>



{{-- =========================================================
     VOLUNTEER JOURNEY
========================================================= --}}

<section class="volunteer-journey" id="volunteer-journey">


    <div class="section-heading centered">


        <span class="section-label">

            HOW IT WORKS

        </span>


        <h2>

            Your Volunteer Journey

        </h2>


        <p>

            Getting involved is simple. Take the first step
            and begin contributing to meaningful environmental
            initiatives.

        </p>


    </div>



    <div class="journey-wrapper">


        <div class="journey-line"></div>



        <div class="journey-step">


            <div class="step-circle">

                01

            </div>


            <h3>
                Apply
            </h3>


            <p>

                Complete the volunteer application form.

            </p>


        </div>



        <div class="journey-step">


            <div class="step-circle">

                02

            </div>


            <h3>
                Orientation
            </h3>


            <p>

                Learn about WASMaN and our volunteer activities.

            </p>


        </div>



        <div class="journey-step">


            <div class="step-circle">

                03

            </div>


            <h3>
                Choose
            </h3>


            <p>

                Select an activity or area that matches your interests.

            </p>


        </div>



        <div class="journey-step">


            <div class="step-circle">

                04

            </div>


            <h3>
                Make an Impact
            </h3>


            <p>

                Start contributing to projects and communities.

            </p>


        </div>


    </div>


</section>



{{-- =========================================================
     VOLUNTEER APPLICATION
========================================================= --}}

<section
    class="volunteer-application"
    id="application"
>


    <div class="application-wrapper">



        {{-- LEFT SIDE --}}

        <div class="application-intro">


            <span class="section-label">

                JOIN THE MOVEMENT

            </span>


            <h2>

                Ready to Make

                <span>
                    A Difference?
                </span>

            </h2>


            <p>

                Complete the form and tell us how you would
                like to contribute. Our team will review your
                application and get in touch with you.

            </p>


            <div class="application-note">


                <span class="application-note-icon"><i class="fa-solid fa-seedling"></i></span>


                <p>

                    Every volunteer contribution, big or small,
                    helps create healthier aquatic ecosystems.

                </p>


            </div>


        </div>



        {{-- RIGHT SIDE / FORM --}}

        <div class="volunteer-form-container">



            {{-- SUCCESS MESSAGE --}}

            @if (session('success'))

                <div class="volunteer-success-message">

                    <i class="fa-solid fa-circle-check"></i>

                    <div>
                        {{ session('success') }}
                    </div>

                </div>

            @endif



            {{-- VALIDATION ERRORS --}}

            @if ($errors->any())

                <div class="volunteer-error-message">


                    <div class="volunteer-error-heading">

                        <i class="fa-solid fa-circle-exclamation"></i>

                        <strong>

                            Please correct the following:

                        </strong>

                    </div>


                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>

                                {{ $error }}

                            </li>

                        @endforeach

                    </ul>


                </div>

            @endif



            <form
                class="volunteer-form"
                action="{{ route('volunteer.store') }}"
                method="POST"
            >


                @csrf



                <div class="form-header">


                    <span>

                        VOLUNTEER APPLICATION

                    </span>


                    <h3>

                        Let's Get Started

                    </h3>


                </div>



                {{-- FULL NAME + EMAIL --}}

                <div class="form-row">



                    <div class="form-group">


                        <label for="fullName">

                            Full Name

                        </label>


                        <input
                            type="text"
                            id="fullName"
                            name="fullName"
                            value="{{ old('fullName') }}"
                            placeholder="Enter your full name"
                            required
                        >


                        @error('fullName')

                            <small class="field-error">

                                {{ $message }}

                            </small>

                        @enderror


                    </div>



                    <div class="form-group">


                        <label for="email">

                            Email Address

                        </label>


                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email"
                            required
                        >


                        @error('email')

                            <small class="field-error">

                                {{ $message }}

                            </small>

                        @enderror


                    </div>


                </div>



                {{-- PHONE + COUNTRY --}}

                <div class="form-row">



                    <div class="form-group">


                        <label for="phoneNumber">

                            Phone Number

                        </label>


                        <input
                            type="tel"
                            id="phoneNumber"
                            name="phoneNumber"
                            value="{{ old('phoneNumber') }}"
                            placeholder="Enter your phone number"
                        >


                        @error('phoneNumber')

                            <small class="field-error">

                                {{ $message }}

                            </small>

                        @enderror


                    </div>



                    <div class="form-group">


                        <label for="country">

                            Country

                        </label>


                        <input
                            type="text"
                            id="country"
                            name="country"
                            value="{{ old('country') }}"
                            placeholder="Your country"
                        >


                        @error('country')

                            <small class="field-error">

                                {{ $message }}

                            </small>

                        @enderror


                    </div>


                </div>



                {{-- VOLUNTEER AREA + AVAILABILITY --}}

                <div class="form-row">



                    <div class="form-group">


                        <label for="volunteerArea">

                            Volunteer Area

                        </label>


                        <select
                            id="volunteerArea"
                            name="volunteerArea"
                            required
                        >


                            <option value="">

                                Select an area

                            </option>



                            <option
                                value="Community Outreach"
                                {{ old('volunteerArea') == 'Community Outreach' ? 'selected' : '' }}
                            >

                                Community Outreach

                            </option>



                            <option
                                value="Research Support"
                                {{ old('volunteerArea') == 'Research Support' ? 'selected' : '' }}
                            >

                                Research Support

                            </option>



                            <option
                                value="Conservation"
                                {{ old('volunteerArea') == 'Conservation' ? 'selected' : '' }}
                            >

                                Conservation

                            </option>



                            <option
                                value="Media & Communications"
                                {{ old('volunteerArea') == 'Media & Communications' ? 'selected' : '' }}
                            >

                                Media & Communications

                            </option>



                            <option
                                value="Event Support"
                                {{ old('volunteerArea') == 'Event Support' ? 'selected' : '' }}
                            >

                                Event Support

                            </option>


                        </select>


                        @error('volunteerArea')

                            <small class="field-error">

                                {{ $message }}

                            </small>

                        @enderror


                    </div>



                    <div class="form-group">


                        <label for="availability">

                            Availability

                        </label>


                        <select
                            id="availability"
                            name="availability"
                            required
                        >


                            <option value="">

                                Select availability

                            </option>



                            <option
                                value="Weekdays"
                                {{ old('availability') == 'Weekdays' ? 'selected' : '' }}
                            >

                                Weekdays

                            </option>



                            <option
                                value="Weekends"
                                {{ old('availability') == 'Weekends' ? 'selected' : '' }}
                            >

                                Weekends

                            </option>



                            <option
                                value="Flexible"
                                {{ old('availability') == 'Flexible' ? 'selected' : '' }}
                            >

                                Flexible

                            </option>


                        </select>


                        @error('availability')

                            <small class="field-error">

                                {{ $message }}

                            </small>

                        @enderror


                    </div>


                </div>



                {{-- REASON --}}

                <div class="form-group">


                    <label for="reason">

                        Why would you like to volunteer with WASMaN?

                    </label>


                    <textarea
                        id="reason"
                        name="reason"
                        rows="6"
                        placeholder="Tell us about your interests, skills and motivation..."
                        required
                    >{{ old('reason') }}</textarea>


                    @error('reason')

                        <small class="field-error">

                            {{ $message }}

                        </small>

                    @enderror


                </div>



                {{-- SUBMIT BUTTON --}}

                <button
                    type="submit"
                    class="submit-volunteer"
                >


                    Submit Application


                    <span class="volunteer-arrow-icon"><i class="fa-solid fa-arrow-right"></i></span>


                </button>


            </form>


        </div>


    </div>


</section>



{{-- =========================================================
     FINAL CTA
========================================================= --}}

<section class="volunteer-final-cta">


    <div class="cta-content">


        <span>

            BE PART OF THE CHANGE

        </span>


        <h2>

            The Ocean Needs

            <strong>
                People Like You.
            </strong>

        </h2>


        <p>

            Together, we can build healthier aquatic ecosystems,
            stronger communities and a more sustainable future.

        </p>


        <a href="#application">

            Become a WASMaN Volunteer

            <span class="volunteer-arrow-icon"><i class="fa-solid fa-arrow-right"></i></span>

        </a>


    </div>


</section>




<footer class="volunteer-premium-footer">

    <div class="volunteer-footer-top">

        <div class="volunteer-footer-brand">

            <div class="volunteer-footer-mark">
                <i class="fa-solid fa-water"></i>
            </div>

            <div>
                <h2>WASMaN</h2>
                <span>Women in Aquatic Science and Management Network</span>
            </div>

        </div>

        <div class="volunteer-footer-tags">
            <span>Community</span>
            <span>Conservation</span>
            <span>Research</span>
            <span>Action</span>
        </div>

    </div>


    <div class="volunteer-footer-main">

        <div class="volunteer-footer-about">

            <p>
                WASMaN welcomes volunteers who want to contribute their time,
                skills and ideas to aquatic conservation, research, community
                engagement and environmental awareness.
            </p>

            <div class="volunteer-footer-socials">
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>

        </div>


        <div class="volunteer-footer-links">
            <h3>Explore</h3>
            <a href="/">Home</a>
            <a href="/history">About WASMaN</a>
            <a href="/team">Our Team</a>
            <a href="/ongoing_projects">Ongoing Projects</a>
            <a href="/completed_projects">Completed Projects</a>
        </div>


        <div class="volunteer-footer-links">
            <h3>Volunteer</h3>
            <a href="#opportunities">Opportunities</a>
            <a href="#skills">Skills</a>
            <a href="#volunteer-journey">How It Works</a>
            <a href="#application">Apply Now</a>
            <a href="/intern">Internships</a>
        </div>


        <div class="volunteer-footer-links">
            <h3>Knowledge</h3>
            <a href="/publications">Publications</a>
            <a href="/knowledge_bite">Knowledge Bites</a>
            <a href="/events">Events</a>
            <a href="/news">News & Media</a>
            <a href="/photos_videos">Photo & Video Gallery</a>
        </div>


        <div class="volunteer-footer-contact">
            <h3>Connect</h3>

            <div>
                <i class="fa-solid fa-envelope"></i>
                <span>info@wasman.org</span>
            </div>

            <div>
                <i class="fa-solid fa-location-dot"></i>
                <span>Cape Coast, Ghana</span>
            </div>

            <a href="/general_enquiries" class="volunteer-footer-enquiry">
                General Enquiries
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>


    <div class="volunteer-footer-bottom">

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


{{-- =========================================================
     JAVASCRIPT
========================================================= --}}

<script
    src="{{ asset('created_js/list_hover_background.js') }}">
</script>


<script
    src="{{ asset('created_js/swiper-bundle.min.js') }}">
</script>


<script
    src="{{ asset('created_js/carousel.js') }}">
</script>



{{-- =========================================================
     AFTER SUBMISSION: RETURN USER TO THE VOLUNTEER FORM
========================================================= --}}
@if(session('success') || $errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const volunteerFormSection = document.getElementById('application');

        if (!volunteerFormSection) {
            return;
        }

        if (window.history && window.history.replaceState) {
            window.history.replaceState(
                null,
                document.title,
                window.location.pathname + window.location.search + '#application'
            );
        } else {
            window.location.hash = 'application';
        }

        requestAnimationFrame(function () {
            const headerOffset = 85;
            const formTop =
                volunteerFormSection.getBoundingClientRect().top +
                window.pageYOffset -
                headerOffset;

            window.scrollTo({
                top: formTop,
                left: 0,
                behavior: 'auto'
            });
        });
    });
</script>
@endif

</body>

</html>