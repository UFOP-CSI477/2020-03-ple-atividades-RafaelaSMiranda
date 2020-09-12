
function verificaEntrada(valor) {

    valor.classList.remove('is-invalid');

    if (valor.value.length > 0 || (isNaN(parseFloat(valor.value)) && valor.value < 0)) {
        valor.classList.add('is-valid');
        return true;
    } else {
        valor.classList.add('is-invalid');
    }

}

function limpar() {

    document.getElementById('amplitude').value = "";
    document.getElementById('tempo').value = "";
    document.getElementById('magnitude').value = "";
    document.getElementById("amplitude").disabled = false;
    document.getElementById("amplitude").classList.remove('is-valid');
    document.getElementById("tempo").disabled = false;
    document.getElementById("tempo").classList.remove('is-valid');
    document.getElementById("calcular").disabled = false;
    document.getElementById("novoCalculo").disabled = true;
    var remove = document.getElementById('carregando');
    remove.classList.add('spinner-border');
    remove.classList.add('spinner-border-sm');
    document.getElementById('primeiro').style.backgroundColor = 'transparent';
    document.getElementById('segundo').style.backgroundColor = 'transparent';
    document.getElementById('terceiro').style.backgroundColor = 'transparent';
    document.getElementById('quarto').style.backgroundColor = 'transparent';
    document.getElementById('quinto').style.backgroundColor = 'transparent';
    document.getElementById('sexto').style.backgroundColor = 'transparent';




}

function bloquearEdesbloquear() {

    document.getElementById("amplitude").disabled = true;
    document.getElementById("tempo").disabled = true;
    document.getElementById("calcular").disabled = true;
    document.getElementById("novoCalculo").disabled = false;
    var remove = document.getElementById('carregando');
    remove.classList.remove('spinner-border');
    remove.classList.remove('spinner-border-sm');




}



function calcularMag() {


    let amplitude = document.getElementById("amplitude");
    let tempo = document.getElementById("tempo");

    let valorAmplitude = amplitude.value;
    let valorTempo = tempo.value;


    if (verificaEntrada(amplitude) && verificaEntrada(tempo)) {
        bloquearEdesbloquear();

        resultado = (Math.log10(parseFloat(valorAmplitude))) + (3 * Math.log10(8 * parseFloat(valorTempo))) - 2.92;

        console.log(resultado)

        document.getElementById('magnitude').value = resultado.toFixed(2);


        if (resultado < 3.5) {

            document.getElementById('primeiro').style.backgroundColor = "rgb(189, 243, 189)";
        }
        else if (resultado >= 3.5 && resultado <= 5.4) {
            document.getElementById('segundo').style.backgroundColor = "rgb(189, 243, 189)";
        }
        else if (resultado >= 5.5 && resultado <= 6) {
            document.getElementById('terceiro').style.backgroundColor = "rgb(189, 243, 189)";
        }
        else if (resultado >= 6.1 && resultado <= 6.9) {
            document.getElementById('quarto').style.backgroundColor = "rgb(189, 243, 189)";
        }
        else if (resultado >= 7.0 && resultado <= 7.9) {
            document.getElementById('quinto').style.backgroundColor = "rgb(189, 243, 189)";
        }
        else if (resultado > 8) {
            document.getElementById('sexto').style.backgroundColor = "rgb(189, 243, 189)";
        }


    }




}