<?php $t = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class('intro-active'); ?>>

    <div id="loader">
        <img src="<?php echo esc_url($t); ?>/Images/Logo/SecretScalingWhite.png" alt="SecretScaling" id="loader-logo">
        <div id="loader-bar-wrap">
            <div id="loader-bar"></div>
        </div>
    </div>

    <nav class="nav" id="nav">
        <div class="nav-bar">
            <a href="#services" class="nav-tab" data-section="services">
                <i class="fa-solid fa-gift"></i>
                <span>Services</span>
            </a>
            <a href="#portfolio" class="nav-tab" data-section="portfolio">
                <i class="fa-solid fa-folder-open"></i>
                <span>Projects</span>
            </a>
            <a href="#process" class="nav-tab" data-section="process">
                <i class="fa-solid fa-diagram-project"></i>
                <span>Our Process</span>
            </a>
            <a href="#contact" class="nav-tab nav-tab--cta" data-section="contact">
                <i class="fa-solid fa-calendar-check"></i>
                <span>Book a Call</span>
            </a>
            <button class="nav-tab nav-more-btn" id="navMoreBtn" aria-label="Meer">
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
                <img src="<?php echo get_template_directory_uri(); ?>/Images/Logo/SecretScalingBlack.png" alt="SecretScaling" class="dropup-logo-img">
                <p class="dropup-tagline">The AI system that grows your business.</p>
            </div>
            <nav class="dropup-links">
                <a href="#hero" class="dropup-link">
                    <span class="dropup-link-title">Home</span>
                    <span class="dropup-link-sub">Back to the top</span>
                </a>
                <a href="#services" class="dropup-link">
                    <span class="dropup-link-title">Services</span>
                    <span class="dropup-link-sub">What we offer</span>
                </a>
                <a href="#portfolio" class="dropup-link">
                    <span class="dropup-link-title">Our Work</span>
                    <span class="dropup-link-sub">Projects we've built</span>
                </a>
                <a href="#process" class="dropup-link">
                    <span class="dropup-link-title">Process</span>
                    <span class="dropup-link-sub">How we work</span>
                </a>
                <a href="#support" class="dropup-link">
                    <span class="dropup-link-title">Why Us</span>
                    <span class="dropup-link-sub">Our guarantee</span>
                </a>
                <a href="#about" class="dropup-link">
                    <span class="dropup-link-title">About Us</span>
                    <span class="dropup-link-sub">Who we are</span>
                </a>
                <a href="#contact" class="dropup-link">
                    <span class="dropup-link-title">Contact</span>
                    <span class="dropup-link-sub">Start your growth system</span>
                </a>
            </nav>
        </div>
    </div>

    <section class="hero" id="hero">
        <div class="hero-overlay"></div>
        <div class="hero-light hero-light--corner"></div>
        <div class="hero-light hero-light--text"></div>
        <div class="container hero-content">
            <div class="hero-logo">
                <img src="<?php echo esc_url($t); ?>/Images/Logo/SecretScalingWhite.png" alt="SecretScaling" class="hero-logo-img">
            </div>
            <h1 class="hero-title">
                <span class="hero-title-prefix">A growth system for businesses that helps you</span>
                <span class="hero-rotating-text">scale and grow in a controlled way</span>
            </h1>
            <p class="hero-subtitle">A predictable flow of new patients for your business. We build the systems that turn online attention into consultations.</p>
            <div class="hero-ctas">
                <a href="#contact" class="btn btn--orange">Request a Quote</a>
                <a href="#contact" class="btn btn--ghost">Book a Call</a>
            </div>
            <div class="hero-badges">
                <div class="badge">
                    <i class="fas fa-shield-halved"></i>
                    <span>60-Day Guarantee</span>
                </div>
                <div class="badge">
                    <i class="fas fa-fire"></i>
                    <span>10 Founding Spots</span>
                </div>
                <div class="badge">
                    <i class="fas fa-gears"></i>
                    <span>Done-For-You System</span>
                </div>
            </div>
        </div>
        <a href="#services" class="hero-scroll-hint" aria-label="Scroll down">
            <i class="fa-solid fa-chevron-down"></i>
        </a>
    </section>

    <section class="services" id="services">
        <div class="services-headline-wrap">
            <div class="services-headline">
                <span class="services-headline-word active">PRODUCTS</span>
                <span class="services-headline-word">SERVICES</span>
                <span class="services-headline-word">PROJECTS</span>
            </div>
        </div>
        <div class="services-hub-section">
            <div class="container">
                <p class="services-hub-subtitle">Each component strengthens the next — together they form one integrated system that grows your business.</p>
                <div class="services-hub-grid">

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-bullseye"></i></div>
                        <h3 class="service-card-name">CLIENT ACQUISITION</h3>
                        <p class="service-card-desc">The way clients experience your business begins long before the first consultation. By strategically improving every touchpoint in the customer journey, we create a stronger first impression, more trust, and a more consistent flow of quality consultations.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">META ADS</span>
                            <span class="service-tag">LEAD GENERATION</span>
                            <span class="service-tag">OFFER POSITIONING</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-star"></i></div>
                        <h3 class="service-card-name">BRAND POSITIONING</h3>
                        <p class="service-card-desc">Strong brand positioning ensures your business is not only visible, but remembered. By communicating your unique value more clearly, we create a consistent and credible impression that builds trust and attracts the right audience.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">BRAND STRATEGY</span>
                            <span class="service-tag">AUTHORITY BUILDING</span>
                            <span class="service-tag">POSITIONING</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-camera"></i></div>
                        <h3 class="service-card-name">SOCIAL MEDIA &amp; CONTENT</h3>
                        <p class="service-card-desc">By creating strategic content that fits the identity of your business, we not only increase visibility but also build trust and credibility — making social media a natural bridge between interest and consultation.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">INSTAGRAM CONTENT</span>
                            <span class="service-tag">CONTENT STRATEGY</span>
                            <span class="service-tag">POSTING SYSTEM</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-laptop-code"></i></div>
                        <h3 class="service-card-name">WEB DESIGN &amp; SEO</h3>
                        <p class="service-card-desc">Your website is the foundation of the online customer journey. We develop a fast, secure and strategically built website that strengthens brand identity, improves user experience and drives long-term online visibility and growth through SEO.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">SINGLE SCROLL SITE</span>
                            <span class="service-tag">LANDING PAGE</span>
                            <span class="service-tag">CONVERSION OPTIMISATION</span>
                        </div>
                    </div>

                    <div class="services-hub-center" aria-hidden="true">
                        <div class="hub-pulse"></div>
                        <div class="hub-pulse hub-pulse-2"></div>
                        <i class="fa-solid fa-rocket"></i>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-comments"></i></div>
                        <h3 class="service-card-name">LEAD FOLLOW-UP</h3>
                        <p class="service-card-desc">Much growth is lost in the phase between interest and decision. By strategically optimising the follow-up process, we ensure leads don't go cold, convert faster, and choose your business with more confidence.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">DM SCRIPTS</span>
                            <span class="service-tag">LEAD QUALIFICATION</span>
                            <span class="service-tag">FOLLOW-UP FLOWS</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-rectangle-ad"></i></div>
                        <h3 class="service-card-name">META ADS</h3>
                        <p class="service-card-desc">We strategically deploy Meta ads to create a predictable and stable flow of consultations. Through data-driven optimisation, we ensure controlled growth without unnecessary waste.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">CAMPAIGN SETUP</span>
                            <span class="service-tag">PIXEL TRACKING</span>
                            <span class="service-tag">OPTIMISATION</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-chart-line"></i></div>
                        <h3 class="service-card-name">GROWTH &amp; ANALYTICS</h3>
                        <p class="service-card-desc">We optimise every step of the customer journey — from first visibility to consultation and follow-up — so your business structurally attracts more quality clients and grows sustainably.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">MONTHLY REPORTING</span>
                            <span class="service-tag">STRATEGIE CALLS</span>
                            <span class="service-tag">GROWTH ROADMAP</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-square-poll-vertical"></i></div>
                        <h3 class="service-card-name">REPORTING</h3>
                        <p class="service-card-desc">With clear monthly reports, you get full insight into the performance of your marketing: campaign results, website traffic, consultation requests and growth insights. This way we act not just as an executor, but as a strategic partner in your growth.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">MONTHLY REPORT</span>
                            <span class="service-tag">ROI INSIGHT</span>
                            <span class="service-tag">PERFORMANCE OVERVIEW</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="transformations" id="transformations">
        <div class="container">
            <div class="section-header system-header" data-reveal>
                <h2>The <span>3 Growth Results</span> We Deliver</h2>
                <p>We help your business at every stage to optimise its online infrastructure — from visibility to a predictable flow of consultations.</p>
            </div>
            <div class="system-cards" data-reveal>
                <div class="system-card">
                    <div class="system-card-top">
                        <div class="system-icon system-icon--blue"><i class="fas fa-rotate"></i></div>
                        <div class="system-card-meta">
                            <span class="system-label">RESULT 01</span>
                            <span class="system-badge">Client Flow</span>
                        </div>
                    </div>
                    <h3>A Consistent Flow of Clients</h3>
                    <p>From Meta ads to a conversion-focused website, we build a structured system that guides visitors step by step towards a consultation — week after week.</p>
                    <ul class="system-checklist">
                        <li><i class="fas fa-check"></i> Structured conversion system</li>
                        <li><i class="fas fa-check"></i> Meta & Google ad campaigns</li>
                        <li><i class="fas fa-check"></i> Predictable weekly client flow</li>
                    </ul>
                </div>
                <div class="system-card">
                    <div class="system-card-top">
                        <div class="system-icon system-icon--orange"><i class="fas fa-medal"></i></div>
                        <div class="system-card-meta">
                            <span class="system-label">RESULT 02</span>
                            <span class="system-badge">Positioning</span>
                        </div>
                    </div>
                    <h3>A Unique Position in Your Region</h3>
                    <p>We position your business as the premium choice in your region. Through strong brand positioning, clients consciously choose you — without comparing prices first.</p>
                    <ul class="system-checklist">
                        <li><i class="fas fa-check"></i> Strong brand positioning</li>
                        <li><i class="fas fa-check"></i> Premium regional presence</li>
                        <li><i class="fas fa-check"></i> Value-based client attraction</li>
                    </ul>
                </div>
                <div class="system-card">
                    <div class="system-card-top">
                        <div class="system-icon system-icon--green"><i class="fas fa-gears"></i></div>
                        <div class="system-card-meta">
                            <span class="system-label">RESULT 03</span>
                            <span class="system-badge">Scale</span>
                        </div>
                    </div>
                    <h3>Scaling Without Overwhelm</h3>
                    <p>With smart systems, clear workflows and efficient lead follow-up, we create an infrastructure that grows with your business — without becoming unmanageable.</p>
                    <ul class="system-checklist">
                        <li><i class="fas fa-check"></i> Smart lead follow-up systems</li>
                        <li><i class="fas fa-check"></i> Clear growth workflows</li>
                        <li><i class="fas fa-check"></i> Scalable infrastructure</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="portfolio-header" data-reveal data-from="left">
                <span class="portfolio-label">OUR WORK</span>
                <h2 class="portfolio-title">Websites That <span>Convert</span></h2>
                <p class="portfolio-subtitle">Every site we build is designed with one goal: turning visitors into bookings.</p>
            </div>
        </div>

        <div class="portfolio-slider-wrap">
            <div class="portfolio-track" id="portfolioTrack">

                <!-- Slide 1 -->
                <div class="portfolio-slide">
                    <div class="container portfolio-slide-inner">
                        <div class="portfolio-browser">
                            <div class="portfolio-browser-bar">
                                <span class="browser-dot dot-red"></span>
                                <span class="browser-dot dot-yellow"></span>
                                <span class="browser-dot dot-green"></span>
                                <div class="browser-url">www.kliniekamsterdam.nl</div>
                            </div>
                            <div class="portfolio-browser-screen screen-1">
                                <video id="portfolioVideo" autoplay muted playsinline style="width:100%;height:100%;object-fit:cover;display:block;">
                                    <source src="<?php echo get_template_directory_uri(); ?>/Images/Videos/Website1.mp4" type="video/mp4">
                                </video>
                                <div class="video-progress"><div class="video-progress-fill" id="videoProgressFill"></div></div>
                            </div>
                        </div>
                        <div class="portfolio-slide-info">
                            <span class="portfolio-slide-num">01 / 05</span>
                            <span class="portfolio-category">COSMETIC BUSINESS</span>
                            <h3 class="portfolio-project-name">Kliniek Amsterdam</h3>
                            <p class="portfolio-project-desc">Full redesign of the business website with a conversion-focused structure. Within 60 days, the consultation booking rate increased by 180%.</p>
                            <div class="portfolio-slide-tags">
                                <span>Web Design</span>
                                <span>Conversion Optimisation</span>
                                <span>UX Strategy</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="portfolio-slide">
                    <div class="container portfolio-slide-inner">
                        <div class="portfolio-browser">
                            <div class="portfolio-browser-bar">
                                <span class="browser-dot dot-red"></span>
                                <span class="browser-dot dot-yellow"></span>
                                <span class="browser-dot dot-green"></span>
                                <div class="browser-url">www.medsparotterdam.nl</div>
                            </div>
                            <div class="portfolio-browser-screen screen-2">
                                <div class="mock-nav"></div>
                                <div class="mock-hero dark"></div>
                                <div class="mock-cards">
                                    <div class="mock-card"></div>
                                    <div class="mock-card"></div>
                                    <div class="mock-card"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-slide-info">
                            <span class="portfolio-slide-num">02 / 05</span>
                            <span class="portfolio-category">MED SPA</span>
                            <h3 class="portfolio-project-name">Med Spa Rotterdam</h3>
                            <p class="portfolio-project-desc">Premium positioning translated into a dark, luxurious web design. Average order value increased by 65% after the launch of the new site.</p>
                            <div class="portfolio-slide-tags">
                                <span>Luxury Branding</span>
                                <span>Landing Page</span>
                                <span>Brand Identity</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="portfolio-slide">
                    <div class="container portfolio-slide-inner">
                        <div class="portfolio-browser">
                            <div class="portfolio-browser-bar">
                                <span class="browser-dot dot-red"></span>
                                <span class="browser-dot dot-yellow"></span>
                                <span class="browser-dot dot-green"></span>
                                <div class="browser-url">www.beautyutrecht.nl</div>
                            </div>
                            <div class="portfolio-browser-screen screen-3">
                                <div class="mock-nav light"></div>
                                <div class="mock-hero light"></div>
                                <div class="mock-cards">
                                    <div class="mock-card"></div>
                                    <div class="mock-card"></div>
                                    <div class="mock-card"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-slide-info">
                            <span class="portfolio-slide-num">03 / 05</span>
                            <span class="portfolio-category">BEAUTY SALON</span>
                            <h3 class="portfolio-project-name">Beautycenter Utrecht</h3>
                            <p class="portfolio-project-desc">Light, inviting website reflecting the salon's premium experience. Online bookings increased by 240% in the first quarter.</p>
                            <div class="portfolio-slide-tags">
                                <span>Clean Design</span>
                                <span>Booking System</span>
                                <span>Mobile First</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="portfolio-slide">
                    <div class="container portfolio-slide-inner">
                        <div class="portfolio-browser">
                            <div class="portfolio-browser-bar">
                                <span class="browser-dot dot-red"></span>
                                <span class="browser-dot dot-yellow"></span>
                                <span class="browser-dot dot-green"></span>
                                <div class="browser-url">www.laserkliniekdenhaag.nl</div>
                            </div>
                            <div class="portfolio-browser-screen screen-4">
                                <div class="mock-nav"></div>
                                <div class="mock-hero"></div>
                                <div class="mock-cards">
                                    <div class="mock-card"></div>
                                    <div class="mock-card"></div>
                                    <div class="mock-card"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-slide-info">
                            <span class="portfolio-slide-num">04 / 05</span>
                            <span class="portfolio-category">LASER TREATMENT</span>
                            <h3 class="portfolio-project-name">Laser Kliniek Den Haag</h3>
                            <p class="portfolio-project-desc">Trust and expertise at the centre of a medically responsible design. The business reported a doubling of new patients within 90 days.</p>
                            <div class="portfolio-slide-tags">
                                <span>Medical Design</span>
                                <span>Trust Building</span>
                                <span>SEO Structure</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="portfolio-slide">
                    <div class="container portfolio-slide-inner">
                        <div class="portfolio-browser">
                            <div class="portfolio-browser-bar">
                                <span class="browser-dot dot-red"></span>
                                <span class="browser-dot dot-yellow"></span>
                                <span class="browser-dot dot-green"></span>
                                <div class="browser-url">www.estheticsantwerp.be</div>
                            </div>
                            <div class="portfolio-browser-screen screen-5">
                                <div class="mock-nav dark"></div>
                                <div class="mock-hero dark"></div>
                                <div class="mock-cards">
                                    <div class="mock-card"></div>
                                    <div class="mock-card"></div>
                                    <div class="mock-card"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-slide-info">
                            <span class="portfolio-slide-num">05 / 05</span>
                            <span class="portfolio-category">AESTHETIC PRACTICE</span>
                            <h3 class="portfolio-project-name">Esthetics Antwerp</h3>
                            <p class="portfolio-project-desc">Belgian aesthetic practice positioned as a premium brand in the Antwerp market. Lead costs decreased by 55% through a targeted funnel strategy.</p>
                            <div class="portfolio-slide-tags">
                                <span>Funnel Design</span>
                                <span>Belgian Market</span>
                                <span>Premium Positioning</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.portfolio-track -->
        </div><!-- /.portfolio-slider-wrap -->

        <div class="portfolio-controls">
            <button class="portfolio-arrow portfolio-prev" id="portfolioPrev" aria-label="Previous project">
                <i class="fas fa-arrow-left"></i>
            </button>
            <div class="portfolio-dots" id="portfolioDots">
                <button class="portfolio-dot active" data-index="0"></button>
                <button class="portfolio-dot" data-index="1"></button>
                <button class="portfolio-dot" data-index="2"></button>
                <button class="portfolio-dot" data-index="3"></button>
                <button class="portfolio-dot" data-index="4"></button>
            </div>
            <button class="portfolio-arrow portfolio-next" id="portfolioNext" aria-label="Next project">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </section>

    <section class="process-section" id="process">
        <div class="process-sticky">
            <div class="process-header">
                <span class="process-label">How We Work</span>
                <h2>Our <span>Process</span></h2>
            </div>
            <div class="process-track-wrapper">
                <div class="process-track">
                    <div class="process-connector-line"></div>
                    <div class="process-connector-glow"></div>

                    <div class="process-step">
                        <div class="process-step-number">01</div>
                        <div class="process-step-icon"><i class="fas fa-magnifying-glass-chart"></i></div>
                        <div class="process-step-content">
                            <h3>Intake & Analysis</h3>
                            <p>We analyse your business, target audience and competitors to determine the right strategy and positioning.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">02</div>
                        <div class="process-step-icon"><i class="fas fa-bullseye"></i></div>
                        <div class="process-step-content">
                            <h3>Strategy & Positioning</h3>
                            <p>We build your unique market position and lay the foundation for a predictable growth system.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">03</div>
                        <div class="process-step-icon"><i class="fas fa-rocket"></i></div>
                        <div class="process-step-content">
                            <h3>Launch & Campaigns</h3>
                            <p>We launch your ads, landing page and lead generation system ready for the first consultations.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">04</div>
                        <div class="process-step-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="process-step-content">
                            <h3>Optimisation & Results</h3>
                            <p>We continuously monitor and optimise to generate an ever-increasing number of high-quality consultations.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">05</div>
                        <div class="process-step-icon"><i class="fas fa-arrow-trend-up"></i></div>
                        <div class="process-step-content">
                            <h3>Growth & Scaling</h3>
                            <p>We scale what works and build a predictable flow of consultations for the long term.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="process-footer">
                <div class="process-progress-wrap">
                    <div class="process-progress-bar"></div>
                </div>
                <div class="process-counter">
                    <span class="process-counter-current">01</span>
                    <span class="process-counter-sep">/</span>
                    <span class="process-counter-total">05</span>
                </div>
            </div>
        </div>
    </section>

    <section class="support" id="support">
        <div class="container">
            <div class="support-grid" data-reveal>
                <div class="support-item">
                    <div class="support-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Response Within 5 Minutes</h3>
                    <p>We respond to all client enquiries within 5 minutes, 8am–9pm. You never wait on us.</p>
                </div>
                <div class="support-item">
                    <div class="support-icon">
                        <i class="fas fa-circle-check"></i>
                    </div>
                    <h3>Done-For-You Execution</h3>
                    <p>We handle strategy, ads, content, funnels and reporting. You focus on your business.</p>
                </div>
                <div class="support-item">
                    <div class="support-icon">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3>60-Day Results Guarantee</h3>
                    <p>If we don't generate qualified consultation opportunities within 60 days, we work for free until we do.</p>
                </div>
            </div>
            <div style="text-align:center; margin-top: 48px;" data-reveal>
                <a href="#contact" class="btn btn--orange">Book a Free Call</a>
            </div>
        </div>
    </section>

    <section class="about-combined" id="about">
        <div class="container">
            <div class="about-combined-grid" data-reveal>
                <!-- Left: Agency intro -->
                <div class="about-combined-left">
                    <span class="about-badge">About Our Agency</span>
                    <h2>A <span>Growth System</span><br>Built For Businesses</h2>
                    <p>Our goal is clear: connecting businesses with clients who are actively looking for their expertise and solutions.</p>
                    <p>SecretScaling builds digital growth systems for businesses that depend on a constant flow of clients. We develop an online infrastructure where visibility, trust and client flow come together — resulting in a system that helps you grow in a predictable and sustainable way.</p>
                </div>
                <!-- Right: Who this is for — icon cards -->
                <div class="about-combined-right">
                    <div class="about-icon-card">
                        <div class="about-icon-wrap about-icon-wrap--blue">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="about-icon-body">
                            <h3>Attract More Clients</h3>
                            <p>Your marketing must lead to a stable flow of new clients. We build systems that turn online attention into consultations — week after week.</p>
                        </div>
                    </div>
                    <div class="about-icon-card">
                        <div class="about-icon-wrap about-icon-wrap--purple">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="about-icon-body">
                            <h3>Stronger Positioning</h3>
                            <p>Your business must be clearly differentiated from competitors. Clients should consciously choose your business — not because you're the cheapest.</p>
                        </div>
                    </div>
                    <div class="about-icon-card">
                        <div class="about-icon-wrap about-icon-wrap--green">
                            <i class="fas fa-arrow-trend-up"></i>
                        </div>
                        <div class="about-icon-body">
                            <h3>Scale Without Overwhelm</h3>
                            <p>Your marketing must keep working as your business grows. Smart workflows and efficient systems create an infrastructure that scales with you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



        <section class="story" id="story">
        <div class="container">
            <div class="section-header system-header" data-reveal>
                <h2>Our <span>System</span></h2>
                <p>Many businesses invest in marketing but don't see a consistent flow of clients. Not because there isn't enough attention — but because the steps between visibility and client often don't connect. That's why we build one structured system where everything works together.</p>
            </div>
            <div class="system-cards" data-reveal>
                <div class="system-card">
                    <div class="system-card-top">
                        <div class="system-icon system-icon--blue"><i class="fas fa-eye"></i></div>
                        <div class="system-card-meta">
                            <span class="system-label">STEP 01</span>
                            <span class="system-badge">Visibility</span>
                        </div>
                    </div>
                    <h3>Get Found Online</h3>
                    <p>We position your business in front of the right audience through SEO, strategic ads, and targeted content.</p>
                    <ul class="system-checklist">
                        <li><i class="fas fa-check"></i> Search engine optimisation</li>
                        <li><i class="fas fa-check"></i> Meta & Google advertising</li>
                        <li><i class="fas fa-check"></i> Content strategy</li>
                    </ul>
                </div>
                <div class="system-card">
                    <div class="system-card-top">
                        <div class="system-icon system-icon--purple"><i class="fas fa-globe"></i></div>
                        <div class="system-card-meta">
                            <span class="system-label">STEP 02</span>
                            <span class="system-badge">Website</span>
                        </div>
                    </div>
                    <h3>Convert Visitors</h3>
                    <p>Your website acts as a 24/7 sales tool — fast, professional, and built to turn interest into consultation requests.</p>
                    <ul class="system-checklist">
                        <li><i class="fas fa-check"></i> Conversion-optimised design</li>
                        <li><i class="fas fa-check"></i> Trust-building structure</li>
                        <li><i class="fas fa-check"></i> Mobile & speed optimised</li>
                    </ul>
                </div>
                <div class="system-card">
                    <div class="system-card-top">
                        <div class="system-icon system-icon--green"><i class="fas fa-filter"></i></div>
                        <div class="system-card-meta">
                            <span class="system-label">STEP 03</span>
                            <span class="system-badge">Lead Flow</span>
                        </div>
                    </div>
                    <h3>Capture & Follow Up</h3>
                    <p>We optimise every touchpoint so leads don't go cold — turning interest into scheduled consultations.</p>
                    <ul class="system-checklist">
                        <li><i class="fas fa-check"></i> Automated lead follow-up</li>
                        <li><i class="fas fa-check"></i> CRM integration</li>
                        <li><i class="fas fa-check"></i> Retargeting sequences</li>
                    </ul>
                </div>
                <div class="system-card">
                    <div class="system-card-top">
                        <div class="system-icon system-icon--orange"><i class="fas fa-calendar-check"></i></div>
                        <div class="system-card-meta">
                            <span class="system-label">STEP 04</span>
                            <span class="system-badge">Growth</span>
                        </div>
                    </div>
                    <h3>Scale Predictably</h3>
                    <p>With clear data and continuous optimisation, we scale what works and build a reliable engine for long-term growth.</p>
                    <ul class="system-checklist">
                        <li><i class="fas fa-check"></i> Monthly reporting</li>
                        <li><i class="fas fa-check"></i> Data-driven optimisation</li>
                        <li><i class="fas fa-check"></i> Growth roadmap</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="showcase" id="showcase">
        <div class="container">
            <div class="section-header system-header" data-reveal>
                <h2>Works With The <span>Tools You Already Use</span></h2>
                <p>Our system integrates seamlessly with your existing platforms — strengthening your online infrastructure without starting from scratch.</p>
            </div>
            <div class="tools-grid" data-reveal>
                <div class="tool-card">
                    <div class="tool-icon tool-icon--shopify">
                        <i class="fa-brands fa-shopify"></i>
                    </div>
                    <h3>Shopify</h3>
                    <p>E-commerce integration for businesses selling products or booking services online.</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon tool-icon--wordpress">
                        <i class="fa-brands fa-wordpress"></i>
                    </div>
                    <h3>WordPress</h3>
                    <p>Custom business websites built on WordPress — fast, secure, and easy to manage.</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon tool-icon--google">
                        <i class="fa-brands fa-google"></i>
                    </div>
                    <h3>Google Ads</h3>
                    <p>Targeted paid search campaigns that put your business in front of high-intent clients.</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon tool-icon--seo">
                        <i class="fas fa-magnifying-glass"></i>
                    </div>
                    <h3>Google SEO</h3>
                    <p>Long-term organic visibility that drives consistent traffic without ongoing ad spend.</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon tool-icon--meta">
                        <i class="fa-brands fa-meta"></i>
                    </div>
                    <h3>Meta Ads</h3>
                    <p>Data-driven Facebook & Instagram campaigns that generate a predictable flow of consultations.</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon tool-icon--tiktok">
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                    <h3>TikTok Ads</h3>
                    <p>Short-form video ads that build brand awareness and reach a younger, high-growth audience.</p>
                </div>
            </div>
        </div>
    </section>



        <section class="contact" id="contact">
        <div class="container">
            <div class="section-header" data-reveal>
                <h2>Book Your <span>Free Strategy Call</span></h2>
                <p>Tell us about your business and we'll show you exactly how we'll fill your consultation schedule in the next 60 days.</p>
            </div>
            <div class="contact-form" data-reveal>
                <?php echo do_shortcode('[contact-form-7 id="23ca267" title="Book A Call"]'); ?>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-brand">
                    <a href="#hero" class="footer-logo-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/Logo/SecretScalingWhite.png" alt="SecretScaling" class="footer-logo-img">
                    </a>
                    <p>An AI marketing agency that helps businesses and med spas get predictably fully booked through intelligent, data-driven client acquisition systems.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Contact Details</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Netherlands, Purmerend, 1448GJ</li>
                        <li><i class="fas fa-phone"></i> +31 6 28803732</li>
                        <li><i class="fas fa-envelope"></i> secretscaling@gmail.com</li>
                        <li><i class="fas fa-clock"></i> Mon - Fri: 8am – 9pm</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Important Links</h4>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 SecretScaling. All rights reserved.</p>
                <div class="footer-bottom-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <button id="scroll-top-btn" aria-label="Back to top">
        <i class="fa-solid fa-shuttle-space"></i>
    </button>

  <script>
    (function () {
      window.addEventListener('load', function () {
        var loader = document.getElementById('loader');

        // Step 1 — after logo holds (2.3s), start fading loader out
        setTimeout(function () {
          loader.classList.add('loader-fade-out');
        }, 2300);

        // Step 2 — once loader is gone, remove intro-active → hero/nav animate in
        setTimeout(function () {
          loader.style.display = 'none';
          document.body.classList.remove('intro-active');
        }, 2900); // 2.3s + 0.6s fade duration
      });
    })();
  </script>

<?php wp_footer(); ?>
</body>
</html>
