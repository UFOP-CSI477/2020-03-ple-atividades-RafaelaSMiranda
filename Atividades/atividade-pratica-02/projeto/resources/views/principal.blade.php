@extends('header')


@section('conteudo')

<div class="jumbotron bg-light ">
    <h1 class="display-4 text-center">Sistema de Manutenção de Equipamentos</h1>
    <hr class="my-2">
    <p class="lead text-center">Navegue por Área Geral - Suporte ou Área Administrativa</p>
</div>

<div class="button" style="display: flex; justify-content: center;">
    <a href="{{route('equipamento.index')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%;" type="button" class="btn btn-light border-info"><span class="glyphicon glyphicon-wrench"></span> Área Geral - Suporte</a>
    <a style="margin-left: 2px; margin-right: 50px; font-size: 150%;" type="button" class="btn btn-light border-info"> <span class="glyphicon glyphicon-folder-open"></span> Área Administrativa</a>
</div>

@endSection
