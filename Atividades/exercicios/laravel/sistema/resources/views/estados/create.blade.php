@extends('header')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Cadastrar Estado</p>

    <form method="POST" action="{{route('estados.store')}}">

        @csrf

        <div class="form-group">
            <label for="nome">Estado:</label>
            <input type="text" name="nome" id="nome" placeholder="Informe o estado" class="form-control">
        </div>


        <hr>

        <div class="form-group">
            <input type="submit" class="btn btn-light border-success" value="Cadastrar">
            <input type="reset" class="btn btn-light border-danger" value="Limpar">
        </div>

        <div>

        </div>



    </form>

</div>


@endSection
