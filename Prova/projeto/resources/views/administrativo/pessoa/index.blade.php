@extends('administrativo.headAdm')


@section('conteudo')


<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Doadores Cadastrados</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">

                <caption style="text-align: center;">Doadores cadastrados</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">Nome do Doador</th>
                    <th style="text-align: center;">Tipo Sanguíneo</th>

                </tr>

            </thead>

            <body class=" table-hover">


                @foreach($pessoas as $pessoa)

                <tr>

                    <td>{{$pessoa->id}}</td>
                    <td>{{$pessoa->nome}}</td>
                    <td>{{$pessoa->tipo}}</td>
                </tr>
                @endforeach

            </body>

            <tfoot>

                <?php

                $total = (sizeof($pessoas))

                ?>
                <tr>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="1" style="text-align: center;"> {{$total}}</th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>



@endSection
