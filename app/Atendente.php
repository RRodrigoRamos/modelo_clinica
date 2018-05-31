<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Atendente extends Model
{

    protected $fillable = [
        'user_id',
        'foto',
        'sexo',
        'data_nasc',
        'telefone',
    ];

    public function user()
    {
        return $this->hasOne(\acclinic\User::class);
    }
}
