
<div class="container main">

    <br>
  <div class="col-lg-9">
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
      <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <div class="text"><i class="fa fa-info-circle fa-2x "></i> &nbsp; Preencha os campos necessário para o CADASTRO ! <span class="obr"> obs: ( * ) Campos obrigatórios<span></div> 
        </div>
    </div>    
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <form class="form"  method="post" action="{{ $url }}">
        @csrf
    {{$formulario}}
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
</div>
<br>