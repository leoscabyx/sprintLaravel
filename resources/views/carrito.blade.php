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
                                            <th></th>
                                            
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
                                            <td>
                                                    <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalElim{{$pedido->idPedido}}">
                                <i class="far fa-minus-square fa-lg mr-2"></i>
                                Eliminar
                            </button>
    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalElim{{$pedido->idPedido}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Pedido</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{action('CarritoController@destroy')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="nombre">¿Estas seguro que deseas borrar el item {{$pedido->getProducto->nombre}}?</label>
                                <input type="text" name="idPedido" value="{{$pedido->idPedido}}" class="form-control" style="display:none">
                                    
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
                    <form class="col-sm-12" action="" method="post">
                    @csrf
                    <input type="hidden" name="idUsuario" value="{{Auth::user()->id}}">
                            <button class="col-md-4 offset-md-4 btn bg-dark text-white " type="submit">Confirmar</button>
                    </form>
                    
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                    {{ $pedidos->links() }}
                    </div>
                </div> 
                            @endif
                         
                
            </div>
    </div>

</section>


    @endsection