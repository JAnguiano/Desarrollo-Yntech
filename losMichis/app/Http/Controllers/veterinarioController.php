<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinario;

class veterinarioController extends Controller
{
    public function index(){
		$veterinarios = Veterinario::orderBy('id','desc')->paginate();
		return view('veterinarios.index', ['veterinarios'=>$veterinarios]);
    }
}
