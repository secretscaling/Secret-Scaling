<?php $t = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<?php wp_head(); ?>
    <style>
        #lang-switcher {
            display: inline-flex;
            align-items: center;
            background: rgba(17, 29, 53, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(91, 141, 239, 0.25);
            border-radius: 100px;
            padding: 4px;
            gap: 2px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            margin-bottom: 24px;
        }
        .lang-btn {
            background: transparent;
            border: none;
            color: rgba(255,255,255,0.45);
            font-family: 'Montserrat', sans-serif;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            padding: 6px 14px;
            border-radius: 100px;
            cursor: pointer;
            transition: all 0.25s ease;
        }
        .lang-btn:hover { color: rgba(255,255,255,0.8); }
        .lang-btn.active {
            background: #E8734A;
            color: #ffffff;
            box-shadow: 0 2px 10px rgba(232,115,74,0.4);
        }
        .goog-te-banner-frame,
        .skiptranslate { display: none !important; }
        body { top: 0 !important; }
    </style>
</head>
<body <?php body_class('intro-active'); ?>>

    <div id="loader">
        <img src="<?php echo esc_url($t); ?>/Images/Logo/SecretScalingWhite.png" alt="SecretScaling" id="loader-logo">
        <div id="loader-bar-wrap">
            <div id="loader-bar"></div>
        </div>
    </div>

    <div id="google_translate_element" style="position:absolute;visibility:hidden;width:0;height:0;overflow:hidden;"></div>

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
                <p class="dropup-tagline">Het AI-systeem dat uw kliniek laat groeien.</p>
            </div>
            <nav class="dropup-links">
                <a href="#hero" class="dropup-link">
                    <span class="dropup-link-title">Home</span>
                    <span class="dropup-link-sub">Terug naar het begin</span>
                </a>
                <a href="#process" class="dropup-link">
                    <span class="dropup-link-title">Proces</span>
                    <span class="dropup-link-sub">Hoe wij werken</span>
                </a>
                <a href="#about" class="dropup-link">
                    <span class="dropup-link-title">Over Ons</span>
                    <span class="dropup-link-sub">Wie wij zijn</span>
                </a>
                <a href="#contact" class="dropup-link">
                    <span class="dropup-link-title">Contact</span>
                    <span class="dropup-link-sub">Start uw groeisysteem</span>
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
            <div id="lang-switcher" class="notranslate">
                <button class="lang-btn active" id="btn-nl" onclick="switchLang('nl')">NL</button>
                <button class="lang-btn" id="btn-en" onclick="switchLang('en')">EN</button>
            </div>
            <h1 class="hero-title">
                <span class="hero-title-prefix">Een groeisysteem voor klinieken dat helpt om</span>
                <span class="hero-rotating-text notranslate" translate="no">schalen en gecontroleerd te groeien</span>
            </h1>
            <p class="hero-subtitle">Een voorspelbare instroom van nieuwe patiënten voor uw kliniek. Wij bouwen de systemen die online aandacht omzetten in consultaties.</p>
            <div class="hero-ctas">
                <a href="#contact" class="btn btn--orange">Vraag een Offerte</a>
                <a href="#contact" class="btn btn--ghost">Plan een Gesprek</a>
            </div>
            <div class="hero-badges">
                <div class="badge">
                    <i class="fas fa-shield-halved"></i>
                    <span>60-Dagen Garantie</span>
                </div>
                <div class="badge">
                    <i class="fas fa-fire"></i>
                    <span>10 Founding Plekken</span>
                </div>
                <div class="badge">
                    <i class="fas fa-gears"></i>
                    <span>Done-For-You Systeem</span>
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
                <span class="services-headline-word active">PRODUCTEN</span>
                <span class="services-headline-word">SERVICES</span>
                <span class="services-headline-word">PROJECTEN</span>
            </div>
        </div>
        <div class="services-hub-section">
            <div class="container">
                <p class="services-hub-subtitle">Elk onderdeel versterkt het volgende — samen vormen ze één geïntegreerd systeem dat uw kliniek laat groeien.</p>
                <div class="services-hub-grid">

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-bullseye"></i></div>
                        <h3 class="service-card-name">KLANTENWERVING</h3>
                        <p class="service-card-desc">De manier waarop klanten jouw kliniek ervaren begint lang vóór het eerste consult. Door alle contactmomenten binnen de klantreis strategisch te verbeteren, zorgen we voor een sterkere eerste indruk, meer vertrouwen en een stabielere instroom van kwalitatieve consultaties.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">META ADVERTENTIES</span>
                            <span class="service-tag">LEADGENERATIE</span>
                            <span class="service-tag">AANBODPOSITIONERING</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-star"></i></div>
                        <h3 class="service-card-name">MERKPOSITIONERING</h3>
                        <p class="service-card-desc">Een sterke merkpositionering zorgt ervoor dat jouw kliniek niet alleen zichtbaar is, maar ook onthouden wordt. Door jouw unieke waarde duidelijker te positioneren, creëren we een consistente en geloofwaardige indruk die vertrouwen opbouwt en de juiste doelgroep aantrekt.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">MERKSTRATEGIE</span>
                            <span class="service-tag">AUTORITEITSOPBOUW</span>
                            <span class="service-tag">POSITIONERING</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-camera"></i></div>
                        <h3 class="service-card-name">SOCIAL MEDIA &amp; CONTENT</h3>
                        <p class="service-card-desc">Door strategische content te creëren die past bij de identiteit van jouw kliniek, vergroten we niet alleen de zichtbaarheid, maar bouwen we ook vertrouwen en geloofwaardigheid op — waardoor social media een natuurlijke brug wordt tussen interesse en consultatie.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">INSTAGRAM CONTENT</span>
                            <span class="service-tag">CONTENTSTRATEGIE</span>
                            <span class="service-tag">POSTING SYSTEEM</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-laptop-code"></i></div>
                        <h3 class="service-card-name">WEB DESIGN &amp; SEO</h3>
                        <p class="service-card-desc">Jouw website vormt het fundament van de online klantreis. We ontwikkelen een snelle, veilige en strategisch opgebouwde website die de merkidentiteit versterkt, de gebruikerservaring verbetert en via SEO zorgt voor langdurige online zichtbaarheid en groei.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">SINGLE SCROLL SITE</span>
                            <span class="service-tag">LANDINGSPAGINA</span>
                            <span class="service-tag">CONVERSIEOPTIMALISATIE</span>
                        </div>
                    </div>

                    <div class="services-hub-center" aria-hidden="true">
                        <div class="hub-pulse"></div>
                        <div class="hub-pulse hub-pulse-2"></div>
                        <i class="fa-solid fa-rocket"></i>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-comments"></i></div>
                        <h3 class="service-card-name">LEADOPVOLGING</h3>
                        <p class="service-card-desc">Veel groei gaat verloren in de fase tussen interesse en beslissing. Door het opvolgproces strategisch te optimaliseren zorgen we dat leads niet verwateren, sneller converteren en met meer vertrouwen kiezen voor jouw kliniek.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">DM SCRIPTS</span>
                            <span class="service-tag">LEAD KWALIFICATIE</span>
                            <span class="service-tag">FOLLOW-UP FLOWS</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-rectangle-ad"></i></div>
                        <h3 class="service-card-name">META ADVERTENTIES</h3>
                        <p class="service-card-desc">We zetten Meta advertenties strategisch in om een voorspelbare en stabiele instroom van consultaties te creëren. Door data-gedreven optimalisatie zorgen we voor gecontroleerde groei zonder onnodige verspilling.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">CAMPAGNE OPZET</span>
                            <span class="service-tag">PIXEL TRACKING</span>
                            <span class="service-tag">OPTIMALISATIE</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-chart-line"></i></div>
                        <h3 class="service-card-name">GROEI &amp; ANALYSE</h3>
                        <p class="service-card-desc">We optimaliseren elke stap van de klantreis — van eerste zichtbaarheid tot consultatie en opvolging — zodat jouw kliniek structureel meer kwalitatieve klanten aantrekt en duurzaam groeit.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">MAANDRAPPORTAGE</span>
                            <span class="service-tag">STRATEGIE CALLS</span>
                            <span class="service-tag">GROEIROADMAP</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-card-icon-wrap"><i class="fa-solid fa-square-poll-vertical"></i></div>
                        <h3 class="service-card-name">RAPPORTAGE</h3>
                        <p class="service-card-desc">Met duidelijke maandelijkse rapporten krijg je volledig inzicht in de prestaties van jouw marketing: campagneresultaten, websiteverkeer, consultatie-aanvragen en groei-inzichten. Zo werken we niet alleen als uitvoerder, maar als strategische partner in jouw groei.</p>
                        <div class="service-card-tags">
                            <span class="service-tag">MAANDELIJKS RAPPORT</span>
                            <span class="service-tag">ROI INZICHT</span>
                            <span class="service-tag">PRESTATIE OVERZICHT</span>
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
                <p>We help your clinic at every stage to optimise its online infrastructure — from visibility to a predictable flow of consultations.</p>
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
                    <p>We position your clinic as the premium choice in your region. Through strong brand positioning, clients consciously choose you — without comparing prices first.</p>
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
                    <p>With smart systems, clear workflows and efficient lead follow-up, we create an infrastructure that grows with your clinic — without becoming unmanageable.</p>
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
                <span class="portfolio-label">ONS WERK</span>
                <h2 class="portfolio-title">Websites Die <span>Converteren</span></h2>
                <p class="portfolio-subtitle">Elke site die wij bouwen is ontworpen met één doel: bezoekers omzetten in boekingen.</p>
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
                            <span class="portfolio-slide-num">01 / 05</span>
                            <span class="portfolio-category">COSMETISCHE KLINIEK</span>
                            <h3 class="portfolio-project-name">Kliniek Amsterdam</h3>
                            <p class="portfolio-project-desc">Volledig herontwerp van de kliniekwebsite met een conversiegerichte structuur. Binnen 60 dagen steeg het consultatieboekingspercentage met 180%.</p>
                            <div class="portfolio-slide-tags">
                                <span>Web Design</span>
                                <span>Conversieoptimalisatie</span>
                                <span>UX Strategie</span>
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
                            <p class="portfolio-project-desc">Premiumpositionering vertaald naar een donker, luxueus webdesign. Gemiddelde orderwaarde steeg met 65% na lancering van de nieuwe site.</p>
                            <div class="portfolio-slide-tags">
                                <span>Luxe Branding</span>
                                <span>Landingspagina</span>
                                <span>Merkidentiteit</span>
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
                            <span class="portfolio-category">SCHOONHEIDSSALON</span>
                            <h3 class="portfolio-project-name">Beautycenter Utrecht</h3>
                            <p class="portfolio-project-desc">Lichte, uitnodigende website die de premium ervaring van de salon weerspiegelt. Online boekingen stegen met 240% in het eerste kwartaal.</p>
                            <div class="portfolio-slide-tags">
                                <span>Clean Design</span>
                                <span>Boekingssysteem</span>
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
                            <span class="portfolio-category">LASERBEHANDELING</span>
                            <h3 class="portfolio-project-name">Laser Kliniek Den Haag</h3>
                            <p class="portfolio-project-desc">Vertrouwen en expertise centraal in een medisch verantwoord ontwerp. De kliniek rapporteerde een verdubbeling van nieuwe patiënten binnen 90 dagen.</p>
                            <div class="portfolio-slide-tags">
                                <span>Medisch Design</span>
                                <span>Vertrouwensopbouw</span>
                                <span>SEO Structuur</span>
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
                            <span class="portfolio-category">ESTHETISCHE PRAKTIJK</span>
                            <h3 class="portfolio-project-name">Esthetics Antwerp</h3>
                            <p class="portfolio-project-desc">Belgische esthetische praktijk gepositioneerd als premium merk in de Antwerpse markt. Leadkosten daalden met 55% dankzij gerichte funnelstrategie.</p>
                            <div class="portfolio-slide-tags">
                                <span>Funnel Design</span>
                                <span>Belgische Markt</span>
                                <span>Premium Positionering</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.portfolio-track -->
        </div><!-- /.portfolio-slider-wrap -->

        <div class="portfolio-controls">
            <button class="portfolio-arrow portfolio-prev" id="portfolioPrev" aria-label="Vorige project">
                <i class="fas fa-arrow-left"></i>
            </button>
            <div class="portfolio-dots" id="portfolioDots">
                <button class="portfolio-dot active" data-index="0"></button>
                <button class="portfolio-dot" data-index="1"></button>
                <button class="portfolio-dot" data-index="2"></button>
                <button class="portfolio-dot" data-index="3"></button>
                <button class="portfolio-dot" data-index="4"></button>
            </div>
            <button class="portfolio-arrow portfolio-next" id="portfolioNext" aria-label="Volgend project">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </section>

    <section class="process-section" id="process">
        <div class="process-sticky">
            <div class="process-header">
                <span class="process-label">Hoe Wij Werken</span>
                <h2>Ons <span>Proces</span></h2>
            </div>
            <div class="process-track-wrapper">
                <div class="process-track">
                    <div class="process-connector-line"></div>
                    <div class="process-connector-glow"></div>

                    <div class="process-step">
                        <div class="process-step-number">01</div>
                        <div class="process-step-icon"><i class="fas fa-magnifying-glass-chart"></i></div>
                        <div class="process-step-content">
                            <h3>Intake & Analyse</h3>
                            <p>Wij analyseren uw kliniek, doelgroep en concurrenten om de juiste strategie en positionering te bepalen.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">02</div>
                        <div class="process-step-icon"><i class="fas fa-bullseye"></i></div>
                        <div class="process-step-content">
                            <h3>Strategie & Positionering</h3>
                            <p>Wij bouwen uw unieke marktpositie en leggen het fundament voor een voorspelbaar groeisysteem.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">03</div>
                        <div class="process-step-icon"><i class="fas fa-rocket"></i></div>
                        <div class="process-step-content">
                            <h3>Lancering & Campagnes</h3>
                            <p>Wij lanceren uw advertenties, landingspagina en leadgeneratiesysteem klaar voor de eerste consultaties.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">04</div>
                        <div class="process-step-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="process-step-content">
                            <h3>Optimalisatie & Resultaten</h3>
                            <p>Wij monitoren en optimaliseren continu om steeds meer hoogwaardige consultaties te genereren.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">05</div>
                        <div class="process-step-icon"><i class="fas fa-arrow-trend-up"></i></div>
                        <div class="process-step-content">
                            <h3>Groei & Schaalvergroting</h3>
                            <p>Wij schalen wat werkt en bouwen een voorspelbare instroom van consultaties voor de lange termijn.</p>
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
                    <h3>Reactie Binnen 5 Minuten</h3>
                    <p>Wij reageren op alle klantvragen binnen 5 minuten, 8u–21u. U wacht nooit op ons.</p>
                </div>
                <div class="support-item">
                    <div class="support-icon">
                        <i class="fas fa-circle-check"></i>
                    </div>
                    <h3>Done-For-You Uitvoering</h3>
                    <p>Wij verzorgen strategie, advertenties, content, funnels en rapportage. U focust op uw kliniek.</p>
                </div>
                <div class="support-item">
                    <div class="support-icon">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3>60-Dagen Resultatengarantie</h3>
                    <p>Als wij binnen 60 dagen geen gekwalificeerde consultatiekansen genereren, werken wij gratis totdat we dat wel doen.</p>
                </div>
            </div>
            <div style="text-align:center; margin-top: 48px;" data-reveal>
                <a href="#contact" class="btn btn--orange">Plan een Gratis Gesprek</a>
            </div>
        </div>
    </section>

    <section class="about-combined" id="about">
        <div class="container">
            <div class="about-combined-grid" data-reveal>
                <!-- Left: Agency intro -->
                <div class="about-combined-left">
                    <span class="about-badge">About Our Agency</span>
                    <h2>A <span>Growth System</span><br>Built For Clinics</h2>
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
                            <p>Your business must be clearly differentiated from competitors. Clients should consciously choose your clinic — not because you're the cheapest.</p>
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
                    <p>We position your clinic in front of the right audience through SEO, strategic ads, and targeted content.</p>
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
                    <p>E-commerce integration for clinics selling products or booking services online.</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon tool-icon--wordpress">
                        <i class="fa-brands fa-wordpress"></i>
                    </div>
                    <h3>WordPress</h3>
                    <p>Custom clinic websites built on WordPress — fast, secure, and easy to manage.</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon tool-icon--google">
                        <i class="fa-brands fa-google"></i>
                    </div>
                    <h3>Google Ads</h3>
                    <p>Targeted paid search campaigns that put your clinic in front of high-intent clients.</p>
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
                <h2>Boek Uw <span>Gratis Strategiegesprek</span></h2>
                <p>Vertel ons over uw kliniek en wij laten u precies zien hoe wij uw consultatiagenda in de komende 60 dagen vullen.</p>
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
                    <p>Een AI-marketingbureau dat cosmetische klinieken en med spas helpt voorspelbaar volgeboekt te worden via intelligente, datagedreven klantwervingssystemen.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Contactgegevens</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Netherlands, Purmerend, 1448GJ</li>
                        <li><i class="fas fa-phone"></i> +31 6 28803732</li>
                        <li><i class="fas fa-envelope"></i> secretscaling@gmail.com</li>
                        <li><i class="fas fa-clock"></i> Ma - Vr: 8u - 21u</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Belangrijke Links</h4>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#services">Diensten</a></li>
                        <li><a href="#about">Over Ons</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Privacybeleid</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 SecretScaling. Alle rechten voorbehouden.</p>
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
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'nl',
                includedLanguages: 'en',
                autoDisplay: false
            }, 'google_translate_element');
        }

        function switchLang(lang) {
            document.getElementById('btn-nl').classList.toggle('active', lang === 'nl');
            document.getElementById('btn-en').classList.toggle('active', lang === 'en');
            if (lang === 'nl') {
                document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=' + location.hostname;
                location.reload();
            } else {
                if (window.setTypewriterLang) window.setTypewriterLang(lang);
                var select = document.querySelector('.goog-te-combo');
                if (select) {
                    select.value = lang;
                    select.dispatchEvent(new Event('change'));
                }
            }
        }
        (function () {
            var match = document.cookie.match(/googtrans=\/nl\/(\w+)/);
            if (match && match[1] === 'en') {
                document.getElementById('btn-nl').classList.remove('active');
                document.getElementById('btn-en').classList.add('active');
            }
        })();
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <button id="scroll-top-btn" aria-label="Back to top">
        <i class="fa-solid fa-shuttle-space"></i>
    </button>

<?php wp_footer(); ?>
</body>
</html>
