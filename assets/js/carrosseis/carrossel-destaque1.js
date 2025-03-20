// Carrossel destaque 1
const setaAnterior = document.querySelector('.seta-anterior');
const setaProximo = document.querySelector('.seta-proximo');
const carrosselItens = document.querySelector('.carrossel-itens');
const totalGrupos = document.querySelectorAll('.grupo-imagens').length; // Quantidade de grupos de 6 imagens
let indiceAtual = 0;

// Função para mover o carrossel
function moverCarrossel(direcao) {
  indiceAtual += direcao;

  // Garantir que o índice não ultrapasse os limites
  if (indiceAtual < 0) {
    indiceAtual = 0;
  } else if (indiceAtual >= totalGrupos) {
    indiceAtual = totalGrupos - 1;
  }

  // Mover o carrossel ajustando a posição
  carrosselItens.style.transform = `translateX(-${indiceAtual * 100}%)`; // Move para o próximo grupo de 6 imagens
}

// Eventos de clique nas setas
setaProximo.addEventListener('click', () => moverCarrossel(1));
setaAnterior.addEventListener('click', () => moverCarrossel(-1));