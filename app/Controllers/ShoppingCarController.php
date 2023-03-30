<?php
namespace App\Controllers;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;



class ShoppingCarController extends BaseController{
    
    public function index(){
        


        //Aqui tenemos que traerlos de acuerdo a la sesion iniciada
        

        $generico = new RegistrarUsuario();
        $usuario = array(
            'datosUsuario' => $generico->traerDatosUsuarioPorCorreo('martinezcristopher69@gmail.com')
        );


        $vista= view('genericos/header').
                view('usuario/navbarLog',$usuario).
                view('ShoppingCar');
        
        return $vista;
    }


}