<?php
namespace App\Controllers;

class Inicio extends BaseController{
    
    public function index(){
        $data=['titulo'=>'Tienda'];
        $vistas= view('genericos/header',$data).
                 view('genericos/navbar').
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
