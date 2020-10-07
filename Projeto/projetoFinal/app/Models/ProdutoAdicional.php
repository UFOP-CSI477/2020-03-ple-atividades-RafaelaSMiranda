<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoAdicional extends Model
{
    use HasFactory;

    protected $fillable = ['adicional_id','produto_id'];

    public function produto()
    {

        return $this->belongsTo((Produto::class));
    }

    public function adicional()
    {

        return $this->belongsTo((Adicional::class));
    }
}
