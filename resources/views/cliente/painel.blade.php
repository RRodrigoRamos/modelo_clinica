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
									<li class="active">
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
										<li>
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
		<div class="main-banner cliente">
			<div class="container">
				<h2><span>Área do Paciente</span></h2>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Conteudo Inicio  -->
		<div class="container main-container">
		<!-- Conteudo inBox -->
			<div class="notification-boxes row">
			<!-- Box #1 Starts -->
				<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-calendar-plus-o"></i>
						<h4> Novo Agendamento </h4>
						<p>
							Marcação de uma Nova Consulta Clinica 
						</p>
						<a href="/areaCliente/agendamento" class="btn btn-transparent">Agendar...</a>
					</div>
				</div>
			<!-- Box #1 Ends -->
			<!-- Box #2 Starts -->
				<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-calendar-check-o"></i>
						<h4>Meus Agendamentos </h4>
						<p>
							Minha Lista de Histórico Consultas Clinicas.
						</p>
						<a href="/areaCliente/listaAgenda" class="btn btn-transparent">Ver Histórico...</a>
					</div>
				</div>
			<!-- Box #2 Ends -->
 			<!-- Box #4 Ends -->
			</div>
		<!-- Conteudo inBox Fim -->
		<!-- Conteudo Section -->
@endsection