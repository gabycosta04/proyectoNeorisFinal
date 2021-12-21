<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function formularioLogIn(Request $request)
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
            return redirect('/');
        }else{
            return view('inicioSesion', $parametros);
        }

        
    }

    public function formularioRegistrarse(Request $request){
        

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default');
        
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin
        ];
        
        if($sesionIniciada){
            return redirect('/');
        }else{
            return view('registrarUsuario', $parametros);
        }
        
        

    }

    public function logInUsuario(Request $request){
        $usuario = $request->post("username");
        $contra = $request->post("password");

        //validar que el usuario existe, en ese caso creamos la sesion y sino lo volvemos a la pagina de login
        $usuarioCreado = DB::table("usuarios")
            ->where("username","=", $usuario)
            ->where("password","=", $contra)
            ->get();
        
        $usuarioAdmin = DB::table("usuarios")
            ->join("administradores","id","=","id_usuario")
            ->where("username","=", $usuario)
            ->get();

        if(count($usuarioCreado) > 0){
            $request->session()->put('username',$usuario);
            if(count($usuarioAdmin) > 0){
                $request->session()->put('admin',$usuario);
            }
            return redirect('/');
        }else{     
            return redirect('/login');
        }

    }


    public function registroUsuario(Request $request){
        $usuario = $request->post("username");
        $contra = $request->post("password");
        $nombre = $request->post("nombre");
        $apellido = $request->post("apellido");
        $ciudad = $request->post("ciudad");
        $mail = $request->post("mail");
        $telefono = $request->post("telefono");

        try{

            $usuarioCreado = DB::table("usuarios")
            ->where("username","=", $usuario)
            ->orWhere("mail","=", $mail)
            ->get();

            if(count($usuarioCreado) > 0){
                return redirect('/register');
            }


            DB::table("usuarios")->insert([
                
                "username" => $usuario,
                "password" => $contra,

                "nombre" => $nombre,
                "apellido" => $apellido,
                "ciudad" => $ciudad,

                "mail" => $mail,
                "telefono" => $telefono
            ]);
    
            return redirect('/login');

        }catch(Exception){

            return redirect('/register');
        }
        

    }

    public function logOut(Request $request){
        
        $request->session()->flush();
        return redirect('/login');
    }




}
