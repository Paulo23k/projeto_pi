<?php
$titulo = $_GET['titulo'] ?? "Título não informado";
$foto = $_GET['foto'] ?? "ProdutoIndisponivel";

$pageTitle = 'PetLand - ' . $titulo;
include 'includes/header.php';



?>

<main>
  <section>
    <h1 class="h1-destaque-dog">Produtos - <?php echo $titulo?></h1>


    <!-- Primeira div com 6 imagens -->
    <div class="grupo-imagens" style="display: flex; justify-content: center; flex-wrap: wrap; width: 1200px; margin: 0 auto">

    <?php
      for ($i = 1; $i <= 12; $i++) {
        ?>
        <div class="item-carrossel"><img src="assets/img/Swiper/<?php echo $foto . '.png'; ?>" alt="Produto <?php echo $i; ?>"></div>
        <?php
      }
    ?>
      
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>