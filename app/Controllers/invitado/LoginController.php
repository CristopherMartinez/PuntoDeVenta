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
