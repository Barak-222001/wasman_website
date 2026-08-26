<link rel="stylesheet" href="{{ asset('css/header.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<header class="wasman-main-header">

    <div class="wasman-header-inner">

        <!-- LOGO -->
        <a href="/" class="wasman-brand">
            <img
                src="{{ asset('pics_vids/logo.png') }}"
                alt="WASMAN Logo"
            >
        </a>


        <!-- MOBILE MENU BUTTON -->
        <button
            type="button"
            class="wasman-menu-btn"
            id="wasmanMenuBtn"
            aria-label="Toggle navigation"
            aria-expanded="false"
        >
            <i class="fas fa-bars"></i>
        </button>


        <!-- NAVIGATION -->
        <nav class="wasman-nav" id="wasmanNav">

            <!-- HOME -->
            <a href="/" class="wasman-nav-item">
                <i class="fas fa-house"></i>
                <span>Home</span>
            </a>


            <!-- ABOUT -->
            <div class="wasman-nav-dropdown">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
                    <span>About Us</span>
                    <i class="fas fa-chevron-down"></i>
                </button>

                <div class="wasman-dropdown-menu">

                    <a href="/history">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-landmark"></i>
                        </div>

                        <div>
                            <strong>History</strong>
                            <small>Our journey and story</small>
                        </div>
                    </a>


                    <a href="/what_we_do">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-water"></i>
                        </div>

                        <div>
                            <strong>What We Do</strong>
                            <small>Our work and activities</small>
                        </div>
                    </a>


                    <a href="/team">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <div>
                            <strong>Our Team</strong>
                            <small>Meet our leadership</small>
                        </div>
                    </a>


                    <a href="/partners">
                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-handshake"></i>
                        </div>

                        <div>
                            <strong>Partners</strong>
                            <small>Our strategic partners</small>
                        </div>
                    </a>

                </div>

            </div>


            <!-- PROJECTS -->
            <div class="wasman-nav-dropdown">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
                    <span>Projects</span>
                    <i class="fas fa-chevron-down"></i>
                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/areas_of_interest">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-compass"></i>
                        </div>

                        <div>
                            <strong>Areas Of Interest</strong>
                            <small>Our areas of focus</small>
                        </div>

                    </a>


                    <a href="/knowledge_bite">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>

                        <div>
                            <strong>Knowledge Bite</strong>
                            <small>view updates</small>
                        </div>

                    </a>


                    <a href="/ongoing_projects">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-spinner"></i>
                        </div>

                        <div>
                            <strong>Ongoing Projects</strong>
                            <small>Current initiatives</small>
                        </div>

                    </a>


                    <a href="/completed_projects">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-circle-check"></i>
                        </div>

                        <div>
                            <strong>Completed Projects</strong>
                            <small>Our achievements</small>
                        </div>

                    </a>


                    <a href="/publications">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-book-open"></i>
                        </div>

                        <div>
                            <strong>Publications</strong>
                            <small>Research and knowledge</small>
                        </div>

                    </a>

                </div>

            </div>


            <!-- NEWS -->
            <div class="wasman-nav-dropdown">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
                    <span>News & Media</span>
                    <i class="fas fa-chevron-down"></i>
                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/news">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>

                        <div>
                            <strong>News</strong>
                            <small>Latest updates</small>
                        </div>

                    </a>


                    <a href="/reports">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-file-lines"></i>
                        </div>

                        <div>
                            <strong>Reports</strong>
                            <small>Reports and documents</small>
                        </div>

                    </a>


                    <a href="/events">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-calendar-days"></i>
                        </div>

                        <div>
                            <strong>Events</strong>
                            <small>Upcoming activities</small>
                        </div>

                    </a>


                    <a href="/photos_videos">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-photo-film"></i>
                        </div>

                        <div>
                            <strong>Photos & Videos</strong>
                            <small>Explore our gallery</small>
                        </div>

                    </a>

                </div>

            </div>


            <!-- JOIN US -->
            <div class="wasman-nav-dropdown">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
                    <span>Join Us</span>
                    <i class="fas fa-chevron-down"></i>
                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/become_member">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>

                        <div>
                            <strong>Become a Member</strong>
                            <small>Join the WASMAN network</small>
                        </div>

                    </a>


                    <a href="/intern">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>

                        <div>
                            <strong>Intern</strong>
                            <small>Build your experience</small>
                        </div>

                    </a>


                    <a href="/volunteer">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-heart"></i>
                        </div>

                        <div>
                            <strong>Volunteer</strong>
                            <small>Support our mission</small>
                        </div>

                    </a>


                    <a href="/research_assistant">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-flask"></i>
                        </div>

                        <div>
                            <strong>Research Assistant</strong>
                            <small>Work with our researchers</small>
                        </div>

                    </a>


                    <a href="/partner_with_us">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-handshake"></i>
                        </div>

                        <div>
                            <strong>Partner with us</strong>
                            <small>collaborate with our network</small>
                        </div>

                    </a>

                </div>

            </div>


            <!-- CONTACT -->
            <div class="wasman-nav-dropdown wasman-contact">

                <button
                    type="button"
                    class="wasman-nav-item wasman-dropdown-btn"
                >
                    <span>Contact Us</span>
                    <i class="fas fa-chevron-down"></i>
                </button>


                <div class="wasman-dropdown-menu">

                    <a href="/leave_message">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-message"></i>
                        </div>

                        <div>
                            <strong>Leave a Message</strong>
                            <small>Send us a message</small>
                        </div>

                    </a>


                    <a href="/general_enquiries">

                        <div class="wasman-dropdown-icon">
                            <i class="fas fa-circle-question"></i>
                        </div>

                        <div>
                            <strong>General Enquiries</strong>
                            <small>Get in touch with us</small>
                        </div>

                    </a>

                </div>

            </div>

        </nav>

    </div>

