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
        protected $allowedFields = ['idTarjeta','nombre','apellidos','numeroTarjeta','direccion','fechaVencimiento','cvv'];


        public function existeTarjeta($tarjeta) {
                $query = $this->db->query("SELECT COUNT(*) AS num_Tarjetas FROM tarjetasusuario WHERE numeroTarjeta = ?", array($tarjeta));
                $result = $query->getRow();
                return $result->num_Tarjetas > 0;
        }

        // public function recuperarTarjetas($idTarjeta){
        //     $query = $this->db->query("SELECT COUNT(*) AS num_Tarjetas FROM tarjetasusuario WHERE numeroTarjeta = ?", array($idTarjeta));
        //     $result = $query->getRow();
        //     return $result->num_Tarjetas > 0;
        // }
        
}


