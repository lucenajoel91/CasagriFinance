<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\HomeController;
use App\http\controllers\InicioController;
use App\http\controllers\ProductoresController;
use App\http\controllers\ProductosController;
use App\http\controllers\UsuariosController;

Route::get('/Ingresar', function () {
    return view('modulos.login.login');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('Inicio',[InicioController::class,'index']);

//Usuarios
Route::get('Datos',[InicioController::class,'Datos']);
Route::put('DatosUpdate/{id}',[InicioController::class,'DatosUpdate']);
Route::get('Usuarios',[UsuariosController::class,'index']);


//Rutas productores
Route::get('Productores',[ProductoresController::class,'index']);

//Rutas productos
Route::get('Productos',[ProductosController::class,'index']);
Route::post('Productos',[ProductosController::class,'store']);
Route::get('EliminarProducto/{id}',[ProductosController::class,'destroy']);


