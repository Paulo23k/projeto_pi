<?php
session_start();

// Verificar se o ID do produto foi enviado
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Verifica se o carrinho existe na sessão
    if (isset($_SESSION['carrinho'])) {
        // Loop para procurar o item com o ID no carrinho
        foreach ($_SESSION['carrinho'] as $key => $item) {
            if ($item['id'] == $id) {
                // Remove o item do carrinho
                unset($_SESSION['carrinho'][$key]);
                // Reindexar o array após a remoção
                $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
                break;
            }
        }
    }
}

// Redireciona de volta para o carrinho
header('Location: carrinho.php');
exit;
