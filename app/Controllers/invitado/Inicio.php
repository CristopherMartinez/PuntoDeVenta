<?php
namespace App\Controllers\invitado;
use App\Models\invitado\RegistrarP;
use App\Controllers\BaseController;
use App\Models\Videojuegos;
use App\Models\generico\Membresias;

class Inicio extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    
    
    //Index para usuario invitado
    public function index(){
        $data=['titulo'=>'WorldGames'];

        $videojuego = new Videojuegos();
        $data2["videojuegos"]=$videojuego->get10VideogamesPlay();

        $vistas= view('genericos/header',$data).
                 view('genericos/navbar').
                 view('invitado/jumbotron.php').  
                 view('invitado/carruselInicio').    
                 view('invitado/cardsInicio.php',$data2).
                 view('usuario/contacto.php').
                 view('invitado/image').
                 view('genericos/footer');
                //  view('invitado/inicio');      
        return $vistas;
    }

    //Index para usuario Logueado
    public function indexLog(){
        $data=['titulo'=>'WorldGames'];

          // Verificar si la sesión está iniciada
          if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Obtener los datos del usuario de la sesión
        $session = session();
        $usuario = array(
            'nombre' => $session->get('nombre'),
            'membresia' => $session->get('membresia'),
        );

        $videojuego = new Videojuegos();
        // $data2["videojuegos"]=$videojuego->get10VideogamesPlay();
        $data2["videojuegos"]=$videojuego->getVideogamesCartTest();

        $membresia = new Membresias();
        $data3["membresias"] = $membresia->findAll();


        $vista= view('genericos/header').
                view('usuario/navbarLog',$usuario).
                view('invitado/carruselInicio').               
                view('usuario/cardsGames',$data2).
                view('usuario/memberships',$data3).
                view('usuario/contacto').
                view('invitado/image').
                view('usuario/misionVision'). 
                view('genericos/footer').
                view('usuario/inicio');
        return $vista;
    } 

}
