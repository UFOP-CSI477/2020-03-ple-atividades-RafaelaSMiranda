

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
function cadastrarEquipamento() {


    let nome = document.getElementById('nome');


    if (
        validacaoString(nome)

    ) {

        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }
}


