@extends('plantilla')
@section('content')

<div class="content-wrapper"> 
    <section class="content-header">
        <h1>Bienvenido  {{ auth()->user()->name}} al sistema de Productores y Siembra</h1>
    </section>

    <section class="content">
        <div class="box">

        </div>
    </section>
</div>

@endsection