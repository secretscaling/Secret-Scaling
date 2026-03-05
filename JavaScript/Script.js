// ============================
// CURSOR GLOW FOLLOWER
// ============================

const cursorGlow = document.getElementById('cursorGlow');

if (cursorGlow) {
    document.addEventListener('mousemove', (e) => {
        cursorGlow.style.left = e.clientX + 'px';
        cursorGlow.style.top  = e.clientY + 'px';
    }, { passive: true });
}

// ============================
// HERO TYPEWRITER EFFECT
// ============================

const rotatingText = document.querySelector('.hero-rotating-text');

if (rotatingText) {
    const phraseSets = {
        nl: [
            'meer hoogwaardige consultaties aan te trekken',
            'een voorspelbare instroom van klanten te creëren',
            'meer vertrouwen op te bouwen bij potentiële klanten',
            'meer consultaties om te zetten in behandelingen',
            'duurzaam en gecontroleerd te groeien',
        ],
        en: [
            'attract more high-quality consultations',
            'create a predictable flow of new clients',
            'build more trust with potential clients',
            'convert more consultations into treatments',
            'grow sustainably and in a controlled way',
        ]
    };

    // Detect active language from cookie
    var langMatch = document.cookie.match(/googtrans=\/nl\/(\w+)/);
    var activeLang = (langMatch && langMatch[1] === 'en') ? 'en' : 'nl';
    const phrases = phraseSets[activeLang];

    const TYPE_SPEED    = 72;   // ms per character while typing
    const DELETE_SPEED  = 38;   // ms per character while deleting
    const PAUSE_TYPED   = 2000; // ms to pause after fully typed
    const PAUSE_DELETED = 380;  // ms to pause before typing next phrase

    let phraseIndex = 0;
    let charIndex   = phrases[0].length; // page already shows full first phrase
    let isDeleting  = true;              // start by deleting after initial pause

    function tick() {
        const phrase = phrases[phraseIndex];

        if (isDeleting) {
            charIndex--;
            rotatingText.textContent = phrase.substring(0, charIndex);

            if (charIndex === 0) {
                isDeleting  = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;
                setTimeout(tick, PAUSE_DELETED);
                return;
            }
            setTimeout(tick, DELETE_SPEED);

        } else {
            charIndex++;
            rotatingText.textContent = phrases[phraseIndex].substring(0, charIndex);

            if (charIndex === phrases[phraseIndex].length) {
                isDeleting = true;
                setTimeout(tick, PAUSE_TYPED);
                return;
            }
            setTimeout(tick, TYPE_SPEED);
        }
    }

    // Wait before deleting the first phrase
    setTimeout(tick, PAUSE_TYPED);


}

// ============================
// HERO SPARKLES
// ============================

(function () {
    const section = document.getElementById('hero');
    if (!section) return;

    const container = document.createElement('div');
    container.className = 'hero-sparkles';
    section.prepend(container);

    const COUNT = 60;
    for (let i = 0; i < COUNT; i++) {
        const s = document.createElement('span');
        s.className = 'sparkle';
        const size  = Math.random() * 3 + 1;
        const delay = (Math.random() * 9).toFixed(2);
        const dur   = (Math.random() * 5 + 4).toFixed(2);
        s.style.cssText = `
            left:${(Math.random() * 100).toFixed(2)}%;
            top:${(Math.random() * 100).toFixed(2)}%;
            width:${size.toFixed(1)}px;
            height:${size.toFixed(1)}px;
            animation-delay:${delay}s;
            animation-duration:${dur}s;
        `;
        container.appendChild(s);
    }
})();

// ============================
// SERVICES BIG TEXT ROTATION + RIPPLE
// ============================

const servicesWords = document.querySelectorAll('.services-headline-word');

// Wrap each character in a span so we can wave them individually
servicesWords.forEach(word => {
    const chars = [...word.textContent];
    word.textContent = '';
    chars.forEach((ch, i) => {
        const span = document.createElement('span');
        span.className = 'wave-char';
        span.textContent = ch === ' ' ? '\u00A0' : ch;
        span.style.animationDelay = (i * 0.045) + 's';
        word.appendChild(span);
    });
});

if (servicesWords.length > 0) {
    let currentWord = 0;

    function activateWord(index) {
        // Force animation restart by briefly removing and re-adding active
        servicesWords[index].classList.remove('active');
        // eslint-disable-next-line no-unused-expressions
        servicesWords[index].offsetWidth; // reflow
        servicesWords[index].classList.add('active');
    }

    activateWord(0);

    setInterval(() => {
        servicesWords[currentWord].classList.remove('active');
        currentWord = (currentWord + 1) % servicesWords.length;
        activateWord(currentWord);
    }, 2500);
}

