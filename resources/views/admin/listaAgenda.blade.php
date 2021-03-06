@extends('layout.templateAdmin')
@section('title', 'Area Cliente')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  Bem vindo {{ Auth::guard('admin')->user()->name  }} a sua pagina de Area do Cliente.
						</div>
					</div>
				</div>
		<!-- Informações do Topo site Fim -->
@endsection
@section('Menu')
			<!-- Navbar Menu -Inicio -->
				<nav id="nav" class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Navbar Header Starts -->
					<div class="navbar-header">
						<!-- Collapse Button Menu Mobile -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Navegação</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						<!-- Collapse Button Menu Mobile Fim -->
							<!-- Logo  -->
							<a href="/areaCliente" class="navbar-brand">
								<img src="../images/fav/logo.png" alt="ACClinic - Agendamentos de Consultas Clinicas e Exames" class="imgLogo">
							</a>
						<!-- Logo Fim -->
					</div>
					
					<!-- Menu Infor Fim -->
						<!-- Navbar Header Ends -->
						<!-- Navbar Collapse Starts -->
							<div class="navbar-collapse collapse">					
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="/areaCliente">Início</a>
									</li>
									<li>
										<a href="/areaCliente/pacienteContat"><i class="fa fa-comments"> </i> Fale Conosco</a>
									</li>
									<li class="dropdown active">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											{{ Auth::guard('admin')->user()->name  }} 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/areaCliente/agendamento">
												<i class="fa fa-plus-square" aria-hidden="true"></i> Agendamento
											</a>
										</li>
										<li class="active">
											<a href="/areaCliente/listaAgenda">
												Minha Agenda
											</a>
										</li>
										<li>
											<a href="/areaCliente/pacienteConv">
												Meus Convenios
											</a>
										</li>
										<li>
											<a href="/areaCliente/meus_dados">
												 Meus Dados <i class="fa fa-user" aria-hidden="true"></i>	
											</a>
										</li>
										<li>
											<a href="/areaCliente/altera_senha">
												 Alterar Senha <i class="fa fa-cogs" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="/areaCliente/infor">
												 Informativo <i class="fa fa-info-circle" aria-hidden="true"></i>
											</a>
										</li>
										<li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }} <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                		</li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- Navbar Collapse Ends -->
				</div>
		</nav>
			<!-- Navbar Menu Fim -->
			</div>
		<!-- Conteudo Inicial Fim -->
		</header>
	<!-- Topo Fim -->

@endsection
@section('ConteudoPrincipal')
<!-- Banner Cliente -->
		<div class="main-banner clienteAgenda">
			<div class="container">
				<h2><span>Lista Agenda</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/areaCliente">Área Cliente</a>
					</li>
					<li>Meus Agendamentos</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Conteudo Agenda -->
<div class="container main">
<br>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x	"></i> &nbsp; Meus Agendamentos </div>
        </div>
	</div>
<div class="row">
<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
    <fieldset>
          <legend>Lista Agenda Programadas</legend>
	            <table class="table table-striped table-bordered table-condensed table-hover table-responsive">
						 <thead>
						  <tr>
						   <th>Tipo</th>
						   <th>Especialidade</th>
						   <th>Médico</th>
						   <th>Unidade</th>
						   <th>Data</th>
						   <th>Status</th>
						   <th>Ação</th>
						  </tr>
						 </thead>
						 <tbody>
<!-- 
						 	 "tipo_agenda" => "PARTICULAR"
        "data_agenda" => "2018-05-10"
        "hora_agenda" => "08:00h"
        "nome_medico" => "Dr. Alice Costa"
        "especialidade" => "Cardiologia"
        "clinica_medica" => "Laboratório de Analises Clínicas - Hemodiagnostico / Matriz"
        "nome_paciente" => "Cliente Novo"
        "status_agenda" => "Pendente" -->
	

						@foreach($agendamentosP as $agendamentosPs)
						  <tr>
     					   <td>{{ $agendamentosPs->tipo_agenda}}</td>
						   <td>{{ $agendamentosPs->especialidade}}</td>
						   <td>{{ $agendamentosPs->nome_medico}}</td>
						   <td>{{ $agendamentosPs->clinica_medica}}</td>
						   <td>{{ date( 'd/m/Y' , strtotime($agendamentosPs->data_do_agendamento))}} às {{ $agendamentosPs->horario_inicio}} até {{ $agendamentosPs->horario_termino}}</td>
						   <td>{{ $agendamentosPs->status_agenda}}</td>
						   <td>
						   <form action="{{ url('areaAtendente/acao') }}" method="post">
						   @csrf
						   <input type="hidden" name="id" value="{{$agendamentosPs->id}}">
						   <input type="hidden" name="status_id" value="2}}">
						   <button class="btn btn-primary">Confirmar</button>
						   </form>
						   <form action="{{ url('areaAtendente/acao') }}" method="post">
						   @csrf
						   <input type="hidden" name="id" value="{{$agendamentosPs->id}}">
						   <input type="hidden" name="status_id" value="4">
						   <button class="btn btn-primary">Verificando Convenio</button>
						   </form>
						   <form action="{{ url('areaAtendente/acao') }}" method="post">
						   @csrf
						   <input type="hidden" name="id" value="{{$agendamentosPs->id}}">
						   <input type="hidden" name="status_id" value="5">
						   <button class="btn btn-primary">Convenio Permitiu</button>
						   </form>
						   <form action="{{ url('areaAtendente/acao') }}" method="post">
						   @csrf
						   <input type="hidden" name="id" value="{{$agendamentosPs->id}}">
						   <input type="hidden" name="status_id" value="3">
						   <button class="btn btn-primary">Cancelar</button>
						   </form>
						   </td>
						  </tr>
                    	@endforeach
						 </tbody>
						</table>
	</fieldset>
<br>
</div>
	<!-- Conteudo Agenda Fim -->
@endsection