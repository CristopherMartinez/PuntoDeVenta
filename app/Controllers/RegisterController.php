<?php
namespace App\Controllers;
use App\Models\RegistrarUsuario;


class RegisterController extends BaseController{
    
    public function index(){
        $vista= view('genericos/navbar').
                view('genericos/header').
                view('genericos/register');
        

        return $vista;
    }
    
    // public function envio_post(){
    //     $valor1=$_POST["nombre"];
    //     $valor2=$_POST["apellidos"];
    //     $valor3=$_POST["correo"];
    //     $valor4=$_POST["direccion"];
    //     $valor5=$_POST["telefono"];
    //     $valor6=$_POST["contrasenia"];
    //     echo $valor1."<br>".$valor2."<br>".$valor3."<br>".$valor4."<br>".$valor5."<br>".$valor6;

    // }

    public function guardar_persona(){
        $data = [
            "nombre"=>$_POST["nombre"],
            "apellidos"=>$_POST["apellidos"],
            "correo"=>$_POST["correo"],
            "direccion"=>$_POST["direccion"],
            "telefono"=>$_POST["telefono"],
            "contrasenia"=>$_POST["contrasenia"]

        ];

        $mregistrar=new RegistrarUsuario();
        $mregistrar->insert($data);

        //echo json_encode(["mensaje"=>"creado el registro"]);
        $vistas= view('genericos/header',$data).
                 view('usuario/navbarLog').
                 view('invitado/carruselInicio').    
                 view('invitado/cardsInicio.php').
                 view('genericos/contacto.php').
                 view('genericos/footer').
                 view('inicio');
                
        return $vistas;

    }

    

}
