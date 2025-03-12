<?php include 'includes/header-criar-conta.php'; ?>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/CriarConta/CadastroUser.png" alt="Imagem de Cadastro">
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
                        <h1>Criar Conta</h1>
                        <div class="login-section">
                            <span>Já tem uma conta?</span>
                            <a href="login.php" class="login-button">Login</a>
                    </div>
                    </div>
                </div>

                <!-- Campos do Formulário -->
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <span class="error-message" id="nome-error"></span>
                        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="sobrenome">Sobrenome</label>
                        <span class="error-message" id="sobrenome-error"></span>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <span class="error-message" id="data_nascimento-error"></span>
                        <input type="date" name="data_nascimento" id="data_nascimento" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <span class="error-message" id="cpf-error"></span>
                        <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="exemplo@email.com" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="cep">CEP</label>
                        <input type="text" name="cep" id="cep" placeholder="00000-000" pattern="\d{5}-\d{3}" required>
                    </div>

                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" readonly>
                    </div>

                    <div class="input-box">
                        <label for="estado">Estado</label>
                        <input type="text" name="estado" id="estado" readonly>
                    </div>
                </div>
                <div class="continue-button">
                    <button type="submit" id="btnlogin">Criar Conta</button>
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

<script src="assets/js/criar-conta/cadastro.js"></script>