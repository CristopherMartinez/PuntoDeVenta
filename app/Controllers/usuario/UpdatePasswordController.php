<?php
namespace App\Controllers\usuario;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\generico\Email;
use App\Models\generico\Lanzamientos;
use App\Models\usuario\Usuarios;

class UpdatePasswordController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();

    }

    //Mostrar vista de actualizar password
    public function showUpdatePassword(){
        $vista= view('genericos/header') .
                view('genericos/navbar').
                view('invitado/updatePassword');
        return $vista;

    }

    public function showUpdatePassword2(){
        
        $vista= view('genericos/header').
                view('genericos/navbar').
                view('invitado/updatePassword2');
        return $vista;
 
    }

    public function enviarCorreoRecuperacion(){
        $correo = $_POST['correo'];

        $user = new RegistrarUsuario();
        $res = $user->buscarPorCorreo($correo);
        
        //Si existe el correo en la bd se envia el correo
        if($res == true){
            
            $email = new Email();
            $email->sendCorreoActualizacion($correo);
            return redirect()->to('login')->with('mensaje', 'Se envio un correo con un link para actualizar la contraseña');


        }else{
            return redirect()->to('updatePassword')->with('doesntExist', 'No esta registrado el correo');

        }

    }

    public function updatePasswordTest(){

        $usuario = new RegistrarUsuario();

        $password1 = $_POST['contrasenia'];
        $password2 = $_POST['contrasenia1'];
        $correo = $_POST['correoRec'];

        $id = $usuario->traerId($correo);
        
        if($password1 == $password2){

            $contrasenia_cifrada = password_hash($password1, PASSWORD_DEFAULT);

            try {
                 //Actualizar la cantidad de inventario en la base de datos
                $data = [
                    "contrasenia" => $contrasenia_cifrada
                ];

                //Actualizar datos
                $usuario->update($id, $data);

      

            } catch (\Exception $e) {


                echo "Error al actualizar los datos del usuario: " . $e->getMessage();

                
            }
            

            return redirect()->to('updatePassword2')->with('actualizoCorrectamente', 'Se actualizo correctamente, inicia sesion de nuevo');

        }else{
            return redirect()->to('updatePassword2')->with('noCoinciden', 'Las contraseñas no coinciden');

        }



    }
    

    


}