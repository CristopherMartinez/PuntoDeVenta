<?php
namespace App\Controllers\generico;
use App\Models\generico\Sugerencias;
use App\Controllers\BaseController;

class SugerenciasController extends BaseController{
    

    public function guardar_sugerencia(){
        $data = [
            "nombre"=>$_POST["nombre"],
            "correo"=>$_POST["correo"],
            "comentarios"=>$_POST["comentarios"]
        ];

          $mregistrar=new Sugerencias();
        //Este es el primer metodo de insercion
        if($mregistrar->insert($data)==false){
            //var_dump proporcina informacion sobre el tamaño del array o los elementos que lo componen
           var_dump($mregistrar->errors());
        }

        $session = session();
        $session->setFlashdata('sugerenciaEnviada', "Se han enviado los comentarios");

        return redirect()->to('inicio');
        //  return redirect()->back();  

    }
    //Guardar sugerencia desde usuario
    public function guardar_sugerencia2(){
        $data = [
            "nombre"=>$_POST["nombre"],
            "correo"=>$_POST["correo"],
            "comentarios"=>$_POST["comentarios"]
        ];

          $mregistrar=new Sugerencias();
        //Este es el primer metodo de insercion
        if($mregistrar->insert($data)==false){
            //var_dump proporcina informacion sobre el tamaño del array o los elementos que lo componen
           var_dump($mregistrar->errors());
        }

        $session = session();
        $session->setFlashdata('sugerenciaEnviada', "Se han enviado los comentarios");

        return redirect()->to('usuario/inicio');
        //  return redirect()->back();  

    }

}
