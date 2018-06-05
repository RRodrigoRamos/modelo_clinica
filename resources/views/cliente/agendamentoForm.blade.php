@extends('layout.templateAdmin')
@section('script')
<script type="text/javascript">
$('.medicos').click(function(){
gerar_dia_da_semana();
})
$('.select_dia_semanal').click(function(){
gerar_data();
})
function gerar_dia_da_semana(){
var data2;
$('.select_dia_semanal').html('');
$('.select_dia_semanal').append($("<option>").attr('value',"").attr('disabled',"disabled").attr('selected',"true").text("Selecione:"));
$.ajax({
  url: "http://127.0.0.1:8000/areaCliente/horario/"+$('.medicos option:selected').val(),
  method : 'GET',
  data : data2,
  dataType : 'JSON',
  success : function (data2) {
$.each(data2.dias_da_semana,function (index, value) { 
$('.select_dia_semanal').append($("<option>").attr('value',index).text(index+' / '+data2.horario_inicio+' às '+data2.horario_termino));
});
}
});
}
function gerar_data(){
	var data;
	$('.data_do_agendamento').html('');
$('.data_do_agendamento').append($("<option>").attr('value',"").attr('disabled',"disabled").attr('selected',"true").text("Selecione:"));
$.ajax({
  url: "http://127.0.0.1:8000/areaCliente/dias/"+$('.select_dia_semanal option:selected').val(),
  method : 'GET',
  data : data,
  dataType : 'JSON',
  success : function (data) {

$.each(data,function (index, value) { 
$('.data_do_agendamento').append($("<option>").attr('value',value).text(value));
});

}

});
}

</script>
@endsection
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
										<a href="/areaCliente/infor"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Dúvidas Frequentes</a>
									</li>
									<li class="dropdown active">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-user"></i> &nbsp;{{ Auth::user()->name }} &nbsp;
											<i class="fa fa-caret-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
										<li class="active">
											<a href="/areaCliente/agendamento">
												Agendar &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="/areaCliente/listaAgenda">
												Minha Agenda &nbsp;<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="/areaCliente/meus_dados">
												Meus Dados &nbsp; <i class="fa fa-user"></i>
											</a>
										</li>
										<li>
											<a href="/areaCliente/infor">
												Informativo &nbsp;<i class="fa fa-info-circle" aria-hidden="true"></i>
											</a>
										</li>
										
										
										
										<li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }} &nbsp; <i class="fa fa-sign-out" aria-hidden="true"></i>
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

		
	<div class="container main">
	<br>
		<div class="col-md-12 col-sm-12 col-lg-8 col-xs-12">
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<div class="text"><i class="fa fa-info-circle fa-2x	"></i> &nbsp; Preencha os campos necessário para o AGENDAMENTO!</div>
			</div>
		</div>

		
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
	<form class="form"  method="post" action="/areaCliente/agendamento">
		{!! csrf_field() !!}
		<fieldset>
			<legend>Dados da Consulta</legend>
			<div class="row">
			<div class="form-group col-sm-12 col-md-12 col-lg-6">
				<label for="medico_id" class="control-label">ESCOLHA O MÉDICO &nbsp; / &nbsp; ESPECIALIDADE <span class="obr">*</span></label>
					<div class="form-group">
				<select name="medico_id" class="form-control medicos" required>
					<option value="" disabled="disabled" selected>Selecione</option>
						@foreach($especialidades as $especialidade)
						<option value="{{ $especialidade->id }}"> {{ $especialidade->nome_medico }} &nbsp;/&nbsp; {{ $especialidade->campo}}
						</option>
						@endforeach
				</select>
				<span class="crit"><b>Escolha seu Médico*</b></span>
				</div>
			</div> 
			<div class="form-group col-sm-12 col-md-12 col-lg-6">
				<label for="dia_da_semana" class="control-label"><span class="obr">Dia da Semana*</span></label>
					<select name="dia_da_semana" class="form-control select_dia_semanal" required>
					<option value="" disabled="disabled" selected>Selecione</option>
					</select>
					<span class="crit"><b>De Segunda a Sexta: 7:00h às 18:00h,  e aos Sábados: 07:00h às 12:00h*</b></span>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-12 col-md-12 col-lg-6">
					<label for="tipo_agenda" class="control-label">TIPO DE ATENDIMENTO <span class="obr">*</span></label>
						<div class="form-group">
					<select id="tipo_agenda" name="tipo_agenda" class="form-control" data-live-search="true" required>
						<option value="" disabled="disabled">Selecione</option>
						<option value="Convênio">Convênio</option>
						<option value="Particular" selected="selected">Particular</option>
						<option value="Retorno">Retorno</option>
					</select>
					<span class="crit"><b>Convênios sujeito a avaliação*</b></span>
					</div>
				</div>
				<div class="form-group col-sm-12 col-md-12 col-lg-4">
				<label for="data_do_agendamento" class="control-label"><span class="obr">Data do Agendamento*</span></label>
					<select name="data_do_agendamento" class="form-control data_do_agendamento" required> 
					<option value="" disabled="disabled" selected>Selecione</option>
					</select>
					<span class="crit"><b>Datas disponíveis *</b></span>
				</div>
			</div>
			
				
				
			<div class="row">
			<br>
				<div class="form-group col-sm-6 col-md-6 col-lg-6 col-lg-6">
					<button type="submit" class="btn btn-primary agendar">AGENDAR</button>
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