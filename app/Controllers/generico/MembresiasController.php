<?php
namespace App\Controllers\generico;
use App\Models\generico\Sugerencias;
use App\Controllers\BaseController;
use App\Models\generico\Membresias;
use App\Models\generico\Opiniones;
use App\Models\usuario\Usuarios;
use App\Models\usuario\RegistrarUsuario;

class MembresiasController extends BaseController{

    public function comprarMembresia(){
        $user = new Usuarios();
        //Obtenemos el idMebresia del usuario que tiene iniciada la sesión
        $session = session();
        $datosUsuario = $session->get('datosUsuario');
        $usuario = $datosUsuario[0]['usuario'];

        //el id de membresia que tiene el usuario
        $idMembresia = $user->getIdMembresia($usuario);

        //Validamos que no este comprando la misma mebresia que tiene ya asignada
        //Si ya tiene la membresia
        if($idMembresia == $_POST['idMembresia']){
            // Mostramos un mensaje
            $session = session();
            $session->setFlashdata('CuentasConMembresia', 'Ya cuentas con esta membresia');

            return redirect()->to('usuario/inicio'); 
        }
        //Si no realizamos el proceso de actualizacion
        else{
            //Obtenemos fecha actual y la fecha proxima a vencer la membresia
            $fechaActual = date('d-m-Y');
            $nuevaFecha = date('d-m-Y', strtotime('+1 month', strtotime($fechaActual)));

            //llamamos al metodo ActualizarMembresia 
            $user->actualizarMembresia($usuario,$_POST['idMembresia']);

            
            $session = session();
            //se agrego
            $generico = new RegistrarUsuario();
            $sessionData = [
                'datosUsuario' => $generico->traerDatosUsuarioPorUsuario($usuario),
            ];
            $session->set($sessionData);
            //-----
            $session->setFlashdata('MembresiaActualizada', "Se ha actualizado correctamente tu membresía, Vence: $nuevaFecha");

            return redirect()->to('usuario/inicio');
        }
    }

   


}