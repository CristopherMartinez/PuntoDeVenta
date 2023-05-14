<?php
namespace App\Models\usuario;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Tarjeta extends Model
{
        protected $table = 'tarjetasusuario';
        protected $primaryKey = 'idTarjeta';
        protected $returnType = 'array';
        protected $allowedFields = ['idTarjeta','usuario','nombre','apellidos','numeroTarjeta','direccion','fechaVencimiento','cvv'];


        public function existeTarjeta($tarjeta) {
                $query = $this->db->query("SELECT COUNT(*) AS num_Tarjetas FROM tarjetasusuario WHERE numeroTarjeta = ?", array($tarjeta));
                $result = $query->getRow();
                return $result->num_Tarjetas > 0;
        }
        public function recuperarTarjetas($usuario) {
                $query = $this->db->query("SELECT numeroTarjeta FROM tarjetasusuario WHERE usuario = ?", array($usuario));
                return $query->getResultArray();
        }

        //Funcion para recuperar el cvv y la fecha de vencimiento de la tarjeta del usuario
        public function recuperarDatosTarjeta($usuario, $tarjeta) {
                $query = $this->db->query("SELECT * FROM tarjetasusuario WHERE usuario = ? AND numeroTarjeta = ?", array($usuario, $tarjeta));
                return $query->getResultArray();
        }

        public function contarTarjetas($usuario) {
                $query = $this->db->query("SELECT COUNT(*) as total FROM tarjetasusuario WHERE usuario = ?", array($usuario));
                $result = $query->getRow();
                return $result->total;
            }
            
            
}


