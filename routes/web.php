<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\HomeController;
use App\http\controllers\InicioController;

Route::get('/Ingresar', function () {
    return view('modulos.login.login');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('Inicio',[InicioController::class,'index']);
