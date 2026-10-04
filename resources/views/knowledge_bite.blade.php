<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WASMaN | Knowledge Bites</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800|playfair-display:500,600,700" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/knowledge_bite.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

@include('components.heading')


<section class="knowledge-page">

    {{-- HERO --}}
    <section class="knowledge-hero">

        <div class="knowledge-overlay">

            <div class="knowledge-content">

                <span class="hero-eyebrow">
                    <i class="fa-solid fa-book-open-reader"></i>
                    KNOWLEDGE BITES
                </span>

                <h1>
                    Discover What Is Shaping
                    <span>Our Aquatic Future</span>
                </h1>

                <p>
                    Explore emerging trends, new discoveries,
                    research insights and current developments
                    shaping aquatic science, marine conservation,
                    climate resilience and the blue economy.
                </p>

                <div class="knowledge-buttons">

                    <a href="#latest-bites">
                        Explore Knowledge Bites
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a href="#resources" class="outline-button">
                        Download Resources
                        <i class="fa-solid fa-download"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- INTRODUCTION --}}
    <section class="knowledge-intro">

        <div class="knowledge-intro-text">

            <span class="section-label">
                STAY INFORMED
            </span>

            <h2>
                Knowledge That Keeps
                You Ahead of the Conversation
            </h2>

            <p>
                The aquatic environment is constantly changing.
                New research, technologies, policies, discoveries
                and environmental challenges continue to reshape
                the way we understand and manage our oceans,
                rivers, lakes and coastal ecosystems.
            </p>

            <p>
                WASMaN's Knowledge Bites bring these developments
                closer to you through concise, accessible and
                practical knowledge resources.
            </p>

        </div>


        <div class="knowledge-highlights">

            <div class="highlight-item">
                <div class="highlight-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <strong>120+</strong>
                <span>Knowledge Bites</span>
            </div>

            <div class="highlight-item">
                <div class="highlight-icon">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <strong>50+</strong>
                <span>Research Resources</span>
            </div>

            <div class="highlight-item">
                <div class="highlight-icon">
                    <i class="fa-solid fa-wave-square"></i>
                </div>
                <strong>20+</strong>
                <span>Emerging Topics</span>
            </div>

            <div class="highlight-item">
                <div class="highlight-icon">
                    <i class="fa-solid fa-earth-africa"></i>
                </div>
                <strong>15</strong>
                <span>Countries Covered</span>
            </div>

        </div>

    </section>

    {{-- =========================================================
         LATEST KNOWLEDGE BITE — FISHERIES VALUE CHAIN SERIES
    ========================================================== --}}
    <section class="latest-knowledge-bite" id="latest-bite">
        <div class="content-container">
            <div class="latest-bite-heading">
                <span class="section-label">LATEST KNOWLEDGE BITE</span>
                <h2>Fisheries Value Chain Series</h2>
                <p>The newest release in WASMaN's five-part series, presented from the latest issue backwards.</p>
            </div>

            <article class="latest-bite-card">
                <div class="latest-bite-photo">
                    <img src="{{ asset('pics_vids/knowledge-bites/fisheries/part-5.webp') }}"
                         alt="Fisheries Value Chain Part 5">
                    <span class="latest-badge">
                        <i class="fa-solid fa-bolt"></i> Latest · Part 5
                    </span>
                </div>

                <div class="latest-bite-content">
                    <span class="current-bite-category">Fisheries &amp; Aquaculture · Part 5 of 5</span>
                    <h3>The Fisheries Sector: From Catch to Consumer — Part 5</h3>

                    <div class="latest-bite-meta">
                        <span><i class="fa-regular fa-calendar"></i> 21 September 2026</span>
                        <span><i class="fa-solid fa-fish"></i> Consumption &amp; Circular Opportunities</span>
                    </div>

                    <p>
                        The final part of the series explores responsible fish consumption and the safe
                        recovery of fish by-products. It highlights how a circular fisheries value chain
                        can reduce waste while creating opportunities from fish meal, fish oil, organic
                        fertilizer, leather, collagen and gelatin.
                    </p>

                    <div class="latest-bite-actions">
                        <a class="bite-read-button"
                           href="{{ route('knowledge-bites.read', 'cat-fisheries-value-chain-5') }}"
                           target="_blank" rel="noopener">
                            <i class="fa-regular fa-eye"></i> Read Knowledge Bite
                        </a>
                        <a class="bite-download-button"
                           href="{{ route('knowledge-bites.download', 'cat-fisheries-value-chain-5') }}">
                            <i class="fa-solid fa-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    {{-- =========================================================
         PREVIOUS KNOWLEDGE BITES — NEWEST TO OLDEST
    ========================================================== --}}
    <section class="previous-knowledge-bites" id="previous-bites">
        <div class="content-container">
            <div class="section-title previous-bites-heading">
                <span class="section-label">PREVIOUS KNOWLEDGE BITES</span>
                <h2>Exlore earlier Knowledge Bites</h2>
                <p>
                    Continue through the fisheries value chain series from Part 4 back to Part 1,
                    followed by the earlier Aquaculture and IUU Fishing Knowledge Bites.
                </p>
            </div>

            @php
                $fisheriesPreviousBites = [
                    [
                        'part' => 'Part 4 of 5',
                        'title' => 'The Fisheries Sector: From Catch to Consumer — Part 4',
                        'date' => '14 September 2026',
                        'topic' => 'Transport, Distribution & Marketing',
                        'slug' => 'cat-fisheries-value-chain-4',
                        'image' => 'pics_vids/knowledge-bites/fisheries/part-4.webp',
                        'summary' => 'Part 4 examines the phase that connects fish products to profitable markets, covering transport, distribution, cold-chain services, wholesale, retail and digital fish marketing.'
                    ],
                    [
                        'part' => 'Part 3 of 5',
                        'title' => 'The Fisheries Sector: From Catch to Consumer — Part 3',
                        'date' => '7 September 2026',
                        'topic' => 'Handling, Processing & Packaging',
                        'slug' => 'cat-fisheries-value-chain-3',
                        'image' => 'pics_vids/knowledge-bites/fisheries/part-3.webp',
                        'summary' => 'Part 3 focuses on handling, processing and packaging after harvest, showing how these activities preserve fish quality, improve food safety, reduce losses and create higher-value products.'
                    ],
                ];
            @endphp

            <div class="current-bites-grid">
                @foreach($fisheriesPreviousBites as $bite)
                    <article class="current-bite-card">
                        <div class="current-bite-photo">
                            <img src="{{ asset($bite['image']) }}"
                                 alt="{{ $bite['title'] }}" loading="lazy">
                        </div>
                        <div class="current-bite-body">
                            <span class="current-bite-category">Fisheries &amp; Aquaculture · {{ $bite['part'] }}</span>
                            <h3>{{ $bite['title'] }}</h3>
                            <div class="current-bite-date">
                                <i class="fa-regular fa-calendar"></i> {{ $bite['date'] }}
                            </div>
                            <p>{{ $bite['summary'] }}</p>
                            <div class="current-bite-actions">
                                <a class="bite-read-button"
                                   href="{{ route('knowledge-bites.read', $bite['slug']) }}"
                                   target="_blank" rel="noopener">
                                    <i class="fa-regular fa-eye"></i> Read Knowledge Bite
                                </a>
                                <a class="bite-download-button"
                                   href="{{ route('knowledge-bites.download', $bite['slug']) }}">
                                    <i class="fa-solid fa-download"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>


    {{-- KNOWLEDGE CATEGORIES --}}
    <section class="knowledge-categories" id="browse-knowledge">
        <div class="content-container">
            <div class="section-title">
                <span class="section-label">EXPLORE ALL KNOWLEDGE BITES</span>
                <h2>Browse Knowledge Areas</h2>
                <p>Select a category to jump directly to its resources, where every document can be read online or downloaded.</p>
            </div>
            <div class="knowledge-category-grid">
                <a href="#aquatic-conservation"><div class="category-icon"><i class="fa-solid fa-seedling"></i></div><strong>Aquatic Conservation</strong><small>5 knowledge bites</small></a>
                <a href="#ocean-governance"><div class="category-icon"><i class="fa-solid fa-scale-balanced"></i></div><strong>Ocean Governance</strong><small>2 knowledge bites</small></a>
                <a href="#blue-economy"><div class="category-icon"><i class="fa-solid fa-anchor"></i></div><strong>Blue Economy</strong><small>3 knowledge bites</small></a>
                <a href="#climate-change"><div class="category-icon"><i class="fa-solid fa-cloud-sun"></i></div><strong>Climate Change</strong><small>2 knowledge bites</small></a>
                <a href="#fisheries-aquaculture"><div class="category-icon"><i class="fa-solid fa-fish-fins"></i></div><strong>Fisheries &amp; Aquaculture</strong><small>7 knowledge bites</small></a>
            </div>
        </div>
    </section>

    {{-- CATEGORY RESOURCE LIBRARY --}}
    <section class="category-library" id="category-library">
        <div class="content-container">
            <div class="section-title">
                <span class="section-label">KNOWLEDGE BITE LIBRARY</span>
                <h2>Read and Download by Category</h2>
                <p>The documents below follow the folder categories supplied for the WASMaN Knowledge Bite library.</p>
            </div>

