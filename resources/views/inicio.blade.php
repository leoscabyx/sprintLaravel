@extends('layouts.plantilla')

    @section('title', 'Cocolo')

    @section('main')
        <section id="bienvenida" class="container-fluid">

                
            <div class="row">
                <div class="col-md-8 offset-md-2  py-5">
                    
                    
                    <div class= "row">
                            <div class="col-md-6 py-3 d-flex flex-md-column justify-content-right align-items-center">
                                <h1 class="ff_titulo text-white">hope you feel beautiful with #cocolo</h1>
                            </div>
                            <div class="col-md-6 text-center py-3">
                                    <img class="img-fluid logo" src="https://instagram.faep9-1.fna.fbcdn.net/vp/2ae8249ed6e76a4df5b5498871024f5b/5E5C3D6D/t51.2885-19/s150x150/62624376_2233291810094827_6461921087314722816_n.jpg?_nc_ht=instagram.faep9-1.fna.fbcdn.net" alt="Logo Principial">
                            </div>
                    </div>
                        
                    
                </div>
            </div>


    </section>

    <section class="container">
        <div class="row">
                <div class="col-md-12 py-4">
                    <h2 class="text-uppercase ff_titulo">Comprá con nosotras!</h2>
                    <hr class="bg-color1">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h3 class="my-4">ELEGÍ EL MODELO</h3>
                        
                            <p> <a href="productos.php"><ion-icon class="color1"  name="gift" size="large"></ion-icon></a></p>
                            <p>Elegí el modelo que más te guste y agregalo al carrito. Podés elegir varios!!!</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h3 class="my-4">REGISTRATE</h3>
                            <p><a href="registro.php"><ion-icon class="color1"  name="log-in" size="large"></ion-icon></a></p>
                            <p>Registrate para confirmar tu compra, el modo de envío y el pago</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h3 class="my-4">DISFRUTÁ TU COCOLO</h3>
                            <p><ion-icon class="color1" name="happy" size="large"></ion-icon></p>
                            <p>Llevá tus Cocolo a todos lados!!!!</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="carrusel" class="container py-4">
    <div class="row">
        <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/prod6.jpeg" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/prod5.jpeg" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/prod7.jpeg" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
        </div>
    </div>

    </section>


    @endsection