</header>

<script>

document.addEventListener("DOMContentLoaded", function () {

    const menuBtn =
        document.getElementById("wasmanMenuBtn");

    const nav =
        document.getElementById("wasmanNav");


    if (!menuBtn || !nav) {
        return;
    }


    /* =====================================================
       HAMBURGER
    ===================================================== */

    menuBtn.addEventListener("click", function (event) {

        event.preventDefault();

        event.stopPropagation();


        const isOpen =
            nav.classList.toggle("w-nav-open");


        menuBtn.setAttribute(
            "aria-expanded",
            isOpen ? "true" : "false"
        );


        const icon =
            menuBtn.querySelector("i");


        if (icon) {

            icon.classList.remove(
                "fa-bars",
                "fa-xmark"
            );


            icon.classList.add(
                isOpen
                    ? "fa-xmark"
                    : "fa-bars"
            );

        }

    });


    /* =====================================================
       DROPDOWN BUTTONS
    ===================================================== */

    const dropdownButtons =
        document.querySelectorAll(
            ".wasman-dropdown-btn"
        );


    dropdownButtons.forEach(function (button) {

        button.addEventListener(
            "click",
            function (event) {

                /*
                 * Desktop keeps the original hover
                 * behavior.
                 */

                if (window.innerWidth > 950) {

                    return;

                }


                event.preventDefault();

                event.stopPropagation();


                const dropdown =
                    button.closest(
                        ".wasman-nav-dropdown"
                    );


                if (!dropdown) {

                    return;

                }


                const alreadyOpen =
                    dropdown.classList.contains(
                        "w-dropdown-open"
                    );


                /*
                 * Close all other dropdowns.
                 */

                document
                    .querySelectorAll(
                        ".wasman-nav-dropdown"
                    )
                    .forEach(function (item) {

                        item.classList.remove(
                            "w-dropdown-open"
                        );

                    });


                /*
                 * Toggle the clicked one.
                 */

                if (!alreadyOpen) {

                    dropdown.classList.add(
                        "w-dropdown-open"
                    );

                }

            }
        );

    });


    /* =====================================================
       PREVENT SUBMENU CLICKS FROM CLOSING IT
    ===================================================== */

    document
        .querySelectorAll(
            ".wasman-dropdown-menu"
        )
        .forEach(function (menu) {

            menu.addEventListener(
                "click",
                function (event) {

                    event.stopPropagation();

                }
            );

        });


    /* =====================================================
       CLOSE WHEN CLICKING OUTSIDE
    ===================================================== */

    document.addEventListener(
        "click",
        function (event) {

            if (window.innerWidth <= 950) {

                if (
                    !nav.contains(event.target) &&
                    !menuBtn.contains(event.target)
                ) {

                    closeMobileMenu();

                }

            }

        }
    );


    /* =====================================================
       CLOSE MOBILE MENU
    ===================================================== */

    function closeMobileMenu() {

        nav.classList.remove(
            "w-nav-open"
        );


        menuBtn.setAttribute(
            "aria-expanded",
            "false"
        );


        const icon =
            menuBtn.querySelector("i");


        if (icon) {

            icon.classList.remove(
                "fa-xmark"
            );

            icon.classList.add(
                "fa-bars"
            );

        }


        document
            .querySelectorAll(
                ".wasman-nav-dropdown"
            )
            .forEach(function (dropdown) {

                dropdown.classList.remove(
                    "w-dropdown-open"
                );

            });

    }


    /* =====================================================
       RESET WHEN RETURNING TO DESKTOP
    ===================================================== */

    window.addEventListener(
        "resize",
        function () {

            if (window.innerWidth > 950) {

                closeMobileMenu();

            }

        }
    );

});

</script>
