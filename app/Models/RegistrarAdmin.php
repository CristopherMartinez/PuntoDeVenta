<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class RegistrarAdmin extends Model
{
        protected $table = 'administradores';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['nombre','apellidos','correoElectronico','telefono','direccion','contrasenia'];
        
        // public function guardar_persona($param){
        //     $query=$this->db->query("INSERT INTO usuarios(nombre,apellidos,correo,direccion,telefono,contrasenia)
        //     values('".$param['nombre']."','".$param['apellidos']."','".$param
        //     ['correo']."','".$param['direccion']."','".$param['telefono']."','".$param['contrasenia']."'");
        //     return $query->getResult();
        // }

}

