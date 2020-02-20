@extends('layouts.plantilla')

    @section('title', 'Detalle')

    @section('main')

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                        <div class="col-md-4 mt-3">
                                <div class="card">                                    
                                    <img src="/storage/{{$producto->imagen}}" class="card-img-top" alt="Detalle de imagen">
                                    <div class="card-body">
                                    <h4 class="card-title">{{ $producto->nombre }}</h4>
                                    <p><strong>Precio: </strong>{{ $producto->precio }}</p>
                                    <p><strong>Descripcion: </strong>{{ $producto->descripcion }}</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
        </div>

    </section>
        

    @endsection