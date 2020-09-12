
let historico = [];

function exibeValores(caracter) {

    document.getElementById('exibeValores').value += caracter;

}


function exibeResultado(valor) {

    document.getElementById('exibeResultado').value = valor;
}


function realizaOperacao() {

    let valor = document.getElementById('exibeValores').value;

    if (valor.length > 0) {

        let cal;

        try {

            cal = eval(valor)
            exibeResultado(cal);

            let hist = new Operacao(valor, cal);
            historico.push(hist);

            console.log(historico)



        } catch (err) {
            window.alert("Ops! Inserção incorreta");
            limparVisor();

        }
    } else {

        window.alert("Informe pelo menos uma operação.")
    }

}

function limparVisor() {

    document.getElementById("exibeValores").value = "";
    document.getElementById("exibeResultado").value = "";

}

function Operacao(visor, result) {

    this.visor = visor;
    this.result = result;

}

function exibirHistorico() {

    document.getElementById("exibeValores").value = "";
    document.getElementById("exibeResultado").value = "";

    for (let i = 0; i < historico.length; i++) {

        document.getElementById("exibeValores").value += historico[i].visor + "=" + historico[i].result + " ~ ";

    }
}


function valores(caracter) {

    let visor = document.getElementById("exibeValores").value;

    if (caracter === '=') {
        realizaOperacao();
    } else if (caracter === 'C') {
        limparVisor();
    } else if (caracter === 'hist') {
        exibirHistorico();
    }
    else {

        visor += caracter;
        document.getElementById("exibeValores").value = visor;
    }


}

function remover() {

    var str = document.getElementById('exibeValores').value;

    str = str.substring(str.length - 1, -1);

    document.getElementById('exibeValores').value = str;


}

