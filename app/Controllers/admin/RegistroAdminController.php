<?php
namespace App\Controllers\admin;
use App\Models\admin\RegistrarAdmin;
use App\Models\admin\Administradores;
use App\Controllers\BaseController;

class RegistroAdminController extends BaseController{
    
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

        $generico = new Administradores();
        $data =  array(
            'administradores' => $generico->getAllAdmins(),
        );

        $vista= view('admin/navbarAdmin').
                view('admin/registroAdmin',$data);
        return $vista;
    }

    public function guardar_admin(){

        $contrasenia_cifrada = password_hash($_POST["contrasenia"], PASSWORD_DEFAULT);

        $data = [
            "nombre"=>$_POST["nombre"],
            "apellidos"=>$_POST["apellidos"],
            "correoElectronico"=>$_POST["correoElectronico"],
            "telefono"=>$_POST["telefono"],
            "direccion"=>$_POST["direccion"],
            "contrasenia"=>$contrasenia_cifrada
        ];

          $mregistrar=new RegistrarAdmin();
        //Este es el primer metodo de insercion
        if($mregistrar->insert($data)==false){
            //var_dump proporcina informacion sobre el tamaño del array o los elementos que lo componen
           var_dump($mregistrar->errors());
        }

        return redirect()->to('admin/registroAdmin'); //para regresar a pagina anterior 

    }

}
