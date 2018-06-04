@extends('layout.templateAdmin')
@section('title', 'Administração')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  Bem vindo a sua pagina de Administração !
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
							<a href="/areaAdmin" class="navbar-brand">
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
										<a href="/areaAdmin">Início</a>
									</li>
									<li class="active">
											<a href="/admin/agendamentos">
												Lista Agendamentos
											</a>
									</li>
									<li>
											<a href="/admin/medicos">
												Médicos Cad.
											</a>
									</li>
									<li>
											<a href="/admin/atendentes">
												Atendentes Cad.
											</a>
									</li>
									<li>
											<a href="/admin/pacientes">
												 Pacientes Cad. 	
											</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-user" aria-hidden="true"></i>
										<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li> <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }} <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
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
		<div class="main-banner index_1">
			<div class="container">
				<h2><span>Lista Agenda	</span></h2>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<div class="container main">
<br>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x	"></i> &nbsp; Lista de Agendamentos da Clínica. </div>
        </div>
	</div>
<br>
<div class="row">
<div class="col-lg-1">
</div>
<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
 <fieldset>
          <legend>Lista Agenda - Clinica </legend>
	            <table class="table table-striped table-bordered table-condensed table-hover table-responsive">
						 <thead>
						  <tr>
						   <th>Tipo</th>
						   <th>Especialidade</th>
						   <th>Médico</th>
						   <th>Unidade</th>
						   <th>Paciente</th>
						   <th>Data</th>
						   <th>Status</th>
						  </tr>
						 </thead>
						 <tbody>
						@foreach($agendamentos as $agendamentosPs)
						  <tr>
     					   <td>{{ $agendamentosPs->tipo_agenda}}</td>
						   <td>{{ $agendamentosPs->especialidade}}</td>
						   <td>{{ $agendamentosPs->clinica_medicos_id}}</td>
						   <td>{{ $agendamentosPs->clinica_medica}}</td>
						   <td>{{ $agendamentosPs->users_id}}</td>
						   <td> {{ date( 'd/m/Y' , strtotime($agendamentosPs->data_agenda))}} às {{ $agendamentosPs->hora_agenda}} </td>
						   <td>{{ $agendamentosPs->status_agenda}}</td>
						  </tr>
                    	@endforeach
						 </tbody>
						</table>
		</fieldset>
				{{$agendamentos->links()}}
		</div>
	</div>
</div>

@endsection