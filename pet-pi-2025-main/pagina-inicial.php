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
    <div class="app">
    <!-- Imagem com áreas clicáveis -->
    <img 
        src="./assets/img/Cupom/cupom.png" 
        alt="Cupom de desconto" 
        usemap="#cupom-map"
    >
    
    <!-- Mapa de imagem -->
    <map name="cupom-map">
        <!-- Área clicável para Google Play -->
    <area target="_blank" alt="Google play" title="Google play" href="https://play.google.com/store/games" coords="254,65,354,100" shape="rect">
    <area target="_blank" alt="Apple Store" title="Apple Store" href="https://www.apple.com/br/app-store/" coords="257,111,356,147" shape="rect">
    </map>
</div>
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
</main>

<?php include 'includes/footer.php'; ?>
