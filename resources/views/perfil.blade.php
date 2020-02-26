@extends('layouts.plantilla')

    @section('title', 'Perfil')

    @section('main')

    <div class="container h-100 py-5">
        <div class="row justify-content-center h-100">
            <div class="col-sm-8 align-self-center text-center">
                <div class="card shadow">
                    <div class="card-body">
                      <label for="">Usuario</label>           
                      <h5 for="">{{Auth::user()->name}} {{Auth::user()->surname}}</h5>
                      <br>
                      <label for="">Email</label>
                      <h5 for="">{{Auth::user()->email}} </h5>                
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @endsection
    