const carouselItems = document.getElementById('carousel-items');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');

let currentIndex = 0;

function updateCarousel() {
    const totalItems = carouselItems.children.length;
    const offset = -currentIndex * 100;
    carouselItems.style.transform = `translateX(${offset}%)`;
}

prevBtn.addEventListener('click', () => {
    const totalItems = carouselItems.children.length;
    currentIndex = (currentIndex === 0) ? totalItems - 1 : currentIndex - 1;
    updateCarousel();
});

nextBtn.addEventListener('click', () => {
    const totalItems = carouselItems.children.length;
    currentIndex = (currentIndex === totalItems - 1) ? 0 : currentIndex + 1;
    updateCarousel();
});

// Optional: Auto-rotate every 5 seconds
setInterval(() => {
    nextBtn.click();
}, 5000);


document.addEventListener('DOMContentLoaded', function () {
    const observerOptions = {
        root: null,  // Observa el viewport completo
        threshold: 0.5  // El 50% del elemento debe estar visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Agregar la clase 'show' para iniciar la animación
                const textElements = entry.target.querySelectorAll('.fade-in');
                textElements.forEach(el => {
                    el.classList.add('show');
                });
                // Dejar de observar el elemento para que solo se anime una vez
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Seleccionar todos los slides para observar y ocultar inicialmente
    const slides = document.querySelectorAll('.carousel-item');
    slides.forEach(slide => {
        const textElements = slide.querySelectorAll('.fade-in');
        textElements.forEach(el => {
            el.classList.add('hidden'); // Oculta los elementos inicialmente
        });
        observer.observe(slide);
    });
});