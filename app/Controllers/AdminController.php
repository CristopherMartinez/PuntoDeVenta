<?php
namespace App\Controllers;

class AdminController extends BaseController{
    
    public function index(){
        $data=['titulo'=>'WorldGames'];
        $vistas= 
                view('admin/navbarAdmin').
                 view('admin/inicio',$data);
         
        return $vistas;
        
       
    }


    
}
