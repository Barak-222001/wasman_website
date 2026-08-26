<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/leave_message.css') }}"> 

        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')

{{-- =========================================================
     LEAVE A MESSAGE PAGE
========================================================= --}}

{{-- HERO SECTION --}}
<section class="message-hero">

    <div class="message-hero-bg"></div>

    <div class="message-overlay">

        <div class="message-content">

            <span class="hero-eyebrow">
                GET IN TOUCH
            </span>

            <h1>
                Your Voice Matters.
                <br>
                Let's Start a Conversation.
            </h1>

            <p>
                Whether you have a question, research idea,
                collaboration opportunity or simply want to
                connect with WASMAN, our team is ready to listen.
            </p>

            <div class="message-hero-actions">

                <a href="#message-form" class="primary-message-btn">
                    Leave a Message
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a href="#contact-information" class="secondary-message-btn">
                    Contact Information
                </a>

            </div>

        </div>

        {{-- HERO FLOATING INFO --}}
        <div class="hero-contact-card">

            <div class="hero-contact-icon">
                <i class="fas fa-comments"></i>
            </div>

            <div>
                <span>WE ARE LISTENING</span>
                <strong>Let's build meaningful connections.</strong>
            </div>

        </div>

    </div>

</section>


{{-- INTRODUCTION / CONNECT SECTION --}}
<section class="connect-section">

    <div class="connect-container">

        <div class="connect-image">

            <img
                src="{{ asset('images/contact-team.jpg') }}"
                alt="WASMAN Team">

            <div class="image-caption">

                <div class="caption-icon">
                    <i class="fas fa-water"></i>
                </div>

                <div>
                    <span>CONNECT WITH WASMAN</span>
                    <strong>Ideas. People. Impact.</strong>
                </div>

            </div>

        </div>


        <div class="connect-text">

            <span class="section-eyebrow">
                CONNECT WITH US
            </span>

            <h2>
                Building Conversations
                That Create Impact
            </h2>

            <p>
                WASMAN believes meaningful change begins with
                communication, collaboration and shared knowledge.
                We welcome researchers, students, communities,
                organizations and partners to connect with us.
            </p>

            <p>
                Whether you are exploring a research collaboration,
                looking for partnership opportunities or simply
                seeking more information about our programmes,
                we would be happy to hear from you.
            </p>


            <div class="connect-list">

                <div class="connect-item">

                    <div class="connect-icon">
                        <i class="fas fa-flask"></i>
                    </div>

                    <div>
                        <strong>Research Inquiries</strong>
                        <span>
                            Discuss research and scientific collaboration.
                        </span>
                    </div>

                </div>


                <div class="connect-item">

                    <div class="connect-icon">
                        <i class="fas fa-handshake"></i>
                    </div>

                    <div>
                        <strong>Partnership Opportunities</strong>
                        <span>
                            Explore opportunities to work together.
                        </span>
                    </div>

                </div>


                <div class="connect-item">

                    <div class="connect-icon">
                        <i class="fas fa-users"></i>
                    </div>

                    <div>
                        <strong>Membership</strong>
                        <span>
                            Learn more about joining our network.
                        </span>
                    </div>

                </div>


                <div class="connect-item">

                    <div class="connect-icon">
                        <i class="fas fa-leaf"></i>
                    </div>

                    <div>
                        <strong>Environmental Initiatives</strong>
                        <span>
                            Connect around conservation activities.
                        </span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- MESSAGE CATEGORIES --}}
