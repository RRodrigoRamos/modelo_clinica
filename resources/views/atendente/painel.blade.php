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
										<a href="/areaAtendente">Início</a>
									</li>
									<li>
											<a href="/atendente/medicos_horario">
												Horários Médicos
											</a>
										</li>
										<li>
											<a href="/atendente/medicos">
												Consultar Médicos
											</a>
										</li>
										<li>
											<a href="/atendente/convenios">
												Convênios da Clinica
											</a>
										</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											{{ Auth::user()->name }} 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/atendente/meus_dados">
												 Meus Dados <i class="fa fa-user" aria-hidden="true"></i>	
											</a>
										</li>
										<li>
											<a href="/atendente/altera_senha">
												 Alterar Senha <i class="fa fa-cogs" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="/atendente/infor">
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
						<h4> Horários Médicos </h4>
						<p>
							Horários disponivel a consultas
						</p>
						<a href="/atendente/medicos_horario" class="btn btn-transparent">Vê registro...</a>
					</div>
				</div>
			<!-- Box #1 Ends -->
			<!-- Box #2 Starts -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-calendar-check-o"></i>
						<h4>Agendamentos</h4>
						<p>
							Lista de Consultas
						</p>
						<a href="/atendente/listaAgenda" class="btn btn-transparent">Vê Registro...</a>
					</div>
				</div>
			<!-- Box #2 Ends -->
			<!-- Box #3 Starts -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h4>Convênios Clinica</h4>
							<p>
								Registros de Convênios
							</p>
						<a href="/atendente/convenios" class="btn btn-transparent">Vê registro...</a>
					</div>
				</div>
			<!-- Box #3 Ends -->
			<!-- Box #4 Starts -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-user" aria-hidden="true"></i>
						<h4> Cliente / Cadastro </h4>
						<p>
							Dados do cliente.
						</p>
						<a href="/atendente/cliente" class="btn btn-transparent">Vê registro...</a>
					</div>
				</div>
			<!-- Box #4 Ends -->
			</div>
		<!-- Conteudo inBox Fim -->
		<!-- Conteudo Section -->
@endsection