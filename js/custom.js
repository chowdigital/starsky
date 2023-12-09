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

function active(entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add("inview2");
    } else {
      entry.target.classList.remove("inview2");
    }
  });
}

const io2 = new IntersectionObserver(active);

items.forEach(function (item) {
  io2.observe(item);
});

/* appear food & drink menus end */
