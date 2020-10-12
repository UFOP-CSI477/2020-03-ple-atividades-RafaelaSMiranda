

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

function atualizacaoSelect(campo) {

    campo.classList.remove('is-invalid');
    campo.classList.add('is-valid');
    return true;

}




function validacaoProduto() {

    let nome = document.getElementById('nome');
    let descricao = document.getElementById('descricao');
    let valor = document.getElementById('valor');
    let tipo = document.getElementById('tipo');
    let condicao = document.getElementById('condicao');


    if (
        validacaoString(nome) &&
        validacaoString(descricao) &&
        validacaoString(valor) &&
        validacaoSelect(tipo) &&
        validacaoSelect(condicao)
    ) {

        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }


}


function atualizacaoProduto() {

    let nome = document.getElementById('nome');
    let descricao = document.getElementById('descricao');
    let valor = document.getElementById('valor');
    let tipo = document.getElementById('tipo');
    let condicao = document.getElementById('condicao');


    if (
        validacaoString(nome) &&
        validacaoString(descricao) &&
        validacaoString(valor) &&
        atualizacaoSelect(tipo) &&
        atualizacaoSelect(condicao)
    ) {

        window.alert("Dados verificados com sucesso !");
        return true;
    } else {
        return false;
    }


}