// ============================
// TOP NAV — HIDE ON SCROLL DOWN, SHOW ON SCROLL UP
// ============================

const nav = document.getElementById('nav');
let lastNavScrollY = window.scrollY;
const NAV_DELTA_THRESHOLD = 6;

function updateNavState() {
    const scrollY = window.scrollY;
    const delta   = scrollY - lastNavScrollY;

    if (Math.abs(delta) < NAV_DELTA_THRESHOLD) return;

    if (delta > 0) {
        nav.classList.add('nav--hidden');
    } else {
        nav.classList.remove('nav--hidden');
    }
    lastNavScrollY = scrollY;
}

window.addEventListener('scroll', updateNavState, { passive: true });

// ============================
// DROPUP MENU (MORE BUTTON)
// ============================

const navMoreBtn   = document.getElementById('navMoreBtn');
const dropupMenu   = document.getElementById('dropupMenu');
const dropupOverlay = document.getElementById('dropupOverlay');

function openDropup() {
    dropupMenu.classList.add('active');
    dropupOverlay.classList.add('active');
    dropupMenu.setAttribute('aria-hidden', 'false');
    nav.classList.remove('nav--hidden');
}

function closeDropup() {
    dropupMenu.classList.remove('active');
    dropupOverlay.classList.remove('active');
    dropupMenu.setAttribute('aria-hidden', 'true');
}

navMoreBtn.addEventListener('click', () => {
    const isOpen = dropupMenu.classList.contains('active');
    isOpen ? closeDropup() : openDropup();
});

dropupOverlay.addEventListener('click', closeDropup);

// Close dropup when a link inside it is clicked
dropupMenu.querySelectorAll('.dropup-link').forEach(link => {
    link.addEventListener('click', closeDropup);
});

// ============================
// SMOOTH SCROLL TO ANCHORS
// ============================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const id = this.getAttribute('href');
        if (id === '#') return;
        const target = document.querySelector(id);
        if (target) {
            e.preventDefault();
            closeDropup();
            const top = target.getBoundingClientRect().top + window.pageYOffset - 20;
            window.scrollTo({ top, behavior: 'smooth' });
        }
    });
});

// ============================
// ACTIVE NAV TAB ON SCROLL
// ============================

const sections    = document.querySelectorAll('section[id]');
const allNavTabs  = document.querySelectorAll('.nav-tab');

function highlightNav() {
    const scrollY = window.pageYOffset + window.innerHeight * 0.4;

    sections.forEach(section => {
        const top    = section.offsetTop;
        const height = section.offsetHeight;
        const id     = section.getAttribute('id');

        if (scrollY >= top && scrollY < top + height) {
            allNavTabs.forEach(tab => {
                tab.classList.remove('active');
                if (tab.getAttribute('data-section') === id) {
                    tab.classList.add('active');
                }
            });
        }
    });
}

window.addEventListener('scroll', highlightNav, { passive: true });

// ============================
// SCROLL REVEAL (IntersectionObserver)
// ============================

const revealElements = document.querySelectorAll('[data-reveal]');

const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            revealObserver.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.15,
    rootMargin: '0px 0px -60px 0px'
});

revealElements.forEach(el => revealObserver.observe(el));


// ============================
// PORTFOLIO SLIDESHOW
// ============================

(function () {
    const track   = document.getElementById('portfolioTrack');
    const slides  = track ? Array.from(track.querySelectorAll('.portfolio-slide')) : [];
    const dots    = Array.from(document.querySelectorAll('.portfolio-dot'));
    const prevBtn = document.getElementById('portfolioPrev');
    const nextBtn = document.getElementById('portfolioNext');

    if (!track || slides.length === 0) return;

    let current     = 0;
    let autoTimer   = null;
    const INTERVAL  = 5000;

    function goTo(index) {
        slides[current].classList.remove('is-active');
        dots[current] && dots[current].classList.remove('active');

        current = (index + slides.length) % slides.length;

        slides[current].classList.add('is-active');
        dots[current] && dots[current].classList.add('active');
        track.style.transform = `translateX(-${current * 100}%)`;
    }

    function startAuto() {
        clearInterval(autoTimer);
        autoTimer = setInterval(() => goTo(current + 1), INTERVAL);
    }

    // Init first slide
    goTo(0);
    startAuto();

    prevBtn && prevBtn.addEventListener('click', () => { goTo(current - 1); startAuto(); });
    nextBtn && nextBtn.addEventListener('click', () => { goTo(current + 1); startAuto(); });
    dots.forEach(dot => dot.addEventListener('click', () => {
        goTo(parseInt(dot.dataset.index, 10));
        startAuto();
    }));

    // Pause on hover
    track.closest('.portfolio-slider-wrap').addEventListener('mouseenter', () => clearInterval(autoTimer));
    track.closest('.portfolio-slider-wrap').addEventListener('mouseleave', startAuto);
})();

