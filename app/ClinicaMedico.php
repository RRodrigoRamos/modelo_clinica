<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class ClinicaMedico extends Model
{
	protected $fillable = [
        'clinica_id', 'medicos_id',
    ];

    public function medicoAgenda()
    {
        return $this->hasMany(\acclinic\Medico::class);
    }
    public function clinicaAgenda()
    {
        return $this->hasMany(\acclinic\Clinica::class);
    }

    public function medicoClinicaAgenda()
    {
        return $this->belongsTo(\acclinic\Agendamento::class);
    }

}
