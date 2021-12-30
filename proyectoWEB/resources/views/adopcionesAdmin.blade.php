@extends('layout')

@section('header')
    <section class="textos-header">
      <h1>¡Toma el poder y controla que todo sea correcto!</h1>
      <h2>Llego el momento de validar publicaciones &#129299</h2>
    </section>
@endsection



@section('css')
<link href="{{ asset('/css/admin.css') }}" rel="stylesheet" type="text/css">

@section('contenidoPrincipal')


    <section>
      <h2 class="titulo">ADOPCIONES DISPONIBLES</h2>

      <table>
            <thead>
                <tr>
                    <th>
                        Id
                    </th>

                    <th>
                        Nombre
                    </th>

                    <th>
                        TipoAnimal
                    </th>
                    <th>
                        Descripcion
                    </th>

                    <th>
                        Foto
                    </th>

                    <th>
                        Accion A Realizar
                    </th>
                </tr>
            </thead>



            <tbody>

            @foreach($adopciones as $adopcion)

                <form name="admin-form" class="admin-form formulario" action="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones/administrar" method="post">
                @csrf
                    <tr>
                        <td/>
                            <!-- esto es para que se suba en el formulario el id de la adopcion-->
                            <input type="hidden" class="btn btn-primary btn-block" name="id" id="id" value= "{{$adopcion->id}}"/>
                            <a href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/adopciones/{{ $adopcion->id }}" >{{ $adopcion->id }}</a>
                        </td>

                        <td>
                            <p>{{$adopcion->nombre}}</p>
                        </td>

                        <td>
                            <p>{{$adopcion->tipoAnimal}}</p>
                        </td>

                        <td>
                            <p>{{$adopcion->estado}}</p>
                        </td>

                        <td>
                            <img src="{{ $adopcion->foto }}" width="100" height="100">
                        </td>

                        <td>
                            @if($adopcion->aprobado == 0)
                                <button type="submit" class="btn btn-success" name="aprobado" id="aprobado" value= "Habilitar">Habilitar</button>
                            @else
                                <button type="submit" class="btn btn-danger" name="aprobado" id="aprobado" value= "Deshabilitar">Deshabilitar</button>
                            @endif
                        </td>
                    </tr>
                </form>
            @endforeach

            </tbody>
        </table>



    </section>
@endsection
