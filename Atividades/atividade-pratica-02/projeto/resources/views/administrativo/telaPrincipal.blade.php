@extends('header')


@section('link')



<li class="nav-item ">
    <a class="nav-link" href="#equipamentos" style="font-size: 20px; padding-right: 50px;">Equipamentos<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="#manutencoes" style="font-size: 20px; padding-right: 50px;">Manutenções<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="#relatUsuarios" style="font-size: 20px; padding-right: 50px;">Relatório de Usuários<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="#relatManutencoes" style="font-size: 20px; padding-right: 50px;">Relatório de Manutenções<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{route('adm')}}" style="font-size: 20px; padding-right: 50px;">Sair<span class="sr-only">(current)</span></a>
</li>


@endSection


@section('conteudo')

@if(session('mensagem'))

<div class="alert alert-success">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">{{session('mensagem')}}</p>

</div>
@endif

<div class="crud">

    <div class="container w-50" id="equipamentos">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Equipamentos</p>
            <div class="card-body" style="display: flex;">
                <a href="{{route('equipamento.create')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Cadastrar</a>
                <a href="#" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Atualizar</a>
                <a href="#" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Remover</a>
                <a href="{{route('equipamento.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>


            </div>
        </div>
    </div>

    <div class="container w-50" id="manutencoes">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Manutenções</p>
            <div class="card-body">
                <a href="{{route('registro.create')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Cadastrar</a>
                <a href="#" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Atualizar</a>
                <a href="#" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Remover</a>
                <a href="{{route('registro.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>


            </div>
        </div>
    </div>

    <div class="container w-50" id="relatUsuarios">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Relatório de Usuários</p>
            <div class="card-body">
                <a href="{{route('user.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>

            </div>
        </div>
    </div>

    <div class="container w-50" id="relatManutencoes">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Relatório de Manutenções</p>
            <div class="card-body">
                <a  href="{{route('relatorioRegistro.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>

            </div>
        </div>
    </div>


</div>


@endSection
