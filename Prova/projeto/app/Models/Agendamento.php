<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    public function pessoa()
    {

        return $this->belongsTo(Pessoa::class);
    }

    public function coleta()
    {

        return $this->belongsTo(Coleta::class);
    }
}
