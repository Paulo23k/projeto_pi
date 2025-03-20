// Perfil

function mostrarPopupPerfil(event) {
  event.preventDefault(); // Impede qualquer ação padrão (se houver)
  document.getElementById('popup-perfil').style.display = 'flex';
}

function fecharPopupPerfil() {
  document.getElementById('popup-perfil').style.display = 'none';
}

function irParaPagina(url) {
  window.location.href = url; // Redireciona para a página desejada
}

  
  // Adiciona evento de clique no botão de busca
  document.querySelector('.searchButton').addEventListener('click', function() {
    const searchTerm = document.querySelector('.searchTerm').value;
    if (searchTerm) {
      alert('Você está buscando por: ' + searchTerm);
    } else {
      alert('Digite algo para buscar!');
    }
  });
  
  // Adiciona efeitos de zoom no campo de busca ao digitar
  document.querySelector('.searchTerm').addEventListener('input', function() {
    document.querySelector('.search').classList.add('zoom'); // Aplica o zoom na barra de busca
  });
  
  // Remove o efeito de zoom quando o campo perde o foco
  document.querySelector('.searchTerm').addEventListener('blur', function() {
    document.querySelector('.search').classList.remove('zoom'); // Remove o zoom
  });

// Função para adicionar o produto ao carrinho

// Função para adicionar o produto ao carrinho
function adicionarCarrinho(nomeProduto, precoProduto, imagemProduto) {
  // Verifica se o preço é um número válido e maior que 0
  if (isNaN(precoProduto) || precoProduto <= 0) {
    console.error('Preço inválido para o produto');
    return;  // Impede a adição ao carrinho se o preço for inválido
  }

  // Recupera o carrinho do localStorage, se não houver, cria um array vazio
  let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

  // Adiciona o novo produto ao carrinho
  carrinho.push({ nome: nomeProduto, preco: precoProduto, imagem: imagemProduto });

  // Atualiza o carrinho no localStorage
  localStorage.setItem('carrinho', JSON.stringify(carrinho));

  // Atualiza a visualização do carrinho
  atualizarCarrinhoPopup();
}


// Função para atualizar o carrinho no popup
function atualizarCarrinhoPopup() {
  let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

  const carrinhoVazio = document.getElementById('carrinho-vazio');
  const carrinhoComItens = document.getElementById('carrinho-com-itens');
  const itensCarrinho = document.getElementById('itens-carrinho');

  // Se o carrinho estiver vazio
  if (carrinho.length === 0) {
    carrinhoVazio.style.display = 'block';
    carrinhoComItens.style.display = 'none';
  } else {
    // Se o carrinho não estiver vazio
    carrinhoVazio.style.display = 'none';
    carrinhoComItens.style.display = 'block';

    // Limpa a lista de itens do carrinho
    itensCarrinho.innerHTML = '';

    // Adiciona cada item ao carrinho
    carrinho.forEach(item => {
      const itemCarrinho = document.createElement('div');
      itemCarrinho.classList.add('item-carrinho');
      
      // Verifica se o preço é numérico antes de exibir
      const precoFormatado = (typeof item.preco === 'number' && !isNaN(item.preco)) ? item.preco.toFixed(2) : 'R$ 0.00';

      itemCarrinho.innerHTML = `
        <img src="${item.imagem}" alt="${item.nome}" class="item-carrinho-img">
        <div class="item-carrinho-info">
          <p><strong>${item.nome}</strong> - R$ ${precoFormatado}</p>
        </div>
      `;
      itensCarrinho.appendChild(itemCarrinho);
    });
  }
}

// Função para abrir o popup do carrinho
function abrirPopupCarrinho() {
  document.getElementById('popup-carrinho').style.display = 'block';
}

// Função para fechar o popup do carrinho
function fecharPopupCarrinho() {
  document.getElementById('popup-carrinho').style.display = 'none';
}

// Chama a função de atualizar o carrinho quando a página carregar
document.addEventListener('DOMContentLoaded', () => {
  atualizarCarrinhoPopup();
});
