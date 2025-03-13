<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?? 'PetLand'; ?></title>
  <link rel="stylesheet" href="assets/css/estilo-inicial.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/menu.css">
  <link rel="stylesheet" href="assets/css/cupom.css">
  <link rel="stylesheet" href="assets/css/Carrosseis/carrossel-principal.css">
  <link rel="stylesheet" href="assets/css/Carrosseis/carrossel-destaque.css">
  <link rel="stylesheet" href="assets/css/footer/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <header>
    <div class="container-header">
      <div class="logo-area">
        <img src="assets/img/Logo.png" alt="Logo da PetLand">
        <h1>PetLand</h1>
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
      <a href="carrinho.php" class="carrinho-link">
        <img class="cart-icon" src="assets\img\Header\cart4.svg" alt="Ícone de Perfil">
      </a>
      <div class="login">
        <img class="perfil" src="assets\img\Header\person-fill.svg" alt="Ícone de Perfil">
        <button class="botao" onclick="irParaPagina('criar-conta.php')">Criar Perfil</button>
        <button class="botao-secundario" onclick="irParaPagina('login.php')">Entrar</button>
      </div>
  </header>
  <nav>
    <ul class="menu"">
        <li>
            <a href=" #">Cachorro <i class="fas fa-dog"></i></a>
      <ul class="submenu">
        <li><a href="produtos.php?titulo=Ração para Cães&foto=ProdutoIndisponivel">Ração</a></li>
        <li><a href="produtos.php?titulo=Petiscos para Cães&foto=Petiscos">Petiscos</a></li>
        <li><a href="produtos.php?titulo=Medicamentos para Cães&foto=Medicamentos">Medicamentos</a></li>
        <li><a href="produtos.php?titulo=Higiene para Cães&foto=Higiene">Higiene</a></li>
        <li><a href="produtos.php?titulo=Cosméticos para Cães&foto=Cosmeticos">Cosméticos</a></li>
        <li><a href="produtos.php?titulo=Acessórios para Cães&foto=Acessorios">Acessórios</a></li>
      </ul>
      </li>
      <li>
        <a href="#">Gato <i class="fas fa-cat"></i></a>
        <ul class="submenu">
          <li><a href="produtos.php?titulo=Ração para Gatos&foto=Raçao.png">Ração</a></li>
          <li><a href="#">Petiscos</a></li>
          <li><a href="#">Medicamentos</a></li>
          <li><a href="#">Higiene</a></li>
          <li><a href="#">Brinquedos</a></li>
          <li><a href="#">Acessórios</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Pássaro <i class="fas fa-crow"></i></a>
        <ul class="submenu">
          <li><a href="#">Alimentação</a></li>
          <li><a href="#">Medicamentos</a></li>
          <li><a href="#">Brinquedos</a></li>
          <li><a href="#">Gaiola</a></li>
          <li><a href="#">Acessórios</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Peixe <i class="fas fa-fish"></i></a>
        <ul class="submenu">
          <li><a href="#">Alimentação</a></li>
          <li><a href="#">Medicamentos</a></li>
          <li><a href="#">Equipamentos</a></li>
          <li><a href="#">Aquários</a></li>
          <li><a href="#">Decoração</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Roedores <i class="fas fa-paw"></i></a>
        <ul class="submenu">
          <li><a href="#">Ração</a></li>
          <li><a href="#">Petiscos</a></li>
          <li><a href="#">Medicamentos</a></li>
          <li><a href="#">Higiene</a></li>
          <li><a href="#">Gaiola</a></li>
          <li><a href="#">Acessórios</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Outros Pets <i class="fas fa-paw"></i></a>
        <ul class="submenu">
          <li><a href="#">Répteis</a></li>
          <li><a href="#">Roedores</a></li>
        </ul>
      </li>
    </ul>
  </nav>