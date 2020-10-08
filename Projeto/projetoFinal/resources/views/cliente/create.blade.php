@extends('headCliente');



@section('linkCardapio')

<li class="nav-item">
    <a class="nav-link" href="{{route('cardapio')}}">Cardapio</a>
</li>

@endSection

@section('conteudo')

<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Preencha os dados abaixo para finalizar o seu pedido</p>


<form method="POST" action="validar.html">

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="form-control">
    </div>

    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" placeholder="Endereço Completo" class="form-control">
    </div>
    <div class="form-group">
        <label for="endereco">Referência:</label>
        <input type="text" name="endereco" id="endereco" placeholder="Ex. proximo a ..." class="form-control">
    </div>
    <div class="form-group">
        <label for="endereco">Forma de pagamento:</label>
        <input type="text" name="endereco" id="endereco" placeholder="Dinheiro, cartão ..." class="form-control">
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-12">
                <label for="telefone">Telefone: </label>
                <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="(  )     -    " minlength="11" maxlength="11">
            </div>
        </div>
    </div>

    <hr>


    <p style="font-weight: bold; color: rgb(94, 94, 94); font-size: 20px;">Observações do pedido</p>
    <textarea style="width: 100%;" name="" id="" placeholder="Ex.: Pedido sem cebola"></textarea>
    <hr>



    <div class="form-group">
        <input type="submit" class="btn btn-outline-success" value="Encerrar pedido">
        <a type="buttom" href="{{route('pedido.index')}}" class="btn btn-outline-danger" value="Voltar">Voltar</a>
    </div>



</form>


@endSection
