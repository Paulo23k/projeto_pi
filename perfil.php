<?php
session_start();
include 'conexao.php';

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_logado'])) {
  header('Location: login.php');
  exit();
}

$usuario_email = $_SESSION['usuario_logado']; // Recupera o email do usuário

// Consulta para obter os dados do usuário
$stmt = $connection->prepare("SELECT id, nome, sobrenome, cpf, cep, cidade, estado FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $usuario_email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
  echo "Erro: Usuário não encontrado.";
  exit();
}

$usuario = $result->fetch_assoc();
$id_usuario = $usuario['id'];

// Consulta para obter os pets cadastrados pelo usuário
$stmt = $connection->prepare("SELECT nome, tipo, sexo, peso, data_nascimento, imagem FROM pets_cadastrados WHERE id_dono = ?");
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$pets_result = $stmt->get_result();

$pets = [];
while ($row = $pets_result->fetch_assoc()) {
  $pets[] = $row;
}

$stmt->close();
$connection->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil - PetLand</title>
  <link rel="stylesheet" href="assets/css/login/estilo-perfil-logado.css">
</head>

<body>
  <?php include 'includes/header-login.php'; ?>

  <main>
    <h1>Bem-vindo ao seu perfil, <?php echo htmlspecialchars($usuario['nome']); ?>!</h1>

    <h2>Seus dados</h2>
    <p><strong>Nome:</strong> <?php echo htmlspecialchars($usuario['nome'] . ' ' . $usuario['sobrenome']); ?></p>
    <p><strong>CPF:</strong> <?php echo htmlspecialchars($usuario['cpf']); ?></p>
    <p><strong>Endereço:</strong> <?php echo htmlspecialchars($usuario['cidade'] . ', ' . $usuario['estado']); ?> (CEP: <?php echo htmlspecialchars($usuario['cep']); ?>)</p>

    <h2>Seus Pets</h2>
    <?php if (empty($pets)): ?>
      <p>Você ainda não cadastrou nenhum pet.</p>
      <a href="registrar-pet.php" class="register-pet-button">Registrar Pet</a>
    <?php else: ?>
      <div class="pets-container">
        <?php foreach ($pets as $pet): ?>
          <div class="pet-card">
            <img src="<?php echo htmlspecialchars($pet['imagem']); ?>" alt="Foto de <?php echo htmlspecialchars($pet['nome']); ?>">
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($pet['nome']); ?></p>
            <p><strong>Tipo:</strong> <?php echo htmlspecialchars($pet['tipo']); ?></p>
            <p><strong>Sexo:</strong> <?php echo htmlspecialchars($pet['sexo']); ?></p>
            <p><strong>Peso:</strong> <?php echo htmlspecialchars($pet['peso']); ?> kg</p>
            <p><strong>Data de Nascimento:</strong> <?php echo date('d/m/Y', strtotime($pet['data_nascimento'])); ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <div class="button-container">
      <a class="button" href="pagina-inicial.php">Página Inicial</a>
      <a class="button" href="logout.php" class="logout">Logout</a>
    </div>
  </main>
</body>

</html>