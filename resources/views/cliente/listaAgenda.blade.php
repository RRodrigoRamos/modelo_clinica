@extends('layout.templateAdmin')
@section('title', 'Area Cliente')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							Seja bem vindo, {{ Auth::user()->name }}. Aqui, sua saúde está em boas mãos.
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
										<a href="/areaCliente/infor"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Dúvidas Frequentes</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-user"></i> &nbsp;{{ Auth::user()->name }} &nbsp;
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/areaCliente/agendamento">
												Agendar &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li class="active">
											<a href="/areaCliente/listaAgenda">
												Minha Agenda &nbsp;<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="/areaCliente/infor">
												Informativo &nbsp;<i class="fa fa-info-circle" aria-hidden="true"></i>
											</a>
										</li>
										
										
										
										<li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }} &nbsp; <i class="fa fa-sign-out" aria-hidden="true"></i>
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
<div class="container">
<br>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x	"></i> &nbsp; Meus Agendamentos </div>
        </div>
	</div>
<div class="row">
<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
<form class="form"  method="post" action="/areaCliente/agendaSalva">
    <fieldset>
          <legend>AGENDADAS</legend>
	            <table class="table table-striped table-bordered table-hover table-responsive col-xs-4">
						 <thead>
						  <tr>
						   <th>Tipo</th>
						   <th>Especialidade</th>
						   <th>Médico</th>
						   <th>Unidade</th>
						   <th>Data</th>
						   <th>Status</th>
						  </tr>
						 </thead>
						 <tbody>
						@foreach($agendamentosP as $agendamentosPs)
						  <tr>
     					   <td>{{ $agendamentosPs->tipo_agenda}}</td>
						   <td>{{ $agendamentosPs->especialidade}}</td>
						   <td>{{ $agendamentosPs->nome_medico}}</td>
						   <td>{{ $agendamentosPs->clinica_medica}}</td>
						   <td>{{ date( 'd/m/Y' , strtotime($agendamentosPs->data_do_agendamento))}} às {{ $agendamentosPs->horario_inicio}} á {{ $agendamentosPs->horario_termino}}</td>
						   <td>{{ $agendamentosPs->status_agenda}}</td>
						  </tr>
                    	@endforeach
						 </tbody>
						</table>
				</fieldset>
			<br>
  		</form>
	</div>
<br>
</div>
<div class="row">
<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
    <fieldset>
          <legend>Histórico de Consultas</legend>
	            <table class="table table-striped table-bordered table-condensed table-hover table-responsive">
						 <thead>
						  <tr>
						   <th>Tipo</th>
						   <th>Especialidade</th>
						   <th>Médico</th>
						   <th>Unidade</th>
						   <th>Data</th>
						   <th>Status</th>
						  </tr>
						 </thead>
						 <tbody>
						  <tr>
     					   <td></td>
						   <td></td>
						   <td></td>
						   <td></td>
						   <td></td>
						   <td></td>
						  </tr>
						 </tbody>
						</table>
	</fieldset>
<br>
	<div class="col-lg-4">
	</div>

	<a href="/areaCliente/agendamento"> NOVO AGENDAMENTO </a>
	</div>

<br>
</div>
</div>
	<!-- Conteudo Agenda Fim -->
@endsection