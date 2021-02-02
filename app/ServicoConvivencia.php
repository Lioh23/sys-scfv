<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicoConvivencia extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'turno'
    ];
}
