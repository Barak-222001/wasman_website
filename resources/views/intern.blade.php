<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/intern.css') }}"> 

        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')



{{-- HERO SECTION --}}
<section class="intern-hero">

    <div class="intern-hero-overlay"></div>

    <div class="intern-hero-content">

        <div class="intern-hero-label">
            <span></span>
            INTERNSHIP PROGRAMME
        </div>

        <h1>
            Start Your Journey in
            <strong>Aquatic Science</strong>
            & Environmental Innovation
        </h1>

        <p>
            Gain practical experience, work with experienced professionals
            and contribute to real-world research and conservation initiatives
            that are shaping the future of aquatic ecosystems.
        </p>

        <div class="intern-hero-actions">

            <a href="#application-form" class="intern-primary-btn">
                Apply for Internship
                <i class="fas fa-arrow-right"></i>
            </a>

            <a href="#opportunities" class="intern-secondary-btn">
                Explore Opportunities
            </a>

        </div>

        <div class="hero-note">
            <i class="fas fa-circle-check"></i>
            Open to students and recent graduates
        </div>

    </div>

    <div class="hero-scroll">
        <span>Scroll to explore</span>
        <i class="fas fa-arrow-down"></i>
    </div>

</section>


{{-- INTRODUCTION / VALUE SECTION --}}
<section class="intern-introduction">

    <div class="intern-intro-image">

        <img src="../pics_vids/mri.png"
             alt="WASMaN internship field experience">

        <div class="experience-card">

            <span>WASMaN EXPERIENCE</span>

            <h3>
                Learn beyond
                the classroom.
            </h3>

            <div class="experience-line"></div>

            <p>
                Practical knowledge, mentorship and meaningful
                environmental impact.
            </p>

        </div>

    </div>


    <div class="intern-intro-content">

        <div class="section-label">
            WHY WASMaN?
        </div>

        <h2>
            Turn Your Passion
            Into <span>Practical Experience</span>
        </h2>

        <p>
            WASMaN internships provide young professionals with an
            opportunity to move beyond theoretical learning and engage
            directly with research, conservation, community development
            and environmental management.
        </p>

        <p>
            Interns work alongside researchers, scientists, communication
            professionals and conservation practitioners while developing
            skills that prepare them for future academic and professional
            opportunities.
        </p>

        <div class="intern-highlights">

            <div class="highlight-item">

                <div class="highlight-icon">
                    <i class="fas fa-flask"></i>
                </div>

                <div>
                    <h4>Hands-on Research</h4>
                    <p>Participate in real research activities.</p>
                </div>

            </div>


            <div class="highlight-item">

                <div class="highlight-icon">
                    <i class="fas fa-user-tie"></i>
                </div>

                <div>
                    <h4>Expert Mentorship</h4>
                    <p>Learn directly from experienced professionals.</p>
                </div>

            </div>


            <div class="highlight-item">

                <div class="highlight-icon">
                    <i class="fas fa-earth-africa"></i>
                </div>

                <div>
                    <h4>Environmental Impact</h4>
                    <p>Contribute to meaningful conservation initiatives.</p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- IMPACT STATISTICS --}}
<section class="intern-impact">

    <div class="impact-heading">

        <span>OUR IMPACT</span>

        <h2>
            Building the Next Generation
            of Aquatic Professionals
        </h2>

    </div>

    <div class="impact-stat-wrapper">

        <div class="impact-stat">

            <strong>150+</strong>

            <span>Interns Trained</span>

        </div>

        <div class="impact-stat">

            <strong>30+</strong>

            <span>Projects Supported</span>

        </div>

        <div class="impact-stat">

            <strong>20</strong>

            <span>Partner Institutions</span>

        </div>

        <div class="impact-stat">

            <strong>12</strong>

            <span>Countries Reached</span>

        </div>

    </div>

</section>


