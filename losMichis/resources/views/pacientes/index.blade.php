@extends('layouts.plantilla')

@section('title','pacientes')

@section('inicio')
	<a href="{{route('index')}}">inicio</a>
@endsection

@section('listDuenio')
	<a href="{{route('pacientes.index')}}">Listado pacientes</a>
@endsection

@section('regDuenio')
	<a href="{{route('pacientes.create')}}">Crear paciente</a>
@endsection

@section('content')
	<div class="card-header">
    <h3 class="card-title">pacientes</h3>
  		</div>
	  <!-- /.card-header -->
	  <div class="card-body">
	    <table id="example2" class="table table-bordered table-hover">
	      <thead>
      		<tr>
                <th>Alias</th>
                <th>Dueño</th>
                <th>Tipo</th>
                <th>Edad</th>
                <th>Peso</th>
                <th>Sexo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
			@foreach($pacientes as $paciente)
			<tr>
				<td>{{$paciente->alias}}</td>
				<td>{{$paciente->duenio}}</td>
				<td>{{$paciente->tipo}}</td>
				<td>{{$paciente->edad}} meses</td>
				<td>{{$paciente->peso}} Kg</td>
				<td>{{$paciente->sexo}}</td>
				<td class="btn-group">
					<a href="{{route('pacientes.show',$paciente->id)}}" type="submit" class="btn btn-sm bg-primary">Ver</a>
					<a href="{{route('pacientes.edit',$paciente->id)}}" type="submit" class="btn btn-sm bg-warning">Editar</a>
					<a href="{{route('pacientes.show',$paciente->id)}}" type="submit" class="btn btn-sm bg-danger">Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$pacientes->links()}}
@endsection