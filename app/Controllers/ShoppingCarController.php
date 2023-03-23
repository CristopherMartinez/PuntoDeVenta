<?php
namespace App\Controllers;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;



class ShoppingCarController extends BaseController{
    
    public function index(){
        

        $generico = new RegistrarUsuario();
        $usuario = array(
            'datosUsuario' => $generico->traerDatosUsuario()
        );


        $vista= view('genericos/header').
                view('usuario/navbarLog',$usuario).
                view('ShoppingCar');
        
        return $vista;
    }


}