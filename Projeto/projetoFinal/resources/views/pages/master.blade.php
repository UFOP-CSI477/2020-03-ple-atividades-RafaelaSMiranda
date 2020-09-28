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


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Lanches Fast Food</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


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


                <li class="nav-item ">
                    <a class="nav-link" href={{route(pages.perfil)}>Perfil<span class="sr-only">(current)</span></a>
                </li>


            </ul>

            <a href={{pages.finalizar} class="btn btn-danger my-2 mr-2 my-sm-0" type="submit">R$ 24,00</a>



            <a href="../home/home.html" class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</a>

        </div>

    </nav>



</div>




    <!-- -------------------------------------------------------------------------------------------------- -->


    <div class="container w-75 border border-dark rounded shadow bg-white rounded" style=" padding: 20px; margin-top: 100px; ">

        <div class="itens">

        <div id="pizza">
        @yield('conteudoPizza')
        </div>

        <div id="hamburguer">
        @yield('conteudoHamburguer')
        </div>

        <div id="porcao">
        @yield('conteudoPorcao')
        </div>

        <div id="adicionais">
        @yield('conteudoAdicionais')
        </div>

        <div id="bebidas">
        @yield('conteudoBebidas')
        </div>

        <div id="montagem">
        @yield('conteudoMontagem')
        </div>

        @yield('conteudoBotao')

        @yield('conteudoPerfil')

    </div>

    </div>


</body>

</html>
