@extends('layout.template')
@section('title', 'INSTITUCIONAL-MÉDICOS')
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
											<li class="active">
												<a href="/pagina/medicos">
												Médicos</a>
											</li>
											<li>
												<a href="/pagina/unidades">Unidades</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="/pagina/convenios">Convênios</a>
									</li>		
									<li>
										<a href="/pagina/contato"><i class="fa fa-comments"> </i> Fale Conosco</a>
									</li>
									<li>
										<a href="/areaCliente" >
											<i class="fa fa-sign-in"></i>
											  Login 
											<i class="fa fa-user"></i>
										</a>
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
		<div class="main-banner paginaMedico">
			<div class="container">
				<h2><span>Médicos</span></h2>
			</div>
		</div>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li><a href="/inicio">Início</a></li>
					<li class="">Institucional</li>
					<li class="active">Médicos</li>
				</ul>
			</div>
		</div>	
	<!-- Breadcrumb Ends -->
	<!-- Main Container Starts -->
		<div class="container main-container">
		<!-- Doctors Desigination Filters Starts -->
			<ul id="doctors-filter" class="list-unstyled list-inline">
				<li><a href="#" class="active" data-group="all">TODAS AS ESPECIALIDADES</a></li>
				<li><a href="#" data-group="healthcare">CLINICO GERAL</a></li>
				<li><a href="#" data-group="pediatrics">PEDIATRIA</a></li>
				<li><a href="#" data-group="cardiac">CARDIOLOGISTA</a></li>
				<li><a href="#" data-group="gynaecological">GINECOLOGISTA</a></li>
			</ul>
		<!-- Doctors Desigination Filters Ends -->
		<!-- Doctors Bio List Starts -->
			<ul id="doctors-grid" class="row grid">
			<!-- Doctor Bio #1 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "healthcare"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos4.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Brasil</h4>
							<p class="designation">Clinico Geral</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								O Clínico Geral é o profissional responsável por servir à comunidade, auxiliar na prevenção e cura de doenças. Um Clínico Geral tem um conhecimento aprofundado dos órgãos, sistemas e aparelhos do corpo humano, faz diagnósticos, pede exames, prescreve medicamentos e realiza cirurgias.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #1 Ends -->
			<!-- Doctor Bio #2 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "pediatrics"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos5.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Carlos</h4>
							<p class="designation">Pediatria</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Pediatria é a especialidade da Medicina dedicada ao cuidado da saúde de crianças, adolescentes e pré-adolescentes. ... O pediatra, além de tratar da saúde infantil, pode orientar as famílias sobre sobre questões como alimentação, aleitamento materno, vacinação e prevenção de acidentes.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #2 Ends -->
			<!-- Doctor Bio #3 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "cardiac"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos7.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Andreza Mayara</h4>
							<p class="designation">Cardiologista</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Cardiologia é uma especialidade médica que se ocupa do diagnóstico e tratamento de doenças que ocorrem com o coração e o sistema circulatório, em resumo Cardiologia é a especialidade médica que se ocupa do diagnóstico e tratamento das doenças que acometem o coração bem como os outros componentes do sistema circulatório.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #3 Ends -->
			<!-- Doctor Bio #4 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "gynaecological"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos11.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Carmem Lúcia</h4>
							<p class="designation">Genecologista</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Ginecologia é o ramo da medicina que estuda a fisiologia e as patologias do aparelho reprodutor femeninos em situação não gestante. Os médicos especializados na prática ginecológica são os ginecologistas.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #4 Ends -->
			<!-- Doctor Bio #5 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "healthcare"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/doctor-bio-img8.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Drª Elizabeth Gomes</h4>
							<p class="designation">Clinico Geral</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								O Clínico Geral é o profissional responsável por servir à comunidade, auxiliar na prevenção e cura de doenças. Um Clínico Geral tem um conhecimento aprofundado dos órgãos, sistemas e aparelhos do corpo humano, faz diagnósticos, pede exames, prescreve medicamentos e realiza cirurgias.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #5 Ends -->
			<!-- Doctor Bio #6 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "pediatrics"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos1.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Santos & Drª Francys </h4>
							<p class="designation"> Pediatria </p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Pediatria é a especialidade da Medicina dedicada ao cuidado da saúde de crianças, adolescentes e pré-adolescentes. ... O pediatra, além de tratar da saúde infantil, pode orientar as famílias sobre sobre questões como alimentação, aleitamento materno, vacinação e prevenção de acidentes.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #6 Ends -->			
			<!-- Doctor Bio #7 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "cardiac"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos8.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Maria Brasil </h4>
							<p class="designation">Cardiologista</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Cardiologia é uma especialidade médica que se ocupa do diagnóstico e tratamento de doenças que ocorrem com o coração e o sistema circulatório, em resumo Cardiologia é a especialidade médica que se ocupa do diagnóstico e tratamento das doenças que acometem o coração bem como os outros componentes do sistema circulatório.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #7 Ends -->
			<!-- Doctor Bio #8 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "gynaecological"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos9.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Drª. Barbosa </h4>
							<p class="designation">Ginecologista</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Ginecologia é o ramo da medicina que estuda a fisiologia e as patologias do aparelho reprodutor femeninos em situação não gestante. Os médicos especializados na prática ginecológica são os ginecologistas.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #8 Ends -->
			<!-- Doctor Bio #9 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "healthcare"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos2.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Tomas Edson</h4>
							<p class="designation">Clinico Geral </p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								O Clínico Geral é o profissional responsável por servir à comunidade, auxiliar na prevenção e cura de doenças. Um Clínico Geral tem um conhecimento aprofundado dos órgãos, sistemas e aparelhos do corpo humano, faz diagnósticos, pede exames, prescreve medicamentos e realiza cirurgias.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #9 Ends -->
			<!-- Doctor Bio #10 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "pediatrics"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos3.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Paulo Barbosa</h4>
							<p class="designation">Pediatria</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Pediatria é a especialidade da Medicina dedicada ao cuidado da saúde de crianças, adolescentes e pré-adolescentes. ... O pediatra, além de tratar da saúde infantil, pode orientar as famílias sobre sobre questões como alimentação, aleitamento materno, vacinação e prevenção de acidentes.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #10 Ends -->			
			<!-- Doctor Bio #11 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "cardiac"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos9.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Dr. Paulo Coelho</h4>
							<p class="designation">Cardiologista</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Cardiologia é uma especialidade médica que se ocupa do diagnóstico e tratamento de doenças que ocorrem com o coração e o sistema circulatório, em resumo Cardiologia é a especialidade médica que se ocupa do diagnóstico e tratamento das doenças que acometem o coração bem como os outros componentes do sistema circulatório.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #11 Ends -->
			<!-- Doctor Bio #12 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "gynaecological"]'>
					<div class="bio-box">
						<div class="profile-img">
							<img src="../images/doctors/medicos12.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
							<div class="overlay">
								<ul class="list-unstyled list-inline sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="inner">
							<h4>Drª. Maria da Graça </h4>
							<p class="designation">Ginecologista</p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
								Ginecologia é o ramo da medicina que estuda a fisiologia e as patologias do aparelho reprodutor femeninos em situação não gestante. Os médicos especializados na prática ginecológica são os ginecologistas.
							</p>
						</div>							
						<a href="/areaCliente" class="btn btn-secondary text-uppercase">Agende uma Consulta</a>
					</div>
				</li>
			<!-- Doctor Bio #12 Ends -->
			</ul>
		<!-- Doctors List Ends -->
		</div>
	<!-- Main Container Ends -->

	@endsection