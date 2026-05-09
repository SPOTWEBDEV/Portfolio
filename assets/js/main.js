/* ============================================================
   SPOTWEB TECH — Main JavaScript
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

    // ---- Scroll Reveal ----
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
        revealObserver.observe(el);
    });

    // ---- Back to Top ----
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTop.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
                backToTop.classList.add('opacity-100', 'translate-y-0');
            } else {
                backToTop.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
                backToTop.classList.remove('opacity-100', 'translate-y-0');
            }
        });
        backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }

    // ---- Skill Bars ----
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bars = entry.target.querySelectorAll('.skill-bar-fill');
                bars.forEach(bar => {
                    bar.style.width = bar.dataset.level + '%';
                });
                skillObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    const skillsSection = document.getElementById('skills-section');
    if (skillsSection) skillObserver.observe(skillsSection);

    // ---- Typewriter ----
    const typeEl = document.getElementById('typewriter');
    if (typeEl) {
        const words = [
            'Fullstack Web Developer',
            'React Native Developer',
            'Software Engineer',
            'UI/UX Enthusiast',
            'CEO of SPOTWEB TECH'
        ];
        let wi = 0, ci = 0, deleting = false;
        function type() {
            const current = words[wi];
            if (!deleting) {
                typeEl.textContent = current.slice(0, ++ci);
                if (ci === current.length) {
                    deleting = true;
                    setTimeout(type, 2000);
                    return;
                }
            } else {
                typeEl.textContent = current.slice(0, --ci);
                if (ci === 0) {
                    deleting = false;
                    wi = (wi + 1) % words.length;
                }
            }
            setTimeout(type, deleting ? 60 : 100);
        }
        type();
    }

    // ---- Testimonial Slider ----
    const track = document.getElementById('testimonial-track');
    if (track) {
        let current = 0;
        const slides = track.querySelectorAll('.testimonial-slide');
        const total = slides.length;
        const dots = document.querySelectorAll('.testimonial-dot');

        function goTo(idx) {
            current = (idx + total) % total;
            const slideW = slides[0].offsetWidth + 24; // gap
            track.style.transform = `translateX(-${current * slideW}px)`;
            dots.forEach((d, i) => {
                d.classList.toggle('bg-sky-400', i === current);
                d.classList.toggle('w-6', i === current);
                d.classList.toggle('bg-gray-600', i !== current);
                d.classList.toggle('w-2', i !== current);
            });
        }

        document.getElementById('prev-testimonial')?.addEventListener('click', () => goTo(current - 1));
        document.getElementById('next-testimonial')?.addEventListener('click', () => goTo(current + 1));
        dots.forEach((d, i) => d.addEventListener('click', () => goTo(i)));

        // Auto-slide
        setInterval(() => goTo(current + 1), 5000);
    }

    // ---- Counter Animation ----
    const counterEls = document.querySelectorAll('.counter');
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.dataset.target);
                let current = 0;
                const step = Math.ceil(target / 60);
                const timer = setInterval(() => {
                    current = Math.min(current + step, target);
                    el.textContent = current + (el.dataset.suffix || '');
                    if (current >= target) clearInterval(timer);
                }, 30);
                counterObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    counterEls.forEach(el => counterObserver.observe(el));

    // ---- Gallery Lightbox ----
    const lightbox = document.getElementById('lightbox');
    if (lightbox) {
        const lightboxImg = document.getElementById('lightbox-img');
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', () => {
                lightboxImg.src = item.dataset.src;
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.id === 'lightbox-close') {
                lightbox.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // ---- Contact Form ----
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const btn = document.getElementById('submit-btn');
            const btnText = document.getElementById('submit-text');
            const spinner = document.getElementById('submit-spinner');

            btn.disabled = true;
            btnText.textContent = 'Sending...';
            spinner.classList.remove('hidden');

            const formData = new FormData(contactForm);
            try {
                const res = await fetch('contact.php', { method: 'POST', body: formData });
                const text = await res.text();
                if (text.includes('success')) {
                    showAlert('success', 'Message sent! We\'ll get back to you shortly.');
                    contactForm.reset();
                } else {
                    showAlert('error', 'Something went wrong. Please try again.');
                }
            } catch {
                showAlert('error', 'Network error. Please check your connection.');
            } finally {
                btn.disabled = false;
                btnText.textContent = 'Send Message';
                spinner.classList.add('hidden');
            }
        });
    }

    function showAlert(type, msg) {
        const el = document.getElementById('form-alert');
        if (!el) return;
        el.textContent = msg;
        el.className = `p-4 rounded-xl text-sm font-medium mb-4 ${type === 'success'
            ? 'bg-green-500/10 border border-green-500/20 text-green-400'
            : 'bg-red-500/10 border border-red-500/20 text-red-400'}`;
        el.classList.remove('hidden');
        setTimeout(() => el.classList.add('hidden'), 5000);
    }

    // ---- Smooth page transitions ----
    document.querySelectorAll('a[href]').forEach(link => {
        const href = link.getAttribute('href');
        if (!href.startsWith('#') && !href.startsWith('http') && !href.startsWith('mailto') && !href.startsWith('tel')) {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const overlay = document.getElementById('page-overlay');
                if (overlay) {
                    overlay.style.opacity = '1';
                    overlay.style.pointerEvents = 'all';
                    setTimeout(() => { window.location = href; }, 300);
                } else {
                    window.location = href;
                }
            });
        }
    });

    // Fade in on load
    const overlay = document.getElementById('page-overlay');
    if (overlay) {
        overlay.style.opacity = '0';
    }
});
