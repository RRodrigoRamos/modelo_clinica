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
        $agendamentosP = Agendamento::select(['agendamentos.tipo_agenda','agendamentos.data_agenda','agendamentos.hora_agenda','medicos.name as nome_medico','especialidades.campo as especialidade','clinicas.nome as clinica_medica','users.name as nome_paciente','status_agendas.descricao as status_agenda'])
            ->join('users','agendamentos.users_id', '=', 'users.id')
            ->join('clinica_medicos','agendamentos.clinica_medicos_id','=','clinica_medicos.id')
            ->join('medicos','clinica_medicos.medicos_id','=','medicos.id') 
            ->join('especialidades','medicos.especialidade_id','=','especialidades.id') 
            ->join('clinicas','clinica_medicos.clinica_id','=','clinicas.id') 
            ->join('status_agendas','agendamentos.status_id','=','status_agendas.id')
            ->where('users.id', '=', $usuario)
            ->where('status_agendas.descricao', '=', 'Finalizado')
            ->orderBy('agendamentos.data_agenda', 'asc')
            ->get();

        return view('medico.listaAgenda',compact('agendamentosP'));
    }

    
    public function pacienteDados()
    {
    	// Painel do Cliente
        return view('medico.pacienteDados');
    }

	

    public function pacienteConv()
    {
        // lista Convênio de Paciênte
        return view('medico.pacienteConv');
    }

    public function pacienteConvCad()
    {
        // Cadastro de Convenio
        return view('medico.pacienteConv');
    }

     public function deleteConven($id)
    {
        User::destroy($id);

    return redirect('medico.pacienteConvForm');
    }

    public function pacienteInfor()
    {
        // informações ao Usuario/Paciente
        return view('medico.pacienteInfor');
    }
    
    public function pacienteContat()
    {
    	// informações contato com a Clinica.
        return view('medico.pacienteContat');
    }
}
