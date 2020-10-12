@extends('headCliente')


@section('linkCardapio')

<li class="nav-item">
    <a class="nav-link" href="{{route('produto.index')}}">Cardapio</a>
</li>

@endSection

@section('conteudo')

<div class="title">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Finalizar Pedido</p>

</div>

<div class="item">

    <div class="descricao">



        @foreach($produtos as $produto)

        @if($produto->quantidade != 0)


        <div class="shadow p-5">
            <p style="font-weight: bold;">Produto: {{$produto->nome}}</p>
            <p>- {{$produto->descricao}}</p>
            <p>Quantidade: {{$produto->quantidade}} </p>
            <p>Valor unitário: R$ {{$produto->valor}}</p>
            <p style="font-weight: bold;">Valor total: R$ {{$produto->valor*$produto->quantidade}}

            </p>
        </div>

        @endif
        @endforeach

        <br>

        <div class="totalPagar">

            <?php

            $valorTotal = 0;

            if (session()->has('produto')) {
                $produtos = session()->all()['produto'];

                foreach ($produtos as $produto) {

                    $valorTotal += $produto['quantidade'] * $produto['valor'];
                }
            }

            ?>
            <h1 style="font-family:'Sansita+Swashed'; font-weight: bold; text-align: center; font-size: 25px;">
                Total a pagar R$ {{$valorTotal}}
            </h1>


        </div>
        <hr>

        <a type="buttom" href="{{route('cliente.create')}}" class="btn btn-light border-success"> Finalizar</a>
        <a type="buttom" class="btn btn-outline-danger" href="{{route('sacolaCancelar')}}">Cancelar</a>
        <a type="buttom" href="{{route('produto.index')}}" class="btn btn-light border-primary">Voltar</a>


    </div>

    @endSection()
