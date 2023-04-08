<?php
namespace App\Controllers\invitado;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\usuario\UserModel;
use CodeIgniter\Exceptions\AlertError;

class RegisterController extends BaseController{
    
    
    public function index(){
        $vista= view('genericos/navbar').
                view('genericos/header').
                view('invitado/register');
        

        return $vista;
    }
    
    // public function envio_post(){
    //     $valor1=$_POST["nombre"];
    //     $valor2=$_POST["apellidos"];
    //     $valor3=$_POST["correo"];
    //     $valor4=$_POST["direccion"];
    //     $valor5=$_POST["telefono"];
    //     $valor6=$_POST["contrasenia"];
    //     echo $valor1."<br>".$valor2."<br>".$valor3."<br>".$valor4."<br>".$valor5."<br>".$valor6;

    // }

    //Test
    public function Registrar(){
        $user_model = new UserModel();
        $kq = $user_model->get_email($this->request->getPost('correo'));
        if($kq){  
            // return '<script>alert("The email address has been used");
            // window.location ="'.base_url().'/signup";
            // </script>';
            
            return redirect()->back();
        }
        $data=[
			'nombre'=>$this->request->getPost('nombre'),
			'correo'=>$this->request->getPost('correo'),
			'password'=>$this->request->getPost('password'),
            'direccion'=>$this->request->getPost('direccion'),
			'rol'=>2
		];
        
		$user_model->insert($data);
        $rs = $user_model->where('correo',$this->request->getPost('correo'))->where('password',$this->request->getPost('password'))->first();
        $session = session();
        $sessionData = [
            'nombre' => $rs['nombre'],
            'customerID' => $rs['idUsuario']
        ];
        $session->set($sessionData);
        

        // $usuario = array(
        //     'datosUsuario' => 
        // );

        // //echo json_encode(["mensaje"=>"creado el registro"]);
        $vistas= view('genericos/header',$data).
                // view('usuario/navbarLog',).
                view('invitado/carruselInicio').    
                view('invitado/cardsInicio.php').
                view('genericos/contacto.php').
                view('genericos/footer');
                view('inicio');

        //Agregar $Session
        return $vistas;
        // return redirect()->back();
		// return '<script>window.location ="'.base_url().'"</script>';
        // return index();
    }


    //Este es el correcto
    public function guardar_persona(){


        // if($_POST['contrasenia2'] == $_POST["contrasenia"]){
        //     if (isset($_POST['checkbox'])) {

                // $session = session();

                $mregistrar=new RegistrarUsuario();

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
 
                
                $data = [
                    "usuario"=>$nombreUsuarioUnico,
                    "nombre"=>$_POST["nombre"],
                    "apellidos"=>$_POST["apellidos"],
                    "correo"=>$_POST["correo"],
                    "direccion"=>$_POST["direccion"],
                    "telefono"=>$_POST["telefono"],
                    "contrasenia"=>$_POST["contrasenia"]
                ];

                if( $mregistrar->existeUsuario($_POST["correo"]) == False){

                    $mregistrar->insert($data);
        
                    $correo = $_POST["correo"];
                    $generico = new RegistrarUsuario();
                    //Aqui en esta parte guardar en $_session de codeigniter 4 y recuperar, para no hacer consulta
                    // $usuario = array(
                    //     'datosUsuario' => $generico->traerDatosUsuarioPorCorreo($correo)
                    // );
                  
                    $session = session();
                    $sessionData = [
                        'nombre' => $_POST['nombre'],
                        'membresia'=>1,
                        'logged_in'=>true
                    ];
                    $session->set($sessionData);

                    //Lo que se recupera
                     $usuario = array(
                        'nombre' => $session->get('nombre'),
                        'membresia'=>$session->get('membresia'),
                        // 'logged_in'=>true
                    );
            
                    //echo json_encode(["mensaje"=>"creado el registro"]);
                    $vistas= view('genericos/header',$data).
                            view('usuario/navbarLog',$usuario).
                            view('invitado/carruselInicio').    
                            view('invitado/cardsInicio.php').
                            view('genericos/contacto.php').
                            view('genericos/footer');
                            // view('inicio');

                    //Agregar $Session
                    return $vistas;
                }else{
                    //Existe el usuario Falta mostrar mensaje 
                     return redirect()->back();
                }

                // return redirect()->back();



            //   } else {
            //     //Poner mensaje de que no ha marcado el checkbox
            //     return redirect()->back();
            //   }
              
        
            // }else{
            //     //Poner aviso de la contraseña no es correcta
            //     return redirect()->back();
            // }

        }

        public function cerrarSesion(){
            // Cerrar sesión
            session()->remove('logged_in');

            // Redirigir al usuario a la página de inicio de sesión
            return redirect()->to('inicio');
        }

        

    

}