{{-- INTERNSHIP OPPORTUNITIES --}}
<section class="intern-opportunities" id="opportunities">

    <div class="opportunities-heading">

        <div>

            <span class="section-label">
                OPPORTUNITIES
            </span>

            <h2>
                Find Where Your
                Skills Can Make an Impact
            </h2>

        </div>

        <p>
            Explore internship opportunities across research,
            technology, communications and environmental
            management.
        </p>

    </div>


    <div class="opportunity-grid">

        {{-- CARD 1 --}}
        <article class="opportunity-card">

            <div class="opportunity-number">
                01
            </div>

            <div class="opportunity-icon">
                <i class="fas fa-water"></i>
            </div>

            <span>RESEARCH</span>

            <h3>
                Marine Research Intern
            </h3>

            <p>
                Assist researchers with marine biodiversity,
                fisheries and coastal ecosystem studies.
            </p>

            <div class="opportunity-footer">

                <small>
                    <i class="fas fa-location-dot"></i>
                    Field / Laboratory
                </small>

                <a href="#application-form">
                    Apply
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>


        {{-- CARD 2 --}}
        <article class="opportunity-card featured-opportunity">

            <div class="opportunity-number">
                02
            </div>

            <div class="opportunity-icon">
                <i class="fas fa-map-location-dot"></i>
            </div>

            <span>TECHNOLOGY</span>

            <h3>
                GIS & Data Analysis Intern
            </h3>

            <p>
                Support data collection, visualization,
                mapping and environmental data projects.
            </p>

            <div class="opportunity-footer">

                <small>
                    <i class="fas fa-chart-line"></i>
                    Data / GIS
                </small>

                <a href="#application-form">
                    Apply
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>


        {{-- CARD 3 --}}
        <article class="opportunity-card">

            <div class="opportunity-number">
                03
            </div>

            <div class="opportunity-icon">
                <i class="fas fa-bullhorn"></i>
            </div>

            <span>COMMUNICATIONS</span>

            <h3>
                Communications Intern
            </h3>

            <p>
                Create digital content, newsletters, social
                media campaigns and public awareness materials.
            </p>

            <div class="opportunity-footer">

                <small>
                    <i class="fas fa-laptop"></i>
                    Digital / Media
                </small>

                <a href="#application-form">
                    Apply
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </article>

    </div>

</section>


{{-- AREAS OF PLACEMENT --}}
<section class="placement-section">

    <div class="placement-visual">

        <div class="placement-overlay">

            <span>
                AREAS OF PLACEMENT
            </span>

            <h2>
                Discover Where
                You Can Contribute
            </h2>

            <p>
                Our multidisciplinary approach gives interns the
                opportunity to explore different areas of aquatic
                science and environmental sustainability.
            </p>

        </div>

    </div>


    <div class="placement-list">

        <div class="placement-item">
            <span>01</span>
            <h3>Marine Conservation</h3>
            <i class="fas fa-arrow-right"></i>
        </div>

        <div class="placement-item">
            <span>02</span>
            <h3>Blue Economy</h3>
            <i class="fas fa-arrow-right"></i>
        </div>

        <div class="placement-item">
            <span>03</span>
            <h3>Climate Change</h3>
            <i class="fas fa-arrow-right"></i>
        </div>

        <div class="placement-item">
            <span>04</span>
            <h3>Water Resources</h3>
            <i class="fas fa-arrow-right"></i>
        </div>

        <div class="placement-item">
            <span>05</span>
            <h3>Research & Innovation</h3>
            <i class="fas fa-arrow-right"></i>
        </div>

        <div class="placement-item">
            <span>06</span>
            <h3>Policy & Advocacy</h3>
            <i class="fas fa-arrow-right"></i>
        </div>

    </div>

</section>


{{-- BENEFITS --}}
<section class="intern-benefits-section">

    <div class="benefits-heading">

        <span class="section-label">
            THE WASMaN EXPERIENCE
        </span>

        <h2>
            More Than an Internship.
            <span>A Launchpad for Your Future.</span>
        </h2>

    </div>


    <div class="benefits-layout">

        <div class="benefit-large">

            <div class="benefit-icon">
                <i class="fas fa-user-graduate"></i>
            </div>

            <h3>
                Professional Mentorship
            </h3>

            <p>
                Receive guidance from experienced professionals
                and researchers working in aquatic science,
                conservation and environmental management.
            </p>

        </div>


        <div class="benefit-small">

            <i class="fas fa-helmet-safety"></i>

            <h3>
                Field Experience
            </h3>

            <p>
                Gain exposure to practical field activities
                and environmental projects.
            </p>

        </div>


        <div class="benefit-small">

            <i class="fas fa-microscope"></i>

            <h3>
                Research Opportunities
            </h3>

            <p>
                Participate in research activities and
                contribute to scientific knowledge.
            </p>

        </div>


        <div class="benefit-small">

            <i class="fas fa-people-group"></i>

            <h3>
                Professional Networking
            </h3>

            <p>
                Build valuable relationships with researchers,
                institutions and environmental professionals.
            </p>

        </div>

    </div>

</section>


