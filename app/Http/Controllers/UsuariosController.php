<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuariosController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios= User::all();
        return view('modulos.usuarios.usuarios')->with('usuarios',$usuarios);
    }




}
