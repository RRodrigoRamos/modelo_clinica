<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
   protected $fillable = [
        'data_agenda', 'hora_agenda', 'tipo_agenda',
        'agenda_de', 'obs', 'users_id',
        'clinica_medicos_id', 'status_id',
    ];

    public function medicoClinicaAgenda()
    {
        return $this->hasOne(\acclinic\ClinicaMedico::class);
    }
    public function user()
    {
        return $this->belongsTo(\acclinic\User::class);
    }
    public function status()
    {
        return $this->hasMany(\acclinic\statusAgenda::class);
    }

}

