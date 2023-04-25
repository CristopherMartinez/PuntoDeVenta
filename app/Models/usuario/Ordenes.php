<?php
namespace App\Models\usuario;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Ordenes extends Model
{
        protected $table = 'ordenes';
        protected $primaryKey = 'idOrden';
        protected $returnType = 'array';
        protected $allowedFields = ['idOrden','folio','usuario','nombre','apellidos','numeroTarjeta','direccion','fechaVencimiento','cvv','fechaVenta'];   
        

        public function getProducts1($idOrden){
                $query=$this->db->query("SELECT nombre,consola,precio FROM ordenesusuario WHERE idOrden = '$idOrden'");
                return $query->getResultArray();     
        }

        // //Obtener productos comprados mediante el usuario
        // public function getProducts($idOrden){
        //         $query=$this->db->query("SELECT nombreVideojuego,consola,precio FROM videojuegosusuario WHERE idOrden = '$idOrden'");
        //         return $query->getResultArray();     
        // }

        // public function getProductsTotal($usuario) {
        //         $query = $this->db->table('videojuegosusuario')
        //                       ->selectSum('precio')
        //                       ->where('usuario', $usuario)
        //                       ->get();
        //         $result = $query->getRow();
        //         return isset($result->precio) ? $result->precio : 0;
        //  }
            
            
}

