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
                  <li class="active">
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
@endsection
@section('ConteudoPrincipal')
<!-- Banner Cliente -->
    <div class="main-banner index_1">
      <div class="container">
        <h2><span>Pacientes Clinica</span></h2>
      </div>
    </div>
    <div class="breadcrumb">
      <div class="container">
        <ul class="list-unstyled list-inline">
          <li>
            <a href="/areaAdmin">Area Administrativa</a>
          </li>
          <li class="active">
            Pacientes
          </li>
        </ul>
      </div>
    </div>
<!-- Banner Cliente Fim-->
<br>
<div class="container">

<div class="row">
<div class="col-lg-1">
</div>
<div class="form-group col-sm-12 col-md-12 col-lg-10 col-xs-12">
 <fieldset>
          <legend>Pacientes - Clinica </legend>
              <table class="table table-striped table-bordered table-condensed table-hover table-responsive">
             <thead>
              <tr>
               <th>Nome</th>
               <th>::CPF::</th>
               <th>Sexo</th>
               <th>Convênio</th>
               <th>Telefone</th>
               <th>Acão</th>
              </tr>
             </thead>
             <tbody>
            @foreach($pacientes as $dados_paciente)
              <tr>
                  <td>{{ $dados_paciente->name }}</td>
                  <td>{{ $dados_paciente->cpf }}</td>
                  <td>{{ $dados_paciente->sexo }}</td>
                  <td>{{ $dados_paciente->convenio_id }}</td>
                  <td>{{ $dados_paciente->telefone }}</td>
                   <td><a href="{{url('admin/pacientes/'.$dados_paciente->id)}}"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a></td>
              </tr>
            @endforeach
             </tbody>
            </table>
    </fieldset>
        {{$pacientes->links()}}
    </div>
  </div>
</div>
@endsection
@section('ConteudoSecundario')
<div class="col-lg-2"></div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar Paciente</button>

