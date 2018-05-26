<?php


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
	Route::get('/areaCliente','UserController@index');
	Route::get('/areaCliente/agendamento','UserController@agendamentoForm');
	Route::get('/areaCliente/listaAgenda','UserController@listaAgenda');
	Route::post('/areaCliente/agendaSalva','UserController@agendaSalva');
	Route::get('/areaCliente/meus_dados','UserController@pacienteForm');
	Route::post('/areaCliente/meus_dados','UserController@pacienteForm');
	Route::get('/areaCliente/convenios','UserController@pacienteConv');
	Route::get('/areaCliente/convenios','UserController@pacienteConv');
	Route::get('/areaCliente/infor','UserController@pacienteInfor');
	Route::get('/areaCliente/pacienteContat','UserController@pacienteContat');
	Route::post('/areaCliente/pacienteContat','UserController@pacienteContat');	


	#medico

	Route::get('/areaMedico','MedicoController@index');
	Route::get('/areaMedico/agendamento','MedicoController@agendamentoForm');
	Route::get('/areaMedico/listaAgenda','MedicoController@listaAgenda');
	Route::post('/areaMedico/agendaSalva','MedicoController@agendaSalva');
	Route::get('/areaMedico/meus_dados','MedicoController@pacienteForm');
	Route::post('/areaMedico/meus_dados','MedicoController@pacienteForm');
	Route::get('/areaMedico/convenios','MedicoController@pacienteConv');
	Route::get('/areaMedico/convenios','MedicoController@pacienteConv');
	Route::get('/areaMedico/infor','MedicoController@pacienteInfor');
	Route::get('/areaMedico/pacienteContat','MedicoController@pacienteContat');
	Route::post('/areaMedico/pacienteContat','MedicoController@pacienteContat');	

	#atendente

	Route::get('/areaAtendente','AtendenteController@index');
	Route::get('/areaAtendente/agendamento','AtendenteController@agendamentoForm');
	Route::get('/areaAtendente/listaAgenda','AtendenteController@listaAgenda');
	Route::post('/areaAtendente/agendaSalva','AtendenteController@agendaSalva');
	Route::get('/areaAtendente/meus_dados','AtendenteController@pacienteForm');
	Route::post('/areaAtendente/meus_dados','AtendenteController@pacienteForm');
	Route::get('/areaAtendente/convenios','AtendenteController@pacienteConv');
	Route::get('/areaAtendente/convenios','AtendenteController@pacienteConv');
	Route::get('/areaAtendente/infor','AtendenteController@pacienteInfor');
	Route::get('/areaAtendente/pacienteContat','AtendenteController@pacienteContat');
	Route::post('/areaAtendente/pacienteContat','AtendenteController@pacienteContat');	
});
// Pagina Inicial
Route::get('/inicio', function () {
    return view('home');
});
Route::get('/', function () {
    	return view('home');
	});

// Grupos de Páginas
Route::prefix('pagina')->group( function() {
	Route::get('{id}', function ($id) {
    	return view('site.'.$id);
	});
});
Route::prefix('servico')->group( function() {
	Route::get('{id}', function ($id) {
    	return view('site.'.$id);
	});
});


// Evento caso ao acessar ERRO 404
Event::listen('404', function()
{
	return view('erros.custom');
});

Route::get('/admin/login',['as' => 'admin.login','uses' => 'AdminAuth\LoginController@showLoginForm']);
Route::post('/admin/login',['as' => 'admin.login','uses' => 'AdminAuth\LoginController@Login']);
Route::post('/admin/logout',['as' => 'admin.logout','uses' => 'AdminAuth\LoginController@Logout']);
Route::get('/admin/password/reset',['as' => 'admin.password.reset','uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
Route::post('/admin/password/email',['as' => 'admin.password.email','uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('/admin/password/reset/{token}',['as' => 'admin.password.reset.token','uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
Route::post('/admin/password/reset',['as'=>'admin.password.request','uses' => 'AdminAuth\ResetPasswordController@reset']);

// Rotas de registro Admin...
Route::middleware(['admin'])->group (function() {
	Route::get('/areaAdmin', 'AdminController@index');
	Route::get('/admin/agendamentos', 'AdminController@listaAgendas');
	Route::post('/admin/agendamentosalvar', 'AdminController@CadastrarAgendas');
	
	#salvar
	Route::get('/admin/medicos', 'AdminController@listaMedicos');
	Route::post('/admin/medicos/medicosalvar', 'AdminController@medicosalvar');
	#editar
	Route::get('/admin/medicos/{id}', 'AdminController@showmedico');
	Route::put('/admin/medicos/', 'AdminController@editarmedico');



	#salvar
	Route::get('/admin/pacientes', 'AdminController@listaPacientes');
	Route::post('/admin/pacientesalvar', 'AdminController@pacientesalvar');
	#editar
	Route::get('/admin/pacientes/{id}', 'AdminController@showpaciente');
	Route::put('/admin/pacientes/', 'AdminController@editarpaciente');

});


// =======
// // Rotas do Cliente
// >>>>>>> 1c76d105c100cfbf75b31eef1c68798b9041eba4
