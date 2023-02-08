<?php
namespace App\Controllers;

class Articulos extends BaseController{

    public function mensaje(){
     echo "Entrando al mensaje";
    }

    public function vista_mensaje(){
        return View("Articulos");
    }

}


