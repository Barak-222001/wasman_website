<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wasman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('css/what_we_do.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="css/style.css">

            
    </head>

    <body>

        {{-- header and nav section --}}

@include('components.heading')

<section class="what-we-do">

    <div class="section-header">
        <span>WHAT WE DO</span>
        <h1>Driving Change Through Science, Collaboration and Innovation</h1>

        <p>
            WASMaN promotes sustainable management of aquatic resources by
            empowering women through research, leadership, innovation,
            advocacy and environmental stewardship.
        </p>
    </div>

    <!-- Featured Area -->

    <div class="featured-card">

        <div class="featured-image">
             <img src="{{asset('pics_vids/dr.fish.jpeg')}}">
        </div>

        <div class="featured-text">

            <h2>Research & Scientific Innovation</h2>

            <p>
                We support multidisciplinary research that advances knowledge
                in aquatic science, fisheries, freshwater systems, marine
                biodiversity and climate resilience.
            </p>

            <a href="/publications">Learn More</a>

        </div>

    </div>

    <!-- Activities -->

    <div class="activities">

        <div class="activity">

             <img src="{{asset('pics_vids/marine_conse.jpg')}}">

            <h3>Marine Conservation</h3>

            <p>
                Protecting coastal ecosystems, mangroves and marine protected
                areas through research and advocacy.
            </p>

        </div>

        <div class="activity">

             <img src="{{asset('pics_vids/blue_eco.jpg')}}">

            <h3>Blue Economy</h3>

            <p>
                Supporting sustainable livelihoods and responsible use of
                aquatic resources.
            </p>

        </div>

        <div class="activity">

             <img src="{{asset('pics_vids/capa_build.jpg')}}">

            <h3>Capacity Building</h3>

            <p>
                Workshops, mentorship programmes and leadership development
                for women in aquatic science.
            </p>

        </div>

    </div>

    <!-- Banner -->

    <div class="banner">

         <img src="{{asset('pics_vids/one.jpg')}}">

    </div>

    <!-- More Activities -->

    <div class="activities">

        <div class="activity">

             <img src="{{asset('pics_vids/policy_advo.png')}}">

            <h3>Policy & Advocacy</h3>

            <p>
                Influencing environmental policies that promote sustainable
                water and marine resource management.
            </p>

        </div>

        <div class="activity">

             <img src="{{asset('pics_vids/comm_eng.png')}}">

            <h3>Community Engagement</h3>

            <p>
                Working with coastal communities to promote environmental
                awareness and conservation.
            </p>

        </div>

        <div class="activity">

             <img src="{{asset('pics_vids/stra_part.png')}}">

            <h3>Strategic Partnerships</h3>

            <p>
                Collaborating with universities, governments and international
                organizations to maximize impact.
            </p>

        </div>

    </div>

</section>
<!-- ================= FOOTER ================= -->

<footer class="footer">

    <div class="footer-top">

        <div class="footer-newsletter">

            <h2>Join the WASMaN Community</h2>

            <p>
                Stay informed about our latest research, conservation projects,
                training programmes, events and opportunities for collaboration.
            </p>

        </div>

        <form class="subscribe-form">

            <input type="email" placeholder="Enter your email address">

            <button type="submit">
                Subscribe
            </button>

        </form>

    </div>


    <div class="footer-content">

        <!-- About -->

        <div class="footer-box">

            <h3>WASMaN</h3>

            <p>
                Women in Aquatic Science and Management Network (WASMaN) is committed
                to advancing women's leadership, scientific excellence and
                collaboration in aquatic science, marine conservation, climate
                resilience and sustainable blue economy initiatives.
            </p>

        </div>


        <!-- Quick Links -->

        <div class="footer-box">

            <h3>Quick Links</h3>

            <ul>

                <li><a href="/">Home</a></li>

                <li><a href="/history">History</a></li>

                <li><a href="/what_we_do">What We Do</a></li>

                <li><a href="/ongoing">Projects</a></li>

                <li><a href="/become_member">Membership</a></li>

                <li><a href="/general_enquiries">Contact</a></li>

            </ul>

        </div>


        <!-- Focus Areas -->

        <div class="footer-box">

            <h3>Focus Areas</h3>

            <ul>

                <li>Aquatic Science</li>

                <li>Marine Protected Areas</li>

                <li>Blue Economy</li>

                <li>Climate Resilience</li>

                <li>Water Conservation</li>

                <li>Women's Leadership</li>

            </ul>

        </div>


        <!-- Contact -->

        <div class="footer-box">

            <h3>Contact Us</h3>

            <p>
                <strong>Email</strong><br>
                info@wasman.org
            </p>

            <p>
                <strong>Phone</strong><br>
                +233 XX XXX XXXX
            </p>

            <p>
                <strong>Location</strong><br>
                Cape Coast, Ghana
            </p>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network (WASMaN). All Rights Reserved.
        </p>

        <div class="social-icons">

            <a href="#"><i class="fa-solid fa-globe"></i></a>

            <!-- <a href="#"><i class="fab fa-instagram"></i></a> -->

            <a href="#"><i class="fab fa-linkedin-in"></i></a>

            <!-- <a href="#"><i class="fab fa-x-twitter"></i></a> -->

            <a href="#"><i class="fab fa-youtube"></i></a>

        </div>

    </div>

</footer>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   
      
    </body>


     <script src="{{ asset('created_js/list_hover_background.js') }}"></script>
     <script src="{{ asset('created_js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('created_js/carousel.js') }}"></script>
   

</html>
