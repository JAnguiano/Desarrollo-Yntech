<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duenio;

class duenioController extends Controller
{
    public function index(){
		$duenios = Duenio::orderBy('id','desc')->paginate();
		return view('duenios.index', ['duenios'=>$duenios]);
    }

    public function create(){
		return view('duenios.create');
    }

    public function store(Request $request){
    	$duenio = new Duenio();
    	$duenio -> nombre = $request -> nombre;
    	$duenio -> apellidop = $request -> apellidop;
    	$duenio -> apellidom = $request -> apellidom;
    	$duenio -> direccion = $request -> direccion;
    	$duenio -> telefono = $request -> telefono;
    	$duenio -> correo = $request -> correo;
    	$duenio -> email_verified_at = now();
    	$duenio -> save();
    	return redirect()->route('duenios.show',$duenio);
    }

    public function show($id){
    	$duenio = Duenio::find($id);
		return view('duenios.show', ['duenio'=>$duenio]);   	
    }

    public function edit($id){
    	$duenio = Duenio::find($id);
		return view('duenios.edit', ['duenio'=>$duenio]);  
    }

    public function update(Request $request, Duenio $duenio){
    	$duenio -> nombre = $request -> nombre;
    	$duenio -> apellidop = $request -> apellidop;
    	$duenio -> apellidom = $request -> apellidom;
    	$duenio -> direccion = $request -> direccion;
    	$duenio -> telefono = $request -> telefono;
    	$duenio -> correo = $request -> correo;
    	$duenio -> email_verified_at = now();
    	$duenio -> save();
    	return redirect()->route('duenios.show',$duenio);
    }
}
