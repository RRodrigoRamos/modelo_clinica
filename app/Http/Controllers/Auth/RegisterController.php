<?php

namespace acclinic\Http\Controllers\Auth;

use acclinic\User;
use acclinic\Paciente;
use acclinic\Triagen;
use acclinic\Convenio;
use acclinic\Endereco;
use acclinic\Bairro;
use acclinic\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/areaCliente';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Resquest $resquest)
    {
        return Validator::make($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'rg' => 'required|string|max:9|unique:users',
            'cpf' => 'required|string|max:15|unique:users',
        ]);
    }

    // ;
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \acclinic\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'foto' => $data['foto'],
    //         'name' => $data['name'],
    //         'name_social' => $data['name_social'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'sexo' => $data['sexo'],
    //         'data_nasc' => $data['data_nasc'],
    //         // 'data_nasc' => $data['data_nasc'],
    //     ]);
    // }
    public function bairros(){
        $bairros = Bairro::all();
        return $bairros;
    }
    public function convenios(){
        $convenio = Convenio::all();
        return $convenio;
    }
    public function showRegistrationForm()
    {

        return view('auth.register',['bairros' => self::bairros(), 'convenios' => self::convenios()]);
    }

    protected function register(Request $request)
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

            \Auth::login($user);

            return redirect('/areaCliente');

           
    }
        
}