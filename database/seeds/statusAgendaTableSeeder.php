<?php

use Illuminate\Database\Seeder;
use acclinic\statusAgenda;

class statusAgendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	statusAgenda::create([
            'descricao' => 'Pendente',
        ]);
        statusAgenda::create([
            'descricao' => 'Confirmado',
        ]);
        statusAgenda::create([
            'descricao' => 'Cancelado',
        ]);
        statusAgenda::create([
            'descricao' => 'Verificando Convenio',
        ]);
        statusAgenda::create([
            'descricao' => 'Pago',
        ]);
        statusAgenda::create([
            'descricao' => 'Finalizado',
        ]);

    }
}
