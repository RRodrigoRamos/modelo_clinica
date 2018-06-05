@extends('layout.templateAdmin')
@section('title', 'Administração')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  Bem vindo a sua pagina de Administração !
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
							<a href="/areaAdmin" class="navbar-brand">
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
										<a href="/areaAdmin">Início</a>
									</li>
									<li>
											<a href="/admin/agendamentos">
												Lista Agenda
											</a>
									</li>
									<li>
											<a href="/admin/medicos">
												Médicos <Cad class=""></Cad>
											</a>
									</li>
									<li>
											<a href="/admin/convenios">
												Convênios Cad.
											</a>
									</li>
									<li>
											<a href="/admin/atendentes">
												Atendentes Cad.
											</a>
									</li>
									<li>
											<a href="/admin/pacientes">
												 Pacientes Cad. 	
											</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											{{ Auth::user() }} 
											<i class="fa fa-user" aria-hidden="true"></i>
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li class="active">
											<a href="/admin/meus_dados">
												 Meus Dados <i class="fa fa-user" aria-hidden="true"></i>	
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
    <div class="main-banner index_1">
      <div class="container">
        <h2><span>Meus Dados</span></h2>
      </div>
    </div>
    <div class="breadcrumb">
      <div class="container">
        <ul class="list-unstyled list-inline">
          <li>
            <a href="/areaAdmin">Area Administrativa</a>
          </li>
          <li class="active">
            Edição
          </li>
        </ul>
      </div>
    </div>
<!-- Banner Cliente Fim-->
<br>
<fieldset>
	<legend>Atendentes Clinica</legend>

<form action="{{url('/admin/atendentes')}}" method="post">
@csrf
Nome:
<input type="text" name="name" required>
<br>
Nome Social:
<input type="text" name="name_social" required>
<br>
Email:
<input type="email" name="email" required>
<br>
Sexo:
<input type="text" name="sexo" required>
<br>
Data de Nascimento:
<input type="date" name="data_nasc" required>
<br>
Telefone:
<input type="text" name="telefone" required>
<br>
Senha:
<input type="password" name="password" required>
<br>

<button type="submit" class="btn" value="Cadastrar"></button>
</form>
<br>
</fieldset>
<br>
@endsection