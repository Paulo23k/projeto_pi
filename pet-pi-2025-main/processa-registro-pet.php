<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Função para limpar dados de entrada
    function limparEntrada($conn, $dado) {
        return mysqli_real_escape_string($conn, trim($dado));
    }

    // Recebe os dados do formulário
    $nome = limparEntrada($connection, $_POST["nome"]);
    $tipo = limparEntrada($connection, $_POST["tipo"]);
    $sexo = limparEntrada($connection, $_POST["sexo"]);
    $peso = limparEntrada($connection, $_POST["peso"]);
    $idade = limparEntrada($connection, $_POST["idade"]);
    
    // Verifica se a imagem foi enviada
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem_nome = $_FILES['imagem']['name'];
        $imagem_tmp = $_FILES['imagem']['tmp_name'];
        $imagem_destino = 'uploads/' . $imagem_nome;
        
        // Move a imagem para a pasta 'uploads'
        if (move_uploaded_file($imagem_tmp, $imagem_destino)) {
            // Sucesso ao fazer upload da imagem
        } else {
            echo "Erro ao fazer upload da imagem.";
            exit;
        }
    } else {
        echo "Erro no envio da imagem.";
        exit;
    }

    // Obtém o ID do dono (usuário) logado
    session_start();  // Inicia a sessão
    $id_dono = $_SESSION['usuario_id'];  // Supondo que o ID do usuário esteja armazenado na sessão

    if (!$id_dono) {
        echo "Erro: Nenhum dono identificado para o pet.";
        exit;
    }

    // Insere o pet no banco de dados
    $stmt = $connection->prepare("INSERT INTO pets_cadastrados (nome, tipo, sexo, peso, idade, imagem, id_dono) 
                                  VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssdssi", $nome, $tipo, $sexo, $peso, $idade, $imagem_destino, $id_dono);

    if ($stmt->execute()) {
        // Redireciona para uma página de sucesso ou a página inicial
        header('Location: cadastro_sucesso.php');
        exit;
    } else {
        echo "Erro ao cadastrar pet: " . $stmt->error;
    }

    // Fecha a conexão
    $stmt->close();
    $connection->close();
}
?>
