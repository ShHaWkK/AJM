// file: carousel.js
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-item');
const totalSlides = slides.length;
let isTransitioning = false; 

function updateCarouselPosition() {
    const carouselSlide = document.querySelector('.carousel-slide');
    carouselSlide.style.transition = 'transform 0.8s ease-in-out'; 
    carouselSlide.style.transform = `translateX(-${currentSlide * 100}%)`;

    setTimeout(() => {
        isTransitioning = false;
    }, 800); 
}

function moveSlide(direction) {
    if (!isTransitioning) {
        isTransitioning = true;
        currentSlide += direction;

        // Loop back to the beginning/end
        if (currentSlide >= totalSlides) {
            currentSlide = 0;
        } else if (currentSlide < 0) {
            currentSlide = totalSlides - 1;
        }

        updateCarouselPosition();
    }
}


setInterval(() => {
    moveSlide(1);
}, 7000); 
