@extends('layout.template')
@section('title', 'LOGIN - REGISTRO')
@section('topoInfor')
            
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
                            <a href="/inicio" class="navbar-brand">
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
                                        <a href="/inicio"> <i class="fa fa-home" aria-hidden="true"></i> Início</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Institucional <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="/pagina/institucional">Quem Somos</a>
                                            </li>
                                            <li>
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
                                        <a href="/pagina/convenios">Convênios</a>
                                    </li>       
                                    <li>
                                        <a href="/pagina/contato"><i class="fa fa-comments"> </i> Fale Conosco</a>
                                    </li>
                                    <li class="active">
                                        <a href="/areaCliente" >
                                             <i class="fa fa-sign-in"></i>
                                              Login 
                                            <i class="fa fa-user"></i>
                                        </a>
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
        <div class="main-banner paginaRegistro">
            <div class="container">
                <h2><span>Cadastro </span></h2>
            </div>
        </div>
        <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled list-inline">
                    <li>
                        <a href="/inicio">Início</a>
                    </li>
                    <li class="active">Cadastro</li>
                </ul>
            </div>
        </div>
<!-- Banner Cliente Fim-->
<div class="container main">

    <br>
    <div class="col-lg-1">
    </div>
  <div class="col-lg-10">
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
      <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><center>  <i class="fa fa-info-circle fa-2x "></i> &nbsp; Preencha os campos necessários para o <strong>cadastro.</strong> <span class="obr"> 
              <br>  
            Campos obrigatórios <strong> ( * ) </strong> <span>
              </center>
            </div> 
        </div>
    </div>    
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <form class="form"  method="post" action="{{ route('register') }}">
        @csrf
    <fieldset>
          <legend>Dados pessoais</legend>
            <div class="row">
              <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                    <label for="foto" class="control-label">Foto de Perfil: </label>
                    <input type="file" class="" name="foto" id="foto">
              </div>
              <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                    <label for="name" class="control-label">Nome completo: <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="name" id="name" placeholder="Nome Completo" required autofocus>
              </div>

        </div>

        <div class="row">
          <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                <label for="email" class="control-label">Email: <span class="obr">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="exemplo@exemplo.com" required>
          </div>
          <div class="form-group col-sm-6 col-md-6 col-lg-3">
                <label for="password" class="control-label">Senha: <span class="obr">*</span></label><input type="password" class="form-control" name="password" placeholder="***Senha***" required> <span class="verd">* Mínimo 6 dígitos</span>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="password_confirmation" class="control-label">Confirme a Senha: <span class="obr">*</span></label><input type="password" class="form-control" name="password_confirmation" placeholder="***Senha***"required> <span class="verd">* Confirme a senha </span>
          </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-6 col-md-6 col-lg-3">
               <label for="sexo" class="control-label">Sexo: <span class="obr">*</span></label>
              <select id="sexo" name="sexo" class="form-control" data-live-search="true">
                <option value="" disabled="disabled" selected>Selecione</option>
                            <option value="Masc">Masculino</option>
                            <option value="Feminino">Feminino</option>
            </select>
        </div>        
        <div class="form-group col-sm-6 col-md-6 col-lg-3">
               <label for="convenio" class="control-label">Convênio: <span class="obr">*</span></label>
              <select id="convenio" name="convenio_id" class="form-control" data-live-search="true">
                                   <option value="" disabled="disabled" selected>Selecione</option>
                                   <option value="">Nenhum</option>
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
                <label for="data_nasc" class="control-label">Data de Nascimento: <span class="obr">*</span></label><input type="date" class="form-control" id="data_nasc" name="data_nasc" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="telefone" class="control-label">Telefone: <span class="obr">*</span></label><input type="tel" class="form-control" id="telefone" name="telefone" maxlength="15" placeholder="(96) 00000 - 0000">
          </div>
      </div>
    </fieldset>
    <br>  
