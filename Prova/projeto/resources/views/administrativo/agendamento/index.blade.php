@extends('administrativo.headAdm')



@section('conteudo')


<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Relatório de Agendamentos</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">

                <p style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">Clique no agendamento para visualizar mais informações</p>

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
                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('agendamento.show', $agendamento->id)}}">
                            {{$agendamento->data}}
                        </a>
                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('agendamento.show', $agendamento->id)}}">
                            {{$agendamento->coleta->nome}}
                        </a>
                    </td>


                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('agendamento.show', $agendamento->id)}}">
                            {{$agendamento->coleta->cidade}}
                        </a>
                    </td>


                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('agendamento.show', $agendamento->id)}}">
                            {{$agendamento->pessoa->id}}
                        </a>
                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('agendamento.show', $agendamento->id)}}">
                            {{$agendamento->pessoa->nome}}
                        </a>
                    </td>


                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('agendamento.show', $agendamento->id)}}">
                            {{$agendamento->pessoa->tipo}}
                        </a>
                    </td>
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
