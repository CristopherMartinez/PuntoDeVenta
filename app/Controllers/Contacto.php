<?php
namespace App\Controllers;
use App\Models\Personas;
use App\Models\Registrar;

class Contacto extends BaseController{
    
    public function index(){
        $data=['titulo'=>'Registro'];
        $mpersonas = new Personas();
        $data3["personas"]=$mpersonas->traer_personas();

        $data2=["titulo_seccion"=>"Registro para los usuarios",
                "descripcion"=>"Los siguientes datos son necesarios para la captura o el acceso
                a nuestra tienda virtual, de lo contrario no podra realizar ninguna compra,
                ni mucho menos recibir promociones u ofertas"];
        
        $vista= view('contacto/header',$data).
                view('contacto/menu').
                view('contacto/inicio').
                view('contacto/contenido',$data2).
                view("contacto/listar_personas",$data3).
                view('contacto/footer');
        return $vista;
    }

    public function catalogo($numeroCatalogo){
        $data=['titulo'=>'catalogo'];
        $catalogo=['numero'=>$numeroCatalogo];
        echo view('contacto/header',$data);
        echo view('contacto/menu');
        echo view('contacto/catalogo',$catalogo);
        echo view('contacto/footer');
    }

    public function envio_post(){
        $valor1=$_POST["nombre"];
        $valor2=$_POST["direccion"];
        $valor3=$_POST["correo"];
        echo $valor1."<br>".$valor2."<br>".$valor3;

    }

    public function guardar_persona(){
        $data = [
            "nombre"=>$_POST["nombre"],
            "direccion"=>$_POST["direccion"],
            "correo"=>$_POST["correo"]
        ];

          $mregistrar=new Registrar();
        // $mregistrar->insert($data);

        //Este es el primer metodo de insercion
        if($mregistrar->insert($data)==false){
            //var_dump proporcina informacion sobre el tamaño del array o los elementos que lo componen
           var_dump($mregistrar->errors());
        }

        //Este es el segundo metodo de insercion
        // $mregistrar->guardar_persona($data);
        
        // echo json_encode(["mensaje"=>"creado el registro"]);

        return redirect()->back(); //para regresar a pagina anterior 

    }
}
