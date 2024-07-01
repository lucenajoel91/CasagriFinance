@extends('plantilla')
@section('content')

<div class="content-wrapper"> 
    <section class="content-header">
        <h1>Mi Perfil</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                
            </div>
            <div class="box-body">
                <form method="post" action="{{url('DatosUpdate/'.auth()->user()->id)}}">
                    @csrf
                    @method('put')
                   <div class="row">
                        <div class="col-md-6 col-xs-12">


                            <h2>Nombre y Apellido</h2>
                            <input type="text" class="input-lg" name="name" required value="{{auth()->user()->name}}">
                            
                            <h2>Cedula</h2>
                            <input type="text" class=" input-lg" name="Document" required value="{{auth()->user()->documento}}">
                            
                            <h2>Rol</h2>
                            <select class=" input-lg" name="rol" required="" disabled>
                                <option value="">Seleccionar</option>
                                <option value="Masculino" {{ auth()->user()->rol == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                                <option value="Femenino" {{ auth()->user()->rol == 'Analista' ? 'selected' : '' }}>Analista</option>
                            </select>
                        </div>    
                        <div class="col-md-6 col-xs-12">
                            <h2>Telefono</h2>
                            <input type="text" class=" input-lg" name="phone" value="{{auth()->user()->telefono}}">

                            <h2>email</h2>
                            <input type="text" class=" input-lg" name="email" value="{{auth()->user()->email}}" disabled>

                            <h2>Constraseña nueva</h2>
                            <input  class=" input-lg" name="passwordN"  type="text">
                            <input  class=" input-lg" name="password" required value="{{auth()->user()->password}}" type="hidden">
                            <br><br>
                            <button type="submit" class="btn btn-success pull-right">Actualizar datos</button>
                        </div>

                        
                   </div>

                </form>

            </div>
        </div>

    </section>    
</div>
@endsection