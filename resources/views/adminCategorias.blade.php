@extends('layouts.plantilla')

    @section('title', 'Categorias')

    @section('main')

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                        <h2 class="text-uppercase ff_titulo">NUESTROS CATEGORIAS <strong class="color1">COCOLO!</strong></h2>
                        <hr class="bg-color1">
                        <div class="row">
                        <div class="col-md-12">
                        @if ( count( $categorias ) == 0 )
                            <div class="alert alert-warning">No se han encontrado categorias</div>
                        @else
                        <table class="table table-bordered table-hover table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>categoria</th>
                                <th colspan="2">
                                    <a href="/formAgregarCategoria" class="btn btn-dark">Agregar</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $categorias as $categoria )
                            <tr>
                                <td>{{$categoria->idCategoria}}</td>
                                <td>{{$categoria->nombre}}</td>
                                <td>
                                    <a href="" class="btn btn-outline-secondary">
                                        Modificar
                                    </a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-outline-secondary">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                        @endif
                        </div>
                        

                       

                        
                                  
                </div>
                <div class="row my-3">
                         <div class="col-md-12">
                         {{ $categorias->links() }}
                         </div>
                         </div>  
                
            </div>
    </div>

</section>
    
    @endsection