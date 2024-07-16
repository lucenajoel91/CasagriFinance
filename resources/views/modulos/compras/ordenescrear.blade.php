@extends('plantilla')
@section('content')

<div class="content-wrapper"> 
    <section class="content-header">
        <h1>Bienvenido  {{ auth()->user()->name}} al sistema de Productores y Siembra</h1>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-9">

                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
        </div>
    </section>
</div>

@endsection