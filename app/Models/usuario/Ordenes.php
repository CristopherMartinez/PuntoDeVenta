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

        public function getFolio($idOrden){
                $query = $this->db->query("SELECT folio FROM ordenes WHERE idOrden = '$idOrden'");
                $result = $query->getResultArray();
            
                // Verificamos que se haya encontrado una fila
                if (count($result) > 0) {
                    // Accedemos a la entrada del arreglo y convertimos el valor a string
                    $folio = strval($result[0]['folio']);
                    return $folio;
                } else {
                    return null; // O un valor predeterminado para indicar que no se encontró el folio
                }
        }

        // //Funcion para verificar si ya ha comprado el videojuego el usuario
        // public function verificarYGuardar($juegos) {
        //         $nuevosJuegos = array();
        //         foreach ($juegos as $juego) {
        //           list($idVideojuego, $nombre, $usuario, $consola) = $juego;
        //           $query = "SELECT * FROM videojuegosUsuario WHERE idVideojuego={$idVideojuego} AND usuario='{$usuario}' AND consola='{$consola}'";
        //           $result = $this->db->query($query);
        //           if ($result->getNumRows() === 0) {
        //             // Check if the combination of idVideojuego, usuario, and consola exists in ordenesUsuario
        //             $query = "SELECT * FROM ordenesUsuario WHERE idVideojuego={$idVideojuego} AND consola='{$consola}'";
        //             $result = $this->db->query($query);
        //             if ($result->getNumRows() === 0) {
        //               array_push($nuevosJuegos, $juego);
        //             }
        //           }
        //         }
        //         return $nuevosJuegos;
        // }
        
        public function verificarYGuardar($ventas) {
                $nuevosJuegos = array();
                foreach ($ventas as $venta) {
                    list($idVideojuego, $nombre, $usuario, $consola) = $venta;
                    $query = "SELECT * FROM videojuegosUsuario WHERE idVideojuego={$idVideojuego} AND usuario='{$usuario}' AND consola='{$consola}'";
                    $result = $this->db->query($query);
                    if ($result !== false && $result->getNumRows() === 0) {
                        $query = "SELECT * FROM ordenesUsuario WHERE idVideojuego={$idVideojuego} AND consola='{$consola}'";
                        $result = $this->db->query($query);
                        if ($result !== false && $result->getNumRows() === 0) {
                            $nuevosJuegos[] = $venta;
                            $this->videojuegosUsuario->insert($venta);
                        }
                    }
                }
                return $nuevosJuegos;
            }
            
              



            

            
            
}

