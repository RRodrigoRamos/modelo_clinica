<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="ACClinic - Sistema de Monitoriramente de horários e atendimento de agendamento online de consultas clinicas, com o objetivo de aproximar o cliente a clinica">
		<meta name="keywords" content="Agendamento, Consulta, Agenda Consulta, consulta, Clínica Médica, especialidades, exames, procedimentos, laboratorios, lab, analise clinicas, consultas, analise e diagnostico, diagnosticos, dicas saúde, doutores, doutor, serviços lab, serviços exames.">
		 <!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">

		<meta name="author" content="Rodrigo Ramos, Leandro lima, Anderson Sanches">
		<title>::ACClinic:: @yield('title') </title>
		
		<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{ asset('js/plugins/camera/css/camera.css')}}" rel="stylesheet">
		<link href="{{ asset('css/style.css')}}" rel="stylesheet">
		<link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/fav/favIcon.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/fav/favIcon.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/fav/favIcon.png">
		<link rel="apple-touch-icon-precomposed" href="../images/fav/favIcon.png">
		<link rel="shortcut icon" href="../images/fav/favIcon.png">
	</head>
	<body>
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
							<a href="/home" class="navbar-brand">
								<img src="{{asset('/images/fav/logo.png')}}	" alt="ACClinic - Agendamentos de Consultas Clinicas e Exames" class="imgLogo">
							</a>
						<!-- Logo Fim -->
					</div>
					<!-- Menu Infor Fim -->
						<!-- Navbar Header Ends -->
						<!-- Navbar Collapse Starts -->
							<div class="navbar-collapse collapse">					
								<ul class="nav navbar-nav navbar-right">
								                                <li>
                                    <a href="/inicio">
                                        <i class="fa fa-angle-right"></i> 
                                        Voltar a Pagina Inicial
                                    </a> 
                                </li>
									<li>
										<a href="/admin/agendamentos">Lista de Agendamentos</a>
									</li>
									<li>
										<a href="/admin/medicos"> Médicos Cadastrado </a>
									</li>		
									<li>
										<a href="/admin/atendentes"> Atendentes Cadastrados </a>
									</li>
									<li>
										<a href="/admin/pacientes"> Pacientes Cadastrados </a>
									</li>
                                <li> <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('SAIR') }} <i class="fa fa-sign-out fa-1x" aria-hidden="true"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </li>
                        </div>
								</ul>
							</div>
							</li>
					</div>
		</nav>
			<!-- Navbar Menu Fim -->
			</div>
		<!-- Conteudo Inicial Fim -->
		</header>
		 
	<!-- Topo Fim -->
	@yield('ConteudoPrincipal')
	@yield('ConteudoSecundario')
	
	<!-- Template JS Files -->
<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js"></script>	
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/plugins/camera/js/jquery.mobile.customized.min.js"></script>
	<script src="../js/plugins/camera/js/jquery.easing.1.3.js"></script>
	<script src="../js/plugins/camera/js/camera.min.js"></script>	
	<script src="../js/plugins/camera/js/shuffle/jquery.shuffle.modernizr.min.js"></script>
	<script src="../js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="../js/custom.js"></script>
	</body>
</html>