// ============================
// SERVICE ITEMS — SCROLL SLIDE-IN
// ============================

(function () {
    const items = Array.from(document.querySelectorAll('.service-item'));
    if (!items.length) return;

    // Tag each item with its list index so stagger is always correct
    items.forEach((item, idx) => item.dataset.slideIdx = idx);

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const idx = parseInt(entry.target.dataset.slideIdx, 10);
                setTimeout(() => {
                    entry.target.classList.add('slide-up');
                }, idx * 80);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });

    items.forEach(item => observer.observe(item));
})();

// ============================
// SERVICES SPARKLES
// ============================

(function () {
    const section = document.getElementById('services');
    if (!section) return;

    const container = document.createElement('div');
    container.className = 'services-sparkles';
    section.prepend(container);

    const COUNT = 55;
    for (let i = 0; i < COUNT; i++) {
        const s = document.createElement('span');
        s.className = 'sparkle';
        const size  = Math.random() * 3 + 1;
        const delay = (Math.random() * 8).toFixed(2);
        const dur   = (Math.random() * 5 + 3).toFixed(2);
        s.style.cssText = `
            left:${(Math.random() * 100).toFixed(2)}%;
            top:${(Math.random() * 100).toFixed(2)}%;
            width:${size.toFixed(1)}px;
            height:${size.toFixed(1)}px;
            animation-delay:${delay}s;
            animation-duration:${dur}s;
        `;
        container.appendChild(s);
    }
})();

// ============================
// PORTFOLIO SPARKLES
// ============================

(function () {
    const section = document.getElementById('portfolio');
    if (!section) return;

    const container = document.createElement('div');
    container.className = 'portfolio-sparkles';
    section.prepend(container);

    const COUNT = 38;
    for (let i = 0; i < COUNT; i++) {
        const s = document.createElement('span');
        s.className = 'sparkle';
        const size = Math.random() * 3 + 1;          // 1–4 px
        const delay = (Math.random() * 6).toFixed(2); // stagger blink
        const dur   = (Math.random() * 4 + 3).toFixed(2); // 3–7 s cycle
        s.style.cssText = `
            left:${(Math.random() * 100).toFixed(2)}%;
            top:${(Math.random() * 100).toFixed(2)}%;
            width:${size.toFixed(1)}px;
            height:${size.toFixed(1)}px;
            animation-delay:${delay}s;
            animation-duration:${dur}s;
        `;
        container.appendChild(s);
    }
})();

// ============================
// FORM SUBMIT HANDLING
// ============================

function handleFormSubmit(form) {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = form.querySelector('button[type="submit"]');
        const originalText = btn.textContent;

        btn.textContent = 'SENT!';
        btn.style.background = '#27ae60';
        btn.disabled = true;

        setTimeout(() => {
            form.reset();
            btn.textContent = originalText;
            btn.style.background = '';
            btn.disabled = false;
        }, 2500);
    });
}

const contactForm = document.getElementById('contactForm');
const quickForm = document.getElementById('quickContactForm');

if (contactForm) handleFormSubmit(contactForm);
if (quickForm) handleFormSubmit(quickForm);

// ============================
// PROCESS HORIZONTAL SCROLL
// ============================

(function () {
    const section  = document.querySelector('.process-section');
    const track    = document.querySelector('.process-track');
    const progress  = document.querySelector('.process-progress-bar');
    const counter   = document.querySelector('.process-counter-current');
    const glowLine  = document.querySelector('.process-connector-glow');

    if (!section || !track) return;

    const steps     = track.querySelectorAll('.process-step');
    const stepCount = steps.length;

    function isMobile() {
        return window.innerWidth <= 768;
    }

    function setup() {
        if (isMobile()) {
            section.style.height = '';
            track.style.transform = '';
            return;
        }
        // Section height = viewport height + total horizontal distance to travel
        const scrollDistance = (stepCount - 1) * window.innerWidth;
        section.style.height = (window.innerHeight + scrollDistance) + 'px';
    }

    function onScroll() {
        if (isMobile()) return;

        const scrollDistance = (stepCount - 1) * window.innerWidth;
        const sectionTop     = section.getBoundingClientRect().top + window.scrollY;
        const raw            = window.scrollY - sectionTop;
        const clamped        = Math.max(0, Math.min(scrollDistance, raw));
        const pct            = scrollDistance > 0 ? clamped / scrollDistance : 0;

        track.style.transform = `translateX(${-clamped}px)`;

        if (progress) progress.style.width = (pct * 100) + '%';

        if (glowLine) glowLine.style.width = (pct * stepCount * window.innerWidth) + 'px';

        if (counter) {
            const step = Math.min(stepCount, Math.floor(pct * stepCount) + 1);
            counter.textContent = String(step).padStart(2, '0');
        }
    }

    setup();
    onScroll();

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', function () { setup(); onScroll(); });
})();

