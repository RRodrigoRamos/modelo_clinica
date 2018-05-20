@extends('layout.template_login')

@section('ConteudoPrincipal')

<form action="{{url('/admin/agendamentosalvar')}}" method="post">
@csrf
Nome:
<input type="text" name="name" required>
Nome Social:
<input type="text" name="name_social" required>
Email:
<input type="text" name="email" required>
Sexo:
<input type="text" name="sexo" required>
Data de Nascimento:
<input type="text" name="data_nasc" required>
Telefone:
<input type="text" name="telefone" required>
Senha:
<input type="text" name="password" required>
</form>

<table border="1px" >

@foreach($atendentes as $value)
<tr>
		<td>
        {{$value->name}}
		</td>
		<td>
		{{$value->email}}
		</td>
</tr>
@endforeach
</table>
{{$atendentes->links()}}
@endsection
@section('ConteudoSecundario')

@endsection