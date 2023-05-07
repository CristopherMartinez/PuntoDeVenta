<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\agregarVideojuego;
use App\Models\Videojuegos;
use CodeIgniter\Validation\Exceptions\ValidationException;

class AgregarJuegoController extends BaseController{

    public function __construct()
    {
        helper(['upload']);
    }

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

        $validacion = $this->validate([
            'nombre'=>'required|min_length[3]',
            'precio'=>'required|numeric',
            'cantidadInventario'=>'required|integer',
            'descripcion'=>'required',
            'imagen'=>[
                'uploaded[imagen]',
                'mime_in[imagen,image/jpeg,image/png,image/gif]',
                'max_size[imagen,4096]'
            ]
        ]);

        if(!$validacion){
            $session = session();
            //Mensaje de datos invalidos
            $session->setFlashdata('mensaje','Verifique la información ingresada');
            // $session->setFlashdata('validacionNombre','El nombre ingresado es incorrecto');
            // $session->setFlashdata('validacionDescripcion','La longitud mínima debe ser 10 letras');
            return redirect()->route('admin/registroVideojuegos')->withInput();
        }

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
            //var_dump proporcina informacion sobre el tamaño del array o los elementos que lo componen
           var_dump($mregistrar->errors());
        }
        // if ($mregistrar->insert($data)) {
        //     $mensaje = "Juego insertado correctamente";
        //     echo '<script type="text/javascript">
        //             Swal.fire({
        //                 icon: "success",
        //                 title: "¡Éxito!",
        //                 text: "'.$mensaje.'",
        //                 showConfirmButton: false,
        //                 timer: 1500
        //             });
        //           </script>';
        // }

         return redirect()->route('admin/registroVideojuegos');

        // return redirect()->back(); //para regresar a pagina anterior 
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
            // 'nombre'=>'required|min_length[3]',
            // 'precio'=>'required|numeric',
            // 'cantidadInventario'=>'required|integer',
            // 'descripcion'=>'required',
            'imagen'=>[
                'uploaded[imagen]',
                'mime_in[imagen,image/jpeg,image/png,image/gif]',
                'max_size[imagen,4096]'
            ]
        ]);

        // if(!$validacion){
        //     $session = session();
        //     //Mensaje de datos invalidos
        //     $session->setFlashdata('mensaje1','Verifique la información ingresada');
        //     $session->setFlashdata('validacionNombre1','El nombre ingresado es incorrecto');
        //     $session->setFlashdata('validacionDescripcion1','La longitud mínima debe ser 10 letras');
        //     return redirect()->route('admin/registroVideojuegos')->withInput();

        // }
        // if(!$validacion){
        //     $session = session();
        //     //Mensaje de datos invalidos
        //     $session->setFlashdata('mensaje1','Verifique la información ingresada');
        //     return redirect()->route('admin/registroVideojuegos')->withInput();
        // }

         $vista= view('admin/navbarAdmin').
                view('admin/registroVideojuegos',$dataF).
                view('admin/editarVideojuego',$datos);

                

        return $vista;


        // return redirect()->route('admin/registroVideojuegos');
        // return view('admin/editarVideojuego',$datos);
        // return redirect()->route('admin/registroVideojuegos');

    }

    public function actualizar(){
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
            'nombre' => 'required|min_length[3]',
            'precio' => 'required|numeric',
            'cantidadInventario' => 'required|integer',
            'descripcion' => 'required',
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpeg,image/png,image/gif]',
                'max_size[imagen,4096]'
            ]
            ]);
        
            // if (!$validacion) {
            //     $session = session();
            //     $session->setFlashdata('validacionNombre1', '<span style="font-size: 12px;">El nombre ingresado anteriormente es incorrecto</span>');
            //     $session->setFlashdata('validacionDescripcion1', '<span style="font-size: 12px;">La descripción debe ser minimo de 10 caracteres</span>');
            //     return redirect()->back()->with('mensaje1', 'Verifica los datos ingresados');

            // }
            // if(!is_array($validacion) || !$validacion['nombre']) {
            //     // $session = session();
            //     // $session->setFlashdata('validacionNombre1', '<span style="font-size: 12px;">El nombre ingresado anteriormente es incorrecto</span>');
            //     return redirect()->back()->with('mensaje1', 'El nombre del Videojuego ingresado es incorrecto');
            // }
            // if(!is_array($validacion) || !$validacion['descripcion']) {
            //     // $session = session();
            //     // $session->setFlashdata('validacionDescripcion1', '<span style="font-size: 12px;">La descripción debe ser minimo de 10 caracteres</span>');
            //     return redirect()->back()->with('mensaje1', 'La descripción debe ser minimo de 10 caracteres');
            // }
            

            
        
            // $img = $this->request->getFile("imagen");
        
            // if (!$img->isValid()) {
            //     // Handle image upload error
            //     return redirect()->route('admin/registroVideojuegos');
            // }
        
            // $img->move(WRITEPATH . 'uploads');
            // $rutaImagen = base_url() . '/uploads/' . $img->getName();

    
            $data = [
            "idProveedor" => $idProveedor,
            "nombre" => $nombre,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "cantidadInventario" => $cantidadInventario,
            "idCategoria" => $idCategoria,
            "idConsola" => $idConsola,
            // "imagen" => $rutaImagen
        ];
    
        //Actualizar datos
        $videojuego->update($id,$data);
        // $videojuego->where('idVideojuego', 1)->update($data);
        return redirect()->route('admin/registroVideojuegos');
    }

    public function cerrarModalEditar(){
        return redirect()->route('admin/registroVideojuegos');
    }
    
    



 
    






}