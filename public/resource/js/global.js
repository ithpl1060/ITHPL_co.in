/**
 * Main Application Controller
 * Orchestrates all UI interactions and animations.
 */
class AppController {
    constructor() {
        this.init();
    }

    init() {
        document.addEventListener('DOMContentLoaded', () => {
            
            this.initSmoothScroll();
            this.initStatCounters();
            this.initTimeline();
            this.initHorizontalScroll();
            this.initFadeAnimations();
            this.initFAQ();
            
            this.initCertificationsMarquee();
        });
    }

   

    /**
     * Smooth Scrolling for Anchor Links
     */
    initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = anchor.getAttribute('href');
                if (targetId === '#') return;

                const target = document.querySelector(targetId);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    
                    // Close mobile menu if open
                    if (this.closeMobileMenu) this.closeMobileMenu();
                }
            });
        });
    }

    /**
     * Animated Statistics Counters
     */
    initStatCounters() {
        const counters = document.querySelectorAll(".stat-number:not(.support-stat .stat-number)");
        if (!counters.length) return;

        const easeOutQuart = (t) => 1 - Math.pow(1 - t, 4);

        const animateCount = (counter) => {
            const target = +counter.getAttribute("data-target");
            const suffix = counter.textContent.includes('+') ? '+' : '';
            const duration = 2500;
            const startTime = performance.now();

            const updateCount = (currentTime) => {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                counter.innerText = Math.floor(easeOutQuart(progress) * target) + suffix;

                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = target + suffix;
                }
            };

            requestAnimationFrame(updateCount);
        };

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => animateCount(entry.target), 200);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3, rootMargin: '0px 0px -50px 0px' });

        counters.forEach(counter => observer.observe(counter));
    }

    /**
     * GSAP Timeline Animation
     */
    initTimeline() {
        const timeline = document.querySelector('.horizontal-scroll-content');
        const section = document.querySelector('.horizontal-scroll-section');
        
        // Ensure GSAP and ScrollTrigger are loaded
        if (!timeline || !section || typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

        const cards = gsap.utils.toArray('.milestone-card');
        
        // Main Scroll Tween
        const scrollTween = gsap.to(timeline, {
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

        // Touch Handling
        this._setupDragScroll(timeline);

        // Keyboard Navigation
        document.addEventListener('keydown', (e) => {
            const step = window.innerWidth / cards.length;
            if (e.key === 'ArrowRight') timeline.scrollBy({ left: step, behavior: 'smooth' });
            if (e.key === 'ArrowLeft') timeline.scrollBy({ left: -step, behavior: 'smooth' });
        });

        // Cleanup on page unload
        window.addEventListener('beforeunload', () => {
            ScrollTrigger.getAll().forEach(st => st.kill());
        });
    }

    /**
     * Helper for Drag/Touch Scrolling
     */
    _setupDragScroll(element) {
        let isDragging = false;
        let startX, scrollLeft;

        element.addEventListener('touchstart', (e) => {
            isDragging = true;
            startX = e.touches[0].pageX - element.offsetLeft;
            scrollLeft = element.scrollLeft;
            element.style.cursor = 'grabbing';
        }, { passive: true });

        element.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            const x = e.touches[0].pageX - element.offsetLeft;
            const walk = (startX - x);
            element.scrollLeft = scrollLeft - walk;
        }, { passive: true }); // Changed to true for better performance unless preventDefault is strictly needed

        element.addEventListener('touchend', () => {
            isDragging = false;
            element.style.cursor = 'grab';
        });
    }

    /**
     * Custom Wheel Scroll Logic for Horizontal Sections
     */
    initHorizontalScroll() {
        const scrollContainer = document.querySelector(".scroll-container");
        const scrollContent = document.querySelector(".horizontal-scroll-content");
        
        if (!scrollContainer || !scrollContent) return;

        const SCROLL_SPEED = 0.3;
        let isAtEdge = false;
        let edgeLockTimeout;

        scrollContainer.addEventListener("wheel", (e) => {
            if (e.deltaY === 0) return;

            // Check edge conditions to allow vertical scroll when content ends
            if (isAtEdge) {
                const atLeft = scrollContainer.scrollLeft <= 0;
                const atRight = scrollContainer.scrollLeft >= scrollContent.offsetWidth - scrollContainer.offsetWidth;
                if ((atLeft && e.deltaY < 0) || (atRight && e.deltaY > 0)) return;
            }

            e.preventDefault();
            scrollContainer.scrollBy({ left: e.deltaY * SCROLL_SPEED, behavior: "smooth" });
        }, { passive: false });

        // Edge detection
        scrollContainer.addEventListener("scroll", () => {
            clearTimeout(edgeLockTimeout);
            const atLeft = scrollContainer.scrollLeft <= 0;
            const atRight = scrollContainer.scrollLeft >= scrollContent.offsetWidth - scrollContainer.offsetWidth - 1;
            
            isAtEdge = atLeft || atRight;
            if (isAtEdge) {
                edgeLockTimeout = setTimeout(() => isAtEdge = false, 500);
            }
        });
    }

    /**
     * General Fade-In Animations
     */
    initFadeAnimations() {
        const sections = document.querySelectorAll(".fade-in-section");
        const benefitItems = document.querySelectorAll('.smartepp-benefit-item');
        
        const observerOptions = { threshold: 0.15, rootMargin: '0px 0px -50px 0px' };

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Add a small delay based on index if available (staggering)
                    const delay = entry.target.dataset.delay || 0;
                    setTimeout(() => {
                        entry.target.classList.add("visible", "is-visible", "animate");
                    }, delay);
                    obs.unobserve(entry.target);
                }
            });
        }, observerOptions);

        sections.forEach((s, i) => {
            s.dataset.delay = i * 120; // Stagger sections slightly
            observer.observe(s);
        });

        benefitItems.forEach((item, i) => {
            item.dataset.delay = i * 200; // Stagger benefits
            observer.observe(item);
        });
    }

    /**
     * FAQ Accordion
     */
    initFAQ() {
        // Using event delegation for better performance
        document.body.addEventListener('click', (e) => {
            const button = e.target.closest('[onclick^="toggleFaq"]');
            // If the user is using inline onclick="toggleFaq(1)", we can intercept or keep the inline.
            // However, a professional approach avoids inline JS. 
            // Assuming we replace inline handlers with data attributes: <button data-faq-trigger="1">
            
            const trigger = e.target.closest('[data-faq-trigger]');
            if (trigger) {
                const id = trigger.dataset.faqTrigger;
                this.toggleFaqItem(id);
            }
        });
        
        // Expose globally if legacy inline onclicks are used
        window.toggleFaq = (num) => this.toggleFaqItem(num);
    }

    toggleFaqItem(num) {
        const answer = document.getElementById(`answer-${num}`);
        const icon = document.getElementById(`icon-${num}`);
        if (!answer || !icon) return;

        const isHidden = answer.classList.contains('max-h-0');
        
        if (isHidden) {
            answer.classList.remove('max-h-0');
            answer.classList.add('max-h-96');
            icon.style.transform = 'rotate(180deg)';
        } else {
            answer.classList.remove('max-h-96');
            answer.classList.add('max-h-0');
            icon.style.transform = 'rotate(0deg)';
        }
    }

    
   
    /**
     * Infinite Marquee for Certifications
     */
    initCertificationsMarquee() {
        const track = document.getElementById("scrollTrack");
        const grid = document.querySelector(".certifications-grid");

        if (!track || !grid) return;

        // Only enable on desktop/larger screens
        if (window.innerWidth > 768) {
            const clone = grid.cloneNode(true);
            track.appendChild(clone);

            const gridWidth = grid.scrollWidth;
            // Adjust speed calculation as needed
            const speed = 0.009; 
            
            track.style.width = `${gridWidth * 2}px`;
            track.style.animationDuration = `${gridWidth * speed}s`;
        }
    }
}

