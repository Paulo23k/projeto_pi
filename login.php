<?php
session_start();
$erro = isset($_SESSION['erro_login']) ? $_SESSION['erro_login'] : '';
unset($_SESSION['erro_login']); // Remove o erro após exibição
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - PetLand</title>
  <link rel="stylesheet" href="assets/css/login/estilo-login.css">
</head>

<body>
  <?php include 'includes/header-login.php'; ?>

  <div class="container">
    <div class="form-image">
      <img src="assets/img/LoginUser/LoginUser.png" alt="Imagem de Login">
    </div>
    <div class="form">
      <form method="POST" action="processa-login.php" id="formLogin">
        <div class="form-header">
          <div class="title">
            <h1>Login</h1>
            <div class="login-section">
              <span class="naotemconta">Não tem uma conta?</span>
              <a href="criar-conta.php" class="login-button">Criar Conta</a>
            </div>
          </div>
        </div>

        <!-- Exibir mensagem de erro como pop-up -->
        <?php if (!empty($erro)): ?>
          <div id="erroPopup" class="erro-popup">
            <p><?php echo htmlspecialchars($erro); ?></p>
            <button onclick="fecharPopup()">OK</button>
          </div>
        <?php endif; ?>

        <div class="input-group">
          <div class="input-box">
            <label for="email">Email ou CPF</label>
            <input type="text" name="email" id="email" placeholder="Digite seu email ou cpf" required>
          </div>

          <div class="input-box">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
          </div>
        </div>
        <div class="continue-button">
          <button type="submit" id="btnlogin">Entrar</button>
        </div>
        <div class="forgot-password">
          <a href="senhas-user/recuperar-senha.php">Esqueceu a senha?</a>
        </div>

        <!-- Login Social -->
        <div class="login-social">
          <p>Ou faça login com:</p>
          <a class="hover-icon" href="#" aria-label="Login com Google">
            <img src="assets/img/icons-rs/iconsgoogle.png" alt="Login com Google">
          </a>
          <a class="hover-icon" href="#" aria-label="Login com Facebook">
            <img src="assets/img/icons-rs/iconfacebook.png" alt="Login com Facebook">
          </a>
          <a class="hover-icon" href="#" aria-label="Login com Instagram">
            <img src="assets/img/icons-rs/iconinstagram.png" alt="Login com Instagram">
          </a>
          <a class="hover-icon" href="#" aria-label="Login com Twitter">
            <img src="assets/img/icons-rs/iconsx.png" alt="Login com Twitter">
          </a>
        </div>
      </form>
    </div>
  </div>

  <!-- JavaScript para fechar o pop-up de erro -->
  <script>
    // Função para exibir o pop-up de erro
    function exibirErro(mensagem) {
      const popup = document.getElementById("erroPopup");
      popup.querySelector("p").textContent = mensagem; // Coloca a mensagem de erro no pop-up
      popup.style.display = "block"; // Exibe o pop-up
    }

    // Função para fechar o pop-up
    function fecharPopup() {
      document.getElementById("erroPopup").style.display = "none";
    }

    // Caso o erro já tenha sido definido no PHP, o pop-up será exibido
    <?php if (!empty($erro)): ?>
      exibirErro("<?php echo htmlspecialchars($erro); ?>");
    <?php endif; ?>
  </script>

  <script src="assets/js/login/login.js"></script>
</body>

</html>