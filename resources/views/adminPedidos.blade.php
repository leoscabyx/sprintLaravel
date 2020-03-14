@extends('layouts.plantilla')

    @section('title', 'Categorias')

    @section('main')

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                        <h2 class="text-uppercase ff_titulo">NUESTRAS CATEGORIAS <strong class="color1">COCOLO!</strong></h2>
                        <hr class="bg-color1">

                        <div class="row">
                        <div class="col-md-6"><a href="Pedidos/Pendientes" class="btn bg-dark text-white">Pendientes </a></div>
                        <div class="col-md-6"><a href="Pedidos/Procesados" class="btn bg-dark text-white">Procesados</a></div>
                        </div>

                </div>  
                
            </div>
    </div>

</section>
    
    @endsection