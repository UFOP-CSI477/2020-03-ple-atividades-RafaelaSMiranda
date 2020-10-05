@extends('header')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Cadastrar Produto</p>

    <form method="POST" action="{{route('produtos.store')}}">

        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input required type="text" name="nome" id="nome" placeholder="Nome do produto" value="" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="um">Unidade de Medida:</label>
            <input required type="text" name="um" id="um" placeholder="Ex. l, kg, m, cm" class="form-control">
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
