<?php
namespace App\Controllers;
use App\Models\LoginUser;
// use CodeIgniter\Controller;
use App\Models\RegistrarUsuario;

class LoginController extends BaseController{
    
    public function index(){
        $vista= view('genericos/navbar').
                view('genericos/header').
                view('genericos/login');
        return $vista;
    }


    public function verificar_login(){

        $mysqli=include_once"../Codeigniter4/app/Controllers/conexion.php";
        $correo=$_POST['correo'];
        $contrasenia=$_POST['contrasenia'];


        $sentencia="SELECT * FROM usuarios WHERE correo='".$correo."' AND contrasenia='".$contrasenia."'";
        $query=mysqli_query($mysqli,$sentencia);
        $existe=mysqli_num_rows($query);
        
        if ($existe>0){
            session_start();
            $_SESSION['Autentificacion']="SI";
            $generico = new RegistrarUsuario();
            $usuario = array(
                'datosUsuario' => $generico->traerDatosUsuario(),
            );


            $vista= 
            view('genericos/header').
            view('usuario/navbarLog',$usuario).
            view('invitado/carruselInicio').    
            view('invitado/cardsInicio').
            view('genericos/contacto').
            view('invitado/image').
            view('genericos/footer').
            view('inicio');

            return $vista;
        }
        else{
            $vista= 
            view('genericos/header').
            view('genericos/navbar').
            view('genericos/login');
            return $vista;
        }
    }

}
