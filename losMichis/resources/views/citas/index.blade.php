@extends('layouts.plantilla')

@section('title','citas')

@section('inicio')
	<a href="{{route('index')}}">inicio</a>
@endsection

@section('listDuenio')
	<a href="{{route('pacientes.index')}}">Listado Citas</a>
@endsection

@section('regDuenio')
	<a href="{{route('index')}}">Crear cita</a>
@endsection


@section('content')
	<div class="card-header">
    <h3 class="card-title">Citas</h3>
  		</div>
	  <!-- /.card-header -->
	  <div class="card-body">
	    <table id="example2" class="table table-bordered table-hover">
	      <thead>
      		<tr>
                <th>idMascota</th>
                <th>Fecha programada</th>
                <th>Estado</th>
                <th>Consultorio</th>
            </tr>
        </thead>
        <tbody>
			@foreach($citas as $cita)
			<?php
				$diaProgramado = new DateTime($cita->fecha);
			    $diaProgramado = $diaProgramado->format('Y-m-d H:i'); 
			?>
			<tr>
				<td>{{$cita->idMascota}}</td>
				<td>{{$diaProgramado}}</td>
				<td>{{$cita->estado}}</td>
				<td>{{$cita->consultorio}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$citas->links()}}
@endsection