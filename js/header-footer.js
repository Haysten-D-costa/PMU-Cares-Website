/* RESPONSIVE NAV-BAR SCRIPTS */

(() => {
  const openNavMenu = document.querySelector(".open-nav-menu"),
    closeNavMenu = document.querySelector(".close-nav-menu"),
    navMenu = document.querySelector(".nav-menu"),
    menuOverlay = document.querySelector(".menu-overlay"),
    mediaSize = 1400;

  openNavMenu.addEventListener("click", toggleNav);
  closeNavMenu.addEventListener("click", toggleNav);
  // close the navMenu by clicking outside
  menuOverlay.addEventListener("click", toggleNav);

  function toggleNav() {
    navMenu.classList.toggle("open");
    menuOverlay.classList.toggle("active");
    document.body.classList.toggle("hidden-scrolling");
  }

  navMenu.addEventListener("click", (event) => {
    if (event.target.hasAttribute("data-toggle") &&
      window.innerWidth <= mediaSize) {
      // prevent default anchor click behavior
      event.preventDefault();
      const menuItemHasChildren = event.target.parentElement;
      // if menuItemHasChildren is already expanded, collapse it
      if (menuItemHasChildren.classList.contains("active")) {
        collapseSubMenu();
      }
      else {
        // collapse existing expanded menuItemHasChildren
        if (navMenu.querySelector(".dropdown-menu-branch.active")) {
          collapseSubMenu();
        }
        // expand new menuItemHasChildren
        menuItemHasChildren.classList.add("active");
        const subMenu = menuItemHasChildren.querySelector(".sub-menu");
        subMenu.style.maxHeight = subMenu.scrollHeight + "px";
      }
    }
  });
  function collapseSubMenu() {
    navMenu.querySelector(".dropdown-menu-branch.active .sub-menu")
      .removeAttribute("style");
    navMenu.querySelector(".dropdown-menu-branch.active")
      .classList.remove("active");
  }
  function resizeFix() {
    // if navMenu is open ,close it
    if (navMenu.classList.contains("open")) {
      toggleNav();
    }
    // if menuItemHasChildren is expanded , collapse it
    if (navMenu.querySelector(".dropdown-menu-branch.active")) {
      collapseSubMenu();
    }
  }

  window.addEventListener("resize", function () {
    if (this.innerWidth > mediaSize) {
      resizeFix();
    }
  });

})();





/* SCROLL ACTIVATED STICKY NAVIGATION SCRIPT */

const body = document.body;
const logoContainer = document.querySelector(".logo-container");
let lastScroll = 0;

window.addEventListener('scroll', () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll == 0) {
    logoContainer.classList.remove("hide-element");
  }
  if (currentScroll <= 0) {
    body.classList.remove("scroll-up");
  }
  if (currentScroll > lastScroll && !body.classList.contains('scroll-down')) {
    body.classList.remove("scroll-up");
    body.classList.add("scroll-down");

  }
  if (currentScroll < lastScroll && body.classList.contains('scroll-down')) {
    body.classList.remove("scroll-down");
    body.classList.add("scroll-up");
  }
  if (body.classList.contains('scroll-up')) {
    logoContainer.classList.add("hide-element");
  }
  lastScroll = currentScroll;
});