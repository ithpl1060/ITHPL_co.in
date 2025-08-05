document.addEventListener("DOMContentLoaded", () => {
  const fadeInSections = document.querySelectorAll(".fade-in-section");
  const observerOptions = {
    threshold: 0.15,
    rootMargin: "0px",
  };

  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        sectionObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  fadeInSections.forEach((section) => {
    sectionObserver.observe(section);
  });

  document.fonts.ready.then(() => {
    initializeCarousel();
  });
});

function initializeCarousel() {
  gsap.registerPlugin(ScrollTrigger);

  const servicesContainer = document.getElementById("servicesContainer");
  const servicesSection = document.getElementById("services-section");
  const scrollHint = document.querySelector(".scroll-hint");
  const serviceCards = document.querySelectorAll(".service-card-s");
  const totalCards = serviceCards.length;

  const cardWidth = serviceCards[0].getBoundingClientRect().width;
  const gap = 44;
  const containerPadding = 20;
  const totalWidth =
    (cardWidth + gap) * totalCards - gap + containerPadding * 2;
  const maxScroll = Math.max(
    0,
    totalWidth - window.innerWidth + window.innerWidth * 0.1
  );

  let hintHidden = false;
  let resizeTimeout;
  let horizontalTween;

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
        },
      },
    });

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

    document.addEventListener("keydown", handleKeyNavigation);

    setupTouchEvents();
  }

  function handleKeyNavigation(e) {
    if (e.key === "ArrowLeft" || e.key === "ArrowRight") {
      const currentProgress = horizontalTween.progress();
      const step = 1 / (totalCards - 1);
      let newProgress;

      if (e.key === "ArrowLeft") {
        newProgress = Math.max(0, currentProgress - step);
      } else {
        newProgress = Math.min(1, currentProgress + step);
      }

      const targetScroll = servicesSection.offsetTop + maxScroll * newProgress;
      gsap.to(window, {
        scrollTo: targetScroll,
        duration: 0.8,
        ease: "power2.inOut",
      });
    }
  }

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

  function handleResize() {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      ScrollTrigger.refresh();
    }, 200);
  }

  function cleanup() {
    ScrollTrigger.getAll().forEach((st) => st.kill());
    document.removeEventListener("keydown", handleKeyNavigation);
    window.removeEventListener("resize", handleResize);
  }

  window.addEventListener("resize", handleResize);
  window.addEventListener("beforeunload", cleanup);

  setupAnimations();
}
