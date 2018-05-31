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
use acclinic\Horario;
use Calendar;


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
            
        $dia_da_semana = self::dia_da_semana();
        $agendamentosP = Agendamento::select([
        'users.name as nome_do_paciente',
        'pacientes.telefone as telefone_do_paciente',
        'agendamentos.tipo_agenda',
        'agendamentos.data_agenda',
        'agendamentos.hora_agenda',
        'medicos.name as nome_medico',
        'clinicas.nome as clinica_medica',
        'status_agendas.descricao as status_agenda',
        'horarios.dias_da_semana'
        ])
            ->join('users','users.id','=','agendamentos.users_id')
            ->join('pacientes','pacientes.user_id','=','agendamentos.users_id')
            ->join('clinica_medicos','agendamentos.clinica_medicos_id','=','clinica_medicos.id')
            ->join('medicos','clinica_medicos.medicos_id','=','medicos.id') 
            ->join('horarios','horarios.medico_id','=','medicos.id') 
            ->join('clinicas','clinica_medicos.clinica_id','=','clinicas.id') 
            ->join('status_agendas','agendamentos.status_id','=','status_agendas.id')
            ->where('clinica_medicos.medicos_id', '=', auth()->user()->medico->id )
            ->where('horarios.dias_da_semana->'.$dia_da_semana,'=', 'true' )
            ->get();

        return view('medico.listaAgenda',compact('agendamentosP'));
    }
    public function dia_da_semana(){
        $dd = date("w");

        switch($dd) {

        case"0": $dia_semana = "domingo"; break;

        case"1": $dia_semana = "segunda"; break;

        case"2": $dia_semana = "terca"; break;

        case"3": $dia_semana = "quarta"; break;

        case"4": $dia_semana = "quinta"; break;

        case"5": $dia_semana = "sexta"; break;

        case"6": $dia_semana = "sabado"; break;

        }
        return $dia_semana;
    }
    
    public function medicoDados()
    {
    	// Painel do Cliente
        return view('medico.medicoDados');
    }

	

    public function medicoHorarios()
    {
        $value = Horario::where('medico_id', auth()->user()->medico->id)->get();
        if(empty($value)){    
            $value= $value[0];
        }
        return view('medico.medicoHorarios',['value'=>$value]);
    }
    public function medicoHorariosupdate(Request $request)
    {
        $medicoHorarioupdate =Horario::where('medico_id', auth()->user()->medico->id)->get();
        if(sizeof($medicoHorarioupdate)==0){
            
            $horario = new Horario;
            $horario->medico_id = auth()->user()->medico->id;
            $horario->dias_da_semana = $request->dia_da_semana;
            $horario->horario_inicio =$request->horario_inicio;
            $horario->horario_termino =$request->horario_termino;
            $horario->save();
        }else{
            $array= $request->dia_da_semana; 
            $collection = collect($array);
            $string = $collection->toJson();
            Horario::where('medico_id', auth()->user()->medico->id)->update(['medico_id'=> auth()->user()->medico->id,
            'dias_da_semana'=> $string,
            'horario_inicio'=>$request->horario_inicio,
            'horario_termino'=>$request->horario_termino]);
        }
        return view('medico.medicoHorarios',['value'=>$medicoHorarioupdate]);
    }

    public function medicoConvCad()
    {
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
