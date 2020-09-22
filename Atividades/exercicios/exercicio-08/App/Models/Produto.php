<?php

namespace App\Models;

class Produto implements ModelInterface{

    private $id, $nome, $un;
    public function __construct($id, $nome, $un){

        $this->id = $id;
        $this->nome = $nome;
        $this->un = $un;



    }

    public function __destruct(){



    }

    public function getAll(){

    }

    public function get($id){

        
    }



}