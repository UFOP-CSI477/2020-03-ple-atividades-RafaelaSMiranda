


function adicionar(id) {



    console.log(id);

    let value = document.getElementById(id);

    console.log(value.value);

    value++;

    // console.log(value);

    // value = parseInt(value) +1;

    // console.log(value);

    document.getElementById(id).innerHTML = value;




}
