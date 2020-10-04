<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
    ];

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
