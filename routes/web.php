<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\StudentController as StudentControllerResource;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/',[LoginController::class,'login']);
Route::get('/alumnos',[StudentController::class,'index']);
Route::post('/alumnos',[StudentController::class,'store']);

//Rutas con recursos

Route::resource('estudiantes',StudentControllerResource::class);
