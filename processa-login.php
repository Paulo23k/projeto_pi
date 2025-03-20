<?php
session_start();
include 'conexao.php'; // Certifique-se de que esse arquivo está correto

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    // Consulta ao banco de dados
    $stmt = $connection->prepare("SELECT id, nome, email, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_logado'] = $usuario['email'];
            $_SESSION['id_usuario'] = $usuario['id'];
            $_SESSION['nome_usuario'] = $usuario['nome'];

            header('Location: perfil.php');
            exit();
        } else {
            $_SESSION['erro_login'] = "Senha incorreta.";
        }
    } else {
        $_SESSION['erro_login'] = "Usuário não encontrado.";
    }

    header('Location: login.php'); // Redireciona de volta para o login
    exit();
}
?>
