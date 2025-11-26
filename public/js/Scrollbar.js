/**
 * Services Page JavaScript
 * Horizontal carousel for service cards
 * @requires global.js for shared utilities
 * @requires GSAP, ScrollTrigger
 * @author Professional Development Team
 */

// ============================================
// SERVICES HORIZONTAL CAROUSEL
// ============================================

/**
 * Initialize horizontal scrolling carousel for services
 */
function initializeCarousel() {
  // Register GSAP plugin
  gsap.registerPlugin(ScrollTrigger);

  const servicesContainer = document.getElementById("servicesContainer");
  const servicesSection = document.getElementById("services-section");
  const scrollHint = document.querySelector(".scroll-hint");
  const serviceCards = document.querySelectorAll(".service-card-s");
  
  if (!servicesContainer || !servicesSection || serviceCards.length === 0) return;

  // Calculate dimensions
  const totalCards = serviceCards.length;
  const cardWidth = serviceCards[0].getBoundingClientRect().width;
  const gap = 44;
  const containerPadding = 20;
  const totalWidth = (cardWidth + gap) * totalCards - gap + containerPadding * 2;
  const maxScroll = Math.max(0, totalWidth - window.innerWidth + 40);

  let hintHidden = false;
  let resizeTimeout;
  let horizontalTween;

  /**
   * Setup GSAP animations for horizontal scroll
   */
  function setupAnimations() {
    horizontalTween = gsap.to(servicesContainer, {
      x: () => -maxScroll,
      ease: "none",
      scrollTrigger: {
        trigger: servicesSection,
        start: "top top",
        end: () => `+=${maxScroll}`,
        pin: true,
        scrub: 1,
        invalidateOnResize: true,
        onUpdate: (self) => {
          if (scrollHint) {
            if (self.progress > 0.05 && !hintHidden) {
              hintHidden = true;
              gsap.to(scrollHint, { opacity: 0, duration: 0.3 });
            } else if (self.progress <= 0.05 && hintHidden) {
              hintHidden = false;
              gsap.to(scrollHint, { opacity: 1, duration: 0.3 });
            }
          }
        },
        onEnter: () => {
          if (scrollHint) gsap.to(scrollHint, { opacity: 1, duration: 0.3 });
        },
        onLeaveBack: () => {
          if (scrollHint) gsap.to(scrollHint, { opacity: 0, duration: 0.3 });
        },
      },
    });

    // Animate individual cards
    serviceCards.forEach((card, index) => {
      gsap.from(card, {
        opacity: 0,
        y: 50,
        duration: 0.5,
        delay: index * 0.05,
        scrollTrigger: {
          trigger: card,
          start: "left 90%",
          end: "left 20%",
          toggleActions: "play none none none",
          containerAnimation: horizontalTween,
        },
      });
    });

    // Setup interactions
    document.addEventListener("keydown", handleKeyNavigation);
    setupTouchEvents();
  }

  /**
   * Handle keyboard navigation (Arrow keys)
   * @param {KeyboardEvent} e - Keyboard event
   */
  function handleKeyNavigation(e) {
    if (e.key === "ArrowLeft" || e.key === "ArrowRight") {
      const currentProgress = horizontalTween.progress();
      const step = 1 / (totalCards - 1);
      
      const newProgress = e.key === "ArrowLeft"
        ? Math.max(0, currentProgress - step)
        : Math.min(1, currentProgress + step);

      const targetScroll = servicesSection.offsetTop + maxScroll * newProgress;
      
      gsap.to(window, {
        scrollTo: targetScroll,
        duration: 0.8,
        ease: "power2.inOut",
      });
    }
  }

  /**
   * Setup touch events for mobile swipe
   */
  function setupTouchEvents() {
    let startX = 0;
    let startY = 0;
    let isDragging = false;

    servicesContainer.addEventListener(
      "touchstart",
      (e) => {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
        isDragging = true;
      },
      { passive: true }
    );

    servicesContainer.addEventListener(
      "touchmove",
      (e) => {
        if (!isDragging) return;

        const currentX = e.touches[0].clientX;
        const currentY = e.touches[0].clientY;
        const deltaX = startX - currentX;
        const deltaY = startY - currentY;

        // Only handle horizontal swipes
        if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 10) {
          e.preventDefault();

          const currentScroll = window.scrollY;
          const newScroll = currentScroll + deltaX * 2;
          const maxScrollValue = servicesSection.offsetTop + maxScroll;

          window.scrollTo(
            0,
            Math.max(
              servicesSection.offsetTop,
              Math.min(maxScrollValue, newScroll)
            )
          );

          startX = currentX;
          startY = currentY;
        }
      },
      { passive: false }
    );

    servicesContainer.addEventListener(
      "touchend",
      () => {
        isDragging = false;
      },
      { passive: true }
    );
  }

  /**
   * Handle window resize with debounce
   */
  function handleResize() {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      ScrollTrigger.refresh();
    }, 200);
  }

  /**
   * Cleanup function
   */
  function cleanup() {
    ScrollTrigger.getAll().forEach((st) => st.kill());
    document.removeEventListener("keydown", handleKeyNavigation);
    window.removeEventListener("resize", handleResize);
  }

  // Event listeners
  window.addEventListener("resize", handleResize);
  window.addEventListener("beforeunload", cleanup);

  // Initialize
  setupAnimations();
}

// ============================================
// INITIALIZATION
// ============================================

document.addEventListener("DOMContentLoaded", () => {
  // Wait for fonts to load before initializing carousel
  document.fonts.ready.then(initializeCarousel);
});
