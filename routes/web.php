<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroeController;

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
    return view('auth.login');
    //Necesitamos que cuando el usuario escriba aen la raíz lo lleve a autenticación/login

});

Route::get('/superheroe', function () {
    return view('superheroeView.index');
    /**Accedemos a la vista index de la carpetae empleado */
});

//Route::get('/superheroe', [SuperheroeController::class, 'index']);

Route::get('superheroe/create', [SuperheroeController::class, 'create']);

Route::resource('superheroe', SuperheroeController::class)->middleware('auth');
//Básicamente agregando middleware decimos que si no hay autentificación no se pueda entrar a la sección 

Auth::routes(['reset'=>false]);

Route::get('/home', [SuperheroeController::class, 'index'])->name('home');

Route::group(['middle' => 'auth'], function () {

    //Cuando el usuario se loggé, es decir, utliliza la autenticación
    //Se va directo al método index del controlador de mi modelo
    Route::get('/home', [SuperheroeController::class, 'index'])->name('home');
});
