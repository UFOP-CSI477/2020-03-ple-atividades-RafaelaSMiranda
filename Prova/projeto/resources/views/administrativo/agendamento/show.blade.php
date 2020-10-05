@extends ('administrativo.headAdm')


@section('conteudo')

<div class="container w-50" id="agendamento">

    <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">
        <p style="padding: 10px; font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">{{$agendamento->pessoa->nome}}</p>

        <div class="nome" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Data: </p>
            <p>{{date('d-m-Y', strtotime($agendamento->data))}}</p>
        </div>

        <div class="nome" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Local de coleta: </p>
            <p>{{$agendamento->coleta->nome}}</p>
        </div>

        <div class="nome" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Cidade de coleta: </p>
            <p>{{$agendamento->coleta->cidade}}</p>
        </div>

        <div class="nome" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Id do doador: </p>
            <p>{{$agendamento->pessoa->id}}</p>
        </div>

        <div class="nome" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Nome do doador: </p>
            <p>{{$agendamento->pessoa->nome}}</p>
        </div>

        <div class="nome" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Tipo sanguíneo: </p>
            <p>{{$agendamento->pessoa->tipo}}</p>
        </div>

        <div class="criacao" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Criado em:</p>

            <p>{{ $agendamento->created_at->format('d-m-Y H:i:s')}}</p>
        </div>

        <div class="atualizacao" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Atualizado em:</p>

            <p>{{ $agendamento->updated_at->format('d-m-Y H:i:s')}}</p>
        </div>

        <div class="card-body">
            <form name="frmDelete" method="POST" action="{{route('agendamento.destroy', $agendamento->id)}}" onsubmit="return confirm('Confirma a exclusão do agendamento cadastrado?')">

                @csrf
                @method('DELETE')

                <a href="{{route('agendamento.edit', $agendamento->id)}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-success">Atualizar</a>

                <input type="submit" class="btn btn-light border-danger" value="Excluir">

                <a href="{{route('agendamento.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Voltar</a>
            </form>
        </div>

    </div>


</div>
</div>

@endSection
