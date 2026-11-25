import './bootstrap';
import { inject } from '@vercel/analytics';

inject();

document.addEventListener('DOMContentLoaded', () => {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // 0. Branded Loading Screen + Particles + Seamless Landing Page Reveal
    const loader = document.getElementById('page-loader');
    const loaderBar = document.getElementById('loader-bar');
    const loaderPercent = document.getElementById('loader-percent');
    const loaderStatus = document.getElementById('loader-status');
    const particleCanvas = document.getElementById('loader-particles');

    const startLoaderParticles = () => {
        if (!particleCanvas) return () => {};
        const ctx = particleCanvas.getContext('2d');
        if (!ctx) return () => {};

        let rafId = null;
        let width = 0;
        let height = 0;

        const resize = () => {
            const dpr = Math.min(window.devicePixelRatio || 1, 2);
            width = window.innerWidth;
            height = window.innerHeight;
            particleCanvas.width = Math.floor(width * dpr);
            particleCanvas.height = Math.floor(height * dpr);
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
        };

        resize();
        window.addEventListener('resize', resize);

        // Palette matching the Figma design (#ffdab9 peach, #98fb98 green, #333333 ink, #e8f0c8 cream)
        const palette = [
            'rgba(255, 195, 145, 0.72)',
            'rgba(255, 218, 185, 0.85)',
            'rgba(152, 251, 152, 0.65)',
            'rgba(51, 51, 51, 0.24)',
            'rgba(218, 232, 165, 0.75)',
        ];

        const count = width < 640 ? 28 : 48;
        const particles = Array.from({ length: count }, (_, i) => ({
            x: Math.random() * width,
            y: Math.random() * height,
            r: 2.2 + Math.random() * 4.2,
            vx: (Math.random() - 0.5) * 0.45,
            vy: -0.22 - Math.random() * 0.5,
            color: palette[i % palette.length],
            ring: i % 5 === 0,
            phase: Math.random() * Math.PI * 2,
        }));

        const render = (t) => {
            ctx.clearRect(0, 0, width, height);

            // Soft connecting lines between nearby particles
            for (let i = 0; i < particles.length; i++) {
                const a = particles[i];
                for (let j = i + 1; j < particles.length; j++) {
                    const b = particles[j];
                    const dx = a.x - b.x;
                    const dy = a.y - b.y;
                    const dist = Math.hypot(dx, dy);
                    if (dist < 125) {
                        const alpha = (1 - dist / 125) * 0.14;
                        ctx.strokeStyle = `rgba(51, 51, 51, ${alpha.toFixed(3)})`;
                        ctx.lineWidth = 1;
                        ctx.setLineDash([3, 4]);
                        ctx.beginPath();
                        ctx.moveTo(a.x, a.y);
                        ctx.lineTo(b.x, b.y);
                        ctx.stroke();
                    }
                }
            }

            ctx.setLineDash([]);

            for (const p of particles) {
                p.x += p.vx + Math.sin(t * 0.0012 + p.phase) * 0.22;
                p.y += p.vy;

                if (p.y < -20) {
                    p.y = height + 20;
                    p.x = Math.random() * width;
                }
                if (p.x < -20) p.x = width + 20;
                if (p.x > width + 20) p.x = -20;

                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                if (p.ring) {
                    ctx.strokeStyle = p.color;
                    ctx.lineWidth = 1.4;
                    ctx.stroke();
                } else {
                    ctx.fillStyle = p.color;
                    ctx.fill();
                }
            }

            rafId = requestAnimationFrame(render);
        };

        rafId = requestAnimationFrame(render);

        return () => {
            if (rafId) cancelAnimationFrame(rafId);
            window.removeEventListener('resize', resize);
        };
    };

    // 1. Top scroll progress bar
    const progressBar = document.getElementById('scroll-progress');
    const updateProgressBar = () => {
        if (!progressBar) return;
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
        const ratio = maxScroll > 0 ? Math.min(1, Math.max(0, window.scrollY / maxScroll)) : 0;
        progressBar.style.transform = `scaleX(${ratio})`;
    };

    // 2. Scroll-reveal observer (starts once the loading screen clears so hero cascades cleanly)
    const revealEls = Array.from(document.querySelectorAll('[data-reveal]'));
    revealEls.forEach((el) => {
        const delay = el.getAttribute('data-reveal-delay');
        if (delay) {
            el.style.setProperty('--reveal-delay', `${delay}ms`);
        }
    });

    const startRevealObserver = () => {
        if (prefersReducedMotion || !('IntersectionObserver' in window)) {
            revealEls.forEach((el) => el.classList.add('is-revealed'));
            return;
        }

        const revealObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        revealObserver.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.12,
                rootMargin: '0px 0px -50px 0px',
            }
        );

        revealEls.forEach((el) => revealObserver.observe(el));
    };

    if (!loader || prefersReducedMotion) {
        document.body.classList.remove('is-loading');
        if (loader) loader.remove();
        startRevealObserver();
    } else {
        const stopParticles = startLoaderParticles();
        let progress = 0;
        let isFinished = false;
        let pageLoaded = document.readyState === 'complete';
        const minDuration = 2450;
        const startTime = performance.now();

        const getStatusLabel = (pct) => {
            if (pct < 35) return 'Crafting interface...';
            if (pct < 70) return 'Arranging experience...';
            if (pct < 96) return 'Polishing latest works...';
            return 'Ready to explore';
        };

        window.addEventListener('load', () => {
            pageLoaded = true;
        });

        const finishLoader = () => {
            if (isFinished) return;
            isFinished = true;

            if (loaderBar) loaderBar.style.transform = 'scaleX(1)';
            if (loaderPercent) loaderPercent.textContent = '100%';
            if (loaderStatus) loaderStatus.textContent = 'Ready to explore';

            // Brief beat at 100%, then lift the peach-edged curtain & cascade the hero into view
            window.setTimeout(() => {
                loader.classList.add('is-exiting');
                document.body.classList.remove('is-loading');

                window.setTimeout(() => {
                    startRevealObserver();
                }, 220);

                window.setTimeout(() => {
                    stopParticles();
                    loader.remove();
                }, 840);
            }, 240);
        };

        const tickLoader = (now) => {
            const elapsed = now - startTime;
            const timeRatio = Math.min(1, elapsed / minDuration);
            // Smooth cubic ease-in-out feel so the bar visibly glides from 0% to 100%
            const eased = timeRatio < 0.5
                ? 4 * timeRatio * timeRatio * timeRatio
                : 1 - Math.pow(-2 * timeRatio + 2, 3) / 2;

            const target = pageLoaded ? eased * 100 : Math.min(92, eased * 94);

            progress = Math.max(progress, target);
            const rounded = Math.min(100, Math.round(progress));

            if (loaderBar) loaderBar.style.transform = `scaleX(${progress / 100})`;
            if (loaderPercent) loaderPercent.textContent = `${rounded}%`;
            if (loaderStatus) loaderStatus.textContent = getStatusLabel(rounded);

            if (pageLoaded && elapsed >= minDuration) {
                finishLoader();
            } else {
                requestAnimationFrame(tickLoader);
            }
        };

        requestAnimationFrame(tickLoader);
        // Safety fallback so the page never stays locked
        window.setTimeout(finishLoader, 5000);
    }

    // 3. Slick navigation & smooth scrolling (About Me, Experience, Portfolio, Scroll down, etc.)
    const navList = document.getElementById('nav-links');
    const navIndicator = document.getElementById('nav-indicator');
    const navLinks = Array.from(document.querySelectorAll('[data-nav-link]'));
    const smoothLinks = Array.from(document.querySelectorAll('a[href^="#"]'));

    let activeScrollRaf = null;
    let isProgrammaticScroll = false;
    let currentActiveLink = navLinks[0] || null;

    const moveIndicator = (link) => {
        if (!navList || !navIndicator || !link) return;
        const listRect = navList.getBoundingClientRect();
        const linkRect = link.getBoundingClientRect();
        navIndicator.style.width = `${linkRect.width}px`;
        navIndicator.style.transform = `translateX(${linkRect.left - listRect.left}px)`;
        navIndicator.style.opacity = '1';
        currentActiveLink = link;
    };

    const triggerSectionArrival = (section) => {
        if (!section || prefersReducedMotion) return;
        // Reveal any children inside the target section immediately if not yet revealed
        section.querySelectorAll('[data-reveal]').forEach((el) => {
            el.classList.add('is-revealed');
        });
        section.classList.remove('section-arrive');
        void section.offsetWidth;
        section.classList.add('section-arrive');
    };

    const easeInOutQuart = (t) => (t < 0.5 ? 8 * t * t * t * t : 1 - Math.pow(-2 * t + 2, 4) / 2);

    const smoothScrollTo = (targetEl, onComplete) => {
        if (activeScrollRaf) {
            cancelAnimationFrame(activeScrollRaf);
            activeScrollRaf = null;
        }

        const startY = window.scrollY;
        const targetY = Math.max(0, targetEl.getBoundingClientRect().top + window.scrollY - 24);
        const distance = targetY - startY;

        if (prefersReducedMotion || Math.abs(distance) < 4) {
            window.scrollTo({ top: targetY, behavior: 'auto' });
            if (onComplete) onComplete();
            return;
        }

        isProgrammaticScroll = true;
        const duration = Math.min(950, Math.max(600, Math.abs(distance) * 0.45));
        const startTime = performance.now();

        const cancelOnUserInput = () => {
            if (activeScrollRaf) {
                cancelAnimationFrame(activeScrollRaf);
                activeScrollRaf = null;
            }
            isProgrammaticScroll = false;
            cleanup();
        };

        const cleanup = () => {
            window.removeEventListener('wheel', cancelOnUserInput);
            window.removeEventListener('touchstart', cancelOnUserInput);
        };

        window.addEventListener('wheel', cancelOnUserInput, { passive: true });
        window.addEventListener('touchstart', cancelOnUserInput, { passive: true });

        const step = (now) => {
            const elapsed = now - startTime;
            const progress = Math.min(1, elapsed / duration);
            const eased = easeInOutQuart(progress);

            window.scrollTo(0, startY + distance * eased);

            if (progress < 1) {
                activeScrollRaf = requestAnimationFrame(step);
            } else {
                activeScrollRaf = null;
                isProgrammaticScroll = false;
                cleanup();
                if (onComplete) onComplete();
            }
        };

        activeScrollRaf = requestAnimationFrame(step);
    };

    smoothLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            const href = link.getAttribute('href');
            if (!href || href === '#' || !href.startsWith('#')) return;
            const target = document.querySelector(href);
            if (!target) return;

            event.preventDefault();
            const matchingNavLink = navLinks.find((n) => n.getAttribute('href') === href);
            if (matchingNavLink) {
                moveIndicator(matchingNavLink);
            }
            history.replaceState(null, '', href);

            smoothScrollTo(target, () => {
                triggerSectionArrival(target);
            });
        });
    });

    // 4. Scroll-spy to glide nav indicator during manual scroll + subtle hero parallax
    const trackedSections = navLinks
        .map((link) => ({
            link,
            section: document.querySelector(link.getAttribute('href')),
        }))
        .filter((item) => item.section);

    const heroProfile = document.getElementById('hero-profile');
    let scrollTicking = false;

    const onScroll = () => {
        if (scrollTicking) return;
        scrollTicking = true;
        requestAnimationFrame(() => {
            updateProgressBar();

            // Subtle parallax lift on hero profile photo (desktop only)
            if (heroProfile && !prefersReducedMotion && window.innerWidth >= 1024) {
                const y = Math.min(window.scrollY, 700);
                heroProfile.style.transform = `translate3d(0, ${y * 0.06}px, 0)`;
            } else if (heroProfile) {
                heroProfile.style.transform = '';
            }

            // Sync active nav indicator on manual scroll
            if (!isProgrammaticScroll && trackedSections.length) {
                const probeY = window.scrollY + window.innerHeight * 0.32;
                let activeItem = trackedSections[0];
                for (const item of trackedSections) {
                    if (item.section.offsetTop <= probeY) {
                        activeItem = item;
                    }
                }
                if (activeItem && activeItem.link !== currentActiveLink) {
                    moveIndicator(activeItem.link);
                }
            }

            scrollTicking = false;
        });
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    updateProgressBar();

    if (currentActiveLink) {
        requestAnimationFrame(() => moveIndicator(currentActiveLink));
        window.addEventListener('resize', () => moveIndicator(currentActiveLink));
    }

    // 5. Horizontal scrollable galleries (arrow buttons + drag-to-scroll) for My Latest Works & My Photography
    const initHorizontalGallery = ({ prevId, nextId, trackId }) => {
        const prevBtn = document.getElementById(prevId);
        const nextBtn = document.getElementById(nextId);
        const trackEl = document.getElementById(trackId);

        if (!trackEl) return;

        const getStepWidth = () => {
            const firstCard = trackEl.querySelector('article');
            if (!firstCard) return trackEl.clientWidth * 0.6;
            const styles = window.getComputedStyle(trackEl);
            const gap = parseFloat(styles.columnGap || styles.gap || '24') || 24;
            return firstCard.getBoundingClientRect().width + gap;
        };

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                trackEl.scrollBy({
                    left: -getStepWidth(),
                    behavior: prefersReducedMotion ? 'auto' : 'smooth',
                });
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                trackEl.scrollBy({
                    left: getStepWidth(),
                    behavior: prefersReducedMotion ? 'auto' : 'smooth',
                });
            });
        }

        // Smooth click-and-drag horizontal scrolling on desktop (track drag distance to distinguish click vs drag)
        let isDragging = false;
        let startX = 0;
        let startScrollLeft = 0;
        let movedPx = 0;

        trackEl.addEventListener('mousedown', (event) => {
            isDragging = true;
            movedPx = 0;
            startX = event.pageX;
            startScrollLeft = trackEl.scrollLeft;
            trackEl.classList.remove('scroll-smooth', 'snap-x');
        });

        window.addEventListener('mousemove', (event) => {
            if (!isDragging) return;
            const dx = event.pageX - startX;
            movedPx = Math.max(movedPx, Math.abs(dx));
            trackEl.scrollLeft = startScrollLeft - dx;
        });

        window.addEventListener('mouseup', () => {
            if (!isDragging) return;
            isDragging = false;
            trackEl.dataset.wasDragged = movedPx > 8 ? 'true' : 'false';
            trackEl.classList.add('scroll-smooth', 'snap-x');
        });
    };

    initHorizontalGallery({
        prevId: 'credentials-prev',
        nextId: 'credentials-next',
        trackId: 'credentials-grid',
    });

    initHorizontalGallery({
        prevId: 'portfolio-prev',
        nextId: 'portfolio-next',
        trackId: 'portfolio-grid',
    });

    initHorizontalGallery({
        prevId: 'photography-prev',
        nextId: 'photography-next',
        trackId: 'photography-grid',
    });

    // 5b. Framed Full-Image Lightbox Modal for Credentials, Latest Works & Photography
    const lightbox = document.getElementById('gallery-lightbox');
    const lbFrameCounter = document.getElementById('lightbox-frame-counter');
    const lbImage = document.getElementById('lightbox-image');
    const lbEyebrow = document.getElementById('lightbox-eyebrow');
    const lbTitle = document.getElementById('lightbox-title');
    const lbLead = document.getElementById('lightbox-lead');
    const lbSubtitle = document.getElementById('lightbox-subtitle');
    const lbDesc = document.getElementById('lightbox-desc');
    const lbExternal = document.getElementById('lightbox-external');
    const lbActionLabel = document.getElementById('lightbox-action-label');
    const lbFooterLabel = document.getElementById('lightbox-footer-label');
    const lbClose = document.getElementById('lightbox-close');
    const lbPrev = document.getElementById('lightbox-prev');
    const lbNext = document.getElementById('lightbox-next');
    const lbZoomBtn = document.getElementById('lightbox-zoom');
    const lbZoomLabel = document.getElementById('lightbox-zoom-label');

    if (lightbox && lbImage) {
        let activeItems = [];
        let activeGroupName = 'GALLERY';
        let activeIdx = 0;
        let isZoomed = false;

        const pad2 = (n) => String(n).padStart(2, '0');

        const setZoom = (zoomState) => {
            isZoomed = zoomState;
            lbImage.classList.toggle('is-zoomed', isZoomed);
            if (lbZoomLabel) {
                lbZoomLabel.textContent = isZoomed ? 'Reset' : 'Zoom';
            }
        };

        const renderLightboxItem = (animate = false) => {
            const item = activeItems[activeIdx];
            if (!item) return;

            setZoom(false);

            const applyContent = () => {
                lbImage.src = item.src;
                lbImage.alt = item.title;
                if (lbFrameCounter) lbFrameCounter.textContent = `FRAME ${pad2(activeIdx + 1)} / ${pad2(activeItems.length)}`;
                if (lbEyebrow) lbEyebrow.textContent = item.eyebrow;
                if (lbTitle) lbTitle.textContent = item.title;
                if (lbLead) lbLead.textContent = item.lead;
                if (lbSubtitle) lbSubtitle.textContent = item.subtitle;
                if (lbDesc) lbDesc.textContent = item.desc;
                if (lbExternal) lbExternal.href = item.actionUrl || item.src;
                if (lbActionLabel) lbActionLabel.textContent = item.actionLabel;
                if (lbFooterLabel) lbFooterLabel.textContent = `NOAH FAWWAS / ${activeGroupName}`;

                const single = activeItems.length <= 1;
                if (lbPrev) lbPrev.classList.toggle('opacity-40', single);
                if (lbNext) lbNext.classList.toggle('opacity-40', single);
            };

            if (animate && !prefersReducedMotion) {
                lbImage.classList.add('is-switching');
                window.setTimeout(() => {
                    applyContent();
                    requestAnimationFrame(() => lbImage.classList.remove('is-switching'));
                }, 150);
            } else {
                applyContent();
            }
        };

        const openLightbox = (groupEl, clickedCard) => {
            const cards = Array.from(groupEl.querySelectorAll('[data-lightbox-item]'));
            if (!cards.length) return;

            activeGroupName = groupEl.getAttribute('data-lightbox-group') || 'GALLERY';
            activeItems = cards.map((card) => ({
                src: card.getAttribute('data-src') || '',
                title: card.getAttribute('data-title') || '',
                eyebrow: card.getAttribute('data-eyebrow') || activeGroupName,
                lead: card.getAttribute('data-lead') || '',
                subtitle: card.getAttribute('data-subtitle') || '',
                desc: card.getAttribute('data-desc') || '',
                actionUrl: card.getAttribute('data-action-url') || card.getAttribute('data-src') || '',
                actionLabel: card.getAttribute('data-action-label') || 'Open full image',
            }));
            activeIdx = Math.max(0, cards.indexOf(clickedCard));

            renderLightboxItem(false);
            lightbox.setAttribute('aria-hidden', 'false');
            lightbox.classList.add('is-open');
            document.body.classList.add('lightbox-open');
        };

        const closeLightbox = () => {
            lightbox.classList.remove('is-open');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('lightbox-open');
            setZoom(false);
        };

        const stepLightbox = (delta) => {
            if (activeItems.length <= 1) return;
            activeIdx = ((activeIdx + delta) % activeItems.length + activeItems.length) % activeItems.length;
            renderLightboxItem(true);
        };

        // Attach click & keyboard activation to all showcase groups
        document.querySelectorAll('[data-lightbox-group]').forEach((groupEl) => {
            groupEl.querySelectorAll('[data-lightbox-item]').forEach((card) => {
                card.addEventListener('click', () => {
                    if (groupEl.dataset.wasDragged === 'true') {
                        groupEl.dataset.wasDragged = 'false';
                        return;
                    }
                    openLightbox(groupEl, card);
                });

                card.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        openLightbox(groupEl, card);
                    }
                });
            });
        });

        lbClose?.addEventListener('click', closeLightbox);
        lbPrev?.addEventListener('click', () => stepLightbox(-1));
        lbNext?.addEventListener('click', () => stepLightbox(1));
        lbZoomBtn?.addEventListener('click', () => setZoom(!isZoomed));
        lbImage.addEventListener('click', () => setZoom(!isZoomed));

        lightbox.addEventListener('click', (event) => {
            if (event.target === lightbox) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (event) => {
            if (!lightbox.classList.contains('is-open')) return;
            if (event.key === 'Escape') closeLightbox();
            if (event.key === 'ArrowLeft') stepLightbox(-1);
            if (event.key === 'ArrowRight') stepLightbox(1);
        });
    }

    // 6. Contact form submission to Laravel backend (/contact -> noahdzakki12@gmail.com)
    const contactForm = document.getElementById('contact-form');
    const formFeedback = document.getElementById('contact-feedback');
    const submitBtn = document.getElementById('contact-submit');
    const messageTextarea = contactForm?.querySelector('textarea[name="message"]');

    if (messageTextarea) {
        const autoResize = () => {
            messageTextarea.style.height = 'auto';
            messageTextarea.style.height = `${messageTextarea.scrollHeight}px`;
        };
        messageTextarea.addEventListener('input', autoResize);
    }

    const showFeedback = (text, isError = false) => {
        if (!formFeedback) return;
        formFeedback.textContent = text;
        formFeedback.classList.remove('hidden', 'text-emerald-700', 'text-amber-700', 'text-red-600');
        formFeedback.classList.add(isError ? 'text-red-600' : 'text-emerald-700');
    };

    if (contactForm && formFeedback) {
        contactForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            const payload = {
                full_name: contactForm.querySelector('[name="full_name"]')?.value.trim() || '',
                email: contactForm.querySelector('[name="email"]')?.value.trim() || '',
                phone: contactForm.querySelector('[name="phone"]')?.value.trim() || '',
                subject: contactForm.querySelector('[name="subject"]')?.value.trim() || '',
                message: contactForm.querySelector('[name="message"]')?.value.trim() || '',
            };

            if (!payload.full_name || !payload.email || !payload.phone || !payload.subject || !payload.message) {
                showFeedback('Please fill in all fields before sending your message.', true);
                return;
            }

            const csrfToken =
                document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ||
                contactForm.querySelector('[name="_token"]')?.value ||
                '';

            const originalLabel = submitBtn?.textContent || 'Send Message';
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Sending...';
            }

            try {
                const response = await fetch(contactForm.action || '/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        Accept: 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify(payload),
                });

                const data = await response.json().catch(() => ({}));

                if (!response.ok) {
                    const firstError = data.errors ? Object.values(data.errors).flat()[0] : null;
                    showFeedback(firstError || data.message || 'Unable to send message. Please try again.', true);
                    return;
                }

                showFeedback(data.message || `Thanks, ${payload.full_name}! Your message has been sent.`, false);
                contactForm.reset();
                if (messageTextarea) {
                    messageTextarea.style.height = 'auto';
                }
            } catch {
                showFeedback('Network error. Please check your connection and try again.', true);
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalLabel;
                }
            }
        });
    }
});
