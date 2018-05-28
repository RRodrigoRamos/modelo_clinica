<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'convenio_id',
        'foto',
        'sexo',
        'data_nasc',
        'telefone',
    ];

    public function user()
    {
        return $this->hasOne(\acclinic\User::class);
    }

    public function triagen()
    {
        return $this->hasOne(\acclinic\Triagen::class);
    }

    public function convenio()
    {
        return $this->hasOne(\acclinic\Convenio::class);
    }
    
    public function agenda()
    {
        return $this->hasMany(\acclinic\Agendamento::class);
    }
}
