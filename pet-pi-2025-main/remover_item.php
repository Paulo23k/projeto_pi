<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Verifica se o carrinho existe na sessão
    if (isset($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $key => $item) {
            if ($item['id'] == $id) {
                // Remove o item do carrinho
                unset($_SESSION['carrinho'][$key]);
                $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
                break;
            }
        }
    }
}

header('Location: carrinho.php');
exit;
