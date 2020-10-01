<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="icon" href="https://raw.githubusercontent.com/twbs/icons/main/icons/basket3-fill.svg">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Exercicios Laravel</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top fixed-top">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">


                <li class="nav-item" active style="font-size: 20px; padding-right: 50px;">
                    <a class="nav-link" href="{{route('principal')}}">Home</a>
                </li>

                <li class="nav-item" active style="font-size: 20px; padding-right: 50px;">
                    <a class="nav-link" href="{{route('produtos.create')}}">Cadastrar produto</a>
                </li>

                @yield('link')

            </ul>

    </nav>

    @if(session('mensagem'))

    <div class="alert alert-success">

        {{session('mensagem')}}

    </div>

    @endif

    @yield('conteudo')

</body>

</html>
