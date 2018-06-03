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
        $usuario = auth()->user()->id; 
        $dia_da_semana = self::dia_da_semana();
        $agendamentosP = Agendamento::select([
        'users.name as nome_do_paciente',
        'pacientes.telefone as telefone_do_paciente',
        'agendamentos.tipo_agenda',
        'agendamentos.data_do_agendamento',
        'agendamentos.dia_da_semana',
        'medicos.name as nome_medico',
        'clinicas.nome as clinica_medica',
        'status_agendas.descricao as status_agenda',
        'horarios.dias_da_semana',
        'agendamentos.id','horarios.horario_inicio','horarios.horario_termino'
        ])
            ->join('users','users.id','=','agendamentos.user_id')
            ->join('pacientes','pacientes.user_id','=','agendamentos.user_id')
            ->join('clinica_medicos','agendamentos.medico_id','=','clinica_medicos.id')
            ->join('medicos','clinica_medicos.medicos_id','=','medicos.id') 
            ->join('horarios','horarios.medico_id','=','medicos.id') 
            ->join('clinicas','clinica_medicos.clinica_id','=','clinicas.id') 
            ->join('status_agendas','agendamentos.status_id','=','status_agendas.id')
            ->where('clinica_medicos.medicos_id', '=', auth()->user()->medico->id )
            ->where('status_agendas.id', '=', 2 )
            ->where('horarios.dias_da_semana->'.$dia_da_semana,'=', 'true' )
            ->get();

        return view('medico.listaAgenda',['agendamentosP'=>$agendamentosP,'dia_da_semana_funcao'=> self::dia_da_semana()]);
    }

    public function status(Request $request)
    {
        $agendamento = Agendamento::find($request->id);
        $agendamento->status_id = 6;
        $agendamento->update();
        return redirect('/areaMedico/agenda');

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
    
    public function medicoDadosForm()
    {
        // form dos dados do médico...
        return view('medico.medicoEdit');
    }

    public function medicoDados()
    {
    	// Após salvar os dados...
        return view('medico.medicoDados');
    }

    public function medicoHorarios()
    {
        $value = Horario::where('medico_id', auth()->user()->medico->id)->get();
        if(sizeof($value)==0){
            return view('medico.medicoHorarios');
        }else{
            return view('medico.medicoHorarios',['value'=>$value[0]]);
        }
        
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
        
        $medicoHorarioupdate =Horario::where('medico_id', auth()->user()->medico->id)->get();
        $medicoHorarioupdate = $medicoHorarioupdate[0];
        return view('medico.medicoHorarios',['value'=>$medicoHorarioupdate]);
        
    }

    public function consultarPaciente()
    {
    	// informações contato com a Clinica.
        return view('medico.consultarPaciente');
    }
}
