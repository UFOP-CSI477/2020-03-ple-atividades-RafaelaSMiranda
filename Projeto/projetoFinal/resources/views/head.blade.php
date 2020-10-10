<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fast Food</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('js/validacaoPedido.js')}}"></script>
    <script src="{{asset('js/horarioAtual.js')}}"></script>


</head>

<body onload="iniciar()">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="{{route('homeInicial')}}">Lanches Fast Food</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


                @yield('linkCardapio')
                @yield('linkAdm')
                @yield('linkAdministrador')



            </ul>

            @yield('linkSacola')
            @yield('horario')

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
