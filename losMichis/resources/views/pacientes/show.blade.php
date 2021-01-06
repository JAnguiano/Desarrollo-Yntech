@extends('layouts.plantilla')

@section('title','Ver paciente')

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
	<!-- About Me Box -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Acerca de: {{$paciente->alias}}</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <strong> Alias</strong>
        <p class="text-muted">{{$paciente->alias}} ({{$paciente->tipo}})</p>
        <hr>

        <strong> Dueño</strong>
        <p class="text-muted">{{$paciente->duenio}}</p>
        <hr>

        <strong> Edad</strong>
        <p class="text-muted">{{$paciente->edad}} meses</p>
        <hr>

        <strong> Peso</strong>
        <p class="text-muted">{{$paciente->peso}} Kg</p>
        <hr>

        <strong> Sexo</strong>

        <p class="text-muted">{{$paciente->sexo}}</p>
      </div>
      <!-- /.card-body -->
    </div>
@endsection