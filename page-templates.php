<?php
/**
 * Template Name: Templates Store
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'templates-page' ); ?>>

    <!-- ==============================
         NAV
    ============================== -->
    <nav class="nav" id="nav">
        <div class="nav-bar">
            <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="nav-tab">
                <i class="fa-solid fa-gift"></i>
                <span>Services</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/#portfolio' ) ); ?>" class="nav-tab">
                <i class="fa-solid fa-folder-open"></i>
                <span>Projects</span>
            </a>
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="nav-tab nav-tab--active-page">
                <i class="fa-solid fa-layer-group"></i>
                <span>Templates</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="nav-tab nav-tab--cta">
                <i class="fa-solid fa-calendar-check"></i>
                <span>Book a Call</span>
            </a>
            <button class="nav-tab nav-more-btn" id="navMoreBtn" aria-label="More">
                <i class="fa-solid fa-bars"></i>
                <span>More</span>
            </button>
        </div>
    </nav>

    <div class="dropup-overlay" id="dropupOverlay"></div>
    <div class="dropup-menu" id="dropupMenu" aria-hidden="true">
        <div class="dropup-handle"></div>
        <div class="dropup-inner">
            <div class="dropup-brand">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Images/Logo/SecretScalingBlack.png" alt="SecretScaling" class="dropup-logo-img">
                <p class="dropup-tagline">The AI system that grows your business.</p>
            </div>
            <nav class="dropup-links">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="dropup-link">
                    <span class="dropup-link-title">Home</span>
                    <span class="dropup-link-sub">Back to the main site</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="dropup-link">
                    <span class="dropup-link-title">Services</span>
                    <span class="dropup-link-sub">What we offer</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/#portfolio' ) ); ?>" class="dropup-link">
                    <span class="dropup-link-title">Our Work</span>
                    <span class="dropup-link-sub">Projects we've built</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/#process' ) ); ?>" class="dropup-link">
                    <span class="dropup-link-title">Process</span>
                    <span class="dropup-link-sub">How we work</span>
                </a>
                <a href="<?php echo esc_url( get_permalink() ); ?>" class="dropup-link">
                    <span class="dropup-link-title">Templates</span>
                    <span class="dropup-link-sub">Premium website templates</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="dropup-link">
                    <span class="dropup-link-title">Contact</span>
                    <span class="dropup-link-sub">Start your growth system</span>
                </a>
            </nav>
        </div>
    </div>

    <!-- ==============================
         HERO — asymmetric split
    ============================== -->
    <section class="tpl-hero">
        <div class="tpl-hero-bg">
            <div class="hero-light hero-light--corner"></div>
            <div class="hero-light hero-light--text"></div>
        </div>

        <div class="container tpl-hero-inner">

            <!-- Top: badge + headline + subtitle -->
            <div class="tpl-hero-top">
                <div class="tpl-hero-badge">
                    <span class="tpl-badge-dot"></span>
                    Premium Digital Products
                </div>
                <h1 class="tpl-hero-title">
                    Premium Website<br>Templates.
                </h1>
                <p class="tpl-hero-subtitle">
                    Launch a high-performance website in days, not months. Every template is engineered by SecretScaling — clean code, premium design, built for growth.
                </p>
            </div>

            <!-- Bottom: stats left, counter-statement right -->
            <div class="tpl-hero-bottom">
                <div class="tpl-hero-stats">
                    <div class="tpl-stat">
                        <span class="tpl-stat-number">6+</span>
                        <span class="tpl-stat-label">Templates</span>
                    </div>
                    <div class="tpl-stat-divider"></div>
                    <div class="tpl-stat">
                        <span class="tpl-stat-number">100%</span>
                        <span class="tpl-stat-label">Responsive</span>
                    </div>
                    <div class="tpl-stat-divider"></div>
                    <div class="tpl-stat">
                        <span class="tpl-stat-number">&#8734;</span>
                        <span class="tpl-stat-label">License Usage</span>
                    </div>
                </div>
                <p class="tpl-hero-counter">
                    Yours in days,<br><em>not months.</em>
                </p>
            </div>

        </div>
    </section>

    <!-- ==============================
         MARQUEE #1
    ============================== -->
    <div class="tpl-marquee" aria-hidden="true">
        <div class="tpl-marquee-track">
            <span class="tpl-marquee-item">Premium Templates <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Built to Convert <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">SecretScaling <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">6 Templates Live <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Fully Responsive <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Clean Code <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Lifetime License <span class="tpl-marquee-sep">&#9679;</span></span>
            <!-- duplicate for seamless loop -->
            <span class="tpl-marquee-item">Premium Templates <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Built to Convert <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">SecretScaling <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">6 Templates Live <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Fully Responsive <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Clean Code <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Lifetime License <span class="tpl-marquee-sep">&#9679;</span></span>
        </div>
    </div>

    <!-- ==============================
         FILTER BAR
    ============================== -->
    <section class="tpl-filter-section">
        <div class="container">
            <div class="tpl-filter-bar">
                <button class="tpl-filter-btn active" data-filter="all">All Templates</button>
                <button class="tpl-filter-btn" data-filter="landing-page">Landing Page</button>
                <button class="tpl-filter-btn" data-filter="saas">SaaS / Tech</button>
                <button class="tpl-filter-btn" data-filter="business">Business</button>
                <button class="tpl-filter-btn" data-filter="portfolio">Portfolio</button>
                <button class="tpl-filter-btn" data-filter="ecommerce">E-commerce</button>
            </div>
        </div>
    </section>

    <!-- ==============================
         TEMPLATES GRID
    ============================== -->
    <section class="tpl-grid-section">
        <div class="container">
            <div class="tpl-grid" id="tplGrid">

                <!-- Card 1: Apex -->
                <div class="tpl-card" data-category="landing-page">
                    <div class="tpl-card-preview">
                        <div class="tpl-browser-chrome">
                            <div class="tpl-browser-dots"><span></span><span></span><span></span></div>
                            <div class="tpl-browser-url">secretscaling.com/apex</div>
                        </div>
                        <div class="tpl-preview-screen tpl-preview--apex">
                            <div class="tpl-mock-header"></div>
                            <div class="tpl-mock-hero"></div>
                            <div class="tpl-mock-cards"><div></div><div></div><div></div></div>
                        </div>
                        <div class="tpl-card-badge tpl-badge--featured">Featured</div>
                    </div>
                    <div class="tpl-card-body">
                        <div class="tpl-card-meta">
                            <span class="tpl-card-tag">Landing Page</span>
                            <span class="tpl-card-num">01</span>
                        </div>
                        <h3 class="tpl-card-title">Apex</h3>
                        <p class="tpl-card-desc">A bold agency landing page built to command attention and convert visitors into clients from the first scroll.</p>
                        <div class="tpl-card-footer">
                            <div class="tpl-card-price">
                                <span class="tpl-price-original">$129</span>
                                <span class="tpl-price-current">$79</span>
                            </div>
                            <div class="tpl-card-actions">
                                <a href="#" class="tpl-btn-preview">Preview</a>
                                <!-- TODO: Replace # with your payment/Gumroad link -->
                                <a href="#" class="tpl-btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Nexus -->
                <div class="tpl-card" data-category="saas">
                    <div class="tpl-card-preview">
                        <div class="tpl-browser-chrome">
                            <div class="tpl-browser-dots"><span></span><span></span><span></span></div>
                            <div class="tpl-browser-url">secretscaling.com/nexus</div>
                        </div>
                        <div class="tpl-preview-screen tpl-preview--nexus">
                            <div class="tpl-mock-header"></div>
                            <div class="tpl-mock-hero"></div>
                            <div class="tpl-mock-cards"><div></div><div></div><div></div></div>
                        </div>
                        <div class="tpl-card-badge tpl-badge--popular">Popular</div>
                    </div>
                    <div class="tpl-card-body">
                        <div class="tpl-card-meta">
                            <span class="tpl-card-tag">SaaS / Tech</span>
                            <span class="tpl-card-num">02</span>
                        </div>
                        <h3 class="tpl-card-title">Nexus</h3>
                        <p class="tpl-card-desc">A sleek SaaS product page designed for tech companies that need to communicate value fast and drive signups.</p>
                        <div class="tpl-card-footer">
                            <div class="tpl-card-price">
                                <span class="tpl-price-original">$149</span>
                                <span class="tpl-price-current">$89</span>
                            </div>
                            <div class="tpl-card-actions">
                                <a href="#" class="tpl-btn-preview">Preview</a>
                                <!-- TODO: Replace # with your payment/Gumroad link -->
                                <a href="#" class="tpl-btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Solaris -->
                <div class="tpl-card" data-category="business">
                    <div class="tpl-card-preview">
                        <div class="tpl-browser-chrome">
                            <div class="tpl-browser-dots"><span></span><span></span><span></span></div>
                            <div class="tpl-browser-url">secretscaling.com/solaris</div>
                        </div>
                        <div class="tpl-preview-screen tpl-preview--solaris">
                            <div class="tpl-mock-header"></div>
                            <div class="tpl-mock-hero"></div>
                            <div class="tpl-mock-cards"><div></div><div></div><div></div></div>
                        </div>
                    </div>
                    <div class="tpl-card-body">
                        <div class="tpl-card-meta">
                            <span class="tpl-card-tag">Business</span>
                            <span class="tpl-card-num">03</span>
                        </div>
                        <h3 class="tpl-card-title">Solaris</h3>
                        <p class="tpl-card-desc">A professional consulting and business site template that projects authority, builds trust, and books more calls.</p>
                        <div class="tpl-card-footer">
                            <div class="tpl-card-price">
                                <span class="tpl-price-original">$109</span>
                                <span class="tpl-price-current">$69</span>
                            </div>
                            <div class="tpl-card-actions">
                                <a href="#" class="tpl-btn-preview">Preview</a>
                                <!-- TODO: Replace # with your payment/Gumroad link -->
                                <a href="#" class="tpl-btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Prism -->
                <div class="tpl-card" data-category="portfolio">
                    <div class="tpl-card-preview">
                        <div class="tpl-browser-chrome">
                            <div class="tpl-browser-dots"><span></span><span></span><span></span></div>
                            <div class="tpl-browser-url">secretscaling.com/prism</div>
                        </div>
                        <div class="tpl-preview-screen tpl-preview--prism">
                            <div class="tpl-mock-header"></div>
                            <div class="tpl-mock-hero"></div>
                            <div class="tpl-mock-cards"><div></div><div></div><div></div></div>
                        </div>
                    </div>
                    <div class="tpl-card-body">
                        <div class="tpl-card-meta">
                            <span class="tpl-card-tag">Portfolio</span>
                            <span class="tpl-card-num">04</span>
                        </div>
                        <h3 class="tpl-card-title">Prism</h3>
                        <p class="tpl-card-desc">A striking portfolio template for creatives and freelancers who want their work to speak louder than words.</p>
                        <div class="tpl-card-footer">
                            <div class="tpl-card-price">
                                <span class="tpl-price-original">$99</span>
                                <span class="tpl-price-current">$59</span>
                            </div>
                            <div class="tpl-card-actions">
                                <a href="#" class="tpl-btn-preview">Preview</a>
                                <!-- TODO: Replace # with your payment/Gumroad link -->
                                <a href="#" class="tpl-btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Orbit -->
                <div class="tpl-card" data-category="ecommerce">
                    <div class="tpl-card-preview">
                        <div class="tpl-browser-chrome">
                            <div class="tpl-browser-dots"><span></span><span></span><span></span></div>
                            <div class="tpl-browser-url">secretscaling.com/orbit</div>
                        </div>
                        <div class="tpl-preview-screen tpl-preview--orbit">
                            <div class="tpl-mock-header"></div>
                            <div class="tpl-mock-hero"></div>
                            <div class="tpl-mock-cards"><div></div><div></div><div></div></div>
                        </div>
                        <div class="tpl-card-badge tpl-badge--new">New</div>
                    </div>
                    <div class="tpl-card-body">
                        <div class="tpl-card-meta">
                            <span class="tpl-card-tag">E-commerce</span>
                            <span class="tpl-card-num">05</span>
                        </div>
                        <h3 class="tpl-card-title">Orbit</h3>
                        <p class="tpl-card-desc">A high-converting e-commerce template built around product storytelling, social proof, and frictionless checkout.</p>
                        <div class="tpl-card-footer">
                            <div class="tpl-card-price">
                                <span class="tpl-price-original">$159</span>
                                <span class="tpl-price-current">$99</span>
                            </div>
                            <div class="tpl-card-actions">
                                <a href="#" class="tpl-btn-preview">Preview</a>
                                <!-- TODO: Replace # with your payment/Gumroad link -->
                                <a href="#" class="tpl-btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Zephyr -->
                <div class="tpl-card" data-category="landing-page">
                    <div class="tpl-card-preview">
                        <div class="tpl-browser-chrome">
                            <div class="tpl-browser-dots"><span></span><span></span><span></span></div>
                            <div class="tpl-browser-url">secretscaling.com/zephyr</div>
                        </div>
                        <div class="tpl-preview-screen tpl-preview--zephyr">
                            <div class="tpl-mock-header"></div>
                            <div class="tpl-mock-hero"></div>
                            <div class="tpl-mock-cards"><div></div><div></div><div></div></div>
                        </div>
                    </div>
                    <div class="tpl-card-body">
                        <div class="tpl-card-meta">
                            <span class="tpl-card-tag">Landing Page</span>
                            <span class="tpl-card-num">06</span>
                        </div>
                        <h3 class="tpl-card-title">Zephyr</h3>
                        <p class="tpl-card-desc">A clean, minimal landing page template perfect for digital products, courses, and lead generation funnels.</p>
                        <div class="tpl-card-footer">
                            <div class="tpl-card-price">
                                <span class="tpl-price-original">$129</span>
                                <span class="tpl-price-current">$79</span>
                            </div>
                            <div class="tpl-card-actions">
                                <a href="#" class="tpl-btn-preview">Preview</a>
                                <!-- TODO: Replace # with your payment/Gumroad link -->
                                <a href="#" class="tpl-btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.tpl-grid -->
        </div>
    </section>

    <!-- ==============================
         MARQUEE #2
    ============================== -->
    <div class="tpl-marquee tpl-marquee--mid" aria-hidden="true">
        <div class="tpl-marquee-track tpl-marquee-track--reverse">
            <span class="tpl-marquee-item">Responsive Design <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Clean Commented Code <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Optimised Performance <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Lifetime License <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Priority Support <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Fast Load Times <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Built for Growth <span class="tpl-marquee-sep">&#9679;</span></span>
            <!-- duplicate -->
            <span class="tpl-marquee-item">Responsive Design <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Clean Commented Code <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Optimised Performance <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Lifetime License <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Priority Support <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Fast Load Times <span class="tpl-marquee-sep">&#9679;</span></span>
            <span class="tpl-marquee-item">Built for Growth <span class="tpl-marquee-sep">&#9679;</span></span>
        </div>
    </div>

    <!-- ==============================
         CTA
    ============================== -->
    <section class="tpl-cta">
        <div class="tpl-cta-glow"></div>
        <div class="container tpl-cta-content">
            <h2 class="tpl-cta-title">Need Something <span>Custom?</span></h2>
            <p class="tpl-cta-sub">Our templates are a starting point. If you need a fully bespoke website built to your exact growth strategy, let's talk.</p>
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn--orange btn--large">Book a Free Call</a>
        </div>
    </section>

    <?php wp_footer(); ?>

    <script>
    (function () {

        // ------ Dropup Menu ------
        var navMoreBtn    = document.getElementById('navMoreBtn');
        var dropupMenu    = document.getElementById('dropupMenu');
        var dropupOverlay = document.getElementById('dropupOverlay');

        if (navMoreBtn && dropupMenu && dropupOverlay) {
            navMoreBtn.addEventListener('click', function () {
                var isOpen = dropupMenu.classList.contains('is-open');
                dropupMenu.classList.toggle('is-open', !isOpen);
                dropupMenu.setAttribute('aria-hidden', String(isOpen));
                dropupOverlay.classList.toggle('is-visible', !isOpen);
            });
            dropupOverlay.addEventListener('click', function () {
                dropupMenu.classList.remove('is-open');
                dropupMenu.setAttribute('aria-hidden', 'true');
                dropupOverlay.classList.remove('is-visible');
            });
        }

        // ------ Card Reveal on Scroll ------
        var cards    = Array.from(document.querySelectorAll('.tpl-card'));
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var idx   = cards.indexOf(entry.target) % 3;
                    setTimeout(function () {
                        entry.target.classList.add('tpl-visible');
                    }, idx * 120);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        cards.forEach(function (card) { observer.observe(card); });

        // ------ Filter ------
        var filterBtns = document.querySelectorAll('.tpl-filter-btn');
        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                filterBtns.forEach(function (b) { b.classList.remove('active'); });
                btn.classList.add('active');
                var filter = btn.getAttribute('data-filter');
                cards.forEach(function (card) {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = '';
                        card.classList.add('tpl-visible');
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

    })();
    </script>

</body>
</html>
