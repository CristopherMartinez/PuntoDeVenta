<?php
namespace App\Controllers\usuario;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\Videojuegos;


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

    public function listaDeseo(){
        $datos = file_get_contents('php://input');
        $json = json_decode($datos);
        print_r($json);
    }

    // public function listaDeseo2(){
    //    localStorage.getItem();
    // }

    // public function listaDeseo() {
    //     $listaDeseo = $this->request->getPost('listaDeseo');
    
    //     // Procesar la lista de deseos
    
    //     return $this->response->setJSON(['status' => 'success', 'message' => 'Lista de deseos actualizada correctamente']);
    // }

    // public function listaDeseo() {
    //     // $this->protectCSRF(); // Add CSRF protection to this method
    //     $listaDeseo = $this->request->getPost('listaDeseo');
    
    //     // Process the wish list
    
    //     return $this->response->setJSON(['status' => 'success', 'message' => 'Wish list updated successfully']);
    // }
    
    


}