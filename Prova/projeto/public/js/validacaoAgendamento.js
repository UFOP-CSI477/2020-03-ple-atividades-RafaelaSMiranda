

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
        window.alert('Não é permitido agendamento para doação com data retroativa');
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

