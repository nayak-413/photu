document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
  const navbarCollapse = document.querySelector(".navbar-collapse");

  // Collapse navbar on mobile when link clicked
  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      if (navbarCollapse.classList.contains("show")) {
        new bootstrap.Collapse(navbarCollapse).toggle();
      }
    });
  });

  // AOS Init
  if (typeof AOS !== "undefined") {
    AOS.init({
      duration: 800,
      easing: "ease-in-out",
      once: true,
    });
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

  window.scrollToTop = function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };

  // Detect active tab based on page
  const currentPath = window.location.pathname.split("/").pop() || "index.html";
  let hasPageMatch = false;

  navLinks.forEach((link) => {
    const href = link.getAttribute("href");
    if (!href || href.startsWith("#")) return;
    const hrefFile = href.split("/").pop();

    if (hrefFile === currentPath) {
      navLinks.forEach((l) => l.classList.remove("active"));
      link.classList.add("active");
      hasPageMatch = true;
    }
  });

  // If on index.html and no match, keep HOME active always
  if (!hasPageMatch && currentPath === "index.html") {
    navLinks.forEach((link) => {
      if (link.getAttribute("href") === "#home") {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
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

  // === DARK / LIGHT MODE TOGGLE ===
  const themeToggle = document.getElementById("themeToggle");
  const rootEl = document.documentElement;

  const updateTheme = (theme) => {
    rootEl.setAttribute("data-theme", theme);
    localStorage.setItem("theme", theme);
    if (themeToggle) {
      themeToggle.innerHTML =
        theme === "dark"
          ? '<i class="bi bi-sun"></i>'
          : '<i class="bi bi-moon"></i>';
    }
  };

  if (themeToggle) {
    themeToggle.addEventListener("click", () => {
      const current = rootEl.getAttribute("data-theme");
      const next = current === "dark" ? "light" : "dark";
      updateTheme(next);
    });
  }

  // On page load
  const saved = localStorage.getItem("theme") || "light";
  updateTheme(saved);
});

//Testimonials Banner

const banner = document.querySelector(".testimonials-banner");
const cardWidth = window.innerWidth <= 768 ? 265 : 315; // 250px + 15px gap (mobile), 300px + 15px gap (desktop)
const totalCards = 10; // Original cards
let currentIndex = 0;

function moveBanner(direction) {
  banner.style.animation = "none"; // Stop animation
  const offset = window.innerWidth <= 768 ? (100 - 250) / 2 : (100 - 300) / 2; // Centering offset
  if (direction === "next") {
    currentIndex = (currentIndex + 1) % totalCards;
  } else if (direction === "prev") {
    currentIndex = (currentIndex - 1 + totalCards) % totalCards;
  }
  const translateX = -(currentIndex * cardWidth);
  banner.style.transition = "transform 0.5s ease";
  banner.style.transform = `translateX(${translateX}px)`;
  if (currentIndex === 0 && direction === "next") {
    setTimeout(() => {
      banner.style.transition = "none";
      banner.style.transform = "translateX(0)";
      currentIndex = 0;
    }, 500);
  }
  clearTimeout(banner.resumeTimeout);
  banner.resumeTimeout = setTimeout(() => {
    banner.style.transition = "none";
    banner.style.transform = "translateX(0)";
    banner.style.animation =
      "scrollWithPause 50s cubic-bezier(0.25, 0.1, 0.25, 1) infinite";
    currentIndex = 0; // Reset to start
  }, 5000);
}

document
  .querySelector(".nav-btn.prev")
  .addEventListener("click", () => moveBanner("prev"));
document
  .querySelector(".nav-btn.next")
  .addEventListener("click", () => moveBanner("next"));
