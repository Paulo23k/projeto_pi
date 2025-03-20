<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="assets/css/carrinho/carrinho.css">
</head>

<body>
    <header>
        <h1>Carrinho de Compras</h1>
    </header>

    <main>
        <?php
        if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
            echo "<div class='carrinho-vazio'>";
            echo "<p>Seu carrinho está vazio.</p>";
            echo "<a href='pagina-inicial.php'>Voltar às compras</a>";
            echo "</div>";
            exit;
        }
        ?>
        <h2>Produtos no Carrinho</h2>
        <div class="produtos-carrinho">
            <?php
            $total = 0;
            foreach ($_SESSION['carrinho'] as $item):
                $total += $item['preco'];
            ?>
                <div class="produto-carrinho">
                    <img src="<?= $item['imagem'] ?>" alt="<?= $item['nome'] ?>" class="produto-carrinho-img">
                    <div class="produto-carrinho-info">
                        <p><strong><?= $item['nome'] ?></strong></p>
                        <p>Preço: R$ <?= number_format($item['preco'], 2, ',', '.') ?></p>
                        <button onclick="removerItemCarrinho(<?= $item['id'] ?>)">Remover</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="total-carrinho">
            <h3>Total: R$ <?= number_format($total, 2, ',', '.') ?></h3>
            <a href="/carrinho/finalizar-compra.php" class="btn">Finalizar Compra</a>
        </div>
    </main>

    <footer>
        <a href="pagina-inicial.php">Voltar às compras</a>
    </footer>

    <script>
        function removerItemCarrinho(id) {
            if (confirm("Você tem certeza que deseja remover este item do carrinho?")) {
                window.location.href = `carrinho/remover-item.php?id=${id}`;
            }
        }
    </script>
</body>

</html>