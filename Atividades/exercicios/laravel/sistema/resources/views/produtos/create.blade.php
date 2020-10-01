@extends('header')


@section('conteudo')

<h1 style="font-family: 'Times New Roman', Times, serif; text-align: center;">Cadastrar Produto</h1>

<div class="container my-3 w-75 border border-dark rounded shadow p-3 mb-5 bg-white rounded" style=" padding: 20px;  ">


    <form action="{{route('produtos.store')}}" method="POST">

        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input required type="text" name="nome" id="nome" placeholder="Nome do produto" value="" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="um">Unidade de Medida:</label>
            <input required type="text" name="um" id="um" placeholder="Ex. l, kg, m, cm" class="form-control">
        </div>


        <div class="form-group">

            <input type="submit" class="btn btn-primary" value="Cadastrar">

            <input type="reset" class="btn btn-danger" value="Limpar">

        </div>

        <div>

        </div>



    </form>

</div>

@endSection
