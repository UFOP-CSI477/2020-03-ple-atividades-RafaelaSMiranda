@extends('administrativo.headerAdm')



@section('conteudo')

<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Mantenções Cadastradas</p>



        @foreach($lista as $chave => $l)

        <p style="font-weight: bold; font-size: 20px; display: flex; justify-content: center;">Equipamento: {{$chave}}</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Manutenções</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Data limite</th>
                    <th>Nome do Equipamento</th>
                    <th>Nome do Usuário</th>
                    <th>Tipo da manutenção</th>
                    <th>Descrição da manutenção/problema</th>
                </tr>
            </thead>

            <tbody class=" table-hover">
                @foreach($l as $manutencao)

                <tr>

                    <?php

                    $manutencao->dataLimite = date('d-m-Y', strtotime($manutencao->dataLimite));


                    ?>
                    <td>{{$manutencao->dataLimite}} </td>
                    <td>{{ $manutencao->equipamento->nome}} </td>
                    <td>{{ $manutencao->user->name}} </td>


                    <?php

                    if ($manutencao->tipo === '1') {
                        $tipo = "Preventiva";
                    } else if ($manutencao->tipo === '2') {
                        $tipo = "Corretiva";
                    } else if ($manutencao->tipo === '3') {
                        $tipo = "Urgente";
                    } else {
                        $tipo = "Tipo não cadastrado";
                    }


                    ?>
                    <td>{{ $tipo}} </td>
                    <td>{{ $manutencao->descricao}} </td>


                </tr>

                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="3" style="text-align: center;"> {{sizeof($l)}}</th>
                </tr>
            </tfoot>

        </table>



        @endforeach



    </div>
</div>


@endSection
