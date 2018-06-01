<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
   protected $fillable = [
        'dia_da_semana',
        'data_do_agendamento',
        'tipo_agenda',
        'obs',
        'user_id',
        'medico_id',
        'status_id',
    ];

    public function medico()
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

