<?php

use Illuminate\Database\Seeder;
use acclinic\Medico;

class MedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Medico::create([
            'user_id' => 5,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Alfredo Costa',
            'crm' =>'12341-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico1@gmail.com',
            'especialidade_id' =>1,
        ]);
      Medico::create([
            'user_id' => 6,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Alice Costa',
            'crm' =>'12001-AP', 
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico2@gmail.com',
            'especialidade_id' =>2,
        ]);
      Medico::create([
            'user_id' => 7,          
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Brasil',
            'crm' =>'12012-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico3@gmail.com',
            'especialidade_id' =>3,
        ]);
      Medico::create([
            'user_id' => 8,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Brasil1',
            'crm' =>'12013-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico31@gmail.com',
            'especialidade_id' =>3,
        ]);
     
    }
}
