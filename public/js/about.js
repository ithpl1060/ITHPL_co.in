// Mobile Menu Toggle
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

// FAQ Toggle
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

// GSAP Horizontal Timeline Initialization
function initializeTimeline() {
  const timeline = document.querySelector('.horizontal-scroll-content');
  const section = document.querySelector('.horizontal-scroll-section');
  const cards = gsap.utils.toArray('.milestone-card');

  if (!cards.length) {
    console.warn("GSAP Timeline: No '.milestone-card' elements found.");
    return () => {};
  }

  const firstCardOffset = cards[0].offsetLeft;
  const lastCardOffset = cards[cards.length - 1].offsetLeft;
  const totalScrollDistance = lastCardOffset - firstCardOffset;

  let scrollTween = gsap.to(timeline, {
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

  // --- Fixed Touch Interaction ---
  let isDragging = false;
  let startX;
  let startScrollProgress;
  let scrollTriggerInstance = scrollTween.scrollTrigger;

  timeline.addEventListener('touchstart', (e) => {
    isDragging = true;
    startX = e.touches[0].pageX;
    startScrollProgress = scrollTriggerInstance.progress;
    timeline.style.cursor = 'grabbing';
  });

  timeline.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    
    const currentX = e.touches[0].pageX;
    const deltaX = startX - currentX;
    
    // Calculate new progress based on drag distance
    const dragPercentage = deltaX / window.innerWidth;
    let newProgress = startScrollProgress + dragPercentage;
    
    // Clamp between 0 and 1
    newProgress = Math.max(0, Math.min(1, newProgress));
    
    // Update ScrollTrigger progress directly
    scrollTriggerInstance.scroll(
      scrollTriggerInstance.start + (newProgress * (scrollTriggerInstance.end - scrollTriggerInstance.start))
    );
  });

  timeline.addEventListener('touchend', () => {
    isDragging = false;
    timeline.style.cursor = 'grab';
  });

  // --- Keyboard Navigation ---
  const keydownHandler = (e) => {
    if (e.key === 'ArrowRight') {
      const currentProgress = scrollTriggerInstance.progress;
      const step = 1 / (cards.length - 1);
      const newProgress = Math.min(1, currentProgress + step);
      gsap.to(window, {
        scrollTo: scrollTriggerInstance.start + (newProgress * (scrollTriggerInstance.end - scrollTriggerInstance.start)),
        duration: 0.5,
        ease: "power2.inOut"
      });
    } else if (e.key === 'ArrowLeft') {
      const currentProgress = scrollTriggerInstance.progress;
      const step = 1 / (cards.length - 1);
      const newProgress = Math.max(0, currentProgress - step);
      gsap.to(window, {
        scrollTo: scrollTriggerInstance.start + (newProgress * (scrollTriggerInstance.end - scrollTriggerInstance.start)),
        duration: 0.5,
        ease: "power2.inOut"
      });
    }
  };
  document.addEventListener('keydown', keydownHandler);

  const resizeHandler = () => {
    ScrollTrigger.refresh();
  };
  window.addEventListener('resize', resizeHandler);

  // Return cleanup function
  return () => {
    ScrollTrigger.getAll().forEach(st => st.kill());
    timeline.removeEventListener('touchstart', null);
    timeline.removeEventListener('touchmove', null);
    timeline.removeEventListener('touchend', null);
    document.removeEventListener('keydown', keydownHandler);
    window.removeEventListener('resize', resizeHandler);
  };
}

// --- Main DOMContentLoaded Event Listener ---
document.addEventListener('DOMContentLoaded', () => {
  // Register GSAP Plugins
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

  // Restore scroll position
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }
  window.scrollTo(0, 0);

  // --- Smooth Scroll for Anchor Links ---
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }

      // Close mobile nav on click
      const mobileNav = document.getElementById('mobileNav');
      if (mobileNav && mobileNav.classList.contains('active')) {
        toggleMobileMenu();
      }
    });
  });

  // --- Close Mobile Nav on Outside Click ---
  document.addEventListener('click', function (event) {
    const mobileNav = document.getElementById('mobileNav');
    const toggleButton = document.querySelector('.mobile-menu-toggle');
    
    if (mobileNav && mobileNav.classList.contains('active') && 
        !toggleButton.contains(event.target) && !mobileNav.contains(event.target)) {
      toggleMobileMenu();
    }
  });

  // --- Animated Number Counters ---
  const counters = document.querySelectorAll(".stat-number:not(.support-stat .stat-number)");
  const easeOutQuart = (t) => 1 - Math.pow(1 - t, 4);

  const animateCount = (counter) => {
    const target = +counter.getAttribute("data-target");
    const suffix = counter.textContent.includes('+') ? '+' : '';
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

  const counterObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          animateCount(entry.target);
        }, 200);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3, rootMargin: '0px 0px -50px 0px' });
  
  counters.forEach(counter => counterObserver.observe(counter));

  // --- Fade-in Sections ---
  const sections = document.querySelectorAll(".fade-in-section");
  const fadeInObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry, idx) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add("visible");
        }, idx * 120);
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.18 });
  
  sections.forEach(section => fadeInObserver.observe(section));

  // --- Testimonial Slider ---
  const cards = Array.from(document.querySelectorAll('.testimonial-card'));
  const dots = Array.from(document.querySelectorAll('.indicator-dot'));
  
  if (cards.length > 0 && dots.length > 0) {
    let currentIndex = 0;
    let previousIndex;

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

    function autoSlide() {
      currentIndex = (currentIndex + 1) % cards.length;
      updateSlider();
    }

    let autoSlideInterval = setInterval(autoSlide, 5000);

    const sliderContainer = document.querySelector('.testimonial-slider-container');
    sliderContainer.addEventListener('mouseenter', () => {
      clearInterval(autoSlideInterval);
    });
    sliderContainer.addEventListener('mouseleave', () => {
      autoSlideInterval = setInterval(autoSlide, 5000);
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

    updateSlider();
  }

  // --- Initialize GSAP Timeline ---
  Promise.all([
    document.fonts.ready,
    ...Array.from(document.images).map(img => {
      if (img.complete) return Promise.resolve();
      return new Promise(resolve => img.addEventListener('load', resolve));
    })
  ]).then(initializeTimeline);
});