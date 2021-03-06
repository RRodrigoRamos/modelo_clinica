@extends('layout.template')
@section('title', 'INSTITUCIONAL-EQUIPE')
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
											<li class="active">
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
	<!-- Main Banner Starts -->
		<div class="main-banner paginaEquipe">
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
					<li class="active">Equipe</li>
				</ul>
			</div>
		</div>	
	<!-- Breadcrumb Ends -->	
	<!-- Main Container Starts -->
		<div class="container main-container">
			<h2 class="main-heading2 nomargin-top">Equipe</h2>
		<!-- Gallery Grid Starts -->
			<div class="gallery-grid">
				<div class="row">
				<!-- Gallery Image #1 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="../images/gallery/thumb/gallery-thumb-img1.jpg" alt="Gallery Image" class="img-responsive">
							<div class="overlay">
								<a href="../images/gallery/big/gallery-big-img1.jpg" class="btn btn-secondary zoom"><i class="fa fa-image"></i></a>
							</div>
						</div>
					</div>
				<!-- Gallery Image #1 Ends -->
				<!-- Gallery Image #2 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="../images/gallery/thumb/gallery-thumb-img2.jpg" alt="Gallery Image" class="img-responsive">
							<div class="overlay">
								<a href="../images/gallery/big/gallery-big-img2.jpg" class="btn btn-secondary zoom"><i class="fa fa-image"></i></a>
							</div>
						</div>
					</div>
				<!-- Gallery Image #2 Ends -->
				<!-- Gallery Image #3 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="../images/gallery/thumb/gallery-thumb-img3.jpg" alt="Gallery Image" class="img-responsive">
							<div class="overlay">
								<a href="../images/gallery/big/gallery-big-img3.jpg" class="btn btn-secondary zoom"><i class="fa fa-image"></i></a>
							</div>
						</div>
					</div>
				<!-- Gallery Image #3 Ends -->
				<!-- Gallery Image #4 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="../images/gallery/thumb/gallery-thumb-img4.jpg" alt="Gallery Image" class="img-responsive">
							<div class="overlay">
								<a href="../images/gallery/big/gallery-big-img4.jpg" class="btn btn-secondary zoom"><i class="fa fa-image"></i></a>
							</div>
						</div>
					</div>
				<!-- Gallery Image #4 Ends -->
				<!-- Gallery Image #5 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="../images/gallery/thumb/gallery-thumb-img5.jpg" alt="Gallery Image" class="img-responsive">
							<div class="overlay">
								<a href="../images/gallery/big/gallery-big-img5.jpg" class="btn btn-secondary zoom"><i class="fa fa-image"></i></a>
							</div>
						</div>
					</div>
				<!-- Gallery Image #5 Ends -->
				<!-- Gallery Image #6 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="../images/gallery/thumb/gallery-thumb-img6.jpg" alt="Gallery Image" class="img-responsive">
							<div class="overlay">
								<a href="../images/gallery/big/gallery-big-img6.jpg" class="btn btn-secondary zoom"><i class="fa fa-image"></i></a>
							</div>
						</div>
					</div>
				<!-- Gallery Image #6 Ends -->
				<!-- Gallery Image #7 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="../images/gallery/thumb/gallery-thumb-img7.jpg" alt="Gallery Image" class="img-responsive">
							<div class="overlay">
								<a href="../images/gallery/big/gallery-big-img7.jpg" class="btn btn-secondary zoom"><i class="fa fa-image"></i></a>
							</div>
						</div>
					</div>
				<!-- Gallery Image #7 Ends -->
				<!-- Gallery Image #8 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="../images/gallery/thumb/gallery-thumb-img8.jpg" alt="Gallery Image" class="img-responsive">
							<div class="overlay">
								<a href="../images/gallery/big/gallery-big-img8.jpg" class="btn btn-secondary zoom"><i class="fa fa-image"></i></a>
							</div>
						</div>
					</div>
				<!-- Gallery Image #8 Ends -->
				<!-- Gallery Image #9 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="../images/gallery/thumb/gallery-thumb-img9.jpg" alt="Gallery Image" class="img-responsive">
							<div class="overlay">
								<a href="../images/gallery/big/gallery-big-img9.jpg" class="btn btn-secondary zoom"><i class="fa fa-image"></i></a>
							</div>
						</div>
					</div>
				<!-- Gallery Image #9 Ends -->
				</div>
			</div>
		<!-- Gallery Grid Ends -->
		<!-- Pagination Starts -->
			<div class="pagination-wrap text-center">
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
					</li>
					<li class="active"><span>1</span></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>
						<a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
					</li>
				</ul>
			</div>
		<!-- Pagination Ends -->
		</div>
	<!-- Main Container Ends -->
	<!-- Footer Starts -->
@endsection
@section('ConteudoSecundario')

@endsection