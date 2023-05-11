<?php
namespace App\Controllers\generico;
// use CodeIgniter\Controller;
use App\Models\Videojuegos;
use App\Controllers\BaseController;

//GamesPlayStation5
class GamesXboxController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    
    //Metodo para pintar en vista de perfil invitado
    public function index(){
        //$data=['titulo'=>'Videojuegos PS5'];
         $videojuegos = new Videojuegos();
         
        $data2["videojuegosXbox"]=$videojuegos->get10VideogamesXBOX();
        $consolas['consolasXbox']=$videojuegos->getConsolasXbox();

         //Agregar el idConsola y tambien 
        //XBOX ONE SERIES S (XboxOneSS)
        $cantidadjuegosXboxOneSS = [
            (object) ['identificador' => 'Xbox One SS', 'valor' => $videojuegos->getTotalGamesXboxOneSS(),'idConsola'=>'4'],
        ];
 
        $cantidadPorGeneroXBOXSS = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX One SS', 'valor' => $videojuegos->TotalGamesAventuraXBOXSS(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX One SS', 'valor' => $videojuegos->TotalGamesArcadeXBOXSS(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX One SS', 'valor' => $videojuegos->TotalGamesDeportesXBOXSS(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX One SS', 'valor' => $videojuegos->TotalGamesTerrorXBOXSS(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX One SS', 'valor' => $videojuegos->TotalGamesEstrategiaXBOXSS(),'idCategoria'=>'5'],
        ];

        //XBOX ONE X
        $CantidadXboxOneX = [
             (object) ['identificador' => 'Xbox One X', 'valor' => $videojuegos->getTotalGamesXboxOneX(),'idConsola'=>'5'],
        ];

        //CANTIDAD POR GENERO XBOX ONE X
        $CantidadGeneroXboxX = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX One X', 'valor' => $videojuegos->TotalGamesAventuraXboxX(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX One X', 'valor' => $videojuegos->TotalGamesArcadeXboxX(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX One X', 'valor' => $videojuegos->TotalGamesDeportesXboxX(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX One X', 'valor' => $videojuegos->TotalGamesTerrorXboxX(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX One X', 'valor' => $videojuegos->TotalGamesEstrategiaXboxX(),'idCategoria'=>'5'],
        ];

        //XBOX ONE S
        $CantidadXboxOneS = [
            (object) ['identificador' => 'Xbox One S', 'valor' => $videojuegos->getTotalGamesXboxOneS(),'idConsola'=>'6'],
        ];
        $CantidadGeneroXboxS = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX One S', 'valor' => $videojuegos->TotalGamesAventuraXBOXS(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX One S', 'valor' => $videojuegos->TotalGamesArcadeXBOXS(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX One S', 'valor' => $videojuegos->TotalGamesDeportesXBOXS(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX One S', 'valor' => $videojuegos->TotalGamesTerrorXBOXS(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX One S', 'valor' => $videojuegos->TotalGamesEstrategiaXBOXS(),'idCategoria'=>'5'],
        ];

        


        $data =  array(
            'videojuegosXbox' => $videojuegos->getAllVideogamesXbox(),
            'consolasXbox' => $videojuegos->getConsolasXbox(),
            'categorias' => $videojuegos->getCategoria(),
            //Xbox One SS
            'listaVideojuegos'=>$cantidadjuegosXboxOneSS,
            'totalGAventuraXboxSS'=>$cantidadPorGeneroXBOXSS,
            //Xbox One X
            'XboxOneX'=>$CantidadXboxOneX,
            'CantGeneroXboxX'=>$CantidadGeneroXboxX,
            //Xbox One S
            'XboxOneS'=>$CantidadXboxOneS,
            'CantGeneroXboxS'=>$CantidadGeneroXboxS

    
        );

        $vista= view('genericos/header').
                view('invitado/navbarInvitado').
                view('invitado/gamesXbox',$data);
        

        return $vista;
    }
    

    //Metodo para pintar en vista de perfil logueado
    public function indexGameXboxLog(){

                    
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
         
        $data2["videojuegosXbox"]=$videojuegos->get10VideogamesXBOX();
        $consolas['consolasXbox']=$videojuegos->getConsolasXbox();

         //Agregar el idConsola y tambien 
        //XBOX ONE SERIES S (XboxOneSS)
        $cantidadjuegosXboxOneSS = [
            (object) ['identificador' => 'Xbox One SS', 'valor' => $videojuegos->getTotalGamesXboxOneSS(),'idConsola'=>'4'],
        ];
 
        $cantidadPorGeneroXBOXSS = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX One SS', 'valor' => $videojuegos->TotalGamesAventuraXBOXSS(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX One SS', 'valor' => $videojuegos->TotalGamesArcadeXBOXSS(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX One SS', 'valor' => $videojuegos->TotalGamesDeportesXBOXSS(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX One SS', 'valor' => $videojuegos->TotalGamesTerrorXBOXSS(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX One SS', 'valor' => $videojuegos->TotalGamesEstrategiaXBOXSS(),'idCategoria'=>'5'],
        ];

        //XBOX ONE X
        $CantidadXboxOneX = [
             (object) ['identificador' => 'Xbox One X', 'valor' => $videojuegos->getTotalGamesXboxOneX(),'idConsola'=>'5'],
        ];

        //CANTIDAD POR GENERO XBOX ONE X
        $CantidadGeneroXboxX = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX One X', 'valor' => $videojuegos->TotalGamesAventuraXboxX(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX One X', 'valor' => $videojuegos->TotalGamesArcadeXboxX(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX One X', 'valor' => $videojuegos->TotalGamesDeportesXboxX(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX One X', 'valor' => $videojuegos->TotalGamesTerrorXboxX(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX One X', 'valor' => $videojuegos->TotalGamesEstrategiaXboxX(),'idCategoria'=>'5'],
        ];

        //XBOX ONE S
        $CantidadXboxOneS = [
            (object) ['identificador' => 'Xbox One S', 'valor' => $videojuegos->getTotalGamesXboxOneS(),'idConsola'=>'6'],
        ];
        $CantidadGeneroXboxS = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX One S', 'valor' => $videojuegos->TotalGamesAventuraXBOXS(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX One S', 'valor' => $videojuegos->TotalGamesArcadeXBOXS(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX One S', 'valor' => $videojuegos->TotalGamesDeportesXBOXS(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX One S', 'valor' => $videojuegos->TotalGamesTerrorXBOXS(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX One S', 'valor' => $videojuegos->TotalGamesEstrategiaXBOXS(),'idCategoria'=>'5'],
        ];

        $data =  array(
            'videojuegosXbox' => $videojuegos->getAllVideogamesXbox(),
            'consolasXbox' => $videojuegos->getConsolasXbox(),
            'categorias' => $videojuegos->getCategoria(),
            //Xbox One SS
            'listaVideojuegos'=>$cantidadjuegosXboxOneSS,
            'totalGAventuraXboxSS'=>$cantidadPorGeneroXBOXSS,
            //Xbox One X
            'XboxOneX'=>$CantidadXboxOneX,
            'CantGeneroXboxX'=>$CantidadGeneroXboxX,
            //Xbox One S
            'XboxOneS'=>$CantidadXboxOneS,
            'CantGeneroXboxS'=>$CantidadGeneroXboxS

    
        );

        $vista= view('genericos/header').
                view('usuario/navbarLog',$usuario).
                view('usuario/gamesXbox',$data);
        return $vista;
    }
}