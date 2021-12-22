<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;


class MascotasController extends Controller
{
    public function mostrarMascotas(Request $request)
    {

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default');
        $id = $request->session()->get('id','-1');
        
        $mascotas = DB::table("mascotas")
            ->where("id_usuarioDuenio" ,"=",$id)
            ->get();
        
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin,
            'mascotas' => $mascotas
        ];
        
        if($sesionIniciada){
            return view('mascotas', $parametros);
        }else{
            return redirect('/login');
        }

        
    }


    public function mostrarMascotasPerdidas(Request $request)
    {

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default');
        
        $mascotas = DB::table("mascotas")
            ->where("perdido","=", 1)
            ->get();
        
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin,
            'mascotas' => $mascotas
        ];
        
        if($sesionIniciada){
            return view('mascotasPerdidas', $parametros);
        }else{
            return redirect('/login');
        }

        
    }


    public function mostrarMascotasPerdidaParticular(Request $request, $id)
    {

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default');
        
        $mascotas = DB::table("mascotas")
            ->where("perdido","=", 1)
            ->where("id", "=", $id)
            ->get();
        
        $mascota = $mascotas->last();

        $duenios = DB::table("usuarios")
            ->where("id", "=", $mascota->id_usuarioDuenio)
            ->get();

        $duenio = $duenios->last();


        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin,
            'mascota' => $mascota,
            'duenio' => $duenio
        ];
        
        if($sesionIniciada){
            return view('mascotaPerdidaParticular', $parametros);
        }else{
            return redirect('/login');
        }

        
    }


    public function mostrarMascotaParticular(Request $request, $id)
    {

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default'); 
        $idDuenio = $request->session()->get('id','-1');

        $mascotas = DB::table("mascotas")
            ->where("id","=", $id)
            ->where("id_usuarioDuenio" ,"=",$idDuenio)
            ->get();
        

        $mascota = $mascotas->last();
        
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin, 
            'mascota' => $mascota,
        ];
        
        if($sesionIniciada){
            if(count($mascotas) > 0){
                return view('mascotaParticular', $parametros);
            }
            return redirect('/mascotas');
        }else{
            return redirect('/login');
        }

        
    }

    public function formularioMascota(Request $request)
    {

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default');
        
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin
        ];
        
        if($sesionIniciada){
            return view('formularioRegistroMascota', $parametros);
        }else{
            return redirect('/login');
        }

        
    }

    public function registrarMascota(Request $request)
    {
        $nombre = $request->post("nombre");
        $tipoAnimal = $request->post("tipoAnimal");
        $raza = $request->post("raza");
        $sexo = $request->post("sexo");
        $size = $request->post("tamanio");
        $foto = $request->post("foto");
        $edad = $request->post("edad");


        $username = $request->session()->get('username','default');
        
        $usuarioCreado = DB::table("usuarios")
            ->where("username","=", $username)
            ->get();
        
        $persona = $usuarioCreado->last();
        try{
            DB::table("mascotas")->insert([
                "id_usuarioDuenio" => intval($persona->id),    
                "nombre" => $nombre,
                "perdido" => 0,
                "tipoAnimal" => $tipoAnimal,
                "raza" => $raza,
                "sexo" => $sexo,
                "tamanio" => $size,
                "foto" => $foto,
                "edad" => intval($edad)
            ]);

            return redirect('/');

        }catch(Exception){

            return redirect('/mascotas/nueva');
        }
    }



    public function registrarNuevoEstadoMascota(Request $request, $id)
    {
        $estadoPerdido = $request->post("perdido");

        if($estadoPerdido == "Reportar Perdido"){
            $valor = 1;
        }else{
            $valor = 0;
        }
        

        try{

            DB::table('mascotas')->where('id', $id)->update(array(
                'perdido'=> ($valor)
                ));

            return redirect('/mascotas');

        }catch(Exception){

            return redirect('/mascotas/administrar');
        }
    }
}
