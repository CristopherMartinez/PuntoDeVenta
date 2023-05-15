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
        protected $allowedFields = ['idOrden','idVideojuego','usuario','nombre','consola','precio','cantidad'];
        
        
        public function getDetalleOrden($idOrden){
                $query = $this->db->query("SELECT * FROM ordenesusuario WHERE idOrden = ?", array($idOrden));
                return $query->getResultArray();
        }

        public function videojuegosFinales($usuario, $juegos_a_vender) {
                $query = $this->db->query("SELECT idVideojuego FROM ordenesusuario WHERE usuario = ?", [$usuario]);
                $juegos_comprados = array_column($query->getResultArray(), 'idVideojuego');
                
                $juegos_faltantes = array();
                foreach ($juegos_a_vender as $juego) {
                    if (!in_array($juego['idVideojuego'], $juegos_comprados)) {
                        $juegos_faltantes[] = $juego;
                    }
                }
                
                return $juegos_faltantes;
        }
        
}

