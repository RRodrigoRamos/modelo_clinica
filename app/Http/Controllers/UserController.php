<?php

namespace acclinic\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use acclinic\Agendamento;
use acclinic\Horario;
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
use acclinic\Validator;



class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        // Painel do Cliente
        return view('cliente.painel');
    }

    public function agendamentoForm()
    {
        $especialidades = Medico::select('medicos.id', 'medicos.name as nome_medico','especialidades.campo')
            ->join('especialidades','medicos.especialidade_id', '=', 'especialidades.id' )
            ->orderBy('especialidades.campo', 'asc')
            ->get();
        return view('cliente.agendamentoForm',['especialidades'=> $especialidades]);
    }
    public function select_dia_semanal($id){

        $value = Horario::where('medico_id',$id)->firstOrFail();
        return $value->toJson();
        
    }
    public function agendamentoFormHorario(Request $resquest)
    {
        return view('cliente.agendamentoFormHora',compact('Request'));
    }

    public function agendaSalva(Request $resquest)
    {

            $agendamento = new Agendamento();
            $agendamento->medico_id = $resquest->medico_id;
            $agendamento->user_id = auth()->user()->id;
            $agendamento->dia_da_semana = $resquest->dia_da_semana;
            $agendamento->data_do_agendamento = $resquest->data_do_agendamento;
            $agendamento->tipo_agenda = $resquest->tipo_agenda;
            $agendamento->status_id = 1;
            $agendamento->save();          
            return redirect('/areaCliente/listaAgenda');
    }

    public function listaAgenda()
    {
            // recupera o usuario logado
            $usuario = auth()->user()->id; 

            // busca o registro
            // $medico = Medico::find(1);

            // lista os campos da minha lista Agenda
        $agendamentosP = Agendamento::select(['agendamentos.tipo_agenda',
        'agendamentos.dia_da_semana',
        'agendamentos.data_do_agendamento',
        'medicos.name as nome_medico',
        'especialidades.campo as especialidade',
        'clinicas.nome as clinica_medica',
        'status_agendas.descricao as status_agenda',
        'horarios.dias_da_semana',
        'horarios.horario_inicio',
        'horarios.horario_termino'
        ])
        ->join('medicos','agendamentos.medico_id','=','medicos.id') 
        ->join('horarios','horarios.medico_id','=','agendamentos.medico_id') 
        ->join('clinica_medicos','clinica_medicos.medicos_id','=','medicos.id')
        ->join('clinicas','clinica_medicos.clinica_id','=','clinicas.id')
        ->join('especialidades','medicos.especialidade_id','=','especialidades.id') 
        ->join('status_agendas','agendamentos.status_id','=','status_agendas.id')
        ->where('agendamentos.user_id', '=', $usuario)
        ->orderBy('agendamentos.id', 'desc')
        ->get();
        return view('cliente.listaAgenda',compact('agendamentosP'));
    }

    
    public function data_do_da_semana($dia_da_semana)
    {
        
        for ($i=1; $i < 31 ; $i++) {
            if(date("l",strtotime($i.' days'))=='Monday' && $dia_da_semana=='segunda'){
            $array[]=date('Y-m-d', strtotime($i.' days'));
            }
            if(date("l",strtotime($i.' days'))=='Tuesday' && $dia_da_semana=='terca'){
            $array[]=date('Y-m-d', strtotime($i.' days'));
            }
            if(date("l",strtotime($i.' days'))=='Wednesday' && $dia_da_semana=='quarta'){
            $array[]=date('Y-m-d', strtotime($i.' days'));
            }
            if(date("l",strtotime($i.' days'))=='Thursday' && $dia_da_semana=='quinta'){
            $array[]=date('Y-m-d', strtotime($i.' days'));
            }
            if(date("l",strtotime($i.' days'))=='Friday' && $dia_da_semana=='sexta'){
            $array[]=date('Y-m-d', strtotime($i.' days'));
            }
            if(date("l",strtotime($i.' days'))=='Saturday' && $dia_da_semana=='sabado'){
            $array[]=date('Y-m-d', strtotime($i.' days'));
            }
        }
        
        return json_encode($array,JSON_FORCE_OBJECT);
    }
    public function pacienteDados()
    {
    	$request->validate([
        'email' => 'required|unique:medicos|max:255',
        'cpf' => 'required|unique:users|max:255',
    ]);

            $paciente = Paciente::find($request->id);
            $paciente->convenio_id = $request->convenio_id;
            $paciente->sexo = $request->sexo;
            $paciente->data_nasc = $request->data_nasc;
            $paciente->telefone = $request->telefone;
            $paciente->update();

            $user = User::find($paciente->user_id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->cpf = $request->cpf;
            $user->password = bcrypt($request->password);
            $user->update();

            $endereco = Endereco::where('id',$user->endereco_id)->update(['cep' => $request->cep,
            'tipo_local' => $request->tipo_local,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'complement' => $request->complement,
            'bairro_id' => $request->bairro_id]);

            return redirect('areaCliente/meus_dados');
    }

	

    public function pacienteConv()
    {
        // lista Convênio de Paciênte
        return view('cliente.pacienteConv');
    }

    public function pacienteConvCad()
    {
        // Cadastro de Convenio
        return view('cliente.pacienteConv');
    }

     public function deleteConven($id)
    {
        User::destroy($id);

    return redirect('cliente.pacienteConvForm');
    }

    public function pacienteInfor()
    {
        // informações ao Usuario/Paciente
        return view('cliente.pacienteInfor');
    }
    
    public function pacienteContat()
    {
    	// informações contato com a Clinica.
        return view('cliente.pacienteContat');
    }
}
