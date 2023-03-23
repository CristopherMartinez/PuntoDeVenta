<?php
namespace App\Controllers\invitado;
use App\Models\LoginUser;
// use CodeIgniter\Controller;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;

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
                'datosUsuario' => $generico->traerDatosUsuarioPorCorreo($correo),
            );

            // //Guardamos datos en session
            // $arraydata = array(
            //     "datosUsuario" => $generico->traerDatosUsuarioPorCorreo($correo)
            // );
            // $this->session->set_userdata($arraydata);
            
            // $_SESSION['correo'] = htmlentities($correo);


            $vista= 
            view('genericos/header').
            view('usuario/navbarLog',$usuario).
            view('invitado/carruselInicio').    
            view('invitado/cardsInicio').
            view('genericos/contacto').
            view('invitado/image').
            view('genericos/footer');
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
