<?php
namespace App\Controllers\invitado;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;

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

    public function guardar_persona(){


        // if($_POST['contrasenia2'] == $_POST["contrasenia"]){
        //     if (isset($_POST['checkbox'])) {

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
                    $usuario = array(
                        'datosUsuario' => $generico->traerDatosUsuarioPorCorreo($correo)
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

        

    

}
