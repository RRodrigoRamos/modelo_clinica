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
									<li class="active">
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
										<li>
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
	<!-- Banner Cliente -->
    <div class="main-banner index_1">
      <div class="container">
        <h2><span>Convênios Clinica</span></h2>
      </div>
    </div>
    <div class="breadcrumb">
      <div class="container">
        <ul class="list-unstyled list-inline">
          <li>
            <a href="/areaAdmin">Area Administrativa</a>
          </li>
          <li class="active">
          	Convênios
          </li>
         </ul>
      </div>
    </div>
    <div class="col-lg-1">
    </div>
    <br>
      <div class="form-group col-sm-12 col-md-12 col-lg-10 col-xs-12">
    	<fieldset>
         <legend>convenios</legend>
              <table class="table table-striped table-bordered table-condensed table-hover table-responsive">
             <thead>
              <tr>
               <th>Nome</th>
               <th>Tipo de Plano</th>
               <th>Ação</th>
              </tr>
             </thead>
             <tbody>
            @foreach($convenios as $convenios)
              <tr>
                <td>{{ $convenios->nome_convenio}}</td>
                <td>{{ $convenios->tipo_plano}}</td>
                <td><a href="{{url('admin/convenio/'.$convenios->id)}}"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a></td>
              </tr>
             @endforeach
             </tbody>
            </table>
					
            {{$links}}
         </fieldset>
  </div>
@endsection
@section('ConteudoPrincipal')
@endsection

	@section('ConteudoSecundario')
<div class="col-lg-2">
  </div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar Convenio</button>
@component('admin.components.modal') 
@slot('form')
@component('admin.components.formulario')
	@slot('url')
	conveniosalvar
	@endslot
	@slot('formulario')
	<fieldset>
          <legend>Cadastro de Convênio</legend>
            <div class="row">
              <div class="form-group col-sm-6 col-md-6 col-lg-6"	>
                    <label for="nome_convenio" class="control-label">Nome de Convenio<span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="nome_convenio" id="nome_convenio" placeholder="Nome Convenio" required autofocus>
              </div>
							 <div class="form-group col-sm-6 col-md-6 col-lg-6"	>
                    <label for="name" class="control-label">Tipo de Plano <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="tipo_plano" id="tipo_plano" placeholder="Tipo de Plano" required autofocus>
              </div>
          </div>
    </fieldset>
	@endslot
@endcomponent
	@endslot
@endcomponent
@endsection