<?php
namespace App\Models\usuario;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class RegistrarUsuario extends Model
{
        protected $table = 'usuarios';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['usuario','nombre','apellidos','correo','direccion','telefono','contrasenia'];
        
        // public function guardar_persona($param){
        //     $query=$this->db->query("INSERT INTO usuarios(nombre,apellidos,correo,direccion,telefono,contrasenia)
        //     values('".$param['nombre']."','".$param['apellidos']."','".$param
        //     ['correo']."','".$param['direccion']."','".$param['telefono']."','".$param['contrasenia']."'");
        //     return $query->getResult();
        // }
        //Traer los datos especificos del usuario que se registra o 
        // public function traerDatosUsuario(){
        //         $query=$this->db->query("SELECT usuarios.correo, membresia.nombre 
        //                                 FROM usuarios 
        //                                 JOIN membresia ON usuarios.idMembresia = membresia.idMembresia");
        //         return $query->getResultArray();
        // }

        public function traerDatosUsuarioPorCorreo($correo){
                $query = $this->db->query("SELECT usuarios.usuario, membresia.nombre 
                                           FROM usuarios 
                                           JOIN membresia ON usuarios.idMembresia = membresia.idMembresia 
                                           WHERE usuarios.correo = ?", array($correo));
                return $query->getResultArray();
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
            

        // public function verificarSiExisteUsuario($correo){
        //         $query = $this->db->query("SELECT usuarios.correo, membresia.nombre 
        //                                    FROM usuarios 
        //                                    JOIN membresia ON usuarios.idMembresia = membresia.idMembresia 
        //                                    WHERE usuarios.correo = ?", array($correo));
        //         return $query->getResultArray();
        // }

            
            
            

        // public function traerDatosUsuario(){
        //         $query=$this->db->query("SELECT usuarios.correo, membresia.nombre 
        //                                 FROM usuarios 
        //                                 JOIN membresia ON usuarios.idMembresia = membresia.idMembresia");
        //         return $query->getResultArray();
        // }
        
}


