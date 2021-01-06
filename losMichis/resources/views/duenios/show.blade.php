@extends('layouts.plantilla')

@section('title','Ver dueño')

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
	<!-- About Me Box -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Acerca de: {{$duenio->nombre}}</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <strong> Nombre completo</strong>
        <p class="text-muted">{{$duenio->nombre}} {{$duenio->apellidop}} {{$duenio->apellidom}}</p>
        <hr>

        <strong> Dirección</strong>
        <p class="text-muted">{{$duenio->direccion}}</p>
        <hr>

        <strong> Teléfono</strong>
        <p class="text-muted">{{$duenio->telefono}}</p>
        <hr>

        <strong> Correo</strong>
        <p class="text-muted">{{$duenio->correo}}</p>
        <hr>

        <strong><i class="far fa-file-alt mr-1"></i> Mascotas</strong>

        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
      </div>
      <!-- /.card-body -->
    </div>
@endsection