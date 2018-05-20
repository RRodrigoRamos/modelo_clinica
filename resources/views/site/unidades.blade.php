@extends('layout.template')
@section('title', 'UNIDADES')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  <span> <i class="fa fa-hospital-o fa-2x" aria-hidden="true"></i>  Funcionamos de </span> segunda à sexta: 7h às 18h e sábados de 7h às 12h.
						</div>
						<div class="col-sm-6 col-xs-12">
							<ul class="list-unstyled list-inline">
								<li><a href="mailto:sac@hemodiagnostico.com.br">
									<i class="fa fa-envelope-o"></i> sac@hemodiagnostico.com.br
								</a></li>
								<li><i class="fa fa-phone"></i> Fone: (96) 3217-0700 / 98801-3805</li>
							</ul>
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
							<a href="/inicio" class="navbar-brand">
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
										<a href="/inicio"> <i class="fa fa-home" aria-hidden="true"></i> Início</a>
									</li>
									<li class="dropdown active">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Institucional <i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="/pagina/institucional">Quem Somos</a>
											</li>
											<li>
												<a href="/pagina/equipe"> 
												Equipe</a>
											</li>
											<li>
												<a href="/pagina/medicos">
												Médicos</a>
											</li>
											<li class="active">
												<a href="/pagina/unidades">Unidades</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="/pagina/especialidades">Especialidades</a>
									</li>
									<li>
										<a href="/pagina/convenios">Convênios</a>
									</li>		
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											Serviços 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="/servico/consultas">Consultas</a>
											</li>
											<li>
												<a href="/servico/exames">Exames</a>
											</li>
											<li>
												<a href="/servico/agendamentos">Agendamentos</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="/pagina/contato"><i class="fa fa-comments"> </i> Fale Conosco</a>
									</li>
									<li>
										<a href="/areaCliente" ><i class="fa fa-user"></i> Área do cliente</a>
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
@endsection
@section('ConteudoSecundario')

	<!-- Main Banner Starts -->
		<div class="main-banner paginaUnidade">
			<div class="container">
				<h2><span>Unidades Clínicas</span></h2>
			</div>
		</div>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li><a href="/inicio">Início</a></li>
					<li class="">Institucional</li>
					<li class="active">Unidades</li>
				</ul>
			</div>
		</div>	
	<!-- Breadcrumb Ends -->
	<!-- Main Container Starts -->
		<div class="container main-container">
			<h2 class="main-heading2 nomargin-top">Unidades</h2>
	<!-- Main Container Starts -->
		<div class="container">
		<!-- About Intro Text Starts -->
			<section class="welcome-area about">
				<div class="row">
					<div class="col-md-6 col-xs-12 about-col" align="justify">
						<h4>Matriz:</h4>
						<p>
							Av. Coaracy Nunes, 892 - Centro
							Contato: 3217 - 0700 / 9 8801 - 3805
						</p>
						<h4>São Lázaro:</h4>
						<p>
							Rua Adilson José Pinto Pereira 1209 - São Lázaro
							Contato: 3117 - 0704	
						</p>
						<h4>Zerão:</h4>
						<p>
							Rua Dom José Maritano, 1184 - Zerão
							Contato: 9 8139 - 0044
						</p>
						<h4>
							Pérpetuo Socorro:
						</h4>
						<p> 
							Rua Rio Xingu
							Contato: 3222 - 6120
						</p>
						<h4>
							Marabaixo:
						</h4>
						<p>
							Sem endereço
						</p>
					</div>
					</div>
				</div>
			</section>
		<!-- About Intro Text Ends -->
		</div>
	<!-- Main Container Ends -->
@endsection