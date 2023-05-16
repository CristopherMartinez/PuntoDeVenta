<?php
namespace App\Controllers\invitado;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\usuario\UserModel;
use CodeIgniter\Exceptions\AlertError;
use App\Models\Videojuegos;
use App\ModelS\generico\Email;

class RegisterController extends BaseController{

        protected $validation;

        public function index(){
            $vista= view('genericos/navbar').
                    view('genericos/header').
                    view('invitado/SingUp');
            return $vista;
        }

        public function guardar_persona(){

            $mregistrar=new RegistrarUsuario();
            $videojuego = new Videojuegos();
            $data2["videojuegos"]=$videojuego->get10VideogamesPlay();


            if($_POST["contrasenia"] != $_POST["contrasenia2"]){
                $session = session();
                $session->setFlashdata('paswordInvalid', 'No coinciden las contraseñas');
                return redirect()->to('SingUp');
            }


            if (isset($_POST['correo'])) {
                $texto = $_POST['correo'];
            
                // Utilizar la función substr() para extraer las primeras 5 letras de la variable $texto
                $primerasCincoLetras = substr($texto, 0, 5);
                $numeroAleatorio = mt_rand(1000, 9999);
                $nombreUsuarioUnico = substr(strtolower($primerasCincoLetras), 0, 5) . $numeroAleatorio;
                
                while($mregistrar->verificarNombreUsuarioUnico($nombreUsuarioUnico) == True) {
                    $numeroAleatorio = mt_rand(1000, 9999);
                    $nombreUsuarioUnico = substr(strtolower($primerasCincoLetras), 0, 5) . $numeroAleatorio;
                }
            }

            
            $contrasenia_cifrada = password_hash($_POST["contrasenia"], PASSWORD_DEFAULT);

            $data = [
                "usuario" => $nombreUsuarioUnico,
                "nombre" => $_POST["nombre"],
                "apellidos" => $_POST["apellidos"],
                "correo" => $_POST["correo"],
                "direccion" => $_POST["direccion"],
                "telefono" => $_POST["telefono"],
                "contrasenia" => $contrasenia_cifrada
            ];

            if( $mregistrar->existeUsuario($_POST["correo"]) == False){

                $mregistrar->insert($data);
    
                $generico = new RegistrarUsuario();

                $session = session();
                $sessionData = [
                    'usuario' => $nombreUsuarioUnico,
                    'datosUsuario'=>$generico->traerDatosUsuarioPorCorreo($_POST["correo"]),
                    'logged_in'=>true
                ];
                $session->set($sessionData);

                //llamamos al metodo de enviar correo, que esta en el modelo Email, le pasamos como parametro
                //Correo, el nombre de usuario y el password
                $email = new Email();
                $email->sendCorreo($_POST["correo"],$nombreUsuarioUnico,$_POST["contrasenia"]);

                return redirect()->to('usuario/inicio');

            }else{
                //Existe el usuario Falta mostrar mensaje 
                $session = session();
                $session->setFlashdata('existeUsuario', 'Ya existe un usuario registrado con este correo');
                return redirect()->to('SingUp');
            }
        }

        public function cerrarSesion(){
            // Cerrar sesión
            // session()->remove('logged_in');
            // session()->save(); 
            session()->destroy();

            // Redirigir al usuario a la página de inicio de sesión
            return redirect()->to('inicio');
        }

}
