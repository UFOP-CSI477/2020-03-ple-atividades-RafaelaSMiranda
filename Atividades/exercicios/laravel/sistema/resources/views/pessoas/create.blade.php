@extends('header')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Cadastrar Cliente</p>

    <form method="POST" action="{{route('pessoas.store')}}">

        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Informe o nome completo" class="form-control">
        </div>


        <div class="form-group">
            <label for="cidade_id">Cidade</label>
            <select class="form-control" id="cidade_id" name="cidade_id" required >
                <option value="0" hidden>Selecione</option>
                @foreach($cidades as $cidade)
                <option value="{{$cidade->id}}">{{$cidade->nome}}</option>
                @endforeach
            </select>
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
