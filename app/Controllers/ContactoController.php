<?php
namespace App\Controllers;

class ContactoController extends BaseController{
    
    public function index(){
        $data=['titulo'=>'Inicio'];
        
        $vista= view('contacto/header',$data).
                view('contacto/menu').
                view('contacto/inicio').
                view('contacto/footer');
        return $vista;
    }

    public function catalogo($numeroCatalogo){
        $data=['titulo'=>'catalogo'];
        $catalogo=['numero'=>$numeroCatalogo];
        echo view('contacto/header',$data);
        echo view('contacto/menu');
        echo view('contacto/catalogo',$catalogo);
        echo view('contacto/footer');
    }


}
