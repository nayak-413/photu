document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
  const navbarCollapse = document.querySelector(".navbar-collapse");

  // Collapse mobile nav on link click
  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      if (navbarCollapse.classList.contains("show")) {
        new bootstrap.Collapse(navbarCollapse).toggle();
      }
    });
  });

  // AOS Init
  if (typeof AOS !== "undefined") {
    AOS.init({ duration: 800, once: true });
  }

  // Scroll-to-top button
  window.onscroll = function () {
    const btn = document.getElementById("scrollTopBtn");
    if (
      document.body.scrollTop > 100 ||
      document.documentElement.scrollTop > 100
    ) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  };

  // Scroll to top
  window.scrollToTop = function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };

  // Highlight based on current file path
  const currentPath = window.location.pathname.split("/").pop() || "index.html";
  let matched = false;

  navLinks.forEach((link) => {
    const href = link.getAttribute("href");
    if (!href || href.startsWith("#")) return;
    const fileName = href.split("/").pop();
    if (fileName === currentPath) {
      navLinks.forEach((l) => l.classList.remove("active"));
      link.classList.add("active");
      matched = true;
    }
  });

  // Default to HOME if on index.html
  if (!matched && currentPath === "index.html") {
    navLinks.forEach((link) => {
      if (link.getAttribute("href") === "#home") {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });

    // === Scroll-based section highlight ONLY on index.html ===
    const sections = document.querySelectorAll("section[id]");
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          const id = entry.target.id;
          const activeLink = document.querySelector(`.nav-link[href="#${id}"]`);
          if (entry.isIntersecting && activeLink) {
            navLinks.forEach((l) => l.classList.remove("active"));
            activeLink.classList.add("active");
          }
        });
      },
      {
        root: null,
        threshold: 0.6,
      }
    );

    sections.forEach((section) => observer.observe(section));
  }

  // FAQ Scroll Animation Logic (unchanged)
  const faqSection = document.getElementById("faq");
  const whySection = document.getElementById("why-choose-me");
  const teamSection = document.getElementById("team");

  if (faqSection) {
    const faqObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && entry.intersectionRatio >= 0.75) {
            faqSection.classList.add("visible");
            whySection?.classList.add("peek-slide-up");
            teamSection?.classList.add("peek-slide-down");
          } else {
            faqSection.classList.remove("visible");
            whySection?.classList.remove("peek-slide-up");
            teamSection?.classList.remove("peek-slide-down");
          }
        });
      },
      {
        root: null,
        threshold: 0.75,
      }
    );
    faqObserver.observe(faqSection);
  }

  // Carousel
  const heroCarousel = document.querySelector("#heroCarousel");
  if (heroCarousel) {
    new bootstrap.Carousel(heroCarousel, {
      interval: 4000,
      pause: false,
      ride: "carousel",
      wrap: true,
      touch: false,
    });
  }
});

// Always scroll to top on page load (including back/forward)
window.history.scrollRestoration = "manual";

// Also scroll to top on reload
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
};
