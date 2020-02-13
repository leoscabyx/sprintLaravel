@extends('layouts.plantilla')

@section('title', 'admin')

@section('main')

<section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                    <div class="row">
                        <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item"><a class="color1" href="adminProductos">Panel de Administración Productos</a></li>
                            <li class="list-group-item"><a class="color1" href="adminUsuarios">Panel de Administración Usuarios</a></li>
                            <li class="list-group-item"><a class="color1" href="adminCategorias">Panel de Administración Categorias</a></li>
                            <li class="list-group-item"><a class="color1" href="adminPedidos">Panel de Administración Pedidos</a></li>
                            
                        </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div>

</section>

@endsection