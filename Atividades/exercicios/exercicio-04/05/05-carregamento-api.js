function limparSelect(campo) {

    while (campo.length > 1) {

        campo.remove(1);
    }

}


function preencherSelectRegiao(data) {

    let regiao = document.getElementById("regiao");
    limparSelect(regiao);

    for (let index in data) {
        // const id = data[index].id;

        const { id, nome, sigla } = data[index];

        let option = document.createElement("option");

        option.value = id;
        option.innerHTML = `${nome} - ${sigla}`

        regiao.appendChild(option);
    }

}

function preencherSelectCidades(data) {

    let cidade = document.getElementById("cidade");
    limparSelect(cidade);

    for (let index in data) {
        const { id, nome } = data[index];

        let option = document.createElement("option");

        option.value = id;
        option.innerHTML = nome;

        cidade.appendChild(option);
    }
}

function preencherSelectEstado(data) {

    let estado = document.getElementById('estado');
    limparSelect(estado);

    for (let index in data) {
        const { id, nome, sigla } = data[index];

        let option = document.createElement("option");

        option.value = id;
        option.innerHTML = `${nome} - ${sigla}`;

        estado.appendChild(option);
    }

  
}

function carregarEstados() {

   
    const regiao = document.getElementById('regiao');
    const regiao_index = regiao.selectedIndex;
    const regiao_id = regiao.options[regiao_index].value;


    const estados = document.getElementById('estado');
    limparSelect(estados);

    if (regiao_id === "") {
        return;
    }

    let url_estado = `https://servicodados.ibge.gov.br/api/v1/localidades/regioes/${regiao_id}/estados`;

    fetch(url_estado)
        .then(response => response.json())
        .then(data => preencherSelectEstado(data))
        .catch(error => console.error(error.mensagem))

}



function carregarRegiao() {


    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/regioes")
        .then(response => response.json())
        .then(data => preencherSelectRegiao(data))
        .catch(error => console.error(error))


}

function carregarCidades() {


    const estados = document.getElementById('estado');
    const estado_index = estados.selectedIndex;
    const estado_id = estados.options[estado_index].value;


    const cidades = document.getElementById('cidade');
    limparSelect(cidades);

    if (estado_id === "") {
        return;
    }

    let url_cidade = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estado_id}/municipios`;

    fetch(url_cidade)
        .then(response => response.json())
        .then(data => preencherSelectCidades(data))
        .catch(error => console.error(error.mensagem))
}

function exibirCidade(){


    const cidade = document.getElementById('cidade');
    const cidade_index = cidade.selectedIndex;
    const cidade_nome = cidade.options[cidade_index].innerHTML;

    console.log(cidade_nome)
    if (cidade_nome === "") {
        return;
    }

    const exibir = document.getElementById('city');
    document.getElementById('title').style.display = 'flex';
    exibir.innerHTML = cidade_nome;
    exibir.style.display = 'flex'

   
    

    
}