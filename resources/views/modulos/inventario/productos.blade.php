@extends('plantilla')
@section('content')
<div class="content-wrapper"> 
    <section class="content-header">
        <h1>Inventario</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header" >
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearProducto" >Crear Producto</button>

            </div>

            <div class="box-body" style="overflow-x: auto;">
                <table class="table table-bordered table-hover table-striped dt-responsive">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Presentación</th>
                            <th>Unidad de Negocio</th>
                            <th>Línea</th>
                            <th>Sublínea</th>
                            <th>Categoría</th>
                            <th>Componente</th>
                            <th>Marca</th>
                            <th>Maneja Lote</th>
                            <th>Costo 1</th>
                            <th>Costo 2</th>
                            <th>Costo 3</th>
                            <th>Precio Mayorista</th>
                            <th>Precio Detal</th>
                            <th>Precio Prepagado</th>
                            <th>Precio Apartado</th>
                            <th>Precio Piso</th>
                            <th>Und/Hectáreas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Productos as $Producto)
                            <tr>
                                <td>{{$Producto->inventId}}</td>
                                <td>{{$Producto->nombre}}</td>
                                <td>{{$Producto->presentacion}}</td>
                                <td>{{$Producto->unidadNeg}}</td>
                                <td>{{$Producto->linea}}</td>
                                <td>{{$Producto->sublinea}}</td>
                                <td>{{$Producto->categoria}}</td>
                                <td>{{$Producto->componente}}</td>
                                <td>{{$Producto->marca}}</td>
                                <td>{{$Producto->manejalote ? 'Sí' : 'No'}}</td>
                                <td>{{$Producto->costo1}}</td>
                                <td>{{$Producto->costo2}}</td>
                                <td>{{$Producto->costo3}}</td>
                                <td>{{$Producto->prcMayor}}</td>
                                <td>{{$Producto->prcDetal}}</td>
                                <td>{{$Producto->prcPrepagado}}</td>
                                <td>{{$Producto->prcApartado}}</td>
                                <td>{{$Producto->prcPiso}}</td>
                                <td>{{$Producto->cantHa}}</td>
                                <td>
                                    <a href="EditarProducto/{{$Producto->id}}">
                                        <button class="btn btn-success EditarProducto" Did="{{$Producto->idProd}}">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </a>
                                    <button class="btn btn-danger Eliminar" Did="Producto/{{$Producto->idProd}}">
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


<div id="CrearProducto" class="modal fade">
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