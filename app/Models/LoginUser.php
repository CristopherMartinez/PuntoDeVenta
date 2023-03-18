<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

class LoginUser extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['correo','contrasenia'];
    
    //Funcion para verificar el login 
    public function login($correo,$contrasenia){
        $this->load->database();

        $query=$this->db->query("SELECT correo,contrasenia FROM usuarios WHERE correo = ?,[$correo] AND contrasenia = ?,[$contrasenia]");
         return $query->getResult();
    }
    
    

}
