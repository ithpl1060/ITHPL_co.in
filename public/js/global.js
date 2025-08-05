


function toggleMobileMenu() {
    const mobileNav = document.getElementById('mobileNav');
    const toggleButton = document.querySelector('.mobile-menu-toggle');

    mobileNav.classList.toggle('active');



    const spans = toggleButton.querySelectorAll('span');
    if (mobileNav.classList.contains('active')) {
        spans[0].style.transform = 'translateY(8px) rotate(45deg)';
        spans[1].style.opacity = '0';
        spans[2].style.transform = 'translateY(-8px) rotate(-45deg)';
    } else {
        spans[0].style.transform = 'none';
        spans[1].style.opacity = '1';
        spans[2].style.transform = 'none';
    }
}


document.addEventListener('click', function (event) {
    const mobileNav = document.getElementById('mobileNav');
    const toggleButton = document.querySelector('.mobile-menu-toggle');

    if (!toggleButton.contains(event.target) && !mobileNav.contains(event.target)) {
        mobileNav.classList.remove('active');


        const spans = toggleButton.querySelectorAll('span');
        spans[0].style.transform = 'none';
        spans[1].style.opacity = '1';
        spans[2].style.transform = 'none';
    }
});


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }


        const mobileNav = document.getElementById('mobileNav');
        mobileNav.classList.remove('active');


        const spans = document.querySelector('.mobile-menu-toggle').querySelectorAll('span');
        spans[0].style.transform = 'none';
        spans[1].style.opacity = '1';
        spans[2].style.transform = 'none';
    });
});






document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }


        const nav = document.getElementById('mobileNav');
        nav.classList.add('hidden');
        const spans = document.querySelector('.mobile-menu-toggle').querySelectorAll('span');
        spans.forEach(span => {
            span.style.transform = 'rotate(0) translate(0, 0)';
            span.style.opacity = '1';
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".stat-number:not(.support-stat .stat-number)");

    const easeOutQuart = (t) => 1 - Math.pow(1 - t, 4);

    const animateCount = (counter) => {
        const target = +counter.getAttribute("data-target");
        const suffix = counter.textContent.includes('+') ? '+' : '';

        let startValue = 0;
        const duration = 2500;
        const startTime = performance.now();

        const updateCount = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easedProgress = easeOutQuart(progress);

            const currentValue = Math.floor(easedProgress * target);
            counter.innerText = currentValue + suffix;

            if (progress < 1) {
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target + suffix;
            }
        };

        requestAnimationFrame(updateCount);
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    animateCount(entry.target);
                }, 200);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    });

    counters.forEach(counter => observer.observe(counter));
});


document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);


    Promise.all([
        document.fonts.ready,
        ...Array.from(document.images).map(img => {
            if (img.complete) return Promise.resolve();
            return new Promise(resolve => img.addEventListener('load', resolve));
        })
    ]).then(initializeTimeline);
});

