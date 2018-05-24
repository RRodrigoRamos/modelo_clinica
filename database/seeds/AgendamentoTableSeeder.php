<?php

use Illuminate\Database\Seeder;
use acclinic\Agendamento;

class AgendamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agendamento::create([
           	'data_agenda' =>'2018-05-07',
           	'hora_agenda' =>'14:00h',
           	'tipo_agenda' =>'Particular', // Se é CONVÊNIO, PARTICULAR OU RETORNO 
           	'agenda_de' =>'CONSULTA', 
           	'obs' =>'Paciente Confirmou via telefone.',
            'users_id' =>1,
            'clinica_medicos_id' =>1,
            'status_id' =>1,
        ]);
        Agendamento::create([
           	'data_agenda' =>'2018-02-02',
           	'hora_agenda' =>'8:00h',
           	'tipo_agenda' =>'Convênio', // Se é CONVÊNIO, PARTICULAR OU RETORNO 
           	'agenda_de' =>'CONSULTA', 
           	'obs' =>'testetst tetste',
            'users_id' =>2,
            'clinica_medicos_id' =>2,
            'status_id' =>1,
        ]);
        Agendamento::create([
           	'data_agenda' =>'2018-02-02',
           	'hora_agenda' =>'11:00h',
           	'tipo_agenda' =>'Convênio', // Se é CONVÊNIO, PARTICULAR OU RETORNO 
           	'agenda_de' =>'CONSULTA', 
           	'obs' =>'testetst tetste',
            'users_id' =>2,
            'clinica_medicos_id' =>3,
            'status_id' =>1,
        ]);
    }
}
