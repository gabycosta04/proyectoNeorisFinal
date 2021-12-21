<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="icon" href="/icono/iconPata.ico">
        <script src="https://kit.fontawesome.com/816b172e21.js" crossorigin="anonymous"></script>
        <link href="{{ asset('/css/mostradoMascotas.css') }}" rel="stylesheet" type="text/css">
        
        <title>Adoptame.com</title>
    </head>

    <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="https://i.pinimg.com/474x/3e/77/41/3e7741018bfa9178c91836258e1139a9.jpg" width="30" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public">Inicio <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public/adopciones">Adopciones</a>
                    <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public/adopciones/nueva">Subir adopcion</a>
                    <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public/mascotas">Mascotas</a>
                    <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public/mascotas/nueva">Registrar Mascota</a>

                    @if($sesion)
                        <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public">Bienvenido usuario: {{$username}}</a>
                        <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public/logout">Log out</a>
                            @if($admin)
                                <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public/adopciones/administrar">Administrar publicaciones</a>
                            @endif
                    @else
                        <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public/login">Iniciar Sesion</a>
                        <a class="nav-item nav-link" href="/proyectoNeoris/proyectoWEB/public/register">Registrarme</a>
                    @endif

                </div>
            </div>
        </div>    
        </nav>
    </header>


        <div class="container-fluid text-center w-80">
        <div class="row content">
            <div class="col-sm-4 sidenav">
            
            </div>
            <div class="col-sm-4 text-left">
                <main>
                    @yield('contenidoPrincipal')
                </main>
            </div>
            <div class="col-sm-4 sidenav">
            
            </div>
        </div>
        </div>

        <footer class="footer">
            <p>Copyright 2021 - Adoptame.com</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>