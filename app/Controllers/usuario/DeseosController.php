<?php
namespace App\Controllers\usuario;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\Videojuegos;
use App\Models\usuario\Tarjeta;
use App\Models\usuario\Ordenes;
use App\Models\usuario\OrdenesUsuario;
use App\Models\usuario\VideojuegosUsuario;

class DeseosController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();

    }
    
    public function listaDeseos(){
        
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



        // Cargar la vista de la lista de deseos
        $vista = view('genericos/header') .
                 view('usuario/navbarLog', $usuario).
                 view('usuario/listaDeseos');

        return $vista;

    }

    public function agregarAlistaDeseos(){
        // if($_SERVER['REQUEST_METHOD']=="POST"){
  
            // if (isset($_POST['Add_To_Cart'])) {
                //Checamos que exista en la sesion un arreglo llamado deseos
                if (isset($_SESSION['deseos'])) {
                    //Si existe asignamos a myitems de acuerdo a nombre y el idVideojuego
                    $myitems = array_column($_SESSION['cart'], 'nombre', 'idVideojuego');
                    if (isset($myitems[$_POST['idVideojuego']]) && $myitems[$_POST['idVideojuego']] == $_POST['nombre']) {
                        //Asignamos un setFlashData para decir que ya esta en el carrito 
                        $session = session();
                        $session->setFlashdata('error', 'Este elemento ya está en el carrito');
                        //Redirigimos a pagina inicio del usuario logueado
                        echo "<script> 
                            window.location.href = '" . base_url() . "/usuario/inicio';
                            exit();
                        </script>";
                    } else {
                        //Si aun no existe en el carrito lo insertamos
                        $count = count($_SESSION['cart']);
                        $_SESSION['cart'][$count] = array(
                            'idVideojuego' => $_POST['idVideojuego'],
                            'nombre' => $_POST['nombre'],
                            'precio' => $_POST['precio'],
                            'NombreConsola' => $_POST['nombreConsola'],
                            'Cantidad' => 1
                        );
                        $session = session();
                        $session->setFlashdata('success', 'Agregado al carrito');
                        echo "<script>
                            window.location.href = '" . base_url() . "/usuario/inicio';
                            exit();
                        </script>";
                    }
                } else {
                    //Si aun no existe en el carrito lo insertamos
                    $_SESSION['cart'][0] = array(
                        'idVideojuego' => $_POST['idVideojuego'],
                        'nombre' => $_POST['nombre'],
                        'precio' => $_POST['precio'],
                        'NombreConsola' => $_POST['nombreConsola'],
                        'Cantidad' => 1
                    );
                    $session = session();
                    $session->setFlashdata('success', 'Agregado al carrito');
                    echo "<script>          
                        window.location.href = '" . base_url() . "/index.php/usuario/inicio';
                    </script>";
                }
            // }
        // }
    }

    public function quitarDeListaDeseos(){

    }


    


}