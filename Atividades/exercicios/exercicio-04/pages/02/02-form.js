function Pessoa(nome, endereco, idade, dataNasc) {

    this.nome = nome;
    this.endereco = endereco;
    this.idade = idade;
    this.dataNasc = dataNasc;
}

const listaPessoas = [];


function inserirDados() {

    const nome = document.frmDados.nome.value;
    const endereco = document.frmDados.endereco.value;
    const idade = document.frmDados.idade.value;
    const dataNasc = document.frmDados.dataNasc.value;

    console.log(nome, endereco, idade, dataNasc);

    const pessoa = new Pessoa(nome, endereco, idade, dataNasc);

    listaPessoas.push(pessoa);
}


function exibirDados() {



    for (let i = 0; i < listaPessoas.length; i++) {
        document.getElementById('nome').innerHTML = listaPessoas[i].nome;
        document.getElementById('endereco').innerHTML = listaPessoas[i].endereco;
        document.getElementById('idade').innerHTML = listaPessoas[i].idade;
        document.getElementById('dataNasc').innerHTML = listaPessoas[i].dataNasc;
    }
}