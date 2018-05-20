@extends('layout.template_login')
@section('ConteudoPrincipal')
@endsection
@section('ConteudoSecundario')
<div class="container main">

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
   <form class="form"  method="post" action="{{url('admin/medico/editar/') }}">
        @csrf
	<fieldset>
          <legend>Dados de Medico</legend>
            <div class="row">
              <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                    <label for="name" class="control-label">Nome <span class="obr">*</span></label>
                    <input type="txt" class="form-control" name="name" id="name" placeholder="Nome Completo" value="{{$value->name}}" required autofocus>
              </div>

            <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                <label for="name_social" class="control-label">Foto:</label>
                <input type="file" class="form-control" name="foto" id="foto" value="{{$value->foto}}" placeholder="{{$value->foto}}">
                <span class="verd">* Como deseja ser chamado</span>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-sm-6 col-md-6 col-lg-6"">
                <label for="email" class="control-label">Email <span class="obr">*</span></label>
                <input type="email" class="form-control" name="email" id="email" value="{{$value->email}}" placeholder="exemplo_email@gmail.com" required>
          </div>
          <div class="form-group col-sm-6 col-md-6 col-lg-3">
                <label for="password" class="control-label">Senha <span class="obr">*</span></label><input type="password" class="form-control" name="password" placeholder="***Senha***" value="{{$value->password}}" required> <span class="verd">* Minino 6 digitos</span>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="password_confirmation" class="control-label">Confirme Senha <span class="obr">*</span></label><input type="password" class="form-control" name="password_confirmation" value="{{$value->password}}" placeholder="***Senha***"required> <span class="verd">* Confirme Senha </span>
          </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-6 col-md-6 col-lg-3">
               <label for="sexo" class="control-label">Sexo <span class="obr">*</span></label>
              <select id="sexo" name="sexo" class="form-control" data-live-search="true" value="{{$value->password}}">
                <option value="" disabled="disabled" selected>Selecione</option>
                            @if($value->sexo == 'Masc')
                            <option value="Masc" selected>Masculino</option>
                            <option value="Feminino">Feminino</option>
                            
                            @else
                            <option value="Masc">Masculino</option>
                            <option value="Feminino" selected>Feminino</option>
                            @endif
            </select>
        </div>
        <div class="form-group col-sm-12 col-md-12 col-lg-3"">
                <label for="cpf" class="control-label">CPF: <span class="obr">*</span> </label>
                <input type="text" value="{{$value->cpf}}" class="form-control" name="cpf" id="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" placeholder="000.000.000-00" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="data_nasc" class="control-label">Data Nascimento: <span class="obr">*</span></label><input type="date" value="{{$value->data_nasc}}" class="form-control" id="data_nasc" name="data_nasc" required>
          </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="telefone" class="control-label">Telefone: <span class="obr">*</span></label><input type="tel" value="{{$value->telefone}}" class="form-control" id="telefone" name="telefone" maxlength="15" placeholder="(96) 00000 - 0000">
          </div>
      </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="crm" class="control-label">CRM: <span class="obr">*</span></label><input type="tel" value="{{$value->crm}}" class="form-control" id="crm" name="crm" maxlength="15" placeholder="(96) 00000 - 0000">
          </div>
          <div class="form-group col-sm-6 col-md-6 col-lg-3">
             <div class="form-group">
             Especialidade:
              <select id="especialidade_id" name="especialidade_id" class="form-control" data-live-search="true">
                    <option value="" disabled="disabled" selected>Selecione</option>
                            @foreach($especialidades as $especialidade)
                            
                            <option value="{{ $especialidade->id }}" @if($especialidade->id==$value->especialidade_id) selected @endif > {{ $especialidade->campo }}
                    </option>
                            @endforeach
                </select>
                </div>
                </div>
      </div>
    </fieldset>
    <br>
    
    <br>
    <fieldset>
        <legend>Dados de Endereço</legend>
          <div class="row">
              <div class="form-group col-sm-12 col-md-12 col-lg-9">
                    <label for="endereco" class="control-label">Endereço: </label>
                    <input type="txt" value="{{$value->endereco}}" class="form-control" name="endereco" id="endereco" placeholder="Ex.: Rua.: Av.: Travessa, Etc...">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="numero" class="control-label">Número: </label>
                    <input type="txt" value="{{$value->numero}}"class="form-control" name="numero" id="numero"  placeholder="Ex.: 1313A, Apt14... " maxlength="10">
              </div>            
             <!--  <div class="form-group col-sm-12 col-md-12 col-lg-3">
                    <label for="tipo_local" class="control-label">Tipo Local: </label>
                    <input type="txt" value="{{$value->tipo_local}}" class="form-control" name="tipo_local" id="tipo_local" placeholder="Prédio, Casa Própria, KitNet...">
              </div> -->
        </div>
        <div class="row">
               <div class="form-group col-sm-12 col-md-12 col-lg-3">
                <label for="cep" class="control-label">CEP:</label>
                    <input type="text" value="{{$value->cep}}" class="form-control" name="cep" id="cep" OnKeyPress="formatar('##.###-###', this)" maxlength="10" placeholder="68.900-00">
            </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                    <label for="bairro_id" class="control-label">Bairro: </label>
                    <div class="form-group">
              <select id="bairro_id" name="bairro_id" class="form-control" data-live-search="true">
                    <option value="" disabled="disabled" selected>Selecione</option>
                            @foreach($bairros as $bairro)
                            <option value="{{ $bairro->id }}" @if($bairro->id==$value->bairro_id) selected @endif >
                            {{ $bairro->nome }}
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
            Cadastrar</button>
        
      </div>
  <br>
  </form>
</div>
</div>

@endsection