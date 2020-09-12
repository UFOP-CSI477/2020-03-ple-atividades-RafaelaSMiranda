

function verificaEntrada(valor) {

    valor.classList.remove('is-invalid');

    if (valor.value.length > 0) {
        valor.classList.add('is-valid');
        return true;
    } else {
        valor.classList.add('is-invalid');
    }

}

function calcularIMC() {


    var peso = document.getElementById('peso');
    var altura = document.getElementById('altura');
    var classificacao = "";
    var pesoIdealMin = 0;
    var pesoIdealMax = 0;

    if (verificaEntrada(peso) && verificaEntrada(altura)) {

        document.getElementById('btnResultado').disabled = false;
        document.getElementById('calcular').disabled = true;
        document.getElementById('peso').disabled = true;
        document.getElementById('altura').disabled = true;
        var remove = document.getElementById('carregando');
        remove.classList.remove('spinner-border');
        remove.classList.remove('spinner-border-sm');


        var resultadoAltura = (parseFloat(altura.value) * parseFloat(altura.value));
        var resultadoIMC = parseFloat(parseFloat(peso.value) / resultadoAltura).toFixed(2);

        // calcula o indice ideal

        if (resultadoIMC < 18.5) {
            classificacao = "Subnutrição"
        } else if (18.5 <= resultadoIMC && resultadoIMC <= 24.9) {
            classificacao = "Peso Saudável"
        } else if (25 <= resultadoIMC && resultadoIMC <= 29.9) {
            classificacao = "Sobrepeso"
        } else if (30 <= resultadoIMC && resultadoIMC <= 34.9) {
            classificacao = "Obesidade grau 1"
        } else if (35 <= resultadoIMC && resultadoIMC <= 39.9) {
            classificacao = "Obesidade grau 2"
        } else if (resultadoIMC >= 40) {
            classificacao = "Obesidade grau 3"
        }

        pesoIdealMin = parseFloat(18.5 * resultadoAltura).toFixed(2);
        pesoIdealMax = parseFloat(21.9 * resultadoAltura).toFixed(2);

        document.getElementById('imc').value = resultadoIMC;
        document.getElementById('class').value = classificacao;
        document.getElementById('pesoIdeal').value = "Entre " + pesoIdealMin + " e " + pesoIdealMax;

        console.log(pesoIdealMax, pesoIdealMin, resultadoIMC);
    }

}




function limparDados() {

    document.getElementById('peso').value = "";
    document.getElementById('altura').value = "";
    document.getElementById('imc').value = "";
    document.getElementById('class').value = "";
    document.getElementById('pesoIdeal').value = "";
    document.getElementById('calcular').disabled = false;
    document.getElementById('peso').disabled = false;
    document.getElementById('altura').disabled = false;
    document.getElementById('btnResultado').disabled = true;
    document.getElementById('peso').classList.remove('is-valid');
    document.getElementById('altura').classList.remove('is-valid');
    
}