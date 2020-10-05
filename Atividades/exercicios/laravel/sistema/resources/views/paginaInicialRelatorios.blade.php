
@extends('header')



@section('conteudo')


<div class="crud">

    <div class="container w-50" id="Compras">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Relatórios de compra</p>
            <div class="card-body">
                <a href="{{route('compras.index', 'cliente = cliente')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar por Cliente</a>
                <a href="{{route('compras.index', 'data')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar por Data</a>
                <a href="{{route('compras.index', 'produto')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar por Produto</a>
            </div>
        </div>
    </div>
</div>


</div>


@endSection
