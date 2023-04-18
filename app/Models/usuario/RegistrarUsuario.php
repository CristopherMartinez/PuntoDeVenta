<?php
namespace App\Models\usuario;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class RegistrarUsuario extends Model
{
        protected $table = 'usuarios';
        protected $primaryKey = 'idUsuario';
        protected $returnType = 'array';
        protected $allowedFields = ['idUsuario','usuario','nombre','apellidos','correo','direccion','telefono','contrasenia'];

        public function traerDatosUsuarioPorCorreo($correo){
                $query = $this->db->query("SELECT usuarios.usuario, membresia.nombre 
                                           FROM usuarios 
                                           JOIN membresia ON usuarios.idMembresia = membresia.idMembresia 
                                           WHERE usuarios.correo = ?", array($correo));
                return $query->getResultArray();
        }
        public function traerMembresiaPorCorreo($correo){
                $query = $this->db->query("SELECT membresia.nombre 
                                           FROM usuarios 
                                           JOIN membresia ON usuarios.idMembresia = membresia.idMembresia 
                                           WHERE usuarios.correo = ?", array($correo));
                $row = $query->getRow();
                return $row->nombre;
            }

        public function existeUsuario($correo) {
                $query = $this->db->query("SELECT COUNT(*) AS num_usuarios FROM usuarios WHERE correo = ?", array($correo));
                $result = $query->getRow();
                return $result->num_usuarios > 0;
        }

        public function verificarNombreUsuarioUnico($nombreDeUsuarioUnico){
                $query = $this->db->query("SELECT COUNT(*) AS num_usuarios FROM usuarios WHERE usuario = ?", array($nombreDeUsuarioUnico));
                $result = $query->getRow();
                return $result->num_usuarios > 0;
        }

        public function existeUsuarioCheck($email)
        {
            $query = $this->db->table($this->table)
                              ->select('*')
                              ->where('correo', $email)
                              ->get();
    
            return $query->getRow(); // Returns a single row or null
        }

        function get_email($email) {
		$row = $this->db->table($this->table)->where('user.correo',$email)->get()->getRow();
		if ($row) {
			return true;
		}
		return false;
	}

        public function obtenerUsuario($data) {
                $Usuario = $this->db->table('usuarios');
                $Usuario->where($data);
                return $Usuario->get()->getResultArray();
        }
        public function obtenerAdmin($data) {
                $Usuario = $this->db->table('administradores');
                $Usuario->where($data);
                return $Usuario->get()->getResultArray();
        }

        
}


