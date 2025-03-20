
document.getElementById('cep').addEventListener('blur', function () {
    const cep = this.value.replace(/\D/g, ''); // Remove qualquer coisa que não seja número
    if (cep.length === 8) {
        fetch(`https://cep.awesomeapi.com.br/json/${cep}`)
            .then(response => response.json())
            .then(data => {
                if (data.city && data.state) {
                    document.getElementById('cidade').value = data.city;
                    document.getElementById('estado').value = data.state;
                } else {
                    fnAdicionarMensagemDeErro(this, "CEP não encontrado.");
                }
            })
            .catch(error => {
                console.error('Erro ao buscar CEP:', error);
                fnAdicionarMensagemDeErro(this, "Erro ao buscar CEP.");
            });
    } else {
        fnAdicionarMensagemDeErro(this, "CEP inválido.");
    }
});

// VALIDAÇÃO NOME
document.getElementById("nome").addEventListener("blur", function () {
    validarNome();
});

document.getElementById("nome").addEventListener("input", function () {
    validarNome();
});

function validarNome() {
    let nomeInput = document.getElementById("nome");
    let nome = nomeInput.value.trim();
    let nomeError = document.getElementById("nome-error");
    let regex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/; // Apenas letras e espaços

    if (nome === "") {
        nomeError.textContent = "O campo é obrigatório.";
        nomeInput.classList.add("error");
        nomeInput.classList.remove("valid");
    } else if (!regex.test(nome)) {
        nomeError.textContent = "Deve conter apenas letras.";
        nomeInput.classList.add("error");
        nomeInput.classList.remove("valid");
    } else if (nome.length < 2 || nome.length > 50) {
        nomeError.textContent = "Deve ter entre 3 e 50 caracteres.";
        nomeInput.classList.add("error");
        nomeInput.classList.remove("valid");
    } else {
        nomeError.textContent = "";
        nomeInput.classList.add("valid");
        nomeInput.classList.remove("error");
    }
}

// VALIDAÇÃO SOBRENOME
document.getElementById("sobrenome").addEventListener("blur", function () {
    validarSobrenome();
});

document.getElementById("sobrenome").addEventListener("input", function () {
    validarSobrenome();
});

function validarSobrenome() {
    let sobrenomeInput = document.getElementById("sobrenome");
    let sobrenome = sobrenomeInput.value.trim();
    let sobrenomeError = document.getElementById("sobrenome-error");
    let regex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/; // Apenas letras e espaços

    if (sobrenome === "") {
        sobrenomeError.textContent = "O campo é obrigatório.";
        sobrenomeInput.classList.add("error");
        sobrenomeInput.classList.remove("valid");
    } else if (!regex.test(sobrenome)) {
        sobrenomeError.textContent = "Deve conter apenas letras.";
        sobrenomeInput.classList.add("error");
        sobrenomeInput.classList.remove("valid");
    } else if (sobrenome.length < 2 || sobrenome.length > 50) {
        sobrenomeError.textContent = "Deve ter entre 3 e 50 caracteres.";
        sobrenomeInput.classList.add("error");
        sobrenomeInput.classList.remove("valid");
    } else {
        sobrenomeError.textContent = "";
        sobrenomeInput.classList.add("valid");
        sobrenomeInput.classList.remove("error");
    }
}

// VALIDAÇÃO DATA NASCIMENTO (CAMPO OBRIGATÓRIO)
document.getElementById("data_nascimento").addEventListener("blur", function () {
    validarDataNascimento();
});

document.getElementById("data_nascimento").addEventListener("input", function () {
    validarDataNascimento();
});

function validarDataNascimento() {
    let dataNascimentoInput = document.getElementById("data_nascimento");
    let dataNascimento = new Date(dataNascimentoInput.value);
    let dataNascimentoError = document.getElementById("data_nascimento-error");
    let hoje = new Date();
    let idade = hoje.getFullYear() - dataNascimento.getFullYear();
    let mes = hoje.getMonth() - dataNascimento.getMonth();

    if (dataNascimentoInput.value === "") {
        dataNascimentoError.textContent = "O campo é obrigatório.";
        dataNascimentoInput.classList.add("error");
        dataNascimentoInput.classList.remove("valid");
    } else if (idade < 18 || (idade === 18 && mes < 0)) {
        dataNascimentoError.textContent = "Você deve ser maior de 18 anos.";
        dataNascimentoInput.classList.add("error");
        dataNascimentoInput.classList.remove("valid");
    } else {
        dataNascimentoError.textContent = "";
        dataNascimentoInput.classList.add("valid");
        dataNascimentoInput.classList.remove("error");
    }
}

