<?php

use Illuminate\Database\Seeder;
use acclinic\Paciente;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
    {
      Paciente::create([
            'user_id' => 1,
            'convenio_id' => 1,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
        ]);
      Paciente::create([
            'user_id' => 2,
            'convenio_id' => 2,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
        ]);
      Paciente::create([
            'user_id' => 3,
            'convenio_id' => 3,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
        ]);
      Paciente::create([
            'user_id' => 4,
            'convenio_id' => 4,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
        ]);
     
    }
}
