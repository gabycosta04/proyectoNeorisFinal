@extends('layout')

@section('header')
    <section class="textos-header">
        <h1>¡Anímate a adoptar!</h1>
        <h2> Ayudanos a brindarle un hogar a aquellas mascotas que no lo tienen </h2>
    </section>
@endsection

@section('contenidoPrincipal')
<section class="contenedor sobre-nosotros">
            <h2 class="titulo">¿POR QUÉ ADOPTAR UNA MASCOTA?</h2>
        <div class="contenedor-sobre-nosotros">
            <img src="{{ asset('src/banner.png') }}" alt="" class="imagen-about-us">
            
        </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">BUSCAR MASCOTAS</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="{{ asset('src/perro1.jfif') }}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('src/icono1.png') }}" alt="">
                            <p>Más información</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('src/perro2.jfif') }}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('src/icono1.png') }}"  alt="">
                            <p>Más información</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('src/perro3.jfif') }}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('src/icono1.png') }}" alt="">
                            <p>Más información</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('src/perro4.jfif') }}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('src/icono1.png') }}" alt="">
                            <p>Más información</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('src/perro5.jfif') }}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('src/icono1.png') }}"alt="">
                            <p>Más información</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="{{ asset('src/perro6.jfif') }}" alt="">
                        <div class="hover-galeria">
                            <img src="{{ asset('src/icono1.png') }}" alt="">
                            <p>Más información</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo"> SOBRE NOSOTROS</h2> </a>
            <div class="cards">
                <div class="card">
                    <img src="{{ asset('src/nena.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4></h4>
                        <p>Sofia Agostina Balestrieri.</p>
                    </div>
                </div>
                <div class="card">
                <img src="{{ asset('src/nena.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4></h4>
                        <p>Cristian Gabriel Costa.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('src/nena.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4></h4>
                        <p>Emiliano Castell.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('src/nena.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4></h4>
                        <p>Eduardo Lucero.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('src/nena.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4></h4>
                        <p>Maria Eugenia Gonzalez.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection