<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coleta extends Model
{
    use HasFactory;

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
