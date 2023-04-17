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


        //XBOX ONE SERIES S (XboxOneSS)
        $cantidadjuegosXboxOneSS = [
            (object) ['identificador' => 'Xbox One SS', 'valor' => $videojuegos->getTotalGamesXboxOneSS()],
        ];
        $cantidadPorGeneroXBOXSS = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX One SS', 'valor' => $videojuegos->TotalGamesAventuraXBOXSS()],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX One SS', 'valor' => $videojuegos->TotalGamesArcadeXBOXSS()],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX One SS', 'valor' => $videojuegos->TotalGamesDeportesXBOXSS()],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX One SS', 'valor' => $videojuegos->TotalGamesTerrorXBOXSS()],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX One SS', 'valor' => $videojuegos->TotalGamesEstrategiaXBOXSS()],
        ];

        //XBOX ONE X
        $CantidadXboxOneX = [
             (object) ['identificador' => 'Xbox One X', 'valor' => $videojuegos->getTotalGamesXboxOneX()],
        ];

        //CANTIDAD POR GENERO XBOX ONE X
        $CantidadGeneroXboxX = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX One X', 'valor' => $videojuegos->TotalGamesAventuraXboxX()],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX One X', 'valor' => $videojuegos->TotalGamesArcadeXboxX()],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX One X', 'valor' => $videojuegos->TotalGamesDeportesXboxX()],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX One X', 'valor' => $videojuegos->TotalGamesTerrorXboxX()],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX One X', 'valor' => $videojuegos->TotalGamesEstrategiaXboxX()],
        ];

        //XBOX ONE S
        $CantidadXboxOneS = [
            (object) ['identificador' => 'Xbox One S', 'valor' => $videojuegos->getTotalGamesXboxOneS()],
        ];
        $CantidadGeneroXboxS = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura XBOX One S', 'valor' => $videojuegos->TotalGamesAventuraXBOXS()],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade XBOX One S', 'valor' => $videojuegos->TotalGamesArcadeXBOXS()],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes XBOX One S', 'valor' => $videojuegos->TotalGamesDeportesXBOXS()],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror XBOX One S', 'valor' => $videojuegos->TotalGamesTerrorXBOXS()],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia XBOX One S', 'valor' => $videojuegos->TotalGamesEstrategiaXBOXS()],
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
        // $data =  array(
        //     'videojuegosXbox' => $videojuegos->get10VideogamesXBOX(),
        //     'consolasXbox' => $videojuegos->getConsolasXbox(),
        //     'categorias' => $videojuegos->getCategoria(),
        //     //Xbox One SS
        //     'listaVideojuegos'=>$cantidadjuegosXboxOneSS,
        //     'totalGAventuraXboxSS'=>$cantidadPorGeneroXBOXSS,
        //     //Xbox One X
        //     'XboxOneX'=>$CantidadXboxOneX,
        //     'CantGeneroXboxX'=>$CantidadGeneroXboxX,
        //     //Xbox One S
        //     'XboxOneS'=>$CantidadXboxOneS,
        //     'CantGeneroXboxS'=>$CantidadGeneroXboxS

    
        // );


        $vista= view('genericos/header').
                view('invitado/navbarInvitado').
                view('genericos/gamesXbox',$data);
        

        return $vista;
    }


}