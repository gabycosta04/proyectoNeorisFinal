<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MascotasController;

Route::get('/',[HomeController::class, 'index']);

Route::get('/adopciones/nueva', [AdopcionController::class, 'formularioAdopcion']);
Route::get('/adopciones/administrar', [AdminController::class, 'mostrarAdopcionesDisponibles']);
Route::post('/adopciones/administrar', [AdminController::class, 'realizarModificacionAdopcion']);
Route::get('/adopciones/{id}', [AdopcionController::class, 'mostrarAdopcionParticular']);
Route::get('/adopciones', [AdopcionController::class, 'mostrarAdopciones']);
Route::post('/adopciones', [AdopcionController::class, 'registrarAdopcion']);

Route::get('/mascotas/nueva', [MascotasController::class, 'formularioMascota']);
Route::get('/mascotas/perdidas', [MascotasController::class, 'mostrarMascotasPerdidas']);
Route::get('/mascotas/perdidas/{id}', [MascotasController::class, 'mostrarMascotasPerdidaParticular']);
Route::get('/mascotas/{id}', [MascotasController::class, 'mostrarMascotaParticular']);
Route::post('/mascotas/{id}', [MascotasController::class, 'registrarNuevoEstadoMascota']);  

Route::get('/mascotas', [MascotasController::class, 'mostrarMascotas']);
Route::post('/mascotas', [MascotasController::class, 'registrarMascota']);


Route::get('/login', [SessionController::class, 'formularioLogIn']);
Route::post('/login', [SessionController::class, 'logInUsuario']);
Route::get('/register', [SessionController::class, 'formularioRegistrarse']);
Route::post('/register', [SessionController::class, 'registroUsuario']);
Route::get('/logout', [SessionController::class, 'logOut']);