<?php
namespace App\Controllers\invitado;
use App\Models\invitado\RegistrarP;
use App\Controllers\BaseController;
use App\Models\Videojuegos;

class Inicio extends BaseController{
    
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
                 view('genericos/footer').
                 view('invitado/inicio');
                
        return $vistas;
        
       
    }


    
}
