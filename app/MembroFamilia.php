<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembroFamilia extends Model
{
    protected $fillable = [
        'nome',
        'dt_nasc',
        'parentesco',
        'escola',
        'turno_escolar',
        'nis',
        'cpf'
    ];
}
