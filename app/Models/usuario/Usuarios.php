<?php
namespace App\Models\usuario;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

class Usuarios extends Model
{
        protected $table = 'usuarios';
        protected $primaryKey = 'idUsuario';
        protected $returnType = 'array';
        protected $allowedFields = ['idUsuario','idMembresia','usuario','nombre','apellidos','correo','direccion','telefono'];
 
        //Obtener el idMembresia pasandole como parametro el usuario
        public function getIdMembresia($usuario) {
            $query = $this->db->query("SELECT idMembresia FROM usuarios WHERE usuario = ?", [$usuario]);
            $row = $query->getRow();
            return $row ? $row->idMembresia : null;
        }

        public function actualizarMembresia($usuario, $nuevoIdMembresia) {
            $this->db->query("UPDATE usuarios SET idMembresia = ? WHERE usuario = ?", [$nuevoIdMembresia, $usuario]);
        }

        public function getIdUser($usuario){
            $query = $this->db->query("SELECT idUsuario FROM usuarios WHERE usuario = ?", [$usuario]);
            $row = $query->getRow();
            return $row ? $row->idUsuario : null;
        }
        
        
}
