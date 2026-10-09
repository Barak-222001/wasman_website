<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WASMaN Research Spotlight showcases research by women across aquatic science, mentorship, policy, advocacy, collaboration and networking.">
    <title>Research Spotlight | WASMaN</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/research_spotlight.css') }}">
</head>
<body>

@include('components.heading')

<main class="spotlight-page">

    {{-- =========================================================
         HERO
    ========================================================= --}}
    <section class="spotlight-hero">
        <div class="spotlight-hero-glow spotlight-hero-glow-one"></div>
        <div class="spotlight-hero-glow spotlight-hero-glow-two"></div>

        <div class="spotlight-shell spotlight-hero-content">
            <div class="spotlight-hero-copy">
                <span class="spotlight-kicker">
                    <i class="fa-solid fa-microscope"></i>
                    WASMaN WEBINAR SERIES
                </span>

                <h1>Research <span>Spotlight</span></h1>

                <p>
                    A focused platform showcasing the research of women working across
                    WASMaN's four focus areas, creating space to share knowledge,
                    strengthen visibility and inspire the next generation of women
                    in aquatic science and management.
                </p>

                <a href="#current-spotlight" class="spotlight-primary-btn">
                    View Current Spotlight
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
            </div>

            <div class="spotlight-hero-mark" aria-hidden="true">
                <i class="fa-solid fa-water"></i>
            </div>
        </div>
    </section>

    {{-- =========================================================
         FOUR FOCUS AREAS
    ========================================================= --}}
    <section class="spotlight-focus" aria-labelledby="focus-title">
        <div class="spotlight-shell">
            <div class="spotlight-section-heading spotlight-section-heading-centered">
                <span>OUR RESEARCH LENS</span>
                <h2 id="focus-title">Four Focus Areas. One Spotlight.</h2>
                <p>
                    Each Research Spotlight connects featured work to the core areas
                    that guide WASMaN's research, learning, advocacy and professional network.
                </p>
            </div>

            <div class="spotlight-focus-grid">
                <article class="spotlight-focus-card">
                    <span class="focus-number">01</span>
                    <div class="focus-icon"><i class="fa-solid fa-microscope"></i></div>
                    <h3>Research &amp; Scientific Innovation</h3>
                    <p>Highlighting research, evidence and ideas that advance aquatic science and sustainable resource management.</p>
                </article>

                <article class="spotlight-focus-card">
                    <span class="focus-number">02</span>
                    <div class="focus-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h3>Capacity Building &amp; Mentorship</h3>
                    <p>Sharing knowledge and experiences that strengthen skills, professional growth and pathways for women and girls.</p>
                </article>

                <article class="spotlight-focus-card">
                    <span class="focus-number">03</span>
                    <div class="focus-icon"><i class="fa-solid fa-bullhorn"></i></div>
                    <h3>Policy &amp; Advocacy</h3>
                    <p>Bringing research into conversations that strengthen visibility, representation and evidence-informed action.</p>
                </article>

                <article class="spotlight-focus-card">
                    <span class="focus-number">04</span>
                    <div class="focus-icon"><i class="fa-solid fa-people-group"></i></div>
                    <h3>Collaboration &amp; Network</h3>
                    <p>Connecting researchers, professionals, students and institutions through shared learning and meaningful exchange.</p>
                </article>
            </div>
        </div>
    </section>

    {{-- =========================================================
         CURRENT RESEARCH SPOTLIGHT
    ========================================================= --}}
    <section class="current-spotlight" id="current-spotlight">
        <div class="spotlight-shell">
            <div class="spotlight-section-heading">
                <span>CURRENT SPOTLIGHT</span>
                <h2>Join the Conversation</h2>
            </div>

            <div class="current-event-layout">
                <a href="https://wacren.zoom.us/meeting/register/kuiKZKgQSxyyAkFfwMgaSQ"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="current-flyer"
                   aria-label="Register for the current WASMaN Research Spotlight">
                    <img src="{{ asset('pics_vids/spot1.jpeg') }}"
                         alt="Research Spotlight flyer: What Fetu Afahye Reveals About Lagoon Stewardship and Sanitation">
                </a>

                <div class="current-event-copy">
                    <span class="current-badge">
                        <span class="live-dot"></span>
                        UPCOMING SPOTLIGHT
                    </span>

                    <h3>What Fetu Afahye Reveals About Lagoon Stewardship and Sanitation</h3>

                    <p class="event-theme">
                        Culture, fisheries restraint and environmental action at Fosu Lagoon.
                    </p>

                    <div class="event-meta">
                        <div class="event-meta-item">
                            <span class="event-meta-icon"><i class="fa-regular fa-calendar"></i></span>
                            <div>
                                <small>Date</small>
                                <strong>Friday, 9 October 2026</strong>
                            </div>
                        </div>

                        <div class="event-meta-item">
                            <span class="event-meta-icon"><i class="fa-regular fa-clock"></i></span>
                            <div>
                                <small>Time</small>
                                <strong>1:00 PM GMT — Ghana Time</strong>
                            </div>
                        </div>

                        <div class="event-meta-item">
                            <span class="event-meta-icon"><i class="fa-solid fa-display"></i></span>
                            <div>
                                <small>Venue</small>
                                <strong>Live Online Webinar</strong>
                            </div>
                        </div>
                    </div>

                    <div class="event-people">
                        <div>
                            <small>Presenter</small>
                            <strong>Cindy Owusu</strong>
                        </div>
                        <div>
                            <small>Moderator</small>
                            <strong>Faustina Sarpong</strong>
                        </div>
                    </div>

                    <a href="https://wacren.zoom.us/meeting/register/kuiKZKgQSxyyAkFfwMgaSQ"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="event-register-btn">
                        Join &amp; Register
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         FEATURED RESEARCH ARTICLE — FETU AFAHYE
    ========================================================= --}}
    <section class="spotlight-publication" id="featured-article" aria-labelledby="publication-title">
        <div class="spotlight-shell">
            <div class="spotlight-section-heading spotlight-section-heading-centered">
                <span>FEATURED RESEARCH ARTICLE</span>
                <h2 id="publication-title">Explore the Research Behind the Spotlight</h2>
                <p>Discover the evidence, traditions and community perspectives behind our featured Research Spotlight.</p>
            </div>

            <article class="spotlight-publication-card">
                <a class="spotlight-publication-cover"
                   href="{{ asset('resources/research-spotlight/fetu-afahye-lagoon-stewardship-and-sanitation.pdf') }}"
                   target="_blank" rel="noopener noreferrer"
                   aria-label="Read the illustrated Fetu Afahye research article in PDF format">
                    <img src="{{ asset('pics_vids/research-spotlight/fetu-afahye-research-flyer.png') }}"
                         alt="WASMaN Research Spotlight article flyer about Fetu Afahye, lagoon stewardship and sanitation"
                         loading="lazy">
                    <span class="spotlight-publication-cover-caption"><i class="fa-regular fa-file-pdf"></i> Open illustrated article</span>
                </a>

                <div class="spotlight-publication-info">
                    <span class="spotlight-publication-tag"><i class="fa-solid fa-book-open-reader"></i> RESEARCH SPOTLIGHT · FEATURED ARTICLE</span>
                    <h3>What Fetu Afahye Reveals About Lagoon Stewardship and Sanitation</h3>
                    <p class="spotlight-publication-authors"><i class="fa-solid fa-user-pen"></i> Ms Cindy Owusu &amp; Dr. Alberta Sagoe</p>
                    <p class="spotlight-publication-summary">
                        Explore how Cape Coast’s Fetu Afahye connects cultural tradition, temporary fishing restrictions and communal clean-up at the Fosu Lagoon. Through photographs and videos, the article documents immediate improvements in visible surface litter, while highlighting the need for year-round sanitation and continued ecological monitoring.
                    </p>
                    <div class="spotlight-publication-insights" aria-label="Research themes">
                        <span><i class="fa-solid fa-water"></i> Lagoon stewardship</span>
                        <span><i class="fa-solid fa-people-group"></i> Community action</span>
                        <span><i class="fa-solid fa-microscope"></i> Ecological monitoring</span>
                    </div>
                    <p class="spotlight-publication-note">A cleaner-looking lagoon is not, by itself, proof of improved water quality or fish biodiversity.</p>
                    <div class="spotlight-publication-actions">
                        <a class="spotlight-publication-read" href="{{ asset('resources/research-spotlight/fetu-afahye-lagoon-stewardship-and-sanitation.pdf') }}" target="_blank" rel="noopener noreferrer">
                            <i class="fa-regular fa-file-pdf"></i> Read Full Article <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                        <a class="spotlight-publication-download" href="{{ asset('resources/research-spotlight/fetu-afahye-lagoon-stewardship-and-sanitation.pdf') }}" download="WASMaN-Fetu-Afahye-Research-Spotlight.pdf">
                            <i class="fa-solid fa-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    {{-- =========================================================
         PREVIOUS SPOTLIGHTS
         Keep this compact. Add event cards here after each edition.
    ========================================================= --}}
    <section class="previous-spotlights">
        <div class="spotlight-shell">
            <div class="archive-heading">
                <div>
                    <span>SPOTLIGHT ARCHIVE</span>
                    <h2>Previous Research Spotlights</h2>
                </div>
                <p>
                    Completed editions will be added here over time, creating a simple
                    record of the research and voices featured through the series.
                </p>
            </div>

            <div class="archive-empty">
                <i class="fa-regular fa-folder-open"></i>
                <div>
                    <strong>Our archive begins with the maiden edition.</strong>
                    <span>Previous Spotlight sessions will appear here after each event.</span>
                </div>
            </div>
        </div>
    </section>

</main>

</body>
</html>
