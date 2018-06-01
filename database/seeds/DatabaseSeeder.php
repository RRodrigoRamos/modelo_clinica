<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call(UserTableSeeder::class);
    $this->call(EstadoTableSeeder::class);
    $this->call(CidadeTableSeeder::class);
    $this->call(BairroTableSeeder::class);
    $this->call(EnderecoTableSeeder::class);
    $this->call(EspecialidadeTableSeeder::class);
    $this->call(ConvenioTableSeeder::class);
    $this->call(PacientesTableSeeder::class);
    $this->call(TriagenTableSeeder::class);
    $this->call(MedicoTableSeeder::class);
    $this->call(ClinicaTableSeeder::class);
    $this->call(ClinicaMedicoTableSeeder::class);
    $this->call(statusAgendaTableSeeder::class);
    $this->call(AdminTableSeeder::class);
    }
}