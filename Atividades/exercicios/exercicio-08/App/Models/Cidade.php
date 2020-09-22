<?php

namespace App\Model;

use App\Models\ModelInterface;

class Cidades implements ModelInterface
{

    private $id;
    private $nome;

    public function __construct($id, $nome)
    {
        $this->id = $id;
        $this->nome  = $nome;  
    }

    public function getAll()
    {
        
    }

    public function get($id)
    {
        
    }
}