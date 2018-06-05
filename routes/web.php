<?php


Auth::routes();
#################################################################
	Route::get('/areaCliente/horario/{id}','UserController@select_dia_semanal')->middleware('cors');
	Route::get('/areaCliente/dias/{dia_da_semana}','UserController@data_do_da_semana')->middleware('cors');;
Route::group(['middleware' => ['auth']], function () {

	Route::get('/areaCliente','UserController@index');
	Route::get('/areaCliente/agendamento','UserController@agendamentoForm');
	Route::post('/areaCliente/agendamento','UserController@agendaSalva');
	
	Route::get('/areaCliente/listaAgenda','UserController@listaAgenda');
	Route::get('/areaCliente/meus_dados','UserController@pacienteForm');
	Route::post('/areaCliente/meus_dados','UserController@editarDados');

	#seleciona_convênio
	Route::get('/areaCliente/convenios','UserController@pacienteConv');
	Route::get('/areaCliente/convenios','UserController@pacienteConv');

	Route::get('/areaCliente/infor','UserController@pacienteInfor');

	#envia_email
	Route::get('/areaCliente/pacienteContat','UserController@pacienteContat');
	Route::post('/areaCliente/pacienteContat','UserController@pacienteContat');	

########################################################################
	#medico
	Route::get('/areaMedico','MedicoController@index');
	#agenda_Médico
	Route::get('/areaMedico/agenda','MedicoController@agendaMedico');
	
	Route::get('/areaMedico/medicoHorarios','MedicoController@medicoHorarios');
	Route::post('/areaMedico/medicoHorarios','MedicoController@medicoHorariosupdate')->name('medico.horario');
	
	Route::post('/areaMedico/agendaSalva','MedicoController@agendaSalva');
	
	Route::post('/areaMedico/acao','MedicoController@status');
	
	Route::get('/areaMedico/consultarPaciente','MedicoController@consultarPaciente');
	
	Route::get('/areaMedico/meus_dados','MedicoController@medicoDadosForm');
	Route::post('/areaMedico/meus_dados','MedicoController@medicoDados');	

######################################################################
	#atendente
	Route::get('/areaAtendente','AtendenteController@index');

	#novo_agendamento
	Route::get('/areaAtendente/agendamento','AtendenteController@agendamentoForm');
	Route::post('/areaAtendente/agendaSalva','AtendenteController@agendaSalva');

	#lista_de_agendamentos
	Route::get('/areaAtendente/listaAgenda','AtendenteController@listaAgenda');

	#mudar_status
	Route::post('/areaAtendente/acao','AtendenteController@status');

	#Editar_dados
	Route::get('/areaAtendente/meus_dados','AtendenteController@atendenteForm');
	Route::post('/areaAtendente/salvar_dados','AtendenteController@atendenteDados');

	#convenios
	Route::get('/areaAtendente/convenios','AtendenteController@atendenteConvForm');
	Route::post('/areaAtendente/convenios','AtendenteController@atendenteConvCad');

	#informativo
	Route::get('/areaAtendente/infor','AtendenteController@atendenteInfor');

	#hora_medicos
	Route::get('/areaAtendente/medicos_horario','AtendenteController@medicoHorario');
});

###################################################
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

######################################################

// Evento caso ao acessar ERRO 404
Event::listen('404', function()
{
	return view('erros.custom');
});

###########################################################

#administração
Route::get('/admin/login',['as' => 'admin.login','uses' => 'AdminAuth\LoginController@showLoginForm']);
Route::post('/admin/login',['as' => 'admin.login','uses' => 'AdminAuth\LoginController@Login']);
Route::post('/admin/logout',['as' => 'admin.logout','uses' => 'AdminAuth\LoginController@Logout']);
Route::get('/admin/password/reset',['as' => 'admin.password.reset','uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
Route::post('/admin/password/email',['as' => 'admin.password.email','uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('/admin/password/reset/{token}',['as' => 'admin.password.reset.token','uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
Route::post('/admin/password/reset',['as'=>'admin.password.request','uses' => 'AdminAuth\ResetPasswordController@reset']);

// Rotas Administrativas...
Route::middleware(['admin'])->group (function() {
	Route::get('/areaAdmin', 'AdminController@index');
	Route::get('/admin/agendamentos', 'AdminController@listaAgendas');
	Route::post('/admin/agendamentosalvar', 'AdminController@CadastrarAgendas');
	#atendente

	Route::get('/admin/atendentes', 'AdminController@listaAtendentes');
	Route::post('/admin/atendentes', 'AdminController@criarAtendentes');
	Route::post('/admin/atendentesalvar', 'AdminController@atendentesalvar');
	Route::get('/admin/atendente/{id}', 'AdminController@showatendente');
	Route::put('/admin/atendente/', 'AdminController@editaratendente');

	#dados_atendente
	Route::get('/admin/meus_dados', 'AdminController@atendentesEdite');
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
	

	#editar
	
	Route::get('/admin/convenios', 'AdminController@listaConvenios');
	Route::post('/admin/conveniosalvar', 'AdminController@conveniosalvar');

	#editar
	Route::get('/admin/convenio/{id}', 'AdminController@showconvenio');
	Route::put('/admin/convenio/', 'AdminController@editarconvenio');

});
