

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

function validacaoSenha(campo) {

    let n = campo.value;

    if (n.length < 6 || n.length > 8) {

        window.alert("O campo senha deve conter entre 6 e 8 caracteres ou números.")
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

function validacaoEmail(campo) {


    let n = campo.value;


    if (n.length === 0 || n.indexOf('@') === -1 || n.indexOf('.com') === -1) {
        window.alert("O campo de e-mail deve possuir o seguinte formato: xxx@xxx.com")
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


function validacaoCpf(campo) {
    let n = campo.value;

    if (n.length < 11 || n.length > 11 || isNaN(parseInt(n))) {

        window.alert("Formato inválido do CPF. É preciso conter 11 caracteres e apenas números.")
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

function validacaoTelefone(campo) {
    let n = campo.value;

    if (n.length < 10 || n.length > 11 || isNaN(parseInt(n))) {

        window.alert("Formato inválido do telefone. Verifique, por gentileza!")
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

function validacaoRg(campo) {
    let n = campo.value;

    if (n.length < 8 || n.length > 10) {

        window.alert("Formato inválido do RG. Verifique, por gentileza!")
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

function validacaoData(campo) {

    let n = campo.value;

    let dataAtual = new Date();

    let dateNasc = n.split('-');


    if (n.length === 0 || dateNasc[0] > (dataAtual.getFullYear() - 11)) {
        window.alert("Formato inválido da data. Ah! É preciso que você tenha mais de 11 anos, ok? :)")
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

function validacaoCheck(solteiro, casado, naoInformar) {


    if (!(solteiro.checked) && !(casado.checked) && !(naoInformar.checked)) {
        window.alert("Marque o seu estado civil, por gentileza!")
        return false;
    }
    else{
        return true;
    }


}

function cadastrar() {

    let nome = document.getElementById('nome');
    let endereco = document.getElementById('endereco');
    let nacionalidade = document.getElementById('nacionalidade');
    let usuario = document.getElementById('usuario');
    let senha = document.getElementById('senha');
    let email = document.getElementById('email');
    let cpf = document.getElementById('cpf');
    let telefone = document.getElementById('telefone');
    let tf = document.getElementById('rg');
    let nasc = document.getElementById('nasc');
    let solteiro = document.getElementById('solteiro');
    let casado = document.getElementById('casado');
    let naoInformar = document.getElementById('naoInformar');


    if (
        validacaoString(nome) &&
        validacaoString(endereco) &&
        validacaoString(nacionalidade) &&
        validacaoString(usuario) &&
        validacaoSenha(senha) &&
        validacaoEmail(email) &&
        validacaoCpf(cpf) &&
        validacaoTelefone(telefone) &&
        validacaoRg(rg) &&
        validacaoData(nasc) &&
        validacaoCheck(solteiro, casado, naoInformar)) {

            window.alert("Dados verificados com sucesso ! Cadastro realizado.")
        }
}