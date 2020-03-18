@extends('layouts.plantilla')

@section('title', 'Acceso restringido')

@section('main')


<section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">

                    <div class="row justify-content-center h-100">
                        <div class="col-sm-8 align-self-center text-center">
                            <div class="card shadow">
                                <div class="panel-body">        
                                    <h1 class="m-5">Acceso restringido</h1>
                                    <strong class="text-center">Usted no tiene acceso a esta zona</strong>
                                    <hr>
                                    <a class="btn btn-danger my-3" href="/">Volver a inicio</a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>  
</section>

@endsection