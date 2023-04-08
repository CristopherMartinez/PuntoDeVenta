<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos = [
            "titulo"=>"Facultad Autodidacta"
        ];
      
        return view('welcome_message',$datos);
    }

    // public function signUp()
    // {
    //     return view('Views/user/signUp');
    // }

}