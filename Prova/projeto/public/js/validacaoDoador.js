

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

function validacaoSelect(campo) {

    let n = campo.value;

    if (campo.selectedIndex === 0 || campo === 'selecione') {
        campo.classList.add('is-invalid');
        campo.focus();
        return false;
    }
    else {
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        return true;
    }


}


function cadastrarDoador() {


    let doador = document.getElementById('nome');
    let tipo = document.getElementById('tipo');


    if (
        validacaoString(doador) &&
        validacaoSelect(tipo)
    ) {

        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }
}
