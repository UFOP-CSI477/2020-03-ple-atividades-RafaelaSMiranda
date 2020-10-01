@extends('homeHeader')


@section('conteudo')

<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Lista de Equipamentos</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Lista de Equipamentos</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Nome</th>
                </tr>
            </thead>

            <body class=" table-hover">
                @foreach($equipamentos as $e)
                <tr>
                    <td>{{ $e->nome }} </td>
                </tr>
                @endforeach
            </body>

        </table>

    </div>
</div>


@endSection
