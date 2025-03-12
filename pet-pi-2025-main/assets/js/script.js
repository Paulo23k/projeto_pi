// Carrossel círculo 2
const setaAnterior2 = document.querySelector('.seta-anterior2');
const setaProximo2 = document.querySelector('.seta-proximo2');
const carrosselItens2 = document.querySelector('.carrossel-itens2');
const totalGrupos2 = document.querySelectorAll('.grupo-imagens2').length; // Quantidade de grupos de 6 imagens
let indiceAtual2 = 0;

// Função para mover o segundo carrossel
function moverCarrossel2(direcao) {
  indiceAtual2 += direcao;

  // Garantir que o índice não ultrapasse os limites
  if (indiceAtual2 < 0) {
    indiceAtual2 = 0;
  } else if (indiceAtual2 >= totalGrupos2) {
    indiceAtual2 = totalGrupos2 - 1;
  }

  // Mover o carrossel ajustando a posição
  carrosselItens2.style.transform = `translateX(-${indiceAtual2 * 100}%)`;
}

// Eventos de clique nas setas do segundo carrossel
setaProximo2.addEventListener('click', () => moverCarrossel2(1));
setaAnterior2.addEventListener('click', () => moverCarrossel2(-1));



// Carrossel círculo 3
const setaAnterior3 = document.querySelector('.seta-anterior3');
const setaProximo3 = document.querySelector('.seta-proximo3');
const carrosselItens3 = document.querySelector('.carrossel-itens3');
const totalGrupos3 = document.querySelectorAll('.grupo-imagens3').length; // Quantidade de grupos de 6 imagens
let indiceAtual3 = 0;

// Função para mover o terceiro carrossel
function moverCarrossel3(direcao) {
  indiceAtual3 += direcao;

  // Garantir que o índice não ultrapasse os limites
  if (indiceAtual3 < 0) {
    indiceAtual3 = 0;
  } else if (indiceAtual3 >= totalGrupos3) {
    indiceAtual3 = totalGrupos3 - 1;
  }

  // Mover o carrossel ajustando a posição
  carrosselItens3.style.transform = `translateX(-${indiceAtual3 * 100}%)`;
}

// Eventos de clique nas setas do terceiro carrossel
setaProximo3.addEventListener('click', () => moverCarrossel3(1));
setaAnterior3.addEventListener('click', () => moverCarrossel3(-1));
