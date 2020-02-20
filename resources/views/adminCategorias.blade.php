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
                        <div class="col-md-12">
                        
                        <table class="table table-bordered table-hover table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>categoria</th>
                                <th colspan="2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-light px-4" data-toggle="modal" data-target="#exampleModal">
                                <i class="far fa-plus-square fa-lg mr-2"></i>
                                Agregar
                            </button>
    
                    <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar categoria</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/adminCategorias" method="POST">
                                        @csrf
                                    <div class="form-group">
                                        <label for="nombre">Nombre de Categoria</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Ingresá una nueva categoria">    
                                    </div>
                
                
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-dark">Guardar cambios</button>
                                    </form>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $categorias as $categoria )
                            <tr>
                                <td>{{$categoria->idCategoria}}</td>
                                <td>{{$categoria->nombre}}</td>
                                <td>
                                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalMod{{$categoria->nombre}}{{$categoria->idCategoria}}">
                                <i class="far fa-edit fa-lg mr-2"></i>
                                Modificar
                            </button>
    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalMod{{$categoria->nombre}}{{$categoria->idCategoria}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar categoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{action('CategoriasController@update')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre de Categoria</label>
                                <input type="text" name="idCategoria" value="{{$categoria->idCategoria}}" class="form-control" style="display:none">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$categoria->nombre}}" placeholder="">    
                            </div>
        
        
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-dark">Editar cambios</button>
                            </form>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                                </td>
                                <td>
                                                    <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalElim{{$categoria->nombre}}{{$categoria->idCategoria}}">
                                <i class="far fa-minus-square fa-lg mr-2"></i>
                                Eliminar
                            </button>
    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalElim{{$categoria->nombre}}{{$categoria->idCategoria}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar categoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{action('CategoriasController@destroy')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="nombre">¿Estas seguro que deseas borrar la categoria {{$categoria->nombre}}?</label>
                                <input type="text" name="idCategoria" value="{{$categoria->idCategoria}}" class="form-control" style="display:none">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$categoria->nombre}}" placeholder="" style="display:none">    
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
                         <div class="col-md-12">
                         {{ $categorias->links() }}
                         </div>
                         </div>  
                
            </div>
    </div>

</section>
    
    @endsection