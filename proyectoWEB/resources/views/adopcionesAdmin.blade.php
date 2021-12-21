



@extends('layout')

@section('css')
<link href="{{ asset('/css/admin.css') }}" rel="stylesheet" type="text/css">

@section('contenidoPrincipal')
    

    <section>
      <h2 align="center">ADOPCIONES DISPONIBLES</h2>
        
      <table>
            <thead>
                <tr align="center">
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
            
                <form name="admin-form" class="admin-form formulario" action="/proyectoNeoris/proyectoWEB/public/adopciones/administrar" method="post">
                @csrf
                    <tr align="center">
                        <td/>
                            <!-- esto es para que se suba en el formulario el id de la adopcion-->
                            <input type="hidden" class="btn btn-primary btn-block" name="id" id="id" value= "{{$adopcion->id}}"/>
                            <a href="/proyectoNeoris/proyectoWEB/public/adopciones/{{ $adopcion->id }}" >{{ $adopcion->id }}</a>          
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
                                <input type="submit" class="btn btn-primary btn-block" name="aprobado" id="aprobado" value= "Habilitar"/>
                            @else
                                <input type="submit" class="btn btn-primary btn-block" name="aprobado" id="aprobado" value= "Deshabilitar"/>
                            @endif
                        </td>
                    </tr>
                </form>
            @endforeach
                
            </tbody>
        </table>

        
            
    </section>
@endsection