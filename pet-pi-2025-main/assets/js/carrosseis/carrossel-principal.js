//Carrossel principal

let currentSlide = 0; // Índice do slide atual
const carrossel = document.querySelector('.carrossel');
const slides = document.querySelectorAll('.carrossel img');
const totalSlides = slides.length;

// Atualiza a posição do carrossel e o destaque da imagem atual
function updateCarrossel() {
    const slideWidth = slides[0].clientWidth;
    const offset = (carrossel.clientWidth - slideWidth) / 2; // Centraliza o slide atual
    carrossel.style.transform = `translateX(${offset - currentSlide * slideWidth}px)`;

    // Atualiza a classe "active" para a imagem atual
    slides.forEach((slide, index) => {
        if (index === currentSlide) {
            slide.classList.add('active');
        } else {
            slide.classList.remove('active');
        }
    });
}

// Avança para o próximo slide
function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides; // Volta ao início após o último
    updateCarrossel();
}

// Volta para o slide anterior
function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides; // Vai para o último antes do primeiro
    updateCarrossel();
}

// Atualiza o carrossel ao redimensionar a janela
window.addEventListener('resize', updateCarrossel);

// Inicializa o carrossel
updateCarrossel();
