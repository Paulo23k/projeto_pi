// Carrossel destaque 2
const setaAnterior2 = document.querySelector('.seta-anterior2');
const setaProximo2 = document.querySelector('.seta-proximo2');
const carrosselItens2 = document.querySelector('.carrossel-itens2');
const totalGrupos2 = document.querySelectorAll('.grupo-imagens2').length; // Quantidade de grupos de 6 imagens
let indiceAtual2 = 0;

// Função para mover o carrossel
function moverCarrossel2(direcao) {
  indiceAtual2 += direcao;

  // Garantir que o índice não ultrapasse os limites
  if (indiceAtual2 < 0) {
    indiceAtual2 = 0;
  } else if (indiceAtual2 >= totalGrupos2) {
    indiceAtual2 = totalGrupos2 - 1;
  }

  // Mover o carrossel ajustando a posição
  carrosselItens2.style.transform = `translateX(-${indiceAtual2 * 100}%)`; // Move para o próximo grupo de 6 imagens
}

// Eventos de clique nas setas
setaProximo2.addEventListener('click', () => moverCarrossel2(1));
setaAnterior2.addEventListener('click', () => moverCarrossel2(-1));

