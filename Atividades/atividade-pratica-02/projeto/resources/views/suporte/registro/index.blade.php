@extends('homeHeader')


@section('conteudo')

<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Mantenções Cadastradas</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Manutenções Cadastradas</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Data limite</th>
                    <th>Nome do Equipamento</th>
                    <th>Nome do Usuário</th>
                    <th>Tipo da manutenção</th>
                    <th>Descrição da manutenção/problema</th>
                </tr>
            </thead>

            <tbody class=" table-hover">
                @foreach($registros as $e)
                <tr>
                    <td>{{ $e->dataLimite}} </td>
                    <td>{{ $e->equipamento->nome}} </td>
                    <td>{{ $e->user->name}} </td>
                    <?php

                    if ($e->tipo === '1') {
                        $tipo = "Preventiva";
                    } else if ($e->tipo === '2') {
                        $tipo = "Corretiva";
                    } else if ($e->tipo === '3') {
                        $tipo = "Urgente";
                    } else {
                        $tipo = "Tipo não cadastrado";
                    }


                    ?>
                    <td>{{ $tipo}} </td>
                    <td>{{ $e->descricao}} </td>
                </tr>
                @endforeach
            </tbody>

            <tfoot>
                <th colspan="5" style="text-align: center;">Final do relatório</th>
            </tfoot>

        </table>

    </div>
</div>


@endSection
