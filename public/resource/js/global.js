// Mobile menu toggle
function toggleMobileMenu() {
    const nav = document.getElementById('mobileNav');
    const spans = document.querySelector('.mobile-menu-toggle').querySelectorAll('span');
    
    nav.classList.toggle('hidden');
    
    const isHidden = nav.classList.contains('hidden');
    spans[0].style.transform = isHidden ? 'rotate(0) translate(0, 0)' : 'rotate(45deg) translate(5px, 5px)';
    spans[1].style.opacity = isHidden ? '1' : '0';
    spans[2].style.transform = isHidden ? 'rotate(0) translate(0, 0)' : 'rotate(-45deg) translate(7px, -6px)';
}

// Close mobile menu when clicking outside
document.addEventListener('click', e => {
    const nav = document.getElementById('mobileNav');
    const toggle = document.querySelector('.mobile-menu-toggle');
    
    if (!toggle.contains(e.target) && !nav.contains(e.target)) {
        nav.classList.add('hidden');
        const spans = toggle.querySelectorAll('span');
        spans.forEach((span, i) => {
            span.style.transform = 'rotate(0) translate(0, 0)';
            span.style.opacity = '1';
        });
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
        
        // Close mobile menu
        const nav = document.getElementById('mobileNav');
        nav.classList.add('hidden');
        const spans = document.querySelector('.mobile-menu-toggle').querySelectorAll('span');
        spans.forEach(span => {
            span.style.transform = 'rotate(0) translate(0, 0)';
            span.style.opacity = '1';
        });
    });
});

// Header scroll effect
let lastScrollY = window.scrollY;
window.addEventListener('scroll', () => {
    const header = document.querySelector('.site-header');
    const currentScrollY = window.scrollY;
    
    if (currentScrollY > 100) {
        header.style.background = 'rgba(255, 255, 255, 0.98)';
        header.style.boxShadow = '0 8px 32px rgba(0, 0, 0, 0.12)';
    } else {
        header.style.background = 'rgba(255, 255, 255, 0.95)';
        header.style.boxShadow = '0 4px 32px rgba(0, 0, 0, 0.08)';
    }
    lastScrollY = currentScrollY;
});

// Counter animation
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".stat-number");
    
    const animateCount = counter => {
        const target = +counter.getAttribute("data-target");
        const suffix = counter.textContent.includes('+') ? '+' : '';
        const prefix = counter.textContent.includes('/') ? '/' : '';
        
        const updateCount = () => {
            const current = +counter.innerText;
            const increment = Math.ceil(target / 50);
            
            if (current < target) {
                counter.innerText = current + increment;
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target + suffix + prefix;
            }
        };
        updateCount();
    };
    
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCount(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.6 });
    
    counters.forEach(counter => observer.observe(counter));
});

// Timeline functionality
document.addEventListener("DOMContentLoaded", () => {
    const timelineContainer = document.getElementById("timelineContainer");
    const milestoneCards = document.querySelectorAll(".milestone-card");
    const navDots = document.querySelectorAll(".nav-dot");
    
    const updateActiveDot = activeIndex => {
        navDots.forEach((dot, index) => {
            if (index === activeIndex) {
                dot.classList.add("active", "bg-white", "scale-125");
                dot.classList.remove("bg-white/30");
            } else {
                dot.classList.remove("active", "bg-white", "scale-125");
                dot.classList.add("bg-white/30");
            }
        });
    };
    
    // Smooth scrolling navigation
    navDots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            const targetCard = milestoneCards[index];
            const containerRect = timelineContainer.getBoundingClientRect();
            const cardRect = targetCard.getBoundingClientRect();
            
            const scrollLeft = timelineContainer.scrollLeft + cardRect.left - containerRect.left - containerRect.width / 2 + cardRect.width / 2;
            
            timelineContainer.scrollTo({ left: scrollLeft, behavior: "smooth" });
            updateActiveDot(index);
        });
    });
    
    // Scroll event listener
    let scrollTimeout;
    timelineContainer.addEventListener("scroll", () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            const containerRect = timelineContainer.getBoundingClientRect();
            const containerCenter = containerRect.left + containerRect.width / 2;
            
            let closestIndex = 0;
            let closestDistance = Infinity;
            
            milestoneCards.forEach((card, index) => {
                const cardRect = card.getBoundingClientRect();
                const cardCenter = cardRect.left + cardRect.width / 2;
                const distance = Math.abs(cardCenter - containerCenter);
                
                if (distance < closestDistance) {
                    closestDistance = distance;
                    closestIndex = index;
                }
            });
            
            updateActiveDot(closestIndex);
        }, 100);
    });
    
    // Auto-scroll to featured card
    setTimeout(() => {
        const featuredCard = document.querySelector(".milestone-card.featured");
        if (featuredCard) {
            const containerRect = timelineContainer.getBoundingClientRect();
            const cardRect = featuredCard.getBoundingClientRect();
            
            const scrollLeft = timelineContainer.scrollLeft + cardRect.left - containerRect.left - containerRect.width / 2 + cardRect.width / 2;
            
            timelineContainer.scrollTo({ left: scrollLeft, behavior: "smooth" });
            updateActiveDot(1);
        }
    }, 800);
    
    // Mouse drag scrolling
    let isDown = false, startX, scrollLeft;
    
    timelineContainer.addEventListener("mousedown", e => {
        isDown = true;
        startX = e.pageX - timelineContainer.offsetLeft;
        scrollLeft = timelineContainer.scrollLeft;
        timelineContainer.style.cursor = "grabbing";
    });
    
    timelineContainer.addEventListener("mouseleave", () => {
        isDown = false;
        timelineContainer.style.cursor = "grab";
    });
    
    timelineContainer.addEventListener("mouseup", () => {
        isDown = false;
        timelineContainer.style.cursor = "grab";
    });
    
    timelineContainer.addEventListener("mousemove", e => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - timelineContainer.offsetLeft;
        const walk = (x - startX) * 2;
        timelineContainer.scrollLeft = scrollLeft - walk;
    });
});

// Fade-in sections
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
    const slider = document.querySelector('.testimonial-card');
    const slides = document.querySelectorAll('.testimonial-card > div');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    
    let currentSlide = 0;
    const slideCount = slides.length;
    
    function updateSlider() {
      slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
    
    nextBtn.addEventListener('click', function() {
      currentSlide = (currentSlide + 1) % slideCount;
      updateSlider();
    });
    
    prevBtn.addEventListener('click', function() {
      currentSlide = (currentSlide - 1 + slideCount) % slideCount;
      updateSlider();
    });
    
    // Optional: Auto-advance slides every 5 seconds
    setInterval(() => {
      currentSlide = (currentSlide + 1) % slideCount;
      updateSlider();
    }, 5000);
  });