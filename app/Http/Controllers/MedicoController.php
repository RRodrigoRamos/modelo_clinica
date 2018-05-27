<?php

namespace acclinic\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use acclinic\Agendamento;
use acclinic\Clinica;
use acclinic\User;
use acclinic\Medico;
use acclinic\ClinicaMedico;
use acclinic\Especialidade;
use acclinic\statusAgenda;
use acclinic\Triagen;
use acclinic\Convenio;
use acclinic\Endereco;
use acclinic\Bairro;
use acclinic\Cidade;
use acclinic\Estado;


class MedicoController extends Controller
{

     public function __construct()
    {
        $this->middleware('medico');
    }
    
       public function index()
    {
        
        return view('medico.painel');
    }

    public function agendaMedico()
    {
            // recupera o usuario logado
            $usuario = auth()->user()->id; 

            // busca o registro
            // $medico = Medico::find(1);

            // lista os campos da minha lista Agenda
        $agendamentosP = Agendamento::select(['agendamentos.tipo_agenda','agendamentos.data_agenda','agendamentos.hora_agenda','medicos.name as nome_medico','especialidades.campo as especialidade','clinicas.nome as clinica_medica','status_agendas.descricao as status_agenda'])
            ->join('clinica_medicos','agendamentos.clinica_medicos_id','=','clinica_medicos.id')
            ->join('medicos','clinica_medicos.medicos_id','=','medicos.id') 
            ->join('especialidades','medicos.especialidade_id','=','especialidades.id') 
            ->join('clinicas','clinica_medicos.clinica_id','=','clinicas.id') 
            ->join('status_agendas','agendamentos.status_id','=','status_agendas.id')
            ->where('clinica_medicos.medicos_id', '=', auth()->user()->medico->id )
            ->orderBy('agendamentos.data_agenda', 'asc')
            ->get();

        return view('medico.listaAgenda',compact('agendamentosP'));
    }

    
    public function medicoDados()
    {
    	// Painel do Cliente
        return view('medico.medicoDados');
    }

	

    public function medicoHorarios()
    {
            $events = [];

            $events[] = \Calendar::event(
                'Event One', //event title
                false, //full day event?
                '2015-02-11T0800', //start time (you can also use Carbon instead of DateTime)
                '2015-02-12T0800', //end time (you can also use Carbon instead of DateTime)
                0 //optionally, you can specify an event ID
            );

            $events[] = \Calendar::event(
                "Valentine's Day", //event title
                true, //full day event?
                new \DateTime('2015-02-14'), //start time (you can also use Carbon instead of DateTime)
                new \DateTime('2015-02-14'), //end time (you can also use Carbon instead of DateTime)
                'stringEventId' //optionally, you can specify an event ID
            );

            $eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

            $calendar = \Calendar::addEvents($events) //add an array with addEvents
                ->addEvent($eloquentEvent, [ //set custom color fo this event
                    'color' => '#800',
                ])->setOptions([ //set fullcalendar options
                    'firstDay' => 1
                ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
                    'viewRender' => 'function() {alert("Callbacks!");}'
                ]);

            return view('hello', compact('calendar'));
                }

    public function medicoConvCad()
    {
        // Cadastro de Convenio
        return view('medico.medicoConv');
    }

     public function deleteConven($id)
    {
        User::destroy($id);

    return redirect('medico.medicoConvForm');
    }

    public function medicoInfor()
    {
        // informações ao Usuario/medico
        return view('medico.medicoInfor');
    }
    
    public function medicoContat()
    {
    	// informações contato com a Clinica.
        return view('medico.medicoContat');
    }
}
