<?php

use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SugerenciasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[PortafolioController::class,'datosPortafolio']);

Route::post('/sugerencias', [SugerenciasController::class, 'sendMailsProcessing'])->name('sugerencias.form');

Auth::routes();

Route::middleware(['auth'])->group(function ()
{
    Route::get('portafolio',[PortafolioController::class,'index'])->name('portafolio');

    Route::get('portafolio/create',[PortafolioController::class,'create'])->name('create');
    
    Route::post('portafolio',[PortafolioController::class,'store'])->name('store');
    
    Route::get('portafolio/{id}',[PortafolioController::class,'show'])->name('show');
    
    Route::get('portafolio/edit/{id}',[PortafolioController::class,'edit'])->name('edit');
    
    Route::put('portafolio/{portafolio}',[PortafolioController::class,'update'])->name('update');
    
    Route::delete('portafolio/{portafolio}',[PortafolioController::class,'destroy'])->name('destroy');
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
});

