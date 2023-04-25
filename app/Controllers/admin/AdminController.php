<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
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

    
}
