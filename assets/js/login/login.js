document.getElementById("email").addEventListener("input", function () {
    const emailOrCpf = this.value;
    if (isCPF(emailOrCpf)) {
        formatarCPF(this);
        validarCPF();
    } else {
        validarEmail();
    }
});

document.getElementById("email").addEventListener("blur", function () {
    const emailOrCpf = this.value;
    
    if (isCPF(emailOrCpf)) {
        validarCPF();
    } else {
        validarEmail();
    }
});

// Função para verificar se é CPF
function isCPF(value) {
    // Verifica se o valor tem 11 caracteres numéricos (Formato CPF)
    
    value = value.replace('.', '')
    value = value.replace('.', '')
    value = value.replace('-', '')
    console.log(value)
    return !isNaN(value);
    // return value.replace(/\D/g, '').length === 11;
}

// Função para formatar o CPF
function formatarCPF(input) {
    let cpf = input.value.replace(/\D/g, ''); // Remove tudo que não é número

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

// Função para validar CPF (Formato e numeração)
function validarCPF() {
    let cpfInput = document.getElementById("email");
    let cpf = cpfInput.value.replace(/\D/g, ''); // Remove pontos e hífen
    let cpfError = document.getElementById("email-error");

    // Verifica se o CPF está vazio ou tem um formato inválido
    if (cpf === "" || cpf.length !== 11) {
        cpfError.textContent = "XXX  incorreta.";
        cpfInput.classList.add("error");
        cpfInput.classList.remove("valid");
    } else {
        cpfError.textContent = "";
        cpfInput.classList.remove("error");
        cpfInput.classList.add("valid");
    }
}

// Função para validar o Email
function validarEmail() {
    let emailInput = document.getElementById("email");
    let emailError = document.getElementById("email-error");
    let email = emailInput.value.trim();

    // Validação do formato do email
    if (email === "" || !/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        emailError.textContent = "Credencial incorreta.";
        emailInput.classList.add("error");
        emailInput.classList.remove("valid");
    } else {
        emailError.textContent = "";
        emailInput.classList.remove("error");
        emailInput.classList.add("valid");
    }
}
