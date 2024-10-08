<?php

namespace App\Http\Controllers;

use App\Models\Productores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoresController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $productores= Productores::all();
        return view('modulos.productores.productores')->with('productores',$productores);
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
    public function show(Productores $productores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productores $productores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productores $productores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productores $productores)
    {
        //
    }
}
