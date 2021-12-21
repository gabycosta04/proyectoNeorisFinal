@extends('layout')

@section('header')
    <section class="textos-header">
        <h1>Inicia tu sesión</h1>
        <h2> ¡Nos alegra verte de nuevo! </h2>
    </section>
@endsection

@section('contenidoPrincipal')

    <section>
    
        <section class="form-register">
            <form name="login-form" class="login-form" action="" method="post">
            @csrf
                <h4>¡Inicia sesión!</h4>
                <input class="controls" type="username" name="username" id="username" placeholder="Ingrese su Username">
                <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
                <input class="botons" type="submit" value="Iniciar Sesión">
                <p><a href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/register">¿No tienes una cuenta? Registrate</a></p>
            </form>
        </section>
    </section>    

@endsection