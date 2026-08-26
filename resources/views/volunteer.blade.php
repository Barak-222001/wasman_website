<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/volunteer.css') }}"> 

        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

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
            <strong>Protect Our Waters.</strong>
        </h1>

        <p>
            Join a growing community of people working together to
            protect aquatic ecosystems, support coastal communities
            and promote environmental sustainability.
        </p>

        <div class="volunteer-hero-actions">

            <a href="#application" class="primary-volunteer-btn">
                Become a Volunteer
                <span>→</span>
            </a>

            <a href="#opportunities" class="secondary-volunteer-btn">
                Explore Opportunities
            </a>

        </div>

        <div class="hero-mini-info">

            <div>
                <strong>350+</strong>
                <span>Volunteers</span>
            </div>

            <div>
                <strong>20</strong>
                <span>Regions</span>
            </div>

            <div>
                <strong>120+</strong>
                <span>Projects</span>
            </div>

        </div>

    </div>

    <div class="hero-scroll">
        <span>SCROLL TO EXPLORE</span>
        <i></i>
    </div>

</section>


{{-- =========================================================
     INTRODUCTION / WHY VOLUNTEER
========================================================= --}}
<section class="volunteer-introduction">

    <div class="volunteer-intro-image">

        <img src="../pics_vids/mi.png"
             alt="WASMaN volunteers working together">

        <div class="image-caption">
            <span>WASMaN COMMUNITY</span>
            <p>People creating meaningful environmental change.</p>
        </div>

    </div>


    <div class="volunteer-intro-content">

        <span class="section-label">MAKE AN IMPACT</span>

        <h2>
            Small Actions.
            <span>Meaningful Change.</span>
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
                <span>✓</span>
                <p>Support aquatic conservation initiatives</p>
            </div>

            <div>
                <span>✓</span>
                <p>Participate in community outreach</p>
            </div>

            <div>
                <span>✓</span>
                <p>Support research and field activities</p>
            </div>

            <div>
                <span>✓</span>
                <p>Promote environmental awareness</p>
            </div>

        </div>

        <a href="#opportunities" class="text-link">
            Discover how you can contribute
            <span>→</span>
        </a>

    </div>

</section>


{{-- =========================================================
     IMPACT STATISTICS
========================================================= --}}
<section class="volunteer-impact">

    <div class="impact-heading">

        <span>OUR COLLECTIVE IMPACT</span>

        <h2>
            Together, We Are Making
            A Difference
        </h2>

    </div>

    <div class="impact-stat-grid">

        <div class="impact-stat">
            <strong>350+</strong>
            <span>Active Volunteers</span>
        </div>

        <div class="impact-stat">
            <strong>120</strong>
            <span>Community Projects</span>
        </div>

        <div class="impact-stat">
            <strong>50+</strong>
            <span>Beach Clean-ups</span>
        </div>

        <div class="impact-stat">
            <strong>20</strong>
            <span>Regions Reached</span>
        </div>

    </div>

</section>


{{-- =========================================================
     VOLUNTEER OPPORTUNITIES
========================================================= --}}
<section class="volunteer-opportunities" id="opportunities">

    <div class="section-heading">

        <div>
            <span class="section-label">OPPORTUNITIES</span>

            <h2>
                Find Your Place
                <span>in the Movement</span>
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

            <div class="opportunity-number">01</div>

            <div class="opportunity-icon">
                
            </div>

            <h3>Community Outreach</h3>

            <p>
                Help educate communities about aquatic
                conservation and sustainable resource use.
            </p>

            <a href="#application">
                Join This Area →
            </a>

        </article>


        <article class="opportunity-card featured-opportunity">

            <div class="opportunity-number">02</div>

            <div class="opportunity-icon">
                🔬
            </div>

            <h3>Research Support</h3>

            <p>
                Assist researchers with field activities,
                data collection and environmental studies.
            </p>

            <a href="#application">
                Join This Area →
            </a>

        </article>


        <article class="opportunity-card">

            <div class="opportunity-number">03</div>

            <div class="opportunity-icon">
                🎥
            </div>

            <h3>Media & Communications</h3>

            <p>
                Help tell environmental stories through
                photography, design, video and digital media.
            </p>

            <a href="#application">
                Join This Area →
            </a>

        </article>


        <article class="opportunity-card">

            <div class="opportunity-number">04</div>

            <div class="opportunity-icon">
                🤝
            </div>

            <h3>Event Support</h3>

            <p>
                Support conferences, workshops, training
                programmes and community events.
            </p>

            <a href="#application">
                Join This Area →
            </a>

        </article>

    </div>

</section>


