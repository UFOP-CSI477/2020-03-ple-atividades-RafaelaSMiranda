



<?php


require_once './connection.php';


$nome = $_POST['nome'];
$um = $_POST['um'];

if (!(empty($nome) || empty($um))) {

    try {

        $conn->beginTransaction();

        $sql = $conn->prepare("INSERT INTO produtos (nome, um) VALUES (:nome, :um)");

        $sql->bindParam(':nome', $nome);
        $sql->bindParam(':um', $um);

        $sql->execute();

        $conn->commit();


        header('Location: produtosView.php');
        exit();
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

} else {

    echo "<script>alert('Erro ao inserir');</script>";
}

