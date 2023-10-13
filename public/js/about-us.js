
//kaizen_slider
let slideIndex = 1;
const slides = document.querySelectorAll(".slide");
const current = document.querySelector(".current");
const total = document.querySelector(".total");

showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    slides.forEach((slide) => {
        slide.style.display = "none";
    });
    slides[slideIndex - 1].style.display = "block";

    current.textContent = slideIndex;
    total.textContent = slides.length;
}
showSlides(slideIndex);

//