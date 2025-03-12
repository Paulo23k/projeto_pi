// Função para redirecionar para a página específica
function irParaPagina(pagina) {
    window.location.href = pagina;
  }
  
  // Função para simular o login
  function fazerLogin() {
    alert("Login realizado com sucesso!");
  }
  
  // Função para simular a criação de uma conta
  function criarConta() {
    alert("Conta criada com sucesso!");
  }
  
  // Função para simular o registro de um pet
  function registrarPet() {
    alert("Pet cadastrado com sucesso!");
  }
  
  // Adiciona evento de clique no botão de busca
  document.querySelector('.searchButton').addEventListener('click', function() {
    const searchTerm = document.querySelector('.searchTerm').value;
    if (searchTerm) {
      alert('Você está buscando por: ' + searchTerm);
    } else {
      alert('Digite algo para buscar!');
    }
  });
  
  // Adiciona efeitos de zoom no campo de busca ao digitar
  document.querySelector('.searchTerm').addEventListener('input', function() {
    document.querySelector('.search').classList.add('zoom'); // Aplica o zoom na barra de busca
  });
  
  // Remove o efeito de zoom quando o campo perde o foco
  document.querySelector('.searchTerm').addEventListener('blur', function() {
    document.querySelector('.search').classList.remove('zoom'); // Remove o zoom
  });