{{-- =========================================================
     SKILLS SECTION
========================================================= --}}
<section class="skills-section">

    <div class="skills-content">

        <span class="section-label">
            YOUR SKILLS MATTER
        </span>

        <h2>
            Bring Your Skills.
            <span>Make An Impact.</span>
        </h2>

        <p>
            You don't need to be a marine scientist to contribute.
            WASMaN welcomes people with different skills, experiences
            and interests.
        </p>

    </div>


    <div class="skills-list">

        <div class="skill-item">
            <span>01</span>
            <h3>Marine Science</h3>
        </div>

        <div class="skill-item">
            <span>02</span>
            <h3>Research</h3>
        </div>

        <div class="skill-item">
            <span>03</span>
            <h3>Photography</h3>
        </div>

        <div class="skill-item">
            <span>04</span>
            <h3>Graphic Design</h3>
        </div>

        <div class="skill-item">
            <span>05</span>
            <h3>Teaching</h3>
        </div>

        <div class="skill-item">
            <span>06</span>
            <h3>GIS & Data</h3>
        </div>

        <div class="skill-item">
            <span>07</span>
            <h3>Communications</h3>
        </div>

        <div class="skill-item">
            <span>08</span>
            <h3>Fundraising</h3>
        </div>

    </div>

</section>


{{-- =========================================================
     VOLUNTEER JOURNEY
========================================================= --}}
<section class="volunteer-journey">

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

            <h3>Apply</h3>

            <p>
                Complete the volunteer application form.
            </p>

        </div>


        <div class="journey-step">

            <div class="step-circle">
                02
            </div>

            <h3>Orientation</h3>

            <p>
                Learn about WASMaN and our volunteer activities.
            </p>

        </div>


        <div class="journey-step">

            <div class="step-circle">
                03
            </div>

            <h3>Choose</h3>

            <p>
                Select an activity or area that matches your interests.
            </p>

        </div>


        <div class="journey-step">

            <div class="step-circle">
                04
            </div>

            <h3>Make an Impact</h3>

            <p>
                Start contributing to projects and communities.
            </p>

        </div>

    </div>

</section>


{{-- =========================================================
     APPLICATION SECTION
========================================================= --}}
<section class="volunteer-application" id="application">

    <div class="application-wrapper">

        <div class="application-intro">

            <span class="section-label">
                JOIN THE MOVEMENT
            </span>

            <h2>
                Ready to Make
                <span>A Difference?</span>
            </h2>

            <p>
                Complete the form and tell us how you would
                like to contribute. Our team will review your
                application and get in touch with you.
            </p>

            <div class="application-note">

                <span>🌱</span>

                <p>
                    Every volunteer contribution, big or small,
                    helps create healthier aquatic ecosystems.
                </p>

            </div>

        </div>


        <div class="volunteer-form-container">

            <form class="volunteer-form">

                <div class="form-header">

                    <span>VOLUNTEER APPLICATION</span>

                    <h3>
                        Let's Get Started
                    </h3>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>Full Name</label>

                        <input
                            type="text"
                            placeholder="Enter your full name"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>Email Address</label>

                        <input
                            type="email"
                            placeholder="Enter your email"
                            required
                        >

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>Phone Number</label>

                        <input
                            type="tel"
                            placeholder="Enter your phone number"
                        >

                    </div>


                    <div class="form-group">

                        <label>Country</label>

                        <input
                            type="text"
                            placeholder="Your country"
                        >

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>Volunteer Area</label>

                        <select>

                            <option>
                                Select an area
                            </option>

                            <option>
                                Community Outreach
                            </option>

                            <option>
                                Research Support
                            </option>

                            <option>
                                Conservation
                            </option>

                            <option>
                                Media & Communications
                            </option>

                            <option>
                                Event Support
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>Availability</label>

                        <select>

                            <option>
                                Select availability
                            </option>

                            <option>
                                Weekdays
                            </option>

                            <option>
                                Weekends
                            </option>

                            <option>
                                Flexible
                            </option>

                        </select>

                    </div>

                </div>


                <div class="form-group">

                    <label>
                        Why would you like to volunteer with WASMaN?
                    </label>

                    <textarea
                        rows="6"
                        placeholder="Tell us about your interests, skills and motivation..."
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="submit-volunteer"
                >

                    Submit Application

                    <span>→</span>

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
            <strong>People Like You.</strong>
        </h2>

        <p>
            Together, we can build healthier aquatic ecosystems,
            stronger communities and a more sustainable future.
        </p>

        <a href="#application">
            Become a WASMaN Volunteer
            <span>→</span>
        </a>

    </div>

</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
