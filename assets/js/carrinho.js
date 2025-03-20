function adicionarCarrinho(id, nome, preco, imagem) {
  const item = {
      id: id,
      nome: nome,
      preco: preco,
      imagem: imagem,
      quantidade: 1
  };

  // Envia o item para o PHP via AJAX
  fetch('adicionar_carrinho.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify(item)
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          alert(`${nome} foi adicionado ao carrinho!`);
          abrirPopupCarrinho();
      } else {
          alert("Erro ao adicionar ao carrinho.");
      }
  })
  .catch(error => console.error('Erro:', error));
}