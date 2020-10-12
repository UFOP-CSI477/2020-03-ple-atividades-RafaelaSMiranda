@extends('administrativo.headAdm')


@section('conteudo')


<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Administradores</p>

        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">
                <caption style="text-align: center;">Administradores</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th style="text-align: center;">Nome</th>
                    <th style="text-align: center;">E-mail de acesso</th>

                </tr>

            </thead>

            <body class=" table-hover">

                @foreach($users as $user)

                <tr>

                    <td>
                        {{ $user->name}}

                    </td>

                    <td>
                        {{ $user->email}}

                    </td>

                </tr>

                @endforeach

            </body>

            <tfoot>
                <tr>

                    <?php
                    $total = sizeof($users);

                    ?>

                    <th colspan="1" style="text-align: center;">Total</th>
                    <th colspan="1" style="text-align: center;"> {{$total}}</th>
                </tr>
            </tfoot>

        </table>
    </div>
</div>



@endsection
