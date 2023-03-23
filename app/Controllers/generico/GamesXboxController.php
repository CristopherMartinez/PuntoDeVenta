<?php
namespace App\Controllers\generico;
// use CodeIgniter\Controller;
use App\Models\Videojuegos;
use App\Controllers\BaseController;

//GamesPlayStation5
class GamesXboxController extends BaseController{
    
    public function index(){
        //$data=['titulo'=>'Videojuegos PS5'];
         $videojuegos = new Videojuegos();
         
        $data2["videojuegosXbox"]=$videojuegos->get10VideogamesXBOX();
        $consolas['consolasXbox']=$videojuegos->getConsolasXbox();

        $cantidadVideojuegos = [
            (object) ['identificador' => 'Xbox One SS', 'valor' => $videojuegos->getTotalGamesXboxOneSS()],
            (object) ['identificador' => 'Xbox One x', 'valor' => $videojuegos->getTotalGamesXboxOneX()],
            (object) ['identificador' => 'Xbox One S', 'valor' => $videojuegos->getTotalGamesXboxOneS()],
        ];

        //XBOX ONE SERIES S (XboxOneSS)
        $cantidadPorGenero = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX SS', 'valor' => $videojuegos->TotalGamesAventuraXBOXSS()],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX SS', 'valor' => $videojuegos->TotalGamesArcadeXBOXSS()],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX SS', 'valor' => $videojuegos->TotalGamesDeportesXBOXSS()],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX SS', 'valor' => $videojuegos->TotalGamesTerrorXBOXSS()],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX SS', 'valor' => $videojuegos->TotalGamesTerrorXBOXSS()],
        ];
        
        
        

        $data =  array(
            'videojuegosXbox' => $videojuegos->get10VideogamesXBOX(),
            'consolasXbox' => $videojuegos->getConsolasXbox(),
            'categorias' => $videojuegos->getCategoria(),
            'numVideojuegos'=>$cantidadVideojuegos,
            'totalGAventuraXboxSS'=>$cantidadPorGenero
           
        );


        $vista= view('genericos/header').
                view('invitado/navbarInvitado').
                view('genericos/gamesXbox',$data);
        

        return $vista;
    }


}