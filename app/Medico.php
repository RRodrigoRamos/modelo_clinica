<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
	protected $fillable = [
        'foto',
         'name',
         'crm',
         'sexo',
         'data_nasc',
         'telefone',
         'email',
         'especialidade_id',
         'user_id',
    ];
       public function user()
    {
        return $this->hasOne(\acclinic\User::class);
    }
    public function endereco()
    {
        return $this->hasOne(\acclinic\Endereco::class);
    }

    public function especialidade()
    {
        return $this->hasMany(\acclinic\Especialidade::class);
    }
    public function medicoAgenda()
    {
        return $this->belongsTo(\acclinic\ClinicaMedico::class);
    }
}
