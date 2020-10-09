@extends('headCliente')

@section('linkCardapio')

<li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cardápio
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#pizza">Pizzas</a>
        <a class="dropdown-item" href="#hamburguer">Hamburgueres</a>
        <a class="dropdown-item" href="#porcao">Porções</a>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="#bebidas">Bebidas</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#promocao">Promoções</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#sobremesa">Sobremesas</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#combo">Combos</a>
</li>



@endSection

<!-- ------------------------------------------------------------------------------------------------ -->

@section('conteudo')

<form method="POST">

    @csrf


    <div id="promocao" class="shadow p-5">

        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Promoções</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Promoção')

        <?php

        $chave = 'produto.' . $produto->id;
        if (session()->has($chave)) {
            $quantidade = session()->get($chave)['quantidade'];
        } else {
            $quantidade = 0;
        }

        ?>

        <dl>

            <hr>

            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor" style="display: flex;">
                    <p style="font-size: 14px; color: red; text-decoration: line-through"> R$ {{$produto->valor+10}}</p>
                    <p style="font-weight: bold; margin-left: 25px;"> R$ {{$produto->valor}} </p>
                </div>

                <div class="unidades">
                    <a type="button" id="subtrair" href="{{route('sacolaRemover', $produto->id)}}" style="color: red; font-size: 30px;">-</a>


                    <input id="quantidade" name="quantidade" class="text" size="1" value="{{$quantidade}}" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />



                    <a type="button" id="adicionar" href="{{route('sacolaAdicionar', $produto->id)}}" style="color: green; font-size: 30px;"> + </a>
                </div>

            </div>



        </dl>

        @endif

        @endforeach

    </div>

    <hr>


    <!-- ------------------------------------------------------------------------------------------ -->

    <div id="pizza" class="shadow p-5">

        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Pizzas</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Pizza')

        <?php

        $chave = 'produto.' . $produto->id;
        if (session()->has($chave)) {
            $quantidade = session()->get($chave)['quantidade'];
        } else {
            $quantidade = 0;
        }

        ?>

        <dl>

            <hr>

            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor">
                    <p style="font-weight: bold;">R$ {{$produto->valor}}</p>
                </div>

                <div class="unidades">
                    <a type="button" id="subtrair" href="{{route('sacolaRemover', $produto->id)}}" style="color: red; font-size: 30px;">-</a>


                    <input id="quantidade" name="quantidade" class="text" size="1" value="{{$quantidade}}" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />



                    <a type="button" id="adicionar" href="{{route('sacolaAdicionar', $produto->id)}}" style="color: green; font-size: 30px;"> + </a>
                </div>

            </div>



        </dl>

        @endif

        @endforeach

    </div>

    <hr>


    <!-- ------------------------------------------------------------------------------------------ -->

    <div id="hamburguer" class="shadow p-5">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Hambúrgueres</p>
        @foreach($produtos as $produto)

        @if($produto->tipo == 'Hambúrguer')

        <?php

        $chave = 'produto.' . $produto->id;
        if (session()->has($chave)) {
            $quantidade = session()->get($chave)['quantidade'];
        } else {
            $quantidade = 0;
        }

        ?>

        <dl>

            <hr>

            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor">
                    <p style="font-weight: bold;">R$ {{$produto->valor}}</p>
                </div>

                <div class="unidades">
                    <a type="button" id="subtrair" href="{{route('sacolaRemover', $produto->id)}}" style="color: red; font-size: 30px;">-</a>


                    <input id="quantidade" name="quantidade" class="text" size="1" value="{{$quantidade}}" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />



                    <a type="button" id="adicionar" href="{{route('sacolaAdicionar', $produto->id)}}" style="color: green; font-size: 30px;"> + </a>
                </div>
            </div>



        </dl>

        @endif

        @endforeach



    </div>



    <hr>

    <!-- ------------------------------------------------------------------------------------- -->


    <div id="porcao" class="shadow p-5">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Porções</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Porção')

        <?php

        $chave = 'produto.' . $produto->id;
        if (session()->has($chave)) {
            $quantidade = session()->get($chave)['quantidade'];
        } else {
            $quantidade = 0;
        }

        ?>

        <dl>

            <hr>

            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor">
                    <p style="font-weight: bold;">R$ {{$produto->valor}}</p>
                </div>

                <div class="unidades">
                    <a type="button" id="subtrair" href="{{route('sacolaRemover', $produto->id)}}" style="color: red; font-size: 30px;">-</a>


                    <input id="quantidade" name="quantidade" class="text" size="1" value="{{$quantidade}}" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />



                    <a type="button" id="adicionar" href="{{route('sacolaAdicionar', $produto->id)}}" style="color: green; font-size: 30px;"> + </a>
                </div>

            </div>



        </dl>

        @endif

        @endforeach
    </div>

    <hr>

    <!-- ------------------------------------------------------------------------------ -->

    <div id="bebidas" class="shadow p-5">

        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Bebidas</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Bebida')

        <?php

        $chave = 'produto.' . $produto->id;
        if (session()->has($chave)) {
            $quantidade = session()->get($chave)['quantidade'];
        } else {
            $quantidade = 0;
        }

        ?>

        <dl>

            <hr>

            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor">
                    <p style="font-weight: bold;">R$ {{$produto->valor}}</p>
                </div>
                <div class="unidades">
                    <a type="button" id="subtrair" href="{{route('sacolaRemover', $produto->id)}}" style="color: red; font-size: 30px;">-</a>


                    <input id="quantidade" name="quantidade" class="text" size="1" value="{{$quantidade}}" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />



                    <a type="button" id="adicionar" href="{{route('sacolaAdicionar', $produto->id)}}" style="color: green; font-size: 30px;"> + </a>
                </div>

            </div>



        </dl>

        @endif

        @endforeach


    </div>

    <hr>

    <!-- ------------------------------------------------------------------------------- -->

    <div id="sobremesa" class="shadow p-5">

        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Sobremesas</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Sobremesa')

        <?php

        $chave = 'produto.' . $produto->id;
        if (session()->has($chave)) {
            $quantidade = session()->get($chave)['quantidade'];
        } else {
            $quantidade = 0;
        }

        ?>

        <dl>

            <hr>

            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor" style="display: flex;">
                    <p style="font-weight: bold; margin-left: 25px;"> R$ {{$produto->valor}} </p>
                </div>

                <div class="unidades">
                    <a type="button" id="subtrair" href="{{route('sacolaRemover', $produto->id)}}" style="color: red; font-size: 30px;">-</a>


                    <input id="quantidade" name="quantidade" class="text" size="1" value="{{$quantidade}}" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />



                    <a type="button" id="adicionar" href="{{route('sacolaAdicionar', $produto->id)}}" style="color: green; font-size: 30px;"> + </a>
                </div>

            </div>



        </dl>

        @endif

        @endforeach

    </div>

    <hr>


    <!-- ------------------------------------------------------------------------------------------ -->

    <div id="combo" class="shadow p-5">

        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Combos</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Combo')

        <?php

        $chave = 'produto.' . $produto->id;
        if (session()->has($chave)) {
            $quantidade = session()->get($chave)['quantidade'];
        } else {
            $quantidade = 0;
        }

        ?>

        <dl>

            <hr>

            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor" style="display: flex;">
                    <p style="color: red; text-decoration: line-through"> R$ {{$produto->valor+15}}</p>
                    <p style="font-weight: bold; margin-left: 25px;"> R$ {{$produto->valor}} </p>
                </div>

                <div class="unidades">
                    <a type="button" id="subtrair" href="{{route('sacolaRemover', $produto->id)}}" style="color: red; font-size: 30px;">-</a>


                    <input id="quantidade" name="quantidade" class="text" size="1" value="{{$quantidade}}" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />



                    <a type="button" id="adicionar" href="{{route('sacolaAdicionar', $produto->id)}}" style="color: green; font-size: 30px;"> + </a>
                </div>

            </div>



        </dl>

        @endif

        @endforeach

    </div>

    <hr>


    <!-- ------------------------------------------------------------------------------------------ -->


    <div class="botaoFinalizar pt-5">
        <a href="{{route('pedido.index')}}" type="submit" class="btn btn-outline-success">Finalizar pedido</a>
    </div>

</form>

@endSection
