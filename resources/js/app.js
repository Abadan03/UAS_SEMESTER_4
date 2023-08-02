import "./bootstrap";
import.meta.glob(["../images/**"]);

// javascript navbar
const navbar = document.getElementsByTagName("nav")[0];

// navbar - brand;

const navbar_brand = document.querySelector(".navbar-brand");

// UNTUK LOGO BRAND
// window.addEventListener("scroll", function () {
//     if (this.window.scrollY === 0) {
//     }
// });

window.addEventListener("scroll", function () {
    console.log(window.scrollY);
    if (this.window.scrollY > 1) {
        navbar.classList.replace("bg-transparent", "nav-color");
        navbar_brand.classList.add("text-brand");
    } else if (this.window.scrollY <= 0) {
        navbar.classList.replace("nav-color", "bg-transparent");
        navbar_brand.classList.remove("text-brand");
    }
});
