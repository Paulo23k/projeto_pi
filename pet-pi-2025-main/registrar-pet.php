<?php include 'includes/header-criar-conta.php'; ?>

<body>
    <div class="container">
        <div class="form-container">
            <!-- Imagem do lado direito -->
            <div class="form-image">
                <img src="assets/img/CriarConta/CadastroUser.png" alt="Imagem de Cadastro do Pet">
            </div>

            <!-- Formulário -->
            <div class="form">
                <form method="POST" action="processa_cadastro_pet.php" enctype="multipart/form-data">
                    <div class="form-header">
                        <h1>Cadastrar Pet</h1>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome">Nome do Pet</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome do Pet" required>
                        </div>

                        <div class="input-box">
                            <label for="tipo">Tipo de Animal</label>
                            <input type="text" name="tipo" id="tipo" placeholder="Tipo de animal" required>
                        </div>

                        <div class="input-box">
                            <label for="sexo">Sexo</label>
                            <select name="sexo" id="sexo" required>
                                <option value="">Selecione</option>
                                <option value="Macho">Macho</option>
                                <option value="Fêmea">Fêmea</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <label for="peso">Peso (kg)</label>
                            <input type="number" step="0.01" name="peso" id="peso" placeholder="Peso do pet" required>
                        </div>

                        <div class="input-box">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" id="data_nascimento" required>
                        </div>

                        <div class="input-box">
                            <label for="imagem">Foto do Pet</label>
                            <input type="file" name="imagem" id="imagem" accept="image/*" required>
                        </div>

                        <div class="continue-button">
                            <button type="submit">Cadastrar Pet</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
