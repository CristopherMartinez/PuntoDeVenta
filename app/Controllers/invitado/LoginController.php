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

        // $mysqli=include_once"../Codeigniter4/app/Controllers/conexion.php";
        // $correo=$_POST['correo'];
        // $contrasenia=$_POST['contrasenia'];


        // $sentencia="SELECT * FROM usuarios WHERE correo='".$correo."' AND contrasenia='".$contrasenia."'";
        // $query=mysqli_query($mysqli,$sentencia);
        // $existe=mysqli_num_rows($query);
        
        // if ($existe>0){
            // session_start();
            // $_SESSION['Autentificacion']="SI";
            $generico = new RegistrarUsuario();
            // $usuario = array(
            //     'datosUsuario' => $generico->traerDatosUsuarioPorCorreo($correo),
            // );

            // //Guardamos datos en session
            // $arraydata = array(
            //     "datosUsuario" => $generico->traerDatosUsuarioPorCorreo($correo)
            // );
            // $this->session->set_userdata($arraydata);
            
            // $_SESSION['correo'] = htmlentities($correo);
            $session = session();

            if ($session->has('nombre')) {
                // La sesión existe, se obtienen los datos de la sesión
                $nombre = $session->get('nombre');
                $membresia = $session->get('membresia');
            
                // Se cargan los datos en la vista correspondiente
                $arraydata = [
                    "nombre" => $nombre,
                    "membresia" => $membresia
                ];
                $session->set('logged_in', true);

                $vista = view('genericos/header').
                    view('usuario/navbarLog', $arraydata).
                    view('invitado/carruselInicio').    
                    view('invitado/cardsInicio').
                    view('genericos/contacto').
                    view('invitado/image').
                    view('genericos/footer');
                return $vista;
            } else {
                // La sesión no existe, se redirige a la vista de login
                return redirect()->to('login');
            }

            // $session = session();
            // $nombre = $session->get('nombre');
            // $membresia =$session->get('membresia');
            // $arraydata = array(
            //     "nombre" => $nombre,
            //     "membresia"=>$membresia
            // );

            // $vista= 
            // view('genericos/header').
            // view('usuario/navbarLog',$arraydata).
            // view('invitado/carruselInicio').    
            // view('invitado/cardsInicio').
            // view('genericos/contacto').
            // view('invitado/image').
            // view('genericos/footer');
            // return $vista;
        // }
        // else{
        //     $vista= 
        //     view('genericos/header').
        //     view('genericos/navbar').
        //     view('genericos/login');
        //     return $vista;
        // }
    }

}
