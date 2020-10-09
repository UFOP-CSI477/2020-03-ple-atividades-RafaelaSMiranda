

function validacaoEmail(campo) {


    let n = campo.value;


    if (n.length === 0 || n.indexOf('@') === -1) {
        window.alert("O campo de e-mail deve possuir o seguinte formato: xxx@xxx")
        campo.classList.add('is-invalid');
        campo.value = "";
        campo.focus();
        return false;
    }
    else {
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        return true;

    }


}

function validacaoString(campo) {

    let n = campo.value;

    if (n.length === 0) {
        campo.classList.add('is-invalid');
        campo.value = "";
        campo.focus();
        return false;
    }
    else {
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        return true;
    }


}

function validacaoObservacao(campo) {

    let n = campo.value;

    if (n.length === 0) {
        campo.value = "Sem observações";
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');

    }
    else {
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');

    }

    return true;


}

function validacaoPedido() {

    let nome = document.getElementById('nome');
    let endereco = document.getElementById('endereco');
    let referencia = document.getElementById('referencia');
    let pagamento = document.getElementById('pagamento');
    let contato = document.getElementById('contato');
    let email = document.getElementById('email');
    let observacao = document.getElementById('observacao');

    console.log('entrou aqui');


    if (
        validacaoString(nome) &&
        validacaoString(endereco) &&
        validacaoString(referencia) &&
        validacaoString(pagamento) &&
        validacaoString(contato) &&
        validacaoObservacao(observacao) &&
        validacaoEmail(email)
    ) {

        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }




}
