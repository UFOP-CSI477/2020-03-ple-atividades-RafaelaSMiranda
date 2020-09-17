<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulário com PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="formulario.css">


</head>

<body>

    <?php

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $dataNasc = $_POST['dataNasc'];
    $nacionalidade = $_POST['nacionalidade'];
    $estadoCivil = $_POST['estadoCivil'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($estadoCivil === 'S') {
        $estadoCivil = "Solteiro";
    } else if ($estadoCivil === 'C') {
        $estadoCivil = "Casado";
    } else {
        $estadoCivil = "Prefiro não informar";
    }




    // so funciona assim para aspas duplas
    // no caso de aspas simples, exibe da forma exatamente que esta
    ?>


    <div class="jumbotron bg-light">
        <h1 class="display-4 text-center" style="font-family: 'Times New Roman', Times, serif;">Dados Cadastrados</h1>
    </div>

    <div class="container mt-0">

        <p>Nome: <?php echo $nome; ?></p>
        <p>Endereço: <?php echo $endereco ?></p>
        <p>CPF: <?php echo $cpf ?></p>
        <p>RG: <?php echo $rg ?></p>
        <p>Data de Nascimento: <?php echo $dataNasc ?></p>
        <p>Nacionalidade: <?php echo $nacionalidade ?></p>
        <p>Estado civil: <?php echo $estadoCivil ?></p>
        <p>Telefone: <?php echo $nacionalidade ?></p>
        <p>E-mail: <?php echo $email ?></p>
        <p>Usuário: <?php echo $usuario ?></p>
        <p>Senha: Confidencial</p>

        <div class="botao">
            <a type="button" class="btn btn-info" href="index.php">Voltar</a>
        </div>
    </div>

</body>



</html>