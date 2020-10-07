<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- <script type="text/javascript" src=".js"></script> -->

    <link rel="stylesheet" href="./home.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>


    <!-- -------------------------------------------------------------------------------------------------- -->

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../img/1.jpg" alt="Hamburguer">

            </div>
            <div class="carousel-item">
                <img src="../../img/2.jpg" alt="Porção">
            </div>
            <div class="carousel-item">
                <img src="../../img/3.jpg" alt="Pizza">


                <div id="teste" class="carousel-caption container-fluid text-left "
                    style="background-color: black; opacity: 0.6;">


                    <p> Horário de funcionamento: </p>

                    <p>de 18h00 às 01h00 </p>



                    <p>Contato: (DD) xxxxx-xxxx / (DD) xxxxx-xxxx</p>

                </div>

            </div>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

    <!-- --------------------------------------------------------------------------------------------------------- -->


    <div class="container-sm pl-5 pr-5 pt-4">

        <div id="text">

            <div id="login">
                <form class="form" style="display: flex; justify-content: space-evenly;">

                    <div class="form-group">
                        <label for="usuario" class="font-weight-bold">Usuário</label>
                        <input class="form-control" type="text" name="usuario" id="usuario">

                        <label for="senha" class="font-weight-bold">Senha</label>
                        <input class="form-control" type="password" name="senha" id="senha">
                    </div>


                    <div id="button">
                        <div class="form-group pt-2 pl-5">
                            <a href="{{route('produto.index')}}"  class="btn btn-outline-success text-dark" type="button">
                                Entrar</a>
                        </div>

                        <div class="form-group">
                            <a type="button" class="btn text-secondary" href="#">Não tenho
                                cadastro</a>
                        </div>

                        <div class="form-group pl-4">
                            <a href="{{route('cardapio')}}" type="button" class="btn text-secondary">Visitar o site</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>

</body>

</html>
