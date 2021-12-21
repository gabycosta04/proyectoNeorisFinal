@extends('layout')

@section('contenidoPrincipal')

    <section>
        
            <h2 align="center">Inicio de Sesión</h2>
            
            <form name="login-form" class="login-form" action="" method="post">
                @csrf
                <table align="center">
                    <tr>
                        <td>
                            <input name="username" type="text" class="input username" placeholder="Usuario" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="password" type="password" class="input password" placeholder="Contraseña" required/>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <a href="/proyectoNeoris/proyectoWEB/public/register">Registrarme</a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" name="submit" value="Ingresar" class="button"/>
                        </td>
                    </tr>
                </table>
            </form>
            
    </section>

@endsection