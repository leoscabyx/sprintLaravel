@extends('layouts/plantilla')

    @section('title', 'Panel de administración de productos')


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
                        <h2 class="text-uppercase ff_titulo">NUESTROS PRODUCTOS <strong class="color1">COCOLO!</strong></h2>
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
                                            <th colspan="3" class="text-center">
                                                <a href="/formAgregarProducto" class="btn btn-outline-light px-4">
                                                    <i class="far fa-plus-square fa-lg mr-2"></i>
                                                    agregar
                                                </a>
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
                                                <img src="images/productos/{{-- $producto->prdImagen --}}" class="img-thumbnail">
                                            </td>
                                            <td>
                                                <a href="/formEditarProducto/{{ $producto->idProducto }}" class="btn btn-outline-secondary px-4">
                                                    <i class="far fa-edit fa-lg mr-2"></i>
                                                    Modificar
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/formEliminarProducto/{{ $producto->idProducto }}" class="btn btn-outline-secondary px-4">
                                                    <i class="far fa-minus-square fa-lg mr-2"></i>
                                                    Eliminar
                                                </a>
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