<?php

use Illuminate\Database\Seeder;
use acclinic\Endereco;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

 // Criando endereço para busca de registro
        Endereco::create ([
            'user_id'=> 8,
            'tipo_local'=> 'Apartamento',
            'cep'=> '68.909.912',
            'endereco'=> 'Rua.: Antonio Alveres Correa',
            'numero'=>2110,
            'complement'=>'Próximo ao Posto Combustivel',
            'bairro_id'=>1,
        ]);
        Endereco::create ([
            'user_id'=> 7,
            'tipo_local'=> 'Prédio',
            'cep'=> '68.900-010',
            'endereco'=> 'Av. Coaracy Nunes',
            'numero'=>892,
            'complement'=>'Próximo a Faculdade IMMES',
            'bairro_id'=>9,
        ]);
        Endereco::create ([
            'user_id'=> 6,
            'tipo_local'=> 'Prédio',
            'cep'=> '68.908-110',
            'endereco'=> 'Av. FAB',
            'numero'=>811,
            'complement'=>'Próximo ao SuperMercado Fortaleza',
             'bairro_id'=>2,
        ]);
        Endereco::create ([
            'user_id'=> 5,
            'tipo_local'=> 'Prédio',
            'cep'=> '68.907-910',
            'endereco'=> 'Av. Palmares',
            'numero'=>811,
            'complement'=>'Próximo ao SuperMercado Fortaleza',
             'bairro_id'=>5,
        ]);
        Endereco::create ([
            'user_id'=> 4,
            'tipo_local'=> 'Prédio',
            'cep'=> '68.900-010',
            'endereco'=> 'Rua Adilson José Pinto Pereira',
            'numero'=>1209,
            'complement'=>'', 
            'bairro_id'=>6,
        ]);
        Endereco::create ([
            'user_id'=> 3,
            'tipo_local'=> 'Prédio',
            'cep'=> '68.900-010',
            'endereco'=> 'Rua Dom José Maritano',
            'numero'=>1184,
            'complement'=>'',
             'bairro_id'=>2,
        ]);
        Endereco::create ([
            'user_id'=> 2,
            'tipo_local' => 'Prédio',
            'cep'=> '68.900-010',
            'endereco'=> 'Rua Rio Xingu',
            'numero'=>000,
            'complement'=>'', 
            'bairro_id'=>2,
        ]);
        Endereco::create ([
            'user_id'=> 1,
            'tipo_local'=> 'Prédio',
            'cep'=> '68.900-010',
            'endereco'=> 'Sem endereço',
            'numero'=>000,
            'complement'=>'',
            'bairro_id'=>9,
        ]);

    }
}
