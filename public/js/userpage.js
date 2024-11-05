
let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');

function showSlide(index) {
    items.forEach((item, i) => {
        item.classList.remove('active');
        if (i === index) {
            item.classList.add('active');
        }
    });
}

function moveSlide(step) {
    currentIndex = (currentIndex + step + items.length) % items.length;
    showSlide(currentIndex);
}

// Iniciar o carrossel com o primeiro item ativo
showSlide(currentIndex);
