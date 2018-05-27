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
            'user_id' => 6,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Carlos',
            'crm' =>'12341-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico1@gmail.com',
            'especialidade_id' =>12,
        ]);
      Medico::create([
            'user_id' => 7,
            'foto' =>'../public/images/perfil/mulher_jovem.png',
            'name' =>'Drª. Andreza Mayara',
            'crm' =>'12001-AP', 
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico2@gmail.com',
            'especialidade_id' =>2,
        ]);
      Medico::create([
            'user_id' => 8,          
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
            'user_id' => 9,
            'foto' =>'../public/images/perfil/mulher_jovem.png',
            'name' =>'Dr. Carmem Lúcia',
            'crm' =>'12013-AP', 
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico08@gmail.com',
            'especialidade_id' =>8,
        ]);
      Medico::create([
            'user_id' => 10,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Santos',
            'crm' =>'12088-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico09@gmail.com',
            'especialidade_id' =>12,
        ]);
      Medico::create([
            'user_id' => 11,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Tomas Edson',
            'crm' =>'12998-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico10@gmail.com',
            'especialidade_id' =>3,
        ]);
      Medico::create([
            'user_id' => 12,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Paulo Coelho',
            'crm' =>'12111-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico11@gmail.com',
            'especialidade_id' =>2,
        ]);
      Medico::create([
            'user_id' => 13,
            'foto' =>'../public/images/perfil/mulher_jovem.png',
            'name' =>'Drª Elizabeth Gomes',
            'crm' =>'10187-AP', 
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico12@gmail.com',
            'especialidade_id' =>3,
        ]);
        Medico::create([
            'user_id' => 14,
            'foto' =>'../public/images/perfil/mulher_jovem.png',
            'name' =>'Drª Francys',
            'crm' =>'76578-AP', 
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico13@gmail.com',
            'especialidade_id' =>12,
        ]);
        Medico::create([
            'user_id' => 15,
            'foto' =>'../public/images/perfil/mulher_jovem.png',
            'name' =>'Dr. Paulo Barbosa',
            'crm' =>'33445-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico14@gmail.com',
            'especialidade_id' =>12,
        ]);
     
    }
}
