<?php
include 'includes/header-login.php';
require 'includes/conexao.php'; // Arquivo de conexão com o banco

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verifica se o token é válido e não expirou
    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE token = ? AND token_expira > NOW()");
    $stmt->execute([$token]);

    if ($stmt->rowCount() == 0) {
        die("Token inválido ou expirado.");
    }
} else {
    die("Token ausente.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $novaSenha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Atualiza a senha no banco e remove o token
    $stmt = $pdo->prepare("UPDATE usuarios SET senha = ?, token = NULL, token_expira = NULL WHERE token = ?");
    $stmt->execute([$novaSenha, $token]);

    echo "<script>alert('Senha alterada com sucesso!'); window.location.href='login.php';</script>";
}
?>

<body>
    <div class="container">
        <div class="form">
            <form method="POST">
                <div class="form-header">
                    <h1>Redefinir Senha</h1>
                </div>

                <div class="input-box">
                    <label for="senha">Nova Senha</label>
                    <input type="password" name="senha" id="senha" required>
                </div>

                <div class="continue-button">
                    <button type="submit">Alterar Senha</button>
                </div>
            </form>
        </div>
    </div>
</body>
