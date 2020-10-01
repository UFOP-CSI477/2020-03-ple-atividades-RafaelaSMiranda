@extends ('administrativo.headerAdm')


@section('conteudo')

<div class="container w-50" id="manutencoes">

    <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
        <p style="padding: 10px; font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">{{$equipamento->nome}}</p>

        <div class="nome" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Nome: </p>
            <p>{{$equipamento->nome}}</p>
        </div>

        <div class="criacao" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Criado em:</p>

            <p>{{ $equipamento->created_at->format('d-m-Y H:i:s')}}</p>
        </div>

        <div class="atualizacao" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Atualizado em:</p>

            <p>{{ $equipamento->updated_at->format('d-m-Y H:i:s')}}</p>
        </div>

        <div class="card-body">
            <form name="frmDelete" method="POST" action="{{route('equipamento.destroy', $equipamento->id)}}" onsubmit="return confirm('Confirma a exclusão da manutenção cadastrada?')">

                @csrf
                @method('DELETE')

                <a href="{{route('equipamento.edit', $equipamento->id)}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-success">Atualizar</a>

                <input type="submit" class="btn btn-light border-danger" value="Excluir">

                <a href="{{route('equipamento.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Voltar</a>
            </form>
        </div>

    </div>


</div>
</div>

@endSection
