@extends('layouts.plantilla')

    @section('title', 'Detalle Pedido')

    @section('main')

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                
                {{--dd($pedido)--}}
                
                <h2 class="text-uppercase ff_titulo">PEDIDO <strong class="color1">COCOLO!</strong></h2>
                        <hr class="bg-color1">
                        
                        <div class="row">
                        <div class="col-md-6">
                        <table class="table table-bordered table-hover table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>SubTotal</th>
                                <th>Imagen</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $pedido as $p )
                            <tr>
                            
                                <td>{{ $p->getProducto->nombre }}</td>
                                
                                <td>{{ $p->cantidad }}</td>

                                <td>{{ $p->getProducto->precio }} $</td>
                                <td>{{ $p->getProducto->precio * $p->cantidad  }} $</td>
                                
                                <td>
                                <img src="{{ asset('img/' . $p->getProducto->imagen)}}" style="width:50px; height:50px;" class="img-thumbnail" alt="imagenDeProducto">
                                </td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                        </div>
                        </div>
                </div>
            </div>
    </div>

    </section>
  @endsection
