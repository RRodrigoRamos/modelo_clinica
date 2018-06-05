@extends('layout.template')
@section('title', 'Home - INICIO')
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
									<li class="active">
										<a href="/inicio"><i class="fa fa-home" aria-hidden="true"></i> Início</a>
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
	<!-- Carossel Slides -->
		<section class="slider clearfix">
			<div id="camera_wrap_1" class="camera_wrap camera_white_skin">
			<!-- Slide #1 Starts -->
				<div data-src="../images/slider/slider-img1.jpg">
					<div class="camera_caption fadeFromLeft hidden-sm hidden-xs">
						<h3>agendamento de consultas online</h3>
						<p>
							Tornou-se mais prático marcar sua consulta, com a comodidade e facilidade que a HEMODIAGNÓSTICO sempre quer oferecer.
						</p>
						<div class="alert alert-info" role="alert">
						  <strong>Importante:</strong>  
						   obrigatório cadastrar seus dados antes de agendar, para assim facilitar na coleta de seus dados  na hora do atendimento. 
						</div>
						<div class="row">
							<div class="col-sm-8">
								Você ainda não possui cadastro?
								<a href="/register" class="btn btn-success btn-lg btn-block">Cadastrar</a>
							</div>
							<div class="col-sm-4">
								Você já possui cadastro?
								<a href="/areaCliente" class="btn btn-primary btn-lg btn-block">Agendar</a>
							</div>
						</div>
					</div>
				</div>
			<!-- Slide #1 Ends -->
			<!-- Slide #2 Starts -->
				<div data-src="../images/slider/slider-img2.jpg">
					<div class="camera_caption fadeIn hidden-sm hidden-xs">
						<h3>Conheça nossos Especialistas</h3>
						<p>
							Sua saúde em boas mãos! Dotada de um corpo clínico de qualidade, a HEMODIAGNÓSTICO possui renomados especialistas para cuidar da sua saúde.
						</p>
						<a href="/pagina/medicos" class="btn btn-primary btn-lg btn-block"> Corpo clínico </a>
					</div>
				</div>
			<!-- Slide #2 Ends -->
            <!-- Slide #3 Starts -->
				<div data-src="../images/slider/slider-img3.jpg">
					<div class="camera_caption fadeIn hidden-sm hidden-xs">
						<h3>Mega promoção</h3>

						<p>Temos ótimos preços para você que foi aprovado no concurso da Policia Civil AP, Corra para a HEMODIAGNÓSTICO.
						</p>
						<a href="#" class="btn btn-primary btn-lg btn-block">Saiba Mais...</a>
					</div>
				</div>
			<!-- Slide #3 Ends -->
			</div>
		</section>
	<!-- Carossel Slides Fim -->
	@endsection
	@section('ConteudoSecundario')
