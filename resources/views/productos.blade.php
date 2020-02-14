@extends('layouts.plantilla')

    @section('title', 'Productos')

    @section('main')

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                        <h2 class="text-uppercase ff_titulo">NUESTROS PRODUCTOS <strong class="color1">COCOLO!</strong></h2>
                        <hr class="bg-color1">
                        <div class="row">
                        @if ( count( $productos ) == 0 )
                            <div class="alert alert-warning">No se han encontrado productos</div>
                        @else
                        @foreach( $productos as $producto )
                                <div class="col-md-4 mt-3">
                                        <div class="card">
                                            <img src="img/prod3.jpeg" class="card-img-top" alt="Modelo 01">
                                            <div class="card-body">
                                              <h4 class="card-title">{{ $producto->nombre }}</h4>
                                              
                                              <a href="/producto/{{ $producto->idProducto }}" class="btn bg-color1 text-white">VER DETALLE</a>
                                            </div>
                                        </div>
                                </div>
                        @endforeach

                       

                        @endif
                                  
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