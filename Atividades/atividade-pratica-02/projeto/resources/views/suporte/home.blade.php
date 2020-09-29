@extends('principal')


@section('link')

<li class="nav-item ">
    <a class="nav-link" href="{{route('equipamento.index')}}" style="font-size: 20px; padding-right: 50px;">Lista de Equipamentos<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link"  href="{{route('registro.index')}}" style="font-size: 20px; padding-right: 50px;">Manutenções cadastradas para os equipamentos<span class="sr-only">(current)</span></a>
</li>

@endSection
