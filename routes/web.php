<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PatientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [MyController::class,'index'])->name('home');
Route::get('/patient', [MyController::class,'main'])->name('main');

Route::post('/new-patient', [PatientController::class,'create'])->name('patient.create');
Route::get('/patient/{id}', [PatientController::class,'edit'])->name('patient.edit');
Route::post('/patient/update', [PatientController::class,'update'])->name('patient.update');
Route::get('/patient/destroy/{id}', [PatientController::class,'destroy'])->name('patient.destroy');
