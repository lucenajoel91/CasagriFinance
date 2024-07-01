@extends('plantilla')
@section('content')
<div class="content-wrapper"> 
    <section class="content-header">
        <h1>Gestor de Usuarios</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearUsuario">Crear usuario</button>

            </div>

            <div class="box-body">
                <table class="table table-bordered table-hover table-striped dt-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cedula</th>
                            <th>Nombre y Apellido</th>
                            <th>Perfil</th>
                            <th>Email</th>
                            <th>Telefono</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($usuarios as $usuario)
                       
                            <tr>
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->documento}}</td>
                                <td>{{$usuario->name}}</td>
                                
                                <td>{{$usuario->rol}}</td>
                                
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->telefono}}</td>
                                <td>
                                   <a href="EditarUsuario/{{$usuario->id}}">
                                        <button class="btn btn-success EditarClient" Did="{{$usuario->id}}">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                   </a>
                                    <button class="btn btn-danger Eliminar" Did="usuario/{{$usuario->id}}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                     
                       @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</div>


<div id="CrearUsuario" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
                @csrf
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Nombre y Apellido</h2>
                            <input type="text" class="form-control input-lg" name="name" required>
                        </div>
                        <div class="form-group">
                            <h2>Cedula</h2>
                            <input type="text" class="form-control input-lg" name="Document" required>
                        </div>
                        <div class="form-group">
                            <h2>Sexo</h2>
                            <select class="form-control input-lg" name="sexo" required="">
                                <option value="">Seleccionar</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <h2>Area</h2>
                            <select class="form-control input-lg" name="idArea" >
                                <option value="">Seleccionar</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <h2>Telefono</h2>
                            <input type="text" class="form-control input-lg" name="phone" value="">
                        </div>   
                        <div class="form-group">
                            <h2>Correo</h2>
                            <input type="email" class="form-control input-lg" name="email" required value="{{old('email')}}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
                        <div class="form-group">
                            <h2>Constraseña</h2>
                            <input type="text" class="form-control input-lg" name="password" required>
                        </div>                    
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>

            </form>
        </div>
    </div>

</div>


@endsection