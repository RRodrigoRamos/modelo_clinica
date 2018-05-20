<?php

use Illuminate\Database\Seeder;
use acclinic\Cidade;

class CidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   		Cidade::create ([
            'nome'=>'Macapá',
            'estado_id'=>3,

        ]);
        Cidade::create ([
            'nome'=>'Santana',
            'estado_id'=>3,
        ]);
    }
}
