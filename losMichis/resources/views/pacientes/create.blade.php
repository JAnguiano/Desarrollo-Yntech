@extends('layouts.plantilla')

@section('title','Registrar paciente')

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
	<!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Registrar paciente</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="{{route('pacientes.store')}}" method="POST">
      	<!-- genera el token para guardar la información -->
      	@csrf
        <div class="card-body">
          <div class="form-group">
            <label for="alias">Alias</label>
            <input type="text" class="form-control" id="alias" name="alias">
          </div>
          <div class="form-group">
            <label for="duenio">Dueño</label>
            <input type="number" class="form-control" id="duenio" name="duenio">
          </div>
          <div class="form-group">
            <input type="radio" id="perro" name="tipo" value="perro">
            <label for="perro">perro</label><br>
            <input type="radio" id="gato" name="tipo" value="gato">
            <label for="gato">gato</label><br>
            <input type="radio" id="ave" name="tipo" value="ave">
            <label for="ave">ave</label><br>
            <input type="radio" id="roedor" name="tipo" value="roedor">
            <label for="roedor">roedor</label>
          </div>
          <div class="form-group">
            <label for="edad">edad (en meses)</label>
            <input type="number" class="form-control" id="edad" name="edad">
          </div>
          <div class="form-group">
            <label for="peso">peso (en kg)</label>
            <input type="number" class="form-control" id="peso" name="peso">
          </div>
          <div class="form-group">
            <input type="radio" id="hembra" name="sexo" value="hembra">
            <label for="hembra">hembra</label><br>
            <input type="radio" id="Macho" name="sexo" value="Macho">
            <label for="Macho">Macho</label>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
@endsection