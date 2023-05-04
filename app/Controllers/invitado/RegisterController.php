<?php
namespace App\Controllers\invitado;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\usuario\UserModel;
use CodeIgniter\Exceptions\AlertError;
use App\Models\Videojuegos;


class RegisterController extends BaseController{

    protected $email ;

    public function __construct()
    {
        $this->email  = \Config\Services::email();

    }
    
    public function index(){
        $vista= view('genericos/navbar').
                view('genericos/header').
                view('invitado/SingUp');
        return $vista;
    }

    protected $validation;


    //Este es el correcto
    // public function guardar_persona(){

    //             $mregistrar=new RegistrarUsuario();
    //             $videojuego = new Videojuegos();
    //             $data2["videojuegos"]=$videojuego->get10VideogamesPlay();
    

    //             if (isset($_POST['correo'])) {
    //                 $texto = $_POST['correo'];
                
    //                 // Utilizar la función substr() para extraer las primeras 5 letras de la variable $texto
    //                 $primerasCincoLetras = substr($texto, 0, 5);
    //                 $numeroAleatorio = mt_rand(1000, 9999);
    //                 $nombreUsuarioUnico = substr(strtolower($primerasCincoLetras), 0, 5) . $numeroAleatorio;
                    
    //                 while($mregistrar->verificarNombreUsuarioUnico($nombreUsuarioUnico) == True) {
    //                     $numeroAleatorio = mt_rand(1000, 9999);
    //                     $nombreUsuarioUnico = substr(strtolower($primerasCincoLetras), 0, 5) . $numeroAleatorio;
    //                 }
    //             }
 
                
    //             $contrasenia_cifrada = password_hash($_POST["contrasenia"], PASSWORD_DEFAULT);

    //             $data = [
    //                 "usuario" => $nombreUsuarioUnico,
    //                 "nombre" => $_POST["nombre"],
    //                 "apellidos" => $_POST["apellidos"],
    //                 "correo" => $_POST["correo"],
    //                 "direccion" => $_POST["direccion"],
    //                 "telefono" => $_POST["telefono"],
    //                 "contrasenia" => $contrasenia_cifrada
    //             ];

    //             if( $mregistrar->existeUsuario($_POST["correo"]) == False){

    //                 $mregistrar->insert($data);
        
    //                 $generico = new RegistrarUsuario();

    //                 $session = session();
    //                 $sessionData = [
    //                     'usuario' => $nombreUsuarioUnico,
    //                     'datosUsuario'=>$generico->traerDatosUsuarioPorCorreo($_POST["correo"]),
    //                     'logged_in'=>true
    //                 ];
    //                 $session->set($sessionData);

    //                 $vistas= view('genericos/header',$data).
    //                         view('usuario/navbarLog').
    //                         view('invitado/carruselInicio').    
    //                         view('invitado/cardsInicio.php',$data2).
    //                         view('usuario/contacto.php').
    //                         view('genericos/footer');
    //                         // view('inicio');

    //                 //Agregar $Session
    //                 return $vistas;
    //             }else{
    //                 //Existe el usuario Falta mostrar mensaje 
    //                  return redirect()->back();
    //             }
    //     }

        public function guardar_persona(){

            $mregistrar=new RegistrarUsuario();
            $videojuego = new Videojuegos();
            $data2["videojuegos"]=$videojuego->get10VideogamesPlay();


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

                // $vistas= view('genericos/header',$data).
                //         view('usuario/navbarLog').
                //         view('invitado/carruselInicio').    
                //         view('invitado/cardsInicio.php',$data2).
                //         view('usuario/contacto.php').
                //         view('genericos/footer');
                //         // view('inicio');

                // //Agregar $Session
                // return $vistas;

                //llamamos al metodo de enviar correo
                $this->sendCorreo($_POST["correo"]);
                return redirect()->to('usuario/inicio');

            }else{
                //Existe el usuario Falta mostrar mensaje 
                 return redirect()->back();
            }
    }

    
    //Envia de correo de registro exitoso
    public function sendCorreo($destinatario){
        $this->email->setTo($destinatario);
        $this->email->setFrom('worldgamess975@gmail.com', 'WorldGames');
        $this->email->setSubject('Datos para iniciar sesión');
        // $body = "";


        $this->email->setMessage('Correo electronico');

        //Enviamos el correo
        $this->email->send();

        // if ($this->email->send()) {
        //     echo 'Correo electrónico enviado exitosamente.';
        // } else {
        //     $data =  $this->email->printDebugger(['headers']);
        //     print_r($data);
        // }
        
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
