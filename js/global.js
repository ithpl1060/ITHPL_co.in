/**
 * Global JavaScript for ithpl.com
 * Shared utilities and common functionality across all pages
 * @author Professional Development Team
 */

// ============================================
// UTILITY FUNCTIONS
// ============================================

/**
 * Easing function for smooth animations
 * @param {number} t - Progress value (0-1)
 * @returns {number} Eased value
 */
const easeOutQuart = (t) => 1 - Math.pow(1 - t, 4);

// ============================================
// UI COMPONENTS
// ============================================

/**
 * Toggle mobile navigation menu
 * Handles hamburger animation and menu visibility
 */
function toggleMobileMenu() {
  const mobileNav = document.getElementById('mobileNav');
  const toggleButton = document.querySelector('.mobile-menu-toggle');
  
  if (!mobileNav || !toggleButton) return;

  mobileNav.classList.toggle('active');
  
  const spans = toggleButton.querySelectorAll('span');
  const isActive = mobileNav.classList.contains('active');
  
  spans[0].style.transform = isActive ? 'translateY(8px) rotate(45deg)' : 'none';
  spans[1].style.opacity = isActive ? '0' : '1';
  spans[2].style.transform = isActive ? 'translateY(-8px) rotate(-45deg)' : 'none';
}

/**
 * Toggle FAQ accordion
 * @param {number} num - FAQ item number
 */
function toggleFaq(num) {
  const answer = document.getElementById(`answer-${num}`);
  const icon = document.getElementById(`icon-${num}`);
  
  if (!answer || !icon) return;

  const isOpen = !answer.classList.contains('max-h-0');
  
  answer.classList.toggle('max-h-0', isOpen);
  answer.classList.toggle('max-h-96', !isOpen);
  icon.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
}

// ============================================
// OBSERVERS & ANIMATIONS
// ============================================

/**
 * Initialize animated number counters
 * Uses IntersectionObserver for performance
 */
function initAnimatedCounters() {
  const counters = document.querySelectorAll(".stat-number:not(.support-stat .stat-number)");
  if (counters.length === 0) return;

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
  
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          setTimeout(() => animateCount(entry.target), 200);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.3, rootMargin: '0px 0px -50px 0px' }
  );
  
  counters.forEach(counter => observer.observe(counter));
}

/**
 * Initialize fade-in sections
 * Uses IntersectionObserver for performance
 */
function initFadeInSections() {
  const sections = document.querySelectorAll(".fade-in-section");
  if (sections.length === 0) return;

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add("visible", "is-visible");
          }, idx * 120);
          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 }
  );
  
  sections.forEach(section => observer.observe(section));
}

// ============================================
// NAVIGATION & SCROLLING
// ============================================

/**
 * Initialize smooth scroll for anchor links
 */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      
      if (targetId === '#' || !targetId) return;
      
      const target = document.querySelector(targetId);
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
      
      // Close mobile menu if open
      const mobileNav = document.getElementById('mobileNav');
      if (mobileNav?.classList.contains('active')) {
        toggleMobileMenu();
      }
    });
  });
}

/**
 * Close mobile menu when clicking outside
 */
function initMobileMenuOutsideClick() {
  document.addEventListener('click', function(event) {
    const mobileNav = document.getElementById('mobileNav');
    const toggleButton = document.querySelector('.mobile-menu-toggle');
    
    if (mobileNav && toggleButton && 
        !toggleButton.contains(event.target) && 
        !mobileNav.contains(event.target) && 
        mobileNav.classList.contains('active')) {
      toggleMobileMenu();
    }
  });
}

// ============================================
// PAGE-SPECIFIC FEATURES
// ============================================

/**
 * Initialize Apple submenu toggles
 */
function initAppleSubmenus() {
  const appleToggle = document.querySelector('.tj8p3q_apple_toggle_btn');
  if (appleToggle) {
    appleToggle.addEventListener('click', function() {
      const submenu = this.nextElementSibling;
      this.classList.toggle('ql6h4k_active');
      submenu.classList.toggle('zm9n2p_show');
    });
  }

  const arrowBtn = document.querySelector(".arrow-btn");
  if (arrowBtn) {
    const submenu = document.getElementById("appleSubmenu");
    const arrow = document.querySelector(".arrow");
    arrowBtn.addEventListener("click", () => {
      submenu?.classList.toggle("hidden");
      arrow?.classList.toggle("rotate");
    });
  }
}

/**
 * Initialize certifications infinite scroll
 */
function initCertificationsScroll() {
  const track = document.getElementById("scrollTrack");
  const grid = document.getElementById("certGrid");
  
  if (!track || !grid) return;
  
  // Read layout dimensions before DOM mutation to eliminate forced reflow
  const gridWidth = grid.offsetWidth;
  const speedPerPixel = 0.01;
  const duration = gridWidth * speedPerPixel;
  
  const clone = grid.cloneNode(true);
  track.appendChild(clone);
  
  track.style.animationDuration = duration + "s";
  track.style.width = gridWidth * 2 + "px";
}

// ============================================
// INITIALIZATION
// ============================================

document.addEventListener("DOMContentLoaded", () => {
  // Scroll restoration
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }
  
  // Only scroll to top if not a hash link
  if (!window.location.hash) {
    window.scrollTo(0, 0);
  }

  // Initialize all features
  initSmoothScroll();
  initMobileMenuOutsideClick();
  initAnimatedCounters();
  initFadeInSections();
  initAppleSubmenus();
  initCertificationsScroll();
});
