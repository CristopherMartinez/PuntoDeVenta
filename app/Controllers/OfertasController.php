<?php
namespace App\Controllers;

// use CodeIgniter\Controller;

class LoginController extends BaseController{
    
    public function index(){

        $vista= view('genericos/navbar').
                view('genericos/header').
                view('genericos/ofertas');
        

        return $vista;
    }

}
