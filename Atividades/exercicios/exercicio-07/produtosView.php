<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="validacao.js"></script>

</head>

<body>

    <?php

    require_once 'connection.php';
    $produtos = $conn->query("SELECT * FROM produtos");

    ?>

    <div class="container">


        <div class="title">
            <p>Inserir novo produto</p>
        </div>

        <form action="produtosViewInsert.php" method="POST">
            <div class="inserir" class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control">

                <label for="um">Unid. Medida</label>
                <input type="text" id="um" name="um" placeholder="Ex.: Peça - pç, quilo - kg" class="form-control">

                <input class="btn btn-light mb-5" type="submit" value="Enviar" onclick="return cadastrar()">
            </div>
        </form>


        <table id="tabela" class="table table-hover table-light align-content-center">

            <caption style="text-align: center; font-size: 20px;">Produtos</caption>

            <thead class="table-primary">

                <tr>
                    <th>
                        ID
                    </th>

                    <th>
                        Nome
                    </th>

                    <th>
                        Unidade de Medida
                    </th>

                </tr>

            </thead>

            <tbody>

                <?php

                while ($e = $produtos->fetch()) {

                    echo "<tr>" .
                        "<td>" . $e["ID"] . "</td> "
                        . "<td>" . $e["nome"] . "</td> "
                        . "<td>" . $e["um"] . "</td> "
                        . "</tr>";
                }
                ?>


            </tbody>

        </table>

    </div>

</body>

</html>