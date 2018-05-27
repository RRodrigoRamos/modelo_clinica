<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $casts = [
        'dias_da_semana' => 'array'
    ];
    protected $fillable = [
        'horario_inicio','horario_termino',
    ];
}
