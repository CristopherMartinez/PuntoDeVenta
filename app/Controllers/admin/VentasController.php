<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\usuario\Ordenes;
use App\Models\usuario\OrdenesUsuario;

class VentasController extends BaseController{

    protected $session;
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    //Mostrar vista de ventas
    public function ventas(){

        // Verificar si la sesión está iniciada
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $ventas = new Ordenes();
       
        $ventas = array(
            'ventas' => $ventas->findAll(),
            // 'videojuegos'=>$ventas->getProducts1(31) //Test
        );

        $vistas= 
                view('admin/navbarAdmin').
                 view('admin/ventas',$ventas);
         
        return $vistas;
    }

    public function detalleVenta($id=null){
        $ordenesUsuario = new OrdenesUsuario();
        $ventas = new Ordenes();
       
        $data = array(
            'ventas' => $ventas->findAll(),
            'videojuegos' => $ordenesUsuario->getDetalleOrden($id)
        );

         $vista= view('admin/navbarAdmin').
                view('admin/ventas',$data).
                view('admin/detalleVenta',$data);

        return $vista;

    }

    public function cerrarModalDetalle(){
        return redirect()->route('admin/ventas');
    }




    
 
}
