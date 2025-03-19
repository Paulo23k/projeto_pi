<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?? 'PetLand'; ?></title>
  <link rel="icon" href="assets/img/Favicon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/estilo-inicial.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/menu.css">
  <link rel="stylesheet" href="assets/css/cupom.css">
  <link rel="stylesheet" href="assets/css/Carrosseis/carrossel-principal.css">
  <link rel="stylesheet" href="assets/css/Carrosseis/carrossel-destaque.css">
  <link rel="stylesheet" href="assets/css/footer/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <header>
    <div class="container-header">
      <div class="logo-area">
        <a href="pagina-inicial.php" class="logo-link">
          <img src="assets/img/Logo.png" alt="Logo da PetLand">
        </a>
        <a href="pagina-inicial.php" class="logo-link" style="text-decoration: none;">
          <h1>PetLand</h1>
        </a>
        <div class="wrap">
          <div class="search">
            <input type="text" class="searchTerm" placeholder="Pesquise">
            <button type="submit" class="searchButton">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="cart">
      <a href="carrinho.php" class="carrinho-link" onclick="mostrarPopupCarrinho(event)">
        <img class="cart-icon" src="assets/img/Header/cart4.svg" alt="Ícone de Carrinho">
      </a>

      <div class="login">
        <?php if (isset($_SESSION['usuario_logado'])): ?>
          <!-- Se o usuário estiver logado -->
          <img class="perfil" src="assets/img/Header/person-fill.svg" alt="Ícone de Perfil" onclick="mostrarPopupPerfil(event)">
          <span>Bem-vindo, <?php echo $_SESSION['usuario_logado']; ?>!</span>
          <button class="botao" onclick="window.location.href='perfil.php'">Meu Perfil</button>
          <button class="botao-secundario" onclick="window.location.href='logout.php'">Sair</button>
        <?php else: ?>
          <!-- Se o usuário não estiver logado -->
          <img class="perfil" src="assets/img/Header/person-fill.svg" alt="Ícone de Perfil" onclick="mostrarPopupPerfil(event)">
          <button class="botao" onclick="window.location.href='criar-conta.php'">Criar Perfil</button>
          <button class="botao-secundario" onclick="window.location.href='login.php'">Entrar</button>
        <?php endif; ?>
      </div>

      <div id="popup-carrinho" class="popup">
        <div class="popup-content">
          <div id="carrinho-vazio">
            <p>Seu carrinho de compras está vazio.</p>
            <button class="btn-pop" onclick="window.location.href='carrinho.php'">Ver Carrinho</button>
          </div>
          <div id="carrinho-com-itens" style="display: none;">
            <h3>Itens no Carrinho:</h3>
            <div id="itens-carrinho">
              <!-- Os itens do carrinho serão listados aqui -->
            </div>
            <button class="btn-pop" onclick="window.location.href='carrinho.php'">Ver Carrinho</button>
          </div>
          <button class="btn-pop" onclick="fecharPopupCarrinho()">Fechar</button>
        </div>
      </div>

      <!-- Popup do perfil -->
      <div id="popup-perfil" class="popup">
        <div class="popup-content">
          <p>Faça login ou crie um perfil para acessar seu perfil.</p>
          <button class="btn-pop" onclick="window.location.href='login.php'">Entrar</button>
          <button class="btn-pop" onclick="window.location.href='criar-conta.php'">Criar Perfil</button>
          <button class="btn-pop" onclick="fecharPopupPerfil()">Fechar</button>
        </div>
      </div>
  </header>

  <nav>
    <ul class="menu">
      <li>
        <a href="#">Cachorro <i class="fas fa-dog"></i></a>
        <ul class="submenu">
          <li><a href="produtos.php?titulo=Ração para Cães&foto=ProdutoIndisponivel">Ração</a></li>
          <li><a href="produtos.php?titulo=Petiscos para Cães&foto=ProdutoIndisponivel">Petiscos</a></li>
          <li><a href="produtos.php?titulo=Medicamentos para Cães&foto=ProdutoIndisponivel">Medicamentos</a></li>
          <li><a href="produtos.php?titulo=Higiene para Cães&foto=ProdutoIndisponivel">Higiene</a></li>
          <li><a href="produtos.php?titulo=Cosméticos para Cães&foto=ProdutoIndisponivel">Cosméticos</a></li>
          <li><a href="produtos.php?titulo=Acessórios para Cães&foto=ProdutoIndisponivel">Acessórios</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Gato <i class="fa-solid fa-cat"></i></a>
        <ul class="submenu">
          <li><a href="produtos.php?titulo=Ração para Gatos&foto=ProdutoIndisponivel">Ração</a></li>
          <li><a href="produtos.php?titulo=Petiscos para Gatos&foto=ProdutoIndisponivel">Petiscos</a></li>
          <li><a href="produtos.php?titulo=Medicamentos para Gatos&foto=ProdutoIndisponivel">Medicamentos</a></li>
          <li><a href="produtos.php?titulo=Higiene para Gatos&foto=ProdutoIndisponivel">Higiene</a></li>
          <li><a href="produtos.php?titulo=Brinquedos para Gatos&foto=ProdutoIndisponivel">Brinquedos</a></li>
          <li><a href="produtos.php?titulo=Acessórios para Gatos&foto=ProdutoIndisponivel">Acessórios</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Pássaro <i class="fas fa-dove"></i></a>
        <ul class="submenu">
          <li><a href="produtos.php?titulo=Alimentação para Pássaros&foto=ProdutoIndisponivel">Alimentação</a></li>
          <li><a href="produtos.php?titulo=Medicamentos para Pássaros&foto=ProdutoIndisponivel">Medicamentos</a></li>
          <li><a href="produtos.php?titulo=Brinquedos para Pássaros&foto=ProdutoIndisponivel">Brinquedos</a></li>
          <li><a href="produtos.php?titulo=Gaiolas para Pássaros&foto=ProdutoIndisponivel">Gaiolas</a></li>
          <li><a href="produtos.php?titulo=Acessórios para Pássaros&foto=ProdutoIndisponivel">Acessórios</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Peixe <i class="fa-solid fa-fish"></i></a>
        <ul class="submenu">
          <li><a href="produtos.php?titulo=Alimentação para Peixes&foto=ProdutoIndisponivel">Alimentação</a></li>
          <li><a href="produtos.php?titulo=Medicamentos para Peixes&foto=ProdutoIndisponivel">Medicamentos</a></li>
          <li><a href="produtos.php?titulo=Equipamentos para Peixes&foto=ProdutoIndisponivel">Equipamentos</a></li>
          <li><a href="produtos.php?titulo=Aquários&foto=ProdutoIndisponivel">Aquários</a></li>
          <li><a href="produtos.php?titulo=Decoração para Aquários&foto=ProdutoIndisponivel">Decoração</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Roedores <i class="fas fa-cheese"></i></a>
        <ul class="submenu">
          <li><a href="produtos.php?titulo=Ração para Roedores&foto=ProdutoIndisponivel">Ração</a></li>
          <li><a href="produtos.php?titulo=Petiscos para Roedores&foto=ProdutoIndisponivel">Petiscos</a></li>
          <li><a href="produtos.php?titulo=Medicamentos para Roedores&foto=ProdutoIndisponivel">Medicamentos</a></li>
          <li><a href="produtos.php?titulo=Higiene para Roedores&foto=ProdutoIndisponivel">Higiene</a></li>
          <li><a href="produtos.php?titulo=Gaiolas para Roedores&foto=ProdutoIndisponivel">Gaiolas</a></li>
          <li><a href="produtos.php?titulo=Acessórios para Roedores&foto=ProdutoIndisponivel">Acessórios</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Outros Pets <i class="fas fa-paw"></i></a>
        <ul class="submenu">
          <li><a href="produtos.php?titulo=Répteis&foto=ProdutoIndisponivel">Répteis</a></li>
          <li><a href="produtos.php?titulo=Roedores&foto=ProdutoIndisponivel">Roedores</a></li>
        </ul>
      </li>
    </ul>
  </nav>