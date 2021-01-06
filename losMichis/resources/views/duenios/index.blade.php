@extends('layouts.plantilla')

@section('title','dueños')

@section('inicio')
	<a href="{{route('index')}}">inicio</a>
@endsection

@section('listDuenio')
	<a href="{{route('duenios.index')}}">Listado dueños</a>
@endsection

@section('regDuenio')
	<a href="{{route('duenios.create')}}">Crear dueño</a>
@endsection

@section('content')
	<div class="card-header">
    <h3 class="card-title">Dueños encargados</h3>
  		</div>
	  <!-- /.card-header -->
	  <div class="card-body">
	    <table id="example2" class="table table-bordered table-hover">
	      <thead>
      		<tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
			@foreach($duenios as $duenio)
			<tr>
				<td>{{$duenio->nombre}}</td>
				<td>{{$duenio->apellidop}} {{$duenio->apellidom}}</td>
				<td>{{$duenio->direccion}}</td>
				<td>{{$duenio->telefono}}</td>
				<td class="btn-group">
					<a href="{{route('duenios.show',$duenio->id)}}" type="submit" class="btn btn-sm bg-primary">Ver</a>
					<a href="{{route('duenios.edit',$duenio->id)}}" type="submit" class="btn btn-sm bg-warning">Editar</a>
					<a href="{{route('duenios.show',$duenio->id)}}" type="submit" class="btn btn-sm bg-danger">Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$duenios->links()}}
@endsection