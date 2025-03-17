<?php
include 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($conn, $_POST['sobrenome']);
    $data_nascimento = mysqli_real_escape_string($conn, $_POST['data_nascimento']);
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $cep = mysqli_real_escape_string($conn, $_POST['cep']);
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
    $estado = mysqli_real_escape_string($conn, $_POST['estado']);

    // Criptografando a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserindo os dados no banco
    $sql = "INSERT INTO usuarios (nome, sobrenome, data_nascimento, cpf, email, senha, cep, cidade, estado) 
            VALUES ('$nome', '$sobrenome', '$data_nascimento', '$cpf', '$email', '$senha_hash', '$cep', '$cidade', '$estado')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechando a conexão
    $conn->close();
}
?>
