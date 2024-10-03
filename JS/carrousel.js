let currentIndex = 0;

function showSlide(index) {
    const carouselInner = document.querySelector('.carousel-inner');
    const totalSlides = document.querySelectorAll('.carousel-item').length;
    if (index >= totalSlides) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalSlides - 1;
    } else {
        currentIndex = index;
    }

    const translateX = -currentIndex * 100;
    carouselInner.style.transform = `translateX(${translateX}%)`;
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

// Optional: automatic sliding
setInterval(() => {
    nextSlide();
}, 5000);