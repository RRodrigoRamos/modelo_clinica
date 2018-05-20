@extends('layout.template_login')

@section('ConteudoPrincipal')

<table border="1px" >

@foreach($agendamentos as $value)
<tr>
		<td>
        {{$value->data_agenda}}
		</td>
		<td>
		{{$value->hora_agenda}}
		</td>
		<td>
		{{$value->tipo_agenda}}
		</td>
		<td>
        {{$value->agenda_de}}
		</td>
		<td>
		{{$value->obs}}
		</td>
		<td>
		{{$value->users_id}}
		</td>
		<td>
        {{$value->clinica_medicos_id}}
		</td>
		<td>
		{{$value->status_id}}
		</td>
</tr>
@endforeach
</table>
{{$agendamentos->links()}}
@endsection
@section('ConteudoSecundario')

@endsection