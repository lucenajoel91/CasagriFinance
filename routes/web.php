<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\HomeController;
use App\http\controllers\InicioController;
use App\http\controllers\ProductoresController;
use App\http\controllers\ProductosController;

Route::get('/Ingresar', function () {
    return view('modulos.login.login');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('Inicio',[InicioController::class,'index']);

//Rutas productores
Route::get('Productores',[ProductoresController::class,'index']);

//Rutas productos
Route::get('Productos',[ProductosController::class,'index']);

