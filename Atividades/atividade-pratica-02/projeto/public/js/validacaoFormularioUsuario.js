

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

    if (n.length < 6) {

        window.alert("O campo senha deve conter mais de 6 caracteres.")
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

function validacaoSenhaConfirmacao(campoSenha, campoConfirmacao) {

    let senha = campoSenha.value;
    let confirmacao = campoConfirmacao.value;

    if (senha != confirmacao) {

        window.alert("As senhas não conferem, favor verificar.")
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


function cadastrarUsuario() {


    let nome = document.getElementById('name');
    let email = document.getElementById('email');
    let senha = document.getElementById('password');
    let senhaConfirmacao = document.getElementById('password-confirm');



    if (
        validacaoString(nome) &&
        validacaoEmail(email) &&
        validacaoSenha(senha) &&
        validacaoSenhaConfirmacao(senha, senhaConfirmacao)

        ) {

            window.alert("Dados verificados com sucesso !");
            return true;
        } else {
            return false;
        }
}

