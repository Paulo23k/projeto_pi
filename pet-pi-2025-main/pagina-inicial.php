<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
$pageTitle = 'PetLand';
include 'includes/header.php';
?>

<main>
  <section class="banner2">
    <h2>Bem-vindo à PetLand</h2>
    <p>Encontre tudo para o seu pet!</p>
  </section>
  <section id="banner">
    <main class="container-carrossel">
      <div class="carrossel">
        <img src="./assets/img/BannerPrincipal/carrosselprincipal1.png" alt="Banner 01">
        <img src="./assets/img/BannerPrincipal/carrosselprincipal2.png" alt="Banner 02">
        <img src="./assets/img/BannerPrincipal/carrosselprincipal2.png" alt="Banner 02">
        <img src="./assets/img/BannerPrincipal/carrosselprincipal4.png" alt="Banner 04">
        <img src="./assets/img/BannerPrincipal/carrosselprincipal5.png" alt="Banner 05">
      </div>
      <button class="prev" onclick="javascript:prevSlide()"><i class="bi bi-arrow-left"></i></button>
      <button class="next" onclick="javascript:nextSlide()"><i class="bi bi-arrow-right"></i></button>
    </main>

    <section>
      <div class="app" onclick="mostrarPopup()">
        <img src="./assets/img/Cupom/cupom.png" alt="Cupom de desconto">
      </div>
      <div id="popup" class="popup">
        <div class="popup-content">
          <p>Escolha a loja para baixar o app:</p>
          <button class="btn-pop" onclick="window.location.href='https://www.apple.com/br/app-store/'">App Store</button>
          <button class="btn-pop" onclick="window.location.href='https://play.google.com/store'">Google Play</button>
          <button class="btn-pop" onclick="fecharPopup()">Fechar</button>
        </div>
      </div>
    </section>

  </section>
  <section>
    <h1 class="h1-destaque-dog">Destaques para Cachorros</h1>
    <div class="carrossel-container">
      <div class="carrossel-itens">
        <!-- Primeira div com 6 imagens -->
        <div class="grupo-imagens">
          <div class="item-carrossel"><img src="assets/img/Swiper/cães/Raçao.png" alt="Produto 1"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/cães/Petiscos.png" alt="Produto 2"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/cães/Medicamentos.png" alt="Produto 3"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/cães/Higiene.png" alt="Produto 4"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/cães/Cosmeticos.png" alt="Produto 5"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/cães/Acessorios.png" alt="Produto 6"></div>
        </div>

        <!-- Segunda div com 6 imagens -->
        <div class="grupo-imagens">
          <div class="item-carrossel"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 7"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 8"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 9"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 10"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 11"></div>
          <div class="item-carrossel"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 12"></div>
        </div>
      </div>

      <!-- Botões para navegação -->
      <div class="botao-carrossel-circulo">
        <button class="seta-anterior"><img src="assets/img/icons8-voltar-48.png" alt="Seta para esquerda"></button>
        <button class="seta-proximo"><img src="assets/img/icons8-avançar-48.png" alt="Seta para direita"></button>
      </div>
    </div>
  </section>

  <section>
    <h1 class="h1-destaque-gato">Destaques para Gatos</h1>
    <div class="carrossel-container2">
      <div class="carrossel-itens2">
        <!-- Primeira div com 6 imagens -->
        <div class="grupo-imagens2">
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Raçao.png" alt="Produto 1"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Petiscos.png" alt="Produto 2"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Medicamentos.png" alt="Produto 2"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Higiene.png" alt="Produto 4"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Brinquedos.png" alt="Produto 5"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Acessorios.png" alt="Produto 6"></div>
        </div>

        <!-- Segunda div com 6 imagens -->
        <div class="grupo-imagens2">
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 7"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 8"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 9"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 10"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 11"></div>
          <div class="item-carrossel2"><img src="assets/img/Swiper/Gatos/Em Breve.png" alt="Produto 12"></div>
        </div>
      </div>

      <!-- Botões para navegação -->
      <div class="botao-carrossel-circulo2">
        <button class="seta-anterior2"><img src="assets/img/icons8-voltar-48.png" alt="Seta para esquerda"></button>
        <button class="seta-proximo2"><img src="assets/img/icons8-avançar-48.png" alt="Seta para direita"></button>
      </div>
    </div>
  </section>

  <section>
    <h1 class="h1-destaque-roedores">Destaques para Roedores</h1>
    <div class="carrossel-container3">
      <div class="carrossel-itens3">
        <div class="grupo-imagens3">
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Raçao_1.png" alt="Produto 1"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Petiscos_1.png" alt="Produto 2"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Medicamentos_1.png" alt="Produto 2"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Higiene_1.png" alt="Produto 4"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Gaiolas.png" alt="Produto 5"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Acessorios_1.png" alt="Produto 6"></div>
        </div>

        <!-- Segunda div com 6 imagens -->
        <div class="grupo-imagens3">
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Em Breve.png" alt="Produto 7"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Em Breve.png" alt="Produto 8"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Em Breve.png" alt="Produto 9"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Em Breve.png" alt="Produto 10"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Em Breve.png" alt="Produto 11"></div>
          <div class="item-carrossel3"><img src="assets/img/Swiper/Roedor/Em Breve.png" alt="Produto 12"></div>
        </div>
      </div>

      <!-- Botões para navegação -->
      <div class="botao-carrossel-circulo3">
        <button class="seta-anterior3"><img src="assets/img/icons8-voltar-48.png" alt="Seta para esquerda"></button>
        <button class="seta-proximo3"><img src="assets/img/icons8-avançar-48.png" alt="Seta para direita"></button>
      </div>
    </div>
  </section>
  <section class="grid-todos-produtos">
    <h1 class="h1-destaque-roedores">Produtos Recomendados</h1>
    <div class="produtos-grid">
      <!-- Produto 1 -->
      <div class="produto-item" data-id="1" data-descricao="Ração GranPlus" data-preco="98.00" data-img="ImgProduto1.png">
        <img src="assets/img/produtos/ImgProduto1.png" alt="Raçao" class="produto-img">
        <div class="produto-info">
          <p class="produto-descricao">Ração GranPlus Choice Cães Adultos 20 kg.</p>
          <div class="produto-preco-container">
            <p class="produto-preco">R$ 98,00</p>
            <button class="adicionar-carrinho" onclick="adicionarCarrinho(1, 'Ração GranPlus', 98.00, 'assets/img/produtos/ImgProduto1.png')">
              <img class="btn-plus" src="assets/img/icon-cart/icons-plus.png" alt="Adicionar ao Carrinho">
            </button>
          </div>
          <p class="a-vista">À vista</p>
        </div>
      </div>

      <!-- Produto 2 -->
      <div class="produto-item" data-id="2" data-descricao="Coleira Antipulgas" data-preco="185.00" data-img="ImgProduto2.png">
        <img src="assets/img/produtos/ImgProduto2.png" alt="Coleira" class="produto-img">
        <div class="produto-info">
          <p class="produto-descricao">Coleira Antipulgas e Carrapatos Seresto.</p>
          <div class="produto-preco-container">
            <p class="produto-preco">R$ 185,00</p>
            <button class="adicionar-carrinho" onclick="adicionarCarrinho(2, 'Coleira Antipulgas', 185.00, 'assets/img/produtos/ImgProduto2.png')">
              <img class="btn-plus" src="assets/img/icon-cart/icons-plus.png" alt="Adicionar ao Carrinho">
            </button>
          </div>
          <p class="a-vista">À vista</p>
        </div>
      </div>

      <!-- Produto 3 -->
      <div class="produto-item" data-id="3" data-descricao="Bifinho Selections" data-preco="30.00" data-img="ImgProduto3.png">
        <img src="assets/img/produtos/ImgProduto3.png" alt="Petiscos" class="produto-img">
        <div class="produto-info">
          <p class="produto-descricao">Bifinho Selections For Pets Strip Mini.</p>
          <div class="produto-preco-container">
            <p class="produto-preco">R$ 30,00</p>
            <button class="adicionar-carrinho" onclick="adicionarCarrinho(3, 'Bifinho Selections', 30.00, 'assets/img/produtos/ImgProduto3.png')">
              <img class="btn-plus" src="assets/img/icon-cart/icons-plus.png" alt="Adicionar ao Carrinho">
            </button>
          </div>
          <p class="a-vista">À vista</p>
        </div>
      </div>

      <!-- Produto 4 -->
      <div class="produto-item" data-id="4" data-descricao="Bravecto Plus" data-preco="180.00" data-img="ImgProduto4.png">
        <img src="assets/img/produtos/ImgProduto4.png" alt="Anti-pulgas" class="produto-img">
        <div class="produto-info">
          <p class="produto-descricao">Anti Pulgas Bravecto Plus para Gatos.</p>
          <div class="produto-preco-container">
            <p class="produto-preco">R$ 180,00</p>
            <button class="adicionar-carrinho" onclick="adicionarCarrinho(4, 'Bravecto Plus', 180.00, 'assets/img/produtos/ImgProduto4.png')">
              <img class="btn-plus" src="assets/img/icon-cart/icons-plus.png" alt="Adicionar ao Carrinho">
            </button>
          </div>
          <p class="a-vista">À vista</p>
        </div>
      </div>
    </div>
  </section>


</main>

<?php include 'includes/footer.php'; ?>