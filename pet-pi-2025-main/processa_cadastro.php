<?php
include 'conexao.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Criptografando a senha
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

    $stmt = $connection->prepare("SELECT * FROM usuarios WHERE cpf = ? OR email = ?");
    $stmt->bind_param("ss", $cpf, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Erro: CPF ou e-mail já estão registrados.";
    } else {
        $stmt = $connection->prepare("INSERT INTO usuarios (nome, sobrenome, data_nascimento, cpf, email, senha, cep, cidade, estado) 
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $nome, $sobrenome, $data_nascimento, $cpf, $email, $senha, $cep, $cidade, $estado);

        if ($stmt->execute()) {
            header('Location: criar-conta.php');
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }
    }

    $stmt->close();
    $connection->close();
}
?>
