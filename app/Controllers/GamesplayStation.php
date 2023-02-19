<?php
namespace App\Controllers;

// use CodeIgniter\Controller;

class GamesplayStation extends BaseController{
    
    public function index(){

        $vista= view('genericos/navbar').
                view('genericos/header').
                view('genericos/gamesplayStation');
        

        return $vista;
    }

}