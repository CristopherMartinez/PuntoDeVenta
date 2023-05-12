<?php
namespace App\Models\generico;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Lanzamientos extends Model
{
        protected $table = 'lanzamientosofertas';
        protected $primaryKey = 'idVideojuego';
        protected $returnType = 'array';
        protected $allowedFields = ['idVideojuego','idProveedor','nombre','descripcion','imagen','precio','cantidadInventario','idCategoria','idConsola','fechaSalida']; 
        
        
        public function getLanzamientos(){
            $query = $this->db->query("SELECT l.idVideojuego, l.nombre, l.descripcion, l.imagen, l.precio, l.cantidadInventario,l.idConsola,l.idCategoria, l.fechaSalida, c.nombre as nombreConsola 
                FROM lanzamientosofertas l 
                INNER JOIN consola c ON l.idConsola = c.idConsola 
                WHERE l.idConsola");
            return $query->getResultArray();
        }
}
