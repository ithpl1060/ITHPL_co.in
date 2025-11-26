/**
 * About Us Page JavaScript
 * Page-specific features: GSAP Timeline and Testimonial Slider
 * @requires global.js for shared utilities
 * @requires GSAP, ScrollTrigger, ScrollToPlugin
 * @author Professional Development Team
 */

// ============================================
// GSAP HORIZONTAL TIMELINE (Milestone Cards)
// ============================================

/**
 * Initialize GSAP horizontal timeline for milestone cards
 * @returns {Function} Cleanup function
 */
function initializeTimeline() {
  const timeline = document.querySelector('.horizontal-scroll-content');
  const section = document.querySelector('.horizontal-scroll-section');
  const cards = gsap.utils.toArray('.milestone-card');

  if (!timeline || !section || cards.length === 0) {
    return () => {};
  }

  // Calculate scroll distance
  const timelineWidth = timeline.scrollWidth;
  const viewportWidth = window.innerWidth;
  const totalScrollDistance = timelineWidth - viewportWidth + 40;

  // Create scroll animation
  const scrollTween = gsap.to(timeline, {
    x: () => -totalScrollDistance,
    ease: "none",
    scrollTrigger: {
      trigger: section,
      pin: true,
      scrub: 1,
      start: "top top",
      end: () => `+=${totalScrollDistance}`,
      invalidateOnRefresh: true,
      anticipatePin: 1,
      snap: {
        snapTo: 1 / (cards.length - 1),
        duration: { min: 0.2, max: 0.6 },
        ease: "power1.inOut"
      }
    }
  });

  const scrollTriggerInstance = scrollTween.scrollTrigger;

  // Touch interaction
  let isDragging = false;
  let startX, startScrollProgress;

  const handleTouchStart = (e) => {
    isDragging = true;
    startX = e.touches[0].pageX;
    startScrollProgress = scrollTriggerInstance.progress;
    timeline.style.cursor = 'grabbing';
  };

  const handleTouchMove = (e) => {
    if (!isDragging) return;
    
    const currentX = e.touches[0].pageX;
    const deltaX = startX - currentX;
    const dragPercentage = deltaX / window.innerWidth;
    let newProgress = startScrollProgress + dragPercentage;
    
    newProgress = Math.max(0, Math.min(1, newProgress));
    
    scrollTriggerInstance.scroll(
      scrollTriggerInstance.start + (newProgress * (scrollTriggerInstance.end - scrollTriggerInstance.start))
    );
  };

  const handleTouchEnd = () => {
    isDragging = false;
    timeline.style.cursor = 'grab';
  };

  timeline.addEventListener('touchstart', handleTouchStart, { passive: true });
  timeline.addEventListener('touchmove', handleTouchMove, { passive: false });
  timeline.addEventListener('touchend', handleTouchEnd, { passive: true });

  // Keyboard navigation
  const handleKeydown = (e) => {
    if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
      const currentProgress = scrollTriggerInstance.progress;
      const step = 1 / (cards.length - 1);
      const newProgress = e.key === 'ArrowRight' 
        ? Math.min(1, currentProgress + step)
        : Math.max(0, currentProgress - step);

      gsap.to(window, {
        scrollTo: scrollTriggerInstance.start + (newProgress * (scrollTriggerInstance.end - scrollTriggerInstance.start)),
        duration: 0.5,
        ease: "power2.inOut"
      });
    }
  };

  document.addEventListener('keydown', handleKeydown);

  // Resize handler
  const handleResize = () => ScrollTrigger.refresh();
  window.addEventListener('resize', handleResize);

  // Cleanup function
  return () => {
    ScrollTrigger.getAll().forEach(st => st.kill());
    timeline.removeEventListener('touchstart', handleTouchStart);
    timeline.removeEventListener('touchmove', handleTouchMove);
    timeline.removeEventListener('touchend', handleTouchEnd);
    document.removeEventListener('keydown', handleKeydown);
    window.removeEventListener('resize', handleResize);
  };
}

// ============================================
// TESTIMONIAL SLIDER
// ============================================

/**
 * Initialize testimonial slider with auto-rotation
 */
function initTestimonialSlider() {
  const cards = Array.from(document.querySelectorAll('.testimonial-card'));
  const dots = Array.from(document.querySelectorAll('.indicator-dot'));
  
  if (cards.length === 0 || dots.length === 0) return;

  let currentIndex = 0;
  let previousIndex;
  let autoSlideInterval;

  /**
   * Update slider to show current card
   */
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
    
    if (previousIndex !== undefined) {
      cards[previousIndex].classList.add('testimonial-card--out');
    }

    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === currentIndex);
    });

    previousIndex = currentIndex;
  }

  /**
   * Auto-advance to next slide
   */
  function autoSlide() {
    currentIndex = (currentIndex + 1) % cards.length;
    updateSlider();
  }

  // Start auto-rotation
  autoSlideInterval = setInterval(autoSlide, 5000);

  // Pause on hover
  const sliderContainer = document.querySelector('.testimonial-slider-container');
  if (sliderContainer) {
    sliderContainer.addEventListener('mouseenter', () => {
      clearInterval(autoSlideInterval);
    });
    
    sliderContainer.addEventListener('mouseleave', () => {
      autoSlideInterval = setInterval(autoSlide, 5000);
    });
  }

  // Manual navigation via dots
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      const targetIndex = parseInt(dot.getAttribute('data-index'));
      if (targetIndex !== currentIndex) {
        currentIndex = targetIndex;
        updateSlider();
      }
    });
  });

  // Initialize
  updateSlider();
}

// ============================================
// INITIALIZATION
// ============================================

document.addEventListener('DOMContentLoaded', () => {
  // Register GSAP plugins
  if (typeof gsap !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
  }

  // Initialize testimonial slider immediately
  initTestimonialSlider();

  // Initialize GSAP timeline after fonts and images load
  Promise.all([
    document.fonts.ready,
    ...Array.from(document.images).map(img => {
      if (img.complete) return Promise.resolve();
      return new Promise(resolve => img.addEventListener('load', resolve));
    })
  ]).then(initializeTimeline);
});