<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = ['equipamento_id', 'user_id', 'descricao', 'dataLimite', 'tipo'];

    public function Equipamento()
    {

        return $this->hasOne('App\Models\Equipamento', 'id', 'equipamento_id');
    }

    public function User()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
