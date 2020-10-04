@extends('head')




@section('link')


<li class="nav-item dropdown">
    <a href="{{route('homeAdm')}}" class="navbar-brand d-flex align-items-center">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
        <strong style="font-size: 130%; margin-left: 10px;">Voltar</strong>
    </a>
</li>




<li class="nav-item dropdown">
    <a class="nav-link navbar-brand d-flex align-items-center dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <strong style="font-size: 130%; margin-left: 10px; ">Doadores</strong>
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('pessoa.create')}}">Cadastrar</a>
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('pessoa.index')}}">Visualizar</a>
    </div>
</li>


<li class="nav-item dropdown">
    <a class="nav-link navbar-brand d-flex align-items-center dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <strong style="font-size: 130%; margin-left: 10px; ">Pontos de Coleta</strong>
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('coleta.create')}}">Cadastrar</a>
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('coleta.index')}}">Visualizar</a>
    </div>
</li>


<li class="nav-item dropdown">
    <a class="nav-link navbar-brand d-flex align-items-center dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <strong style="font-size: 130%; margin-left: 10px; ">Agendamentos</strong>
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('agendamento.create')}}">Cadastrar</a>
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="{{route('agendamento.index')}}">Visualizar</a>
    </div>
</li>


@endSection
