@extends ('administrativo.headAdm')

@section('conteudo')

<div class="container">
    <div class="table-responsive py-3 ">
        <p style="font-family: 'Lobster Two'; font-size: 35px; display: flex; justify-content: center;">Produtos cadastrados</p>

        <h1 style="font-family:'Sansita+Swashed'; font-weight: bold; text-align: center; font-size: 25px;">
            Produtos em Promoção
        </h1>



        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Produtos cadastrados</caption>

                <p style="font-family: 'Times New Roman', Times, serif; font-size: 120%;">Clique no produto para expandir a visualização</p>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor unitário</th>
                    <th>Disponibilidade</th>
                </tr>
            </thead>

            <tbody class=" table-hover">

                @foreach($produtos as $produto)
                @if($produto->tipo == 'Promoção')

                <tr>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show', $produto->id)}}">{{$produto->nome}}</a></td>
                    <td><a style="text-decoration: none; color: black;" href="{{route('produto.show', $produto->id)}}">{{ $produto->descricao}} </a></td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">R$ {{$produto->valor}}</a> </td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->condicao}}</a> </td>
                </tr>

                @endif
                @endforeach


            </tbody>

            <tfoot>
                <tr>

                    <?php
                    $totalPromocao = 0;

                    foreach ($produtos as $produto) {
                        if ($produto->tipo == 'Promoção') {

                            $totalPromocao++;
                        }
                    }

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="2" style="text-align: center;"> {{$totalPromocao}}</th>
                </tr>
            </tfoot>

        </table>




        <!------------------------------------------------------------------------------------------------- -->

        <h1 style="font-family:'Sansita+Swashed'; font-weight: bold; text-align: center; font-size: 25px;">
            Pizzas
        </h1>

        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Produtos cadastrados</caption>

                <p style="font-family: 'Times New Roman', Times, serif; font-size: 120%;">Clique no produto para expandir a visualização</p>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor unitário</th>
                    <th>Disponibilidade</th>
                </tr>
            </thead>

            <tbody class=" table-hover">

                @foreach($produtos as $produto)

                @if($produto->tipo == 'Pizza')

                <tr>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show', $produto->id)}}">{{$produto->nome}}</a></td>
                    <td><a style="text-decoration: none; color: black;" href="{{route('produto.show', $produto->id)}}">{{ $produto->descricao}} </a></td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show', $produto->id)}}">R$ {{$produto->valor}}</a> </td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->condicao}}</a> </td>
                </tr>

                @endif
                @endforeach

            </tbody>

            <tfoot>
                <tr>

                    <?php
                    $totalPromocao = 0;

                    foreach ($produtos as $produto) {
                        if ($produto->tipo == 'Pizza') {

                            $totalPromocao++;
                        }
                    }

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="2" style="text-align: center;"> {{$totalPromocao}}</th>
                </tr>
            </tfoot>

        </table>


        <!------------------------------------------------------------------------------------------------- -->

        <h1 style="font-family:'Sansita+Swashed'; font-weight: bold; text-align: center; font-size: 25px;">
            Hambúrgueres
        </h1>

        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Produtos cadastrados</caption>

                <p style="font-family: 'Times New Roman', Times, serif; font-size: 120%;">Clique no produto para expandir a visualização</p>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor unitário</th>
                    <th>Disponibilidade</th>
                </tr>
            </thead>

            <tbody class=" table-hover">

                @foreach($produtos as $produto)

                @if($produto->tipo == 'Hambúrguer')

                <tr>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->nome}}</a></td>
                    <td><a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{ $produto->descricao}} </a></td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">R$ {{$produto->valor}}</a> </td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->condicao}}</a> </td>
                </tr>

                @endif
                @endforeach

            </tbody>

            <tfoot>
                <tr>

                    <?php
                    $totalPromocao = 0;

                    foreach ($produtos as $produto) {
                        if ($produto->tipo == 'Hambúrguer') {

                            $totalPromocao++;
                        }
                    }

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="2" style="text-align: center;"> {{$totalPromocao}}</th>
                </tr>
            </tfoot>

        </table>


        <!------------------------------------------------------------------------------------------------- -->

        <h1 style="font-family:'Sansita+Swashed'; font-weight: bold; text-align: center; font-size: 25px;">
            Porções
        </h1>

        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Produtos cadastrados</caption>

                <p style="font-family: 'Times New Roman', Times, serif; font-size: 120%;">Clique no produto para expandir a visualização</p>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor unitário</th>
                    <th>Disponibilidade</th>
                </tr>
            </thead>

            <tbody class=" table-hover">

                @foreach($produtos as $produto)

                @if($produto->tipo == 'Porção')

                <tr>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->nome}}</a></td>
                    <td><a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{ $produto->descricao}} </a></td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">R$ {{$produto->valor}}</a> </td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->condicao}}</a> </td>
                </tr>

                @endif
                @endforeach

            </tbody>

            <tfoot>
                <tr>

                    <?php
                    $totalPromocao = 0;

                    foreach ($produtos as $produto) {
                        if ($produto->tipo == 'Porção') {

                            $totalPromocao++;
                        }
                    }

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="2" style="text-align: center;"> {{$totalPromocao}}</th>
                </tr>
            </tfoot>

        </table>


        <!------------------------------------------------------------------------------------------------- -->

        <h1 style="font-family:'Sansita+Swashed'; font-weight: bold; text-align: center; font-size: 25px;">
            Combos
        </h1>

        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Produtos cadastrados</caption>

                <p style="font-family: 'Times New Roman', Times, serif; font-size: 120%;">Clique no produto para expandir a visualização</p>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor unitário</th>
                    <th>Disponibilidade</th>
                </tr>
            </thead>

            <tbody class=" table-hover">

                @foreach($produtos as $produto)

                @if($produto->tipo == 'Combo')

                <tr>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->nome}}</a></td>
                    <td><a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{ $produto->descricao}} </a></td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">R$ {{$produto->valor}}</a> </td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->condicao}}</a> </td>
                </tr>

                @endif
                @endforeach

            </tbody>

            <tfoot>
                <tr>

                    <?php
                    $totalPromocao = 0;

                    foreach ($produtos as $produto) {
                        if ($produto->tipo == 'Combo') {

                            $totalPromocao++;
                        }
                    }

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="2" style="text-align: center;"> {{$totalPromocao}}</th>
                </tr>
            </tfoot>

        </table>


        <!------------------------------------------------------------------------------------------------- -->

        <h1 style="font-family:'Sansita+Swashed'; font-weight: bold; text-align: center; font-size: 25px;">
            Bebidas
        </h1>

        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Produtos cadastrados</caption>

                <p style="font-family: 'Times New Roman', Times, serif; font-size: 120%;">Clique no produto para expandir a visualização</p>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor unitário</th>
                    <th>Disponibilidade</th>
                </tr>
            </thead>

            <tbody class=" table-hover">

                @foreach($produtos as $produto)

                @if($produto->tipo == 'Bebida')

                <tr>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->nome}}</a></td>
                    <td><a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{ $produto->descricao}} </a></td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">R$ {{$produto->valor}}</a> </td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->condicao}}</a> </td>
                </tr>

                @endif
                @endforeach

            </tbody>

            <tfoot>
                <tr>

                    <?php
                    $totalPromocao = 0;

                    foreach ($produtos as $produto) {
                        if ($produto->tipo == 'Bebida') {

                            $totalPromocao++;
                        }
                    }

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="2" style="text-align: center;"> {{$totalPromocao}}</th>
                </tr>
            </tfoot>

        </table>

           <!------------------------------------------------------------------------------------------------- -->

           <h1 style="font-family:'Sansita+Swashed'; font-weight: bold; text-align: center; font-size: 25px;">
            Sobremesas
        </h1>

        <table id="tableDados" class="table table-hover table-bordered table-striped shadow">
            <thead class="table-secondary">

                <caption style="text-align: center;">Produtos cadastrados</caption>

                <p style="font-family: 'Times New Roman', Times, serif; font-size: 120%;">Clique no produto para expandir a visualização</p>

                <tr style="font-size: 20px;" class="align-items-center">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor unitário</th>
                    <th>Disponibilidade</th>
                </tr>
            </thead>

            <tbody class=" table-hover">

                @foreach($produtos as $produto)

                @if($produto->tipo == 'Sobremesa')

                <tr>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->nome}}</a></td>
                    <td><a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{ $produto->descricao}} </a></td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">R$ {{$produto->valor}}</a> </td>
                    <td> <a style="text-decoration: none; color: black;" href="{{route('produto.show',$produto->id)}}">{{$produto->condicao}}</a> </td>
                </tr>

                @endif
                @endforeach

            </tbody>

            <tfoot>
                <tr>

                    <?php
                    $totalPromocao = 0;

                    foreach ($produtos as $produto) {
                        if ($produto->tipo == 'Sobremesa') {

                            $totalPromocao++;
                        }
                    }

                    ?>
                    <th colspan="2" style="text-align: center;">Total</th>
                    <th colspan="2" style="text-align: center;"> {{$totalPromocao}}</th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>


@endSection
