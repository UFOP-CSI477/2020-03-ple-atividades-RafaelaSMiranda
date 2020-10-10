

let interval;

function tempo() {

    var hora = new Date();
    var h = hora.toLocaleTimeString();

    document.getElementById('hora').innerHTML = h;

}


function iniciar() {

    interval = setInterval(tempo, 1000);

}

function parar() {

    clearInterval(interval);

}
