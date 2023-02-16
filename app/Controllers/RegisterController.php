<?php
namespace App\Controllers;

// use CodeIgniter\Controller;

class RegisterController extends BaseController{
    
    public function index(){
        $vista= view('genericos/navbar').
                view('genericos/header').
                view('genericos/register');
        

        return $vista;
    }

}
