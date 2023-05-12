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

        $email = new Email();
        $email->sendCorreoActualizacion($correo);

        // echo "<script>localStorage.setItem('email', '" . $correo . "');</script>";
    

        
        return redirect()->to('updatePassword');

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

                echo"
                <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Actualización de contraseña',
                    text:'Se ha enviado a tu correo un link para actualizar contraseña',
                    showConfirmButton: false,
                    timer: 2000
                });
                </script>
                ";

      

            } catch (\Exception $e) {


                echo "Error al actualizar los datos del usuario: " . $e->getMessage();

                
            }

             // $session = session();
            // $session->setFlashdata('passwordDif', 'No coinciden los dos passwords, verificar');
          
            return redirect()->to('updatePassword2');

        }



    }
    

    


}