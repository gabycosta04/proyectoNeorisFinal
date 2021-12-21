@extends('layout')

@section('header')
    <section class="textos-header">
      <h1>&#128525 ¡Tu media naranja te espera! &#128525</h1>
      <h2 align="center">Dele oportunidad a una nueva mascota a entrar en tu vida</h2>
    </section>
@endsection


@section('contenidoPrincipal')
    

    <section>
      <h2 align="center">ADOPCIONES DISPONIBLES</h2>
      
        
        @foreach($adopciones as $adopcion)
        <div class="mascota">
            <img src="{{ $adopcion->foto }}" width="200" height="200">

            <div class="datos">
                <h6>Nombre: {{$adopcion->nombre}}</h6>
                <h6>Tipo de animal: {{$adopcion->tipoAnimal}}</h6>
                <h6>Descripcion: {{$adopcion->estado}}</h6>
            </div>

            <a href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones/{{ $adopcion->id }}" >Mas informacion</a>
        </div> 
        @endforeach
            
    </section>
@endsection