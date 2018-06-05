@extends('layout.templateAdmin')
@section('title', 'Area Administração')
@section('topoInfor')
      <!-- Informações do Topo site -->
        <div class="top-bar hidden-sm hidden-xs">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              Seja bem vindo Área Administração.
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
                <img src="{{ asset('../images/fav/logo.png')}}" alt="ACClinic - Agendamentos de Consultas Clinicas e Exames" class="imgLogo">
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
                  <li class="active">
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
                    <li>
                      <a href="/admin/meus_dados">
                         Meus Dados <i class="fa fa-user" aria-hidden="true"></i> 
                      </a>
                    </li>
                    <li>
                      <a href="/admin/altera_senha">
                         Alterar Senha <i class="fa fa-cogs" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/infor">
                         Informativo <i class="fa fa-info-circle" aria-hidden="true"></i>
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
        <h2><span>Edição</span></h2>
      </div>
    </div>
    <div class="breadcrumb">
      <div class="container">
        <ul class="list-unstyled list-inline">
          <li>
            <a href="/areaAdmin">Area Administrativa</a>
          </li>
          <li>
            <a href="/admin/medicos"> Medicos </a>
          </li>
          <li class="active">Edição</li>
        </ul>
      </div>
    </div>
<!-- Banner Cliente Fim-->
<!-- Main Container Starts -->
<div class="container main">
  @if ($errors->any())
    <br>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <br>
    <div class="col-lg-1">
    </div>
  <div class="col-lg-10">
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
      <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x "></i> &nbsp; Preencha os campos necessário para o CADASTRO ! <span class="obr"> obs: ( * ) Campos obrigatórios<span></div> 
        </div>
    </div>    
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <form class="form"  method="post" action="{{url('admin/convenio/') }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" value="{{$id}}" name="id">
	<fieldset>
        Nome do convenio:
        <input type="text" value="{{$value->nome_convenio}}" name="nome_convenio">
        <br>
        Tipo de Plano:
        <input type="text" value="{{$value->tipo_plano}}" name="tipo_plano">
  </fieldset> 
  <button>Cadastrar</button>     
  </form>
</div>
</div>

@endsection