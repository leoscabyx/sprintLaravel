@extends('layouts/plantilla')

    @section('title', 'Panel de administración de productos')


    @section('main')
    
    @if( session()->has('mensaje') )
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
        @endif

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                        <h2 class="text-uppercase ff_titulo">NUESTROS PRODUCTOS <strong class="color1">COCOLO!</strong></h2>
                        <hr class="bg-color1">
                        {{--dd($categorias)--}}
                        <div class="row">
                        <div class="col-md-12">
                        <table class="table table-bordered table-stripped table-hover">
                                    <thead class="thead-dark">
                                        
                                        <tr>
                                            <th>Nombre producto</th>
                                            <th>Precio</th>

                                            <th>Categoría</th>
                                            <th>Descripcion</th>

                                            <th>Imagen</th>
                                            <th colspan="3" class="">
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
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/adminProductos" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-group">
                                        <label for="nombre">Nombre de producto</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Ingresá un nuevo producto">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Precio</label>
                                        <input type="number" class="form-control" name="precio" id="nombre" value="" placeholder="Ingresá su precio">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Categoria</label>
                                        <select id="inputState" class="form-control" name="categoria">
                                        
                                            @foreach ($categorias as $categoria)
                                                
                                            <option value="{{ $categoria->idCategoria }}" >{{ $categoria->nombre }}</option>
                                            
                                            @endforeach
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Descripcion</label>
                                        <input type="text" class="form-control" name="descripcion" id="nombre" value="" placeholder="Ingresá una descripcion">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Estado</label>
                                        <select id="inputState" class="form-control" name="estado">                                                
                                            <option selected value="1">Activo</option>
                                            <option value="2">Inactivo</option>
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Imagen</label>
                                        <input type="file" class="form-control-file" name="imagen" id="exampleFormControlFile1">  
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
                                    @foreach( $productos as $producto )
                                        <tr>
                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->precio }}</td>

                                            <td>{{ $producto->getCategoria->nombre }}{{-- $producto->idCategoria --}}</td>
                                            <td>{{ $producto->descripcion }}</td>
                                            
                                            <td>
                                            {{--storage/$producto->imagen--}}
                                            <img src="{{asset('/img/' . $producto->imagen)  }}" style="width:50px; height:50px;" class="img-thumbnail" alt="imagenDeProducto">
                                            </td>
                                            <td>
                                                <?php $producto->nombre  = str_replace(" ", "_", $producto->nombre); ?>
                                                <?php $producto->descripcion  = str_replace(" ", "_", $producto->descripcion); ?>
                                                 <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalMod{{$producto->idProducto}}">
                                             <i class="far fa-edit fa-lg mr-2"></i>
                                                    Modificar
                                        </button>
    
                    <!-- Modal -->
                            <div class="modal fade" id="exampleModalMod{{$producto->idProducto}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modificar producto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="{{action('ProductosController@update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-group">
                                        <label for="nombre">Nombre de producto</label>
                                        <?php $producto->nombre  = str_replace("_", " ", $producto->nombre); ?>
                                        <input type="text" name="idProducto" value="{{$producto->idProducto}}" class="form-control" style="display:none">
                                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$producto->nombre}}" placeholder="Ingresá un nuevo producto">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Precio</label>
                                        <input type="number" class="form-control" name="precio" id="nombre" value="{{$producto->precio}}" placeholder="Ingresá su precio">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Categoria</label>
                                        <select id="inputState" class="form-control" name="categoria">
                                            @foreach ($categorias as $categoria)
                                                
                                            <option <?php if($producto->idCategoria == $categoria->idCategoria) { ?>  selected   <?php } ?> value="{{ $categoria->idCategoria }}"{{--selected="{{ $producto->getCategoria->nombre }}"--}}>{{ $categoria->nombre }}</option>
                                            
                                             @endforeach
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Descripcion</label>
                                        <?php $producto->descripcion  = str_replace("_", " ", $producto->descripcion); ?>
                                        <input type="text" class="form-control" name="descripcion" id="nombre" value="{{ $producto->descripcion }}" placeholder="Ingresá una descripcion">    
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Estado</label>
                                        <select id="inputState" class="form-control" name="estado">
                                            
                                            @if ($producto->estado == 1)

                                            <option selected value="1">Activo</option>
                                            <option value="2">Inactivo</option>

                                            @else
                                            <option value="1">Activo</option>
                                            <option selected value="2">Inactivo</option>
                                            @endif

                    {{--                        <option value="1">Activo</option>
                                            <option value="2">Inactivo</option>
                    --}}
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Imagen</label>
                                        <input type="file" class="form-control-file" name="imagen" id="exampleFormControlFile1">  
                                    </div>
                
                
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-dark">Guardar cambios</button>
                                    </form>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                                            </td>
                                            <td>
                                                <?php $producto->nombre  = str_replace(" ", "_", $producto->nombre); ?>
                                                 <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalElim{{$producto->nombre}}{{$producto->idProducto}}">
                                <i class="far fa-minus-square fa-lg mr-2"></i>
                                Eliminar
                            </button>
    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalElim{{$producto->nombre}}{{$producto->idProducto}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{action('ProductosController@destroy')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <?php $producto->nombre  = str_replace("_", " ", $producto->nombre); ?>
                                <label for="nombre">¿Estas seguro que deseas borrar el producto {{$producto->nombre}}?</label>
                                <input type="text" name="idProducto" value="{{$producto->idProducto}}" class="form-control" style="display:none">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$producto->nombre}}" placeholder="" style="display:none">    
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
                    {{ $productos->links() }}
                    </div>
                </div>  
                
            </div>
    </div>

</section>


    @endsection