@php
$knowledgeCategories = [
    'aquatic-conservation' => ['title'=>'Aquatic Conservation','icon'=>'fa-seedling','files'=>[
        ['title'=>'Wetlands Conservation','slug'=>'cat-wetlands-conservation','file'=>'Monday Knowledge Bite_Wetlands Conservation.pdf'],
        ['title'=>'June Special Issue 1','slug'=>'cat-june-special-issue-1','file'=>'Monday Knowledge Bite_June Special Issue 1.pdf'],
        ['title'=>'June Special Issue 2','slug'=>'cat-june-special-issue-2','file'=>'Monday Knowledge Bite_June Special Issue 2.pdf'],
        ['title'=>'June Special Issue 3','slug'=>'cat-june-special-issue-3','file'=>'Monday Knowledge Bite_June Special Issue 3.pdf'],
        ['title'=>'Aquatic Biodiversity','slug'=>'cat-aquatic-biodiversity','file'=>'Monday Knowledge Bite_Aquatic Biodiversity.pdf'],
    ]],
    'ocean-governance' => ['title'=>'Ocean Governance','icon'=>'fa-scale-balanced','files'=>[
        ['title'=>'Marine Spatial Planning (MSP)','slug'=>'cat-msp','file'=>'Monday Knowledge Bite_MSP.pdf'],
        ['title'=>'Integrated/Inclusive Economic Zone (IEZ)','slug'=>'cat-iez','file'=>'Monday Knowledge Bite_IEZ.pdf'],
    ]],
    'blue-economy' => ['title'=>'Blue Economy','icon'=>'fa-anchor','folder'=>'Blue Economy_','files'=>[
        ['title'=>'Blue Economy Progress','slug'=>'cat-blue-economy-progress','file'=>'Monday Knowledge Bite_Blue Economy Progress.pdf'],
        ['title'=>'Blue Careers','slug'=>'cat-blue-careers','file'=>'Monday Knowledge Bites_Blue Careers.pdf'],
        ['title'=>'Blue Economy','slug'=>'cat-blue-economy','file'=>'Monday Knowledge Bite_Blue Economy.pdf'],
    ]],
    'climate-change' => ['title'=>'Climate Change','icon'=>'fa-cloud-sun','files'=>[
        ['title'=>'Coastal Erosion','slug'=>'cat-coastal-erosion','file'=>'Coastal Erosion.pdf'],
        ['title'=>'Climate Change','slug'=>'cat-climate-change','file'=>'Monday Knowledge Bite_Climate Change.pdf'],
    ]],
    'fisheries-aquaculture' => ['title'=>'Fisheries & Aquaculture','icon'=>'fa-fish-fins','files'=>[
        ['title'=>'IUU Fishing','slug'=>'cat-iuu-fishing','file'=>'Monday Knowledge Bite_IUU Fishing.pdf'],
        ['title'=>'Fisheries Value Chain – Part 1','slug'=>'cat-fisheries-value-chain-1','file'=>'Fisheries Value Chain Part 1.pdf'],
        ['title'=>'Fisheries Value Chain – Part 2','slug'=>'cat-fisheries-value-chain-2','file'=>'Fisheries Value Chain Part 2.pdf'],
        ['title'=>'Fisheries Value Chain – Part 3','slug'=>'cat-fisheries-value-chain-3','file'=>'Fisheries Value Chain Part 3.pdf'],
        ['title'=>'Fisheries Value Chain – Part 4','slug'=>'cat-fisheries-value-chain-4','file'=>'Fisheries Value Chain Part 4.pdf'],
        ['title'=>'Fisheries Value Chain – Part 5','slug'=>'cat-fisheries-value-chain-5','file'=>'Fisheries Value Chain Part 5.pdf'],
        ['title'=>'Aquaculture','slug'=>'cat-aquaculture','file'=>'Monday Knowledge Bite_Aquaculture.pdf'],
    ]],
];
@endphp

            @foreach($knowledgeCategories as $slug => $category)
                @php $folder = $category['folder'] ?? $category['title']; @endphp
                <section class="kb-category-section" id="{{ $slug }}">
                    <div class="kb-category-heading">
                        <div class="kb-category-heading-icon"><i class="fa-solid {{ $category['icon'] }}"></i></div>
                        <div><span>KNOWLEDGE AREA</span><h3>{{ $category['title'] }}</h3><p>{{ count($category['files']) }} resources available</p></div>
                        <a href="#browse-knowledge">Back to categories <i class="fa-solid fa-arrow-up"></i></a>
                    </div>
                    <div class="kb-document-grid">
                        @foreach($category['files'] as $document)
                            @php $documentSlug = $document['slug']; @endphp
                            <article class="kb-document-card">
                                <div class="kb-document-icon"><i class="fa-solid fa-file-pdf"></i></div>
                                <div class="kb-document-info"><span>WASMaN KNOWLEDGE BITE</span><h4>{{ $document['title'] }}</h4><p>{{ $category['title'] }}</p></div>
                                <div class="kb-document-actions">
                                    <a href="{{ route('knowledge-bites.read', $documentSlug) }}" target="_blank" rel="noopener" class="kb-read"><i class="fa-regular fa-eye"></i> Read</a>
                                    <a href="{{ route('knowledge-bites.download', $documentSlug) }}" class="kb-download"><i class="fa-solid fa-download"></i> Download</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endforeach
        </div>
    </section>

    {{-- RESOURCE HUB --}}
    <section class="resource-hub" id="resources">

        <div class="content-container">

            <div class="section-title">

                <span class="section-label">
                    RESOURCE HUB
                </span>

                <h2>
                    Knowledge You Can Download
                </h2>

                <p>
                    Download WASMaN Knowledge Bites for further reading,
                    research, learning and conservation awareness.
                </p>

            </div>

            <div class="resource-grid">

                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="resource-info">
                        <span>KNOWLEDGE BITE</span>
                        <h3>Wetlands: A Quietly Disappearing Flood Defence Asset</h3>
                        <p>Explore the importance of wetlands for flood defence, ecosystem resilience and conservation.</p>
                        <small>PDF • 6 July 2026</small>
                    </div>
                    <a href="{{ route('knowledge-bites.download', 'wetlands') }}"
                       class="resource-download">
                        Download PDF
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>

                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="resource-info">
                        <span>KNOWLEDGE BITE</span>
                        <h3>Smalltooth Sawfish</h3>
                        <p>Learn about the Smalltooth Sawfish and the conservation challenges facing this distinctive aquatic species.</p>
                        <small>PDF • 22 June 2026</small>
                    </div>
                    <a href="{{ route('knowledge-bites.download', 'smalltooth-sawfish') }}"
                       class="resource-download">
                        Download PDF
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>

                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="resource-info">
                        <span>KNOWLEDGE BITE</span>
                        <h3>Leatherback Sea Turtle</h3>
                        <p>Discover the Leatherback Sea Turtle and why protecting marine habitats is essential for its conservation.</p>
                        <small>PDF • 18 June 2026</small>
                    </div>
                    <a href="{{ route('knowledge-bites.download', 'leatherback-sea-turtle') }}"
                       class="resource-download">
                        Download PDF
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>

                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="resource-info">
                        <span>KNOWLEDGE BITE</span>
                        <h3>The Scalloped Hammerhead Shark</h3>
                        <p>Explore the ecology and conservation significance of the Scalloped Hammerhead Shark.</p>
                        <small>PDF • 1 June 2026</small>
                    </div>
                    <a href="{{ route('knowledge-bites.download', 'scalloped-hammerhead') }}"
                       class="resource-download">
                        Download PDF
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>

                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="resource-info">
                        <span>KNOWLEDGE BITE</span>
                        <h3>Aquatic Biodiversity Conservation: A Call to Collective Action</h3>
                        <p>Learn why collective action is vital for protecting aquatic biodiversity and sustaining healthy ecosystems.</p>
                        <small>PDF • 25 May 2026</small>
                    </div>
                    <a href="{{ route('knowledge-bites.download', 'aquatic-biodiversity') }}"
                       class="resource-download">
                        Download PDF
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>

            </div>

        </div>

    </section>


    {{-- TRENDING --}}
    <section class="trending-knowledge">

        <div class="trending-content">

            <span class="section-label dark-label">
                WHAT'S TRENDING?
            </span>

            <h2>
                Emerging Issues We Are Watching
            </h2>

            <p>
                Aquatic science is evolving rapidly. These are
                some of the emerging areas currently receiving
                attention from researchers, policymakers and
                conservation practitioners.
            </p>

        </div>


        <div class="trend-list">

            <div>
                <span>01</span>
                <h3>Ocean Climate Resilience</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>02</span>
                <h3>Blue Carbon Financing</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>03</span>
                <h3>Plastic Pollution Solutions</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>04</span>
                <h3>Digital Ocean Monitoring</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

            <div>
                <span>05</span>
                <h3>Nature-Based Coastal Protection</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

        </div>

    </section>


    {{-- CTA --}}
    <section class="knowledge-cta">

        <div class="knowledge-cta-inner">

            <span class="section-label dark-label">
                KEEP LEARNING
            </span>

            <h2>
                Stay Curious. Stay Informed.
            </h2>

            <p>
                Explore new ideas, emerging research and practical
                resources that can help you understand and contribute
                to a more sustainable aquatic future.
            </p>

            <a href="#resources">
                Explore Resource Hub
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </section>

