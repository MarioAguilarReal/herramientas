<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('index');
});

//login
Route::view('/login', 'login')->name('login'); //obtener vista
Route::post('/login', [LoginController::class, 'login'])->name('login'); //enviar datos para logearse

//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); //enviar datos para deslogearse

//register
Route::view('/register', 'formUser')->name('register'); //obtener vista
Route::post('/register', [LoginController::class, 'register'])->name('register'); //enviar datos para registrarse

//edit user
Route::view('/update-user', 'formUser')->name('update-user'); //obtener vista
Route::post('/update-user', [LoginController::class, 'update'])->name('update-user'); //enviar datos para editar
