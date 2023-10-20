const search = document.getElementById("search-toggle");
const back = document.getElementById("back");
const targetDiv = document.getElementById("bar-div");
const targetStyle = getComputedStyle(targetDiv);
const targetDisplay = targetStyle.getPropertyValue("display");

back.onclick = function () {
  if (targetDisplay === "flex") {
    targetDiv.classList.remove("showSearchBar");
  }
};

search.onclick = function () {
  if (targetDisplay === "flex") {
    targetDiv.classList.add("showSearchBar");
  }
};

let nav = document.querySelector(".nav");
let close = document.querySelector(".close");
let navbar = document.querySelector(".showNavbar");

nav.onclick = function () {
  nav.classList.add("hide");
  navbar.classList.add("show");
  close.classList.remove("hide");
};

close.onclick = function () {
  close.classList.add("hide");
  navbar.classList.remove("show");
  nav.classList.remove("hide");
};
