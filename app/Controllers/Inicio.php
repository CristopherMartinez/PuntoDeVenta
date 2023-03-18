<?php
namespace App\Controllers;
use App\Models\RegistrarP;

class Inicio extends BaseController{
    
    public function index(){
        $data=['titulo'=>'WorldGames'];
        $vistas= view('genericos/header',$data).
                 view('genericos/navbar').
                 view('invitado/jumbotron.php').  
                 view('invitado/carruselInicio').    
                 view('invitado/cardsInicio.php').
                 view('genericos/contacto.php').
                 view('invitado/image').
                 view('genericos/footer').
                 view('inicio');
                
        return $vistas;
        
       
    }


    
}
