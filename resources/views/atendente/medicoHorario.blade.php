@extends('layout.templateAdmin')
@section('title', 'Area Atendente')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  Bem vindo {{ Auth::user()->name }} a sua pagina do atendimentos ao Paciente.
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
							<a href="/areaAtendente" class="navbar-brand">
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
										<a href="/areaAtendente"> <i class="fa fa-home" aria-hidden="true"></i> INÍCIO</a>
									</li>
									<li>
											<a href="/areaAtendente/listaAgenda">
												FLUXO DE AGENDAMENTOS
											</a>
										</li>
									<li class="active">
											<a href="/areaAtendente/medicos_horario">
												AGENDA DO MÉDICO
											</a>
										</li>

										<!-- <li>
											<a href="/areaAtendente/medicos">
												Consultar Médicos
											</a>
										</li> -->
										<li>
											<a href="/areaAtendente/convenios">
												NOSSOS CONVÊNIOS
											</a>
										</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											{{ Auth::user()->name }} 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/areaAtendente/agendamento">
												 Agendamento &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="/areaAtendente/meus_dados">
												 Meus Dados &nbsp;<i class="fa fa-user" aria-hidden="true"></i>	
											</a>
										</li>
										<li>
											<a href="/areaAtendente/infor">
												 Informativo &nbsp;<i class="fa fa-info-circle" aria-hidden="true"></i>
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
				<h2><span>Medicos Horários</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/areaCliente">ÁREA DO ATENDENTE</a>
					</li>
					<li>Medicos Horários</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Conteudo Agenda -->
<div class="container main">
<br>
<div class="row">
<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
    <fieldset>
          <legend align="center"><center>Hora Médicos</center></legend><BR>
	            <table class="table table-striped table-bordered table-condensed table-hover table-responsive">
						 <thead>
						  <tr>
						   <th>TIPO</th>
						   <th>ESPECIALIDADE</th>
						   <th>	MÉDICO</th>
						   <th>	UNIDADE </th>
						   <th>	DATA / HORÁRIO</th>
						   <th>	STATUS	</th>
						   <th>AÇÃO</th>
						  </tr>
						 </thead>
						 <tbody>
				</table>
  </div>
</div>




	</fieldset>
<br>
</div>
	<!-- Conteudo Agenda Fim -->
@endsection