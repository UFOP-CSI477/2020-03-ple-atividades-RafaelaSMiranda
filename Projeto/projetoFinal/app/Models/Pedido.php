<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['valorTotal', 'cliente_id', 'observacao', 'status'];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }

    public function cliente()
    {

        return $this->belongsTo(Cliente::class);
    }

    public function pedido_produtos()
    {

        return $this->hasMany((Produto::class))
            ->select(DB::raw('produto_id, sum(valor) as valores, count(1) as quantidade'))
            ->groupBy('produto_id')
            ->orderBy('produto_id', 'desc');
    }

    public static function consultaId($where)

    {
        $pedido = self::where($where)->first(['id']);
        return !empty($pedido->id) ? $pedido->id : null;
    }
}
