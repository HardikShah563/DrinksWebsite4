var navLines = document.querySelector(".nav-lines");
var navGreyLine = document.querySelector(".nav-grey-line");
navLines.addEventListener("click", () => {
    var navLinks = document.querySelector(".nav-links");
    navLinks.classList.toggle("active");
})