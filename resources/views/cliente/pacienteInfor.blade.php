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
									<li class="active">
										<a href="/areaCliente/infor"><i class="fa fa-info-circle" aria-hidden="true"></i> Dúvidas Frequentes</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-user"></i> &nbsp;{{ Auth::user()->name }} 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/areaCliente/agendamento">
												<i class="fa fa-plus-square" aria-hidden="true"></i> Agendar
											</a>
										</li>
										<li>
											<a href="/areaCliente/listaAgenda">
												Minha Agenda
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
		<div class="main-banner clienteInfor">
			<div class="container">
				<h2><span>Informativo</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/areaCliente">Area Cliente</a>
					</li>
					<li class="active">Informativo</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Main Container Starts -->
		<div class="container main">
			<br>
			<h3 class="main-heading2 nomargin-top">Dúvidas Frequentas</h3>
			<p>
				Dúvidas sobre a usabilidade do sistema, questões relacionadas ao agendamento de consultas clinicas.
			</p>
		<!-- FAQ's Accordions Starts -->
			<div class="panel-group" id="accordion-faqs">
			<!-- Accordion #1 Starts -->
				<div class="panel">
				<!-- Panel Heading Starts -->
					<div class="panel-heading">
						<h5 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion-faqs" href="#collapse1">
								Ao agendar online, tenho algum custo?
							</a>
						</h5>
					</div>
				<!-- Panel Heading Ends -->
				<!-- Panel Body Starts -->
					<div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">
							<p>
								Não. O paciente agenda online sem custo algum.
							</p>
						</div>
					</div>
				<!-- Panel Body Ends -->						
				</div>
			<!-- Accordion #1 Ends -->
			<!-- Accordion #2 Starts -->
				<div class="panel">
				<!-- Panel Heading Starts -->
					<div class="panel-heading">
						<h5 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion-faqs" href="#collapse2">
								Tem como o paciente pagar o procedimento online?
							</a>
						</h5>
					</div>
				<!-- Panel Heading Ends -->
				<!-- Panel Body Starts -->
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<p>
								Não. O sistema de agendamento possibilita somente o agendamento.
							</p>
						</div>
					</div>
				<!-- Panel Body Ends -->						
				</div>
			<!-- Accordion #2 Ends -->
			<!-- Accordion #3 Starts -->
				<div class="panel">
				<!-- Panel Heading Starts -->
					<div class="panel-heading">
						<h5 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion-faqs" href="#collapse3">
								Preciso levar a Guia do convênio já preenchida?
							</a>
						</h5>
					</div>
				<!-- Panel Heading Ends -->
				<!-- Panel Body Starts -->
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">
							<p>
								Caso o procedimento agendado necessite que o paciente leve a Guia já preenchida, o sistema avisará ao paciente.
							</p>
						</div>
					</div>
				<!-- Panel Body Ends -->						
				</div>
			<!-- Accordion #3 Ends -->
			<!-- Accordion #5 Starts -->
				<div class="panel">
				<!-- Panel Heading Starts -->
					<div class="panel-heading">
						<h5 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion-faqs" href="#collapse5">
								Onde altero meu email, senha ou algum dado pessoal?
							</a>
						</h5>
					</div>
				<!-- Panel Heading Ends -->
				<!-- Panel Body Starts -->
					<div id="collapse5" class="panel-collapse collapse">
						<div class="panel-body">
							<p>
								Você poderá alterar seu email ou senha em Minha área » Meus Dados
							</p>
						</div>
					</div>
				<!-- Panel Body Ends -->						
				</div>
			<!-- Accordion #5 Ends -->
			<!-- Accordion #7 Starts -->
				<div class="panel">
				<!-- Panel Heading Starts -->
					<div class="panel-heading">
						<h5 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion-faqs" href="#collapse7">
								 Eu posso agendar do meu smart phone ou tablet?
							</a>
						</h5>
					</div>
				<!-- Panel Heading Ends -->
				<!-- Panel Body Starts -->
					<div id="collapse7" class="panel-collapse collapse">
						<div class="panel-body">
							<p>
								Sim. A plataforma também está disponível para agendamentos via smart phone e tablets.
							</p>
						</div>
					</div>
				<!-- Panel Body Ends -->						
				</div>
			<!-- Accordion #7 Ends -->
			</div>
		<!-- FAQ's Accordions Ends -->
		</div>
	<!-- Main Container Ends -->

@endsection