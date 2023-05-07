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

    public function agregarDeseo(){

        // print_r(json_encode($_SESSION));

        //Checamos que exista en la sesion un arreglo llamado deseos
        if (isset($_SESSION['deseos'])) {
            //Si existe asignamos a myitems de acuerdo a nombre y el idVideojuego
            $myitems = array_column($_SESSION['deseos'], 'nombreDeseo', 'idVideojuegoDeseo');
            if (isset($myitems[$_POST['idVideojuegoDeseo']]) && $myitems[$_POST['idVideojuegoDeseo']] == $_POST['nombreDeseo']) {
                //Asignamos un setFlashData para decir que ya esta en la lista de deseos
                $session = session();
                $session->setFlashdata('yaEstaEnListaDeseos', 'Este elemento ya está en la lista de deseos');
                //Redirigimos a pagina inicio del usuario logueado
                return redirect()->to('usuario/inicio');

            } else {
                //Si aun no existe en el carrito lo insertamos
                $count = count($_SESSION['deseos']);
                $_SESSION['deseos'][$count] = array(
                    'idVideojuegoDeseo' => $_POST['idVideojuegoDeseo'],
                    'nombreDeseo' => $_POST['nombreDeseo'],
                    'precioDeseo' => $_POST['precioDeseo'],
                    'nombreConsolaDeseo' => $_POST['nombreConsolaDeseo'],
                    'imagen' => $_POST['imagenDeseo'],
                    'descripcion' => $_POST['descripcionDeseo'],
                    'cantidadDeseo' => 1
                );
                $session = session();
                $session->setFlashdata('agregadoDeseos', 'Agregado a lista de Deseos');

                return redirect()->to('usuario/inicio');
            }
        } else {
            //Si aun no existe en el carrito lo insertamos
            $_SESSION['deseos'][0] = array(
                'idVideojuegoDeseo' => $_POST['idVideojuegoDeseo'],
                'nombreDeseo' => $_POST['nombreDeseo'],
                'precioDeseo' => $_POST['precioDeseo'],
                'nombreConsolaDeseo' => $_POST['nombreConsolaDeseo'],
                'imagen' => $_POST['imagenDeseo'],
                'descripcion' => $_POST['descripcionDeseo'],
                'cantidadDeseo' => 1
            );
            $session = session();
            $session->setFlashdata('agregadoDeseos', 'Agregado a lista de Deseos');

            return redirect()->to('usuario/inicio');
        }
    }

    public function eliminarDeseos(){
        session_start();

        if(isset($_SESSION['deseos'])){
            unset($_SESSION['deseos']);
            $session = session();
            $session->setFlashdata('EliminarDeseos', 'Se han eliminados tus deseos correctamente');
            return redirect()->to('usuario/listaDeseos');

        }else{
            //Mostrar mensaje de que no hay deseos
            $session = session();
            $session->setFlashdata('sinDeseos', 'No hay deseos agregados');
            return redirect()->to('usuario/listaDeseos');

        }
    }


    


}