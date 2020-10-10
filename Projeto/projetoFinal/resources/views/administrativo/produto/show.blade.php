@extends('administrativo.headAdm')



@section('conteudo')

<div class="container w-75" id="produto">

    <p style="padding: 10px; font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">{{$produtos->nome}}</p>

    <br>

    <div style="display: flex;">
        <p style="margin-right: 5px; font-size: 20px;">Descrição:
            {{$produtos->descricao}}</p>
    </div>

    <div style="display: flex;">
        <p style="margin-right: 5px; font-size: 20px;">Tipo:
            {{$produtos->tipo}}</p>
    </div>

    <div style="display: flex;">
        <p style="margin-right: 5px; font-size: 20px;">Valor unitário:
            R$ {{$produtos->valor}}</p>
    </div>

    <div class="criacao" style="display: flex;">
    <p style="margin-right: 5px; font-size: 20px;">Criado em: {{ $produtos->created_at->format('d-m-Y H:i:s')}}</p>
    </div>

    <div class="atualizacao" style="display: flex;">
    <p style="margin-right: 5px; font-size: 20px;">Atualizado em: {{ $produtos->updated_at->format('d-m-Y H:i:s')}}</p>
    </div>

    <hr>

    <div class="card-body">

        <form name="frmDelete" method="POST" action="{{route('produto.destroy', $produtos->id)}}" onsubmit="return confirm('Confirma a exclusão do produto cadastrado?')">

            @csrf
            @method('DELETE')

            <a href="{{route('produto.edit', $produtos->id)}}" style="margin-left: 2px; margin-right: 2px; font-size: 100%;" type="button" class="btn btn-light border-success">Atualizar</a>

            <input type="submit" class="btn btn-light border-danger" value="Excluir">

            <a href="{{route('produto.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 100%;" type="button" class="btn btn-light border-info">Voltar</a>
        </form>

    </div>
</div>

</div>

@endSection
