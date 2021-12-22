<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <body>

        <header>

            <nav class="menu-principal">
                <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public">Inicio</a>
                <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones">Adopciones</a>
                <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones/nueva">Subir adopcion</a>
                <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas">Mascotas</a>
                <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas/nueva">Registrar Mascota</a>

                @if($sesion)
                    <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public">Bienvenido usuario: {{$username}}</a>
                    <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/logout">Log out</a>
                        @if($admin)
                            <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones/administrar">Administrar publicaciones</a>
                        @endif
                @else
                    <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/login">Iniciar Sesion</a>
                    <a class="nav-item nav-link" href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/register">Registrarme</a>
                @endif
            </nav>

            <a></a>


            @yield('header')
            
            <div class="wave"style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C190.46,136.50 322.51,-54.94 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path></svg></div>
        
        </header>

        <main>
            @yield('contenidoPrincipal')
        </main>
                

        <footer>
            <div class="contenedor-footer">
                <div class="content-foo">
                    <h4>Celular</h4>
                    <p>1126328984</p>
                </div>
                <div class="content-foo">
                    <h4>Email</h4>
                    <p>Patitas_mojadas@gmail.com</p>
                </div>
                <div class="content-foo">
                    <h4>Ciudad</h4>
                    <p>Buenos Aires- Capital</p>
                </div>
            </div>
        </footer>

    </body>

</html>