// Validação do CPF
document.getElementById("cpf").addEventListener("input", function () {
    formatarCPF(this);
    validarCPF();
});

document.getElementById("cpf").addEventListener("blur", function () {
    validarCPF();
});

function formatarCPF(input) {
    let cpf = input.value.replace(/\D/g, ''); 

    if (cpf.length > 11) {
        cpf = cpf.substring(0, 11); 
    }

    if (cpf.length <= 3) {
        input.value = cpf;
    } else if (cpf.length <= 6) {
        input.value = `${cpf.slice(0, 3)}.${cpf.slice(3)}`;
    } else if (cpf.length <= 9) {
        input.value = `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6)}`;
    } else {
        input.value = `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6, 9)}-${cpf.slice(9)}`;
    }
}

function validarCPF() {
    let cpfInput = document.getElementById("cpf");
    let cpf = cpfInput.value.replace(/\D/g, ''); // Remove pontos e hífen
    let cpfError = document.getElementById("cpf-error");

    // Se o campo estiver vazio, mostrar mensagem de erro
    if (cpf === "") {
        cpfError.textContent = "O campo é obrigatório.";
        cpfInput.classList.add("error");
        cpfInput.classList.remove("valid");
        return;
    }

    // Se o CPF for inválido, mostrar mensagem de erro
    if (cpf.length !== 11 || !validarCPFNumerico(cpf)) {
        cpfError.textContent = "CPF inválido.";
        cpfInput.classList.add("error");
        cpfInput.classList.remove("valid");
    } else {
        cpfError.textContent = "";
        cpfInput.classList.remove("error");
        cpfInput.classList.add("valid");
    }
}

function validarCPFNumerico(cpf) {
    if (/^(\d)\1{10}$/.test(cpf)) return false; // Impede CPFs com números repetidos

    let soma = 0, resto;

    for (let i = 1; i <= 9; i++) {
        soma += parseInt(cpf.charAt(i - 1)) * (11 - i);
    }
    resto = (soma * 10) % 11;
    if (resto === 10 || resto === 11) resto = 0;
    if (resto !== parseInt(cpf.charAt(9))) return false;

    soma = 0;
    for (let i = 1; i <= 10; i++) {
        soma += parseInt(cpf.charAt(i - 1)) * (12 - i);
    }
    resto = (soma * 10) % 11;
    if (resto === 10 || resto === 11) resto = 0;
    if (resto !== parseInt(cpf.charAt(10))) return false;

    return true;
}

// Validação do Email
document.getElementById("email").addEventListener("blur", function () {
    validarEmail();
});

document.getElementById("email").addEventListener("input", function () {
    validarEmail();
});

// Função de validação do Email
function validarEmail() {
    let emailInput = document.getElementById("email");
    let emailError = document.getElementById("email-error");
    let email = emailInput.value.trim();

    if (email === "") {
        emailError.textContent = "O campo de email é obrigatório.";
        emailInput.classList.add("error");
        emailInput.classList.remove("valid");
    }
    else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        emailError.textContent = "Email inválido.";
        emailInput.classList.add("error");
        emailInput.classList.remove("valid");
    } else {
        emailError.textContent = "";
        emailInput.classList.remove("error");
        emailInput.classList.add("valid");
    }
}

//VALIDAÇÃO SENHA
document.getElementById("senha").addEventListener("blur", function () {
    validarSenha();
});

document.getElementById("senha").addEventListener("input", function () {
    validarSenha();
});

