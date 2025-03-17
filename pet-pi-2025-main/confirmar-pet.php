<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetLand - Confirmar Cadastro</title>
  <link rel="stylesheet" href="assets/css/ConfirmarCadastro/style-confirmar-cadastro.css">
</head>
<body>
  <div class="pagina-confirmar-pet">
    <div class="form-header">
      <h1>PetLand</h1>
    </div>
    <p class="mensagem">Deseja cadastrar seu Pet?</p>
    <div class="botao-container">
      <button class="botao" onclick="irParaPagina('registrar-pet.php')">Sim</button>
      <button class="botao-secundario" onclick="irParaPagina('pagina-inicial.php')">Não</button>
    </div>
  </div>

  <script>
    function irParaPagina(url) {
        window.location.href = url;
    }
  </script>
</body>
</html>