<section class="message-categories">

    <div class="section-title centered">

        <span class="section-eyebrow">
            HOW CAN WE HELP?
        </span>

        <h2>
            Tell Us What You Need
        </h2>

        <p>
            Select the area that best describes your inquiry
            and help us direct your message to the right team.
        </p>

    </div>


    <div class="message-category-grid">

        <div class="message-category-card">

            <div class="category-number">
                01
            </div>

            <div class="category-icon">
                <i class="fas fa-circle-question"></i>
            </div>

            <h3>
                General Inquiry
            </h3>

            <p>
                Questions about WASMAN, our programmes,
                activities and organizational work.
            </p>

            <a href="#message-form">
                Send Inquiry
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="message-category-card">

            <div class="category-number">
                02
            </div>

            <div class="category-icon">
                <i class="fas fa-microscope"></i>
            </div>

            <h3>
                Research Collaboration
            </h3>

            <p>
                Connect with us about research, field studies,
                data and scientific collaboration.
            </p>

            <a href="#message-form">
                Discuss Research
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="message-category-card">

            <div class="category-number">
                03
            </div>

            <div class="category-icon">
                <i class="fas fa-handshake"></i>
            </div>

            <h3>
                Partnership Request
            </h3>

            <p>
                Explore strategic partnerships, programmes,
                projects and institutional collaboration.
            </p>

            <a href="#message-form">
                Start a Partnership
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>


        <div class="message-category-card">

            <div class="category-number">
                04
            </div>

            <div class="category-icon">
                <i class="fas fa-user-plus"></i>
            </div>

            <h3>
                Membership Support
            </h3>

            <p>
                Get assistance with membership,
                volunteering, internships and participation.
            </p>

            <a href="#message-form">
                Get Support
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


{{-- CONTACT INFORMATION --}}
<section class="contact-information" id="contact-information">

    <div class="contact-information-inner">

        <div class="section-title">

            <span class="section-eyebrow">
                CONTACT DETAILS
            </span>

            <h2>
                Reach WASMAN Directly
            </h2>

            <p>
                Prefer to contact us directly? You can reach
                the WASMAN team through the channels below.
            </p>

        </div>


        <div class="contact-grid">

            {{-- ADDRESS --}}
            <div class="contact-card">

                <div class="contact-card-icon">
                    <i class="fas fa-location-dot"></i>
                </div>

                <div>

                    <span>
                        OUR LOCATION
                    </span>

                    <h3>
                        Address
                    </h3>

                    <p>
                        WASMAN Headquarters<br>
                        University / Research Centre Address<br>
                        Cape Coast, Ghana
                    </p>

                </div>

            </div>


            {{-- EMAIL --}}
            <div class="contact-card">

                <div class="contact-card-icon">
                    <i class="fas fa-envelope"></i>
                </div>

                <div>

                    <span>
                        WRITE TO US
                    </span>

                    <h3>
                        Email
                    </h3>

                    <a href="mailto:info@wasman.org">
                        info@wasman.org
                    </a>

                    <small>
                        We welcome your questions and ideas.
                    </small>

                </div>

            </div>


            {{-- PHONE --}}
            <div class="contact-card">

                <div class="contact-card-icon">
                    <i class="fas fa-phone"></i>
                </div>

                <div>

                    <span>
                        TALK TO US
                    </span>

                    <h3>
                        Phone
                    </h3>

                    <a href="tel:+233000000000">
                        +233 XXX XXX XXX
                    </a>

                    <small>
                        Available during working hours.
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- MESSAGE FORM --}}
<section class="leave-message-form" id="message-form">

    <div class="message-form-wrapper">


        {{-- FORM INTRO --}}
        <div class="form-intro">

            <span class="section-eyebrow">
                SEND MESSAGE
            </span>

            <h2>
                Let's Start
                Something Meaningful
            </h2>

            <p>
                Fill out the form and tell us how we can
                connect, collaborate or support you.
            </p>


            <div class="form-assurance">

                <div>
                    <i class="fas fa-shield-halved"></i>
                </div>

                <div>
                    <strong>Your information is important to us.</strong>

                    <span>
                        We use your details only to respond
                        to your inquiry.
                    </span>
                </div>

            </div>


            <div class="form-contact-note">

                <i class="fas fa-clock"></i>

                <span>
                    We aim to respond to enquiries
                    within a few working days.
                </span>

            </div>

        </div>


        {{-- FORM --}}
        <div class="message-form-container">

            <form>

                <div class="form-grid">

                    <div class="form-group">

                        <label for="full-name">
                            Full Name
                        </label>

                        <div class="input-wrapper">

                            <i class="fas fa-user"></i>

                            <input
                                id="full-name"
                                type="text"
                                placeholder="Enter your full name"
                                required>

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email Address
                        </label>

                        <div class="input-wrapper">

                            <i class="fas fa-envelope"></i>

                            <input
                                id="email"
                                type="email"
                                placeholder="Enter your email"
                                required>

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="phone">
                            Phone Number
                        </label>

                        <div class="input-wrapper">

                            <i class="fas fa-phone"></i>

                            <input
                                id="phone"
                                type="tel"
                                placeholder="+233 XXX XXX XXX">

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="category">
                            Message Category
                        </label>

                        <div class="input-wrapper">

                            <i class="fas fa-layer-group"></i>

                            <select id="category">

                                <option>
                                    Select a category
                                </option>

                                <option>
                                    General Inquiry
                                </option>

                                <option>
                                    Research Collaboration
                                </option>

                                <option>
                                    Partnership
                                </option>

                                <option>
                                    Membership
                                </option>

                                <option>
                                    Internship
                                </option>

                                <option>
                                    Volunteer
                                </option>

                            </select>

                        </div>

                    </div>

                </div>


                {{-- SUBJECT --}}
                <div class="form-group">

                    <label for="subject">
                        Subject
                    </label>

                    <div class="input-wrapper">

                        <i class="fas fa-heading"></i>

                        <input
                            id="subject"
                            type="text"
                            placeholder="What would you like to discuss?">

                    </div>

                </div>


                {{-- MESSAGE --}}
                <div class="form-group">

                    <label for="message">
                        Your Message
                    </label>

                    <div class="textarea-wrapper">

                        <textarea
                            id="message"
                            rows="7"
                            placeholder="Write your message here..."
                            required></textarea>

                    </div>

                </div>


                {{-- ATTACHMENT --}}
                <div class="file-area">

                    <div class="file-icon">

                        <i class="fas fa-paperclip"></i>

                    </div>

                    <div class="file-content">

                        <label>
                            Attach Document
                            <span>(Optional)</span>
                        </label>

                        <small>
                            PDF, DOC, DOCX or other supporting documents
                        </small>

                        <input type="file">

                    </div>

                </div>


                {{-- SUBMIT --}}
                <button
                    type="submit"
                    class="message-submit-btn">

                    Send Message

                    <i class="fas fa-paper-plane"></i>

                </button>

            </form>

        </div>

    </div>

