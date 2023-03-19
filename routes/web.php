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
    return view('welcome');
});

Route::get('/superheroe', function () {
    return view('superheroeView.index'); /**Accedemos a la vista index de la carpetae empleado */
});

//Route::get('/superheroe', [SuperheroeController::class, 'index']);

Route::get('superheroe/create', [SuperheroeController::class, 'create']);

Route::resource('superheroe', SuperheroeController::class);
