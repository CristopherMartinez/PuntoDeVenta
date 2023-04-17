<?php
namespace App\Controllers\invitado;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\usuario\UserModel;
use CodeIgniter\Exceptions\AlertError;
use App\Models\Videojuegos;


class RegisterController extends BaseController{
    
    public function index(){
        $vista= view('genericos/navbar').
                view('genericos/header').
                view('invitado/register');
        return $vista;
    }

    protected $validation;

    // public function guardar_persona1()
    // {
    //     // Cargar librerías y helpers
    //     helper(['form', 'url']);
    //     $this->validation = \Config\Services::validation();

    //     // Definir reglas de validación
    //     $this->validation->setRules([
    //         'nombre' => 'required|min_length[3]',
    //         'apellidos' => 'required|min_length[3]',
    //         'correo' => 'required|valid_email',
    //         'direccion' => 'required',
    //         'telefono' => 'required',
    //         'contrasenia' => 'required|min_length[6]',
    //     ]);

    //     // Validar campos del formulario
    //     if (!$this->validation->withRequest($this->request)->run()) {
    //         // Si la validación falla, mostrar errores en la vista
    //         $data = [
    //             'validation' => $this->validation,
    //         ];
    //         return view('formulario', $data);
    //     }
    //     // Si la validación es exitosa, procesar los datos del formulario
    //     $mregistrar=new RegistrarUsuario();

    //     if (isset($_POST['correo'])) {
    //         $texto = $_POST['correo'];
        
    //         // Utilizar la función substr() para extraer las primeras 5 letras de la variable $texto
    //         $primerasCincoLetras = substr($texto, 0, 5);
    //         $numeroAleatorio = mt_rand(1000, 9999);
    //         $nombreUsuarioUnico = substr(strtolower($primerasCincoLetras), 0, 5) . $numeroAleatorio;
            
    //         while($mregistrar->verificarNombreUsuarioUnico($nombreUsuarioUnico) == True) {
    //             $numeroAleatorio = mt_rand(1000, 9999);
    //             $nombreUsuarioUnico = substr(strtolower($primerasCincoLetras), 0, 5) . $numeroAleatorio;
    //         }
    //     }

        
    //     $data = [
    //         "usuario"=>$nombreUsuarioUnico,
    //         "nombre"=>$_POST["nombre"],
    //         "apellidos"=>$_POST["apellidos"],
    //         "correo"=>$_POST["correo"],
    //         "direccion"=>$_POST["direccion"],
    //         "telefono"=>$_POST["telefono"],
    //         "contrasenia"=>$_POST["contrasenia"]
    //     ];

    //     if( $mregistrar->existeUsuario($_POST["correo"]) == False){

    //         $mregistrar->insert($data);

    //         $correo = $_POST["correo"];
    //         $generico = new RegistrarUsuario();
    //         //Aqui en esta parte guardar en $_session de codeigniter 4 y recuperar, para no hacer consulta
    //         // $usuario = array(
    //         //     'datosUsuario' => $generico->traerDatosUsuarioPorCorreo($correo)
    //         // );
          
    //         $session = session();
    //         $sessionData = [
    //             'nombre' => $_POST['nombre'],
    //             'membresia'=>1,
    //             'logged_in'=>true
    //         ];
    //         $session->set($sessionData);

    //         //Lo que se recupera
    //          $usuario = array(
    //             'nombre' => $session->get('nombre'),
    //             'membresia'=>$session->get('membresia'),
    //             // 'logged_in'=>true
    //         );
    
    //         //echo json_encode(["mensaje"=>"creado el registro"]);
    //         $vistas= view('genericos/header',$data).
    //                 view('usuario/navbarLog',$usuario).
    //                 view('invitado/carruselInicio').    
    //                 view('invitado/cardsInicio.php').
    //                 view('genericos/contacto.php').
    //                 view('genericos/footer');
    //                 // view('inicio');

    //         //Agregar $Session
    //         return $vistas;
    //     }else{
    //         //Existe el usuario Falta mostrar mensaje 
    //          return redirect()->back();
    //     }
    // }

    // public function guardar_persona(){
    //     // Recibir datos del formulario
    //     $nombre = $this->request->getPost('nombre');
    //     $apellidos = $this->request->getPost('apellidos');
    //     $correo = $this->request->getPost('correo');
    //     $direccion = $this->request->getPost('direccion');
    //     $telefono = $this->request->getPost('telefono');
    //     $contrasenia = $this->request->getPost('contrasenia');
    //     $repite_contrasenia = $this->request->getPost('repite-contrasenia');

