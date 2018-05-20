<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Triagen extends Model
{
     protected $fillable = [
        'paciente_id',
        'altura',
        'peso',
        'obs',
    ];

    public function user()
    {
        return $this->belongsTo(\acclinic\Paciente::class);
    }
}
