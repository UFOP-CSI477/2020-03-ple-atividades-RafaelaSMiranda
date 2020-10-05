@extends('header')


@section('conteudo')

<div class="container my-3 w-75 border border-dark rounded shadow p-5 mt-5 bg-white rounded" style=" padding: 20px;  ">

    <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Cadastrar Cidade</p>

    <form method="POST" action="{{route('cidades.store')}}">

        @csrf

        <div class="form-group">
            <label for="nome">Cidade:</label>
            <input type="text" name="nome" id="nome" placeholder="Informe a cidade" class="form-control">
        </div>


        <div class="form-group">
            <label for="estado_id">Estado</label>
            <select class="form-control" id="estado_id" name="estado_id" required >
                <option value="0" hidden>Selecione</option>
                @foreach($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->nome}}</option>
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
