<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="icon" href="https://raw.githubusercontent.com/twbs/icons/main/icons/basket3-fill.svg">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <title>Sistema de Manutenção de Equipamentos</title>
</head>

<body>

    <div class="jumbotron bg-light ">
        <h1 class="display-4 text-center">Sistema de Manutenção de Equipamentos</h1>
        <hr class="my-2">
        <p class="lead text-center">Navegue por Área Geral - Suporte ou Área Administrativa</p>
    </div>

    <div class="button" style="display: flex; justify-content: center;">
        <a href="{{route('equipamento.index')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%;" type="button" class="btn btn-light border-info"><span class="glyphicon glyphicon-wrench"></span> Área Geral - Suporte</a>
        <a  href="{{route('adm')}}" style="margin-left: 2px; margin-right: 50px; font-size: 150%;" type="button" class="btn btn-light border-info"> <span class="glyphicon glyphicon-folder-open"></span> Área Administrativa</a>
    </div>

</body>

</html>
