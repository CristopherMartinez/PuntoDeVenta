<?php
namespace App\Models\usuario;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class OrdenesUsuario extends Model
{
        protected $table = 'ordenesusuario';
        protected $primaryKey = 'idOrden';
        protected $returnType = 'array';
        protected $allowedFields = ['idOrden','idVideojuego','nombre','consola','precio','cantidad'];
        
        
        public function getDetalleOrden($idOrden){
                $query = $this->db->query("SELECT * FROM ordenesusuario WHERE idOrden = ?", array($idOrden));
                return $query->getResultArray();
        }
        
}

