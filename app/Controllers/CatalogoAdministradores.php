<?php
namespace App\Controllers;
use App\Models\Administradores;

class CatalogoAdministradores extends BaseController{
    
    public function index(){
       
        $generico = new Administradores();
        $data =  array(
            'administradores' => $generico->getAllAdmins(),
        );

        $vistas= view('admin/navbarAdmin').
                 view('admin/catalogoAdmin',$data);
                
        return $vistas;
        
       
    }


    
}