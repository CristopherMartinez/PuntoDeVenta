<?php
namespace App\Controllers\invitado;
use App\Models\LoginUser;
// use CodeIgniter\Controller;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\Videojuegos;

class LoginController extends BaseController{
    
    
    public function index(){
        $vista= view('genericos/navbar').
                view('genericos/header').
                view('genericos/login');
        return $vista;
    }

    // public function verificar_login(){
    //     $usuario = new RegistrarUsuario();
    //     $session = session();
    //     $videojuego = new Videojuegos();
    //     // $generico->traerDatosUsuarioPorCorreo($_POST['correo']);
    //     $data2["videojuegos"]=$videojuego->get10VideogamesPlay();

    //     $user = $usuario->existeUsuarioCheck($_POST['correo']);

    //     if ($user == null) {
    //         // Mostrar mensaje de que usuario no está registrado
    //         // echo "User does not exist.";
    //         // $session = session();
    //         // $session->setFlashdata('error', 'El usuario no está registrado.');

    //         return redirect()->to('login');
    //     } else {
    //         // echo "User exist.";
    //             if ($session->has('usuario')) {
                
    //                 echo "Hay una sesión";
    //                 print_r(json_encode($_SESSION));

    //             // //Para volver a establecer que estamos logueados al volver a iniciar sesión
    //              $session->set('logged_in', true);

    //             $vista =view('genericos/header').
    //                 view('usuario/navbarLog').
    //                 view('invitado/carruselInicio').    
    //                 view('invitado/cardsInicio',$data2).
    //                 view('usuario/contacto').
    //                 view('invitado/image').
    //                 view('genericos/footer');
    //             return $vista;
    //         } else {
    //             // La sesión no existe, se redirige a la vista de login
    //             return redirect()->to('login');
    //         }

    //     }

    // }
    

    public function verificar_login() {

		$correo = $this->request->getPost('correo');
		$password = $this->request->getPost('contrasenia');
		$Usuario = new RegistrarUsuario();
        $videojuego = new Videojuegos();
        $data2["videojuegos"]=$videojuego->get10VideogamesPlay();
		$datosUsuario = $Usuario->obtenerUsuario(['correo' => $correo]);

		if (count($datosUsuario) > 0) {

            $generico = new RegistrarUsuario();
            $session = session();
            $sessionData = [
                'datosUsuario'=>$generico->traerDatosUsuarioPorCorreo($_POST["correo"]),
                'logged_in'=>true
            ];
            $session->set($sessionData);

            return redirect()->to('usuario/inicio');

		} else {
			return redirect()->to('login');
		}


	}


}
