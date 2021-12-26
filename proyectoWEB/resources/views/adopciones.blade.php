@extends('layout')

@section('header')
    <section class="textos-header">
      <h1>&#128525 ¡Tu media naranja te espera! &#128525</h1>
      <h2 align="center">Dele oportunidad a una nueva mascota a entrar en tu vida</h2>
    </section>
@endsection


@section('contenidoPrincipal')

    <section>

        <form name="registrarMascota-form" class="registrarMascota-form formulario" action="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones" method="get">
        @csrf
            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div>
                                <select class="controls" name="tipoAnimal">
                                <option value="">Selecciona una opcion</option>
                                <option>PERRO</option>
                                <option>GATO</option>
                                <option>PAJARO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <select class="controls" name="sexo" >
                                <option value="">Selecciona una opcion</option>
                                <option>MACHO</option>
                                <option>HEMBRA</option>
                                <option>NO IDENTIFICADO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <select class="controls" name="tamanio">
                                <option value="">Selecciona una opcion</option>
                                <option>CHICO</option>
                                <option>MEDIANO</option>
                                <option>GRANDE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 px-2 py-4 px-md-0 py-md-0" align="center" mt-10px>
                            <button type="submit" class="btn btn-primary">Filtrar</button>
                        </div>

                    </div>
                </div>


        </form>

    </section>


      <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">BUSCAR ADOPCIONES</h2>
                <div class="galeria-port">
                    <div class="container">
                        <div class="row d-flex justify-content-center align-items-center">
                            @foreach($adopciones as $adopcion)
                                <div class="col-lg-4 col-lg">
                                    <div class="box-image bg-color1 d-flex justify-content-center align-items-center mt-4 mt-lg-0">
                                        <div class="imagen-port">
                                            <img src="{{ $adopcion->foto }}" alt="">
                                            <div class="hover-galeria">
                                                <img src="{{ asset('src/icono1.png') }}" alt="">
                                                <a href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones/{{ $adopcion->id }}">Mas informacion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
