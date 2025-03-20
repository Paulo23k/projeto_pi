<?php
session_start();

// Recebe os dados do JavaScript
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id'], $data['nome'], $data['preco'], $data['imagem'])) {
    $item = [
        'id' => $data['id'],
        'nome' => $data['nome'],
        'preco' => $data['preco'],
        'imagem' => $data['imagem'],
        'quantidade' => $data['quantidade'] ?? 1 // Quantidade padrão é 1
    ];

    // Adiciona o item ao carrinho na sessão
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    $_SESSION['carrinho'][] = $item;

    // Retorna uma resposta de sucesso
    echo json_encode(['success' => true]);
} else {
    // Retorna uma resposta de erro
    echo json_encode(['success' => false, 'message' => 'Dados inválidos']);
}
exit;
?>