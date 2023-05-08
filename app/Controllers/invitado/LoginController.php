<?php
namespace App\Controllers\invitado;
use App\Models\LoginUser;
// use CodeIgniter\Controller;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\Videojuegos;
use App\Models\admin\Administradores;
use App\Models\usuario\VideojuegosUsuario;

class LoginController extends BaseController{

    protected $email ;

    public function __construct()
    {
        $this->email  = \Config\Services::email();

    }
        
    public function index(){
        $vista= view('genericos/navbar').
                view('genericos/header').
                view('genericos/login');
        return $vista;
    }

    public function verificar_login(){
        $password = strval($this->request->getPost('contrasenia'));
        $correo = $this->request->getPost('correo');
        $Usuario = new RegistrarUsuario();
        $videojuego = new Videojuegos();
        $data2["videojuegos"] = $videojuego->get10VideogamesPlay();
        $datosUsuario = $Usuario->obtenerUsuario(['correo' => $correo]);

        //Usuario
        //Verificamos si existe el usuario
        if (count($datosUsuario) > 0) {
            $passwordbd = $datosUsuario[0]['contrasenia'];
            if (password_verify($password, $passwordbd)) {
                $generico = new RegistrarUsuario();

                // //VERIFICAMOS SI TIENE VIDEOJUEGOS EL USUARIO
                // $videojuegosUsuario = new VideojuegosUsuario(); 
                // $videojuegosUsuario = $videojuegosUsuario->getVideogamesUser($_SESSION['datosUsuario']['usuario']);

                // if(is_array($videojuegosUsuario) && count($videojuegosUsuario) > 0){
                //    echo"<script>alert('prueba')</script>";
                // }

                
                $session = session();
                $sessionData = [
                    'datosUsuario' => $generico->traerDatosUsuarioPorCorreo($_POST["correo"]),
                    'logged_in' => true
                ];

                
                $session->set($sessionData);
                $session = session();
                $session->setFlashdata('ingresoCorrecto', 'Bienvenido de nuevo');
                return redirect()->to('usuario/inicio');

            } else {
                //Verificamos en el administrador aqui se llama el metodo

                $session = session();
                $session->setFlashdata('ingresoFallido', 'Verifica tus datos de sesion');

                return redirect()->to('login');
            }
        } else {
        
        //Administrador
        $admin = new Administradores();
        $datosAdmin = $admin->obtenerAdmin(['correoElectronico' => $correo]);
        //Verificamos si existe el admin
        if (count($datosAdmin) > 0) {
            $passwordbd = $datosAdmin[0]['contrasenia'];
            if (password_verify($password, $passwordbd)) {
                
                $session = session();
                $sessionData = [
                    'datosAdministrador' => $admin->traerDatosAdminPorCorreo($_POST["correo"]),
                    'logged_in' => true
                ];
                $session->set($sessionData);

                $session->setFlashdata('reingresoCorrecto', 'Bienvenido de nuevo');

                // echo "Prueba";

                return redirect()->to('admin/inicio');

            } 
            else {

                $session = session();
                $session->setFlashdata('ingresoFallido', 'Verifica tus datos de sesion');

                return redirect()->to('login');
            }
        } else {

            $session = session();
            $session->setFlashdata('userNoEncontrado', 'Administrador no encontrado');
            return redirect()->to('login');

        }

            $session = session();
            $session->setFlashdata('userNoEncontrado', 'Usuario no encontrado');
            return redirect()->to('login');

        }

       
        

        
    }


}
