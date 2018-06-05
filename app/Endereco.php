<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
     protected $fillable = [
        'cep',
        'tipo_local',
        'endereco',
        'numero',
        'complement',
        'bairro_id',
    ];

    public function user()
    {
        return $this->hasOne(\acclinic\User::class);
    }
    public function endereco()
    {
        return $this->belongsTo(\acclinic\Bairro::class);
    }

    public function clinica()
    {
        return $this->hasOne(\acclinic\Clinica::class);
    }
}
