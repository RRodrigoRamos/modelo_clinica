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
									<li class="active">
										<a href="/areaAtendente"> <i class="fa fa-home" aria-hidden="true"></i> INÍCIO</a>
									</li>
									<li>
											<a href="/areaAtendente/listaAgenda">
												FLUXO DE AGENDAMENTOS
											</a>
										</li>
									<li>
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
		<div class="main-banner cliente">
			<div class="container">
				<h2><span>Área do Atendente</span></h2>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Conteudo Inicio  -->
		<div class="container main-container">
		<!-- Conteudo inBox -->
			<div class="notification-boxes row">
			<!-- Box #1 Starts -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-calendar-plus-o"></i>
						<h4> AGENDA DO MÉDICO </h4>
						<p>
							Consulte os horários disponiveis para cada Médico.
						</p>
						<a href="/areaAtendente/medicos_horario" class="btn btn-transparent">CONSULTAR</a>
					</div>
				</div>
			<!-- Box #1 Ends -->
			<!-- Box #2 Starts -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-calendar-check-o"></i>
						<h4>FLUXO DE AGENDAMENTOS</h4>
						<p>
						 	Todos os agendamentos em processo ou confirmados.
						</p>
						<a href="/areaAtendente/listaAgenda" class="btn btn-transparent">VER REGISTROS</a>
					</div>
				</div>
			<!-- Box #2 Ends -->
			<!-- Box #3 Starts -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h4>CONVÊNIOS CADASTRADOS</h4>
							<p>
								Consulte todos os convênios cadastrados no Sistema.
							</p>
						<a href="/areaAtendente/convenios" class="btn btn-transparent">VER REGISTROS</a>
					</div>
				</div>
			<!-- Box #3 Ends -->
			<!-- Box #4 Starts -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-user" aria-hidden="true"></i>
						<h4>PACIENTES CADASTRADOS</h4>
						<p>
							lista de todos os pacientes, edite e cadastre.
						</p>
						<a href="/areaAtendente/cliente" class="btn btn-transparent">CONSULTAR</a>
					</div>
				</div>
			<!-- Box #4 Ends -->
			</div>
		<!-- Conteudo inBox Fim -->
		<!-- Conteudo Section -->
@endsection