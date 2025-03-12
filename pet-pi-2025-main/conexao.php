<?php
$host = "localhost"; // Se necessário, mude para IP do servidor
$usuario = "root"; // Seu usuário do MySQL
$senha = ""; // Se houver senha, coloque aqui
$banco = "petland_bd"; // Nome do banco de dados

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
