@extends('layout')

@section('contenidoPrincipal')
    

    <section>
      <h2 align="center">Registrar adopcion</h2>
      <h4 align="center">Complete los datos del formulario solicitado</h4>
          <form name="registrarAdopcion-form" class="registrarAdopcion-form formulario" action="/proyectoNeoris/proyectoWEB/public/adopciones" method="post">
          @csrf
            <div class="form-group">
              <label for="nombre">Pronombre/Nombre de la Mascota:</label><input name="nombre" id="nombre" type="text" class="form-control" placeholder="Ingrese el nombre de la mascota">
            </div>

            
            <div class="form-group">
                <label for="tipoAnimal">Seleccione el tipo de la Mascota:</label>
                <select class="form-control" name="tipoAnimal">
                  <option>PERRO</option>
                  <option>GATO</option>
                  <option>PAJARO</option>
                </select>
              </div>

              <div class="form-group">
              <label for="raza">Raza de la Mascota</label><input name="raza" id="raza" type="text" class="form-control" placeholder="Ingrese su raza">
            </div>

            <div class="form-group">
                <label for="sexo">Seleccione el sexo de la Mascota:</label>
                <select class="form-control" name="sexo">
                  <option>MACHO</option>
                  <option>HEMBRA</option>
                  <option>NO IDENTIFICADO</option>
                </select>
              </div>

              

            <div class="form-group">
            <label for="tamanio">Tamaño:</label><input name="tamanio" id="tamanio" type="text" class="form-control" placeholder="Ingrese sobre su tamaño">
            </div>
            
            <div class="form-group">
                <label for="foto">Link de la foto de la Mascota:</label>
                <input name="foto" id="foto" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion de su estado: </label>
                <input name="descripcion" id="descripcion" type="text" class="form-control" placeholder="Ingrese su estado actual">
            </div>

            <div class="form-group">
                <label for="edad">Ingrese la edad aproximada de la mascota: </label>
                <input name="edad" id="edad" type="number" class="form-control" placeholder="Ingrese su edad actual">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
          </form>
    </section>
@endsection