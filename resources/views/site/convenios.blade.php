@extends('layout.template')
@section('title', 'CONVÊNIOS')
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
<!-- Banner Cliente -->
		<div class="main-banner paginaConvenio">
			<div class="container">
				<h2><span>Convênios</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/inicio">Inicio</a>
					</li>
					<li class="active">Convênios</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Main Container Starts -->
	<div class="container main">
		<br>
		<h2 class="main-heading2 nomargin-top">Nossos Convênios</h2>
		<br>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/aspeb.jpg" alt="Imagem Convênio ACCLINIC ASPEB" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/amil.png" alt="Imagem Convênio ACCLINIC AMIL" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/assefaz.png" alt="Imagem Convênio ACCLINIC ASSEFAZ" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/bradesco.png" alt="Imagem Convênio ACCLINIC Bradesco" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/capesesp.png" alt="Imagem Convênio ACCLINIC CAPESESP" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/amprev.jpg" alt="Imagem Convênio ACCLINIC Amprev" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/casaembrapa.png" alt="Imagem Convênio ACCLINIC Casa Emprapa" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/caixa.png" alt="Imagem Convênio ACCLINIC Caixa saúde" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/cassi.png" alt="Imagem Convênio ACCLINIC CASSI" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/correios.png" alt="Imagem Convênio ACCLINIC Correios saúde " title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/evida.png" alt="Imagem Convênio ACCLINIC E-Vida" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/gama.jpg" alt="Imagem Convênio ACCLINIC GAMA" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/geap.png" alt="Imagem Convênio ACCLINIC GEAP" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/sao-camilo.png" alt="Imagem Convênio ACCLINIC São Camilo" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/sulamerica.png" alt="Imagem Convênio ACCLINIC Sulamerica" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/unimed-seguro.png" alt="Imagem Convênio ACCLINIC Unimed Seguro" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/brasilvida.jpg" alt="Imagem Convênio ACCLINIC Brasil vida" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/capesaude.jpg" alt="Imagem Convênio ACCLINIC Capesaude" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/casf.jpg" alt="Imagem Convênio ACCLINIC Casf" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/centerpax.jpg" alt="Imagem Convênio ACCLINIC Center Pax" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/centralmed.jpg" alt="Imagem Convênio ACCLINIC Central Med" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/clinicapopular.jpg" alt="Imagem Convênio ACCLINIC Clinica Popular" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/conab.jpg" alt="Imagem Convênio ACCLINIC conab" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/doadoresangue.jpg" alt="Imagem Convênio ACCLINIC associação dos doadores de Sangue" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/domestilar.jpg" alt="Imagem Convênio ACCLINIC Domestilar" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/nutriama.jpg" alt="Imagem Convênio ACCLINIC nutriama" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/engeclin.gif" alt="Imagem Convênio ACCLINIC EngeCLin" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/funsantarita.gif" alt="Imagem Convênio ACCLINIC Fundação santa Rita" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/globosaude.jpg" alt="Imagem Convênio ACCLINIC gloco saúde" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/goldenmed.jpg" alt="Imagem Convênio ACCLINIC Golden Med" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/gpfortaleza.png" alt="Imagem Convênio ACCLINIC Grupo Fortaleza" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/ijoma.png" alt="Imagem Convênio ACCLINIC Ijoma" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/maissaude.png" alt="Imagem Convênio ACCLINIC Mais Saúde" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/medicare.png" alt="Imagem Convênio ACCLINIC medicare" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/medisaude.jpg" alt="Imagem Convênio ACCLINIC Medi saúde" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/nipomed.jpg" alt="Imagem Convênio ACCLINIC nipomed" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/planassite.jpg" alt="Imagem Convênio ACCLINIC Plan Assiste" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/proativa.png" alt="Imagem Convênio ACCLINIC Pro ativa" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/sesc.png" alt="Imagem Convênio ACCLINIC Sesc" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/sesi.jpg" alt="Imagem Convênio ACCLINIC Sesi" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/sindrap.png" alt="Imagem Convênio ACCLINIC Sindrap" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/sinsepeap.jpg" alt="Imagem Convênio ACCLINIC Sinsepeap" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-2 col-sm col-xs-12">
				<div class="thumbnail">
 					<img class="img-responsive" src="../images/convenios/valesaude.jpg" alt="Imagem Convênio ACCLINIC Vale saúde" title="Mensagem aqui! Ao passar o mouse"/>
 					
 				</div>
			</div>
		</div>
	
	</div>
	<!-- Main Container Ends -->

@endsection