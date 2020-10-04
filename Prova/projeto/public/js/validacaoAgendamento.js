

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

function validacaoData(campo) {


    let n = campo.value;


    if (n.length === 0) {
        campo.classList.add('is-invalid');
        campo.value = "";
        totalAtual = 0;
        totalInformado = 0;
        campo.focus();
        return false;
    }
    else {
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        totalAtual = 0;
        totalInformado = 0;
        return true;
    }

}

function validaSelectDoador(campo) {

    campo.classList.remove('is-invalid');
    campo.classList.add('is-valid');
    return true;

}

function validacaoSelectLocal(campo) {

    campo.classList.remove('is-invalid');
    campo.classList.add('is-valid');
    return true;

}



function cadastrarAgendamento() {


    let doador = document.getElementById('pessoa_id');
    let local = document.getElementById('coleta_id');
    let data = document.getElementById('data');


    if (
        validacaoSelect(doador) &&
        validacaoSelect(local) &&
        validacaoData(data)

    ) {

        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }
}


function atualizarAgendamento() {


    let doador = document.getElementById('pessoa_id');
    let local = document.getElementById('coleta_id');
    let data = document.getElementById('data');



    if (

        validaSelectDoador(doador) &&
        validacaoSelectLocal(local) &&
        validacaoData(data)

    ) {

        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }
}

