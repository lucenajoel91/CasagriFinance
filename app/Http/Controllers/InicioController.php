<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class InicioController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('modulos.inicio.Inicio');
    }

    public function Datos()
    {
        // $usuarios = User::find($id->id);
        // return view('modulos.inicio.Datos')->with('usuarios',$usuarios);
        return view('modulos.inicio.Datos');
        
    }

    public function DatosUpdate(Request $request, User $id)
    {
        if(request('passwordN') == ""){
            // dd(auth()->user()->id);
           // dd($id["id"]);
            $datos = request()->validate([
                'name'=> ['required'],
                //'rol'=> ['required'],
                'Document'=> ['required'],
                'phone'=> ['required']
               
            ]);

            DB::table('users')->where('id', $id["id"])->update(['name' => $datos["name"],
            'documento' => $datos["Document"], 'telefono' => $datos["phone"]]);

        } else {
            $datos = request()->validate([
                'name'=> ['required'],
                //'rol'=> ['required'],
                'Document'=> ['required'],
                'phone'=> ['required'],
                'passwordN' => ['required','string','min:8']
            ]);

            DB::table('users')->where('id', $id["id"])->update(['name'=> $datos["name"], 
            'documento'=>$datos["Document"], 'telefono'=>$datos["phone"]
            , 'password'=> hash::make($datos["passwordN"])]);
        }

        return view('modulos.inicio.Datos')->with('Actualizado', 'Si');;
        
    }


}
