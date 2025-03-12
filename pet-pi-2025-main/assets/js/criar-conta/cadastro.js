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

