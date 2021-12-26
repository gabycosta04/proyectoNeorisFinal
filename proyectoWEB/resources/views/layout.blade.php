<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  JS  -->
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--  Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--  Custom CSS -->
        <link rel="shortcurt icon" href="{{ asset('src/4.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/iniciarsesión.css') }}">
        <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
        <link rel="stylesheet" href="{{ asset('css/subirmascota.css') }}">
        <link rel="stylesheet" href="{{ asset('css/buscarmascotas.css') }}">
        <link rel = "preconnect" href = "https://fonts.googleapis.com">
        <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
        <link href = "https: //fonts.googleapis.com/css2? family = Open + Sans: wght @ 300 & display = swap "rel =" stylesheet ">

        <title>Adoptame.com</title>
    </head>

    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Adopta.Me</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public">Inicio</a>
                        <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones">Adopciones</a>
                        <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones/nueva">Subir adopcion</a>

                        <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas">Mascotas</a>
                        <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas/perdidas">Mascotas Perdidas</a>

                        @if($sesion)
                            <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public">Bienvenido usuario: {{$username}}</a>
                            <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/logout">Log out</a>
                                @if($admin)
                                    <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones/administrar">Administrar publicaciones</a>
                                @endif
                        @else
                            <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/login">Iniciar Sesion</a>
                            <li class="nav-item"><a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/register">Registrarme</a>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <header>


            @yield('header')

            <div class="wave"style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C190.46,136.50 322.51,-54.94 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path></svg></div>

        </header>

        <main>
            @yield('contenidoPrincipal')
        </main>


        <footer>
                <div class="conteiner">
                    <div class="row">
                            <div class="col-md-4 col-md">
                                <div class="content-foo">
                                    <h4>Celular</h4>
                                    <p>1126328984</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-md">
                                <div class="content-foo">
                                    <h4>Email</h4>
                                    <p>Patitas_mojadas@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-md">
                                <div class="content-foo">
                                    <h4>Ciudad</h4>
                                    <p>Buenos Aires- Capital</p>
                                </div>
                            </div>
                    </div>

                </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
