<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $fillable = [
        'campo','descricao',
    ];

    public function medico()
    {
        return $this->belongsTo(\acclinic\Medico::class);
    }
}
