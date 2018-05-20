<?php

use Illuminate\Database\Seeder;
use acclinic\Especialidade;

class EspecialidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Alimentando as especialidades médicas
        Especialidade::create ([
            'campo'=>'Acupuntura',
            'descricao'=>'Acupuntura é um conjunto de práticas terapêuticas inspirado nas tradições médicas orientais. Consiste na estimulação de locais anatómicos sobre ou na pele – os chamados pontos de acupuntura.',
        ]);
        Especialidade::create ([
            'campo'=>'Cardiologia',
            'descricao'=>'Cardiologia. é uma especialidade médica que se ocupa do diagnóstico e tratamento de doenças que ocorrem com o coração e o sistema circulatório.',
        ]);
        Especialidade::create ([
            'campo'=>'Clínica Geral',
            'descricao'=>'Clínica Médica. É a especialidade médica que trata de pacientes adultos, atuando principalmente em ambiente hospitalar. Inclui o estudo das doenças de adultos, não cirúrgicas, não obstétricas e não ginecológicas, sendo a especialidade médica a partir da qual se diferenciaram todas as outras áreas clínicas.',
        ]);
        Especialidade::create ([
            'campo'=>'Dermatologia',
            'descricao'=>'Dermatologia é a especialidade médica que se ocupa do diagnóstico e tratamento clínico e cirúrgico das doenças da pele, bem como dos seus anexos (cabelos, unhas e mucosas).',
        ]);
        Especialidade::create ([
            'campo'=>'Endocrinologia',
            'descricao'=>'A Endocrinologia é a especialidade médica que estuda o funcionamento das hormonas no organismo humano e faz o diagnóstico e tratamento das doenças das glândulas de secreção interna (glândulas endócrinas).',
        ]);
        Especialidade::create ([
            'campo'=>'Enfermagem',
            'descricao'=>'Serviços de enfermagem na clínica: Análises ao sangue, Análises à urina, Rastreio da hipertensão arterial, Rastreio da diabetes, Rastreio do colesterol e triglicerídios, Electrocardiograma, Administração de injecções (Medicamentos, vacinas),Realização de tratamento de Feridas, Remoção de pontos/agrafos,  Monitorização de Peso, IMC, Perímetro Abdominal e Peso do Bebé, Ensinos à família/Cuidador Informal de doentes dependentes, Gestão de Medicação, Cuidados de enfermagem ao domicilio.',
        ]);
        Especialidade::create ([
            'campo'=>'Ortodontia',
            'descricao'=>'A Ortodontia é a especialidade odontológica que corrige a posição dos dentes e dos ossos maxilares quando estes estão posicionados de forma inadequada. O tratamento ortodôntico torna a boca mais saudável, proporcionando uma aparência mais agradável.',
        ]);
        Especialidade::create ([
            'campo'=>'Ginecologia|Obstetrícia',
            'descricao'=>'Ginecologia é a especialidade médica que se dedica à saúde da mulher, nomeadamente do sistema reprodutor feminino, útero, vagina e ovários. <br> Obstetrícia é a especialidade médica que se dedica ao estudo da reprodução da mulher , nomeadamente gestação, parto e período pós-parto nos seu aspectos fisiopatológicos.',
        ]);
        Especialidade::create ([
            'campo'=>'Medicina Dentária',
            'descricao'=>'Medicina Dentária é uma especialidade que previne, diagnostica e trata as efemeridades relacionadas com a boca (lábios, dentes, mucosa oral, etc).',
        ]); 
        Especialidade::create ([
            'campo'=>'Ortopedia',
            'descricao'=>'Ortopedia é a especialidade médica que cuida das doenças e deformidades dos ossos, músculos, ligamentos e articulações e todos os elementos relacionados com o aparelho locomotor.',
        ]);
        Especialidade::create ([
            'campo'=>'Otorrinolaringologia',
            'descricao'=>'Otorrinolaringologia é a especialidade médica que abarca a prevenção e tratamento das doenças dos ouvidos, nariz, faringe (garganta), laringe e pescoço.',
        ]);
        Especialidade::create ([
            'campo'=>'Pediatria',
            'descricao'=>'Pediatria  é a especialidade médica dedicada à assistência à criança e ao adolescente, nos seus diversos aspectos, sejam eles preventivos ou curativos.',
        ]);
        Especialidade::create ([
            'campo'=>'Podologia',
            'descricao'=>'Podologia é o nome da ciência que trata do estudo dos pés. Podologista/podiatra – termo obviamente com as mesmas origens que designa a pessoa que aplica terapia nos pés.',
        ]);
        Especialidade::create ([
            'campo'=>'Psiquiatria',
            'descricao'=>'Psiquiatria é uma especialidade da Medicina que lida com a prevenção, atendimento, diagnóstico de doenças do foro psiquiatrico. São exemplos: a depressão, o transtorno bipolar, a esquizofrenia, a demência (Alzeimer e o Parkinson) e os Transtornos de Ansiedade.',
        ]);
        Especialidade::create ([
            'campo'=>'Psicologia',
            'descricao'=>'Psicologia  procura diagnosticar e tratar as perturbações psicológicas, procurando que a pessoa aprenda a lidar com as dificuldades',
        ]);
        Especialidade::create ([
            'campo'=>'Reumatologia',
            'descricao'=>'Reumatologia é a especialidade da Medicina que se ocupa do tratamento médico das doenças reumáticas, incluindo o seu estudo, diagnóstico, investigação, prevenção e reabilitação. Existem mais de 100 doenças reumáticas que podem afectar para além do aparelho locomotor (ossos, articulações, músculos e tendões) outros órgãos como o coração, o rim, o pulmão, sistema nervoso, os olhos e a pele.',
        ]);
        Especialidade::create ([
            'campo'=>'Urologia',
            'descricao'=>'Urologia é uma especialidade cirúrgica da medicina que trata do trato urinário de homens e mulheres e do sistema reprodutor dos homes. <br> Os órgão estudados pelos urologistas incluem os rins, ureteres, bexiga urinária, uretra e os orgão so sistema reprodutor masculino (testículos, epidídimos, ducto deferente, vesículas seminais, próstata e pénis).',
        ]);
        Especialidade::create ([
            'campo'=>'Alergologia',
            'descricao'=>'Alergologia (ou Imunoalergologia) é a especialidade da Medicina que visa o diagnóstico e o tratamento das doenças alérgicas.',
        ]);
        Especialidade::create ([
            'campo'=>'Fonoaudiologia',
            'descricao'=>'É a especialidade responsável pela promoção da saúde, prevenção, avaliação e diagnóstico, orientação, terapia (habilitação e reabilitação) e aperfeiçoamento dos aspectos fonoaudiológicos da função auditiva periférica e central, da função vestibular, da linguagem oral e escrita, da voz, da fluência, da articulação da fala e dos sistemas miofuncional, orofacial, cervical e de deglutição.',
        ]);
        Especialidade::create ([
            'campo'=>'Geriatria',
            'descricao'=>'A geriatria é a especialidade que se preocupa, com todos os aspectos da saúde do idoso, de acordo com as particularidades do processo de envelhecimento.',
        ]);
    }
}
