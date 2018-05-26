@extends('layout.templateAdmin')
@section('title', 'Area Cliente')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  Bem vindo {{ Auth::user()->name }} a sua pagina de Area do Cliente.
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
										<a href="/areaCliente/pacienteContat"><i class="fa fa-comments"> </i> Fale Conosco</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											{{ Auth::user()->name }} 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/areaCliente/agendamento">
												<i class="fa fa-plus-square" aria-hidden="true"></i> Agendamento
											</a>
										</li>
										<li>
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
		<div class="main-banner clienteContat">
			<div class="container">
				<h2><span>Fale Conosco</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/areaCliente">Area Cliente</a>
					</li>
					<li class="active">Fale Conosco</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Main Container Starts -->
		<div class="container main">
			<!-- Contact Content Starts -->
			<div class="contact-content">
				<div class="row">
				<!-- Contact Form Starts -->
					<div class="col-sm-8 col-xs-12">
						<h3> Entre em contato preenchendo o formulário abaixo </h3>
						<div class="status alert alert-success contact-status"></div>
						<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="/areaCliente/pacienteContat" role="form">
							<div class="row">
							<!-- Name Field Starts -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">Nome Completo: </label>
										<input type="text" class="form-control" name="name" id="name" required="required">
									</div>
								</div>
							<!-- Name Field Ends -->
							<!-- Email Field Starts -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Endereço Email @: </label>
										<input type="text" class="form-control" name="email" id="email" required="required">
									</div>
								</div>
							<!-- Email Field Ends -->
							<!-- Phone No Field Starts -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="phoneno">Número para Contato: </label>
										<input type="text" class="form-control" name="phoneno" id="phoneno" required="required">
									</div>
								</div>
							<!-- Phone No Field Ends -->
							<!-- Message Field Starts -->
								<div class="col-xs-12">
									<div class="form-group">
										<label for="message">Escreva sua Mensagem: </label>
										<textarea class="form-control" rows="8" name="message" id="message" required="required"></textarea>
									</div>
								</div>
							<!-- Message Field Ends -->
								<div class="col-xs-12">
									<input type="submit" class="btn btn-black text-uppercase" value="ENVIAR MENSAGEM">
								</div>
							</div>
						</form>
					</div>
				<!-- Contact Form Ends -->
				<!-- Address Starts -->
					<div class="col-sm-4 col-xs-12">
					<!-- Box #1 Starts -->
						<div class="cblock-1">
							<span class="icon-wrap"><i class="fa fa-car"></i></span>
							<h4>Venha e Visite-nos</h4>
							<ul class="list-unstyled">
								<li>MATRIZ: Av. Coaracy Nunes</li>
								<li> 892 - Centro, Macapá - AP, 68900-010</li>
								<li>(96) 3217 - 0700</li>
								<li>(96) 98801 - 3805</li>
								<li>sac@hemodiagnostico.com.br</li>

							</ul>
						</div>
					<!-- Box #1 Ends -->
					<!-- Box #2 Starts -->
						<div class="cblock-1">
							<span class="icon-wrap red"> <i class="fa fa-hospital-o" aria-hidden="true"></i></span>
							<h4>Nossas Unidades - Filias</h4>
							<ul class="list-unstyled">
								<li><b>São Lázaro:</b> Rua Adilson José Pinto Pereira 1209: <i>Contato: 3117 - 0704</i></li>
								<li><b>Zerão:</b> Rua Dom José Maritano, 1184 - Zerão <i>Contato: 9 8139 - 0044</i></li>
								<li> <b>Pérpetuo Socorro:</b> Rua Rio Xingu <i>Contato: 3222 - 6120</i></li>
							</ul>
						</div>
					<!-- Box #2 Ends -->
					</div>
				<!-- Address Ends -->
				</div>
			</div>
		<!-- Contact Content Ends -->
		<br>
		<br>
		</div>
	<!-- Main Container Ends -->

@endsection