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

            $session = session();
            $session->setFlashdata('userNoEncontrado', 'Usuario no encontrado');
            return redirect()->to('login');

        }

        
    }



    // public function verificar_login(){
    //     $correo = $this->request->getPost('correo');
    //     $contrasenia = strval($this->request->getPost('contrasenia'));
    
    //     $Usuario = new RegistrarUsuario();
    //     $user = $Usuario->buscarPorCorreo($correo);
    
    //     if ($user) {
    //         // $hash = $user['contrasenia'];
    //     } else {
    //         echo "No existe en la bd";
    //     }
    
    //     // echo "Hash: " . $hash . "<br>";
    //     // echo "Contraseña: " . $contrasenia . "<br>";
    
    //     $verificacion = password_verify($contrasenia, $user['contrasenia']);
    //     if ($verificacion) {
    //         // echo "Contraseña correcta";
    //         $generico = new RegistrarUsuario();
    //         $session = session();
    //         $sessionData = [
    //                         'datosUsuario' => $generico->traerDatosUsuarioPorCorreo($_POST["correo"]),
    //                         'logged_in' => true
    //         ];
    //         $session->set($sessionData);
    //         return redirect()->to('usuario/inicio');


    //     } else {
    //         echo "<script>alert('Contraseña incorrecta')</script>";
    //         return redirect()->to('login');
    //     }
    // }
    
 
    
    


}
