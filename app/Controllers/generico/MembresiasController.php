<?php
namespace App\Controllers\generico;
use App\Models\generico\Sugerencias;
use App\Controllers\BaseController;
use App\Models\generico\Membresias;
use App\Models\usuario\Usuarios;


class MembresiasController extends BaseController{

    public function comprarMembresiaPremium(){
        // session_start();

        $user = new Usuarios();
        //Obtenemos el idMebresia del usuario que tiene iniciada la sesión
        $session = session();
        $datosUsuario = $session->get('datosUsuario');
        $usuario = $datosUsuario[0]['usuario'];

        //el id de membresia que tiene el usuario
        $idMembresia = $user->getIdMembresia($usuario);

        //Validamos que no este comprando la misma mebresia que tiene ya asignada
        if($idMembresia == $_POST['idMembresia']){
            echo "Ya cuentas con esta membresia";

            // return redirect()->to('usuario/inicio');
        }else{

            echo "Membresia comprada correctamente, Caduca el dia ";
        }
        

       

        // echo"";

        // return redirect()->to('usuario/inicio');
    }


}