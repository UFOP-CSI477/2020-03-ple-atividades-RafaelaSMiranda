@extends ('administrativo.headerAdm')


@section('conteudo')

<div class="container w-50" id="manutencoes">

    <div class="card align-items-center my-5 border border-dark rounded shadow bg-white rounded">

        <?php

        if ($registro->tipo === '1') {
            $tipo = "Preventiva";
        } else if ($registro->tipo === '2') {
            $tipo = "Corretiva";
        } else if ($registro->tipo === '3') {
            $tipo = "Urgente";
        } else {
            $tipo = "Tipo não cadastrado";
        }


        ?>
        <p style="padding: 10px; font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">{{$tipo}}</p>

        <div class="dataLimite" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Data limite: </p>
            <p>{{date('d-m-Y', strtotime($registro->dataLimite))}}</p>
        </div>

        <div class="equipamento" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Nome do Equipamento: </p>
            <p>{{$registro->equipamento->nome}}</p>
        </div>

        <div class="user" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Nome do Usuário: </p>
            <p>{{$registro->user->name}}</p>
        </div>

        <div class="tipo" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Tipo de manutenção: </p>
            <p>{{$tipo}}</p>
        </div>
        <div class="descricao" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Descrição da manutenção/problema: </p>
            <p>{{$registro->descricao}}</p>
        </div>

        <div class="criacao" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Criado em:</p>

            <p>{{ $registro->created_at->format('d-m-Y H:i:s')}}</p>
        </div>

        <div class="atualizacao" style="display: flex;">
            <p style="font-weight: bold; margin-right: 5px;">Atualizado em:</p>

            <p>{{ $registro->updated_at->format('d-m-Y H:i:s')}}</p>
        </div>

        <div class="card-body">

            <form name="frmDelete" method="POST" action="{{route('registro.destroy', $registro->id)}}" onsubmit="return confirm('Confirma a exclusão da manutenção cadastrada?')">

                @csrf
                @method('DELETE')

                <a href="{{route('registro.edit', $registro->id)}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-success">Atualizar</a>

                <input type="submit" class="btn btn-light border-danger" value="Excluir">

                <a href="{{route('registro.index')}}" style="margin-left: 2px; margin-right: 2px; font-size: 120%;" type="button" class="btn btn-light border-info">Voltar</a>
            </form>

        </div>

    </div>


</div>
</div>

@endSection
