<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php'); // Redireciona para a página de login
    exit;
}

$usuario_id = $_SESSION['usuario_id'];

// Verifica se o carrinho está vazio
if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
    header('Location: carrinho.php'); // Redireciona se o carrinho estiver vazio
    exit;
}

$host = "localhost";
$user = "root";
$password = "";
$dbname = "petland_bd";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// Iniciar uma transação
$pdo->beginTransaction();

try {
    // 1. Calcular o total da compra
    $total = 0;
    foreach ($_SESSION['carrinho'] as $item) {
        $total += $item['preco'];
    }

    // 2. Salvar os dados da compra no banco de dados
    $stmt = $pdo->prepare("INSERT INTO pedidos (usuario_id, total, data_pedido) VALUES (:usuario_id, :total, NOW())");
    $stmt->bindValue(':usuario_id', $usuario_id);
    $stmt->bindValue(':total', $total);
    $stmt->execute();

    // Recupera o ID do pedido recém-criado
    $pedido_id = $pdo->lastInsertId();

    // 3. Salvar os itens do carrinho na tabela de itens_pedido
    foreach ($_SESSION['carrinho'] as $item) {
        $stmt = $pdo->prepare("INSERT INTO itens_pedido (pedido_id, produto_id, quantidade, preco) VALUES (:pedido_id, :produto_id, :quantidade, :preco)");
        $stmt->bindValue(':pedido_id', $pedido_id);
        $stmt->bindValue(':produto_id', $item['id']);
        $stmt->bindValue(':quantidade', 1); // Quantidade fixa (ajuste conforme necessário)
        $stmt->bindValue(':preco', $item['preco']);
        $stmt->execute();
    }

    // Commit da transação
    $pdo->commit();

    // 4. Recuperar o e-mail do usuário
    $stmt = $pdo->prepare("SELECT email FROM usuarios WHERE id = :usuario_id");
    $stmt->bindValue(':usuario_id', $usuario_id);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $email_cliente = $usuario['email']; // E-mail do usuário logado

        // 5. Enviar um e-mail de confirmação (opcional)
        $assunto = "Confirmação de Compra";
        $mensagem = "Obrigado por comprar conosco! Seu pedido foi finalizado com sucesso.\n";
        $mensagem .= "Total da compra: R$ " . number_format($total, 2, ',', '.') . "\n";
        $mensagem .= "Número do pedido: $pedido_id\n";

        if (mail($email_cliente, $assunto, $mensagem)) {
            // E-mail enviado com sucesso
        } else {
            // Erro ao enviar o e-mail
        }
    } else {
        throw new Exception("Usuário não encontrado.");
    }

    // 6. Limpar o carrinho após a compra
    unset($_SESSION['carrinho']);

    // 7. Redirecionar para a página de confirmação
    header('Location: compra_finalizada.php');
    exit;
} catch (Exception $e) {
    // Em caso de erro, desfaz a transação
    $pdo->rollBack();
    die("Erro ao finalizar a compra: " . $e->getMessage());
}
?>