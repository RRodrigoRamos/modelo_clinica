@extends('layout.template')
@section('title', 'Area Cliente')

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
							<a href="/home" class="navbar-brand">
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
										<a href="/inicio">Início</a>
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
												<a href="/servicos/consultas">Consultas</a>
											</li>
											<li>
												<a href="/servicos/exames">Exames</a>
											</li>
											<li>
												<a href="/servico/agendamento">Agendamentos</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="/pagina/contato"><i class="fa fa-comments"> </i> Fale Conosco</a>
									</li>
									<li>
										<a href="/areaClinte" ><i class="fa fa-user"></i> Área do cliente</a>
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
<div class="container main">

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
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck1" name="dia_da_semana[segunda]" @if(isset($value->dias_da_semana['segunda']) && $value->dias_da_semana['segunda']==true) checked @endif>
  <label class="form-check-label" for="defaultCheck1" >
   Segunda
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck2" name="dia_da_semana[terca]" @if(isset($value->dias_da_semana['terca']) && $value->dias_da_semana['terca']==true) checked @endif>
  <label class="form-check-label" for="defaultCheck2">
    Terça
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck3" name="dia_da_semana[quarta]" @if(isset($value->dias_da_semana['quarta']) && $value->dias_da_semana['quarta']==true) checked @endif>
  <label class="form-check-label" for="defaultCheck3">
    Quarta
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck4" name="dia_da_semana[quinta]" @if(isset($value->dias_da_semana['quinta']) && $value->dias_da_semana['quinta']==true) checked @endif>
  <label class="form-check-label" for="defaultCheck4">
    Quinta
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck5" name="dia_da_semana[sexta]" @if(isset($value->dias_da_semana['sexta']) && $value->dias_da_semana['sexta']==true) checked @endif>
  <label class="form-check-label" for="defaultCheck5">
    Sexta
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="true" id="defaultCheck6" name="dia_da_semana[sabado]" @if(isset($value->dias_da_semana['sabado']) && $value->dias_da_semana['sabado']==true) checked @endif>
  <label class="form-check-label" for="defaultCheck6">
    Sabado
  </label>
</div>
  
    <input type="submit" name="formSubmit" value="Submit" />
</form>
</div>	
@endsection