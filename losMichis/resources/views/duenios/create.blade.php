@extends('layouts.plantilla')

@section('title','Crear dueño')

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
	<!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Registrar dueño</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="{{route('duenios.store')}}" method="POST">
      	<!-- genera el token para guardar la información -->
      	@csrf
        <div class="card-body">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="apellidop">Apellido paterno</label>
            <input type="text" class="form-control" id="apellidop" name="apellidop">
          </div>
          <div class="form-group">
            <label for="apellidom">Apellido materno</label>
            <input type="text" class="form-control" id="apellidom" name="apellidom">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
          </div>
          <div class="form-group">
            <label for="correo">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo">
          </div>
          <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
@endsection