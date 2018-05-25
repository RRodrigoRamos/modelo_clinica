@extends('layout.templateAdmin')
@section('title', 'Area Cliente')
@section('topoInfor')
			<!-- Informações do Topo site -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							Seja bem vindo, {{ Auth::user()->name }}. Aqui, sua saúde está em boas mãos.
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
							<a href="/areaCliente" class="navbar-brand">
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
										<a href="/areaCliente">Início</a>
									</li>
									<li>
										<a href="/areaCliente/infor"><i class="fa fa-info-circle" aria-hidden="true"></i> Dúvidas Frequentes</a>
									</li>
									<li class="dropdown active">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-user"></i> &nbsp;{{ Auth::user()->name }} 
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li  class="active">
											<a href="/areaCliente/agendamento">
												<i class="fa fa-plus-square" aria-hidden="true"></i> Agendar
											</a>
										</li>
										<li>
											<a href="/areaCliente/listaAgenda">
												Minha Agenda
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
		<div class="main-banner clienteAgenda">
			<div class="container">
				<h2><span>Agendamentos</span></h2>
			</div>
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="/areaCliente">Área Cliente</a>
					</li>
					<li>Agendamentos</li>
				</ul>
			</div>
		</div>
<!-- Banner Cliente Fim-->
<!-- Conteudo Agenda -->


{{ dd($request) }}
	
<div class="container main">
<br>
	<div class="col-md-12 col-sm-12 col-lg-8 col-xs-12">
		<div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x	"></i> &nbsp; Preencha os campos necessário para o AGENDAMENTO!</div>
        </div>
	</div>

	 
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
   <form class="form"  method="post" action="/areaCliente/agendaSalva">
    {!! csrf_field() !!}
    <fieldset>
      <input type="hidden" name="agenda_de" value="CONSULTA">
      <input type="hidden" name="status_id" value="1">
      <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">


          <legend>Dados da Consulta</legend>
          <div class="row">
          <div class="form-group col-sm-12 col-md-12 col-lg-6">
            <label for="medicos_id" class="control-label">Escolhar o Médico / Especialidade <span class="obr">*</span></label>
                <div class="form-group">
              <select name="medicos_id" class="form-control" required>
                  <option value="" disabled="disabled">Selecione</option>
                  	@foreach($especialidades as $especialidade)
                    <option value="{{ $especialidade->id }}"> {{ $especialidade->nome_medico }} / {{ $especialidade->campo}}
                    </option>
                    @endforeach
              </select>
            </div>
          </div> 
          <div class="form-group col-sm-12 col-md-12 col-lg-6">
            <label for="clinica_id" class="control-label">Escolhar Unidade Média <span class="obr">*</span></label>
                <div class="form-group">
                  <select name="clinica_id" class="form-control" data-live-search="true" required>
                  <option value="" disabled="disabled">Selecione</option>
                  	@foreach($clinica as $clinica_escolha)
                    <option value="{{ $clinica_escolha->id }}"> {{ $clinica_escolha->nome }} </option>
                    @endforeach
              </select>
            </div>
            </div>
          </div>
          <div class="row">
	          <div class="form-group col-sm-12 col-md-12 col-lg-4">
	            <label for="tipo_agenda" class="control-label">Tipo de Atendimento <span class="obr">*</span></label>
	                <div class="form-group">
	              <select id="tipo_agenda" name="tipo_agenda" class="form-control" data-live-search="true" required>
	                  <option value="" disabled="disabled">Selecione</option>
	                  <option value="Convênio">Convênio</option>
	                  <option value="Particular" selected="selected">Particular</option>
	                  <option value="Retorno">Retorno</option>
	              </select>
	            </div>
	          </div>
	          <div class="form-group col-sm-6 col-md-6 col-lg-4"">
	            <label for="data_agenda" class="control-label">Data do Agendamento <span class="obr">*</span></label>
	            <input type="date" class="form-control" OnKeyPress="formatar('##/##/####', this)" name="data_agenda" required>
	          </div>
	          <div class="form-group col-sm-6 col-md-6 col-lg-4">
	            <label for="hora_agenda" class="control-label">Hora do Agendamento  <span class="obr">*</span></label>
	            <select name="hora_agenda" class="form-control" required>
                  <option value="" disabled="disabled" selected>Segunda à Sexta de 7:00h às 18:00h</option>
                  <option value="" disabled="disabled">Manhã</option>
                  <option value="7:00h">7:00h</option>
                  <option value="7:30h">7:30h</option>
                  <option value="8:00h">8:00h</option>
                  <option value="8:30h">8:30h</option>
                  <option value="9:00h">9:00h</option>
                  <option value="9:30h">9:30h</option>
                  <option value="10:00h">10:00h</option>
                  <option value="10:30h">10:30h</option>
                  <option value="11:00h">11:00h</option>
                  <option value="11:30h">11:30h</option>
                  <option value="12:00h">12:00h</option>
                  <option value="" disabled="disabled">Tarde</option>
                  <option value="12:30h">12:30h</option>
                  <option value="13:00h">13:00h</option>
                  <option value="13:30h">13:30h</option>
                  <option value="14:00h">14:00h</option>
                  <option value="14:30h">14:30h</option>
                  <option value="15:00h">15:00h</option>
                  <option value="15:30h">15:30h</option>
                  <option value="16:00h">16:00h</option>
                  <option value="16:30h">16:30h</option>
                  <option value="17:00h">17:00h</option>
                  <option value="17:30h">17:30h</option>
                  <option value="18:00h">18:00h</option>
              </select>
	            <span class="obr"> Exeto aos Sábado 7:00h as 12:00h !</span>
	          </div>
	      </div>
        <div class="row">
        <br>
        <div class="modal fade" id="modal-mensagem">
					<div class="modal-dialog">
					    <div class="modal-content">
					           <div class="modal-header">
					              <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
					                 <h4 class="modal-title">AGENDAMENTOS ONLINE</h4>
					             </div>
					             <div class="modal-body">
					                 <p>OBS: Atendimento feito na clinica por Ordem de Chegada, exceto pessoas: Portadoras de Necessidade Especial, Idosos, prioridades amparadas por lei! </p>
					             </div>
					             <div class="modal-footer">
					             	<button type="submit" class="btn btn-primary form-control agendar"> Agendar</button>
					                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					             </div>
					           </div>
					   </div>
					</div>

      		<div class="form-group col-sm-6 col-md-6 col-lg-6 col-lg-6">
      			<button type="button" class="btn btn-primary agendar" data-toggle="modal" data-target="#modal-mensagem">AGENDAR</button>
      		</div>
      	</div>
    </fieldset>
  </form>
  <br>
</div>
<br>
</div>

<!-- Conteudo Agenda Fim -->
@endsection