<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class pacienteController extends Controller
{
    public function index(){
		$pacientes = Paciente::orderBy('id','desc')->paginate();
		return view('pacientes.index', ['pacientes'=>$pacientes]);
    }

    public function create(){
		return view('pacientes.create');
    }

    public function store(Request $request){
    	$paciente = new Paciente();
    	$paciente -> tipo = $request -> tipo;
        $paciente -> duenio = $request -> duenio;
        $paciente -> edad = $request -> edad;
        $paciente -> peso = $request -> peso;
        $paciente -> sexo = $request -> sexo;
        $paciente -> alias = $request -> alias;
    	$paciente -> save();
    	return redirect()->route('pacientes.show',$paciente);
    }

    public function show($id){
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
    }
}