</section>


{{-- FAQ --}}
<section class="message-faq">

    <div class="section-title centered">

        <span class="section-eyebrow">
            FREQUENTLY ASKED QUESTIONS
        </span>

        <h2>
            Before You Send Us a Message
        </h2>

    </div>


    <div class="faq-grid">


        <div class="faq-item">

            <div class="faq-icon">
                <i class="fas fa-clock"></i>
            </div>

            <div>

                <h3>
                    How long does WASMAN take to respond?
                </h3>

                <p>
                    We aim to respond to enquiries within
                    a few working days.
                </p>

            </div>

        </div>


        <div class="faq-item">

            <div class="faq-icon">
                <i class="fas fa-handshake"></i>
            </div>

            <div>

                <h3>
                    Can organizations partner with WASMAN?
                </h3>

                <p>
                    Yes. We welcome partnerships that support
                    aquatic conservation, research and
                    sustainable development.
                </p>

            </div>

        </div>


        <div class="faq-item">

            <div class="faq-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>

            <div>

                <h3>
                    Can students contact WASMAN?
                </h3>

                <p>
                    Absolutely. Students interested in
                    research, internships, volunteering and
                    professional development are welcome.
                </p>

            </div>

        </div>


        <div class="faq-item">

            <div class="faq-icon">
                <i class="fas fa-users"></i>
            </div>

            <div>

                <h3>
                    Can I contact WASMAN about membership?
                </h3>

                <p>
                    Yes. Our team can provide information
                    about membership categories and how to join
                    the network.
                </p>

            </div>

        </div>


    </div>

</section>


{{-- FINAL CTA --}}
<section class="message-final-cta">

    <div class="cta-decoration"></div>

    <div class="cta-content">

        <span>
            LET'S CONNECT
        </span>

        <h2>
            Have an Idea?
            <br>
            Let's Talk About It.
        </h2>

        <p>
            Meaningful partnerships begin with simple
            conversations. Reach out and let's explore
            what we can accomplish together.
        </p>

        <a href="#message-form">
            Start a Conversation
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>

</section>
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
