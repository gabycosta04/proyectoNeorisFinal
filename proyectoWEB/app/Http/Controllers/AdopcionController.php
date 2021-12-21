<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Exception;


class AdopcionController extends Controller
{
    public function mostrarAdopciones(Request $request)
    {

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default');
        
        $adopciones = DB::table("adopcion")
            ->where("aprobado","=", 1)
            ->get();
        
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin,
            'adopciones' => $adopciones
        ];
        
        if($sesionIniciada){
            return view('adopciones', $parametros);
        }else{
            return redirect('/login');
        }

        
    }


    public function mostrarAdopcionParticular(Request $request, $id)
    {

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default'); 
         

        $adopciones = DB::table("adopcion")
            ->where("id","=", $id)
            ->get();
        

        $adopcion = $adopciones->last();

        $adoptantes = DB::table("usuarios")
            ->where("id", "=", $adopcion->id_usuarioRescatista)
            ->get();

        $adoptante = $adoptantes->last();
        
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin, 
            'adopcion' => $adopcion,
            'adoptante' => $adoptante
        ];
        
        if($sesionIniciada){ 
            return view('adopcionParticular', $parametros);
        }else{
            return redirect('/login');
        }

        
    }

    public function formularioAdopcion(Request $request)
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

    public function registrarAdopcion(Request $request)
    {

        $nombre = $request->post("nombre");
        $tipoAnimal = $request->post("tipoAnimal");
        $raza = $request->post("raza");
        $sexo = $request->post("sexo");
        $tamanio = $request->post("tamanio");
        $foto = $request->post("foto");
        $estado = $request->post("descripcion");
        $edad = $request->post("edad");


        $username = $request->session()->get('username','default');
        
        $usuarioCreado = DB::table("usuarios")
            ->where("username","=", $username)
            ->get();
        
        $persona = $usuarioCreado->last();
        $noAprobado = 0;
        try{
            DB::table("adopcion")->insert([
                "id_usuarioRescatista" => intval($persona->id),    
                "nombre" => $nombre,
                "tipoAnimal" => $tipoAnimal,
                "raza" => $raza,
                "sexo" => $sexo,
                "aprobado" => $noAprobado,
                "tamanio" => $tamanio,
                "foto" => $foto,
                "estado" => $estado,
                "edad" => intval($edad)
            ]);

            return redirect('/');

        }catch(Exception){

            return redirect('/adopciones/nueva');
        }
        

        
    }
}
