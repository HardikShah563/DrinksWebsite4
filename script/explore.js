var addTocart = document.querySelectorAll(".add-to-cart");
var addTocartOverlay = document.querySelector(".add-to-cart-overlay");
function addToCartClick() {
    addTocart.forEach(addtocart => {
        addtocart.addEventListener("click", () => {
            addTocartOverlay.classList.add("show");
            setTimeout(fadeOut, 3000);
        });
    });
}

function fadeOut() {
    addTocartOverlay.classList.remove("show");
}

setInterval(addToCartClick(), 1);