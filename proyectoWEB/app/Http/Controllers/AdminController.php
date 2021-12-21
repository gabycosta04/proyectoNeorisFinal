<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;


class AdminController extends Controller
{
    public function mostrarAdopcionesDisponibles(Request $request)
    {

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default');
        
        $adopciones = DB::table("adopcion")
            ->get();
        
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin,
            'adopciones' => $adopciones
        ];
        
        if($sesionIniciada){
            if($usuarioAdmin){
                return view('adopcionesAdmin', $parametros);
            }else{
                return redirect("/"); 
            }
            
        }else{
            return redirect('/login');
        }

        
    }
    


    public function realizarModificacionAdopcion(Request $request)
    {

        $id = $request->post("id");
        $aprobado = $request->post("aprobado");

        if($aprobado == "Habilitar"){
            $valor = 1;
        }else{
            $valor = 0;
        }
        

        try{

            DB::table('adopcion')->where('id', $id)->update(array(
                'aprobado'=> ($valor)
                ));

            return redirect('/');

        }catch(Exception){

            return redirect('/mascotas/administrar');
        }

        
    }

}
