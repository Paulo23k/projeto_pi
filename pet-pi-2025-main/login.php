<?php include 'includes/header-login.php'; ?>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/LoginUser/LoginUser.png" alt="Imagem de Login">
        </div>
        <div class="button-back">
            <button onclick="window.history.back()" aria-label="Voltar">
                &#8592; Anterior
            </button>
        </div>
        <div class="form">
            <form method="POST" action="">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                        <div class="login-section">
                            <span>Não tem uma conta?</span>
                            <a href="criar-conta.php" class="login-button">Criar Conta</a>
                        </div>
                    </div>
                </div>
                
                <?php if (isset($erro)) : ?>
                    <div class="erro"> <?php echo $erro; ?> </div>
                <?php endif; ?>
                
                <div class="input-group">
                    <div class="input-box">
                        <label for="email">Email ou CPF</label>
                        <input type="text" name="email" id="email" placeholder="Digite seu email ou nome de usuário" required>
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
</body>

<script src="assets/js/login/login.js"></script>
