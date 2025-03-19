<?php include 'includes/header-registrar-pet.php'; ?>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/CriarConta/CadastroUser.png" alt="Imagem de Cadastro">
        </div>
        <div class="form">
        <form method="POST" action="processa-registro-pet.php" enctype="multipart/form-data">
                    <div class="form-header">
                        <h1>Cadastrar Pet</h1><br><br>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome">Nome do Pet</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome do Pet" required>
                        </div>

                        <div class="input-box">
                            <label for="tipo">Tipo de Animal</label>
                            <select name="tipo" id="tipo" required>
                                <option value="">Selecione o tipo de animal</option>
                                <option value="Cachorro">Cachorro</option>
                                <option value="Gato">Gato</option>
                                <option value="Pássaro">Pássaro</option>
                                <option value="Peixe">Peixe</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <label for="sexo">Sexo</label>
                            <select name="sexo" id="sexo" required>
                                <option value="">Selecione</option>
                                <option value="Macho">Macho</option>
                                <option value="Fêmea">Fêmea</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <label for="peso">Peso (kg)</label>
                            <input type="number" step="1" name="peso" id="peso" placeholder="Peso do pet" required min="0">
                        </div>

                        <div class="input-box">
                            <label for="idade">Data de Nascimento</label>
                            <input type="date" name="idade" id="idade" required>
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
</body>
