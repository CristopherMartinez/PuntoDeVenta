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