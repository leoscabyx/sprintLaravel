@extends('layouts.plantilla')

    @section('title', 'AdminPedidos')

    @section('main')

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                        <h2 class="text-uppercase ff_titulo">PEDIDOS <strong class="color1">COCOLO!</strong></h2>
                        <hr class="bg-color1">

                        <div class="row">
                        <div class="col-md-6">
                        <table class="table table-bordered table-hover table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>Numero Pedido</th>
                                <th>Cantidad</th>
                                <th></th>
</tr>
                            </thead>
                            <tbody>
                            @foreach( $pedidos as $pedido )
                            <tr>
                                <td>{{$pedido->numeroVenta}}</td>
                                <td>{{$pedido->cantidad}}</td>
                                <td><a class="btn bg-dark text-white" href="/pedido/{{ $pedido->numeroVenta }}">Ver Detalle</a></td>
</tr>
                        @endforeach
                            </tbody>
                        </table>
                        </div>
                        </div>

                        

                        <div class="row my-3">
                            <div class="col-md-12">
                            {{ $pedidos->links() }}
                            </div>
                        </div>  

                </div>  
                
            </div>
    </div>

</section>
    
    @endsection