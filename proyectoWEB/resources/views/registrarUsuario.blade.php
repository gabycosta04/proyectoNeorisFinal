@extends('layout')

@section('contenidoPrincipal')

    <section>
            <h2 align="center">Registrarme</h2>
            <form name="registrarUsuario-form" class="registrarUsuario-form" action="/proyectoNeoris/proyectoWEB/public/login" method="post">
                @csrf
                <br>
                <table align="center">
                    <div class="datos de user"> 
                        <h6 align="center">Datos de Usuario</h6>                   
                        <tr>
                            <td>
                                <label>Username:</label>
                                <input name="username" type="username" class="input username" placeholder="Usuario del usuario" required/>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                <label>Password:</label>
                                <input name="password" type="password" class="input password" placeholder="Contraseña del usuario" required/>
                            </td>
                        </tr>
                    </div>
                </table>
                <br>
                <table align="center" >
                <div class="datos personales">
                    <h6 align="center">Datos Personales</h6>
                    <tr>
                        <td>
                            <label>Nombre:</label>
                            <input name="nombre" type="text" class="input nombre" placeholder="Nombre del usuario" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Apellido:</label>
                            <input name="apellido" type="text" class="input apellido" placeholder="Apellido del usuario" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Ciudad:</label>
                            <input name="ciudad" type="text" class="input ciudad" placeholder="Ciudad del usuario" required/>
                        </td>
                    </tr>
                </div>
                </table>

                <br>
                <table align="center">
                <div class="datos de contacto">
                    <h6 align="center">Datos de contacto</h6>
                    <tr>
                        <td>
                            <label>E-Mail:</label>
                            <input name="mail" type="text" class="input email" placeholder="Mail del usuario" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Telefono:</label>
                            <input name="telefono" type="number" class="input telefono" placeholder="Telefono del usuario" required/>
                        </td>
                    </tr>
                </div>
                
                <br>
                <tr>
                    <td align="center">
                        <input type="submit" name="submit" value="Registrar" class="button"/>
                    </td>
                </tr>
                </table>
                
            </form>
    </section>

@endsection