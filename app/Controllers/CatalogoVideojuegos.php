<?php
namespace App\Controllers;
use App\Models\Videojuegos;

class CatalogoVideojuegos extends BaseController{
    
    public function index(){
       
        $generico = new Videojuegos();
        $data =  array(
            'videojuegos' => $generico->getAllVideogames(),
        );

        $vistas= view('admin/navbarAdmin').
                 view('admin/catalogoVideojuegos',$data);
                
        return $vistas;
        
       
    }


    
}
