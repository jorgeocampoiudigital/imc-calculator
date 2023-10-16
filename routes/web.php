<?php

use App\Http\Controllers\IMC;
use App\Http\Controllers\IMCCalculatorController;
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
    return view('imc.imc');
});

Route::get('/imc', [IMCCalculatorController::class,'showForm'])->name('show.imc.imc');
Route::post('/imc', [IMCCalculatorController::class,'calculateIMC'])->name('calculate.imc');