<!-- Conteudo Inicio  -->
		<div class="container main-container">
		<!-- Conteudo inBox -->
			<div class="notification-boxes row">
			<!-- Box #1 Starts -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-plus-circle" ></i>
						<h4> AGENDE SUA CONSULTA </h4>
						<p>
							 Agende a qualquer hora, de qualquer lugar. Utilize quando e onde quiser, com total conforto e sem se preocupar com o horário de funcionamento do consultório ou clínica. 
						</p>
						<a href="/pagina/medicos" class="btn btn-transparent">AGENDAR</a>
					</div>
				</div>
			<!-- Box #1 Ends -->
			<!-- Box #2 Starts -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-user-md"></i>
						<h4>NOSSOS ESPECIALISTAS</h4>
						<p>
						Sua saúde em boas mãos! Dotada de um corpo clínico de qualidade, a HEMODIAGNÓSTICO possui renomados especialistas para cuidar da sua saúde. 
						</p>
						<a href="/pagina/noticias" class="btn btn-transparent">CORPO CLÍNICO</a>
					</div>
				</div>
			<!-- Box #2 Ends -->
			<!-- Box #3 Starts -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-hospital-o"></i>
						<h4>NOSSAS UNIDADES</h4>
						<p>
							<strong>Matriz: </strong>Av. Coaracy Nunes, 892 - Centro Contato: 3217 - 0700 / 9 8801 - 3805.
							<strong>São Lázaro:</strong> Rua Adilson José Pinto Pereira 1209 - São Lázaro Contato: 3117 - 0704.
						</p>
						<a href="/pagina/unidades" class="btn btn-transparent">SAIBA MAIS...</a>
					</div>
				</div>
			<!-- Box #3 Ends -->
			<!-- Box #4 Starts -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h4>NOSSOS CONVÊNIOS </h4>
						<p>
							ASPEB - Seguros.
							AMIL.
							Fundação ASSEFAZ.
							Bradesco Saúde.
							CAPESESP.
							AMPREV.
							DOMESTILAR.
							CASF.
							SulAmérica.
							CASSI.
							BrasilVida.
							GEAP.
							CENTRALMED...


						</p>
						<a href="/pagina/convenios" class="btn btn-transparent">SAIBA MAIS...</a>
					</div>
				</div>
			<!-- Box #4 Ends -->
			</div>
		<!-- Conteudo inBox Fim -->
		<!-- Conteudo Section -->
			<section class="welcome-area">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<img src="../images/apoio.png" alt="image" class="img-responsive img-style1">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<img src="../images/a.jpg" alt="image" class="img-responsive img-style1">
					</div>
					<div class="col-md-6 col-xs-12">
						<img src="../images/promo.jpg" alt="image" class="img-responsive img-style1">
					</div>
				</div>
			</section>
		<!-- Conteudo Section Fim -->
		</div>
	<!-- Conteudo Inicial Fim -->
	<!-- Conteudo Section Doctors -->
		<section class="featured-doctors">
		<!-- Doctors Container -->
			<div class="container">
				<h2><span class="lite">Nossos </span>Especialistas</h2>
				<p>
					
				</p>
				<div class="row">
				<!-- Doctor Bio #1 Starts -->
					<div class="col-md-3 col-sm-6 col-xs-12">
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
								<h5>Dr. Brasil</h5>
								<p class="designation">Cardiologista</p>
								<p class="divider"><i class="fa fa-plus-square"></i></p>
								<p>
									Cardiologia é uma especialidade médica que se ocupa do diagnóstico e tratamento de doenças que ocorrem com o coração e o sistema circulatório.
								</p>
							</div>							
						</div>
					</div>
				<!-- Doctor Bio #1 Ends -->
				<!-- Doctor Bio #2 Starts -->
					<div class="col-md-3 col-sm-6 col-xs-12">
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
								<h5>Drª. Beth da Silva</h5>
								<p class="designation">Pediatria Médica</p>
								<p class="divider"><i class="fa fa-plus-square"></i></p>
								<p>
									Pediatria  é a especialidade médica dedicada à assistência à criança e ao adolescente, nos seus diversos aspectos, sejam eles preventivos ou curativos.
								</p>
							</div>							
						</div>
					</div>
				<!-- Doctor Bio #2 Ends -->
				<!-- Doctor Bio #3 Starts -->
					<div class="col-md-3 col-sm-6 col-xs-12">
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
								<h5>Dr. Nuno Pereira</h5>
								<p class="designation">Ginecologia</p>
								<p class="divider"><i class="fa fa-plus-square"></i></p>
								<p>
									A ginecologia é a pratica da medicina que lida diretamente com a saúde do aparelho reprodutor feminino e mamas. Seu significado literal é "a ciência da mulher.
								</p>
							</div>							
						</div>
					</div>
				<!-- Doctor Bio #3 Ends -->
				<!-- Doctor Bio #4 Starts -->
					<div class="col-md-3 col-sm-6 col-xs-12">
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
								<h5>Dr. Paulo Costa </h5>
								<p class="designation">Ortodontia</p>
								<p class="divider"><i class="fa fa-plus-square"></i></p>
								<p>
									A Ortodontia é a especialidade odontológica que corrige a posição dos dentes e dos ossos maxilares quando estes estão posicionados de forma inadequada.
								</p>
							</div>							
						</div>
					</div>
				<!-- Doctor Bio #4 Ends -->

				</div>
				<br>
				<div class="col-md-4 col-xs-12 text-center-sm text-center-xs">
						<a href="/pagina/medicos" class="btn btn-main text-uppercase">Lista Completa</a>
				</div>
			</div>
		<!-- Doctors Container Fim -->
		</section>
	<!-- Conteudo Section Doctors Fim -->
	<!-- Main Container Starts -->
	<div class="container">
		<!-- Conteudo Noticias/Departamentos -->
			<!-- Content Starts -->
			<div class="row">
			<!-- Latest News Section Starts -->
				<section class="col-md-8 col-xs-12">
					
					<div class="main-block1">
						<h2 class="main-heading1 lite">Mais recentes</h2>
						<h2 class="main-heading2"><i class="fa fa-vimeo"></i>&emsp;Mídias</h2>
					<!-- Latest News Carousel Starts -->
						<div id="news-carousel" class="news-carousel carousel slide" data-ride="carousel">
						<!-- Wrapper for Slides Starts -->
							<div class="carousel-inner">
							<!-- Slide #1 Starts -->
								<div class="item active">
									<div class="row">
										<div class="col-sm-6 col-xs-12">
										<!-- News Post Starts -->
											<div class="news-post-box">
												<iframe src="https://player.vimeo.com/video/253905805" width="100%" height="180" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											<div class="inner">
													<h5>
														<a href="#">Raio-X</a>
													</h5>
													<ul class="list-unstyled list-inline post-meta">
														<li>
															<i class="fa fa-calendar"></i> Fevereiro 22, 2018
														</li>
														<!--
														<li><a href="#">
															<i class="fa fa-comments-o"></i> 10
														</a></li>-->
													</ul><!--
													<p>
														Descrição
													</p>
													<a href="#" class="btn btn-secondary">
														<i class="fa fa-arrow-circle-right"></i>
														Read More
													</a> -->
											</div>
											</div>
										<!-- News Post Ends -->
										</div>
										<div class="col-sm-6 col-xs-12">
										<!-- News Post Starts -->
											<div class="news-post-box">
												<iframe src="https://player.vimeo.com/video/253905453" width="100%" height="180" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
												<div class="inner">
													<h5>
														<a href="#">Hemodiagnóstico na TV</a>
													</h5>
													<ul class="list-unstyled list-inline post-meta">
														<li>
															<i class="fa fa-calendar"></i> Fevereiro 22, 2018
														</li>
														<!--
														<li><a href="#">
															<i class="fa fa-comments-o"></i> 10
														</a></li>-->
												</div>
											</div>
										<!-- News Post Ends -->
										</div>
									</div>
								</div>
							<!-- Slide #1 Ends -->
							<!-- Slide #2 Starts -->
								<div class="item">
									<div class="row">
										<div class="col-sm-6 col-xs-12">
										<!-- News Post Starts -->
											<div class="news-post-box">
												<iframe src="https://player.vimeo.com/video/244543812" width="100%" height="180" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
												<div class="inner">
													<h5>
														<a href="#">Episódio Salvando Vida</a>
													</h5>
													<ul class="list-unstyled list-inline post-meta">
														<li>
															<i class="fa fa-calendar"></i> Fevereiro 22, 2018
														</li>
														<!--
														<li><a href="#">
															<i class="fa fa-comments-o"></i> 10
														</a></li>-->
												</div>
											</div>
										<!-- News Post Ends -->
										</div>
										<div class="col-sm-6 col-xs-12">
										<!-- News Post Starts -->
											<div class="news-post-box">
												<iframe src="https://player.vimeo.com/video/244808554" width="100%" height="180" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
												<div class="inner">
													<h5>
														<a href="#">Exame de PSA</a>
													</h5>
													<ul class="list-unstyled list-inline post-meta">
														<li>
															<i class="fa fa-calendar"></i> Fevereiro 22, 2018
														</li>
														<!--
														<li><a href="#">
															<i class="fa fa-comments-o"></i> 10
														</a></li>-->
												</div>
											</div>
										<!-- News Post Ends -->
										</div>
									</div>
								</div>

							<!-- Slide #2 Ends -->

							</div>
						<!-- Wrapper for Slides Ends -->
						<!-- Controls Starts -->
							<a class="left carousel-control" href="#news-carousel" role="button" data-slide="prev">
								<span class="fa fa-angle-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#news-carousel" role="button" data-slide="next">
								<span class="fa fa-angle-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						<!-- Controls Ends -->
						</div>
					<!-- Latest News Carousel Ends -->
					</div>


				</section>
					<aside class="col-md-4 col-xs-12">	
						<div class="main-block1">
							<h2 class="main-heading1 lite">Funcionários</h2>
							<h2 class="main-heading2">Destaque</h2>
						<!-- Latest News Carousel Starts -->
							<div id="news-carousel" class="news-carousel carousel slide" data-ride="carousel">
							<!-- Wrapper for Slides Starts -->
								<div class="carousel-inner">
								<!-- Slide #1 Starts -->
									<div class="item active">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
											<!-- News Post Starts -->
												<div class="news-post-box">
													<img src="images/cinthia.jpeg" width="100%" height="200">
													<div class="inner">
														<h5>
															<a href="#"></a>
														</h5>
														<ul class="list-unstyled list-inline post-meta">
															<li>
																<i class="fa fa-calendar"></i> Fevereiro 22, 2018
															</li>
															<!--
															<li><a href="#">
																<i class="fa fa-comments-o"></i> 10
															</a></li>-->
															<h4 style="color:steelblue;font-weight: bold;">Cínthia Patrício Rosa</h4>
														</ul>
														<p>
																Atendente da Clínica e Laboratório Hemodiagnóstico desde junho de 2014.
														</p>
														<!--<a href="#" class="btn btn-secondary">
															<i class="fa fa-arrow-circle-right"></i>
															Read More
														</a> -->
													</div>
												</div>
											<!-- News Post Ends -->
											</div>




					</aside>
			</div>
		<!-- Content Ends -->
		<!-- Book Appointment Box Starts -->
			<div class="book-appointment-box">
				<div class="row">
					<div class="col-md-5 col-xs-12 text-center-sm text-center-xs">
						<h4>Para mais informações ligue:</h4>
						<h3><i class="fa fa-phone-square"></i> (96) 9 8801-3805</h3>
					</div>
					<div class="col-md-4 col-xs-12 text-center-sm text-center-xs">
						<a href="/areaCliente" class="btn btn-main text-uppercase">ou Agende uma consulta Online</a>
					</div>
					<div class="col-md-3 col-xs-12 hidden-sm hidden-xs">
						<div class="box-img">
							<img src="images/paula.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		<!-- Book Appointment Box Ends -->
		</div>
	<!-- Conteudo Noticias/Departamentoss Fim-->
	@endsection