<?php

use Illuminate\Database\Seeder;

class AtendenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atendente::create([
            'user_id' => 1,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
        ]);
        Atendente::create([
            'user_id' => 2,
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
        ]);
    }
}
