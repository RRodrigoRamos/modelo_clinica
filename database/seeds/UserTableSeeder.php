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
            'name' => 'Atendente1',
            'email' => 'atendente1@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '555.333.742-23',
            'role'=> 'atendente',
        ]);
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
            'email' => 'medico1@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '851.319.742-20',
            'role'=> 'medico',
        ]);
         User::create([
             'name' => 'medico2',
            'email' => 'medico2@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '812.319.002-20',
            'role'=> 'medico',
        ]);
         User::create([
             'name' => 'medico3',
            'email' => 'medico3@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'medico',
            'cpf' => '803.349.744-20',
        ]);
         User::create([
            'name' => 'medico5',
            'email' => 'medico5@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'medico',
            'cpf' => '804.319.140-01',
        ]);
         User::create([
            'name' => 'medico6',
            'email' => 'medico6@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'medico',
            'cpf' => '804.666.144-21',
        ]);
         User::create([
            'name' => 'medico7',
            'email' => 'medico7@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'medico',
            'cpf' => '804.777.144-21',
        ]);
         User::create([
            'name' => 'medico8',
            'email' => 'medico8@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'medico',
            'cpf' => '804.888.144-21',
        ]);
         User::create([
            'name' => 'medico9',
            'email' => 'medico9@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'medico',
            'cpf' => '804.999.144-21',
        ]);
         User::create([
            'name' => 'medico10',
            'email' => 'medico10@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'medico',
            'cpf' => '804.000.144-21',
        ]);
         User::create([
            'name' => 'medico11',
            'email' => 'medico11@gmail.com',
            'password' => bcrypt('123456'),
            'role'=> 'medico',
            'cpf' => '804.111.144-21',
        ]);  
    }
}
