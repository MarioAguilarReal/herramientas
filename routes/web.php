<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SpeciesController;

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
    return view('login');
});


//PUBLIC ROUTES
//SESSION Routes
Route::view('/login', 'login')->name('login'); //obtener vista
Route::post('/login', [LoginController::class, 'login'])->name('login'); //enviar datos para logearse

//PRIVATE ROUTES
Route::middleware('auth')->group(function(){

    //SESSION Routes
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); //cerrar sesión

    //HOME Routes
    route::view('/', 'index')->name('index'); //obtener vista

    //USER Routes
    Route::prefix('users')->group(function (){
        Route::get('/all', [UserController::class, 'all'])->name('users'); //obtener vista con todos los usuarios
        Route::view('/register', 'users.register')->name('register'); //obtener vista
        Route::post('/register', [UserController::class, 'register'])->name('register'); //enviar datos para registrarse

        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit'); //obtener vista para editar usuario
        Route::put('/edit/{id}', [UserController::class, 'update'])->name('update-user'); //enviar datos para actualizar

        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('users.delete'); //eliminar usuario
    });

    Route::prefix('species')->group(function () {
        Route::get('/all', [SpeciesController::class, 'all'])->name('species'); //obtener vista con todas las especies
        Route::view('/create', 'species.create')->name('species.create'); //obtener vista
        Route::post('/create', [SpeciesController::class, 'create'])->name('species.create'); //enviar datos para crear

        Route::get('/edit/{id}', [SpeciesController::class, 'edit'])->name('species.edit'); //obtener vista para editar especie
        Route::put('/edit/{id}', [SpeciesController::class, 'update'])->name('species.update'); //enviar datos para actualizar

        Route::get('/delete/{id}', [SpeciesController::class, 'delete'])->name('species.delete'); //eliminar especie
    });

    //ANIMALS Routes
});
