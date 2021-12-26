@extends('layout')

@section('header')
    <section class="textos-header">
      <h1>¡Cada vez falta menos!</h1>
      <h2> Completa estos formularios para poder buscarle un hogar a las mascotas </h2>
    </section>
@endsection


@section('contenidoPrincipal')


    <section>
          <form name="registrarAdopcion-form" class="registrarAdopcion-form formulario">

            <section class="form-registerperson">
              <h4>¡Completa el formulario de la adopcion!</h4>
              <h5>Ingresa los datos de la mascota a dar en adopcion</h5>

              <div class="form-group">
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre de la mascota">
              </div>

              <div class="form-group">
                <input class="controls" type="text" name="raza" id="raza" placeholder="Raza de la mascota">
              </div>

              <div class="form-group">
                <input name="foto" id="foto" type="text" class="controls" placeholder="Link de la foto de la mascota">
              </div>

              <div class="form-group">
                <select class="controls" name="tipoAnimal" id="tipoAnimal">
                  <option>PERRO</option>
                  <option>GATO</option>
                  <option>PAJARO</option>
                </select>
              </div>

              <div class="form-group">
                <select class="controls" name="sexo" id="sexo">
                  <option>MACHO</option>
                  <option>HEMBRA</option>
                  <option>NO IDENTIFICADO</option>
                </select>
              </div>

              <div class="form-group">
              <select class="controls" name="tamanio" id="tamanio">
                <option>CHICO</option>
                <option>MEDIANO</option>
                <option>GRANDE</option>
              </select>
              </div>

              <div class="form-group">
                <input name="edad" id="edad" type="number" class="controls" placeholder="Edad actual en años de la mascota">
              </div>

              <div class="form-group">
                <input name="estado" id="estado" type="text" class="controls" placeholder="Descripcion sobre la mascota">
              </div>


              <button class="botons" id="registroAdopcion">Cargar Datos</button>

            </section>
          </form>
    </section>
@endsection
