@extends ('administrativo.headerAdm')


@section('conteudo')

<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Lista de Equipamentos</p>
        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">

                <caption style="text-align: center;">Lista de Equipamentos</caption>


                <p style="font-family: 'Times New Roman', Times, serif; font-size: 120%;">Clique no nome do equipamento para expandir a visualização</p>



                <tr style="font-size: 20px;" class="align-items-center">
                    <th style="text-align: center;">Nome</th>

                </tr>
            </thead>

            <body class=" table-hover">
                @foreach($equipamentos as $e)
                <tr>
                    <td><a style="text-decoration: none; color: black;" href="{{route('equipamento.show', $e->id)}}">{{ $e->nome }}</a></td>
                </tr>
                @endforeach
            </body>

        </table>

    </div>
</div>


@endSection
