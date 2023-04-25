<?php
namespace App\Controllers\usuario;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\Videojuegos;
use App\Models\usuario\Tarjeta;
use App\Models\usuario\Ordenes;
use App\Models\usuario\OrdenesUsuario;
use App\Models\usuario\VideojuegosUsuario;

class ShoppingCarController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();

    }
    
    public function index(){
        
       // Verificar si la sesión está iniciada
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Obtener los datos del usuario de la sesión
        $session = session();
        $usuario = array(
            'nombre' => $session->get('nombre'),
            'membresia' => $session->get('membresia'),
        );

        //Prueba , aqui debemos recuperar de la session los videojuegos que se guarden en la sesion y mostrarlos
        $videojuegos = new Videojuegos();
        // $data2["videojuegos"]=$videojuegos->get10VideogamesPlay();
        $data2["videojuegos"]=$videojuegos->getVideogamesCartTest();



        // Cargar la vista del carrito de compras
        $vista = view('genericos/header') .
                 view('usuario/navbarLog', $usuario).
                 view('usuario/ShoppingCar',$data2);

        return $vista;

    }

    public function listaDeseos(){

        $videojuegos = new Videojuegos();
        // Verificar si la sesión está iniciada
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Obtener los datos del usuario de la sesión
        $session = session();
        $usuario = array(
            'nombre' => $session->get('nombre'),
            'membresia' => $session->get('membresia'),
        );

        //Prueba
        $data2["deseos"]=$videojuegos->getVideogamesCartTest();


          
          $vista = view('genericos/header').
                   view('usuario/navbarLog',$usuario).
                   view('usuario/listaDeseos',$data2);

                //    view('genericos/footer');

                // print_r(base_url().'/js/recibirDatos.php');
           
           return $vista;
    }

    public function obtenerDeseos(){
        // $datos = file_get_contents('php://input');
        // $json = json_decode($datos);
        // print_r($json);
        print_r($_POST);
    }

    public function mostrarDeseos(){
        return view('usuario/listaDeseos2');

    }

    public function   listaCarrito(){
        $vista = view('genericos/header') .
                 view('usuario/navbarLog').
                 view('usuario/listaCarrito');

        return $vista;
    }

    public function manejadorCarrito(){
        $vista =    view('genericos/header') .
                    view('usuario/navbarLog').
                    view('usuario/manejadorCarrito');

        return $vista;

    }

    public function guardarTarjeta(){
        $tarjeta = new Tarjeta();
    
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST["apellidos"],
            "numeroTarjeta" => $_POST["tarjeta"],
            "direccion" => $_POST["direccion"],
            "fechaVencimiento" => $_POST["fechaVencimiento"],
            "cvv" => $_POST["cvv"],
        ];
    
        if($tarjeta->existeTarjeta($_POST["tarjeta"]) == False){
    
            $tarjeta->insert($data);
            $session = session();
            $session->setFlashdata('success', 'Se agrego correctamente la tarjeta');
            return redirect()->to('usuario/listaCarrito');
        }else{
            //ya existe la tarjeta 
            $session = session();
            $session->setFlashdata('error', 'Ya está dada de alta esta tarjeta');
            return redirect()->to('usuario/listaCarrito');
        }
    }

    public function comprar(){
        $tarjeta = new Ordenes();
        //Generamos un folio aleatorio
        $folio = rand(1000000000, 9999999999);
        //Obtenemos la fecha actual y hora
        $fechaVenta = date('Y-m-d H:i:s');

        //Se genera arreglo con datos de la venta
        $data = [
            "folio"=> $folio,
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST["apellidos"],
            "numeroTarjeta" => $_POST["tarjeta"],
            "direccion" => $_POST["direccion"],
            "fechaVencimiento" => $_POST["fechaVencimiento"],
            "cvv" => $_POST["cvv"],
            "fechaVenta"=> $fechaVenta
        ];

        $tarjeta->insert($data);
        //Obtenemos el idOrden que se genero automaticamente 
        $idOrden = $tarjeta->getConnection()->insert_id;

         $tarjeta = new OrdenesUsuario();

        session_start();

        // Creamos un arreglo para almacenar los datos de todas las ventas
        $ventas = [];

        if(isset($_SESSION['cart'])){

        foreach ($_SESSION['cart'] as $key => $values) {
            $nombre = $values['nombre'];
            $precio = $values['precio'];
            $cantidad = $values['Cantidad'];
            $idVideojuego = $values['idVideojuego'];

            // Agregamos los datos de la venta al arreglo de ventas
            $ventas[] = [
                "idOrden" => $idOrden,
                "idVideojuego"=>$idVideojuego,
                "nombre" => $nombre,
                "precio" => $precio,
                "cantidad" => $cantidad,
            ];
            
        }

        // Insertamos los datos de todas las ventas en la tabla de ordenesUsuario
        foreach ($ventas as $venta) {
            $tarjeta->insert($venta);
        }

        //Se llama a funcion para agregar a tabla de VideojuegosUsuario mandando como parametro el idOrden
         $this->addToVideojuegosUsuario();


        // Eliminamos el carrito de la sesión
        unset($_SESSION['cart']);

        // Mostramos un mensaje
        $session = session();
        $session->setFlashdata('success', 'Se realizó la compra correctamente');

        return redirect()->to('usuario/listaCarrito');
        }else{
            
            //Mostrar mensaje de que no hay en el carrito cosas
            $session = session();
            $session->setFlashdata('SinCompras', 'No hay ningun videojuego agregado al carrito');
            return redirect()->to('usuario/listaCarrito');
        }

    }

    //Realizar compra usuario insertando en Tabla de VideojuegosUsuario
    public function addToVideojuegosUsuario()
    {
         $videojuegosUsuario = new VideojuegosUsuario();


        session_start();

        // Creamos un arreglo para almacenar los datos de todas las ventas
        $ventas = [];

        if(isset($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $key => $values) {
                $nombre = $values['nombre'];
                $consola = $values['NombreConsola'];
                $idVideojuego = $values['idVideojuego'];
                $precio = $values['precio'];
    
                // Agregamos los datos de la venta al arreglo 
                $ventas[] = [
                    "usuario"=>$_SESSION['datosUsuario'][0]['usuario'],
                    "idVideojuego" => $idVideojuego,
                    "nombreVideojuego" => $nombre,
                    "consola" => $consola,
                    "precio" => $precio,
                    // "image"=>$
                ];
                
            }
    
            // Insertamos los datos de todas las ventas en la tabla de videojuegosUsuario
            foreach ($ventas as $venta) {
                $videojuegosUsuario->insert($venta);
            }
    
            // Eliminamos el carrito de la sesión
            unset($_SESSION['cart']);
    
            // Mostramos un mensaje
            $session = session();
            $session->setFlashdata('success', 'Se realizó la compra correctamente');
    
            return redirect()->to('usuario/listaCarrito');
        }else{
            //Mostrar mensaje de que no hay en el carrito cosas
            $session = session();
            $session->setFlashdata('SinCompras', 'No hay ningun videojuego agregado al carrito');
            return redirect()->to('usuario/listaCarrito');
        }

      
    }



}