@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('main')
<main class="pb-5">
    <section class="container">
        <div class="row">
            <div class="col-md-12 py-5">
                <h1 class="ff_titulo color1">Contactanos</h1>
                <div class="row">
                    <div class="col-md-6">
                        <hr class="bg-color1">
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-12">
                
                <section class="row">
                    <article class="col-md-6">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresá tu nombre completo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Ingresá tu email">
                            
                            </div>
                            
                            <div class="form-group">
                                <label for="tel">Telefono</label>
                                <input type="tel" class="form-control" name="tel" id="tel" placeholder="Ingresá tu número de telefono">
                            </div>
                            <div class="form-group">
                                <label for="mensaje">Mensaje</label>
                                <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                            </div>
                            
                            <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#contacto">
            
                                Contactanos
                            </button>
                        </form>
                    </article>

                </section>
                

        <!-- Modal -->
        <div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                Gracias por contactarnos, pronto nos comunicaremos con vos!
                </div>
                
                </div>
            </div>
        </div>
                
            </div>
        </div>
    </section>
</main>
@endsection