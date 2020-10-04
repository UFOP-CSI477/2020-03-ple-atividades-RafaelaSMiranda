@extends('head')



@section('conteudo')


<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Relatório de Agendamentos</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">

                <caption style="text-align: center;">Relatório de Agendamentos</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th style="text-align: center;">Data da coleta</th>
                    <th style="text-align: center;">Local de coleta</th>
                    <th style="text-align: center;">Cidade de coleta</th>
                    <th style="text-align: center;">Id do doador</th>
                    <th style="text-align: center;">Nome do doador</th>
                    <th style="text-align: center;">Tipo sanguíneo</th>

                </tr>

            </thead>

            <body class=" table-hover">




                @foreach($agendamentos as $agendamento)

                <tr>
                    <td>{{$agendamento->data}}</td>
                    <td>{{$agendamento->coleta->nome}}</td>
                    <td>{{$agendamento->coleta->cidade}}</td>
                    <td>{{$agendamento->pessoa->id}}</td>
                    <td>{{$agendamento->pessoa->nome}}</td>
                    <td>{{$agendamento->pessoa->tipo}}</td>
                </tr>
                @endforeach

            </body>

            <tfoot>
                <tr>
                    <?php

                    $total = (sizeof($agendamentos))

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="4" style="text-align: center;"> {{$total}}</th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>



@endSection
