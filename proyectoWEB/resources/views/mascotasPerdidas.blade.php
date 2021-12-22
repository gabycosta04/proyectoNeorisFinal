@extends('layout')

@section('header')
    <section class="textos-header">
      <h1>&#128557 ¡Hay amigos desaparecidos! &#128557</h1>
      <h2 align="center">Si viste alguno de estos, comunicate con su dueño</h2>
    </section>
@endsection


@section('contenidoPrincipal')
     
    <section>
      <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">BUSCAR MASCOTAS PERDIDAS</h2>
                <div class="galeria-port">
                    @foreach($mascotas as $mascota)

                        <div class="imagen-port">
                            <img src="{{ $mascota->foto }}" alt="">
                            <div class="hover-galeria">
                                <img src="{{ asset('src/icono1.png') }}" alt="">
                                <a href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas/perdidas/{{ $mascota->id }}">Mas informacion</a>
                            </div>
                        </div>
                    @endforeach    
                    
                </div>
            </div>
        </section>
    </section>
@endsection