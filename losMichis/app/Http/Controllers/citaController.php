<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class citaController extends Controller
{
    public function index(){
        $citas = Cita::orderBy('id','desc')->paginate();
        return view('citas.index', ['citas'=>$citas]);
    }

    /*public function create(){
        return view('pacientes.create');
    }*/

    public function store(Request $request){
        $cita = new Cita();
        $cita -> idMascota = $request -> idMascota;
        $cita -> fecha = $request -> fecha;
        $cita -> consultorio = $request -> consultorio;
        $cita -> estado = "pendiente";
        $cita -> save();
        return redirect()->route('index');
    }

  /*  public function show($id){
        $paciente = Paciente::find($id);
        return view('pacientes.show', ['paciente'=>$paciente]);     
    }

    public function edit($id){
        $paciente = Paciente::find($id);
        return view('pacientes.edit', ['paciente'=>$paciente]);  
    }

    public function update(Request $request, Paciente $paciente){
        $paciente -> tipo = $request -> tipo;
        $paciente -> duenio = $request -> duenio;
        $paciente -> edad = $request -> edad;
        $paciente -> peso = $request -> peso;
        $paciente -> sexo = $request -> sexo;
        $paciente -> alias = $request -> alias;
        $paciente -> save();
        return redirect()->route('pacientes.show',$paciente);
    }*/
}