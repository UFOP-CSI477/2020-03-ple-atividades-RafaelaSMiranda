@extends('head')



@section('link')

<li class="nav-item dropdown">
    <a style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
        Doadores
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item"  href="#">Cadastrar</a>
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="#">Visualizar</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Pontos de Coleta
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="#">Cadastrar</a>
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="#">Visualizar</a>
    </div>
</li>


<li class="nav-item dropdown">
    <a style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Agendamento
    </a>
    <div class="dropdown-menu border-info border rounded shadow bg-white rounded">
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="#">Cadastrar</a>
        <a style="font-size: 20px; padding-right: 50px;" class="dropdown-item" href="#">Visualizar</a>
    </div>
</li>

@endSection
