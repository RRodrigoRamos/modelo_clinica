@extends('layout.template')
@section('title', 'INSTITUCIONAL-QUEM SOMOS')
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
											<li class="active">
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
	<!-- Header Ends -->
	<!-- Main Banner Starts -->
		<div class="main-banner one">
			<div class="container">
				<h2><span>Quem somos</span></h2>
			</div>
		</div>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li><a href="/inicio">Início</a></li>
					<li class="">Institucional</li>
					<li class="active">Quem Somos</li>

				</ul>
			</div>
		</div>		
	<!-- Breadcrumb Ends -->
	<!-- Main Container Starts -->
		<div class="container">
		<!-- About Intro Text Starts -->
			<section class="welcome-area about">
				<div class="row">
					<div class="col-md-6 col-xs-12 about-col" align="justify">
						<h3 class="main-heading1">Quem Somos</h3>
						<h3 class="main-heading2"></h3>
						<p>
							A Clínica & Laboratório Hemodiagnóstico foi fundada em 2007 pelas médicas Ana Lucia de Sá Pinto, Fernanda Rodrigues Lima e Beatriz Perondi, contando com a assessoria da fisioterapeuta Silmara Macksud El Khoury.
						</p>
						<p>
							O nosso objetivo sempre foi dar um atendimento individual e diferenciado aos nossos pacientes. Desde então, foram mais de 20.000 atendimentos feitos pela equipe da Clínica Move.
						</p>
						<p>
							Todos os protocolos de atendimento e tratamento adotados pelos profissionais da Clínica Move já foram testados e comprovados, nos dando certeza da eficácia e segurança para empregá-los.
						</p>
						<p>
							A nossa proposta é agregar, em um único espaço, uma equipe multidisciplinar que atue nas doenças do aparelho locomotor e em outras doenças crônicas que possam ser beneficiadas com o exercício físico como terapia.
						</p>
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<ul class="list-unstyled list-style-3">
									<li><a href="/pagina/equipe">Equipe</a></li>
									<li><a href="/pagina/medicos">Médicos</a></li>
									<li><a href="/pagina/unidades">Unidades</a></li>
									<li><a href="/pagina/convenios">Convênios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12 hidden-sm hidden-xs">
						<br><br><br><br><br>
						<img src="../images/about/predio.png" width="100%" height="">
					</div>
				</div>
			</section>
		<!-- About Intro Text Ends -->
		</div>
	<!-- Main Container Ends -->
	<!-- About Featured Section Starts -->
		<section class="about-featured parallax">
			<div class="container">
				<h3 class="lite">Sua Saúde em boas mãos</h3>
				<h2 class="lite"><span>Serviços</span> </h2>
				<ul class="list-unstyled list row">
				<!-- List #1 Starts -->
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-desktop"></i>
						<h4>Clinica médica e Especializada</h4>
					</li>
				<!-- List #1 Ends -->
				<!-- List #2 Starts -->
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-eye"></i>
						<h4>Exames laboratoriais </h4>
					</li>
				<!-- List #2 Ends -->
				<!-- List #3 Starts -->
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-ambulance"></i>
						<h4>Raio - X</h4>					
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-desktop"></i>
						<h4>Mamografia Digital</h4>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-desktop"></i>
						<h4>Densitometria Óssea</h4>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-desktop"></i>
						<h4>Ultrassonografia 3D/4D</h4>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-eye"></i>
						<h4>Exames de Sangue </h4>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-eye"></i>
						<h4>Exames de Urina e Fezes</h4>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-desktop"></i>
						<h4>Endoscopia Digestiva alta</h4>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-desktop"></i>
						<h4>Exame Toxicologico/Carteira de Motorista</h4>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12">
						<i class="fa fa-desktop"></i>
						<h4>Tomografia computadorizada</h4>
					</li>


				<p class="text-center"><a href="/areaCliente" class="btn btn-transparent text-uppercase">Agende<i class="fa fa-chevron-right"></i></a></p>
			</div>
		</section>
	<!-- About Featured Section Ends -->
	<!-- Starts -->
		<div class="main-container container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="main-block2 text-justify">
						<h4>Convênios destaques</h4>
						<p>
							Alguns dos convênios mais utilizados pela clínica:
						</p>
					</div>
					<ul class="list-unstyled progress-bar-list">
					<!-- #1 Starts -->
						<li class="row">
							<h6 class="col-md-4 col-xs-12"> SulAmérica</h6>
							<div class="col-md-8 col-xs-12">
								<div class="progress">
									<div class="progress-bar progress-bar-1" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100" style="width: 79%;">
										79%
									</div>
								</div>
							</div>
						</li>
					<!-- #1 Ends -->
					<!-- #2 Starts -->
						<li class="row">
							<h6 class="col-md-4 col-xs-12">Amil</h6>
							<div class="col-md-8 col-xs-12">
								<div class="progress">
									<div class="progress-bar progress-bar-2" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
										95%
									</div>
								</div>
							</div>
						</li>
					<!-- #2 Ends -->					
					<!-- #3 Starts -->
						<li class="row">
							<h6 class="col-md-4 col-xs-12">Amprev</h6>
							<div class="col-md-8 col-xs-12">
								<div class="progress">
									<div class="progress-bar progress-bar-3" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;">
										63%
									</div>
								</div>
							</div>
						</li>
					<!-- #3 Ends -->
					<!-- #4 Starts -->
						<li class="row">
							<h6 class="col-md-4 col-xs-12">Assefaz</h6>
							<div class="col-md-8 col-xs-12">
								<div class="progress">
									<div class="progress-bar progress-bar-4" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
										86%
									</div>
								</div>
							</div>
						</li>
					<!-- #4 Ends -->
					<!-- #5 Starts -->
						<li class="row">
							<h6 class="col-md-4 col-xs-12">Bradesco</h6>
							<div class="col-md-8 col-xs-12">
								<div class="progress">
									<div class="progress-bar progress-bar-5" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
										74%
									</div>
								</div>
							</div>
						</li>
					<!-- #5 Ends -->					
					<!-- #6 Starts -->
						<li class="row">
							<h6 class="col-md-4 col-xs-12">Caixa saúde</h6>
							<div class="col-md-8 col-xs-12">
								<div class="progress">
									<div class="progress-bar progress-bar-6" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
										82%
									</div>
								</div>
							</div>
						</li>
					<!-- #6 Ends -->					
					<!-- #7 Starts -->
						<li class="row">
							<h6 class="col-md-4 col-xs-12">E-vida(eletronorte)</h6>
							<div class="col-md-8 col-xs-12">
								<div class="progress">
									<div class="progress-bar progress-bar-7" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
										55%
									</div>
								</div>
							</div>
						</li>
					<!-- #7 Ends -->
					</ul>
					<a href="/pagina/convenios"><button class="btn btn-success text-center">Lista de Convênios</button></a>
				</div>
				<div class="col-sm-6 col-xs-12">
				<p class="visible-xs"><br></p>
				<!-- Tabs Starts -->
					<div class="tabs-wrap-2">
					<!-- Nav Tabs Starts -->
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab-1" aria-controls="tab-1" data-toggle="tab">
									Sobre
								</a>
							</li>
							<li>
								<a href="#tab-2" aria-controls="tab-2" data-toggle="tab">
									Visão e Missão
								</a>
							</li>
							<li>
								<a href="#tab-3" aria-controls="tab-3" data-toggle="tab">
									Valores
								</a>
							</li>
						</ul>
					<!-- Nav Tabs Ends -->
					<!-- Tab Content Starts -->
						<div class="tab-content">
						<!-- Tab #1 Starts -->
							<div class="tab-pane fade in active" id="tab-1">
								<img src="../images/image2.jpg" alt="Image" class="img-responsive img-center-sm img-center-xs">
								<h4 align="center">Sobre</h4>
								<p align="justify">Disponibilizando uma equipa médice multidisciplinar que procura com os conhecimentos científicos mais recentes propor soluções dentro dos padrões de qualidade e ética que sempre pautaram o nosso trabalho.
								</p>
							</div>
						<!-- Tab #1 Ends -->
						<!-- Tab #2 Starts -->
							<div class="tab-pane fade" id="tab-2">
								<img src="../images/image3.jpg" alt="Image" class="img-responsive img-center-sm img-center-xs">
								<h4 align="center">Visão e Missão</h4>
								<p align="justify"><b>Visão: </b> Ser reconhecida como a melhor operadora de planos de saúde do Rio Grande do Sul, através da excelência em atendimento, processos e resultados.
								</p>
								<p align="justify"><b>Missão: </b>Preservar a saúde e a qualidade de vida das pessoas, a partir de um atendimento profissional, ético, humano e personalizado.
								</p>
							</div>
						<!-- Tab #2 Ends -->
						<!-- Tab #3 Starts -->
							<div class="tab-pane fade" id="tab-3">
								<img src="../images/image4.jpg" alt="Image" class="img-responsive img-center-sm img-center-xs">
								<h4 align="center">Valores</h4>
								<p align="justify">Compromisso com o cliente.
								Ética nos negócios.
								Educação e formação de pessoas.
								Disposição e energia positiva.
								Responsabilidade social.
								Respeito e valorização do ser humano.
								Responsabilidade pelos resultados.
								Transparência.
								Qualidade de produtos e serviços.
								</p>	
							</div>
						<!-- Tab #3 Ends -->
						</div>
					<!-- Tab Content Ends -->
					</div>
				<!-- Tabs Ends -->
				</div>
			</div>
		</div>
 <br><br>
@endsection