@component('admin.components.modal')
@slot('form')
@component('admin.components.formulario')
	@slot('url')
	pacientesalvar
	@endslot
	@slot('formulario')
   <fieldset>
          <legend>Dados de Paciente</legend>
            <div class="row">
              <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                    <label for="name" class="control-label">Nome <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="name" id="name" placeholder="Nome Completo" required autofocus>
              </div>

        </div>

        <div class="row">
          <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                <label for="email" class="control-label">Email <span class="obr">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="exemplo_email@gmail.com" required>
          </div>
          <div class="form-group col-sm-6 col-md-6 col-lg-3">
                <label for="password" class="control-label">Senha <span class="obr">*</span></label><input type="password" class="form-control" name="password" placeholder="***Senha***" required> <span class="verd">* Minino 6 digitos</span>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="password_confirmation" class="control-label">Confirme Senha <span class="obr">*</span></label><input type="password" class="form-control" name="password_confirmation" placeholder="***Senha***"required> <span class="verd">* Confirme Senha </span>
          </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-6 col-md-6 col-lg-3">
               <label for="sexo" class="control-label">Sexo <span class="obr">*</span></label>
              <select id="sexo" name="sexo" class="form-control" data-live-search="true">
                <option value="" disabled="disabled" selected>Selecione</option>
                            <option value="Masc">Masculino</option>
                            <option value="Feminino">Feminino</option>
            </select>
        </div>
        <div class="form-group col-sm-6 col-md-6 col-lg-3">
               <label for="convenio" class="control-label">Convenio: <span class="obr">*</span></label>
              <select id="convenio" name="convenio_id" class="form-control" data-live-search="true">
                                   <option value="" disabled="disabled" selected>Selecione</option>
                            @foreach($convenios as $convenio)
                            <option value="{{ $convenio->id }}"> {{ $convenio->nome_convenio }}
                   			 </option>
                            @endforeach
            </select>
        </div>
        <div class="form-group col-sm-12 col-md-12 col-lg-3"">
                <label for="cpf" class="control-label">CPF: <span class="obr">*</span> </label>
                <input type="text" class="form-control" name="cpf" id="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" placeholder="000.000.000-00" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="data_nasc" class="control-label">Data Nascimento: <span class="obr">*</span></label><input type="date" class="form-control" id="data_nasc" name="data_nasc" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="telefone" class="control-label">Telefone: <span class="obr">*</span></label><input type="tel" class="form-control" id="telefone" name="telefone" maxlength="15" placeholder="(96) 00000 - 0000">
          </div>
      </div>
    </fieldset>
    <br>
     <fieldset>
          <legend> Dados de Triagem </legend>
        <div class="row">
              <div class="form-group col-sm-12 col-md-4 col-lg-3">
                    <label for="altura" class="control-label"> Altura Atual: <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="altura" id="altura" maxlength="4" OnKeyPress="formatar('#.##', this)" placeholder="Ex.: 1.70" required>
              </div>
              <div class="form-group col-sm-12 col-md-4 col-lg-3">
                    <label for="peso" class="control-label"> Peso Atual: <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="peso" id="n_registro" maxlength="4" OnKeyPress="formatar('##.#', this)" placeholder="Ex.: 80.0" required>
              </div>
              <div class="form-group col-sm-12 col-md-4 col-lg-6">
                    <label for="obs" class="control-label">Observação</label>
                    <input type="txtarea" class="form-control" name="obs" id="obs" placeholder="Ex.: Pressão Alta, Alergias, etc..." >
              </div>
            </div>
    </fieldset>
    <br>
    <fieldset>
        <legend>Dados de Endereço</legend>
          <div class="row">
              <div class="form-group col-sm-12 col-md-12 col-lg-9">
                    <label for="endereco" class="control-label">Endereço: </label>
                    <input type="txt" class="form-control" name="endereco" id="endereco" placeholder="Ex.: Rua.: Av.: Travessa, Etc...">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="numero" class="control-label">Número: </label>
                    <input type="txt" class="form-control" name="numero" id="numero"  placeholder="Ex.: 1313A, Apt14... " maxlength="10">
              </div>            
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="numero" class="control-label">Cep: </label>
                    <input type="txt" class="form-control" name="numero" id="cep"  placeholder="Ex.: 68932-000... " maxlength="10">
              </div>            
             <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="tipo_local" class="control-label">Tipo Local: </label>
                    <input type="txt" class="form-control" name="tipo_local" id="tipo_local" placeholder="Prédio, Casa Própria, KitNet...">
              </div>
             <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="complement" class="control-label">Complemento: </label>
                    <input type="txt" class="form-control" name="complement" id="complement" placeholder="Prédio, Casa Própria, KitNet...">
              </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                    <label for="bairro_id" class="control-label">Bairro: </label>
                    <div class="form-group">
              <select id="bairro_id" name="bairro_id" class="form-control" data-live-search="true">
                    <option value="" disabled="disabled" selected>Selecione</option>
                            @foreach($bairros as $bairro)
                            <option value="{{ $bairro->id }}"> {{ $bairro->nome }}
                    </option>
                            @endforeach
                </select>
                </div>
                    
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
              <label for="cidade" class="control-label"> Municpio / Cidade: </label>
                <div class="form-group">
              <select id="cidade" name="cidade" class="form-control" data-live-search="true">
                            <option value="Amapá">Amapá</option>
                            <option value="Calçoene">Calçoene</option>
                            <option value="Cutias">Cutias</option>
                            <option value="Ferreira Gomes">Ferreira Gomes</option>
                            <option value="Itaubal">Itaubal</option>
                            <option value="Laranjal do Jari">Laranjal do Jari</option>
                            <option value="Macapá" selected>Macapá</option>
                            <option value="Mazagão">Mazagão</option>
                            <option value="Oiapoque">Oiapoque</option>
                            <option value="Pedra Branca do Amapari">Pedra Branca do Amapari</option>
                            <option value="Porto Grande">Porto Grande</option>
                            <option value="Pracuúba">Pracuúba</option>
                            <option value="Santana">Santana</option>
                            <option value="Serra do Navio">Serra do Navio</option>
                            <option value="Tartarugalzinho">Tartarugalzinho</option>
                            <option value="Vitória do Jari">Vitória do Jari</option>
                </select>
                </div>
           </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-3">
                  <label for="estado" class="control-label">Estado</label>
                <div class="form-group">
              <select id="estado" name="estado" class="form-control" data-live-search="true">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AM">Amazonas</option>
                            <option value="AP" selected>Amapá</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="PR">Paraná</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SE">Sergipe</option>
                            <option value="SP">São Paulo</option>
                            <option value="TO">Tocantins</option>
                  </select>
              </div>
          </div>
    </fieldset>
	@endslot
@endcomponent
@endslot
@endcomponent
@endsection