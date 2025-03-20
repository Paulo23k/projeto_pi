<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Percorre o carrinho para encontrar o item com o ID correspondente
    foreach ($_SESSION['carrinho'] as $key => $item) {
        if ($item['id'] == $id) {
            unset($_SESSION['carrinho'][$key]); // Remove o item do carrinho
            break;
        }
    }

    // Reindexa o array para evitar problemas com índices
    $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
}

// Redireciona de volta para a página do carrinho
header('Location: ../carrinho.php');
exit;
?>