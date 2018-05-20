<?php

use Illuminate\Database\Seeder;
use acclinic\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 User::create([
            'name' => 'paciente1',
            'email' => 'paciente1@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '854.319.742-20',
            'role'=> 'paciente',
        ]);
         User::create([
            'name' => 'paciente2',
            'email' => 'paciente2@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '811.319.002-20',
            'role'=> 'paciente',
        ]);
         User::create([
            'name' => 'paciente3',
            'email' => 'paciente3@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'paciente',
            'cpf' => '800.349.744-20',
        ]);
         User::create([
            'name' => 'paciente4',
            'email' => 'paciente4@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'paciente',
            'cpf' => '801.319.144-21',
        ]);  
    	 User::create([
             'name' => 'medico1',
            'email' => 'Medico1@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '851.319.742-20',
            'role'=> 'medico',
        ]);
         User::create([
             'name' => 'medico2',
            'email' => 'Medico2@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '812.319.002-20',
            'role'=> 'medico',
        ]);
         User::create([
             'name' => 'medico3',
            'email' => 'Medico3@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'paciente',
            'cpf' => '803.349.744-20',
        ]);
         User::create([
            'name' => 'medico4',
            'email' => 'Medico4@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'medico',
            'cpf' => '804.319.144-21',
        ]);  
    }
}
