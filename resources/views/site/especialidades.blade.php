@extends('layout.template')
@section('title', 'ESPECIALIDADES')
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
									<li class="dropdown">
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
											<li>
												<a href="/pagina/unidades">Unidades</a>
											</li>
										</ul>
									</li>
									<li class="active">
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
	<!-- Main Banner Starts -->
		<div class="main-banner paginaEspecialidade">
			<div class="container">
				<h2><span>Especialidades Médicas</span></h2>
			</div>
		</div>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li><a href="/inicio">Início</a></li>
					<li class="active">Especialidades</li>
				</ul>
			</div>
		</div>	
	<!-- Breadcrumb Ends -->
	<!-- Main Container Starts -->
		<div class="container main-container">
		<!-- Doctors Desigination Filters Starts -->
			<ul id="doctors-filter" class="list-unstyled list-inline">
				<li><a href="#" class="active" data-group="all">Todos os Departamentos</li>
				<li><a href="#" data-group="cardiologia">Cardiologia</a></li>
				<li><a href="#" data-group="clinica_medica">Clínica médica</a></li>
				<li><a href="#" data-group="endocrinologia">Endocrinologia</a></li>
				<li><a href="#" data-group="gastroenterologia">Gastroenterologia</a></li>
				<li><a href="#" data-group="geriatria">Geriatria</a></li>
				<li><a href="#" data-group="ginecologista">Ginecologista</a></li>
				<li><a href="#" data-group="nutrologia">Nutrologia</a></li>
				<li><a href="#" data-group="ortopedia">Ortopedia</a></li>
				<li><a href="#" data-group="pediatria">Pediatria</a></li>
				<li><a href="#" data-group="practologia">Practologia</a></li>
				<li><a href="#" data-group="reumatologia">Reumatologia</a></li>
				<li><a href="#" data-group="teste_da_orelinha">Teste da Orelinha</a></li>
				<li><a href="#" data-group="ultrassonografia">Ultrassonografia</a></li>
				<li><a href="#" data-group="endoscopia">Endoscopia</a></li>
			</ul>
		<!-- Doctors Desigination Filters Ends -->
		<!-- Doctors Bio List Starts -->
			<ul id="doctors-grid" class="row grid">
			<!-- Doctor Bio #1 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-group='["cardiologia"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/doctor-bio-img2.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Manoel Brasil</h4>
							<p class="designation">Especialidade</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Descrição
							</p>
						</div>							
						<a href="/pagina/consultas" class="btn btn-secondary text-uppercase">Agende sua consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #1 Ends -->
			<!-- Doctor Bio #2 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "pediatria"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/doctor-bio-img1.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr.</h4>
							<p class="designation">Especialidade</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Descrição
							</p>
						</div>							
						<a href="/pagina/consultas" class="btn btn-secondary text-uppercase">Agende sua consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #2 Ends -->
			<!-- Doctor Bio #3 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "cardiaca"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/doctor-bio-img3.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dra.Fernanda</h4>
							<p class="designation">especialidade</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Descrição
							</p>
						</div>							
						<a href="/pagina/consultas" class="btn btn-secondary text-uppercase">Agende sua consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #3 Ends -->
			<!-- Doctor Bio #4 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "ginecologista"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/doctor-bio-img4.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4></h4>
							<p class="designation">especialidades</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Descrição
							</p>
						</div>							
						<a href="/pagina/consultas" class="btn btn-secondary text-uppercase">Agende uma Consultar</a>
					</div>
				</li>
			</ul>
		<!-- Doctors List Ends -->
		</div>
	<!-- Main Container Ends -->
	@endsection