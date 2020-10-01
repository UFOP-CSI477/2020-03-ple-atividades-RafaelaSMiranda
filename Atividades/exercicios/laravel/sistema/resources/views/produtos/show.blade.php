@extends ('header')


@section('conteudo')

<div class="container w-50" id="manutencoes">

    <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
        <p style="padding: 10px; font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">{{$produto->nome}}</p>

        <div class="nome" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Nome: </p>
            <p>{{$produto->nome}}</p>
        </div>

        <div class="um" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Unidade de Medida: </p>
            <p>{{$produto->um}}</p>
        </div>

        <div class="criacao" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Criado em:</p>

            <p>{{ $produto->created_at->format('d-m-Y H:i:s')}}</p>
        </div>

        <div class="atualizacao" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Atualizado em:</p>

            <p>{{ $produto->updated_at->format('d-m-Y H:i:s')}}</p>
        </div>

        <div class="card-body">
            <form name="frmDelete" method="POST" action="{{route('produtos.destroy', $produto->id)}}" onsubmit="return confirm('Confirma a exclusão da manutenção cadastrada?')">

                @csrf
                @method('DELETE')

                <a href="{{route('produtos.edit', $produto->id)}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-success">Atualizar</a>

                <input type="submit" class="btn btn-light border-danger" value="Excluir">

                <a href="{{route('produtos.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Voltar</a>
            </form>
        </div>

    </div>


</div>
</div>

@endSection
