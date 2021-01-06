<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\duenioController;
use App\Http\Controllers\pacienteController;
use App\Http\Controllers\citaController;
use App\Http\Controllers\veterinarioController;
use App\Http\Controllers\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', homeController::class)->name('index');

Route::get('duenios', [duenioController::class,'index'])->name('duenios.index');
Route::get('duenios/create', [duenioController::class,'create'])->name('duenios.create');
Route::post('duenios',[duenioController::class,'store'])->name('duenios.store');
Route::get('duenios/{duenio}', [duenioController::class,'show'])->name('duenios.show');
Route::get('duenios/{id}/edit', [duenioController::class,'edit'])->name('duenios.edit');
Route::put('duenios/{duenio}',[duenioController::class,'update'])->name('duenios.update');

Route::get('pacientes', [pacienteController::class,'index'])->name('pacientes.index');
Route::get('pacientes/create', [pacienteController::class,'create'])->name('pacientes.create');
Route::post('pacientes',[pacienteController::class,'store'])->name('pacientes.store');
Route::get('pacientes/{paciente}', [pacienteController::class,'show'])->name('pacientes.show');
Route::get('pacientes/{id}/edit', [pacienteController::class,'edit'])->name('pacientes.edit');
Route::put('pacientes/{paciente}',[pacienteController::class,'update'])->name('pacientes.update');

Route::get('citas', [citaController::class,'index'])->name('citas.index');
Route::post('citas',[citaController::class,'store'])->name('citas.store');

Route::get('veterinarios', [veterinarioController::class,'index'])->name('veterinarios.index');

