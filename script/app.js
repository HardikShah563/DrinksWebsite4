var navLines = document.querySelector(".nav-lines");
var navGreyLine = document.querySelector(".nav-grey-line");
navLines.addEventListener("click", () => {
    var navLinks = document.querySelector(".nav-links");
    navLinks.classList.toggle("active");
})

var addTocart = document.querySelectorAll(".add-to-cart");
var addTocartOverlay = document.querySelector(".add-to-cart-overlay");
function addToCartClick() {
    addTocart.forEach(addtocart => {
        addtocart.addEventListener("click", () => {
            addTocartOverlay.classList.add("show");
            setTimeout(fadeOut, 2000);
        });
    });
}

function fadeOut() {
    addTocartOverlay.classList.remove("show");
}

setInterval(addToCartClick(), 1);

// var inputForm = document.getElementById("input-form");
// var name = document.getElementById("name");
// var phno = document.getElementById("phnumber");
// var email = document.getElementById("email");
// var pass = document.getElementById("password");

// function submitForm() {
//     document.inputForm.reset();
// }