<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

	protected $fillable = [
        'nome','estado_id',
    ];
    
    public function bairro()
    {
        return $this->hasMany(\acclinic\Bairro::class);
    }

    public function cidade()
    {
        return $this->belongsTo(\acclinic\Medico::class);
    }
}
