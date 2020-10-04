@extends('header')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Realizar uma compra</p>

    <form method="POST" action="{{route('compras.store')}}">

        @csrf

        <div class="form-group">
            <label for="nome">Produto:</label>
            <select class="form-control" id="produto_id" name="produto_id" required>
                <option value="0" hidden>Selecione</option>
                @foreach($produtos as $produto)
                <option value="{{$produto->id}}">{{$produto->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nome">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" placeholder="Quantas unidades do produto" class="form-control">
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
