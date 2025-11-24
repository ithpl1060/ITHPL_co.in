 

 
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
       const walk = (startX - x); 
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

document.addEventListener("DOMContentLoaded", () => {
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }
  window.scrollTo(0, 0);
});


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

  document.addEventListener('DOMContentLoaded', function() {
        
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

  
      });


    //   for faq section
         function toggleFaq(num) {
    const answer = document.getElementById(`answer-${num}`);
    const icon = document.getElementById(`icon-${num}`);
    
    if (answer.classList.contains('max-h-0')) {
        answer.classList.remove('max-h-0');
        answer.classList.add('max-h-96');
        icon.style.transform = 'rotate(180deg)';
    } else {
        answer.classList.remove('max-h-96');
        answer.classList.add('max-h-0');
        icon.style.transform = 'rotate(0deg)';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const appleToggle = document.querySelector('.tj8p3q_apple_toggle_btn');
    
    if (appleToggle) {
        appleToggle.addEventListener('click', function() {
            const submenu = this.nextElementSibling;
            const isActive = this.classList.contains('ql6h4k_active');
            
            if (isActive) {
                this.classList.remove('ql6h4k_active');
                submenu.classList.remove('zm9n2p_show');
            } else {
                this.classList.add('ql6h4k_active');
                submenu.classList.add('zm9n2p_show');
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
  const toggleBtn = document.querySelector(".arrow-btn");
  const submenu = document.getElementById("appleSubmenu");
  const arrow = document.querySelector(".arrow");

  if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
      submenu.classList.toggle("hidden");
      arrow.classList.toggle("rotate");
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("scrollTrack");
  const grid = document.getElementById("certGrid");

  // Stop execution if elements are missing (other pages)
  if (!track || !grid) return;

  // Clone grid for seamless scroll
  const clone = grid.cloneNode(true);
  track.appendChild(clone);

  // Get grid width
  const gridWidth = grid.offsetWidth;

  // Speed multiplier
  const speedPerPixel = 0.01;
  const duration = gridWidth * speedPerPixel;

  // Apply dynamic values
  track.style.animationDuration = duration + "s";
  track.style.width = gridWidth * 2 + "px";
});
