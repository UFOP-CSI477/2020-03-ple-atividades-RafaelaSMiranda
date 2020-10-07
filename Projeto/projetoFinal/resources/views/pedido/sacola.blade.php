@extends('headCliente')


@section('linkCardapio')

<li class="nav-item">
    <a class="nav-link" href="{{route('cardapio')}}">Cardapio</a>
</li>

@endSection

@section('conteudo')

<div class="title">

<p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Finalizar Pedido</p>

</div>

<div class="item">

    <div class="descricao">

        <p>Grand Picanha</p>
        <p>R$24,00</p>
        <p style="font-weight: bold;">Valor total: R$ 24,00</p>
        <div class="dropdown-divider"></div>
        <p style="font-weight: bold; color: rgb(94, 94, 94);">Confirmar dados cadastrados. Em caso de alteração,
            por favor, atualize o seu cadastro</p>
        <p>Nome:</p>
        <p>Endereço: Rua A</p>
        <p>Pagamento em dinheiro</p>
        <p style=" color: rgb(94, 94, 94);">Documento para nota fiscal</p>
        <p>CPF:</p>
        <div class="dropdown-divider"></div>
        <p style="font-weight: bold; color: rgb(94, 94, 94); font-size: 20px;">Observações</p>
        <textarea style="width: 60%;" name="" id="" placeholder="Ex.: Pedido sem cebola"></textarea>
    </div>




        <a href="{{route('pedido.create')}}" class="btn btn-outline-success" value="Finalizar pedido">Finalizar pedido </a>
        <input type="reset" class="btn btn-outline-danger" value="Cancelar">


</div>

@endSection()
