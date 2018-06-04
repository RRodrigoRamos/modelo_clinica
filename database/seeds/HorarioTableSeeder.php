<?php

use Illuminate\Database\Seeder;
use acclinic\Horario;

class HorarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horario::create ([
        	'medico_id' => 1,
            'dias_da_semana' => json_encode(['segunda'=>'true','terca'=>'true','quarta'=>'true']),
			'horario_inicio'=>'8:00h',
			'horario_termino'=>'13:00h',
		]);

		Horario::create ([
        	'medico_id' => 2,
            'dias_da_semana' => json_encode(['terca'=>'true','quinta'=>'true']),
			'horario_inicio'=>'9:00h',
			'horario_termino'=>'12:00h',
		]);

		Horario::create ([
        	'medico_id' => 3,
            'dias_da_semana' => json_encode(['quarta'=>'true','sexta'=>'true']),
			'horario_inicio'=>'12:00h',
			'horario_termino'=>'18:00h',
		]);

		Horario::create ([
        	'medico_id' => 4,
            'dias_da_semana' => json_encode(['quinta'=>'true','sabado'=>'true']),
			'horario_inicio'=>'7:00h',
			'horario_termino'=>'12:00h',
		]);

		Horario::create ([
        	'medico_id' => 5,
            'dias_da_semana' => json_encode(['segunda'=>'true','terca'=>'true', 'quarta'=>'true','quinta'=>'true']),
			'horario_inicio'=>'8:00h',
			'horario_termino'=>'12:00h',
		]);

		Horario::create ([
        	'medico_id' => 6,
            'dias_da_semana' => json_encode(['quarta'=>'true','terca'=>'true', 'quinta'=>'true']),
			'horario_inicio'=>'13:00h',
			'horario_termino'=>'18:00h',
		]);

		Horario::create ([
        	'medico_id' => 7,
            'dias_da_semana' => json_encode(['segunda'=>'true']),
			'horario_inicio'=>'9:00h',
			'horario_termino'=>'18:00h',
		]);

		Horario::create ([
        	'medico_id' => 8,
            'dias_da_semana' => json_encode(['terca'=>'true']),
			'horario_inicio'=>'9:00h',
			'horario_termino'=>'18:00h',
		]);

		Horario::create ([
        	'medico_id' => 9,
            'dias_da_semana' => json_encode(['sexta'=>'true']),
			'horario_inicio'=>'9:00h',
			'horario_termino'=>'18:00h',
		]);

		Horario::create ([
        	'medico_id' => 10,
            'dias_da_semana' => json_encode(['sexta'=>'true','sabado'=>'true']),
			'horario_inicio'=>'9:00h',
			'horario_termino'=>'12:00h',
		]);
    }
}
