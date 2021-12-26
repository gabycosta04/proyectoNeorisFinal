@extends('layout')

@section('header')
    <section class="textos-header">
        <h1>&#128525 ¡Aqui estan tus pequeños registrados! &#128525</h1>
      <h2 align="center">&#128075 &#128075 ¡Dile Hola a: {{$mascota->nombre}}! &#128075 &#128075</h2>
    </section>
@endsection


@section('contenidoPrincipal')

    <section>
        <div>
            <h2 align="center">Informacion sobre la mascota</h2>
            <h2 align="center">Actualiza la situacion de tus mascotas</h2>
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

                <form name="admin-form" class="admin-form formulario" action="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/mascotas/{{$mascota->id}}" method="post">
                @csrf
                <input type="hidden" class="btn btn-primary btn-block" name="id" id="id" value= "{{$mascota->id}}"/>
                @if($mascota->perdido == 0)
                    <button type="submit" class="btn btn-danger" name="perdido" id="perdido" value= "Reportar Perdido">Reportar Perdido</button>
                @else
                    <button type="submit" class="btn btn-success" name="perdido" id="perdido" value= "Reportar Encontrado">Reportar Encontrado</button>
                @endif
                </form>

            </div>
        </div>
    </section>
@endsection
