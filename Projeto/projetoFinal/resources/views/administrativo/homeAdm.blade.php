@extends('administrativo.headAdm')

@section('conteudo')


<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center;">Últimos pedidos</p>

        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">
                <caption style="text-align: center;">Últimos pedidos</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th style="text-align: center;">Número</th>
                    <th style="text-align: center;">Data/hora do pedido</th>
                    <th style="text-align: center;">Cliente</th>
                    <th style="text-align: center;">Valor total</th>
                    <th style="text-align: center;">Status</th>

                </tr>

            </thead>

            <body class=" table-hover">

                <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 20px; display: flex; justify-content: center;">Pedidos em aberto</p>

                @foreach($pedidos as $pedido)
                @if($pedido->status == 'Em aberto' || is_null($pedido->status))

                <tr>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{ $pedido->id}}
                        </a>

                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{ $pedido->created_at->format('d-m-Y H:i:s')}}
                        </a>

                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{$pedido->cliente->nome}}
                        </a>
                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            R$ {{ $pedido->valorTotal}}
                        </a>
                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            Em aberto
                        </a>
                    </td>


                </tr>
                @endif
                @endforeach

            </body>

            <tfoot>
                <tr>
                    <?php
                    $totalAberto = 0;

                    foreach ($pedidos as $pedido) {
                        if ($pedido->status == 'Em aberto' || is_null($pedido->status)) {

                            $totalAberto++;
                        }
                    }
                    ?>

                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="3" style="text-align: center;"> {{$totalAberto}}</th>
                </tr>
            </tfoot>

        </table>


        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">
                <caption style="text-align: center;">Últimos pedidos</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th style="text-align: center;">Número</th>
                    <th style="text-align: center;">Data/hora do pedido</th>
                    <th style="text-align: center;">Cliente</th>
                    <th style="text-align: center;">Valor total</th>
                    <th style="text-align: center;">Status</th>

                </tr>

            </thead>

            <body class=" table-hover">

                <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 20px; display: flex; justify-content: center;">Pedidos Finalizados</p>

                @foreach($pedidos as $pedido)
                @if($pedido->status == 'Finalizado')

                <tr>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{ $pedido->id}}
                        </a>

                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{ $pedido->created_at->format('d-m-Y H:i:s')}}
                        </a>

                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{$pedido->cliente->nome}}
                        </a>
                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            R$ {{ $pedido->valorTotal}}
                        </a>
                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{ $pedido->status}}
                        </a>
                    </td>


                </tr>
                @endif
                @endforeach

            </body>

            <tfoot>
                <tr>

                    <?php
                    $totalFinalizado = 0;

                    foreach ($pedidos as $pedido) {
                        if ($pedido->status == 'Finalizado') {

                            $totalFinalizado++;
                        }
                    }

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="3" style="text-align: center;"> {{$totalFinalizado}}</th>
                </tr>
            </tfoot>

        </table>

        <table id="tableDados" class="table table-hover table-bordered table-striped shadow" style="text-align: center;">
            <thead class="table-secondary">
                <caption style="text-align: center;">Últimos pedidos</caption>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th style="text-align: center;">Número</th>
                    <th style="text-align: center;">Data/hora do pedido</th>
                    <th style="text-align: center;">Cliente</th>
                    <th style="text-align: center;">Valor total</th>
                    <th style="text-align: center;">Status</th>

                </tr>

            </thead>

            <body class=" table-hover">

                <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 20px; display: flex; justify-content: center;">Pedidos Cancelados</p>

                @foreach($pedidos as $pedido)
                @if($pedido->status == 'Cancelado')

                <tr>


                <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{ $pedido->id}}
                        </a>

                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{ $pedido->created_at->format('d-m-Y H:i:s')}}
                        </a>

                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{$pedido->cliente->nome}}
                        </a>
                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            R$ {{ $pedido->valorTotal}}
                        </a>
                    </td>

                    <td>
                        <a style="text-decoration: none; color: black;" href="{{route('pedido.show', $pedido->id)}}">
                            {{ $pedido->status}}
                        </a>
                    </td>


                </tr>
                @endif
                @endforeach

            </body>

            <tfoot>
                <tr>

                    <?php
                    $totalCancelado = 0;

                    foreach ($pedidos as $pedido) {
                        if ($pedido->status == 'Cancelado') {

                            $totalCancelado++;
                        }
                    }

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="3" style="text-align: center;"> {{$totalCancelado}}</th>
                </tr>
            </tfoot>

        </table>



    </div>
</div>



@endSection
