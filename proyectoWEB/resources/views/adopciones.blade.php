@extends('layout')

@section('header')
    <section class="textos-header">
      <h1>&#128525 ¡Tu media naranja te espera! &#128525</h1>
      <h2 align="center">Dele oportunidad a una nueva mascota a entrar en tu vida</h2>
    </section>
@endsection


@section('contenidoPrincipal')
     
    <section>
      <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">BUSCAR MASCOTAS</h2>
                <div class="galeria-port">
                    @foreach($adopciones as $adopcion)

                        <div class="imagen-port">
                            <img src="{{ $adopcion->foto }}" alt="">
                            <div class="hover-galeria">
                                <img src="{{ asset('src/icono1.png') }}" alt="">
                                <a href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones/{{ $adopcion->id }}">Mas informacion</a>
                            </div>
                        </div>
                    @endforeach    
                    
                </div>
            </div>
        </section>
    </section>
@endsection