function initializeTimeline() {
    const timeline = document.querySelector('.horizontal-scroll-content');
    const section = document.querySelector('.horizontal-scroll-section');
    const cards = gsap.utils.toArray('.milestone-card');


    let scrollTween = gsap.to(timeline, {
        x: () => -(timeline.scrollWidth - window.innerWidth),
        ease: "none",
        scrollTrigger: {
            trigger: section,
            pin: true,
            scrub: 1,
            start: "top top",
            end: () => `+=${timeline.scrollWidth - window.innerWidth}`,
            invalidateOnRefresh: true,
            anticipatePin: 1,
            snap: {
                snapTo: 1 / (cards.length - 1),
                duration: { min: 0.2, max: 0.6 },
                ease: "power1.inOut"
            }
        }
    });


    let isDragging = false;
    let startX;
    let scrollLeft;

    timeline.addEventListener('touchstart', (e) => {
        isDragging = true;
        startX = e.touches[0].pageX - timeline.offsetLeft;
        scrollLeft = timeline.scrollLeft;
        timeline.style.cursor = 'grabbing';
    });

    timeline.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
        const x = e.touches[0].pageX - timeline.offsetLeft;
        const walk = (x - startX) * 2;
        timeline.scrollLeft = scrollLeft - walk;
    });

    timeline.addEventListener('touchend', () => {
        isDragging = false;
        timeline.style.cursor = 'grab';
    });


    document.addEventListener('keydown', (e) => {
        const step = window.innerWidth / cards.length;
        if (e.key === 'ArrowRight') {
            timeline.scrollBy({ left: step, behavior: 'smooth' });
        } else if (e.key === 'ArrowLeft') {
            timeline.scrollBy({ left: -step, behavior: 'smooth' });
        }
    });


    window.addEventListener('resize', () => {
        ScrollTrigger.refresh();
    });


    return () => {
        ScrollTrigger.getAll().forEach(st => st.kill());
        timeline.removeEventListener('touchstart', null);
        timeline.removeEventListener('touchmove', null);
        timeline.removeEventListener('touchend', null);
        document.removeEventListener('keydown', null);
        window.removeEventListener('resize', null);
    };


    const cardWidth = milestoneCards[0].getBoundingClientRect().width;
    const gap = 32;
    const containerPadding = 64;
    const totalWidth = (cardWidth + gap) * totalCards - gap + (containerPadding * 2);
    const maxScroll = Math.max(0, totalWidth - window.innerWidth + (window.innerWidth * 0.1));


    let hintHidden = false;
    let resizeTimeout;
    let horizontalTween;


    function setupAnimations() {

        horizontalTween = gsap.to(timelineContent, {
            x: () => -maxScroll,
            ease: "none",
            scrollTrigger: {
                trigger: timelineSection,
                start: "top top",
                end: () => `+=${maxScroll}`,
                pin: true,
                scrub: 1,
                invalidateOnResize: true,
                onUpdate: (self) => {
                    if (self.progress > 0.05 && !hintHidden) {
                        hintHidden = true;
                        gsap.to(scrollHint, { opacity: 0, duration: 0.3 });
                    } else if (self.progress <= 0.05 && hintHidden) {
                        hintHidden = false;
                        gsap.to(scrollHint, { opacity: 1, duration: 0.3 });
                    }
                },
                onEnter: () => {
                    gsap.to(scrollHint, { opacity: 1, duration: 0.3 });
                },
                onLeaveBack: () => {
                    gsap.to(scrollHint, { opacity: 0, duration: 0.3 });
                }
            }
        });


        document.addEventListener('keydown', handleKeyNavigation);
        setupTouchEvents();
    }


    function handleKeyNavigation(e) {
        if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
            const currentProgress = horizontalTween.progress();
            const step = 1 / (totalCards - 1);
            let newProgress;

            if (e.key === 'ArrowLeft') {
                newProgress = Math.max(0, currentProgress - step);
            } else {
                newProgress = Math.min(1, currentProgress + step);
            }

            const targetScroll = timelineSection.offsetTop + (maxScroll * newProgress);
            gsap.to(window, {
                scrollTo: targetScroll,
                duration: 0.8,
                ease: "power2.inOut"
            });
        }
    }


    function setupTouchEvents() {
        let startX = 0;
        let startY = 0;
        let isDragging = false;

        timelineContent.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
            isDragging = true;
        }, { passive: true });

        timelineContent.addEventListener('touchmove', (e) => {
            if (!isDragging) return;

            const currentX = e.touches[0].clientX;
            const currentY = e.touches[0].clientY;
            const deltaX = startX - currentX;
            const deltaY = startY - currentY;

            if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 10) {
                e.preventDefault();

                const currentScroll = window.scrollY;
                const newScroll = currentScroll + (deltaX * 2);
                const maxScrollValue = timelineSection.offsetTop + maxScroll;

                window.scrollTo(0, Math.max(timelineSection.offsetTop, Math.min(maxScrollValue, newScroll)));

                startX = currentX;
                startY = currentY;
            }
        }, { passive: false });

        timelineContent.addEventListener('touchend', () => {
            isDragging = false;
        }, { passive: true });
    }


    function handleResize() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            ScrollTrigger.refresh();
        }, 200);
    }


    function cleanup() {
        ScrollTrigger.getAll().forEach(st => st.kill());
        document.removeEventListener('keydown', handleKeyNavigation);
        window.removeEventListener('resize', handleResize);
    }


    window.addEventListener('resize', handleResize);
    window.addEventListener('beforeunload', cleanup);


    setupAnimations();
}


