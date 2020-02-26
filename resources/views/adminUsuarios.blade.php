@extends('layouts.plantilla')

    @section('title', 'Usuarios')

    @section('main')

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                        <h2 class="text-uppercase ff_titulo">NUESTRAS USUARIOS <strong class="color1">COCOLO!</strong></h2>
                        <hr class="bg-color1">
                        <div class="row">
                        <div class="col-md-12">
                        
                        <table class="table table-bordered table-hover table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Tipo de usuario</th>
                                <th colspan="2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-light px-4" data-toggle="modal" data-target="#exampleModalUsuario">
                                <i class="far fa-plus-square fa-lg mr-2"></i>
                                Agregar
                            </button>
    
                    <!-- Modal -->
                            <div class="modal fade" id="exampleModalUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/adminUsuarios" method="POST">
                                        @csrf
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="name" id="name" value="" placeholder="Ingresá nombre de usuario">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Apellido</label>
                                        <input type="text" class="form-control" name="surname" id="surname" value="" placeholder="Ingresá apellido de usuario">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="" placeholder="Ingresá email de usuario">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Tipo de usuario</label>
                                        <select id="inputState" class="form-control" name="tipoUsuario">

                                            <option selected value="miembro">Miembro</option>
                                            <option value="admin">Admin</option>

                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Contraseña</label>
                                        <input type="password" class="form-control" name="pass" id="pass" value="" placeholder="Ingresá contraseña de usuario">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Confirmar contraseña</label>
                                        <input type="password" class="form-control" name="repass" id="repass" value="" placeholder="Confirmar contraseña de usuario">    
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
                            @foreach( $usuarios as $usuario )
                            <tr>
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->surname}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->tipoUsuario}}</td>
                                <td>
                                    <?php $usuario->name  = str_replace(" ", "_", $usuario->name); ?>
                                    <?php $usuario->surname  = str_replace(" ", "_", $usuario->surname); ?>
                                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalMod{{$usuario->name}}{{$usuario->id}}{{$usuario->surname}}{{$usuario->tipoUsuario}}">
                                <i class="far fa-edit fa-lg mr-2"></i>
                                Modificar
                            </button>
    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalMod{{$usuario->name}}{{$usuario->id}}{{$usuario->surname}}{{$usuario->tipoUsuario}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{action('UsuariosController@update')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <?php $usuario->name  = str_replace("_", " ", $usuario->name); ?>
                                <input type="text" name="id" value="{{$usuario->id}}" class="form-control" style="display:none">
                                <input type="text" class="form-control" name="name" id="name" value="{{$usuario->name}}" placeholder="">    
                            </div>
                            <div class="form-group">
                                <label for="nombre">Apellido</label>
                                <?php $usuario->surname  = str_replace("_", " ", $usuario->surname); ?>
                                <input type="text" class="form-control" name="surname" id="surname" value="{{$usuario->surname}}" placeholder="">    
                            </div>
                            <div class="form-group">
                                <label for="nombre">Tipo de usuario</label>
                                <select id="inputState" class="form-control" name="tipoUsuario">
                                        
                                    @if ($usuario->tipoUsuario == "miembro")

                                            <option selected value="miembro">Miembro</option>
                                            <option value="admin">Admin</option>

                                            @else
                                            <option value="miembro">Miembro</option>
                                            <option selected value="admin">Admin</option>
                                            @endif
                                  </select>
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
                                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalElim{{$usuario->id}}{{$usuario->name}}{{$usuario->surname}}">
                                <i class="far fa-minus-square fa-lg mr-2"></i>
                                Eliminar
                            </button>
    
                    <!-- Modal -->
                        <div class="modal fade" id="exampleModalElim{{$usuario->id}}{{$usuario->name}}{{$usuario->surname}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{action('UsuariosController@destroy')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="nombre">¿Estas seguro que deseas borrar al usuario {{$usuario->name}} {{$usuario->surname}}?</label>
                                <input type="text" name="id" value="{{$usuario->id}}" class="form-control" style="display:none">
                                <input type="text" class="form-control" name="name" id="name" value="{{$usuario->name}}" placeholder="" style="display:none">    
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
                         {{ $usuarios->links() }}
                         </div>
                         </div>  
                
            </div>
    </div>

</section>
    
    @endsection