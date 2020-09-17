let countDownDate;
let diaInformado;
let mesInformado;
let anoInformado;

function dados() {

    diaInformado = document.getElementById('dia').value;
    mesInformado = document.getElementById('mes').value;
    anoInformado = document.getElementById('ano').value;

    countDownDate = new Date(`${mesInformado}, ${diaInformado}, ${anoInformado}`);
    
    document.getElementById('diaExibe').innerHTML = diaInformado + " /";
    

    if(mesInformado === "January"){
    document.getElementById('mesExibe').innerHTML = "Janeiro";
    } else if (mesInformado === "February"){
        document.getElementById('mesExibe').innerHTML = "Fevereiro"
    }else if (mesInformado === "February"){
        document.getElementById('mesExibe').innerHTML = "Fevereiro"
    }else if (mesInformado === "March"){
        document.getElementById('mesExibe').innerHTML = "Março"
    }else if (mesInformado === "April"){
        document.getElementById('mesExibe').innerHTML = "Abril"
    }else if (mesInformado === "May"){
        document.getElementById('mesExibe').innerHTML = "Maio"
    }else if (mesInformado === "June"){
        document.getElementById('mesExibe').innerHTML = "Junho"
    }else if (mesInformado === "July"){
        document.getElementById('mesExibe').innerHTML = "Julho"
    }else if (mesInformado === "Agost"){
        document.getElementById('mesExibe').innerHTML = "Agosto"
    }else if (mesInformado === "September"){
        document.getElementById('mesExibe').innerHTML = "Setembro"
    }else if (mesInformado === "October"){
        document.getElementById('mesExibe').innerHTML = "Outubro"
    }else if (mesInformado === "November"){
        document.getElementById('mesExibe').innerHTML = "Novembro"
    }else if (mesInformado === "December"){
        document.getElementById('mesExibe').innerHTML = "Dezembro"
    }

    document.getElementById('anoExibe').innerHTML = " / " + anoInformado;

    console.log(countDownDate)
    interval();

}


// Atualiza o seu contador a cada 1 segundo
function interval(){
const countDown = setInterval(date, 1000);
}

function date() {

    let now = new Date();

    console.log(now)

    // Encontrando a distância entre as datas
    let distanceDateNow = now.getTime();
    let distanceDateInicial = countDownDate.getTime();

    let distance = distanceDateInicial - distanceDateNow;

    console.log(distance)


    if (distance > 0) {
        // Calculando os dias/horas/minutos/segundos 

        let segundos = (distance / 1000);

        console.log(segundos)
        // 86400 = 1hora (3600 seg) * 24
        let dia = parseInt(segundos / 86400);
        segundos = segundos % 86400;

        console.log(segundos)

        let hora = parseInt(segundos / 3600);
        segundos = segundos % 3600;

        console.log(segundos)

        let min = parseInt(segundos / 60);
        let seg = parseInt(segundos % 60)

        document.getElementById("countdown-day").innerHTML = dia;
        document.getElementById("countdown-hours").innerHTML = hora;
        document.getElementById("countdown-minutes").innerHTML = min;
        document.getElementById("countdown-seconds").innerHTML = seg;



    }
    //     // Insira os suas variáveis no html (use os ids já presentes no HTML)
}