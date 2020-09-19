<?php


require_once 'connection.php';

try {

    $sql = "CREATE TABLE produtos(
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    nome VARCHAR(100) NOT NULL,
    um VARCHAR(3) NOT NULL
    )";

    // $sql = "DROP TABLE produtos";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table Produtos created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
