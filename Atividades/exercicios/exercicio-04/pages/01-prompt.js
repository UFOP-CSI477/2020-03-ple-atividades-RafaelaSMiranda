function Pessoa(nome, endereco, idade, dataNasc) {
    this.nome = nome
    this.idade = idade
    this.endereco = endereco
    this.dataNasc = dataNasc;
}

function carregarDados() {


    const nome = window.prompt('Insira o seu nome completo');
    const endereco = window.prompt('Insira o seu endereço completo');
    const idade = window.prompt('Insira a sua idade');
    const dataNasc = window.prompt('Insira a sua data de nascimento');

    const pessoa = new Pessoa(nome, endereco, idade, dataNasc);

    document.getElementById('nome').value = pessoa.nome;
    document.getElementById('endereco').value = pessoa.endereco;
    document.getElementById('idade').value = pessoa.idade;
    document.getElementById('dataNasc').value = pessoa.dataNasc;
}