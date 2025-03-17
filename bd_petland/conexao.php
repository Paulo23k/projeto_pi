<?php
$servername = "localhost"; // Endereço do servidor MySQL
$username = "root";        // Usuário do banco de dados
$password = "";            // Senha do banco de dados
$dbname = "cadastro_usuarios"; // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
