<?php
namespace App\Controllers\generico;
use App\Models\Videojuegos;
use App\Controllers\BaseController;


class GamesNintendoController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    
     //Metodo para pintar en vista de perfil invitado
     public function index(){
        //$data=['titulo'=>'Videojuegos PS5'];
         $videojuegos = new Videojuegos();
         
        $data2["videojuegosNintendo"]=$videojuegos->get10VideogamesNintendo();
        $consolas['consolasNintendo']=$videojuegos->getConsolasNintendo();

         //Agregar el idConsola y tambien 
        //Nintendo 
        $cantidadjuegosNintendo = [
            (object) ['identificador' => 'Nintendo', 'valor' => $videojuegos->getTotalGamesNintendo(),'idConsola'=>'7'],
        ];
 
        $cantidadPorGeneroNintendo = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura Nintendo', 'valor' => $videojuegos->TotalGamesAventuraNintendo(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade Nintendo', 'valor' => $videojuegos->TotalGamesArcadeNintendo(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes Nintendo', 'valor' => $videojuegos->TotalGamesDeportesNintendo(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror Nintendo', 'valor' => $videojuegos->TotalGamesTerrorNintendo(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia Nintendo', 'valor' => $videojuegos->TotalGamesEstrategiaNintendo(),'idCategoria'=>'5'],
        ];


        $data =  array(
            'videojuegosNintendo' => $videojuegos->getAllVideogamesNintendo(),
            'consolasNintendo' => $videojuegos->getConsolasNintendo(),
            'categorias' => $videojuegos->getCategoria(),

            //Nintendo
            'Nintendo'=>$cantidadjuegosNintendo,
            'CantGeneroNintendo'=>$cantidadPorGeneroNintendo

        );

        $vista= view('genericos/header').
                view('invitado/navbarInvitado').
                view('invitado/gamesNintendo',$data);
        

        return $vista;
    }

    //Metodo para pintar en vista de perfil logueado
    public function indexLog(){

                    
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

         $videojuegos = new Videojuegos();
         
        $data2["videojuegosNintendo"]=$videojuegos->get10VideogamesNintendo();
        $consolas['consolasNintendo']=$videojuegos->getConsolasNintendo();

         //Agregar el idConsola y tambien 
        //Nintendo
        $cantidadjuegosNintendo = [
            (object) ['identificador' => 'Nintendo', 'valor' => $videojuegos->getTotalGamesNintendo(),'idConsola'=>'7'],
        ];
 
        $cantidadPorGeneroNintendo = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura Nintendo', 'valor' => $videojuegos->TotalGamesAventuraNintendo(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade Nintendo', 'valor' => $videojuegos->TotalGamesArcadeNintendo(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes Nintendo', 'valor' => $videojuegos->TotalGamesDeportesNintendo(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror Nintendo', 'valor' => $videojuegos->TotalGamesTerrorNintendo(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia Nintendo', 'valor' => $videojuegos->TotalGamesEstrategiaNintendo(),'idCategoria'=>'5'],
        ];

       

        $data =  array(
            'videojuegosNintendo' => $videojuegos->getAllVideogamesNintendo(),
            'consolasNintendo' => $videojuegos->getConsolasNintendo(),
            'categorias' => $videojuegos->getCategoria(),
        
            //Nintendo
            'Nintendo'=>$cantidadjuegosNintendo,
            'CantGeneroNintendo'=>$cantidadPorGeneroNintendo

    
        );

        $vista= view('genericos/header').
                view('usuario/navbarLog',$usuario).
                view('usuario/gamesNintendo',$data);
        return $vista;
    }
}