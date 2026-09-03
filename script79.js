const menu = document.getElementById("mobile-menu");
const menuBtn = document.getElementById("menu-btn");

menuBtn.addEventListener("click", () => {
  menu.classList.toggle("-translate-y-full");
});

const mobileMenu = document.getElementById("mobile-menu");
const closeBtn = document.getElementById("mobile-menu-close");

closeBtn.addEventListener("click", () => {
  mobileMenu.classList.add("-translate-y-full"); // slide menu up to hide
});
