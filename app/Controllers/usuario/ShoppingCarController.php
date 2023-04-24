<?php
namespace App\Controllers\usuario;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\Videojuegos;
use App\Models\usuario\Tarjeta;
use App\Models\usuario\Ordenes;
use App\Models\usuario\OrdenesUsuario;

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

        // session_start();
        // foreach($_SESSION['cart'] as $key => $values){
        //     $nombre = $values['nombre'];
        //     $precio = $values['precio'];
        //     $cantidad = $values['Cantidad'];
        // }

            //Se genera arreglo con datos de la venta
            $data = [
                "nombre" => $_POST['nombre'],
                "apellidos" => $_POST["apellidos"],
                "numeroTarjeta" => $_POST["tarjeta"],
                "direccion" => $_POST["direccion"],
                "fechaVencimiento" => $_POST["fechaVencimiento"],
                "cvv" => $_POST["cvv"],
            ];
    
            $tarjeta->insert($data);

             $tarjeta = new OrdenesUsuario();

            session_start();

            // Creamos un arreglo para almacenar los datos de todas las ventas
            $ventas = [];

            foreach ($_SESSION['cart'] as $key => $values) {
                $nombre = $values['nombre'];
                $precio = $values['precio'];
                $cantidad = $values['Cantidad'];

                // Agregamos los datos de la venta al arreglo de ventas
                $ventas[] = [
                    "nombre" => $nombre,
                    "precio" => $precio,
                    "cantidad" => $cantidad,
                ];
                
            }

            // Insertamos los datos de todas las ventas en la tabla de ventas
            foreach ($ventas as $venta) {
                $tarjeta->insert($venta);
            }

            // Eliminamos el carrito de la sesión
            unset($_SESSION['cart']);

            // Mostramos un mensaje
            $session = session();
            $session->setFlashdata('success', 'Se realizó la compra correctamente');

            return redirect()->to('usuario/listaCarrito');


            // //Eliminamos $_SESSION['cart']
            // unset($_SESSION['cart']);

            // // $session = session();
            // // $session->setFlashdata('success', 'Se realizo la compra correctamente');

            // return redirect()->to('usuario/listaCarrito');
    }

    //Realizar compra (Usuario) directamente sin registrar tarjeta
    // public function comprar()
    // {
    //     $tarjeta = new Ventas();

    //     session_start();

    //     // Creamos un arreglo para almacenar los datos de todas las ventas
    //     $ventas = [];

    //     foreach ($_SESSION['cart'] as $key => $values) {
    //         $nombre = $values['nombre'];
    //         $precio = $values['precio'];
    //         $cantidad = $values['Cantidad'];

    //         // Agregamos los datos de la venta al arreglo de ventas
    //         $ventas[] = [
    //             "nombre" => $nombre,
    //             "precio" => $precio,
    //             "cantidad" => $cantidad,
    //         ];
            
    //     }

    //     // Insertamos los datos de todas las ventas en la tabla de ventas
    //     foreach ($ventas as $venta) {
    //         $tarjeta->insert($venta);
    //     }

    //     // Eliminamos el carrito de la sesión
    //     unset($_SESSION['cart']);

    //     // Mostramos un mensaje
    //     $session = session();
    //     $session->setFlashdata('success', 'Se realizó la compra correctamente');

    //     return redirect()->to('usuario/listaCarrito');
    // }



}