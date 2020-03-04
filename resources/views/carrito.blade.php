@extends('layouts/plantilla')

    @section('title', 'Carrito')


    @section('main')
    
    @if( session()->has('mensaje') )
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
        @endif

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                        <h2 class="text-uppercase ff_titulo">Elegi entre nuestros productos <strong class="color1">COCOLO!</strong></h2>
                        <hr class="bg-color1">
                        <div class="row">
                        <div class="col-md-12">
                        <table class="table table-bordered table-stripped table-hover">
                                    <thead class="thead-dark">
                                        
                                        <tr>
                                            <th>Nombre producto</th>
                                            <th>Precio</th>

                                            <th>Categoría</th>
                                            <th>Descripcion</th>

                                            <th>Imagen</th>
                                            <th colspan="3" class=""> 
                    
                                            </th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                    @foreach( $productos as $producto )
                                        <tr>
                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->precio }}</td>

                                            <td>{{ $producto->getCategoria->nombre }}{{-- $producto->idCategoria --}}</td>
                                            <td>{{ $producto->descripcion }}</td>
                                            
                                            <td>
                                            <img src="storage/{{$producto->imagen}}" style="width:50px; height:50px;" class="img-thumbnail" alt="imagenDeProducto">
                                            </td>
                                            <td>
                                                <?php $producto->nombre  = str_replace(" ", "_", $producto->nombre); ?>
                                                <?php $producto->descripcion  = str_replace(" ", "_", $producto->descripcion); ?>
                                                 <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalMod{{ $producto->nombre }}{{$producto->precio}}{{$producto->idProducto}}{{ $producto->descripcion }}{{ $producto->getCategoria->nombre }}">
                                             <i class="far fa-edit fa-lg mr-2"></i>
                                                    Modificar
                                        </button>
    
            
                                    
                                            </td>
                                            <td>
                                                <?php $producto->nombre  = str_replace(" ", "_", $producto->nombre); ?>
                                                 <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalElim{{$producto->nombre}}{{$producto->idProducto}}">
                                <i class="far fa-minus-square fa-lg mr-2"></i>
                                Eliminar
                            </button>
    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalElim{{$producto->nombre}}{{$producto->idProducto}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{action('ProductosController@destroy')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <?php $producto->nombre  = str_replace("_", " ", $producto->nombre); ?>
                                <label for="nombre">¿Estas seguro que deseas borrar el producto {{$producto->nombre}}?</label>
                                <input type="text" name="idProducto" value="{{$producto->idProducto}}" class="form-control" style="display:none">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$producto->nombre}}" placeholder="" style="display:none">    
                            </div>
        
        
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                                  
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                    {{ $productos->links() }}
                    </div>
                </div>  
                
            </div>
    </div>

</section>


    @endsection