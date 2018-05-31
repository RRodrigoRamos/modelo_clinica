<?php

namespace acclinic;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'telefone',
        'cpf',
        'password',
        'endereco_id',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token','updated_at','created_at'
    ];

    public function medico()
    {
        return $this->hasOne(\acclinic\Medico::class);
    }

    public function endereco()
    {
        return $this->hasOne(\acclinic\Endereco::class);
    }

    public function paciente()
    {
        return $this->belongsTo(\acclinic\Paciente::class);
    }
    
    public function atendente()
    {
        return $this->belongsTo(\acclinic\Atendente::class);
    }
    
}
