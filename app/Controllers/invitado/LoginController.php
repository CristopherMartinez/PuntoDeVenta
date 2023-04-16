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

            $generico = new RegistrarUsuario();
            $generico->traerDatosUsuarioPorCorreo($_POST['correo']);


            $session = session();

            if ($session->has('usuario')) {
                // La sesión existe, se obtienen los datos de la sesión
                $nombre = $session->get('usuario');
                $membresia = $session->get('membresia');
            
                // Se cargan los datos en la vista correspondiente
                $arraydata = [
                    "nombre" => $nombre,
                    "membresia" => $membresia
                ];
                //Para volver a establecer que estamos logueados al volver a iniciar sesión
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

    }

}
