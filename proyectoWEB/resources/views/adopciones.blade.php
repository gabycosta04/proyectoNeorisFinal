@extends('layout')

@section('contenidoPrincipal')
    

    <section>
      <h2 align="center">ADOPCIONES DISPONIBLES</h2>
      <h4 align="center">Dele oportunidad a una nueva mascota a entrar en tu vida</h4>
        
        @foreach($adopciones as $adopcion)
        <div class="mascota">
            <img src="{{ $adopcion->foto }}" width="200" height="200">

            <div class="datos">
                <h6>Nombre: {{$adopcion->nombre}}</h6>
                <h6>Tipo de animal: {{$adopcion->tipoAnimal}}</h6>
                <h6>Descripcion: {{$adopcion->estado}}</h6>
            </div>

            <a href="/proyectoNeoris/proyectoWEB/public/adopciones/{{ $adopcion->id }}" >Mas informacion</a>
        </div> 
        @endforeach
            
    </section>
@endsection