<fieldset>
        <legend>Endereço</legend>
          <div class="row">
              <div class="form-group col-sm-12 col-md-12 col-lg-9">
                    <label for="endereco" class="control-label">Endereço: </label>
                    <input type="txt" class="form-control" name="endereco" id="endereco" placeholder="Rua exemplo ou Avenida exemplo...">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="numero" class="control-label">Número: </label>
                    <input type="txt" class="form-control" name="numero" id="numero"  placeholder=" 450, 1313A, APT14... " maxlength="10">
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
              <label for="cidade" class="control-label"> Município / Cidade: </label>
                <div class="form-group">
              <select id="cidade" name="cidade" class="form-control" data-live-search="true">
                    <option value="" disabled="disabled" selected>Selecione</option>
                    @foreach($cidades as $cidade)
                      <option value="{{ $cidade->id }}"> {{ $cidade->nome }}
                      </option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-3">
                  <label for="estado" class="control-label">Estado</label>
                <div class="form-group">
              <select id="estado" name="estado" class="form-control" data-live-search="true">
                            <option value="" disabled="disabled" selected>Selecione</option>
                    @foreach($estados as $estado)
                      <option value="{{ $estado->id }}"> {{ $estado->sigla }}
                      </option>
                    @endforeach
                  </select>
              </div>
          </div>
        </div>           
          <div class="row">
            <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="numero" class="control-label">CEP: </label>
                    <input type="txt" class="form-control" name="numero" id="cep"  placeholder="00000-000" maxlength="10">
            </div>            
            <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="tipo_local" class="control-label">Tipo de local: </label>
                    <input type="txt" class="form-control" name="tipo_local" id="tipo_local" placeholder="casa própria, alugada, apartamento...">
            </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-6">
              <label for="complement" class="control-label">Complemento: </label>
              <input type="txt" class="form-control" name="complement" id="complement" placeholder="ponto de referência">
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
              <div class="form-group col-md-2">
                <label for="idade">Idade Atual:</label>
                <input type="num" name="idade" id="idade" class="form-control" placeholder="Idade" disabled>
            </div>
              <div class="form-group col-sm-12 col-md-4 col-lg-4">
                    <label for="obs" class="control-label">Se enquadra na lei de prioridade?</label>
                    <input type="txtarea" class="form-control" name="obs" id="obs" placeholder="Ex.: Cardeirante, Idoso, etc..." >
                    
              </div>
            </div>
            <div class="alert alert-danger" role="alert"><strong>Art. 1º</strong> As pessoas com deficiência, os idosos com idade igual ou superior a 60 (sessenta) anos, as gestantes, as lactantes, as pessoas com crianças de colo e os obesos terão atendimento prioritário, nos termos desta Lei. (Redação dada pela Lei nº 13.146, de 2015 - Vigência)
                    </div>
    </fieldset>
    <br>
    
    <br>
    <div class="col-lg-4">
    </div>
    <div class="modal fade" id="modal-mensagem">
          <div class="modal-dialog">
              <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                           <h4 class="modal-title">AGENDAMENTOS ONLINE - Acclinic</h4>
                       </div>
                       <div class="modal-body">
                           <p><span class="obr">OBS:</span> Atendimento feito na clinica por Ordem de Chegada, exceto pessoas: Portadoras de Necessidade Especial, Idosos, prioridades amparadas por lei! </p>
                       </div>
                       <div class="modal-footer">
                        <button type="submit" class="btn btn-primary form-control agendar"> Cadastrar</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                       </div>
                     </div>
             </div>
          </div>
  <div class="form-group col-sm-6 col-md-6 col-lg-6 col-lg-6">
            <button type="button" class="btn btn-primary form-control agendar" data-toggle="modal" data-target="#modal-mensagem"> 
            Cadastrar</button>
        
  </div>
  <br>
  </form>
</div>
</div>
</div>
@endsection