    //     // Validar campos del formulario
    //     $validation = \Config\Services::validation();

    //     $validation->setRules([
    //         'nombre' => 'required',
    //         'apellidos' => 'required',
    //         'correo' => 'required|valid_email',
    //         'direccion' => 'required',
    //         'telefono' => 'required',
    //         'contrasenia' => 'required|min_length[8]',
    //         'repite-contrasenia' => 'required|matches[contrasenia]',
    //         'checkbox' => 'required',
    //         'g-recaptcha-response' => 'required'
    //     ]);

    //     if (!$validation->run($this->request->getPost())) {
    //         // Mostrar errores de validación en la vista
    //         $data['validation'] = $validation;
    //         $vista= view('genericos/navbar').
    //             view('genericos/header').
    //             view('invitado/register',$data);
    //         return $vista;
    //     }

    //     // Guardar persona en la base de datos
    //     $mregistrar=new RegistrarUsuario();

    //     if (isset($_POST['correo'])) {
    //         $texto = $_POST['correo'];
        
    //         // Utilizar la función substr() para extraer las primeras 5 letras de la variable $texto
    //         $primerasCincoLetras = substr($texto, 0, 5);
    //         $numeroAleatorio = mt_rand(1000, 9999);
    //         $nombreUsuarioUnico = substr(strtolower($primerasCincoLetras), 0, 5) . $numeroAleatorio;
            
    //         while($mregistrar->verificarNombreUsuarioUnico($nombreUsuarioUnico) == True) {
    //             $numeroAleatorio = mt_rand(1000, 9999);
    //             $nombreUsuarioUnico = substr(strtolower($primerasCincoLetras), 0, 5) . $numeroAleatorio;
    //         }
    //     }

        
    //     $data = [
    //         "usuario"=>$nombreUsuarioUnico,
    //         "nombre"=>$nombre,
    //         "apellidos"=>$apellidos,
    //         "correo"=>$correo,
    //         "direccion"=>$direccion,
    //         "telefono"=>$telefono,
    //         "contrasenia"=>$contrasenia
    //     ];

    //     if( $mregistrar->existeUsuario($_POST["correo"]) == False){

    //         $mregistrar->insert($data);

    //         $correo = $_POST["correo"];
    //         $generico = new RegistrarUsuario();
    //         //Aqui en esta parte guardar en $_session de codeigniter 4 y recuperar, para no hacer consulta
    //         // $usuario = array(
    //         //     'datosUsuario' => $generico->traerDatosUsuarioPorCorreo($correo)
    //         // );
          
    //         $session = session();
    //         $sessionData = [
    //             'nombre' => $_POST['nombre'],
    //             'membresia'=>1,
    //             'logged_in'=>true
    //         ];
    //         $session->set($sessionData);

    //         //Lo que se recupera
    //          $usuario = array(
    //             'nombre' => $session->get('nombre'),
    //             'membresia'=>$session->get('membresia'),
    //             // 'logged_in'=>true
    //         );
    
    //         //echo json_encode(["mensaje"=>"creado el registro"]);
    //         $vistas= view('genericos/header',$data).
    //                 view('usuario/navbarLog',$usuario).
    //                 view('invitado/carruselInicio').    
    //                 view('invitado/cardsInicio.php').
    //                 view('genericos/contacto.php').
    //                 view('genericos/footer');
    //                 // view('inicio');

    //         //Agregar $Session
    //         return $vistas;
    //     }else{
    //         //Existe el usuario Falta mostrar mensaje 
    //          return redirect()->back();
    //     }

    // }

    //Este es el correcto
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

                    $vistas= view('genericos/header',$data).
                            view('usuario/navbarLog').
                            view('invitado/carruselInicio').    
                            view('invitado/cardsInicio.php',$data2).
                            view('genericos/contacto.php').
                            view('genericos/footer');
                            // view('inicio');

                    //Agregar $Session
                    return $vistas;
                }else{
                    //Existe el usuario Falta mostrar mensaje 
                     return redirect()->back();
                }
        }

        public function cerrarSesion(){
            // Cerrar sesión
            session()->remove('logged_in');

            // Redirigir al usuario a la página de inicio de sesión
            return redirect()->to('inicio');
        }

        
        

    

}
