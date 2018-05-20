<?php

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
	return 'ERRO';
});

Route::get('/admin/login',['as' => 'admin.login','uses' => 'AdminAuth\LoginController@showLoginForm']);
Route::post('/admin/login',['uses' => 'AdminAuth\LoginController@Login']);
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
	
	Route::get('/admin/medicos', 'AdminController@listaMedicos');
	Route::post('/admin/medicos/medicosalvar', 'AdminController@medicosalvar');
	Route::get('/admin/medicos/{id}', 'AdminController@show');
	Route::put('/admin/medicos/', 'AdminController@editarmedico');
	
	Route::get('/admin/pacientes', 'AdminController@listaPacientes');
	Route::post('/admin/pacientesalvar', 'AdminController@pacientesalvar');



});

// Rotas do Cliente 
Route::middleware(['web'])->group (function() {
	Auth::routes();
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

// 	Route::get('lista-usuarios', 'UsuariosController@listaUsuario');
// Route::get('cria-usuario', 'UsuariosController@formularioUsuario');
// Route::post('salva-usuario', 'UsuariosController@salvarUsuario');
// Route::put('altera-usuario/{id}', 'UsuariosController@alteraUsuario');
// 
// Route::get('editar-usuario/{id}', 'UsuariosController@editarUsuario');
// Route::delete('deletar-usuario/{id}', 'UsuariosController@deletarUsuario');
	
});