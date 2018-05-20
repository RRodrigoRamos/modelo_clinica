<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model

{
	protected $fillable = [
        'nome','cidade_id',
    ];

    public function endereco()
    {
        return $this->hasMany(\acclinic\Endereco::class);
    }

    public function cidade()
    {
        return $this->belongsTo(\acclinic\Cidade::class);
    }
}