{{-- APPLICATION PROCESS --}}
<section class="intern-process-section">

    <div class="process-heading">

        <span class="section-label">
            APPLICATION PROCESS
        </span>

        <h2>
            From Application
            to Experience
        </h2>

    </div>


    <div class="process-timeline">

        <div class="process-step">

            <div class="step-number">
                01
            </div>

            <div>
                <h3>Submit Application</h3>

                <p>
                    Complete the online internship
                    application form.
                </p>
            </div>

        </div>


        <div class="process-step">

            <div class="step-number">
                02
            </div>

            <div>
                <h3>Application Review</h3>

                <p>
                    Our team reviews your application
                    and qualifications.
                </p>
            </div>

        </div>


        <div class="process-step">

            <div class="step-number">
                03
            </div>

            <div>
                <h3>Interview</h3>

                <p>
                    Shortlisted applicants participate
                    in an interview.
                </p>
            </div>

        </div>


        <div class="process-step">

            <div class="step-number">
                04
            </div>

            <div>
                <h3>Begin Your Journey</h3>

                <p>
                    Join the team and start contributing
                    to meaningful projects.
                </p>
            </div>

        </div>

    </div>

</section>


{{-- ELIGIBILITY --}}
<section class="intern-eligibility">

    <div class="eligibility-content">

        <span class="section-label">
            WHO CAN APPLY?
        </span>

        <h2>
            Is This Programme
            Right For You?
        </h2>

        <p>
            We welcome motivated students and recent graduates
            who are passionate about aquatic science, environmental
            sustainability and community development.
        </p>

        <a href="#application-form">
            Start Your Application
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>


    <div class="requirements-list">

        <div>
            <i class="fas fa-check"></i>
            <span>Current undergraduate or postgraduate student</span>
        </div>

        <div>
            <i class="fas fa-check"></i>
            <span>Recent graduate</span>
        </div>

        <div>
            <i class="fas fa-check"></i>
            <span>Interest in aquatic science or related fields</span>
        </div>

        <div>
            <i class="fas fa-check"></i>
            <span>Strong communication and teamwork skills</span>
        </div>

        <div>
            <i class="fas fa-check"></i>
            <span>Commitment to environmental sustainability</span>
        </div>

    </div>

</section>


{{-- APPLICATION FORM --}}
<section class="intern-application" id="application-form">

    <div class="application-intro">

        <span class="section-label">
            APPLY NOW
        </span>

        <h2>
            Start Your
            WASMaN Journey
        </h2>

        <p>
            Tell us about yourself, your academic background
            and the area where you would like to contribute.
        </p>

        <div class="application-note">

            <i class="fas fa-circle-info"></i>

            <span>
                Please provide accurate information when
                submitting your application.
            </span>

        </div>

    </div>


    <div class="application-form-wrapper">

        <form>

            <div class="form-row">

                <div class="form-field">

                    <label>Full Name</label>

                    <input
                        type="text"
                        placeholder="Enter your full name"
                        required
                    >

                </div>


                <div class="form-field">

                    <label>Email Address</label>

                    <input
                        type="email"
                        placeholder="Enter your email"
                        required
                    >

                </div>

            </div>


            <div class="form-row">

                <div class="form-field">

                    <label>Phone Number</label>

                    <input
                        type="tel"
                        placeholder="Enter your phone number"
                        required
                    >

                </div>


                <div class="form-field">

                    <label>Institution / University</label>

                    <input
                        type="text"
                        placeholder="Your institution"
                    >

                </div>

            </div>


            <div class="form-row">

                <div class="form-field">

                    <label>Programme of Study</label>

                    <input
                        type="text"
                        placeholder="e.g. BSc. Environmental Science"
                    >

                </div>


                <div class="form-field">

                    <label>Preferred Internship Area</label>

                    <select required>

                        <option value="">
                            Select an area
                        </option>

                        <option>Marine Research</option>

                        <option>Blue Economy</option>

                        <option>Climate Change</option>

                        <option>Water Resources</option>

                        <option>Communications</option>

                        <option>GIS & Data Analysis</option>

                    </select>

                </div>

            </div>


            <div class="form-field">

                <label>
                    Why would you like to intern with WASMaN?
                </label>

                <textarea
                    rows="6"
                    placeholder="Tell us about your interests, goals and what you hope to learn..."
                ></textarea>

            </div>


            <div class="upload-area">

                <i class="fas fa-cloud-arrow-up"></i>

                <div>

                    <strong>Upload Your CV</strong>

                    <span>
                        PDF or DOCX recommended
                    </span>

                </div>

                <input type="file">

            </div>


            <button type="submit" class="application-submit">

                Submit Application

                <i class="fas fa-arrow-right"></i>

            </button>

        </form>

    </div>

</section>


{{-- FINAL CTA --}}
<section class="intern-final-cta">

    <div>

        <span>
            YOUR FUTURE STARTS HERE
        </span>

        <h2>
            Ready to Make a Difference?
        </h2>

        <p>
            Take the next step towards building your skills,
            expanding your network and contributing to the
            future of aquatic science.
        </p>

        <a href="#application-form">
            Apply for an Internship
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>

</section>
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
