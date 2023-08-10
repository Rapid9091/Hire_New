// ---------------------
// Header Transformation
// ---------------------

const mobileNav = document.querySelector(".mobile-navbar-btn");

const header = document.querySelector(".header");

function toggleMobileNav() {
  header.classList.toggle("mobile-active");
}

mobileNav.addEventListener("click", () => toggleMobileNav());
 
const topHeader = document.querySelector(".header");
const header_btn = document.querySelector("#header_btn");
const header_Logo = document.querySelector("#header-logo");

// go to top btn function
let topBtn = document.getElementById("btop");
topBtn.addEventListener("click", function () {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});
function scrollFunction() {
  if (
    document.body.scrollTop > 400 ||
    document.documentElement.scrollTop > 400
  ) {
    topBtn.style.display = "block";
  } else {
    topBtn.style.display = "none";
  }
}

// On Scroll function here

window.onscroll = function (e) {
    e.preventDefault()
  // Getting the height of screen
  var top = window.scrollY;

  if (top >= 100) {
    //   Setting active class and img src
    topHeader.classList.add("active");
    header_btn.classList.add("links-list_button");
    header_Logo.src = "https://hirecoworker.com/assets/images/new-logo.png";
  } else {
    //   Removing active class and img src
    topHeader.classList.remove("active");
    header_btn.classList.remove("links-list_button");
    header_Logo.src =
      "https://hirecoworker.com/assets/images/new-logo-white.png";
  }

  // go to top
  scrollFunction();
};