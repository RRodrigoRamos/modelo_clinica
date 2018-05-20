<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
	protected $fillable = [
        'tipo_clinic','nome','contato','endereco_id',
    ];

    public function endereco()
    {
        return $this->hasOne(\acclinic\Endereco::class);
    }

    public function clinicaAgenda()
    {
        return $this->belongsTo(\acclinic\ClinicaMedico::class);
    }
}
