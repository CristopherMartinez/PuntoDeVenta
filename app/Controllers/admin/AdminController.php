<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\Administradores;
use App\Models\usuario\RegistrarUsuario;
use App\Models\usuario\Ordenes;

class AdminController extends BaseController{
    
    public function index(){
        $data=['titulo'=>'WorldGames'];
        $vistas= 
                view('admin/navbarAdmin').
                 view('admin/inicio',$data);
         
        return $vistas;

    }

    public function recuperarclientes(){
       $usuario = new RegistrarUsuario();
        // //El metodo findAll
        $usuarios = array(
            'usuarios' => $usuario->findAll()
        );

        $vistas= 
                view('admin/navbarAdmin').
                 view('admin/clientes',$usuarios);
         
        return $vistas;
    }

    //Mostrar vista de ventas
    public function ventas(){
        $ventas = new Ordenes();
       
        $ventas = array(
            'ventas' => $ventas->findAll(),
            'videojuegos'=>$ventas->getProducts1(31) //Test
        );
        // $ventas = array(
        //     'ventas' => $ventas->findAll(),
        //     'videojuegos' => $ventas->getProducts(session('datosUsuario')[0]['usuario']),
        //     'total'=>$ventas->getProductsTotal(session('datosUsuario')[0]['usuario'])
        // );

        $vistas= 
                view('admin/navbarAdmin').
                 view('admin/ventas',$ventas);
         
        return $vistas;
    }

    //Login de admin
    public function mostrarVistaLogin(){
        $vistas= 
                view('genericos/header').
                view('genericos/navbar').
                 view('admin/login');
         
        return $vistas;

    }

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
