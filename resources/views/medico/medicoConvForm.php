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

    <br>
    <div class="col-lg-1">
    </div>
  <div class="col-lg-10">
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
      <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x "></i> &nbsp; Preencha os campos necessário para o CADASTRO <span class="obr">( * ) Campos obrigatórios<span></div>
        </div>
    </div>    
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <form class="form"  method="post" action="{{ route('register') }}">
        @csrf
    <fieldset>
          <legend>Dados de Paciente</legend>
          <div class="row">
            <div class="form-group col-sm-12 col-md-12 col-lg-2">
                <label for="foto" class="control-label">Foto</label>
                    <input type="text" class="form-group" name="foto" id="foto">
            </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                    <label for="name" class="control-label">Nome <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="name" id="name" placeholder="Nome Completo" required autofocus>
              </div>
            <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                <label for="name_social" class="control-label">Nome Social</label>
                <input type="txt" class="form-control" name="name_social" id="name_social" placeholder="Fulano(a) de Tal">
                <span class="verd">* Como deseja ser chamado</span>
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
                <label class="control-label">Sexo</label> <span class="obr">*</span>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="Masc" value="Masc"> 
                <label class="form-check-label" for="Masc">
                    Masculino
                </label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="Fem" value="Fem">
                <label class="form-check-label" for="Fem">
                    Feminino
                <br>
            </label>
            </div>
        </div>
        <div class="form-group col-sm-12 col-md-12 col-lg-3"">
                <label for="cpf" class="control-label">CPF: <span class="obr">*</span> </label>
                <input type="text" class="form-control" name="cpf" id="cpf" maxlength="14" OnKeyPress="PermiteNumeros(), formatar('###.###.###-##', this)" placeholder="000.000.000-00" required>
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
          <legend>Dados de Convênio</legend>
          <div class="row">
           <div class="form-group col-sm-12 col-md-6 col-lg-3">
            <label for="nome_convenio" class="control-label">Nome do Convênio</label>
                <div class="form-group">
              <select id="nome_convenio" name="nome_convenio" class="form-control" data-live-search="true">
                  <option value="" disabled="disabled">Selecione</option>
              <option value="Abapai">Abapai</option>
              <option value="Amapa Vidas">Amapa Vidas</option>
              <option value="Amei">Amei</option>
              <option value="Amil *" selected>Amil *</option>
              <option value="Amprev *">Amprev *</option>
              <option value="Asmob">Asmob</option>
              <option value="Aspeb *">Aspeb *</option>
              <option value="Assefaz *">Assefaz *</option>
              <option value="APIWA-TA *">APIWA-TA *</option>
              <option value="Associação dos policiais Federais *">Associação dos policiais Federais *</option>
              <option value="Associação dos doadores de sangue">Associação dos doadores de sangue</option>
              <option value="Basa-Casf *">Basa-Casf *</option>
              <option value="Bradesco *">Bradesco *</option>
              <option value="Brasil vida">Brasil vida</option>
              <option value="Caixa saúde *">Caixa saúde *</option>
              <option value="Capesaude *">Capesaude *</option>
              <option value="Casembrapa *">Casembrapa *</option>
              <option value="Cassi *">Cassi *</option>
              <option value="Central medica *">Central medica *</option>
              <option value="Clinica popular do trabalhador *">Clinica popular do trabalhador *</option>
              <option value="Conab">Conab</option>
              <option value="Condominio do msc *">Condominio do msc *</option>
              <option value="Consumabem">Consumabem</option>
              <option value="Postal Saúde(correios) *">Postal Saúde(correios) *</option>
              <option value="Dimet">Dimet</option>
              <option value="E-vida(eletronorte) *">E-vida(eletronorte) *</option>
              <option value="Engeclin">Engeclin</option>
              <option value="Engmed">Engmed</option>
              <option value="EPI medicina do trabalho *">EPI medicina do trabalho *</option>
              <option value="Ev cartaz *">Ev cartaz *</option>
              <option value="Fenix">Fenix</option>
              <option value="Funeraria centerpax *">Funeraria centerpax *</option>
              <option value="Funeraria santa rita *">Funeraria santa rita *</option>
              <option value="Geap *">Geap *</option>
              <option value="Globo saude">Globo saude</option>
              <option value="Goldem med">Goldem med</option>
              <option value="Grupo fortaleza *">Grupo fortaleza *</option>
              <option value="Hemocard *">Hemocard *</option>
              <option value="Ijoma *">Ijoma *</option>
              <option value="Mais saúde *">Mais saúde *</option>
              <option value="Med saude">Med saude</option>
              <option value="Medicare">Medicare</option>
              <option value="Mega card">Mega card</option>
              <option value="New forte *">New forte *</option>
              <option value="Nipomed">Nipomed</option>
              <option value="Nutriama-domestilar">Nutriama-domestilar</option>
              <option value="Parking shopping *">Parking shopping *</option>
              <option value="Paulo Balbino *">Paulo Balbino *</option>
              <option value="Plan assiste *">Plan assiste *</option>
              <option value="Plasf Funerária *">Plasf Funerária *</option>
              <option value="PM/BM (militares) *">PM/BM (militares) *</option>
              <option value="Proativa *">Proativa *</option>
              <option value="Qualimax">Qualimax</option>
              <option value="Rede vida">Rede vida</option>
              <option value="Renascer amavida *">Renascer amavida *</option>
              <option value="Sesc alimentos *">Sesc alimentos *</option>
              <option value="Sesc *">Sesc *</option>
              <option value="Sesi *">Sesi *</option>
              <option value="Sincottrap *">Sincottrap *</option>
              <option value="Sindicato do comercio * ">Sindicato do comercio * </option>
              <option value="Sindicato dos estivadores">Sindicato dos estivadores</option>
              <option value="Sindicato dos rodoviarios">Sindicato dos rodoviarios</option>
              <option value="Sindipetro/AP">Sindipetro/AP</option>
              <option value="Sindiviap">Sindiviap</option>
              <option value="Sindrap">Sindrap</option>
              <option value="Sindtral *">Sindtral *</option>
              <option value="Sinsepeap *">Sinsepeap *</option>
              <option value="Sorriso saúde *">Sorriso saúde *</option>
              <option value="SSMM *">SSMM *</option>
              <option value="Stacap *">Stacap *</option>
              <option value="Sulamerica *">Sulamerica *</option>
              <option value="TCM">TCM</option>
              <option value="Tribunal de contas *">Tribunal de contas *</option>
              <option value="Transwood *">Transwood *</option>
              <option value="UBMA">UBMA</option>
              <option value="Vale saude">Vale saude</option>
              <option value="Visual fashion">Visual fashion</option>
              </select>
              <span class="verd">Convênios com A Clinica</span>
            </div>
          </div>
              <div class="form-group col-sm-12 col-md-6 col-lg-3">
                    <label for="tipo_plano" class="control-label">Tipo de Convênio </label>
                    <input type="txt" class="form-control" name="tipo_plano" id="tipo_plano" placeholder="Ex.: Básico, Empresarial, Especial II.">
              </div>
              <div class="form-group col-sm-12 col-md-6 col-lg-3">
                    <label for="n_registro" class="control-label">Nº de Registro </label>
                    <input type="txt" class="form-control" name="n_registro" id="n_registro" placeholder="0x0x0x0x0x0x0x0x0x0x0">
              </div>
              <div class="form-group col-sm-12 col-md-6 col-lg-3">
                    <label for="validade" class="control-label">Validade</label>
                    <input type="txt" class="form-control" name="validade" id="validade" maxlength="10" OnKeyPress="formatar('##/##/####', this)" placeholder="dd/mm/aaaa">
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
                    <label for="n_registro" class="control-label"> Peso Atual: <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="n_registro" id="n_registro" maxlength="4" OnKeyPress="formatar('##.#', this)" placeholder="Ex.: 80.0" required>
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
             <!--  <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="tipo_local" class="control-label">Tipo Local: </label>
                    <input type="txt" class="form-control" name="tipo_local" id="tipo_local" placeholder="Prédio, Casa Própria, KitNet...">
              </div> -->
        </div>
        <div class="row">
              <!-- <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="cep" class="control-label">CEP:</label>
                    <input type="text" class="form-control" name="cep" id="cep" OnKeyPress="formatar('##.###-###', this)" maxlength="10" placeholder="68.900-00">
            </div> -->
            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                    <label for="bairro" class="control-label">Bairro: </label>
                    <input type="txt" class="form-control" name="bairro" id="bairro" placeholder="Novo Horizonte, Alvorada...">
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
                  <label for="nome_convenio" class="control-label">Estado</label>
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
    <br>
    <div class="col-lg-4">
    </div>
  <div class="form-group col-sm-6 col-md-6 col-lg-6 col-lg-6">
            <button type="submit" class="btn btn-primary form-control agendar"> 
            Cadastrar Usúario </button>
        
      </div>
  <br>
  </form>
</div>
</div>
</div>	
@endsection