@extends('layouts.plantilla')

@section('title', 'Acceso restringido')

@section('main')

<div class="container h-100">
    <div class="row justify-content-center h-100">
        <div class="col-sm-8 align-self-center text-center">
            <div class="card shadow">
                <div class="panel-body">        
                  <h1 class="m-5">Acceso restringido</h1>
                  <strong class="text-center">Usted no tiene acceso a esta zona</strong>
                  <hr>
                  <a class="btn btn-danger" href="/">Volver a inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>  

@endsection