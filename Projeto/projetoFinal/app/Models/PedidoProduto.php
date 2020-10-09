<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    use HasFactory;

    protected $fillable = ['pedido_id','produto_id', 'quantidade', 'valorTotal', ];

    public function produto()
    {

        return $this->belongsTo((Produto::class));
    }

    public function pedido()
    {

        return $this->belongsTo((Pedido::class));
    }
}
