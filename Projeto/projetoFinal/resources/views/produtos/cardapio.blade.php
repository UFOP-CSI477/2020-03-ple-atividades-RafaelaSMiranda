@extends('headCliente')

@section('linkCardapio')

<li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cardápio
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#pizza">Pizza</a>
        <a class="dropdown-item" href="#hamburguer">Hamburguer</a>
        <a class="dropdown-item" href="#porcao">Porcao</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#montagem">Montar meu lanche</a>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="#adicionais">Adicionais<span class="sr-only">(current)</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#bebidas">Bebidas</a>
</li>



@endSection

<!-- ------------------------------------------------------------------------------------------------ -->

@section('conteudo')

<form method="POST">

    @csrf




    <div id="pizza" class="shadow p-5">

        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Pizza</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Pizza')

        <?php

        $chave = 'produto.' . $produto->id;
        if (session()->has($chave)) {
            $quantidade = session()->get($chave)['quantidade'];
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
                    <a type="button" id="subtrairPizza" style="color: red; font-size: 30px;">-</a>


                    <input id="{{$produto->id}}" name="quantPizza" class="text" size="1" value="0" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />



                    <a type="button" id="adicionarPizza" onclick="adicionar()" href="{{route('produto.show', $produto->id)}}" style="color: green; font-size: 30px;"> + </a>
                </div>

            </div>



            </dl>

            @endif

            @endforeach

    </div>

    <hr>


    <!-- ------------------------------------------------------------------------------------------ -->

    <div id="hamburguer" class="shadow p-5">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Hamburguer</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Hambúrguer')

        <dl>
            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor">
                    <p style="font-weight: bold;">R$ {{$produto->valor}}</p>
                </div>

                <div class="unidades">
                    <a type="button" class="btn btn-light btn-outline-danger" id="subtrair" onclick="process(-1)">-</a>
                    <input id="quant" name="quant" class="text" size="1" value="0" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />
                    <a type="button" id="adicionar" class="btn btn-light btn-outline-success " href="{{route('produto.show', $produto->id)}}"> + </a>
                </div>

            </div>

        </dl>

        @endif
        @endforeach


    </div>



    <hr>

    <!-- ------------------------------------------------------------------------------------- -->


    <div id="porcao">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Porcao</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Porção')

        <dl>
            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor">
                    <p style="font-weight: bold;">R$ {{$produto->valor}}</p>
                </div>

                <div class="unidades">
                    <a type="button" class="btn btn-light btn-outline-danger" id="subtrair" onclick="process(-1)">-</a>
                    <input id="quant" name="quant" class="text" size="1" value="0" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />
                    <a type="button" id="adicionar" class="btn btn-light btn-outline-success " href="{{route('produto.show', $produto->id)}}"> + </a>
                </div>

            </div>

        </dl>

        @endif
        @endforeach

    </div>

    <hr>

    <!-- -------------------------------------------------------------------------------------- -->

    <div id="adicionais">
        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Adicionais</p>


        <dl>
            <dt>Fritas com bacon</dt>
            <dd>- Pão australiano, burger de picanha 200g grelhado na brasa, queijo emmenthal, fatias de bacon
                crocante, cebola caramelizada, alface, tomate e maionese de bacon. Acompanha fritas.</dd>

            <div class="quantidade">


                <div class="valor">
                    <p>R$24,00</p>
                </div>

                <div class="unidades">
                    <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                    <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
                    <input type="button" id="adicionar" value='+' onclick="process(1)">
                </div>

            </div>

        </dl>

    </div>


    <hr>
    <!-- ------------------------------------------------------------------------------ -->

    <div id="bebidas">

        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Bebidas</p>

        @foreach($produtos as $produto)

        @if($produto->tipo == 'Bebida')

        <dl>
            <dt>{{$produto->nome}}</dt>
            <dd>- {{$produto->descricao}}</dd>

            <div class="quantidade">


                <div class="valor">
                    <p style="font-weight: bold;">R$ {{$produto->valor}}</p>
                </div>

                <div class="unidades">
                    <a type="button" class="btn btn-light btn-outline-danger" id="subtrair" onclick="process(-1)">-</a>
                    <input id="quant" name="quant" class="text" size="1" value="0" type="text" style="text-align: center; height: 25px; font-weight: bold;" disabled />
                    <a type="button" id="adicionar" class="btn btn-light btn-outline-success " href="{{route('produto.show', $produto->id)}}"> + </a>
                </div>

            </div>

        </dl>

        @endif
        @endforeach



    </div>



    <hr>

    <!-- --------------------------------------------------------------------------------------------- -->

    <div id="montarLanche">

        <p style="font-family: 'Lobster Two'; font-size: 30px; display: flex; justify-content: center;">Monte o seu lanche</p>
        <dl>

            <div class="row">

                <div class="col-4" style="display: grid; justify-content: center;">

                    <span style="text-align: center;">Pizza</span>

                    <div class="quantidade">


                        <div class="valor">
                            <p style="text-align: center;">R$25,00</p>
                        </div>

                        <div class="unidades">
                            <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                            <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
                            <input type="button" id="adicionar" value='+' onclick="process(1)">
                        </div>

                    </div>

                </div>

                <div class="col-4" style="display: grid; justify-content: center;">


                    <span style="text-align: center;">Hambúrguer

                    </span>
                    <div class="quantidade">


                        <div class="valor">
                            <p style="text-align: center;">R$6,00</p>
                        </div>

                        <div class="unidades">
                            <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                            <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
                            <input type="button" id="adicionar" value='+' onclick="process(1)">
                        </div>

                    </div>

                </div>

                <div class="col-4" style="display: grid; justify-content: center;">

                    <span style="text-align: center;">Porção</span>

                    <div class="quantidade">


                        <div class="valor">
                            <p style="text-align: center;">R$20,00</p>
                        </div>

                        <div class="unidades">
                            <input type="button" id="subtrair" value='-' onclick="process(-1)" />
                            <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" disabled />
                            <input type="button" id="adicionar" value='+' onclick="process(1)">
                        </div>

                    </div>

                </div>
            </div>

            <dl>
                <hr>

    </div>
    <!-- ------------------------------------------------------------------------------- -->

    <div class="botaoFinalizar pt-5">
        <a href="../finalizar/finalizar.html" type="submit" class="btn btn-outline-primary">Adicionais</a>
        <a href="../finalizar/finalizar.html" type="submit" class="btn btn-outline-success">Finalizar pedido</a>
    </div>

</form>

@endSection
