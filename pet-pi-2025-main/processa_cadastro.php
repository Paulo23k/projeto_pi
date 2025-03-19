<?php
include 'conexao.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function limparEntrada($conn, $dado) {
        return mysqli_real_escape_string($conn, trim($dado));
    }

    // Coletando e limpando os dados do formulário
    $nome = limparEntrada($connection, $_POST["nome"]);
    $sobrenome = limparEntrada($connection, $_POST["sobrenome"]);
    $data_nascimento = limparEntrada($connection, $_POST["data_nascimento"]);
    $cpf = limparEntrada($connection, preg_replace("/\D/", "", $_POST["cpf"])); // Remove caracteres não numéricos
    $email = filter_var(limparEntrada($connection, $_POST["email"]), FILTER_SANITIZE_EMAIL);
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Criptografando a senha
    $cep = limparEntrada($connection, $_POST["cep"]);
    $cidade = limparEntrada($connection, $_POST["cidade"]);
    $estado = limparEntrada($connection, $_POST["estado"]);

    // Verificando se o CPF ou o email já existem no banco
    $stmt = $connection->prepare("SELECT * FROM usuarios WHERE cpf = ? OR email = ?");
    $stmt->bind_param("ss", $cpf, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Se o CPF ou email já existirem
    if ($result->num_rows > 0) {
        echo "Erro: CPF ou e-mail já estão registrados.";
    } else {
        // Se não houver duplicatas, inserir o usuário na tabela
        $stmt = $connection->prepare("INSERT INTO usuarios (nome, sobrenome, data_nascimento, cpf, email, senha, cep, cidade, estado, criado_em) 
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssssssss", $nome, $sobrenome, $data_nascimento, $cpf, $email, $senha, $cep, $cidade, $estado);

        if ($stmt->execute()) {
            // Inicia a sessão e armazena o ID do usuário na variável de sessão
            session_start();
            $_SESSION['id'] = $connection->insert_id;  // Salva o ID do usuário recém-cadastrado na sessão

            // Redireciona para a página de cadastro de pet (ou página que você preferir)
            header('Location: registrar-pet.php');
            exit;
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }
    }

    // Fechar a conexão e liberar recursos
    $stmt->close();
    $connection->close();
}
?>
