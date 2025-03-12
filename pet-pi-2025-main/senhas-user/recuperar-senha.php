<?php
include 'includes/header-login.php';
require 'includes/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);

    // Verifica se o email existe no banco de dados
    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        // Gera um token seguro para recuperação de senha
        $token = bin2hex(random_bytes(50));
        
        // Salva o token no banco
        $stmt = $pdo->prepare("UPDATE usuarios SET token = ?, token_expira = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
        $stmt->execute([$token, $email]);

        // Link de recuperação
        $link = "http://localhost/pet-pi-2025/resetar-senha.php?token=$token";


        // Enviar e-mail de recuperação (simulado aqui)
        $assunto = "Recuperação de Senha";
        $mensagem = "Clique no link para redefinir sua senha: <a href='$link'>$link</a>";
        $headers = "Content-Type: text/html; charset=UTF-8";

        // Simulação de envio de email (em produção, use PHPMailer ou um serviço SMTP)
        mail($email, $assunto, $mensagem, $headers);

        $mensagem_sucesso = "Enviamos um link para seu e-mail.";
    } else {
        $erro = "E-mail não encontrado!";
    }
}
?>

<body>
    <div class="container">
        <div class="form">
            <form method="POST">
                <div class="form-header">
                    <h1>Recuperar Senha</h1>
                </div>

                <?php if (isset($erro)) : ?>
                    <div class="erro"><?php echo $erro; ?></div>
                <?php endif; ?>

                <?php if (isset($mensagem_sucesso)) : ?>
                    <div class="mensagem"><?php echo $mensagem_sucesso; ?></div>
                <?php endif; ?>

                <div class="input-box">
                    <label for="email">Digite seu e-mail</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="continue-button">
                    <button type="submit">Enviar Link</button>
                </div>

                <div class="forgot-password">
                    <a href="login.php">Voltar para o Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
