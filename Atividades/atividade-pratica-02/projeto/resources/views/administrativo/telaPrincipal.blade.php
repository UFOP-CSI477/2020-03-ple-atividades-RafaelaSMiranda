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


@guest
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}" style="font-size: 20px; padding-right: 50px;">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
<li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}" style="font-size: 20px; padding-right: 50px;">{{ __('Register') }}</a>
</li>
@endif
@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
@endguest



@endSection


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

    <div class="container w-50" id="equipamentos">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Equipamentos</p>
            <div class="card-body" style="display: flex;">
                <a href="{{route('equipamento.create')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Cadastrar</a>
                <a href="{{route('equipamento.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>


            </div>
        </div>
    </div>

    <div class="container w-50" id="manutencoes">

        <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
            <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Manutenções</p>
            <div class="card-body">
                <a href="{{route('registro.create')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Cadastrar</a>
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
                <a href="{{route('relatorioRegistro.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Visualizar</a>

            </div>
        </div>
    </div>


</div>


@endSection
