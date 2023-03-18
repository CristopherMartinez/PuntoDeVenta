<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class RegistrarUsuario extends Model
{
        protected $table = 'usuarios';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['nombre','apellidos','correo','direccion','telefono','contrasenia'];
        
        // public function guardar_persona($param){
        //     $query=$this->db->query("INSERT INTO usuarios(nombre,apellidos,correo,direccion,telefono,contrasenia)
        //     values('".$param['nombre']."','".$param['apellidos']."','".$param
        //     ['correo']."','".$param['direccion']."','".$param['telefono']."','".$param['contrasenia']."'");
        //     return $query->getResult();
        // }
        public function traerDatosUsuario(){
                $query=$this->db->query("SELECT usuarios.correo, membresia.nombre 
                                        FROM usuarios 
                                        JOIN membresia ON usuarios.idMembresia = membresia.idMembresia");
                return $query->getResultArray();
        }
        
}


