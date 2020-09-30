@extends('header')


@section('link')

<li class="nav-item dropdown">
    <a style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
        Equipamentos
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item"  href="{{route('equipamento.create')}}">Cadastrar</a>
        <a class="dropdown-item" href="#">Atualizar</a>
        <a class="dropdown-item" href="#">Remover</a>
        <a class="dropdown-item" href="{{route('equipamento.index')}}">Visualizar</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a style="font-size: 20px; padding-right: 50px;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Manutenções
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('registro.create')}}">Cadastrar</a>
        <a class="dropdown-item" href="#">Atualizar</a>
        <a class="dropdown-item" href="#">Remover</a>
        <a class="dropdown-item" href="{{route('registro.index')}}">Visualizar</a>
    </div>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{route('user.index')}}" style="font-size: 20px; padding-right: 50px;">Relatório de Usuários<span class="sr-only">(current)</span></a>
</li>


<li class="nav-item ">
    <a class="nav-link" href="{{route('relatorioRegistro.index')}}" style="font-size: 20px; padding-right: 50px;">Relatório de Manutenções<span class="sr-only">(current)</span></a>
</li>



@endSection