// Initialize the application
new AppController();

// Manual Scroll Restoration Handling
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}
window.scrollTo(0, 0);


 
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

        
        document.addEventListener('click', function(event) {
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
            anchor.addEventListener('click', function(e) {
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


document.addEventListener("DOMContentLoaded", function() {
   
    // Function to close all submenus
    function closeAllSubmenus() {
        const submenus = document.querySelectorAll('.apple-submenu');
        
        submenus.forEach(menu => {
            menu.classList.add('hidden');
            // Force display none to ensure it's hidden
            menu.style.display = 'none';
        });
        
        document.querySelectorAll('.arrow').forEach(arrow => {
            arrow.classList.remove('rotate-180');
        });
    }

    // Function to open a specific submenu
    function openSubmenu(submenu, arrow) {
        submenu.classList.remove('hidden');
        // Force display block
        submenu.style.display = 'block';
        if (arrow) {
            arrow.classList.add('rotate-180');
        }
    }

    // Initialize - Close ALL submenus when page loads
    setTimeout(() => {
        closeAllSubmenus();
     
    }, 100);

    // Single event listener for all toggle buttons
    document.body.addEventListener('click', function(e) {
        const toggleBtn = e.target.closest('.arrow-btn');
        
        if (toggleBtn) {
            e.preventDefault();
            e.stopPropagation();
            
            // Find the parent container and then the submenu
            const menuContainer = toggleBtn.closest('.w-full.text-gray-600');
            const submenu = menuContainer ? document.getElementById('appleSubmenu') : null;
            const arrow = toggleBtn.querySelector('.arrow');
            
            
            if (submenu) {
                // Check if submenu is currently visible by checking computed style
                const isCurrentlyHidden = window.getComputedStyle(submenu).display === 'none';
              
                // Close all submenus first
                closeAllSubmenus();
                
                // If the clicked menu was hidden, open it
                if (isCurrentlyHidden) {
                
                    openSubmenu(submenu, arrow);
                } else {
                    
                }
            }
        } else {
            // Close menus when clicking outside
            if (!e.target.closest('.apple-submenu') && !e.target.closest('.arrow-btn')) {
                closeAllSubmenus();
            }
        }
    });
});
