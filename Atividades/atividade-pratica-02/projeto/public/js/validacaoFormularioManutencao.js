

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

function validacaoData(campo) {

    let n = campo.value;

    let dataAtual = new Date();



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

function validaSelectEqui(campo) {

    campo.classList.remove('is-invalid');
    campo.classList.add('is-valid');
    return true;

}


function cadastrarManutencao() {


    let descricao = document.getElementById('descricao');
    let equipamento_id = document.getElementById('equipamento_id');
    let tipo = document.getElementById('tipo');
    let data = document.getElementById('dataLimite');


    if (
        validacaoSelect(equipamento_id) &&
        validacaoString(descricao) &&
        validacaoData(data) &&
        validacaoSelect(tipo)

    ) {

        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }
}


function atualizarManutencao() {


    let descricao = document.getElementById('descricao');
    let equipamento_id = document.getElementById('equipamento_id');
    let data = document.getElementById('dataLimite');
    let tipo = document.getElementById('tipo');


    if (

        validaSelectEqui(equipamento_id) &&
        validacaoString(descricao) &&
        validacaoData(data) &&
        validacaoSelect(tipo)



    ) {

        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }
}

