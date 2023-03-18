<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

class Administradores extends Model
{
    protected $table = 'administradores';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['nombre','apellidos','correoElectronico','telefono','direccion','contrasenia'];
    
    public function getAllAdmins(){
        $query=$this->db->query("SELECT nombre,apellidos,correoElectronico,telefono,direccion,contrasenia FROM administradores");
        return $query->getResultArray();
    }

}
