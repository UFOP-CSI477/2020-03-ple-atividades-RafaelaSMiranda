
<?php
$dbfile = "./db/database.sqlite";
$username = "";
$password = "";
$dbname = "database.sqlite";

$strConnection = "sqlite:" . $dbfile;

try {
    
    $conn = new PDO($strConnection, $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

?>

