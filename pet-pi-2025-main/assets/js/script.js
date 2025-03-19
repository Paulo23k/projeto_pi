function mostrarPopup() {
    document.getElementById("popup").style.display = "flex";
    // Impede a navegação para outras áreas da página
    event.preventDefault();
  }
  
  function fecharPopup() {
    document.getElementById("popup").style.display = "none";
  }
  
  function adicionarCarrinho(produto) {
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    carrinho.push(produto);
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    alert('Produto adicionado ao carrinho!');
  }