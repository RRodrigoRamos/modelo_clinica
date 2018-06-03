@extends('layout.templateAdmin')
@section('title', 'Area Médico')
@section('script')
<script>
    var myVar = setInterval(myTimer ,1000);
    function myTimer() {
        var d = new Date(), displayDate;
       if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
          displayDate = d.toLocaleTimeString('pt-BR');
       } else {
          displayDate = d.toLocaleTimeString('pt-BR', {timeZone: 'America/Belem'});
       }
          document.getElementById("hora").innerHTML = displayDate;
    }
</script>
@endsection
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
									<li class="active">
											<a href="/areaMedico/agenda">
												Minha Agenda
											</a>
										</li>
										<li>
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
		<div class="main-banner clienteAgenda">
			<div class="container">
				<h2><span>Lista Agenda</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/areaCliente">Área Médico</a>
					</li>
					<li>Meus Agendamentos</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Conteudo Agenda -->
<div class="container main">
<br>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x	"></i> &nbsp; Meus Agendamentos </div>
        </div>
	</div>
<div class="row">
<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
    <fieldset>

			
          <legend>Lista Agenda Programadas para hoje <div>Hora Atual:<span id="hora"></span><br><span>{{$dia_da_semana_funcao}}</span></div></legend>
	            <table class="table table-striped table-bordered table-condensed table-hover table-responsive">
						 <thead>
						  <tr>
						   <th>Paciente</th>
						   <th>Telefone</th>
						   <th>Tipo</th>
						   <th>Data</th>
						   <th>Status</th>
						   <th>Acao</th>
						  </tr>
						 </thead>
						 <tbody>
						@foreach($agendamentosP as $agendamentosPs)
						  <tr>
     					   <td>{{ $agendamentosPs->nome_do_paciente}}</td>
     					   <td>{{ $agendamentosPs->telefone_do_paciente}}</td>
     					   <td>{{ $agendamentosPs->tipo_agenda}}</td>
						   <td>{{ $agendamentosPs->horario_inicio}} ás {{$agendamentosPs->horario_termino}} / {{ date( 'd/m/Y' , strtotime($agendamentosPs->data_do_agendamento))}}</td>
						   <td>{{ $agendamentosPs->status_agenda}}</td>
						  	<td>
						   <form action="{{ url('areaMedico/acao') }}" method="post">
						   @csrf
						   <input type="hidden" name="id" value="{{$agendamentosPs->id}}">
						   <button class="btn btn-primary">Finalizar Consulta</button>
						   </form>
						   </td>
						  </tr>
                    	@endforeach
						 </tbody>
						</table>
						 <center>
						 @if(sizeof($agendamentosP)==0)
							Nenhum Agendamento Para Hoje
						 @endif
						 </center>
	</fieldset>
<br>
	</div>
<br>
</div>
</div>
	<!-- Conteudo Agenda Fim -->
@endsection