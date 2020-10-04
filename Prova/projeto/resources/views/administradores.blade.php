@extends('administrativo.headAdm')



@section('conteudo')


<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Administradores Cadastrados</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">



                <caption style="text-align: center;">Relatório de Administradores</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th style="text-align: center;">Nome</th>
                    <th style="text-align: center;">E-mail</th>

                </tr>

            </thead>

            <body class=" table-hover">




                @foreach($users as $user)

                <tr>
                    <td>
                        <a style="text-decoration: none; color: black">
                            {{$user->name}}

                        </a>
                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;">
                            {{$user->email}}
                        </a>
                    </td>

                    @endforeach

            </body>

            <tfoot>
                <tr>
                    <?php

                    $total = (sizeof($users))

                    ?>
                    <th colspan="1" style="text-align: center;">Total</th>
                    <th colspan="1" style="text-align: center;"> {{$total}}</th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>



@endSection
