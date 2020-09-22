<?php

namespace App\Database;

use PDO;
use PDOException;

class AdapterSQLite implements AdapterInterface
{


    public function open()
    {

       
        $dbfile = __DIR__ . "./database.sqlite";
        $username = "";
        $password = "";
        
        $strConnection = "sqlite:" . $dbfile;
        
        try {
            
            $connection = new PDO($strConnection, $username, $password);
            // $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            

            // $connection->query("CREATE TABLE IF NOT EXISTS estados(id INT PRIMARY KEY, nome VARCHAR, sigla VARCHAR)");
            // $connection->query("CREATE TABLE IF NOT EXISTS cidades(id INT PRIMARY KEY, nome VARCHAR)");
            // $connection->query("CREATE TABLE IF NOT EXISTS produtos(id INT PRIMARY KEY, nome VARCHAR, um VARCHAR)");
    
            return $connection;

        } catch (PDOException $e) {
            echo  "<br>" . $e->getMessage();
        }
    }

    public function close()
    {
    }

    public function getEstados($connection)
    {
        
        return $connection->query("SELECT * FROM estados");
   
        
    }

    public function getCidades($connection)
    {
        return $connection->query("SELECT * FROM cidades");
    }

    public function getProdutos($connection)
    {
        
        return $connection->query("SELECT * FROM produtos");
    }
}
