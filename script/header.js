// Handling mobile menu toggle
const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.getElementById('nav-links');

if (menuToggle && navLinks) {
  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('open');
    navLinks.classList.toggle('active');
  });
}

    window.addEventListener("scroll", () => {
      const header = document.querySelector(".site-header");
      if (window.scrollY > 80) {
        // turn more solid and lighter for readability on light backgrounds
        header.style.background = "rgba(255, 255, 255, 0.85)";
        header.style.borderBottom = "1px solid rgba(0, 0, 0, 0.1)";
        header.querySelectorAll(".nav-links a, .site-title").forEach(el => el.style.color = "#000");
      } else {
        // return to transparent dark glass for hero background
        header.style.background = "rgba(30, 30, 30, 0.4)";
        header.style.borderBottom = "1px solid rgba(255, 255, 255, 0.2)";
        header.querySelectorAll(".nav-links a, .site-title").forEach(el => el.style.color = "#fff");
      }
    });