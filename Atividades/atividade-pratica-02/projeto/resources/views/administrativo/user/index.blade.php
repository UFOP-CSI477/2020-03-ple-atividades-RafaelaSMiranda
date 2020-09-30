@extends ('administrativo.headerAdm')

@section('conteudo')

<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Relatório de Usuários</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Relatório de Usuários</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>

            <body class=" table-hover">
                @foreach($user as $e)
                <tr>
                    <td>{{ $e->name }} </td>
                    <td>{{ $e->email }} </td>
                </tr>
                @endforeach
            </body>

            <tfoot>
            <th colspan="4" style="text-align: center;">Final do relatório</th>
            </tfoot>

        </table>

    </div>
</div>


@endSection
