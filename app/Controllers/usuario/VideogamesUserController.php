<?php
namespace App\Controllers\usuario;
use App\Controllers\BaseController;
use App\Models\usuario\VideojuegosUsuario;

class VideogamesUserController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();

    }

    public function getvideogamesUser(){

         // Verificar si la sesión está iniciada
         if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $videoGamesUser = new VideojuegosUsuario();

        $videojuegos['videogamesUser'] = $videoGamesUser->getVideogamesUser($_SESSION['datosUsuario'][0]['usuario']);



         // Cargar la vista de los videojuegos del usuario
         $vista =   view('genericos/header') .
                    view('usuario/navbarLog').
                    view('usuario/videogamesUser',$videojuegos);

        return $vista;

        

    }
    
  
    


}