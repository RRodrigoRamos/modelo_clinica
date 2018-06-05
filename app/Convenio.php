<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $fillable = [
        'nome_convenio','tipo_plano','n_registro', 'validade',
    ];

    public function user()
    {
        return $this->belongsTo(\acclinic\User::class);
    }
}
