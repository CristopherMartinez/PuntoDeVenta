<?php
namespace App\Controllers\usuario;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\Videojuegos;
use App\Models\usuario\Tarjeta;
use App\Models\usuario\Ordenes;
use App\Models\usuario\OrdenesUsuario;
use App\Models\usuario\VideojuegosUsuario;

class ChatbotController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();

    }
    
    //Desde contacto de usuario logueado
    public function vistaMensaje(){


        // Cargar la vista de la lista de mensaje
        $vista = view('usuario/message');

        return $vista;

    }
    //Desde contacto de usuario no logueado
    public function vistaMensaje2(){


        // Cargar la vista de la lista de mensaje
        $vista = view('invitado/message');

        return $vista;

    }

  
    


}