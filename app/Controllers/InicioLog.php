<?php
namespace App\Controllers;
use App\Models\RegistrarP;

class InicioLog extends BaseController{
    
    public function index(){
        $data=['titulo'=>'WorldGames'];
        $vistas= view('genericos/header',$data).
                 view('genericos/navbarLog.php').
                 view('genericos/jumbotron.php').  
                 view('genericos/carruselInicio').    
                 view('genericos/cardsInicio.php').
                 view('genericos/contacto.php').
                 view('genericos/image').
                 view('genericos/footer').
                 view('inicio');
                
        return $vistas;
        
       
    }


    
}
