<?php
namespace App\Controllers;

// use CodeIgniter\Controller;

class GamesplayStation extends BaseController{
    
    public function index(){

        $vista= view('genericos/header').
                view('genericos/navbar').
                view('genericos/gamesplayStation');
                // view('genericos/footer');
                
                
                
        

        return $vista;
    }

}