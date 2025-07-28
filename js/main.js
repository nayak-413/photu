// Navbar auto-close on link click
document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
  const navbarCollapse = document.querySelector(".navbar-collapse");

  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      if (navbarCollapse.classList.contains("show")) {
        new bootstrap.Collapse(navbarCollapse).toggle();
      }
    });
  });

  // AOS init if using Animate on Scroll
  if (typeof AOS !== "undefined") {
    AOS.init({
      duration: 800,
      once: true,
    });
  }
});

// Show/hide scroll-to-top button
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

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

document.querySelectorAll(".nav-link").forEach((link) => {
  link.addEventListener("click", function () {
    document
      .querySelectorAll(".nav-link")
      .forEach((nav) => nav.classList.remove("active"));
    this.classList.add("active");
  });
});

const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      const id = entry.target.id;
      const navLink = document.querySelector(`.nav-link[href="#${id}"]`);

      if (entry.isIntersecting) {
        navLinks.forEach((link) => link.classList.remove("active"));
        if (navLink) navLink.classList.add("active");
      }
    });
  },
  {
    root: null,
    rootMargin: "0px",
    threshold: 0.6, // 60% of section in view
  }
);

sections.forEach((section) => observer.observe(section));

// For the Carousel
const heroCarousel = document.querySelector("#heroCarousel");
new bootstrap.Carousel(heroCarousel, {
  interval: 4000,
  pause: false,
  ride: "carousel",
  wrap: true,
  touch: false,
});
