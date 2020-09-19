function validarNome(nome) {

    if (nome.value.length === 0) {
        nome.classList.add('is-invalid');
        nome.value = "";
        nome.focus()

        return false;
    }
    else {
        nome.classList.remove('is-invalid');
        nome.classList.add('is-valid');

        return true;
    }

}


function validarUm(um) {

    if ((um.value.length === 0) || (um.value.length > 3)) {
        um.classList.add('is-invalid');
        um.value = "";

        return false;
    }
    else {
        um.classList.remove('is-invalid');
        um.classList.add('is-valid');


        return true;
    }

}



function cadastrar() {

    let nome = document.getElementById('nome');
    let um = document.getElementById('um');

    if (
        validarNome(nome) &&
        validarUm(um)
    ) {
        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }
}
