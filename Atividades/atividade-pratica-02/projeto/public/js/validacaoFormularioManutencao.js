

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


    var data = campo.value; // pega o valor do input// substitui eventuais barras (ex. IE) "/" por hífen "-"
    var data_array = data.split("-"); // quebra a data em array
    var dia = data_array[2];
    var mes = data_array[1];
    var ano = data_array[0];

    // para o IE onde será inserido no formato dd/MM/yyyy
    if (data_array[0].length != 4) {
        dia = data_array[0];
        mes = data_array[1];
        ano = data_array[2];
    }

    var hoje = new Date();
    var d1 = hoje.getDate();
    var m1 = hoje.getMonth() + 1;
    var a1 = hoje.getFullYear();

    var d1 = new Date(a1, m1, d1);
    var d2 = new Date(ano, mes, dia);

    var diff = d2.getTime() - d1.getTime();
    diff = diff / (1000 * 60 * 60 * 24);

    if (diff < 0 ) {
        window.alert('Não é permitido agendar manutenção com data limite retroativa');
        campo.classList.add('is-invalid');
        campo.value = "";
        campo.focus();
        return false;
    }  else {
        console.log("Data válida!");
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

