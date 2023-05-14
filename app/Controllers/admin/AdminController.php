<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\Administradores;
use App\Models\generico\Puntos;
use App\Models\usuario\RegistrarUsuario;
use App\Models\usuario\Ordenes;

class AdminController extends BaseController{

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

        $data=['titulo'=>'WorldGames'];
        $vistas= 
                view('admin/navbarAdmin').
                 view('admin/inicio',$data);
         
        return $vistas;

    }

    //Vista de usuarios
    public function recuperarclientes(){

        // Verificar si la sesión está iniciada
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        
        $usuario = new RegistrarUsuario();
        $puntos = new Puntos();

        $usuarios2 = $usuario->findAll();

        //Se hace un foreach para agregar los puntos de cada usuario y si no tiene mandar cero
        foreach ($usuarios2 as &$usuario) {
            // Obtener el puntaje del usuario actual
            $puntosUsuario = $puntos->where('idUsuario', $usuario['idUsuario'])->first();
            // Agregar los puntos al arreglo usuarios2
            $usuario['puntos'] = $puntosUsuario ? $puntosUsuario['puntos'] : 0;
        }

        //El metodo findAll trae todos los usuarios
        $usuarios = array(
            'usuarios' => $usuarios2
        );

      
        $vistas= 
                view('admin/navbarAdmin').
                 view('admin/clientes',$usuarios);
         
        return $vistas;
    }

    // //Login de admin
    // public function mostrarVistaLogin(){
    //     $vistas= 
    //             view('genericos/header').
    //             view('genericos/navbar').
    //              view('admin/login');
         
    //     return $vistas;

    // }

    //Verificar login de admin
    public function verificar_login(){
        $correo = $this->request->getPost('correo');
        $contrasenia = strval($this->request->getPost('contrasenia'));
    
        $administrador = new Administradores();
        $admin = $administrador->buscarPorCorreo($correo);
    
        if ($admin) {
            // $hash = $user['contrasenia'];
        } else {
            echo "No existe en la bd";
        }
    
        // echo "Hash: " . $hash . "<br>";
        // echo "Contraseña: " . $contrasenia . "<br>";
    
        $verificacion = password_verify($contrasenia, $admin['contrasenia']);
        if ($verificacion) {


            $generico = new RegistrarUsuario();
            // $session = session();
            // $sessionData = [
            //                 'datosUsuario' => $generico->traerDatosUsuarioPorCorreo($_POST["correo"]),
            //                 'logged_in' => true
            // ];
            // $session->set($sessionData);
            return redirect()->to('usuario/inicio');


        } else {
            echo "<script>alert('Contraseña incorrecta')</script>";
            return redirect()->to('login');
        }
    }

    
}
