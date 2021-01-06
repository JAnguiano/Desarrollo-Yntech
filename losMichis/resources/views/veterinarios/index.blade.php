@extends('layouts.plantilla')

@section('title','veterinarios')

@section('inicio')
	<a href="{{route('index')}}">inicio</a>
@endsection

@section('listDuenio')
	<a href="{{route('veterinarios.index')}}">Listado veterinarios</a>
@endsection


@section('content')
	<div class="card-header">
    <h3 class="card-title">Veterinarios</h3>
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
			@foreach($veterinarios as $veterinario)
			<tr>
				<td>{{$veterinario->nombre}}</td>
				<td>{{$veterinario->apellidop}} {{$veterinario->apellidom}}</td>
				<td>{{$veterinario->direccion}}</td>
				<td>{{$veterinario->telefono}}</td>
				<td><?php if($veterinario->estado==1){ echo "activo"; } else{ echo "inactivo";} ?></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$veterinarios->links()}}
@endsection