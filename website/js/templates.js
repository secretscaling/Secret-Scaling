/* ============================
   TEMPLATES PAGE — JavaScript
   SecretScaling Premium Templates
============================ */

(function () {
    'use strict';

    /* ---- Scroll Reveal ---- */
    var revealEls = document.querySelectorAll('.reveal');
    var revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { revealObserver.observe(el); });

    /* ---- Filter ---- */
    var filterBtns = document.querySelectorAll('.t-filter-btn');
    var cards = document.querySelectorAll('.t-card');
    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterBtns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');
            var filter = btn.getAttribute('data-filter');
            cards.forEach(function (card) {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = '';
                    card.classList.add('is-visible');
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    /* ---- Page Types Nav ---- */
    var pageNavItems = document.querySelectorAll('.t-pages-nav-item');
    pageNavItems.forEach(function (item) {
        item.addEventListener('click', function () {
            pageNavItems.forEach(function (n) { n.classList.remove('active'); });
            item.classList.add('active');
        });
    });

    /* ---- Scroll to Top ---- */
    var scrollTopBtn = document.getElementById('scrollTop');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 600) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    });
    scrollTopBtn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    /* ---- Trust Canvas: Particles ---- */
    var canvas = document.getElementById('trustCanvas');
    if (canvas) {
        var ctx = canvas.getContext('2d');
        var particles = [];
        var particleCount = 80;

        function resizeCanvas() {
            var section = canvas.parentElement;
            canvas.width = section.offsetWidth;
            canvas.height = section.offsetHeight;
        }

        function createParticle() {
            return {
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                size: Math.random() * 2 + 0.5,
                speedX: (Math.random() - 0.5) * 0.3,
                speedY: (Math.random() - 0.5) * 0.3,
                opacity: Math.random() * 0.4 + 0.1,
                color: Math.random() > 0.5 ? '168,85,247' : '245,158,11'
            };
        }

        function initParticles() {
            particles = [];
            for (var i = 0; i < particleCount; i++) {
                particles.push(createParticle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(function (p) {
                p.x += p.speedX;
                p.y += p.speedY;
                if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
                if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(' + p.color + ',' + p.opacity + ')';
                ctx.fill();
            });
            requestAnimationFrame(animateParticles);
        }

        resizeCanvas();
        initParticles();
        animateParticles();
        window.addEventListener('resize', function () {
            resizeCanvas();
            initParticles();
        });
    }

    /* ---- Animate chart bars on scroll ---- */
    var chartBars = document.getElementById('chartBars');
    if (chartBars) {
        var chartObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var bars = entry.target.querySelectorAll('.t-chart-bar');
                    bars.forEach(function (bar, i) {
                        var h = bar.style.height;
                        bar.style.height = '0%';
                        setTimeout(function () {
                            bar.style.height = h;
                        }, i * 80);
                    });
                    chartObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        chartObserver.observe(chartBars);
    }

    /* ---- Smooth nav scroll ---- */
    document.querySelectorAll('.t-nav a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            var target = document.querySelector(link.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

})();
