<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\agregarVideojuego;
use App\Models\Videojuegos;


class AgregarJuegoController extends BaseController{



    
    public function index(){

        $generico = new Videojuegos();

        $dataF = array(
            'proveedores' => $generico->getProveedores(),
            'categorias' => $generico->getCategoria(),
            'consolas' => $generico->getConsolas(),
            'videojuegos' => $generico->getAllVideogames(),
        );

        $vista= view('admin/navbarAdmin').
                view('admin/registroVideojuegos',$dataF);
        return $vista;
    }

    
    

    

    public function guardar_juego(){

        // $mysqli=include_once"../Codeigniter4/app/Controllers/conexion.php";
        $generico2 = new Videojuegos();
        $idProveedor = $generico2->getIdProveedor($_POST['idProveedor']);
        $idCategoria = $generico2->getIdCategoria($_POST['categoria']);
        $idConsola = $generico2->getIdConsola($_POST['consola']);

       // Verificar que se haya enviado un archivo
       if ($this->request->getFile('imagen')->isValid()) {
        // Mover el archivo a una ubicación temporal
        $archivo = $this->request->getFile('imagen');
        $archivo->move(FCPATH . 'temp/');

        // Leer el contenido del archivo
        $contenido = file_get_contents(FCPATH . 'temp/' . $archivo->getName());
        
        }



        $data = [
            "idProveedor"=>$idProveedor,
            "nombre"=>$_POST["nombre"],
            "descripcion"=>$_POST["descripcion"],
            "precio"=>$_POST["precio"],
            "cantidadInventario"=>$_POST["cantidadInventario"],
            "idCategoria"=> $idCategoria,
            "idConsola"=> $idConsola,
            "imagen"=>$contenido
           
        ];

  

          $mregistrar=new agregarVideojuego();
        //Este es el primer metodo de insercion
        if($mregistrar->insert($data)==false){
            //var_dump proporcina informacion sobre el tamaño del array o los elementos que lo componen
           var_dump($mregistrar->errors());
        }

        // return redirect()->route('registroVideojuegos');

        return redirect()->back(); //para regresar a pagina anterior 

    }


    public function subir_imagen()
    {
        // Verificar que se haya enviado un archivo
        if ($this->request->getFile('imagen')->isValid()) {
            // Mover el archivo a una ubicación temporal
            $archivo = $this->request->getFile('imagen');
            $archivo->move(FCPATH . 'temp/');

            // Leer el contenido del archivo
            $contenido = file_get_contents(FCPATH . 'temp/' . $archivo->getName());
            
        }

        return redirect()->back();
    }







}