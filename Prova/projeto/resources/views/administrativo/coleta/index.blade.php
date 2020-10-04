@extends('administrativo.headAdm')


@section('conteudo')


<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Pontos de coleta cadastrados</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">

                <caption style="text-align: center;">Pontos de coleta cadastrados</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">Local de coleta</th>
                    <th style="text-align: center;">Cidade de coleta</th>

                </tr>

            </thead>

            <body class=" table-hover">


                @foreach($locais as $local)

                <tr>

                    <td>{{$local->id}}</td>
                    <td>{{$local->nome}}</td>
                    <td>{{$local->cidade}}</td>
                </tr>
                @endforeach

            </body>

            <tfoot>

                <?php

                $total = (sizeof($locais))

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
