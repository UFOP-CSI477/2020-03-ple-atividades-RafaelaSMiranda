@extends('headCliente')

@section('linkCardapio')

<li class="nav-item">
    <a class="nav-link" href="{{route('cardapio')}}">Cardapio</a>
</li>

@endSection

@section('conteudo')

<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Preencha os dados abaixo para finalizar o seu pedido</p>


<form method="POST" action="{{route('pedidoProduto.store')}}" onsubmit= "return validacaoPedido()">

    @csrf

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="form-control">
    </div>

    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" placeholder="Endereço Completo" class="form-control">
    </div>
    <div class="form-group">
        <label for="referencia">Referência:</label>
        <input type="text" name="referencia" id="referencia" placeholder="Ex. proximo a ..." class="form-control">
    </div>
    <div class="form-group">
        <label for="pagamento">Forma de pagamento:</label>
        <input type="text" name="pagamento" id="pagamento" placeholder="Dinheiro, cartão ..." class="form-control">
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-12">
                <label for="contato">Contato: </label>
                <input class="form-control" type="tel" name="contato" id="contato" placeholder="(  )     -    " minlength="11" maxlength="11">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-12">
                <label for="email">E-mail: </label>
                <input class="form-control" type="tel" name="email" id="email" placeholder="Informe um e-mail válido">
            </div>
        </div>
    </div>


    <hr>


    <p style="font-weight: bold; color: rgb(94, 94, 94); font-size: 20px;">Observações do pedido</p>
    <textarea style="width: 100%;" name="observacao" id="observacao" placeholder="Ex.: Pedido sem cebola"></textarea>
    <hr>

    <textarea class="d-none" style="width: 100%;" name="status" id="status" placeholder="Ex.: Pedido sem cebola"></textarea>



    <div class="form-group">
        <input type="submit" class="btn btn-outline-success" value="Encerrar pedido">
        <a type="buttom" href="{{route('pedido.index')}}" class="btn btn-outline-danger" value="Voltar">Voltar</a>
    </div>



</form>


@endSection
