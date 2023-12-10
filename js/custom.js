/*function coolScrollFunction() {
  if (window.innerWidth > 557) {
    // Check if screen width is greater than 557 pixels
    if (
      document.body.scrollTop > 80 ||
      document.documentElement.scrollTop > 80
    ) {
      document.getElementById("navBox").style.height = "52px";
      document.getElementById("navBrand").style.height = "60px";
      document.getElementById("soIcons").style.top = "10px";
      document.getElementById("menuIcon").style.top = "7px";
      document.getElementById("navImg").style.top = "-5px";
    } else {
      document.getElementById("navBox").style.height = "72px";
      document.getElementById("navBrand").style.height = "80px";
      document.getElementById("soIcons").style.top = "20px";
      document.getElementById("menuIcon").style.top = "15px";
      document.getElementById("navImg").style.top = "10px";
    }
  }
}

window.onscroll = function () {
  coolScrollFunction();
};*/

/* appear food & drink menus */
const items = document.querySelectorAll(".appear2");

function active(entries, observer) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add("inview2");
      observer.unobserve(entry.target); // Stop observing the element once it's in view
    } else {
      entry.target.classList.remove("inview2");
    }
  });
}

const io2 = new IntersectionObserver(active);

items.forEach(function (item) {
  io2.observe(item);
});

document.addEventListener("DOMContentLoaded", function () {
  /* open and close the animated off-canvas nav */
  var openMenuButton = document.getElementById("checkbox1");
  var offCanvasMenu = document.querySelector(".off-canvas-menu");

  // Function to close the off-canvas menu
  function closeMenu() {
    offCanvasMenu.classList.remove("open");
  }

  // Ensure the checkbox is unchecked on page load
  openMenuButton.checked = false;

  // Add a click event listener to the openMenuButton
  openMenuButton.addEventListener("click", function () {
    offCanvasMenu.classList.toggle("open");
  });

  // Ensure the menu is closed when the page is fully loaded
  closeMenu();

  // Get a reference to the checkbox element
  const checkbox = document.getElementById("checkbox1");

  // Add an event listener to listen for changes in the checkbox state
});
