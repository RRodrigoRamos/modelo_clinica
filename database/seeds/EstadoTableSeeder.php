<?php

use Illuminate\Database\Seeder;
use acclinic\Estado;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Estado::create ([
            'sigla' => 'AC',
			'descricao' =>'Acre',
		]);
		Estado::create ([
			'sigla' => 'AL',
			'descricao' =>'Alagoas',
		]);
		Estado::create ([
			'sigla' => 'AP',
			'descricao' =>'Amapá',
		]);
		Estado::create ([
			'sigla' => 'BA',
			'descricao' =>'Bahia',
		]);
		Estado::create ([
			'sigla' => 'CE',
			'descricao' =>'Ceará',
		]);
		Estado::create ([
			'sigla' => 'DF',
			'descricao' =>'Distrito Federal',
		]);
		Estado::create ([
			'sigla' => 'ES',
			'descricao' =>'Espírito Santo',
		]);
		Estado::create ([
			'sigla' => 'GO',
			'descricao' =>'Goiás',
		]);
		Estado::create ([
			'sigla' => 'MA',
			'descricao' =>'Maranhão',
		]);
		Estado::create ([
			'sigla' => 'MT',
			'descricao' =>'Mato Grosso',
		]);
		Estado::create ([
			'sigla' => 'MS',
			'descricao' =>'Mato Grosso do Sul',
		]);
		Estado::create ([
			'sigla' => 'MG',
			'descricao' =>'Minas Gerais',
		]);
		Estado::create ([
			'sigla' => 'PA',
			'descricao' =>'Pará',
		]);
		Estado::create ([
			'sigla' => 'PB',
			'descricao' =>'Paraiba',
		]);
		Estado::create ([
			'sigla' => 'PE',
			'descricao' =>'Pernambuco',
		]);
		Estado::create ([
			'sigla' => 'PI',
			'descricao' =>'Piauí',
		]);
		Estado::create ([
			'sigla' => 'RN',
			'descricao' =>'Rio Grande do Norte',
		]);
		Estado::create ([
			'sigla' => 'RS',
			'descricao' =>'Rio Grande do Sul',
		]);
		Estado::create ([
			'sigla' => 'RJ',
			'descricao' =>'Rio de Janeiro',
		]);
		Estado::create ([
			'sigla' => 'RO',
			'descricao' =>'Rondônia',
		]);
    }
}
