<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\agregarVideojuego;
use App\Models\Videojuegos;
use CodeIgniter\Validation\Exceptions\ValidationException;

class AgregarJuegoController extends BaseController{

    protected $session;
    protected $validacion;
    
    public function __construct()
    {
        helper(['upload']);
        $this->session = \Config\Services::session();
        $this->validacion = \Config\Services::validation();
    }

    public function index(){

         // Verificar si la sesión está iniciada
         if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

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

    //CORRECTO
    // public function guardar_juego(){

    //     $generico2 = new Videojuegos();
    //     $idProveedor = $generico2->getIdProveedor($_POST['idProveedor']);
    //     $idCategoria = $generico2->getIdCategoria($_POST['categoria']);
    //     $idConsola = $generico2->getIdConsola($_POST['consola']);

    //     //Si la imagen viene vacia enviar imagen predefinida, se asigna aqui
    //     // if(empty($_FILES['imagen']['name'])){
    //     //     $session = session();
    //     //     $session->setFlashdata('mensaje','Se envia imagen predefinida aqui');

    //     //     // $img = $this->request->getFile("imagen");

    //     //     // if($validacion){
    //     //     //     $img->move('./images', $_POST['nombre'] . '.png');
    //     //     //     $rutaImagen = '../images/' . $_POST['nombre'] . '.png';
    //     //     // }else{
    //     //     //     //echo 'ERROR en la validacion de la imagen';
    //     //     //     //Mostrar mensaje de error
    //     //     //     return redirect()->route('admin/registroVideojuegos');
    //     //     // }

    //     //     // $data = [
    //     //     //     "idProveedor"=>$idProveedor,
    //     //     //     "nombre"=>$_POST["nombre"],
    //     //     //     "descripcion"=>$_POST["descripcion"],
    //     //     //     "precio"=>$_POST["precio"],
    //     //     //     "cantidadInventario"=>$_POST["cantidadInventario"],
    //     //     //     "idCategoria"=> $idCategoria,
    //     //     //     "idConsola"=> $idConsola,
    //     //     //     "imagen"=>strval($rutaImagen)
    //     //     // ];

    //     //     //   $mregistrar=new agregarVideojuego();

    //     //     // //Este es el primer metodo de insercion
    //     //     // if($mregistrar->insert($data)==false){
    //     //     //    var_dump($mregistrar->errors());
    //     //     // }


    //     //     return redirect()->route('admin/registroVideojuegos')->withInput();

    //     // }
        
    //     $validacion = $this->validate([
    //         'imagen'=>[
    //             'uploaded[imagen]',
    //             'mime_in[imagen,image/jpeg,image/png,image/gif]',
    //             'max_size[imagen,4096]'
    //         ]
    //     ]);
        
    //     //Si no viene vacia se valida la imagen
    //     if(!$validacion){
    //         $session = session();
    //         //Imagen invalida
    //         $session->setFlashdata('mensaje','La imagen es invalida');
    //         return redirect()->route('admin/registroVideojuegos')->withInput();
    //     }
        
    //     //Se envian los datos con la imagen seleccionada

    //     $img = $this->request->getFile("imagen");

    //     if($validacion){
    //         $img->move('./images', $_POST['nombre'] . '.png');
    //         $rutaImagen = '../images/' . $_POST['nombre'] . '.png';
    //     }else{
    //         //echo 'ERROR en la validacion de la imagen';
    //         //Mostrar mensaje de error
    //         return redirect()->route('admin/registroVideojuegos');
    //     }

    //     $data = [
    //         "idProveedor"=>$idProveedor,
    //         "nombre"=>$_POST["nombre"],
    //         "descripcion"=>$_POST["descripcion"],
    //         "precio"=>$_POST["precio"],
    //         "cantidadInventario"=>$_POST["cantidadInventario"],
    //         "idCategoria"=> $idCategoria,
    //         "idConsola"=> $idConsola,
    //         "imagen"=>strval($rutaImagen)
    //     ];

    //       $mregistrar=new agregarVideojuego();

    //     //Este es el primer metodo de insercion
    //     if($mregistrar->insert($data)==false){
    //        var_dump($mregistrar->errors());
    //     }

    //     $session = session();
    //     $session->setFlashdata('validacionCorrecta','Se ha agregado el juego');

    //      return redirect()->route('admin/registroVideojuegos');

    // }

    public function guardar_juego(){

        $generico2 = new Videojuegos();
        $idProveedor = $generico2->getIdProveedor($_POST['idProveedor']);
        $idCategoria = $generico2->getIdCategoria($_POST['categoria']);
        $idConsola = $generico2->getIdConsola($_POST['consola']);

        $validacion = $this->validate([
            'imagen'=>[
                'uploaded[imagen]',
                'mime_in[imagen,image/jpeg,image/png,image/gif]',
                'max_size[imagen,4096]'
            ]
        ]);
        
        //Si no viene vacia se valida la imagen
        if(!$validacion){
            $session = session();
            //Imagen invalida
            $session->setFlashdata('mensaje','La imagen es invalida');
            return redirect()->route('admin/registroVideojuegos')->withInput();
        }
        
        //Se envian los datos con la imagen seleccionada

        $img = $this->request->getFile("imagen");

        if($validacion){
            $img->move('./images', $_POST['nombre'] . '.png');
            $rutaImagen = '../images/' . $_POST['nombre'] . '.png';
        }else{
            //echo 'ERROR en la validacion de la imagen';
            //Mostrar mensaje de error
            return redirect()->route('admin/registroVideojuegos');
        }

        $data = [
            "idProveedor"=>$idProveedor,
            "nombre"=>$_POST["nombre"],
            "descripcion"=>$_POST["descripcion"],
            "precio"=>$_POST["precio"],
            "cantidadInventario"=>$_POST["cantidadInventario"],
            "idCategoria"=> $idCategoria,
            "idConsola"=> $idConsola,
            "imagen"=>strval($rutaImagen)
        ];

          $mregistrar=new agregarVideojuego();

        //Este es el primer metodo de insercion
        if($mregistrar->insert($data)==false){
           var_dump($mregistrar->errors());
        }

        $session = session();
        $session->setFlashdata('validacionCorrecta','Se ha agregado el juego');

         return redirect()->route('admin/registroVideojuegos');

    }

    public function borrar($id=null){
        
        $videojuego = new Videojuegos();
        $datosVideojuego = $videojuego->where('idVideojuego',$id)->first();

        //Borrado de archivo en carpeta images
        $ruta = str_replace('..', '.', $datosVideojuego['imagen']);
        $ruta = './' . $ruta;
        unlink($ruta);

        //Borrado en la base de datos 
        $videojuego->where('idVideojuego',$id)->delete();
         return redirect()->route('admin/registroVideojuegos');
    }

    //Mostrar datos de videojuego para actualizar
    public function editar($id=null){
        $videojuego = new Videojuegos();

        $dataF = array(
            'proveedores' => $videojuego->getProveedores(),
            'categorias' => $videojuego->getCategoria(),
            'consolas' => $videojuego->getConsolas(),
            'videojuegos' => $videojuego->getAllVideogames(),
        );

        $datos['Videojuego'] = $videojuego->where('idVideojuego',$id)->first();
        $idConsola = $datos['Videojuego']['idConsola'];
        $idProveedor = $datos['Videojuego']['idProveedor'];
        $idCategoria = $datos['Videojuego']['idProveedor'];
        $datos['Videojuego']['nombreConsola'] = $videojuego->getNombreConsola($idConsola);
        $datos['Videojuego']['nombreProveedor'] = $videojuego->getProveedorWithId($idProveedor);
        $datos['Videojuego']['nombreCategoria'] = $videojuego->getCategoriaWithId($idCategoria);


        $validacion = $this->validate([
            'imagen'=>[
                'uploaded[imagen]',
                'mime_in[imagen,image/jpeg,image/png,image/gif]',
                'max_size[imagen,4096]'
            ]
        ]);


         $vista= view('admin/navbarAdmin').
                view('admin/registroVideojuegos',$dataF).
                view('admin/editarVideojuego',$datos);

        return $vista;

    }

    //Actualizar videojuego
    public function actualizar() {
        $videojuego = new Videojuegos();
        $id = $this->request->getPost('idVideojuego');
        $idProveedor = $videojuego->getIdProveedor($this->request->getPost('idProveedor'));
        $nombre = $this->request->getPost('nombre');
        $descripcion = $this->request->getPost('descripcion');
        $precio = $this->request->getPost('precio');
        $cantidadInventario = $this->request->getPost('cantidadInventario');
        $idCategoria = $videojuego->getIdCategoria($this->request->getPost('categoria'));
        $idConsola = $videojuego->getIdConsola($this->request->getPost('consola'));
    
        $validacion = $this->validate([
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpeg,image/png,image/gif]',
                'max_size[imagen,4096]'
            ]
        ]);
    
        $videojuegoActual = $videojuego->find($id);
        $rutaImagen = $videojuegoActual['imagen'];
    
        //Solo si cambio la imagen
        if($validacion){
            if($this->request->getFile("imagen")){
                //Borrado de archivo en carpeta images
                $ruta = str_replace('..', '.', $videojuegoActual['imagen']);
                $ruta = './' . $ruta;
                unlink($ruta);
    
                $img = $this->request->getFile("imagen");
                $img->move('./images', $_POST['nombre'] . '.png');
                $rutaImagen = '../images/' . $_POST['nombre'] . '.png';
            }
        }
    
        $data = [
            "idProveedor" => $idProveedor,
            "nombre" => $nombre,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "cantidadInventario" => $cantidadInventario,
            "idCategoria" => $idCategoria,
            "idConsola" => $idConsola,
            "imagen" => $rutaImagen
        ];
    
        $vid = new Videojuegos();
        $vid->update($id,$data);
    
        return redirect()->route('admin/registroVideojuegos');
    }
 
    public function cerrarModalEditar(){
        return redirect()->route('admin/registroVideojuegos');
    }

    
    
    



 
    






}