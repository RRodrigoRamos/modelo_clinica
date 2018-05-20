<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class statusAgenda extends Model
{
    protected $fillable = [
        'descricao',
    ];

    public function status()
    {
        return $this->belongsTo(\acclinic\Agendamento::class);
    }
}
