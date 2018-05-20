<?php

use Illuminate\Database\Seeder;
use acclinic\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

 // Criando usuarios para o sistema
        Admin::create([
            'name' => 'Atendente 1',
            'email' => 'adm1@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        
        Admin::create([
        	'name' => 'Atendente 2',
        	'email' => 'adm2@gmail.com',
        	'password' => bcrypt('123456'),

        ]);
    }
}
