<?php

use Illuminate\Database\Seeder;
use acclinic\Convenio;
class ConvenioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Convenio::create([
            'nome_convenio' => 'SulAmérica',
            'tipo_plano' => 'Gold',
            'n_registro' => '00212.123-AP',
            'validade' => '2019-05-07',
        ]);
       Convenio::create([
            'nome_convenio' => 'SulAmérica',
            'tipo_plano' => 'Especial II',
            'n_registro' => '01231234567890121',
            'validade' => '2019-05-07',
        ]);
       Convenio::create([
            'nome_convenio' => 'Amil',
            'tipo_plano' => 'Classico',
            'n_registro' => '63765500000000000',
            'validade' => '2025-05-07',
        ]);
       Convenio::create([
            'nome_convenio' => 'Caixa Saúde',
            'tipo_plano' => 'Gold',
            'n_registro' => '0018201.122-AP',
            'validade' => '2019-05-07',
        ]);
    }
}