function validarSenha() {
    let senhaInput = document.getElementById("senha");
    let senhaError = document.getElementById("senha-error");
    let senha = senhaInput.value.trim();

    if (senha === "") {
        senhaError.textContent = "O campo de senha é obrigatório.";
        senhaInput.classList.add("error");
        senhaInput.classList.remove("valid");
    }
    else if (senha.length < 12) {
        senhaError.textContent = "A senha deve ter pelo menos 12 caracteres.";
        senhaInput.classList.add("error");
        senhaInput.classList.remove("valid");
    }
    else if (!/[!@#$%^&*(),.?":{}|<>]/.test(senha)) {
        senhaError.textContent = "A senha deve conter pelo menos 1 caractere especial.";
        senhaInput.classList.add("error");
        senhaInput.classList.remove("valid");
    } else {
        senhaError.textContent = "";
        senhaInput.classList.remove("error");
        senhaInput.classList.add("valid");
    }
}

// Validação do CEP
document.getElementById("cep").addEventListener("input", function () {
    validarCEP();
});

document.getElementById("cep").addEventListener("blur", function () {
    validarCEP();
});

function formatarCEP(input) {
    let cep = input.value.replace(/\D/g, ''); // Remove tudo que não for número

    if (cep.length > 8) {
        cep = cep.substring(0, 8); // Limita a 8 dígitos
    }

    if (cep.length <= 5) {
        input.value = cep;
    } else {
        input.value = `${cep.slice(0, 5)}-${cep.slice(5)}`;
    }
}

function validarCEP() {
    let cepInput = document.getElementById("cep");
    let cep = cepInput.value.replace(/\D/g, ''); // Remove traços e espaços
    let cepError = document.getElementById("cep-error");
    let regex = /^[0-9]{5}-[0-9]{3}$/; // Verifica se tem o formato correto 00000-000

    formatarCEP(cepInput); // Formata o CEP enquanto o usuário digita

    if (cep === "") {
        cepError.textContent = "O campo é obrigatório.";
        cepInput.classList.add("error");
        cepInput.classList.remove("valid");
    } else if (!regex.test(cepInput.value)) {
        cepError.textContent = "CEP inválido. O formato correto é 00000-000.";
        cepInput.classList.add("error");
        cepInput.classList.remove("valid");
    } else {
        cepError.textContent = "";
        cepInput.classList.add("valid");
        cepInput.classList.remove("error");
    }
}

document.getElementById("formCadastro").addEventListener("submit", function (event) {
    event.preventDefault();

    if (document.querySelectorAll(".error").length == 0) {
        // Criando um objeto FormData para enviar os dados do formulário via AJAX
        var formData = new FormData(this);

        // Usando AJAX para enviar os dados
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "processa_cadastro.php", true);

        xhr.onload = function () {
            if (xhr.status === 200) {
                // Recebendo a resposta JSON do PHP
                var response = JSON.parse(xhr.responseText);

                if (response.status === 'erro') {
                    // Exibe o pop-up de erro
                    exibirPopupErro(response.mensagem);
                } else if (response.status === 'sucesso') {
                    // Se o cadastro for bem-sucedido, redireciona o usuário
                    alert(response.mensagem);
                    window.location.href = "confirmar-pet.php";
                }
            } else {
                alert("Ocorreu um erro ao tentar cadastrar. Tente novamente.");
            }
        };

        xhr.send(formData); 
    } else {
        alert("Por favor, preencha todos os campos corretamente.");
    }
});

function exibirPopupErro(mensagem) {
    // Criando o pop-up de erro
    var popup = document.createElement('div');
    popup.classList.add('popup');
    
    var popupContent = document.createElement('div');
    popupContent.classList.add('popup-content');
    
    var titulo = document.createElement('h2');
    titulo.innerText = 'Erro';
    
    var mensagemErro = document.createElement('p');
    mensagemErro.innerText = mensagem;

    var botao = document.createElement('button');
    botao.innerText = 'OK';
    botao.onclick = function() {
        document.body.removeChild(popup); // Fecha o pop-up ao clicar em "OK"
    };

    popupContent.appendChild(titulo);
    popupContent.appendChild(mensagemErro);
    popupContent.appendChild(botao);
    popup.appendChild(popupContent);
    document.body.appendChild(popup);

    // Estilo CSS do pop-up
    var style = document.createElement('style');
    style.innerHTML = `
        .popup {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }
        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
            width: 80%;
        }
        button {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #6DD0FF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1b9ddb;
        }
    `;
    document.head.appendChild(style);
}

