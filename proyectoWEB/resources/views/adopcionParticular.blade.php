@extends('layout')

@section('contenidoPrincipal')
    
    <section>
        <div>
            <h2 align="center">Informacion sobre la mascota</h2>
            <h4 align="center">Dele oportunidad a una nueva mascota a entrar en tu vida</h4>  
        </div>

        <br>
        <br>
      
    

        <div class="mascota" align = "center">
            <img src="{{ $adopcion->foto }}" width="200" height="200">

            <div class="datos">
                <h6>Nombre: {{$adopcion->nombre}}</h6>
                <h6>Tipo de animal: {{$adopcion->tipoAnimal}}</h6>
                <h6>Raza: {{$adopcion->raza}}</h6>
                <h6>Sexo: {{$adopcion->sexo}}</h6>
                <h6>Tamaño: {{$adopcion->tamanio}}</h6>
                <h6>Edad: {{$adopcion->edad}}</h6>
                <h6>Descripcion: {{$adopcion->estado}}</h6>
                
            </div>

            <div class="duenio">
                <br>
                <br>
                <h2 align="center">Informacion sobre el adoptante</h2>
                <h6>Nombre: {{$adoptante->nombre}}</h6>
                <h6>Apellido: {{$adoptante->apellido}}</h6>
                <h6>Ciudad: {{$adoptante->ciudad}}</h6>
                <h6>E-Mail: {{$adoptante->mail}}</h6>
                <h6>Telefono: {{$adoptante->telefono}}</h6>
                
            </div>

            
        
        </div>
    </section>
@endsection