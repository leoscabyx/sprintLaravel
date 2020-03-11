@extends('layouts.plantilla')

    @section('title', 'Detalle')

    @section('main')

    <section class="container-fluid">
    <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 py-5">
                        <div class="col-md-4 mt-3">
                                <div class="card">                                    
                                    <img src="{{asset('img/' . $producto->imagen)}}" class="card-img-top" alt="Detalle de imagen">
                                    <div class="card-body">
                                    <h4 class="card-title">{{ $producto->nombre }}</h4>
                                    
                                    @if(Auth::user() != null )
                                    @if(Auth::user()->idTipoUsuario == 2)

                                    <!--<button class="btn bg-color1 text-white"><i class="fas fa-cart-arrow-down"></i></button>
                                    <button class="btn bg-color1 text-white"><i class="fas fa-cart-plus"></i></button>-->
                                    
                                    <form class="my-2" action="">
                                        
                                            <select class="form-control">
                                                <option value="1">1 unidad</option>
                                                <option value="2">2 unidad</option>
                                                <option value="3">3 unidad</option>
                                                <option value="4">4 unidad</option>
                                                <option value="5">5 unidad</option>
                                            </select>
                                            <button class="d-block btn bg-dark text-white my-3" type="submit">Agregar a Pedido</button>
                                            
                                    </form>

                                    @endif
                                    @endif
                                    
                                    <p><strong>Precio: </strong>{{ $producto->precio }}</p>
                                    <p><strong>Descripcion: </strong>{{ $producto->descripcion }}</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
        </div>

    </section>

    <script>
        let input = document.querySelector('#cantidad');
        let btnMas = document.querySelector('.btn .fas.fa-cart-plus');
        let btnMenos = document.querySelector('.btn .fas.fa-cart-arrow-down');

        console.log(btnMas)

        btnMas.onclick = function () {
            console.log(input.value);
            let resultado = input.value++;
            input.value = resultado;
        }
    </script>
        

    @endsection