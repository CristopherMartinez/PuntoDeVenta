<?php
namespace App\Controllers\invitado;
use App\Models\invitado\RegistrarP;
use App\Controllers\BaseController;


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
                 view('invitado/inicio');
                
        return $vistas;
        
       
    }


    
}
