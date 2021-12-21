@extends('layout')

@section('header')
    <section class="textos-header">
        <h1>¡Regístrate!</h1>
        <h2> Bienvenido al placer de brindarle hogar a las mascotas </h2>
    </section>
@endsection


@section('contenidoPrincipal')

    <section>
        <section class="form-register">
            <h4>¡Completa el formulario de registro!</h4>
            <form name="registrarUsuario-form" class="registrarUsuario-form" action="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/register" method="post">
            @csrf
                <input class="controls" type="username" name="username" id="username" placeholder="Ingrese su nombre de usuario">
                <input class="controls" type="email" name="mail" id="mail" placeholder="Ingrese su Correo">
                <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
                <br><br>
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
                <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido">
                <input class="controls" type="text" name="ciudad" id="ciudad" placeholder="Ingrese su Ciudad">
                <input class="controls" type="number" name="telefono" id="telefono" placeholder="Ingrese su Telefono">
                <input class="botons" type="submit" value="Registrar">
                <p><a href="/proyectoNeoris/proyectoNeorisFinal/proyectoWEB/public/login">¿Ya tienes una cuenta?</a></p>
            </form>
        </section>
    </section>

@endsection