<?php
// require 'conexao.php'; 

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nome = $_POST['nome'];
//     $idade = $_POST['idade'];
//     $tipo = $_POST['tipo'];
//     $raca = $_POST['raca'];
    
//     $imagem = $_FILES['imagem'];
//     $caminhoImagem = '';
    
//     if ($imagem['error'] == 0) {
//         $extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);
//         $novoNome = uniqid() . "." . $extensao;
//         $diretorio = "uploads/";
        
//         if (!is_dir($diretorio)) {
//             mkdir($diretorio, 0777, true);
//         }
        
//         $caminhoImagem = $diretorio . $novoNome;
//         move_uploaded_file($imagem['tmp_name'], $caminhoImagem);
//     }
    
//     $sql = "INSERT INTO pets (nome, idade, tipo, raca, imagem) VALUES (?, ?, ?, ?, ?)";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute([$nome, $idade, $tipo, $raca, $caminhoImagem]);
    
//     echo "<script>alert('Pet cadastrado com sucesso!'); window.location.href='index.php';</script>";
// }
?>
<?php include 'includes/header-criar-conta.php'; ?>
<body>
    <div class="container">
        <div class="form">
            <div class="form-header">
                <h1>Cadastrar Pet</h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-box">
                    <label>Nome:</label>
                    <input type="text" name="nome" required>
                </div>
                <div class="input-box">
                    <label>Idade:</label>
                    <input type="number" name="idade" required>
                </div>
                <div class="input-box">
                    <label>Tipo:</label>
                    <input type="text" name="tipo" required>
                </div>
                <div class="input-box">
                    <label>Raça:</label>
                    <input type="text" name="raca" required>
                </div>
                <div class="input-box">
                    <label>Foto do Pet:</label>
                    <input type="file" name="imagem" accept="image/*" required>
                </div>
                <div class="continue-button">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