// ============================
// SERVICES HUB — LINES & BALL
// ============================

(function () {
    const grid  = document.querySelector('.services-hub-grid');
    const hubEl = document.querySelector('.services-hub-center');
    const cards = Array.from(document.querySelectorAll('.services-hub-grid .service-card'));
    if (!grid || !hubEl || cards.length === 0) return;

    // Build SVG overlay
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.id = 'hubLinesSvg';
    grid.prepend(svg);

    const defs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
    defs.innerHTML = `
        <filter id="hubBallGlow" x="-200%" y="-200%" width="500%" height="500%">
            <feGaussianBlur in="SourceGraphic" stdDeviation="2.8" result="blur"/>
            <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
        </filter>`;
    svg.appendChild(defs);

    // Single reusable ball
    const ballEl = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
    ballEl.setAttribute('r', '3.5');
    ballEl.setAttribute('fill', '#ffffff');
    ballEl.setAttribute('filter', 'url(#hubBallGlow)');
    ballEl.style.display = 'none';
    svg.appendChild(ballEl);

    let pathEls = [];

    // Returns the point on the card's border facing the hub
    function edgePoint(rect, gridRect, hubCx, hubCy) {
        const cx = rect.left - gridRect.left + rect.width  / 2;
        const cy = rect.top  - gridRect.top  + rect.height / 2;
        const dx = hubCx - cx;
        const dy = hubCy - cy;
        if (dx === 0 && dy === 0) return { x: cx, y: cy };
        const tx = rect.width  / 2 / Math.abs(dx);
        const ty = rect.height / 2 / Math.abs(dy);
        const t  = Math.min(tx, ty);
        return { x: cx + dx * t, y: cy + dy * t };
    }

    function buildLines() {
        svg.querySelectorAll('.hub-line').forEach(el => el.remove());
        pathEls = [];

        if (window.innerWidth <= 900) return;

        const gridRect = grid.getBoundingClientRect();
        const hubRect  = hubEl.getBoundingClientRect();
        const hubCx    = hubRect.left - gridRect.left + hubRect.width  / 2;
        const hubCy    = hubRect.top  - gridRect.top  + hubRect.height / 2;

        cards.forEach(card => {
            const r     = card.getBoundingClientRect();
            const start = edgePoint(r, gridRect, hubCx, hubCy);

            const p = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            p.setAttribute('class', 'hub-line');
            p.setAttribute('d', `M ${start.x} ${start.y} L ${hubCx} ${hubCy}`);
            p.setAttribute('stroke', 'rgba(91,141,239,0.18)');
            p.setAttribute('stroke-width', '1');
            p.setAttribute('fill', 'none');
            svg.insertBefore(p, ballEl);
            pathEls.push(p);
        });
    }

    // Animation
    let cardIdx    = 0;
    let phase      = 'travel';
    let phaseStart = null;
    const TRAVEL_MS = 1600;
    const PAUSE_MS  = 500;

    function easeInOut(t) {
        return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
    }

    function hubGlow() {
        hubEl.classList.add('hub-glow-active');
        setTimeout(() => hubEl.classList.remove('hub-glow-active'), 700);
    }

    function tick(ts) {
        if (pathEls.length === 0) { requestAnimationFrame(tick); return; }

        if (!phaseStart) phaseStart = ts;
        const elapsed = ts - phaseStart;

        if (phase === 'travel') {
            const rawT = Math.min(elapsed / TRAVEL_MS, 1);
            const t    = easeInOut(rawT);
            const p    = pathEls[cardIdx];
            const len  = p.getTotalLength();
            const pt   = p.getPointAtLength(t * len);
            ballEl.setAttribute('cx', pt.x);
            ballEl.setAttribute('cy', pt.y);
            ballEl.style.display = '';

            if (rawT >= 1) {
                ballEl.style.display = 'none';
                hubGlow();
                phase      = 'pause';
                phaseStart = ts;
            }
        } else {
            if (elapsed >= PAUSE_MS) {
                cardIdx    = (cardIdx + 1) % pathEls.length;
                phase      = 'travel';
                phaseStart = ts;
            }
        }

        requestAnimationFrame(tick);
    }

    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => { buildLines(); phaseStart = null; cardIdx = 0; phase = 'travel'; }, 250);
    });

    // Wait for layout paint before measuring
    setTimeout(() => {
        buildLines();
        requestAnimationFrame(tick);
    }, 350);
})();
