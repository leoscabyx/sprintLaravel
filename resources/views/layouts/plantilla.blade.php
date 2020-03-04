<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}} ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-color1">
            <div class="container">
            <a class="navbar-brand ff_titulo" href="./">Cocolo-ve</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/faq">F.A.Q.</a>
                    </li>
                    @if(Auth::user() != null)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/perfil">Perfil</a>
                    @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/contacto">Contacto</a>
                    </li>
                    @if(Auth::user() != null )
                    @if(Auth::user()->idTipoUsuario == 1)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/admin">Admin</a>
                    </li>
                    @endif
                    @endif
                    <li>
                        
                    </li>
                    

                    
                </ul>

                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/carrito"><ion-icon name="cart" size=""></ion-icon></a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
            </div>
        </nav>
    </header>

    <main>

        @yield('main')

    </main>


    <footer class="container-fluid bg-dark py-4 text-white">
        <section class="container">
                <strong class="ff_titulo display-4">Cocolo-ve</strong>
            <div class="row">
                <div class="col-md-6">
                
                    <p>Hand Made Accessories <br> Hope you feel beautiful with #cocolo</p>
                    
                </div>
                <div class="col-md-6">
                    <p>Ciudad Autonoma de Buenos Aires, Argentina.</p>
                    <ul>
                        <li>Puntos de entrega en Caballito</li>
                        <li>Envios a todo el país</li>
                    </ul>
                    <p>Seguinos en redes y WhatsApp!</p>
                    <a href="https://instagram.com/cocolo_ve?igshid=67qwjzxr7sks"><ion-icon class="color1" name="logo-instagram" size="large"></ion-icon></i></a>
                    <a href=""><ion-icon class="color1" name="logo-pinterest" size="large"></ion-icon></a>
                    <a class="color1" href="tel:+5491123898777"><ion-icon class="color1" name="logo-whatsapp" size="large"></ion-icon></a> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 py-2">
                    <p>Derechos Reservados - &copy; <?php  echo date('Y');  ?> </p>
                </div>
            </div>
        </section>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>