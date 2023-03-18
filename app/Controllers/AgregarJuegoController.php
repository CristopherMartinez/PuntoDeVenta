<?php
namespace App\Controllers;
use App\Models\agregarVideojuego;
use App\Models\Videojuegos;

class AgregarJuegoController extends BaseController{
    
    public function index(){
        $generico = new Videojuegos();

        $dataF = array(
            'proveedores' => $generico->getProveedores(),
            'categorias' => $generico->getCategoria(),
            'consolas' => $generico->getConsolas()
        );

        $vista= view('admin/navbarAdmin').
                view('admin/registroVideojuegos',$dataF);
        return $vista;
    }

    
    

    

    public function guardar_juego(){

        $generico2 = new Videojuegos();
        $idProveedor = $generico2->getIdProveedor($_POST['idProveedor']);
        $idCategoria = $generico2->getIdCategoria($_POST['categoria']);
        $idConsola = $generico2->getIdConsola($_POST['consola']);


        $data = [
            "idProveedor"=>$idProveedor,
            "nombre"=>$_POST["nombre"],
            "descripcion"=>$_POST["descripcion"],
            "precio"=>$_POST["precio"],
            "cantidadInventario"=>$_POST["cantidadInventario"],
            "idCategoria"=> $idCategoria,
            "idConsola"=> $idConsola
        ];

  

          $mregistrar=new agregarVideojuego();
        //Este es el primer metodo de insercion
        if($mregistrar->insert($data)==false){
            //var_dump proporcina informacion sobre el tamaño del array o los elementos que lo componen
           var_dump($mregistrar->errors());
        }

         return redirect()->back(); //para regresar a pagina anterior 

    }







}
