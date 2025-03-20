<?php
include 'conexao.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function limparEntrada($conn, $dado) {
        return mysqli_real_escape_string($conn, trim($dado));
    }

    // Receber e limpar os dados do pet
    $nome = limparEntrada($connection, $_POST["nome"]);
    $tipo = limparEntrada($connection, $_POST["tipo"]);
    $sexo = limparEntrada($connection, $_POST["sexo"]);
    $peso = limparEntrada($connection, $_POST["peso"]);
    $data_nascimento = limparEntrada($connection, $_POST["idade"]);

    // Verificação do upload da imagem
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem_nome = $_FILES['imagem']['name'];
        $imagem_tmp = $_FILES['imagem']['tmp_name'];
        $imagem_ext = pathinfo($imagem_nome, PATHINFO_EXTENSION);
        
        $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array(strtolower($imagem_ext), $extensoes_permitidas)) {
            echo "<script>alert('Erro: A imagem deve ser no formato JPG, JPEG, PNG ou GIF.'); window.history.back();</script>";
            exit;
        }

        $imagem = 'uploads/' . $imagem_nome;

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        if (!move_uploaded_file($imagem_tmp, $imagem)) {
            echo "<script>alert('Erro ao fazer upload da imagem.'); window.history.back();</script>";
            exit;
        }
    } else {
        echo "<script>alert('Erro no envio da imagem.'); window.history.back();</script>";
        exit;
    }

    // Verificar se o ID do dono está na sessão
    if (!isset($_SESSION['id'])) {
        echo "<script>alert('Erro: Nenhum dono identificado para o pet.'); window.history.back();</script>";
        exit;
    }

    $id_dono = $_SESSION['id']; // Acessando o ID do dono

    // Inserir os dados do pet
    $stmt = $connection->prepare("INSERT INTO pets_cadastrados (nome, tipo, sexo, peso, data_nascimento, imagem, id_dono) 
                                  VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssdssi", $nome, $tipo, $sexo, $peso, $data_nascimento, $imagem, $id_dono);

    if ($stmt->execute()) {
        echo "<script>alert('Pet cadastrado com sucesso!'); window.location.href = 'login.php';</script>";
        exit;
    } else {
        echo "<script>alert('Erro ao cadastrar pet: " . $stmt->error . "'); window.history.back();</script>";
    }

    $stmt->close();
    $connection->close();
}
?>
