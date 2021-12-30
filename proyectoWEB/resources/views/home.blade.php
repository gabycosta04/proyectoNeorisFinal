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

        <section class="clientes contenedor">
            <h2 class="titulo"> SOBRE NOSOTROS</h2> </a>
            <div class="cards">
                <div class="card">
                    <img src="{{ asset('src/Sofia.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4></h4>
                        <a href="https://www.linkedin.com/in/sofia-agostina-balestrieri-b239471ba/" style="color:#00A0C6; text-decoration:none; cursor:pointer;">Sofia Agostina Balestrieri</a>
                    </div>
                </div>
                <div class="card">
                <img src="{{ asset('src/Gabriel.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4></h4>
                        <a href="https://www.linkedin.com/in/cristian-gabriel-costa-1bb64a1b2/" style="color:#00A0C6; text-decoration:none; cursor:pointer;">Cristian Gabriel Costa</a>
                    </div>
                </div>
            </div>
        </section>
@endsection
