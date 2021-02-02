<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $fillable = [
        'encaminhado_de',
        'bairro',
        'logradouro',
        'numero',
        'complemento',
        'num_pasta',
        'classificacao'
    ];
}
