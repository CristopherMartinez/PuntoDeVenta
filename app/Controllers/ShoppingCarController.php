<?php
namespace App\Controllers;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;



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

        // $games = array(
        //     array("title" => "Destiny 2: Lightfall", "console" => "Xbox Series S", "price" => 1500),
        //     array("title" => "Spider-Man: Miles Morales", "console" => "PlayStation 5", "price" => 2000),
        //     array("title" => "The Legend of Zelda: Breath of the Wild", "console" => "Nintendo Switch", "price" => 2500),
        //     array("title" => "Assassin's Creed Valhalla", "console" => "PC", "price" => 1800),
        // );
        
        // $data = array('games' => $games);



        // Cargar la vista del carrito de compras
        $vista = view('genericos/header') .
            view('usuario/navbarLog', $usuario) .
            view('ShoppingCar');

        return $vista;


        //Aqui tenemos que traerlos de acuerdo a la sesion iniciada
        
        // $generico = new RegistrarUsuario();
        // $usuario = array(
        //     'datosUsuario' => $generico->traerDatosUsuarioPorCorreo('martinezcristopher69@gmail.com')
        // );
       
    }


}