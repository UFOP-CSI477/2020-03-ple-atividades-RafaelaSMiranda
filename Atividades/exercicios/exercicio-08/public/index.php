<?php

require '../vendor/autoload.php';

use App\Database\Connection;
use App\Database\AdapterSQLite;


// $estado = new Estado(1, "Minas Gerais", "MG");
// var_dump($estado);

$connection = new Connection(new AdapterSQLite);
// var_dump($connection);


$conn = $connection->getAdapter()->open();
$estados = $connection->getAdapter()->getEstados($conn);
$cidades = $connection->getAdapter()->getCidades($conn);
$produtos = $connection->getAdapter()->getProdutos($conn);


require_once "../App/Views/dadosView.php";
