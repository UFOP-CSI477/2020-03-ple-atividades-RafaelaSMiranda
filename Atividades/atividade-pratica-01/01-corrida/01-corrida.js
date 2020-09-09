
var numeroParticipantes = 0;
let listaParticipantes = [];

function verificaEntrada(valor) {

    valor.classList.remove('is-invalid');

    if (valor.value.length > 0) {
        return true;
    } else {
        valor.classList.add('is-invalid');
    }

}

function Participante(nome, tempo, largada) {

    this.nome = nome;
    this.tempo = tempo;
    this.largada = largada;
}

function inserirParticipante() {

    var nome = document.getElementById('nome');
    var tempo = document.getElementById('tempo');


    if (numeroParticipantes <= 6) {

        if (verificaEntrada(nome) && verificaEntrada(tempo)) {

            // let participante = {

            //     nome: '',
            //     tempo: '',
            //     largada: ''
            // };

            numeroParticipantes += 1;
            var linha = document.createElement('tr');
            linha.insertCell(0).innerHTML = numeroParticipantes;
            linha.insertCell(1).innerHTML = nome.value;
            linha.insertCell(2).innerHTML = parseInt(tempo.value);

            // participante.nome = nome.value;
            // participante.tempo = parseInt(tempo.value);
            // participante.largada = numeroParticipantes;

            const participante = new Participante(nome.value, tempo.value, numeroParticipantes);


            listaParticipantes.push(participante);

            document.getElementById('tableDados').appendChild(linha);
            document.getElementById('resultado').disabled = false;

            nome.value = "";
            tempo.value = "";
        }
    }


    if (parseInt(numeroParticipantes) === 6) {
        document.getElementById('inserir').disabled = true;
        tempo.disabled = true;
        nome.disabled = true;

    }


}

function calcularResultado() {

    document.getElementById('resultado').disabled = true;

    if (listaParticipantes.length > 0) {

        document.getElementById('inserir').disabled = true;
        tempo.disabled = true;
        nome.disabled = true;

        // ordenar - utilizar o método sort (os valores precisam ser inteiros)


        listaParticipantes.sort(function (a, b) {

            if (a.tempo < b.tempo) {
                return -1;
                // retorno -1, significa que precisa inverter as posições
            } else if (a.tempo > b.tempo) {
                return 1;
            } else {
                return 0;
            }
        });

        var tempoInicial = listaParticipantes[0].tempo;

        for (var i = 0; i < listaParticipantes.length; i++) {
            let linha = document.createElement('tr');
            linha.insertCell(0).innerHTML = i + 1;
            linha.insertCell(1).innerHTML = listaParticipantes[i].largada;
            linha.insertCell(2).innerHTML = listaParticipantes[i].nome;
            linha.insertCell(3).innerHTML = listaParticipantes[i].tempo;

            if (listaParticipantes[i].tempo === tempoInicial) {
                linha.insertCell(4).innerHTML = "Vencedor(a)!"
            } else {
                linha.insertCell(4).innerHTML = "-"
            }

            document.getElementById('tableResultado').appendChild(linha);
            document.getElementById('novamente').disabled = false;
        }
    }
    else {
        alert('Não há participante cadastrado');
    }
}

function recarregaPagina() {
    location.reload();
}