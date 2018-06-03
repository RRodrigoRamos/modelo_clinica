@extends('layout.templateAdmin')
@section('title', 'Area Médico')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							  Bem vindo {{ Auth::user()->medico->name }} a sua pagina.
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
							<a href="/areaMedico" class="navbar-brand">
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
										<a href="/areaMedico">Início</a>
									</li>
									<li>
											<a href="/areaMedico/agenda">
												Minha Agenda
											</a>
										</li>
										<li class="active">
											<a href="/areaMedico/medicoHorarios">
												Meus Horários
											</a>
										</li>
										<li>
											<a href="/areaMedico/consultarPaciente">
												Consulta Paciente
											</a>
										</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											{{ Auth::user()->medico->name }} 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li>
											<a href="/areaMedico/meus_dados">
												Meus Dados
											</a>
										</li>
										<li> 
											<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }} <i class="fa fa-sign-out"></i>
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
		<div class="main-banner horarios">
			<div class="container">
				<h2><span>Horário</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/areaCliente">Área Médico</a>
					</li>
					<li>Horários</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<br>
<div class="container main">
<div class="col-8">
	<fieldset>
		<legend>Meus Horários</legend>
		<form id="logout-form" class="form-horizontal"action="{{ route('medico.horario') }}" method="POST">
	@csrf
  	<div class="form-group">
    	<label for="exampleInputEmail1">Horario de Inicio</label>
    	<input type="text" class="form-control" value="@if(isset($value->horario_inicio)) {{$value->horario_inicio}} @endif" name="horario_inicio" id="exampleInputEmail1" aria-describedby="v" placeholder="00:00">
  	</div>
	@csrf

  	<div class="form-group">
    	<label for="exampleInputEmail1">Horario de Termino</label>
    	<input type="text" class="form-control" value="@if(isset($value->horario_inicio)) {{$value->horario_termino}} @endif" name="horario_termino" id="exampleInputEmail1" aria-describedby="v" placeholder="00:00">
  	</div>
	<div class="form-check">
  		<input class="form-check-input" type="checkbox" value="true" id="defaultCheck1" name="dia_da_semana[segunda]" @if(!empty($value))) @if(isset($value->dias_da_semana['segunda']) && $value->dias_da_semana['segunda']==true) checked @endif @endif>
  	<label class="form-check-label" for="defaultCheck1" >
   Segunda
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck2" name="dia_da_semana[terca]"  @if(!empty($value))) @if(isset($value->dias_da_semana['terca']) && $value->dias_da_semana['terca']==true) checked @endif @endif>
  <label class="form-check-label" for="defaultCheck2">
    Terça
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck3" name="dia_da_semana[quarta]" @if(!empty($value)))@if(isset($value->dias_da_semana['quarta']) && $value->dias_da_semana['quarta']==true) checked @endif @endif >
  <label class="form-check-label" for="defaultCheck3">
    Quarta
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck4" name="dia_da_semana[quinta]" @if(!empty($value))) @if(isset($value->dias_da_semana['quinta']) && $value->dias_da_semana['quinta']==true) checked @endif @endif>
  <label class="form-check-label" for="defaultCheck4">
    Quinta
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck5" name="dia_da_semana[sexta]" @if(!empty($value))) @if(isset($value->dias_da_semana['sexta']) && $value->dias_da_semana['sexta']==true) checked @endif @endif>
  <label class="form-check-label" for="defaultCheck5">
    Sexta
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck6" name="dia_da_semana[sabado]" @if(!empty($value))) @if(isset($value->dias_da_semana['sabado']) && $value->dias_da_semana['sabado']==true) checked @endif @endif>
  <label class="form-check-label" for="defaultCheck6">
    Sabado
  </label>
</div>
  
    <input type="submit" name="formSubmit" value="Submit" />
</form>
</fieldset>
</div>	
@endsection