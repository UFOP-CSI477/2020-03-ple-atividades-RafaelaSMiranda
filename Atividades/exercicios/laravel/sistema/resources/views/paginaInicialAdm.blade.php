@extends('header')



@section('conteudo')

@if(session('mensagem'))

<div class="alert alert-success">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">{{session('mensagem')}}</p>

</div>
@endif

@if(session('mensagemErro'))

<div class="alert alert-danger">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">{{session('mensagemErro')}}</p>

</div>
@endif


<div class="crud">

    <div class="container w-50" id="Compras">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Compras</p>
            <div class="card-body">
                <a href="{{route('compras.create')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Realizar uma compra</a>
                <a href="{{route('paginaRelatorios')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar relatórios</a>
            </div>
        </div>
    </div>


    <div class="container w-50" id="estados">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Estados</p>
            <div class="card-body" style="display: flex;">
                <a href="{{route('estados.create')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Cadastrar</a>
                <a href="#" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>


            </div>
        </div>
    </div>

    <div class="container w-50" id="Cidades">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Cidades</p>
            <div class="card-body">
                <a href="{{route('cidades.create')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Cadastrar</a>
                <a href="#" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>


            </div>
        </div>
    </div>

    <div class="container w-50" id="pessoas">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Clientes</p>
            <div class="card-body">
                <a href="{{route('pessoas.create')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Cadastrar</a>
                <a href="#" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>

            </div>
        </div>
    </div>

    <div class="container w-50" id="Produtos">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Produtos</p>
            <div class="card-body">
                <a href="{{route('produtos.create')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Cadastrar</a>
                <a href="{{route('produtos.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>

            </div>
        </div>
    </div>



</div>


@endSection
