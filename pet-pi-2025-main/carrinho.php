<?php
// Verifica se há itens no carrinho (por exemplo, poderia ser uma sessão no servidor)
session_start();

// Se não houver carrinho, redireciona para a página inicial
if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
    header('Location: pagina-inicial.php'); // Redirecionar para a página inicial ou mostrar mensagem
    exit;
}

// Caso você tenha um backend para persistir o carrinho, aqui seria onde você iria conectar-se ao banco de dados
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="style.css"> <!-- Adicione seu arquivo de estilos -->
</head>
<body>
    <header>
        <h1>Carrinho de Compras</h1>
    </header>

    <main>
        <?php if (empty($_SESSION['carrinho'])): ?>
            <p>Seu carrinho está vazio.</p>
            <a href="index.php">Voltar às compras</a>
        <?php else: ?>
            <h2>Produtos no Carrinho</h2>
            <div class="produtos-carrinho">
                <?php
                // Exibir os itens do carrinho
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
                <a href="finalizar_compra.php" class="btn">Finalizar Compra</a>
            </div>
        <?php endif; ?>
    </main>

    <footer>
        <a href="index.php">Voltar às compras</a>
    </footer>

    <script>
        // Função para remover item do carrinho
        function removerItemCarrinho(id) {
            if (confirm("Você tem certeza que deseja remover este item do carrinho?")) {
                // Enviar requisição para PHP para remover o item
                window.location.href = `remover_item.php?id=${id}`;
            }
        }
    </script>
</body>
</html>
