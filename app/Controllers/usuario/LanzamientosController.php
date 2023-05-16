<?php
namespace App\Controllers\usuario;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\generico\Lanzamientos;

class LanzamientosController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();

    }

    //Mostrar vista de lanzamientos de usuario invitado
    public function showLanzamientos(){

        $lanzamientos = new Lanzamientos();
        $data['lanzamientos'] = $lanzamientos->getLanzamientos();
        
         // Cargar la vista de la lista de deseos
         $vista = view('genericos/header') .
                  view('genericos/navbar').
                  view('invitado/lanzamientos',$data).
                  view('genericos/footerInvitado');
 
         return $vista;
 
     }

    //  //Mostrar vista de lanzamientos de usuario logueado
    public function showLanzamientos2(){

         // Verificar si la sesión está iniciada
         if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $lanzamientos = new Lanzamientos();
        $data['lanzamientos'] = $lanzamientos->getLanzamientos();

        // Obtener los datos del usuario de la sesión
        $session = session();
        $usuario = array(
            'nombre' => $session->get('nombre'),
            'membresia' => $session->get('membresia'),
        );
        
        // Cargar la vista de la lista de deseos
        $vista = view('genericos/header') .
                 view('usuario/navbarLog',$usuario).
                 view('usuario/lanzamientos',$data).
                 view('genericos/footer');

        return $vista;

    }
 
  
    


}