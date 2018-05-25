<?php

use Illuminate\Database\Seeder;
use acclinic\ClinicaMedico;

class ClinicaMedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClinicaMedico::create([
            'clinica_id' => 1,
            'medicos_id' => 1,
        ]);
        ClinicaMedico::create([
            'clinica_id' => 1,
            'medicos_id' => 2,
        ]);
        ClinicaMedico::create([
            'clinica_id' => 1,
            'medicos_id' => 3,
        ]);
    }
}
