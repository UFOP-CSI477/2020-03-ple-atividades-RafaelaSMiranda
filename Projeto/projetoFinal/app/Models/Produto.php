<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome','tipo', 'descricao', 'valor'];


    public function pedidos()
    {
        return $this->belongsToMany((Pedido::class));
    }


}
