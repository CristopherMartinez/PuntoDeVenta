<?php
namespace App\Models\admin;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

class Administradores extends Model
{
    protected $table = 'administradores';
    protected $primaryKey = 'idAdministrador';
    protected $returnType = 'array';
    protected $allowedFields = ['idAdministrador','nombre','apellidos','correoElectronico','telefono','direccion','contrasenia'];
    
    public function getAllAdmins(){
        $query=$this->db->query("SELECT idAdministrador,nombre,apellidos,correoElectronico,telefono,direccion,contrasenia FROM administradores");
        return $query->getResultArray();
    }

    public function buscarPorCorreo($correo)
    {
        // Consultar la base de datos para obtener el usuario correspondiente al correo electrónico
        $builder = $this->db->table('administradores');
        $builder->where('correoElectronico', $correo);
        $query = $builder->get();

        // Devolver el registro de usuario correspondiente, o false si no existe
        return $query->getRowArray() ?: false;
    }

    public function obtenerAdmin($data) {
            $admin = $this->db->table('administradores');
            $admin->where($data);
            return $admin->get()->getResultArray();
    }

    public function traerDatosAdminPorCorreo($correo){
        $query = $this->db->query("SELECT administradores.nombre, administradores.apellidos, administradores.correoElectronico,
                                   administradores.telefono         
                                   FROM administradores 
                                   WHERE administradores.correoElectronico = ?", array($correo));
        return $query->getResultArray();
}

        

}