function initWheelScroll() {
    const scrollContainer = document.querySelector(".scroll-container");
    const scrollContent = document.querySelector(".horizontal-scroll-content");
    let isAtEdge = false;
    let edgeLockTimeout;


    const SCROLL_SPEED = 0.3;
    const TOUCH_SCROLL_FACTOR = 0.6;
    const KEYBOARD_SCROLL_STEP = 200;
    const EDGE_LOCK_DURATION = 500;


    scrollContainer.addEventListener("wheel", function (e) {
        if (e.deltaY === 0) return;

        const delta = e.deltaY * SCROLL_SPEED;

        e.preventDefault();


        if (isAtEdge) {
            const atLeftEdge = scrollContainer.scrollLeft <= 0;
            const atRightEdge = scrollContainer.scrollLeft >= scrollContent.offsetWidth - scrollContainer.offsetWidth;
            if ((atLeftEdge && delta < 0) || (atRightEdge && delta > 0)) return;
        }

        scrollContainer.scrollBy({
            left: delta,
            behavior: "smooth",
        });
    }, { passive: false });


    let isDragging = false;
    let startX, startScrollLeft;

    scrollContainer.addEventListener("touchstart", function (e) {
        isDragging = true;
        startX = e.touches[0].pageX - scrollContainer.offsetLeft;
        startScrollLeft = scrollContainer.scrollLeft;

        scrollContainer.style.cursor = 'grabbing';
        scrollContainer.style.userSelect = 'none';
    }, { passive: true });

    scrollContainer.addEventListener("touchmove", function (e) {
        if (!isDragging) return;
        e.preventDefault();

        const x = e.touches[0].pageX - scrollContainer.offsetLeft;
        const walk = (x - startX) * TOUCH_SCROLL_FACTOR;
        scrollContainer.scrollLeft = startScrollLeft - walk;
    }, { passive: false });

    scrollContainer.addEventListener("touchend", function () {
        isDragging = false;
        scrollContainer.style.cursor = 'grab';
        scrollContainer.style.removeProperty('user-select');
    });


    document.addEventListener("keydown", function (e) {
        if (["ArrowRight", "ArrowDown"].includes(e.key)) {
            scrollContainer.scrollBy({ left: KEYBOARD_SCROLL_STEP, behavior: "smooth" });
        } else if (["ArrowLeft", "ArrowUp"].includes(e.key)) {
            scrollContainer.scrollBy({ left: -KEYBOARD_SCROLL_STEP, behavior: "smooth" });
        }
    });


    scrollContainer.addEventListener("scroll", function () {
        clearTimeout(edgeLockTimeout);

        const atLeftEdge = scrollContainer.scrollLeft <= 0;
        const atRightEdge = scrollContainer.scrollLeft >= scrollContent.offsetWidth - scrollContainer.offsetWidth - 1;

        isAtEdge = atLeftEdge || atRightEdge;

        if (isAtEdge) {
            edgeLockTimeout = setTimeout(() => {
                isAtEdge = false;
            }, EDGE_LOCK_DURATION);
        }
    });


    ScrollTrigger.refresh();
};

(() => {
    const sections = document.querySelectorAll(".fade-in-section");
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry, idx) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add("visible");
                }, idx * 120);
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.18 });

    sections.forEach(section => observer.observe(section));
})();

document.addEventListener('DOMContentLoaded', function () {

    const fadeInSections = document.querySelectorAll('.fade-in-section');

    const fadeInObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { threshold: 0.1 });

    fadeInSections.forEach(section => {
        fadeInObserver.observe(section);
    });


    const cardsContainer = document.querySelector('.testimonial-cards');
    const cards = Array.from(document.querySelectorAll('.testimonial-card'));
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const dots = Array.from(document.querySelectorAll('.indicator-dot'));

    let currentIndex = 0;

    function updateSlider() {

        cards.forEach(card => {
            card.classList.remove(
                'testimonial-card--current',
                'testimonial-card--next',
                'testimonial-card--out'
            );
        });


        cards[currentIndex].classList.add('testimonial-card--current');


        const nextIndex = (currentIndex + 1) % cards.length;
        cards[nextIndex].classList.add('testimonial-card--next');


        if (this.previousIndex !== undefined) {
            cards[this.previousIndex].classList.add('testimonial-card--out');
        }

        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });


        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === cards.length - 1;


        this.previousIndex = currentIndex;
    }


    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % cards.length;
        updateSlider();
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + cards.length) % cards.length;
        updateSlider();
    });

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            const targetIndex = parseInt(dot.getAttribute('data-index'));
            if (targetIndex !== currentIndex) {
                currentIndex = targetIndex;
                updateSlider();
            }
        });
    });


    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevBtn.click();
        } else if (e.key === 'ArrowRight') {
            nextBtn.click();
        }
    });

    updateSlider();



    let autoSlideInterval = setInterval(() => {
        nextBtn.click();
    }, 5000);


    const sliderContainer = document.querySelector('.testimonial-slider-container');
    sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });

    sliderContainer.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(() => {
            nextBtn.click();
        }, 5000);
    });


    cards.forEach(card => {
        card.addEventListener('click', () => {
            if (!card.classList.contains('testimonial-card--current')) {
                return;
            }
            nextBtn.click();
        });
    });
});

