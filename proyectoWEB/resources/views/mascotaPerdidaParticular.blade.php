@extends('layout')

@section('header')
    <section class="textos-header">
      <h1>&#128557 ¡Hay amigos desaparecidos! &#128557</h1>
      <h2 align="center">&#128546 ¡Si viste a {{$mascota->nombre}}, porfavor comunicate con su dueño! &#128546</h2>
    </section>
@endsection


@section('contenidoPrincipal')
    
    <section>
        <div>
            <h2 align="center">Informacion sobre la mascota</h2>
            <h4 align="center">Dele oportunidad a una nueva mascota a entrar en tu vida</h4>  
        </div>

        <br>
        <br>
      
    

        <div class="mascota" align = "center">
            <img src="{{ $mascota->foto }}" width="200" height="200">

            <div class="datos">
                <h6>Nombre: {{$mascota->nombre}}</h6>
                <h6>Tipo de animal: {{$mascota->tipoAnimal}}</h6>
                <h6>Raza: {{$mascota->raza}}</h6>
                <h6>Sexo: {{$mascota->sexo}}</h6>
                <h6>Tamaño: {{$mascota->tamanio}}</h6>
                <h6>Edad: {{$mascota->edad}}</h6>
                
            </div>

            <div class="duenio">
                <br>
                <br>
                <h2 align="center">Informacion sobre el Dueño</h2>
                <h6>Nombre: {{$duenio->nombre}}</h6>
                <h6>Apellido: {{$duenio->apellido}}</h6>
                <h6>Ciudad: {{$duenio->ciudad}}</h6>
                <h6>E-Mail: {{$duenio->mail}}</h6>
                <h6>Telefono: {{$duenio->telefono}}</h6>
                
            </div>

            
        
        </div>
    </section>
@endsection