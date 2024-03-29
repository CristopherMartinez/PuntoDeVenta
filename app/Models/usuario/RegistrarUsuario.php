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

        //Modificacion 14 del 05
        public function traerDatosUsuarioPorCorreo($correo){
                $query = $this->db->query("SELECT usuarios.usuario,usuarios.idUsuario, membresia.nombre, usuarios.correo
                                           FROM usuarios 
                                           JOIN membresia ON usuarios.idMembresia = membresia.idMembresia 
                                           WHERE usuarios.correo = ?", array($correo));
                return $query->getResultArray();
        }

        public function traerDatosUsuarioPorUsuario($usuario){
                $query = $this->db->query("SELECT usuarios.usuario,usuarios.idUsuario,usuarios.correo, membresia.nombre 
                                           FROM usuarios 
                                           JOIN membresia ON usuarios.idMembresia = membresia.idMembresia 
                                           WHERE usuarios.usuario = ?", array($usuario));
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

        public function buscarPorCorreo($correo)
        {
        // Consultar la base de datos para obtener el usuario correspondiente al correo electrónico
        $builder = $this->db->table('usuarios');
        $builder->where('correo', $correo);
        $query = $builder->get();

        // Devolver el registro de usuario correspondiente, o false si no existe
        return $query->getRowArray() ?: false;
        }


        public function traerId($correo) {
                $query = $this->db->query("SELECT usuarios.idUsuario 
                                           FROM usuarios 
                                           WHERE usuarios.correo = ?", array($correo));
                $row = $query->getRow();
                return $row->idUsuario;
        }

        // public function getUserWith($correo) {
        //         $query = $this->db->query("SELECT usuarios.idUsuario 
        //                                    FROM usuarios 
        //                                    WHERE usuarios.correo = ?", array($correo));
        //         $row = $query->getRow();
        //         return $row->idUsuario;
        // }

        public function actualizarPassword($correo, $nuevoPassword) {
                $query = $this->db->query("UPDATE usuarios SET contrasenia = ? WHERE correo = ?", array($nuevoPassword, $correo));
                return $query->getResultArray();
        }

        public function actualizarNombre($correo, $nombre) {
                $query = $this->db->query("UPDATE usuarios SET nombre = ? WHERE correo = ?", array($nombre, $correo));
                return $query->getResultArray();
            }
            

            
            
        

            
            
      

        
}


