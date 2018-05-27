@extends('layout.templateAdmin')
@section('title', 'MÉDICO ATENDENTE')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  Bem vindo {{ Auth::user()->medico->name }} a sua pagina!.
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
							<a href="/areaMedico" class="navbar-brand">
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
										<a href="/areaMedico">Início</a>
									</li>
									<li>
											<a href="/areaMedico/agenda">
												Minha Agenda
											</a>
										</li>
										<li>
											<a href="/areaMedico/medicoHorarios">
												Meus Horários
											</a>
										</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											{{ Auth::user()->name }} 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/areaMedico/meus_dados">
												 Meus Dados <i class="fa fa-user" aria-hidden="true"></i>	
											</a>
										</li>
										<li>
											<a href="/areaMedico/altera_senha">
												 Alterar Senha <i class="fa fa-cogs" aria-hidden="true"></i>
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
				<h2><span>Área do Médico</span></h2>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Conteudo Inicio  -->
		<div class="container main-container">
		<!-- Conteudo inBox -->
			<div class="notification-boxes row">
			<!-- Box #1 Starts -->
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-book" aria-hidden="true"></i>
						<h4> Agenda de Consultas </h4>
						<p>
							Agendamentos marcados...  
						</p>
						<a href="/areaMedico/agenda" class="btn btn-transparent">Vê registro...</a>
					</div>
				</div>
			<!-- Box #1 Ends -->
			<!-- Box #2 Starts -->
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-calendar-check-o"></i>
						<h4>Meus Horários</h4>
						<p>
							Horário disponivel para consultas médicas.
						</p>
						<a href="/areaMedico/horario" class="btn btn-transparent">Vê Registro...</a>
					</div>
				</div>
			<!-- Box #2 Ends -->
			<!-- Box #4 Starts -->
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-user" aria-hidden="true"></i>
						<h4> Consultar Paciente </h4>
						<p>
							Dados de registro paciente
						</p>
						<a href="/areaMedico/meus_dados" class="btn btn-transparent">Vê registro...</a>
					</div>
				</div>
			<!-- Box #4 Ends -->
			</div>
		<!-- Conteudo inBox Fim -->
		<!-- Conteudo Section -->
@endsection