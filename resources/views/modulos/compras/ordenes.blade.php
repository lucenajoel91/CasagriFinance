@extends('plantilla')
@section('content')

<div class="content-wrapper"> 
    <section class="content-header">
        <h1>Ordenes</h1>
    </section>

    <section class="content">
    <div class="box">
            <div class="box-header">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#">Nueva Orden</button>

            </div>

            <div class="box-body">
                <table class="table table-bordered table-hover table-striped dt-responsive">
                    <thead>
                        <tr>
                            <th>Nro Orden</th>
                            <th>tipo Orden</th>
                            <th>Fecha</th>
                            <th>Base</th>
                            <th>Iva</th>
                            <th>Total</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($compras as $compra)
                       
                            <tr>
                                <td>{{$compra->idOrden}}</td>
                                <td>{{$compra->tipoOrden}}</td>
                                <td>{{$compra->fechaCreacion}}</td>
                                
                                <td>{{$compra->totalBase}}</td>
                                
                                <td>{{$compra->totalIva}}</td>
                                <td>{{$compra->total}}</td>
                                <td>
                                   <a href="Editarcompra/{{$compra->id}}">
                                        <button class="btn btn-success EditarClient" Did="{{$compra->id}}">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                   </a>
                                    <button class="btn btn-danger Eliminar" Did="compra/{{$compra->id}}">
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

@endsection