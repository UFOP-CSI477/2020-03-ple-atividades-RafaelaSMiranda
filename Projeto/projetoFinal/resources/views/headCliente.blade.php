<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cardápio</title>
    <link rel="stylesheet" href="./cardapio.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/botaoQuantidade.js"></script>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="{{route('homeInicial')}}">Lanches Fast Food</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


                @yield('linkCardapio')

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest


            </ul>

            <?php

            $valorTotal = 0;

            if (session()->has('produto')) {
                $produtos = session()->all()['produto'];

                foreach ($produtos as $produto) {

                    $valorTotal += $produto['quantidade'] * $produto['valor'];
                }
            }


            ?>


            <a style="font-weight: bold;" href="{{route('pedido.index')}}" class="btn btn-danger my-2 mr-2 my-sm-0" type="submit">

                R$ {{$valorTotal}},00
            </a>

        </div>

    </nav>


    <div class="container w-75 border border-dark rounded shadow bg-white rounded" style=" padding: 20px; margin-top: 100px; ">

        @if(session('mensagem'))


        <div class="alert alert-light border-info shadow ml-5 mr-5">
            <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center; text-align: center;">{{session('mensagem')}}</p>
        </div>


        @endif

        @if(session('mensagemErro'))


        <div class="alert alert-light border-danger shadow">
            <p style="font-family: 'Sansita+Swashed'; font-weight: bold; font-size: 30px; display: flex; justify-content: center; text-align: center;">{{session('mensagemErro')}}</p>
        </div>


        @endif

        @yield('conteudo')

    </div>



</body>

</html>
