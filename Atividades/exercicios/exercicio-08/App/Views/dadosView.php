<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Estados e Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>

    <div class="container">
        <h1>Estados</h1>
        <table id="tabela" class="table table-hover table-light">

            <caption style="text-align: center; font-size: 20px;">Estados</caption>

            <thead class="table-info">

                <tr>
                    <th>
                        ID
                    </th>

                    <th>
                        Nome
                    </th>

                    <th>
                        Sigla
                    </th>

                </tr>

            </thead>

            <tbody>

                <?php

                while ($e = $estados->fetch()) {

                    echo "<tr>" .
                        "<td>" . $e["id"] . "</td> "
                        . "<td>" . $e["nome"] . "</td> "
                        . "<td>" . $e["sigla"] . "</td> "
                        . "</tr>";
                }
                ?>


            </tbody>

        </table>

        <h1>Produtos</h1>

        <table id="tabela" class="table table-hover table-light">

            <caption style="text-align: center; font-size: 20px;">Produtos</caption>

            <thead class="table-info">

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