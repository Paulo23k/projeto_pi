<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_logado'])) {
    // Redireciona para a página de login se não estiver logado
    header('Location: login.php');
    exit();
}

$usuario = $_SESSION['usuario_logado']; // Recupera o email do usuário
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil - PetLand</title>
  <link rel="stylesheet" href="assets/css/estilo-inicial.css">
</head>
<body>
  <?php include 'includes/header-login.php'; ?>

  <main>
    <h1>Bem-vindo ao seu perfil, <?php echo htmlspecialchars($usuario); ?>!</h1>
    <p>Aqui você pode gerenciar suas informações pessoais, pedidos e muito mais.</p>
  </main>

  <footer>
    <?php include 'includes/footer.php'; ?>
  </footer>
</body>
</html>