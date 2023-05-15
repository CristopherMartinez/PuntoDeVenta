<?php
namespace App\Controllers\usuario;
use App\Controllers\BaseController;
use App\Models\usuario\Usuarios;
use App\Models\usuario\VideojuegosUsuario;
use App\Models\Videojuegos;

class VideogamesUserController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();

    }

    //Mostrar videojuegos usuario
    public function getvideogamesUser(){

         // Verificar si la sesión está iniciada
         if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $videoGamesUser = new VideojuegosUsuario();
        $usuario = new Usuarios();
        $videojuego = new VideojuegosUsuario();
        // $videojuegos['videogamesUser'] = $videoGamesUser->getVideogamesUser($_SESSION['datosUsuario'][0]['usuario']);

        $idUsuario = $usuario->getIdUser($_SESSION['datosUsuario'][0]['usuario']);
        $puntos = $videojuego->getPointsOfUser($idUsuario);


        $data = array(
            'videogamesUser' => $videoGamesUser->getVideogamesUser($_SESSION['datosUsuario'][0]['usuario']),
            'puntos' => $puntos
           
        );
        

         // Cargar la vista de los videojuegos del usuario
         $vista =   view('genericos/header') .
                    view('usuario/navbarLog').
                    view('usuario/videogamesUser',$data);

        return $vista;

    }

}