<?php

namespace acclinic;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
	protected $fillable = [
        'sigla','descricao',
    ];

    public function Estado()
    {
        return $this->hasMany(\acclinic\Cidade::class);
    }
}