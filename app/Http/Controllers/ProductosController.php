<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $productos= Productos::all();
        return view('modulos.inventario.productos')->with('Productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = request()->validate([
            'name'=> ['required'],
            'sexo'=> ['required'],
            'Document'=> ['required'],
            'phone'=> ['required'],
            //'idArea'=> ['required'],
            'password' => ['required','string','min:8'],
            'email' => ['required','string','email','unique:users']
        ]);

        CLientes::create([
            'name'=>$datos['name'],
            'idArea'=>'0',
            'email'=>$datos['email'],
            'sexo'=>$datos['sexo'],
            'Document'=>$datos['Document'],
            'phone'=>$datos['phone'],
            'role'=>'Client',
            'password'=>Hash::make($datos['password'])
        ]);

        return redirect('Productos')->with('registrado', 'Si');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('inventario')->where('inventid',request('id'))->delete();
        return redirect('Productos')->with('Eliminado', 'Si');
    }
}
