<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\usuario\RegistrarUsuario;

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
    //    $usuarios = $usuario->findAll();

    //    foreach ($usuarios as $usuario) {
    //     echo $usuario['idUsuario'] . ' - ' . $usuario['nombre'] . ' ' . $usuario['apellidos'] . '<br>';
    //     }

        // //El metodo findAll
        $usuarios = array(
            'usuarios' => $usuario->findAll()
        );



        $vistas= 
                view('admin/navbarAdmin').
                 view('admin/clientes',$usuarios);
         
        return $vistas;
    }

    
}
