<?php

namespace acclinic\Http\Controllers;
use acclinic\Paciente;
use acclinic\Triagen;
use acclinic\Convenio;
use acclinic\Admin;
use acclinic\Bairro;
use acclinic\Endereco;
use acclinic\User;
use acclinic\Agendamento;
use acclinic\Medico;
use acclinic\Especialidade;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class AdminController extends Controller
{
    public function __construct()
    {
         $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    public function bairros(){
        $bairros = Bairro::all();
        return $bairros;
    }
    public function especialidade(){
        $especialidade = Especialidade::all();
        return $especialidade;
    }
    public function convenios(){
        $convenio = Convenio::all();
        return $convenio;
    }
    public function listaAgendas()
    {
        $agendamentos = Agendamento::paginate(15);

        $agenda_totais = Agendamento::select(['agendamentos.tipo_agenda','agendamentos.data_agenda','agendamentos.hora_agenda','medicos.name as nome_medico','especialidades.campo as especialidade','clinicas.nome as clinica_medica','users.name as nome_paciente','status_agendas.descricao as status_agenda'])
            ->join('users','agendamentos.users_id', '=', 'users.id')
            ->join('clinica_medicos','agendamentos.clinica_medicos_id','=','clinica_medicos.id')
            ->join('medicos','clinica_medicos.medicos_id','=','medicos.id') 
            ->join('especialidades','medicos.especialidade_id','=','especialidades.id') 
            ->join('clinicas','clinica_medicos.clinica_id','=','clinicas.id') 
            ->join('status_agendas','agendamentos.status_id','=','status_agendas.id')
            ->orderBy('agendamentos.data_agenda', 'asc')
            ->get();
        return view('admin.paciente.agendamentos',['agendamentos' => $agendamentos, 'bairros' => self::bairros()],compact('agenda_totais'));
    }
    public function listaMedicos()
    {
        $medico = Medico::paginate(15);
        return view('admin.medico.medicos',['medicos' => $medico, 'bairros' => self::bairros(),'especialidades' => self::especialidade()]);
    }
    public function listaAtendentes()
    {
        $atendente = User::where('role','atendente')->paginate(15);
        return view('admin.atendente.atendentes',['atendentes' => $atendente]);
    }
    public function listaPacientes()
    {
        $paciente = User::where('role','paciente')->paginate(15);
        return view('admin.paciente.pacientes',['pacientes' => $paciente, 'bairros' => self::bairros(), 'convenios' => self::convenios()]);
    }

    #
    public function criarAgendas()
    {
        $agendamentos = Agendamento::paginate(15);
        return view('admin.agendamentos',['agendamentos' => $agendamentos]);
    }
    public function medicosalvar(Request $request)
    {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->cpf = $request->cpf;
            $user->password = bcrypt($request->password);
            $user->role = 'medico';
            $user->save();
            $endereco = new Endereco();
            $endereco->user_id = $user->id;
            $endereco->cep = $request->cep;
            $endereco->tipo_local = $request->tipo_local;
            $endereco->endereco = $request->endereco;
            $endereco->numero = $request->numero;
            $endereco->complement = $request->complement;
            $endereco->bairro_id = $request->bairro_id;
            $user->endereco()->save($endereco);
            $medico = new Medico();
            $medico->user_id = $user->id;
            $medico->foto = $request->foto;
            $medico->crm = $request->crm;
            $medico->sexo = $request->sexo;
            $medico->data_nasc = $request->data_nasc;
            $medico->telefone = $request->telefone;
            $medico->especialidade_id= $request->especialidade_id;
            $medico->save();
            return redirect('admin');
         }
    public function pacientesalvar(Request $request)
    {    
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->cpf = $request->cpf;
            $user->password = bcrypt($request->password);
            $user->role = 'paciente';
            $user->save();
            $endereco = new Endereco();
            $endereco->user_id = $user->id;
            $endereco->cep = $request->cep;
            $endereco->tipo_local = $request->tipo_local;
            $endereco->endereco = $request->endereco;
            $endereco->numero = $request->numero;
            $endereco->complement = $request->complement;
            $endereco->bairro_id = $request->bairro_id;
            $user->endereco()->save($endereco);
            
            
            $paciente = new Paciente();
            $paciente->user_id = $user->id;
            $paciente->convenio_id = $request->convenio_id;
            $paciente->sexo = $request->sexo;
            $paciente->data_nasc = $request->data_nasc;
            $paciente->telefone = $request->telefone;
            $user->paciente()->save($paciente);
            $triagen = new Triagen;
            $triagen->paciente_id = User::find($user->id)->paciente->id;
            $triagen->altura= $request->altura;
            $triagen->peso = $request->peso;
            $triagen->obs = $request->obs;
            $triagen->save();
            return redirect('/admin');
    }
    public function criarAtendentes()
    {
        $paciente = User::where('role','paciente')->paginate(15);
        return view('admin.pacientes',['pacientes' => $paciente]);
    }
    #MEDICO EDITAR
    public function showmedico($id)
    {
        $value=Medico::select('*')->join('users','users.id', '=', 'medicos.user_id')->join('enderecos','users.id', '=', 'enderecos.id')->where('medicos.id', '=', $id)->get();
        $value = $value[0];
        return view('admin.medico.editar',['value' => $value,'bairros' => self::bairros(),'especialidades' => self::especialidade(), 'id'=>$id]);
    }
    public function editarmedico(Request $request)
    {   
       $request->validate([
        'email' => 'required|unique:medicos|max:255',
        'cpf' => 'required|unique:users|max:255',
    ]);
            $medico = Medico::find($request->id);
            $medico->foto = $request->foto;
            $medico->crm = $request->crm;
            $medico->email = $request->email;
            $medico->sexo = $request->sexo;
            $medico->data_nasc = $request->data_nasc;
            $medico->telefone = $request->telefone;
            $medico->especialidade_id= $request->especialidade_id;
            $medico->update();
            $user = User::find($medico->user_id);
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
            return redirect('/admin/medicos');
        
    }


    #PACIENTE EDITAR
    public function showpaciente($id)
    {
        $value=Paciente::select('*')->join('users','users.id', '=', 'pacientes.user_id')->join('triagens','triagens.paciente_id', '=', 'users.id')->join('enderecos','users.id', '=', 'enderecos.id')->where('pacientes.id', '=', $id)->get();
        $value = $value[0];
        return view('admin.paciente.editar',['value' => $value,'bairros' => self::bairros(),'especialidades' => self::especialidade(), 'id'=>$id,'convenios'=> self::convenios()]);
    }
    public function editarpaciente(Request $request)
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
            return redirect('admin/pacientes');
        
    }

}
