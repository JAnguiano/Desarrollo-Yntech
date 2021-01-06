@extends('layouts.plantilla')

@section('title','Editar paciente')

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
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Edición paciente</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="{{route('pacientes.update',$paciente)}}" method="POST">
      	<!-- genera el token para guardar la información -->
      	@csrf
      	@method('put')
        <div class="card-body">
          <div class="form-group">
            <label for="alias">Alias</label>
            <input type="text" class="form-control" id="alias" name="alias" value='{{$paciente->alias}}'>
          </div>
          <div class="form-group">
            <label for="duenio">Dueño</label>
            <input type="number" class="form-control" id="duenio" name="duenio" value='{{$paciente->duenio}}'>
          </div>
          <div class="form-group">
            <input type="radio" id="perro" name="tipo" value="perro" <?php if($paciente->tipo==='perro'){ ?>checked<?php } ?>>
            <label for="perro">perro</label><br>
            <input type="radio" id="gato" name="tipo" value="gato" <?php if($paciente->tipo==='gato'){ ?>checked<?php } ?>>
            <label for="gato">gato</label><br>
            <input type="radio" id="ave" name="tipo" value="ave" <?php if($paciente->tipo==='ave'){ ?>checked<?php } ?>>
            <label for="ave">ave</label><br>
            <input type="radio" id="roedor" name="tipo" value="roedor" <?php if($paciente->tipo==='roedor'){ ?>checked<?php } ?>>
            <label for="roedor">roedor</label>
          </div>
          <div class="form-group">
            <label for="edad">edad (en meses)</label>
            <input type="number" class="form-control" id="edad" name="edad" value='{{$paciente->edad}}'>
          </div>
          <div class="form-group">
            <label for="peso">peso (en kg)</label>
            <input type="number" class="form-control" id="peso" name="peso" value='{{$paciente->peso}}'>
          </div>
          <div class="form-group">
            <input type="radio" id="hembra" name="sexo" value="hembra" <?php if($paciente->sexo==='hembra'){ ?>checked<?php } ?>>
            <label for="hembra">hembra</label><br>
            <input type="radio" id="Macho" name="sexo" value="Macho" <?php if($paciente->sexo==='Macho'){ ?>checked<?php } ?>>
            <label for="Macho">Macho</label>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-success">Actualizar</button>
        </div>
      </form>
    </div>
@endsection