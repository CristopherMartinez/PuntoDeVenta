<?php
namespace App\Controllers\generico;
// use CodeIgniter\Controller;
use App\Models\Videojuegos;
use App\Controllers\BaseController;

//GamesPlayStation5
class GamesplayStation extends BaseController{
    
    public function index(){
        //$data=['titulo'=>'Videojuegos PS5'];
         $videojuegos = new Videojuegos();
        //  $data2["videojuegos"]=$videojuegos->getVideogamesAventPS5();
         //$categorias["categorias"]=$videojuegosPS5->getCategoria(); //Traer las categorias
         //$data2["videojuegos"]=$videojuegos->getAllVideogames();
        $data2["videojuegos"]=$videojuegos->get10VideogamesPlay();

        $vista= view('genericos/header').
                view('invitado/navbarInvitado').
                view('genericos/gamesplayStation',$data2);
        

        return $vista;
    }

      

    public function guardarVideojuego(){
        $data = [
            // "idProveedor" => $_POST['idProveedor'],
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "imagen" => $_POST['imagen'],
            "precio" => $_POST['precio'],
            "cantidadInventario" => $_POST['cantidadInventario'],
            // $idCategoria = $_POST['idCategoria'],
            // $idConsola = $_POST['idConsola']
        ];

          $videoRegistrar=new Videojuegos();
        // $mregistrar->insert($data);

        //Este es el primer metodo de insercion
        if($videoRegistrar->insert($data)==false){
            //var_dump proporcina informacion sobre el tamaño del array o los elementos que lo componen
           var_dump($videoRegistrar->errors());
        }

        //Este es el segundo metodo de insercion
        // $mregistrar->guardar_persona($data);

        return redirect()->back(); //para regresar a pagina anterior 

    }

}