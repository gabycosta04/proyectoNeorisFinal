@extends('layout')

@section('header')
    <section class="textos-header">
      <h1>&#128525 ¡Aqui estan tus pequeños registrados! &#128525</h1>
      <h2 align="center">Actualiza la situacion de tus mascotas</h2>
    </section>
@endsection


@section('contenidoPrincipal')
     
    <section>
      <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">BUSCAR MASCOTAS</h2>
                <div class="galeria-port">
                    @foreach($mascotas as $mascota)

                        <div class="imagen-port">
                            <img src="{{ $mascota->foto }}" alt="">
                            @if($mascota->perdido == 1)
                                <div class="hover-galeria2">
                                    <img src="{{ asset('src/icono1.png') }}" alt="">
                                    <a href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas/{{ $mascota->id }}">Mas informacion</a>
                                </div>
                            @else
                                <div class="hover-galeria">
                                    <img src="{{ asset('src/icono1.png') }}" alt="">
                                    <a href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas/{{ $mascota->id }}">Mas informacion</a>
                                </div>
                            @endif
                            
                        </div>
                    @endforeach
                    
                    
                </div>

                <div align="center">
                    <button class="botonCrear" align="center" onclick="location.href='/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas/nueva'">Nueva Mascota</button>   
                </div>
                
            </div>
            
        </section>
    </section>
@endsection