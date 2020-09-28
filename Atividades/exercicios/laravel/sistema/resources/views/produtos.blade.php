<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Produtos</title>
</head>

<body>

    <h1 >Lista de produtos</h1>

    <table class="table table-hover table-bordered table-indo table-striped">
    <thead class="table-info">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Unidade de Medida</th>
        </tr>
    </thead>
    <tbody>

        @foreach($produtos as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->nome }} </td>
                <td>{{ $e->um }}</td>
            </tr>
        @endforeach

    </tbody>
</table>


</tbody>

</table>


</body>

</html>
