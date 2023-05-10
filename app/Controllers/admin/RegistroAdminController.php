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

        $contrasenia_cifrada = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $data = [
            "nombre"=>$_POST["nombre"],
            "apellidos"=>$_POST["apellidos"],
            "correoElectronico"=>$_POST["correo"],
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

        $session = session();
        $session->setFlashdata('registroAdmin', 'Administrador registrado correctamente');

        return redirect()->to('admin/registroAdmin'); //para regresar a pagina anterior 

    }

    public function editarAdministrador($id=null){
        $administrador = new Administradores();

        $data =  array(
            'administradores' => $administrador->getAllAdmins(),
            'administrador' => $administrador->where('idAdministrador',$id)->first()
        );


       
         $vista= view('admin/navbarAdmin').
                view('admin/registroAdmin',$data).
                view('admin/editarAdmin',$data);

                

        return $vista;

    }

    public function actualizarAdmin(){
        $admin = new Administradores();
        $id = $this->request->getPost('idAdministrador');

        $data = [
            "nombre"=>$_POST["nombre"],
            "apellidos"=>$_POST["apellidos"],
            "correoElectronico"=>$_POST["correo"],
            "telefono"=>$_POST["telefono"],
            "direccion"=>$_POST["direccion"]
        ];
    
        //Actualizar datos
        $admin->update($id,$data);

         //Mensaje
         $session = session();
         $session->setFlashdata('actualizarAdmin', 'Actualizado correctamente');
 
        return redirect()->route('admin/registroAdmin');
    }

    public function borrarAdministrador($id=null){
        
        $administrador = new Administradores();

        //Mensaje
        $session = session();
        $session->setFlashdata('borradoAdmin', 'Se ha borrado correctamente');

        //Borrado en la base de datos 
        $administrador->where('idAdministrador',$id)->delete();
         return redirect()->route('admin/registroAdmin');
    }

    public function cerrarModalEditarAdmin(){
        return redirect()->route('admin/registroAdmin');
    }

}
