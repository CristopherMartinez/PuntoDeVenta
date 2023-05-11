<?php
namespace App\Controllers\invitado;
use App\Models\invitado\RegistrarP;
use App\Controllers\BaseController;
use App\Models\Videojuegos;
use App\Models\generico\Membresias;
use App\Models\usuario\Tarjeta;

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
        // $data2["videojuegos"]=$videojuego->get10VideogamesPlay();
        $data2["videojuegos"]=$videojuego->getVideogamesCartInicio();

        $vistas= view('genericos/header',$data).
                 view('genericos/navbar').
                 view('invitado/jumbotron.php').  
                 view('invitado/carruselInicio').    
                 view('invitado/cardsInicio.php',$data2).
                 view('invitado/memberships').                
                 view('usuario/misionVision'). 
                 view('invitado/image').
                 view('usuario/contacto.php').
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
        $data2["videojuegos"]=$videojuego->getVideogamesCartInicio();

        $membresia = new Membresias();
        $data3["membresias"] = $membresia->findAll();

    //     //RecuperarTarjetas
    //     $tarjeta = new Tarjeta();
    //     $data["tarjetas"]=$tarjeta->recuperarTarjetas($_SESSION['datosUsuario'][0]['usuario']);
       
    //     //DataFinal a memberships
    //     $dataFMemberships = array(
    //        'membresias' => $membresia->findAll(),
    //        'tarjetas' => $tarjeta->recuperarTarjetas($_SESSION['datosUsuario'][0]['usuario']),
    //    );


        $vista= view('genericos/header').
                view('usuario/navbarLog',$usuario).
                view('invitado/carruselInicio').  
                view('usuario/cardsGames',$data2).
                view('usuario/memberships',$data3).
                view('usuario/misionVision'). 
                view('invitado/image').
                view('usuario/contacto').
                view('genericos/footer').
                view('usuario/inicio');
        return $vista;
    } 

    // //Pagina nosotros invitado
    // public function pageNosotrosinvitado(){

    //      $vista = view('genericos/header') .
    //               view('genericos/navbar').
    //               view('invitado/nosotros');
 
    //      return $vista;
 
    //  }
    //Pagina nosotros Logueada
    public function pageNosotros(){
        
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
  
         // Cargar la vista del carrito de compras
         $vista = view('genericos/header') .
                  view('usuario/navbarLog',$usuario).
                  view('usuario/nosotros');
 
         return $vista;
 
     }
 

}
