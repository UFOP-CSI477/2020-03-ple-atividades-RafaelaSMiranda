@extends('header')

@section('conteudo')
<h1 style="font-family: 'Times New Roman', Times, serif; text-align: center;">Lista de produtos</h1>

<div class="container">
    <table class="table table-hover table-bordered table-indo table-striped mt-5">
        <thead class="table-info">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Unidade de Medida</th>
                <th>Visualizar</th>
            </tr>
        </thead>
        <tbody>

            @foreach($produtos as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->nome }} </td>
                <td>{{ $e->um }}</td>
                <td><a style="text-decoration: none; color: black;" href="{{route('produtos.show', $e->id)}}">Visualizar</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endSection
