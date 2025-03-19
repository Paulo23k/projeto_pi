<?php
session_start();

// Verifica se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Exemplo fictício de autenticação (substitua pela lógica real)
    if ($email === 'usuario_teste@example.com' && $senha === 'senha_teste') {
        // Login bem-sucedido
        $_SESSION['usuario_logado'] = $email; // Armazena o email do usuário na sessão
        header('Location: perfil.php'); // Redireciona para o perfil
        exit();
    } else {
        // Login falhou
        $_SESSION['erro_login'] = 'Email ou senha incorretos.'; // Armazena a mensagem de erro na sessão
        header('Location: login.php'); // Redireciona de volta para a página de login
        exit();
    }
} else {
    // Se o formulário não foi enviado corretamente
    $_SESSION['erro_login'] = 'Requisição inválida.';
    header('Location: login.php');
    exit();
}
?>