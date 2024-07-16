<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Proveedores;
use App\Models\Productos;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
  
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $compras= Compras::all();
        return view('modulos.compras.ordenes')->with('compras',$compras);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compras $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compras $compras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compras $compras)
    {
        //
    }
}
