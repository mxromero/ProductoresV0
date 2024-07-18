<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*

Route::middleware('auth')->group(function(){

    Route::get('/home',[HomeController::class,'Dashboard'])->name('home');


});

Route::get('/', function(){
    return redirect()->route('login');
});

Auth::routes([
    'register' => true
]);*/
// Rutas de autenticación

Auth::routes([
    'register' => true // Asegúrate de que 'register' esté activado
]);

// Grupo de rutas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'Dashboard'])->name('home');
    Route::get('/register',[HomeController::class,'registro'])->name('register');
});

// Redirección de la ruta raíz al login
Route::get('/', function () {
    return redirect()->route('login');
});
