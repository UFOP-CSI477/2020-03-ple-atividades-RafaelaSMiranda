@extends('home')



@section('conteudo')

@if(session('mensagem'))

<div class="alert alert-success">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">{{session('mensagem')}}</p>

</div>
@endif

<div class="container p-5 align-items-center my-5 border border-dark rounded shadow bg-white rounded">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Área Administrativa</p>


    <div class="button mt-5" style="display: flex; justify-content: center;">
        <a href="{{route('user.create')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%;" type="button" class="btn btn-light border-info">Cadastrar</a>
        <a href="{{route('admPrincipal')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%;" type="button" class="btn btn-light border-info">Acessar</a>
    </div>


</div>


@endSection
