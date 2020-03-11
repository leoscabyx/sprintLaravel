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
                        <h2 class="text-uppercase ff_titulo">Carrito de Pedido <strong class="color1">COCOLO!</strong></h2>
                        <hr class="bg-color1">
                        <div class="row">
                        <div class="col-md-12">
                            @if ( count($pedidos) == 0 )
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-secondary" role="alert">
                                                No tenes nada agregado al carrito
                                        </div>
                                    </div>
                                </div>
                            @else
                            <table class="table table-bordered table-stripped table-hover">
                                    <thead class="thead-dark">
                                        
                                        <tr>
                                            <th>Nombre producto</th>
                                            <th>Precio</th>

                                            <th>Cantidad</th>
                                            <th>Sub-Total</th>

                                            <th>Imagen</th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                            {{--dd($pedidos)--}}
                                            {{--dd($usuarios)--}}
                                            {{--dd($productos)--}}
                                    @foreach( $pedidos as $pedido )
                                        <tr>
                                            <td>{{ $pedido->getProducto->nombre }}</td>
                                            <td>{{ $pedido->getProducto->precio }} $</td>

                                            <td>{{ $pedido->cantidad }}{{-- $producto->getProducto->nombre --}}{{-- $producto->idCategoria --}}</td>
                                            <td>{{ $pedido->getProducto->precio * $pedido->cantidad  }} $</td>
                                            
                                            <td>
                                            <img src="{{ asset('img/' . $pedido->getProducto->imagen)}}" style="width:50px; height:50px;" class="img-thumbnail" alt="imagenDeProducto">
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                                  
                </div>
                <div class="row my-3">
                    <form class="col-sm-12" action="" method="post">
                            <button class="col-md-4 offset-md-4 btn bg-dark text-white " type="submit">Confirmar</button>
                    </form>
                    
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                    {{ $productos->links() }}
                    </div>
                </div> 
                            @endif
                         
                
            </div>
    </div>

</section>


    @endsection