</section>


<footer class="footer">

    <div class="footer-container">

        <div class="footer-column footer-brand">

            <div class="footer-brand-mark">
                <i class="fa-solid fa-water"></i>
            </div>

            <h2>WASMaN</h2>

            <p>
                Women in Aquatic Science and Management Network advances
                women's leadership, scientific excellence and collaboration
                for sustainable aquatic resource management.
            </p>

        </div>


        <div class="footer-column">

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


        <div class="footer-column">

            <h3>Focus Areas</h3>

            <ul class="focus-list">
                <li><i class="fa-solid fa-microscope"></i> Aquatic Science</li>
                <li><i class="fa-solid fa-water"></i> Marine Conservation</li>
                <li><i class="fa-solid fa-chart-line"></i> Blue Economy</li>
                <li><i class="fa-solid fa-cloud-sun"></i> Climate Resilience</li>
                <li><i class="fa-solid fa-droplet"></i> Water Conservation</li>
                <li><i class="fa-solid fa-user-tie"></i> Women's Leadership</li>
            </ul>

        </div>


        <div class="footer-column">

            <h3>Contact Us</h3>

            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <div>
                    <span>Email</span>
                    <a href="mailto:info@wasman.org">info@wasman.org</a>
                </div>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <span>Phone</span>
                    <p>+233 XX XXX XXXX</p>
                </div>
            </div>

            <div class="contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <span>Location</span>
                    <p>Cape Coast, Ghana</p>
                </div>
            </div>

        </div>

    </div>


    <div class="footer-divider"></div>


    <div class="footer-bottom">

        <p>
            © 2026 Women in Aquatic Science and Management Network (WASMaN).
            All Rights Reserved.
        </p>

        <div class="social-links">

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
<script src="{{ asset('created_js/animation.js') }}"></script>


</body>
</html>
