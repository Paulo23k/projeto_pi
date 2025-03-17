<?php
include "conexao.php";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"]
    $insertDados = "INSERT INTO usuarios(nome, sobrenome, data_nascimento, cpf,
    email, senha, cep, cidade, estado ) VALUES ('$nome', '$sobrenome', '$data_nascimento',
    '$email', '$senha', '$cep', '$cidade', '$estado')";
    $connection->query($insertDados);
}

$url = "criar-conta.php";

header('Location: '.$url);

$connection->close();
?>