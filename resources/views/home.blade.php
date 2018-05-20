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
										<a href="/inicio">Início</a>
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
	<!-- Carossel Slides -->
		<section class="slider clearfix">
			<div id="camera_wrap_1" class="camera_wrap camera_white_skin">
			<!-- Slide #1 Starts -->
				<div data-src="../images/slider/slider-img1.jpg">
					<div class="camera_caption fadeFromLeft hidden-sm hidden-xs">
						<h3>Clinica Médica e Especializada</h3>
						<p>
							Por ser gerida por especialistas, ela se preocupa essencialmente com sua saúde e, principalmente, com seu bem-estar e qualidade de vida.
						</p>
						<a href="/pagina/equipe" class="btn btn-secondary">Saiba Mais...</a>
					</div>
				</div>
			<!-- Slide #1 Ends -->
			<!-- Slide #2 Starts -->
				<div data-src="../images/slider/slider-img2.jpg">
					<div class="camera_caption fadeIn hidden-sm hidden-xs">
						<h3>Exames Laboratorias</h3>
						<p>
							Uma das principais finalidades dos testes laboratoriais é auxiliar o raciocínio médico após a obtenção da história clínica e a realização do exame físico.
						</p>
						<a href="/pagina/examesLab" class="btn btn-secondary">Saiba Mais...</a>
					</div>
				</div>
			<!-- Slide #2 Ends -->
            <!-- Slide #3 Starts -->
				<div data-src="../images/slider/slider-img3.jpg">
					<div class="camera_caption fadeIn hidden-sm hidden-xs">
						<h3>Agendamento para Consultas e Exames </h3>
						<p>
							Este é mais um serviço que disponibilizamos para você. Faça seu agendamento de consultas e exames de uma maneira rápida, fácil e segura.
						</p>
						<a href="/areaCliente" class="btn btn-secondary"> Agendamento </a>
					</div>
				</div>
			<!-- Slide #3 Ends -->
			</div>
		</section>
	<!-- Carossel Slides Fim -->
	@endsection
	@section('ConteudoSecundario')

	<!-- teste  
	<div class="card-body">
         @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
         @endif
     Você está logado ! 
    </div>
    teste fim -->
    
	<!-- Conteudo Inicio  -->
		<div class="container main-container">
		<!-- Conteudo inBox -->
			<div class="notification-boxes row">
			<!-- Box #1 Starts -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-user-md"></i>
						<h4> Doutores Qualificados </h4>
						<p>
							 Corpo técnico qualificado, 
						</p>
						<a href="/pagina/medicos" class="btn btn-transparent">Saiba Mais...</a>
					</div>
				</div>
			<!-- Box #1 Ends -->
			<!-- Box #2 Starts -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-stethoscope"></i>
						<h4>Dicas de Saúde</h4>
						<p>
							Dicas de saúde, para você e sua família.
						</p>
						<a href="/pagina/noticias" class="btn btn-transparent">Saiba Mais...</a>
					</div>
				</div>
			<!-- Box #2 Ends -->
			<!-- Box #3 Starts -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-flask"></i>
						<h4>Loboratório de Analise Clinicas </h4>
						<p>
							Teste e analise clínicas em laborátório especializados fazer seu exame
						</p>
						<a href="/pagina/examesLab" class="btn btn-transparent">Saiba Mais...</a>
					</div>
				</div>
			<!-- Box #3 Ends -->
			<!-- Box #4 Starts -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box">
						<i class="fa fa-comments-o"></i>
						<h4>Clinic News</h4>
						<p>
							Lorem ipsum dolorit amet consetur adipiscing Morbi sollicitudin just non odio molestie.
						</p>
						<a href="/pagina/noticias" class="btn btn-transparent">Read More</a>
					</div>
				</div>
			<!-- Box #4 Ends -->
			</div>
		<!-- Conteudo inBox Fim -->
		<!-- Conteudo Section -->
			<section class="welcome-area">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<h2 class="main-heading1 lite">We Offer Fast &amp; Reliable</h2>
						<h2 class="main-heading2">Medical &amp; Healthcare Needs</h2>
						<p>
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content.
						</p>
						<p>
							Making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						</p>
					</div>
					<div class="col-md-6 col-xs-12">
						<img src="../images/image1.jpg" alt="image" class="img-responsive img-style1">
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
				<h2><span class="lite">Meet Our</span> Doctors</h2>
				<p>
					Making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.
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
								<h5>Dr. Tom Smith Bert</h5>
								<p class="designation">Surgeon</p>
								<p class="divider"><i class="fa fa-plus-square"></i></p>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since type specimen book.
								</p>
							</div>							
							<a href="/pagina/medicos" class="btn btn-transparent inverse text-uppercase">Book An Appointment</a>
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
								<h5>Dr. Tom Smith Bert</h5>
								<p class="designation">Surgeon</p>
								<p class="divider"><i class="fa fa-plus-square"></i></p>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since type specimen book.
								</p>
							</div>							
							<a href="/pagina/medicos" class="btn btn-transparent inverse text-uppercase">Book An Appointment</a>
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
								<h5>Dr. Tom Smith Bert</h5>
								<p class="designation">Surgeon</p>
								<p class="divider"><i class="fa fa-plus-square"></i></p>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since type specimen book.
								</p>
							</div>							
							<a href="/pagina/medicos" class="btn btn-transparent inverse text-uppercase">Book An Appointment</a>
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
								<h5>Dr. Tom Smith Bert</h5>
								<p class="designation">Surgeon</p>
								<p class="divider"><i class="fa fa-plus-square"></i></p>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since type specimen book.
								</p>
							</div>							
							<a href="/pagina/medicos" class="btn btn-transparent inverse text-uppercase">Book An Appointment</a>
						</div>
					</div>
				<!-- Doctor Bio #4 Ends -->
				</div>
			</div>
		<!-- Doctors Container Fim -->
		</section>
	<!-- Conteudo Section Doctors Fim -->
	<!-- Main Container Starts -->
	<div class="container">
		<!-- Conteudo Noticias/Departamentos -->
			<div class="row">
			<!-- Latest News Section Starts -->
				<section class="col-md-8 col-xs-12">
					<div class="main-block1">
						<h2 class="main-heading1 lite">Latest</h2>
						<h2 class="main-heading2">Tips &amp; News</h2>
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
												<img src="../images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
												<div class="inner">
													<h5>
														<a href="#"> 111Latest News Post Heading</a>
													</h5>
													<ul class="list-unstyled list-inline post-meta">
														<li>
															<i class="fa fa-calendar"></i> Sept 25, 2015
														</li>
														<li><a href="#">
															<i class="fa fa-comments-o"></i> 10
														</a></li>
													</ul>
													<p>
														Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker....
													</p>
													<a href="#" class="btn btn-secondary">
														<i class="fa fa-arrow-circle-right"></i>
														Read More
													</a>
												</div>
											</div>
										<!-- News Post Ends -->
										</div>
										<div class="col-sm-6 col-xs-12">
										<!-- News Post Starts -->
											<div class="news-post-box">
												<img src="../images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
												<div class="inner">
													<h5>
														<a href="#"> 111 Latest Tip Post Heading</a>
													</h5>
													<ul class="list-unstyled list-inline post-meta">
														<li>
															<i class="fa fa-calendar"></i> Sept 15, 2015
														</li>
														<li><a href="#">
															<i class="fa fa-comments-o"></i> 10
														</a></li>
													</ul>
													<p>
														Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker....
													</p>
													<a href="#" class="btn btn-secondary">
														<i class="fa fa-arrow-circle-right"></i> 
														Read More
													</a>
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
												<img src="../images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
												<div class="inner">
													<h5>
														<a href="#">Latest News Post Heading</a>
													</h5>
													<ul class="list-unstyled list-inline post-meta">
														<li>
															<i class="fa fa-calendar"></i> Sept 25, 2015
														</li>
														<li><a href="#">
															<i class="fa fa-comments-o"></i> 10
														</a></li>
													</ul>
													<p>
														Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker....
													</p>
													<a href="#" class="btn btn-secondary">
														<i class="fa fa-arrow-circle-right"></i>
														Read More
													</a>
												</div>
											</div>
										<!-- News Post Ends -->
										</div>
										<div class="col-sm-6 col-xs-12">
										<!-- News Post Starts -->
											<div class="news-post-box">
												<img src="../images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
												<div class="inner">
													<h5>
														<a href="#">Latest Tip Post Heading</a>
													</h5>
													<ul class="list-unstyled list-inline post-meta">
														<li>
															<i class="fa fa-calendar"></i> Sept 15, 2015
														</li>
														<li><a href="#">
															<i class="fa fa-comments-o"></i> 10
														</a></li>
													</ul>
													<p>
														Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker....
													</p>
													<a href="#" class="btn btn-secondary">
														<i class="fa fa-arrow-circle-right"></i> 
														Read More
													</a>
												</div>
											</div>
										<!-- News Post Ends -->
										</div>
									</div>

								</div>
							<!-- Slide #2 Ends -->
							</div>
						<!-- Wrapper for Slides Ends -->
						<!-- Painel Control -->
							<a class="left carousel-control" href="#news-carousel" role="button" data-slide="prev">
								<span class="fa fa-angle-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#news-carousel" role="button" data-slide="next">
								<span class="fa fa-angle-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						<!-- Painel Control Fim -->
						</div>
					<!-- Latest News Carousel Ends -->
					</div>
				</section>
			<!-- Latest News Section Ends -->
			<!-- Departamentos aside Starts -->
				<aside class="col-md-4 col-xs-12">
					<div class="main-block1">
						<h2 class="main-heading1 lite">Medical</h2>
						<h2 class="main-heading2">Departments</h2>
					<!-- Accordion Starts -->
						<div class="panel-group" id="accordion">
						<!-- Accordion #1 Starts -->
							<div class="panel">
							<!-- Panel Heading Starts -->
								<div class="panel-heading">
									<h5 class="panel-title">
										<i class="icon fa fa-medkit"></i>
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
											Primary Health Care
										</a>
									</h5>
								</div>
							<!-- Panel Heading Ends -->
							<!-- Panel Body Starts -->
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="panel-body">
										<p>
											Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
										</p>
										<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
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
										<i class="icon fa fa-user-md"></i>
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
											Diagnosis With Precise
										</a>
									</h5>
								</div>
							<!-- Panel Heading Ends -->
							<!-- Panel Body Starts -->
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
										</p>
										<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
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
										<i class="icon fa fa-scissors"></i>
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
											Major Surgery
										</a>
									</h5>
								</div>
							<!-- Panel Heading Ends -->
							<!-- Panel Body Starts -->
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
										</p>
										<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
									</div>
								</div>
							<!-- Panel Body Ends -->
							</div>
						<!-- Accordion #3 Ends -->
						<!-- Accordion #4 Starts -->
							<div class="panel">
							<!-- Panel Heading Starts -->
								<div class="panel-heading">
									<h5 class="panel-title">
										<i class="icon fa fa-wheelchair"></i>
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
											Outpatient Rehabilitation
										</a>
									</h5>
								</div>
							<!-- Panel Heading Ends -->
							<!-- Panel Body Starts -->
								<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
										</p>
										<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
									</div>
								</div>
							<!-- Panel Body Ends -->
							</div>
						<!-- Accordion #4 Ends -->
						<!-- Accordion #5 Starts -->
							<div class="panel">
							<!-- Panel Heading Starts -->
								<div class="panel-heading">
									<h5 class="panel-title">
										<i class="icon fa fa-heartbeat"></i>
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
											Cardiac Clinic
										</a>
									</h5>
								</div>
							<!-- Panel Heading Ends -->
							<!-- Panel Body Starts -->
								<div id="collapse5" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
										</p>
										<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
									</div>
								</div>
							<!-- Panel Body Ends -->
							</div>
						<!-- Accordion #5 Ends -->
						<!-- Accordion #6 Starts -->
							<div class="panel">
							<!-- Panel Heading Starts -->
								<div class="panel-heading">
									<h5 class="panel-title">
										<i class="icon fa fa-stethoscope"></i>
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
											Ophthalmology
										</a>
									</h5>
								</div>
							<!-- Panel Heading Ends -->
							<!-- Panel Body Starts -->
								<div id="collapse6" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
										</p>
										<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
									</div>
								</div>
							<!-- Panel Body Ends -->
							</div>
						<!-- Accordion #6 Ends -->
						<!-- Accordion #7 Starts -->
							<div class="panel">
							<!-- Panel Heading Starts -->
								<div class="panel-heading">
									<h5 class="panel-title">
										<i class="icon fa fa-ambulance"></i>
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
											24x7 Ambulance 
										</a>
									</h5>
								</div>
							<!-- Panel Heading Ends -->
							<!-- Panel Body Starts -->
								<div id="collapse7" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
										</p>
										<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
									</div>
								</div>
							<!-- Panel Body Ends -->
							</div>
						<!-- Accordion #7 Ends -->
						</div>
					<!-- Accordion Ends -->
					</div>
				</aside>
			<!-- Departamentos aside Fim -->
			</div>
		<!-- Content Ends -->
		<!-- Book Appointment Box Starts -->
			<div class="book-appointment-box">
				<div class="row">
					<div class="col-md-5 col-xs-12 text-center-sm text-center-xs">
						<h4>Online Hassle Free Appointment Booking</h4>
						<h3><i class="fa fa-phone-square"></i> +1 874 801 8014</h3>
					</div>
					<div class="col-md-4 col-xs-12 text-center-sm text-center-xs">
						<a href="doctor-profile.html" class="btn btn-main text-uppercase">Book your Appointment</a>
					</div>
					<div class="col-md-3 col-xs-12 hidden-sm hidden-xs">
						<div class="box-img">
							<img src="../images/appointment-booking-img1.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		<!-- Book Appointment Box Ends -->
		</div>
	<!-- Conteudo Noticias/Departamentoss Fim-->
	@endsection